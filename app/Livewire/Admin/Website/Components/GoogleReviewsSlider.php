<?php

namespace App\Livewire\Admin\Website\Components;

use Illuminate\Support\Facades\Http;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class GoogleReviewsSlider extends Component
{
    use LivewireAlert;

    public bool $apiChecker = false;
    public string $placeId = 'ChIJY0wdrhuhzBIRwQnMOXrdG2Q';

    public array $googleReviews = [];
    public int $generalRating;
    public string $business;
    public string $photoSrc;
    public int $userRatingTotal;

    public function mount()
    {

        $url = 'https://maps.googleapis.com/maps/api/place/details/json?place_id=' . $this->placeId . '&fields=name,user_ratings_total,reviews,photos,rating&language=fr&key=' . env('GOOGLE_REVIEWS_API');

        $response = json_decode(Http::get($url));

        /* Test if response status false */
        /* $response = new \stdClass();
        $response->status = "e"; */

        /* dd($response); */

        if ($response->status === 'OK') {
            $this->apiChecker = true;
            $this->business = $response->result->name;
            $this->googleReviews = $response->result->reviews;
            $this->userRatingTotal = $response->result->user_ratings_total;
            $this->generalRating = $response->result->rating;

            $photoReference = $response->result->photos[0]->photo_reference;
            $this->photoSrc = 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photo_reference=' . $photoReference . '&key=' . env('GOOGLE_REVIEWS_API');
        } else {
            $this->apiChecker = false;
        }

        /* dd($response); */
    }

    public function render()
    {
        return view('livewire.admin.website.components.google-reviews-slider');
    }
}
