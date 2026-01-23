<?php

namespace App\Livewire\Admin\Website;

use App\Actions\Admin\Website\UpdateWebsiteSettings;
use App\Models\Website;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class WebsiteSettingsForm extends Component
{
    public Website $websiteSettings;

    use LivewireAlert;

    // Application
    public int $maintenance;
    public string $applicationName;
    public string $emailWebsite;
    public string $addressService;
    public $faq;
    public $termsOfService;
    public $privacyPolicy;

    // Social Media Links
    public  string $linkFacebook;
    public  string $linkLinkedin;
    public  string $linkTwitter;
    public  string $linkPinterest;
    public  string $linkInstagram;

    // Phone Website & WhatsApp
    public string $phoneWebsite;
    public string $countryCodePhoneWebsite;
    public string $whatsAppPhone;
    public string $countryCodeWhatsAppPhone;

    // Iframe Google Maps
    public string $iframeLinkGoogleMapSrc;

    // Calendly URL
    public string $calendlyUrl;

    // Validation
    public bool $isFormValid = true;

    public function rules()
    {
        return [
            'maintenance' => 'required',
            'applicationName' => 'nullable|string|min:3|max:60',
            'emailWebsite' => 'nullable|string|email',
            'addressService' => 'nullable|string|min:3',
            'phoneWebsite' => 'nullable|string|regex:/^\d{9}$/',
            'whatsAppPhone' => 'nullable|string|regex:/^\d{9}$/',
            'countryCodePhoneWebsite' => 'nullable|string|regex:/^\+\d{1,4}$/',
            'countryCodeWhatsAppPhone' => 'nullable|string|regex:/^\+\d{1,4}$/',
            'iframeLinkGoogleMapSrc' => 'nullable|string',
            'calendlyUrl' => 'nullable|string',
            'faq' => 'nullable|string',
            'termsOfService' => 'nullable|string',
            'privacyPolicy' => 'nullable|string',
            'linkFacebook' => 'nullable|string',
            'linkTwitter' => 'nullable|string',
            'linkPinterest' => 'nullable|string',
            'linkInstagram' => 'nullable|string',
            'linkLinkedin' => 'nullable|string',
        ];
    }

    public function mount()
    {
        $this->websiteSettings = Website::getSettings();

        $this->maintenance = $this->websiteSettings->maintenance;
        $this->applicationName = $this->websiteSettings->application_name;
        $this->emailWebsite = $this->websiteSettings->email_website;
        $this->addressService = $this->websiteSettings->address_service;

        $this->phoneWebsite = $this->websiteSettings->phone_website;
        $this->countryCodePhoneWebsite = $this->websiteSettings->country_code_phone_website;
        $this->whatsAppPhone = $this->websiteSettings->whatsapp_phone;
        $this->countryCodeWhatsAppPhone = $this->websiteSettings->country_code_whatsapp_phone;

        $this->iframeLinkGoogleMapSrc = $this->websiteSettings->iframe_link_google_map_src;
        $this->calendlyUrl = $this->websiteSettings->calendly_url;

        $this->faq = $this->websiteSettings->faq;
        $this->termsOfService = $this->websiteSettings->terms_of_service;
        $this->privacyPolicy = $this->websiteSettings->privacy_policy;

        $this->linkFacebook = $this->websiteSettings->link_facebook;
        $this->linkTwitter = $this->websiteSettings->link_twitter;
        $this->linkPinterest = $this->websiteSettings->link_pinterest;
        $this->linkInstagram = $this->websiteSettings->link_instagram;
        $this->linkLinkedin = $this->websiteSettings->link_linkedin;
    }

    public function updatedAddressService($value)
    {
        $this->addressService = $value;
        $addressForMap = str_replace(' ', '+', $this->addressService);
        $this->iframeLinkGoogleMapSrc = "https://www.google.com/maps?q=" . $addressForMap . "&output=embed&z=18";
    }


    public function updated()
    {
        $this->isFormValid = false;
        $this->validate();
        $this->isFormValid = true;
    }

    public function submit()
    {
        if (UpdateWebsiteSettings::run($this->validate(), $this->websiteSettings)) {
            $this->alert('success', 'Settings Updated !');
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }


    public function render()
    {
        return view('livewire.admin.website.website-settings-form');
    }
}
