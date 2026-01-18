<?php

namespace Database\Seeders;

use App\Models\GoogleReviews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoogleReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews =  [
            [
                'author_name' => 'Marie L.',
                'rating' => 5,
                'text' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'relative_time_description' => 'il y a 1 semaine',
                'profile_photo_src' => 'https://i.pravatar.cc/80?img=12',
            ],
            [
                'author_name' => 'Thomas B.',
                'rating' => 5,
                'text' => 'Cabinet propre, ponctuel et très efficace. Je recommande vivement.',
                'relative_time_description' => 'il y a 2 semaines',
                'profile_photo_src' => 'https://i.pravatar.cc/80?img=32',
            ],
            [
                'author_name' => 'Sophie M.',
                'rating' => 4,
                'text' => 'Très bon praticien, explications claires et approche douce.',
                'relative_time_description' => 'il y a 1 mois',
                'profile_photo_src' => 'https://i.pravatar.cc/80?img=47',
            ],
            [
                'author_name' => 'Julien R.',
                'rating' => 5,
                'text' => 'Résultats visibles dès la première séance. Très satisfait.',
                'relative_time_description' => 'il y a 1 mois',
                'profile_photo_src' => 'https://i.pravatar.cc/80?img=22',
            ],
            [
                'author_name' => 'Camille D.',
                'rating' => 5,
                'text' => 'Accueil chaleureux et soins efficaces. Je reviendrai sans hésiter.',
                'relative_time_description' => 'il y a 2 mois',
                'profile_photo_src' => 'https://i.pravatar.cc/80?img=56',
            ],
        ];

        foreach ($reviews as $review) {
            GoogleReviews::create([
                'author_name' => $review['author_name'],
                'rating' => $review['rating'],
                'text' => $review['text'],
                'relative_time_description' => $review['relative_time_description'],
                'profile_photo_src' => $review['profile_photo_src'],
            ]);
        }
    }
}
