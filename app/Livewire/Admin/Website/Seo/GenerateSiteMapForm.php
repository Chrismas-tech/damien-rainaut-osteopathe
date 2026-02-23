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
                ->hasCrawled(function (Url $url) {
                    $path = $url->path();

                    if ($path === '' || $path === '/') {
                        return Url::create(rtrim(config('app.url'), '/') . '/')
                            ->setPriority(1.0)
                            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY);
                    }

                    // Skip /fr si c'est duplicate de la home
                    if ($path === '/fr' || str_starts_with($path, '/fr/')) {
                        return null;
                    }

                    return $url;
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
