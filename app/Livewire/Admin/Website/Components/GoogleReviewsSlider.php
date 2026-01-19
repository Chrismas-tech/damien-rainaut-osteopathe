<?php

namespace App\Livewire\Admin\Website\Components;

use App\Models\GoogleReviews;
use App\Models\GoogleReviewsProfile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class GoogleReviewsSlider extends Component
{
    use LivewireAlert;

    public bool $apiCheck;
    public array $googleReviews = [];
    public int $generalRating;
    public int $userRatingTotal;
    public string $writeAReviewUri;

    public function mount()
    {
        $googleReviewsProfile = GoogleReviewsProfile::first();

        if ($googleReviewsProfile && GoogleReviews::count() > 0) {

            $this->apiCheck = true;

            $this->generalRating = $googleReviewsProfile->general_rating;
            $this->userRatingTotal = $googleReviewsProfile->user_rating_total;
            $this->writeAReviewUri = $googleReviewsProfile->writeAReviewUri;

            $this->googleReviews = GoogleReviews::all()->toArray();
        } else {
            $this->apiCheck = false;
        }
    }

    public function render()
    {
        return view('livewire.admin.website.components.google-reviews-slider');
    }
}
