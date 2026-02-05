<div>
    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <div class="d-flex justify-content-center">
            @foreach ($googleReviews as $review)
                <img class="google-logo-img mx-1 mb-4" src="{{ $review['profile_photo_src'] }}" alt="Photo Profile">
            @endforeach
        </div>
        <h2>Des centaines de personnes m'ont déjà fait confiance</h2>
    </div>
    @if ($apiCheck)
        <div class="google-reviews" data-aos="fade-up" data-aos-delay="200">
            <div class="google-wrapper">
                <div class="google-section-spacing">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Damien+Rainaut+Ostéopathe+D.O/@43.7007632,7.2581134,16z/data=!4m8!3m7!1s0x12cdd101478632c5:0xdde1a48b62fa4570!8m2!3d43.7007632!4d7.2606883!9m1!1b1!16s%2Fg%2F11zj7hm8lj?entry=ttu&g_ep=EgoyMDI2MDEyMS4wIKXMDSoASAFQAw%3D%3D">
                        <div class="google-review-header-1">
                            {{-- <img class="google-photo-profile-business" src="{{ $profilePhotoSrc }}" alt="profile photo business"> --}}
                            <div class="google-photo-profile-business">
                                <img src="{{ asset('storage/logo/logo.svg') }}" alt="">
                            </div>
                            <div>
                                <h3 class="google-title-business">
                                    {{ App\Models\Website::getSettings()->application_name }}
                                </h3>
                                <h3 class="google-title-business">
                                    Excellent
                                </h3>
                                <div class="google-rating-container">
                                    <span class="google-general-rating">{{ $generalRating }}.0</span>
                                    <div class="google-stars">
                                        @for ($i = 1; $i <= $generalRating; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="google-powered-by">
                            Based on {{ $userRatingTotal }} reviews.<br>
                            powered by
                            <span class="google-logo">
                                <span>G</span><span>o</span><span>o</span><span>g</span><span>l</span><span>e</span>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="google-btn-review" href="{{ $writeAReviewUri }}" target="_blank" rel="nofollow noopener">
                        <span>Laissez un avis</span>
                        <img class="google-logo-img" src="{{ asset('img/admin/logo/google-logo-white.png') }}"
                            alt="Google logo">
                    </a>
                </div>
                <div class="splide" id="splide-google-reviews">
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($googleReviews as $review)
                                    <li class="splide__slide">
                                        <div class="google-review-header-2">
                                            <div>
                                                <img class="google-photo-profile"
                                                    src="{{ $review['profile_photo_src'] }}" alt="profile photo">
                                                <h4 class="google-review-name">{{ $review['author_name'] }}</h4>
                                            </div>
                                            <div>
                                                <img class="google-logo-img"
                                                    src="{{ asset('img/admin/logo/logo-google.webp') }}"
                                                    alt="Google logo">
                                            </div>
                                        </div>
                                        <div class="google-stars">
                                            @for ($i = 1; $i <= $review['rating']; $i++)
                                                <i class="fa fa-md fa-star"></i>
                                            @endfor
                                        </div>
                                        <p class="google-review-date">{{ $review['date'] }}</p>
                                        <p class="google-review-text">{{ $review['text'] }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="splide__progress">
                            <div class="splide__progress__bar">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="google-api-error-message">
            Un problème avec la clé API Google empêche d'afficher les avis Google sur votre site.
        </div>
    @endif
</div>
