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
            "application_name" => "Damien Rainaut - Ostéopathie D.O",
            "email_website" => "damien.rainaut.osteopathedo@gmail.com",
            "address_service" => "22 Rue Gounod, 06000 Nice, France",
            "link_facebook" => "https://www.facebook.com/profile.php?id=61581345867974",
            "link_twitter" => "https://twitter.com/intent/tweet?url=",
            "link_pinterest" => "https://pinterest.com/pin/create/button/?url=",
            "link_instagram" => "https://www.instagram.com",
            "link_linkedin" => "https://www.linkedin.com/in/damien-rainaut-372159334/",
            "iframe_link_google_map_src" => "https://www.google.com/maps?q=22+Rue+Gounod+Nice&output=embed",
            'phone_website' => "650866257",
            'country_code_phone_website' => "+33",
            'whatsapp_phone' => "650866257",
            'country_code_whatsapp_phone' => "+33",
            "maintenance" => false,
            "calendly_url" => "",
            'lang_default' => 'fr'
        ]);
    }
}
