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
            'meta_description' => 'Soulagez vos douleurs, tensions et stress avec Damien Rainaut, ostéopathe D.O. à Nice. Ostéopathie douce et globale au cabinet ou à domicile. RDV rapide !',
            'logo_file_path' => asset('storage/logo/logo.png'),
            /* 'favicon_file_path' => asset('storage/favicon/favicon.png'),
            'open_graph_file_path' => asset('storage/openGraph/openGraph.jpg'),  */
        ]);
    }
}
