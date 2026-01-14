<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.w
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | WEBSITE SETTINGS
        |--------------------------------------------------------------------------
        */

        Website::create([
            "application_name" => "Your Website",
            "email_website" => "rbernard06@gmail.com",
            "address_service" => "60 bis rue du Faubourg Saint-Honoré, 06000 Nice",
            "link_facebook" => "https://www.facebook.com/sharer/sharer.php?u=",
            "link_twitter" => "https://twitter.com/intent/tweet?url=",
            "link_pinterest" => "https://pinterest.com/pin/create/button/?url=",
            "link_instagram" => "https://www.instagram.com",
            "iframe_google_map_src" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5768.22761043248!2d7.273682475833865!3d43.70818394887345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cddab208f82015%3A0x2025664cad24e770!2s60%20Av.%20des%20Ar%C3%A8nes%20de%20Cimiez%2C%2006000%20Nice!5e0!3m2!1sfr!2sfr!4v1738313331799!5m2!1sfr!2sfr",
            'phone_website' => "123456789",
            'country_code_phone_website' => "+33",
            'whatsapp_phone' => "782854875",
            'country_code_whatsapp_phone' => "+33",
            "iframe_google_map_src" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5768.22761043248!2d7.273682475833865!3d43.70818394887345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cddab208f82015%3A0x2025664cad24e770!2s60%20Av.%20des%20Ar%C3%A8nes%20de%20Cimiez%2C%2006000%20Nice!5e0!3m2!1sfr!2sfr!4v1738313331799!5m2!1sfr!2sfr",
            "maintenance" => false,
            "calendly_url" => "lucianichristophe0",
            'lang' => 'fr'
        ]);
    }
}
