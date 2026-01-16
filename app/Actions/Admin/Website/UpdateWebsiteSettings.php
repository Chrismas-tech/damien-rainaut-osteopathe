<?php

namespace App\Actions\Admin\Website;

use App\Models\Website;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateWebsiteSettings
{
    use AsAction;

    public function handle(array $attributes, Website $websiteSettings)
    {
        return $websiteSettings->update([
            'application_name' => $attributes['applicationName'],
            'email_website' => $attributes['emailWebsite'],
            'address_service' => $attributes['addressService'],
            'phone_website' => $attributes['phoneWebsite'],
            'country_code_phone_website' => $attributes['countryCodePhoneWebsite'],
            'whatsapp_phone' => $attributes['whatsAppPhone'],
            'country_code_whatsapp_phone' => $attributes['countryCodeWhatsAppPhone'],
            'link_facebook' => $attributes['linkFacebook'],
            'link_twitter' => $attributes['linkTwitter'],
            'link_pinterest' => $attributes['linkPinterest'],
            'link_instagram' => $attributes['linkInstagram'],
            'iframe_link_google_map_src' => $attributes['iframeLinkGoogleMapSrc'],
            'calendly_url' => $attributes['calendlyUrl'],
            'maintenance' => $attributes['maintenance']
        ]);
    }
}
