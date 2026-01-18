<?php

use App\Models\EmailScheduler;
use App\Models\GoogleReviews;
use App\Models\GoogleReviewsProfile;
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
/* Schedule::call(function () {
    GoogleReviewsProfile::first()->delete();
    GoogleReviews::truncate();

    $placeID = "ChIJxTKGRwHRzRIRcEX6Youk4d0";

    $url = 'https://maps.googleapis.com/maps/api/place/details/json?place_id=' . $placeID . '&fields=name,user_ratings_total,reviews,photos,rating&language=fr&key=' . env('GOOGLE_REVIEWS_API');

    $response = json_decode(Http::get($url));

    if ($response->status === 'OK') {

        $photoReference = $response->result->photos[0]->photo_reference;

        GoogleReviewsProfile::create([
            'business_name' => $response->result->name,
            'general_rating' =>  $response->result->rating,
            'user_rating_total' => $response->result->user_ratings_total,
            'profile_photo_src' =>  'https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photo_reference=' . $photoReference . '&key=' . env('GOOGLE_REVIEWS_API'),
        ]);

        foreach ($response->result->reviews as $review) {
            GoogleReviews::create([
                'author_name' => $review->author_name,
                'rating' => $review->rating,
                'text' => $review->text,
                'relative_time_description' => $review->relative_time_description,
                'profile_photo_src' => $review->profile_photo_url,
            ]);
        }
    } else {
        dd('Problem avec Google API KEY');
    }
})->weeklyOn(1, '00:00'); */
