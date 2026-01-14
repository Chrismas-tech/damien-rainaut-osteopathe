<?php

namespace Database\Seeders;

use App\Models\Seo;
use App\Models\Website;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Website $website): void
    {

        /*
        |--------------------------------------------------------------------------
        | SEO
        |--------------------------------------------------------------------------
        */

        Seo::create([
            'meta_title' => $website->getSettings()->application_name,
            'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis...',
            'meta_keywords' => json_encode([], JSON_FORCE_OBJECT),
            'logo_file_path' => asset('storage/logo/logo.png'),
            /* 'favicon_file_path' => asset('storage/favicon/favicon.png'),
            'open_graph_file_path' => asset('storage/openGraph/openGraph.jpg'),  */
        ]);
    }
}
