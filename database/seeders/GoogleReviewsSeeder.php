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
                'text'                     => "“A professional who listens and is effective. No more pain after the session.”",
                'date'                     => '21 décembre 2025',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocKNfUPoBXh2PZrjFqVcW2scGpb0h59LdzFAXsfsT5QPJv1GDA=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'PATRICK R.',
                'rating'                   => 5,
                'text'                     => "I arrived home feeling stiff and in pain, but after a session and some manipulations, I already felt much better. Ten days later, I have no pain at all, and I thank Damien very much for your availability and invaluable care.",
                'date'                     => '22 décembre 2025',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjV2HmSCWOmMCcoy__JwZdZ8CC4VIrhFfr1T-u4UAYNHtntweqU=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Francesca P.',
                'rating'                   => 5,
                'text'                     => "Great! I had a neck blockage that Dr. Rainaut was able to resolve; two days after the session I could move again!",
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
                'text'                     => "Kind, attentive, and very good at explaining things. He was able to relieve my pain.",
                'date'                     => '23 décembre 2025',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJqgqFXAEM_JF8ip2__feX2UuPsnb_tdjYfhIIV0R5qSnDmE2g4=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Daniela M.',
                'rating'                   => 5,
                'text'                     => "Excellent osteopath, competent, efficient, attentive, warm welcome and very professional, I highly recommend him",
                'date'                     => '6 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJMKm0NPX2632WJNsta58MhaL4faW_Tp-2bMmKtRHw32rDc6g=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'erwann D.',
                'rating'                   => 5,
                'text'                     => "Top-notch practitioner, gentle method, takes his time with the patient, I highly recommend him!",
                'date'                     => '11 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocKjC9TwZFJ-mEsM1cofLhLQ_aiOY3cBkBB8nHrWJQnywrpTuA=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Milana B.',
                'rating'                   => 5,
                'text'                     => "A huge thank you to Damien Rainaut! 🥰 I went to see him for lower back pain, but he refused to admit that the problem wasn't limited to my lower back, but affected my entire spine. He diagnosed all the symptoms, and the results were incredible. All the...",
                'date'                     => '13 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjX34vSrf7cWDa9cQxoLnVQp1A9-W7a_CQOkMzhTbKlmDXuSiFU=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Myriam R.',
                'rating'                   => 5,
                'text'                     => "A pleasant and competent osteopath! Results in just one session...I highly recommend!",
                'date'                     => '14 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjXY86u4j7RnAB4RxwlsjeTrSyozZM7IL_NDvjqwp2UF-CqE3So3NQ=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Alexandra S.',
                'rating'                   => 5,
                'text'                     => "Amazing osteopath!! My knee is completely freed up, thank you so much, I recommend him 100%!",
                'date'                     => '14 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjXKffHLrJ675Tp9Hk8IEh-tnDRdGVSakrmpohFUbLwCURh7obbg=s64-c-rp-mo-ba2-br100',
            ],
            [
                'author_name'              => 'Pierre J.',
                'rating'                   => 5,
                'text'                     => "A very attentive osteopath who relieved my muscle pain, which I'd had for over 10 days. His techniques are gentle and effective. I highly recommend him.",
                'date'                     => '16 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJYpeD6v-x4T9i6-47Mb50dFZ-gBCOEZDInMcsd_rhzTnY_7g=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'Nelly G.',
                'rating'                   => 5,
                'text'                     => "A very respectful and attentive professional with excellent communication skills. Always available and very effective. An excellent osteopath whom I highly recommend. Thank you again!",
                'date'                     => '19 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a-/ALV-UjUOyy6pd3igKyvirglKXc1zNNs7qglsSbtv44eDyQSZdoCSXi05=s64-c-rp-mo-ba3-br100',
            ],
            [
                'author_name'              => 'Jean-Kristoff M.',
                'rating'                   => 5,
                'text'                     => "I was very pleased with my visit to Mr. Rainaut, who listened attentively and provided treatments tailored to my needs. I will definitely return!",
                'date'                     => '21 janvier 2026',
                'profile_photo_src'        => 'https://lh3.googleusercontent.com/a/ACg8ocJVu9she4o8mfd-Ts5PJd63iXuwN1XTJndMXJ1THWsnxTHYXQ=s64-c-rp-mo-br100',
            ],
            [
                'author_name'              => 'ruel P.',
                'rating'                   => 5,
                'text'                     => "J' ai consulté cet ostéopathe, Mr Rainaut, pour un problème lombaire et je suis entièrement satisfaite.Il a pris le temps de m écouter, de comprendre ma pathologie et d' expliquer sa prise en charge. Très prévenant, appliqué, consciencieux, et...",
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
