<?php

namespace App\Livewire\Admin\Website\Seo;

use App\Actions\Admin\Website\Seo\UpdateGoogleSiteVerificationCode;
use App\Models\Seo;
use App\Models\User;
use Spatie\Sitemap\Tags\Url;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSiteMapForm extends Component
{
    use LivewireAlert;

    public Seo $seo;
    public bool $toogleEnter;
    public string $googleSiteVerificationCode;
    public bool $isFormValid = true;

    public function rules()
    {
        return [
            'googleSiteVerificationCode' => 'required|string|min:3',
        ];
    }

    public function mount()
    {
        $this->seo = Seo::find(
            User::where('role', 'admin')->pluck('id')
        )->first();
    }

    public function updated($property)
    {
        try {
            $this->validate();
            // Si $this->validate() n'est pas correct le script s'arrête ici
            $this->isFormValid = true;
        } catch (Exception $e) {
            $this->isFormValid = false;
        }

        $this->validateOnly($property);
    }


    public function generateSiteMap()
    {
        try {
            $sitemapPath = public_path('sitemap.xml');

            if (file_exists($sitemapPath)) {
                unlink($sitemapPath);
            }

            SitemapGenerator::create(config('app.url'))
                ->hasCrawled(function (\Spatie\Sitemap\Tags\Url $url) {
                    $path = $url->path();

                    // On skippe le /fr
                    if ($path === '/fr' || str_starts_with($path, '/fr/')) {
                        return null;
                    }

                    // On nettoie la home
                    if ($path === '' || $path === '/') {
                        $cleanUrl = \Spatie\Sitemap\Tags\Url::create(rtrim(config('app.url'), '/') . '/')
                            ->setPriority(1.0)
                            ->setChangeFrequency(\Spatie\Sitemap\Tags\Url::CHANGE_FREQUENCY_MONTHLY);
                    } else {
                        $cleanUrl = $url;
                    }

                    // On set les priorités pour les pages secondaires
                    if (in_array($path, ['/contact', '/honoraires', '/credits', '/terms-of-services'])) {
                        $cleanUrl->setPriority(0.7);
                        $cleanUrl->setChangeFrequency(\Spatie\Sitemap\Tags\Url::CHANGE_FREQUENCY_MONTHLY);
                    }

                    // === AJOUT HREF LANG ===
                    // On définit les alternates pour toutes les langues
                    $baseUrl = rtrim(config('app.url'), '/') . $path;

                    $cleanUrl->addAlternate('x-default', $baseUrl);
                    $cleanUrl->addAlternate('fr', $baseUrl);
                    $cleanUrl->addAlternate('en', $baseUrl . '/en');
                    $cleanUrl->addAlternate('es', $baseUrl . '/es');
                    $cleanUrl->addAlternate('de', $baseUrl . '/de');
                    $cleanUrl->addAlternate('it', $baseUrl . '/it');

                    return $cleanUrl;
                })
                ->writeToFile(public_path('sitemap.xml'));

            $this->alert('success', 'Sitemap file created!');
        } catch (\Throwable $th) {
            $this->alert('error', 'Whoops, looks like something went wrong!');
        }
    }

    public function copyToClipboard() {}

    public function submit()
    {
        if (UpdateGoogleSiteVerificationCode::run($this->validate(), $this->seo)) {
            $this->alert('success', 'Google Site Verification updated !');
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }

    public function render()
    {
        return view('livewire.admin.website.seo.generate-site-map-form');
    }
}
