<?php

use App\Models\EmailScheduler;
use App\Models\GoogleReviews;
use App\Models\GoogleReviewsProfile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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


/**
 * Call Api Google Reviews via Cron Weekly
 * 1.Erase GoogleProfileDB and GoogleReviewsDB
 * 2.Call Api
 * 3.Save new recent Reviews in DB
 */
Schedule::call(function () {

    $url = 'https://featurable.com/api/v2/widgets/5c7ab84d-8025-4fef-b425-5ae6b056edbb';

    $response = json_decode(Http::get($url));

    /* dd($response); */

    $googleProfile = $response->widget->gbpLocationSummary;
    /* $reviews = $response->widget->reviews; */

    if ($response->success === true) {

        /* GoogleReviews::truncate(); */

        $googleProfileDB = GoogleReviewsProfile::first();

        if ($googleProfileDB) {
            GoogleReviewsProfile::first()->delete();
        }

        GoogleReviewsProfile::create([
            'general_rating' =>  $googleProfile->rating,
            'user_rating_total' => $googleProfile->reviewsCount,
            'writeAReviewUri' => $googleProfile->writeAReviewUri
        ]);

        /* foreach ($reviews as $review) {
            GoogleReviews::create([
                'author_name' => $review->author->name,
                'rating' => $review->rating->value,
                'text' => $review->originalText,
                'date' => \Carbon\Carbon::parse($review->publishedAt)->translatedFormat('d F Y'),
                'profile_photo_src' => $review->author->avatarUrl,
            ]);
        } */
    } else {
        Log::error('Failed to fetch Google Reviews: ' . $response->message);
    }
})->weeklyOn(1, '00:00'); /* Pour le serveur */
/* }); */
