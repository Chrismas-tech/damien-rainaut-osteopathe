<?php

namespace App\Livewire\Admin\Website\Components;

use App\Models\GoogleReviews;
use App\Models\GoogleReviewsProfile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class GoogleReviewsSlider extends Component
{
    use LivewireAlert;

    /* public bool $apiCheckerResponse = false; */
    public string $placeId = "ChIJxTKGRwHRzRIRcEX6Youk4d0";
    public array $googleReviews = [];
    public int $generalRating;
    public string $businessName;
    public string $profilePhotoSrc;
    public int $userRatingTotal;

    public function mount()
    {

        $googleReviewsProfile = GoogleReviewsProfile::first();

        $this->generalRating = $googleReviewsProfile->general_rating;
        $this->businessName = $googleReviewsProfile->business_name;
        $this->userRatingTotal = $googleReviewsProfile->user_rating_total;
        $this->profilePhotoSrc = $googleReviewsProfile->profile_photo_src;

        $this->googleReviews = GoogleReviews::all()->toArray();
    }

    public function render()
    {
        return view('livewire.admin.website.components.google-reviews-slider');
    }
}
