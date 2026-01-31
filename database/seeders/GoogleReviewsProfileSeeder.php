<?php

namespace Database\Seeders;

use App\Models\GoogleReviewsProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoogleReviewsProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GoogleReviewsProfile::create([
            'general_rating' => 5,
            'user_rating_total' => 48,
            'WriteAReviewUri' => 'https://search.google.com/local/writereview?placeid=ChIJxTKGRwHRzRIRcEX6Youk4d0'
        ]);
    }
}
