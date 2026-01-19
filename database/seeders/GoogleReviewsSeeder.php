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
        $reviews = [
            [
                'author_name'              => 'Nelly Gondanos',
                'rating'                   => 5,
                'text'                     => "Professionnel très respectueux, à l’écoute et d’un excellent contact. Toujours disponible et très efficace. Un excellent ostéopathe que je recommande vivement. Merci encore !",
                'relative_time_description' => 'il y a 2 heures',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjUOyy6pd3igKyvirglKXc1zNNs7qglsSbtv44eDyQSZdoCSXi05=w40-h40-p-rp-mo-ba3-br100',
            ],
            [
                'author_name'              => 'Silvia Meliga',
                'rating'                   => 5,
                'text'                     => "Je suis venue consulter suite à un blocage du dos, j’ai trouvé un créneau disponible un dimanche matin. Très professionnel, il a pris le temps de tout m’expliquer. La séance a été efficace. Je recommande!",
                'relative_time_description' => 'il y a 13 heures',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocIrBtUrL6VTLuUspxc3UBtXVvelAPcGPGiKj0e20Ob82iKdtg=w40-h40-p-rp-mo-br100',
            ],
            [
                'author_name'              => 'Pierre JOUANNY',
                'rating'                   => 5,
                'text'                     => "Osthéo très à l écoute qui m a délivré de mes douleurs musculaires qui auraient depuis plus de 10 jours . Ces gestes sont doux et efficaces. Je le recommande sans pb",
                'relative_time_description' => 'il y a 3 jours',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJYpeD6v-x4T9i6-47Mb50dFZ-gBCOEZDInMcsd_rhzTnY_7g=w40-h40-p-rp-mo-br100',
            ],
            [
                'author_name'              => 'Alexandra Sara',
                'rating'                   => 5,
                'text'                     => "Super ostéopathe !! J’ai le genou débloqué merci infiniment je recommande à 100%",
                'relative_time_description' => 'il y a 5 jours',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjXKffHLrJ675Tp9Hk8IEh-tnDRdGVSakrmpohFUbLwCURh7obbg=w40-h40-p-rp-mo-ba2-br100',
            ],
            [
                'author_name'              => 'Myriam Rovela',
                'rating'                   => 5,
                'text'                     => "Ostéopathe agréable et compétent ! Résultat en une séance...Je recommande !",
                'relative_time_description' => 'il y a 5 jours',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjXY86u4j7RnAB4RxwlsjeTrSyozZM7IL_NDvjqwp2UF-CqE3So3NQ=w40-h40-p-rp-mo-br100',
            ],
            [
                'author_name'              => 'Milana Bougaieva',
                'rating'                   => 5,
                'text'                     => "Un immense merci à Damien Rainaut!🥰 Je suis allée le consulter pour des douleurs lombaires, mais il a refusé …", // texte tronqué dans le HTML (bouton "Plus")
                'relative_time_description' => 'il y a 6 jours',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjX34vSrf7cWDa9cQxoLnVQp1A9-W7a_CQOkMzhTbKlmDXuSiFU=w40-h40-p-rp-mo-br100',
            ],
            [
                'author_name'              => 'Charles Basso',
                'rating'                   => 5,
                'text'                     => "",  // aucun texte d'avis visible dans ce bloc
                'relative_time_description' => 'il y a une semaine',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocLzgAu3noHDRCHanpNxlUhYYK0PcYMuEgO8WqX8WtzolwmA6g=w40-h40-p-rp-mo-br100',
            ],
            [
                'author_name'              => 'Soso BD',
                'rating'                   => 5,
                'text'                     => "Je recommande à 100% Monsieur Rainaut. C'est un praticien très compétent!",
                'relative_time_description' => 'il y a une semaine',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocKHniqT-UP3ZqzzPTOWuJcX11qNL2QrVly4Yh8wN08yVOPc4Q=w40-h40-p-rp-mo-br100',
            ],
            [
                'author_name'              => 'erwann dunot',
                'rating'                   => 5,
                'text'                     => "Praticien au top , methode douce , prend son temps avec le patient, je recommande fortement !",
                'relative_time_description' => 'il y a une semaine',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocKjC9TwZFJ-mEsM1cofLhLQ_aiOY3cBkBB8nHrWJQnywrpTuA=w40-h40-p-rp-mo-br100',
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
