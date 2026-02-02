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
                'author_name'              => 'Héloïse P.',
                'rating'                   => 5,
                'text'                     => "Excellent accueil, professionnel et à l'écoute, et bons soins prodigués.",
                'date'                     => '21 décembre 2025',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJXaoh45yE3i4UbE0LChl9kS63bOxA6cE_nibdmwg1-x7eewQ=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'ISOARDI J.',
                'rating'                   => 5,
                'text'                     => "Un professionnel à l'écoute et efficace. Plus de douleur après la séance.",
                'date'                     => '21 décembre 2025',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocKNfUPoBXh2PZrjFqVcW2scGpb0h59LdzFAXsfsT5QPJv1GDA=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'PATRICK R.',
                'rating'                   => 5,
                'text'                     => "Je suis rentré chez moi tout raide et douloureux, mais après une séance et quelques manipulations, je me sentais déjà beaucoup mieux. Dix jours plus tard, plus aucune douleur, et je remercie vivement Damien pour sa disponibilité et ses soins précieux.",
                'date'                     => '22 décembre 2025',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjV2HmSCWOmMCcoy__JwZdZ8CC4VIrhFfr1T-u4UAYNHtntweqU=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Francesca P.',
                'rating'                   => 5,
                'text'                     => "Super ! J’avais un blocage au cou que le Dr Rainaut a réussi à débloquer ; deux jours après la séance je pouvais à nouveau bouger !",
                'date'                     => '22 décembre 2025',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocKG3ZlY5QD_fUxPMDRL6RISo3unuff8yi9E4ZFtsY_53xpfVg=s64-c-rp-mo-ba2-br100',
            ],
            [
                'author_name'              => 'Lisa G.',
                'rating'                   => 5,
                'text'                     => "Je suis venue pour une consultation concernant des douleurs persistantes du cou jusqu’à l’épaule, présentes depuis plusieurs jours. Il a rapidement identifié la source du problème et a soulagé ma douleur dès la première séance. Très professionnel, il a pris le temps d’expliquer clairement et gentiment ses techniques. Accueil chaleureux et séance efficace — je le recommande vivement !",
                'date'                     => '23 décembre 2025',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocKG3ZlY5QD_fUxPMDRL6RISo3unuff8yi9E4ZFtsY_53xpfVg=s64-c-rp-mo-ba2-br100',
            ],
            [
                'author_name'              => 'Steven R.',
                'rating'                   => 5,
                'text'                     => "Gentil, attentif et très pédagogue. Il a réussi à soulager ma douleur.",
                'date'                     => '23 décembre 2025',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJqgqFXAEM_JF8ip2__feX2UuPsnb_tdjYfhIIV0R5qSnDmE2g4=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Daniela M.',
                'rating'                   => 5,
                'text'                     => "Excellent ostéopathe, compétent, efficace, à l'écoute, accueil chaleureux et très professionnel, je le recommande vivement.",
                'date'                     => '6 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJMKm0NPX2632WJNsta58MhaL4faW_Tp-2bMmKtRHw32rDc6g=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'erwann D.',
                'rating'                   => 5,
                'text'                     => "Praticien au top, méthode douce, prend le temps avec le patient, je le recommande vivement !",
                'date'                     => '11 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocKjC9TwZFJ-mEsM1cofLhLQ_aiOY3cBkBB8nHrWJQnywrpTuA=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Milana B.',
                'rating'                   => 5,
                'text'                     => "Un immense merci à Damien Rainaut ! 🥰 Je suis allée le voir pour des douleurs lombaires, mais il a refusé de se limiter au bas du dos et a compris que tout mon rachis était concerné. Il a diagnostiqué l’ensemble des symptômes, et les résultats ont été incroyables. Tout...",
                'date'                     => '13 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjX34vSrf7cWDa9cQxoLnVQp1A9-W7a_CQOkMzhTbKlmDXuSiFU=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Myriam R.',
                'rating'                   => 5,
                'text'                     => "Un ostéopathe agréable et compétent ! Résultats en une seule séance… je recommande vivement !",
                'date'                     => '14 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjXY86u4j7RnAB4RxwlsjeTrSyozZM7IL_NDvjqwp2UF-CqE3So3NQ=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Alexandra S.',
                'rating'                   => 5,
                'text'                     => "Ostéopathe incroyable !! Mon genou est complètement libéré, merci énormément, je le recommande à 100 % !",
                'date'                     => '14 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjXKffHLrJ675Tp9Hk8IEh-tnDRdGVSakrmpohFUbLwCURh7obbg=s64-c-rp-mo-ba2-br100',
            ],
            [
                'author_name'              => 'Pierre J.',
                'rating'                   => 5,
                'text'                     => "Un ostéopathe très attentif qui a soulagé mes douleurs musculaires que j’avais depuis plus de 10 jours. Ses techniques sont douces et efficaces. Je le recommande vivement.",
                'date'                     => '16 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJYpeD6v-x4T9i6-47Mb50dFZ-gBCOEZDInMcsd_rhzTnY_7g=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Nelly G.',
                'rating'                   => 5,
                'text'                     => "Un professionnel très respectueux et attentif avec d’excellentes qualités de communication. Toujours disponible et très efficace. Un excellent ostéopathe que je recommande vivement. Merci encore !",
                'date'                     => '19 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjUOyy6pd3igKyvirglKXc1zNNs7qglsSbtv44eDyQSZdoCSXi05=s64-c-rp-mo-ba3-br100',
            ],
            [
                'author_name'              => 'Jean-Kristoff M.',
                'rating'                   => 5,
                'text'                     => "J’ai été très satisfait de ma visite chez M. Rainaut, qui a écouté attentivement et prodigué des soins adaptés à mes besoins. Je reviendrai sans hésiter !",
                'date'                     => '21 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJVu9she4o8mfd-Ts5PJd63iXuwN1XTJndMXJ1THWsnxTHYXQ=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'ruel P.',
                'rating'                   => 5,
                'text'                     => "J’ai consulté cet ostéopathe, M. Rainaut, pour un problème lombaire et je suis entièrement satisfaite. Il a pris le temps de m’écouter, de comprendre ma pathologie et d’expliquer sa prise en charge. Très prévenant, appliqué, consciencieux, et...",
                'date'                     => '25 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJnCVHXIt3We96tLQEmr2tliD6M7qo0kdRMYT7vKKS53Ct12w=s64-c-rp-mo-br100',
            ],
        ];

        foreach ($reviews as $review) {
            GoogleReviews::create([
                'author_name' => $review['author_name'],
                'rating' => $review['rating'],
                'text' => $review['text'],
                'date' => $review['date'],
                'profile_photo_src' => $review['profile_photo_src'],
            ]);
        }
    }
}
