<?php

use App\Models\EmailScheduler;
use App\Models\GoogleReviews;
use App\Models\GoogleReviewsProfile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Schedule;

/* Envoi d'emails */

if (Schema::hasTable('email_schedulers')) {
    $emailSchedulers = EmailScheduler::all();

    foreach ($emailSchedulers as $key => $scheduler) {
        Schedule::command(
            'queue:work -v --queue=' . $scheduler->queue_job_name . ' --max-jobs=' . $scheduler->nb_emails_freq . ' --stop-when-empty'
        )
            ->cron($scheduler->time_in_seconds->cron)
            ->runInBackground();
    }
};

/* Call Api Google To Display 5 Last Reviews */

Schedule::call(function () {

    $googleProfileDB = GoogleReviewsProfile::first();

    if ($googleProfileDB) {
        GoogleReviewsProfile::first()->delete();
    }

    GoogleReviews::truncate();


    $url = 'https://featurable.com/api/v2/widgets/fa05b389-6556-4834-bce4-6213463a2511';

    $response = json_decode(Http::get($url));

    /*  dd($response); */

    $googleProfile = $response->widget->gbpLocationSummary;
    $reviews = $response->widget->reviews;


    if ($response->success === true) {

        GoogleReviewsProfile::create([
            'general_rating' =>  $googleProfile->rating,
            'user_rating_total' => $googleProfile->reviewsCount,
            'writeAReviewUri' => $googleProfile->writeAReviewUri
        ]);

        foreach ( $reviews as $review) {

            GoogleReviews::create([
                'author_name' => $review->author->name,
                'rating' => $review->rating->value,
                'text' => $review->text,
                'relative_time_description' => \Carbon\Carbon::parse($review->publishedAt)->translatedFormat('d F Y'),
                'profile_photo_src' => $review->author->avatarUrl,
            ]);
        }
    } else {
        dd('Problem avec Google API KEY');
    }
})->weeklyOn(1, '00:00');
