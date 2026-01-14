<div>
    @if ($apiChecker)
        <div class="google-reviews">
            <div class="google-wrapper">
                <div class="google-section-spacing">
                    <div class="google-review-header">
                        <img class="google-photo-profile-business" src="{{ $photoSrc }}" alt="profile photo business">
                        <div>
                            <h3 class="google-title-business">~{{ $business }}</h3>
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
                        Basé sur {{ $userRatingTotal }} avis.<br>
                        powered by
                        <span class="google-logo">
                            <span>G</span><span>o</span><span>o</span><span>g</span><span>l</span><span>e</span>
                        </span>
                    </div>

                    <div>
                        <a class="google-btn-review"
                            href="https://search.google.com/local/writereview?placeid={{ $placeId }}"
                            target="_blank" rel="nofollow noopener">
                            <span>Notez-nous sur</span>
                            <img class="google-logo-img" src="{{ asset('img/admin/logo/google-logo-white.png') }}"
                                alt="Google logo">
                        </a>
                    </div>
                </div>

                <div class="splide" id="splide-google-reviews">
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($googleReviews as $review)
                                    <li class="splide__slide">
                                        <div class="google-review-header">
                                            <img class="google-photo-profile" src="{{ $review->profile_photo_url }}"
                                                alt="profile photo">
                                            <h4 class="google-review-name">{{ $review->author_name }}</h4>
                                            <img class="google-logo-img"
                                                src="{{ asset('img/admin/logo/logo-google.webp') }}" alt="Google logo">
                                        </div>
                                        <div class="google-stars">
                                            @for ($i = 1; $i <= $review->rating; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                        <p class="google-review-date">{{ $review->relative_time_description }}</p>
                                        <p class="google-review-text">{{ $review->text }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="splide__progress">
                            <div class="splide__progress__bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="error-message">
            Les avis Google ne peuvent pas être affichés pour le moment en raison d'un problème avec la clé API
            Google.
        </div>
    @endif
</div>
