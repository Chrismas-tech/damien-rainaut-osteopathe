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
            'business_name' => 'Cabinet Ostéopathie Jean Dupont',
            'general_rating' => 5,
            'user_rating_total' => 128,
            'profile_photo_src' => 'https://picsum.photos/200/200',
        ]);
    }
}
