<div>
    @if ($apiChecker)
        <div class="google-reviews">
            <div class="google-wrapper">
                <div class="google-section-spacing">
                    <div class="google-review-header-1">
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
                        Based on {{ $userRatingTotal }} reviews.<br>
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
                                        <div class="google-review-header-2">
                                            <div>
                                                <img class="google-photo-profile" src="{{ $review->profile_photo_url }}"
                                                    alt="profile photo">
                                                <h4 class="google-review-name">{{ $review->author_name }}</h4>
                                            </div>
                                            <div>
                                                <img class="google-logo-img"
                                                    src="{{ asset('img/admin/logo/logo-google.webp') }}"
                                                    alt="Google logo">
                                            </div>
                                        </div>
                                        <div class="google-stars">
                                            @for ($i = 1; $i <= $review->rating; $i++)
                                                <i class="fa fa-md fa-star"></i>
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
        <div class="google-error-message">
            Les vrais avis Google ne peuvent pas être affichés pour le moment en raison d'un problème avec la clé API
            Google.
            <br>
            <br>
            En attendant, voici des avis Google fictifs.
        </div>

        @php
            $business = 'Cabinet Ostéopathie Jean Dupont';
            $generalRating = 5;
            $userRatingTotal = 128;
            $photoSrc = 'https://picsum.photos/200/200';

            $googleReviews = [
                (object) [
                    'author_name' => 'Marie L.',
                    'rating' => 5,
                    'text' =>
                        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'relative_time_description' => 'il y a 1 semaine',
                    'profile_photo_url' => 'https://i.pravatar.cc/80?img=12',
                ],
                (object) [
                    'author_name' => 'Thomas B.',
                    'rating' => 5,
                    'text' => 'Cabinet propre, ponctuel et très efficace. Je recommande vivement.',
                    'relative_time_description' => 'il y a 2 semaines',
                    'profile_photo_url' => 'https://i.pravatar.cc/80?img=32',
                ],
                (object) [
                    'author_name' => 'Sophie M.',
                    'rating' => 4,
                    'text' => 'Très bon praticien, explications claires et approche douce.',
                    'relative_time_description' => 'il y a 1 mois',
                    'profile_photo_url' => 'https://i.pravatar.cc/80?img=47',
                ],
                (object) [
                    'author_name' => 'Julien R.',
                    'rating' => 5,
                    'text' => 'Résultats visibles dès la première séance. Très satisfait.',
                    'relative_time_description' => 'il y a 1 mois',
                    'profile_photo_url' => 'https://i.pravatar.cc/80?img=22',
                ],
                (object) [
                    'author_name' => 'Camille D.',
                    'rating' => 5,
                    'text' => 'Accueil chaleureux et soins efficaces. Je reviendrai sans hésiter.',
                    'relative_time_description' => 'il y a 2 mois',
                    'profile_photo_url' => 'https://i.pravatar.cc/80?img=56',
                ],
                (object) [
                    'author_name' => 'Nicolas P.',
                    'rating' => 4,
                    'text' => 'Très bonne expérience globale, cabinet sérieux.',
                    'relative_time_description' => 'il y a 3 mois',
                    'profile_photo_url' => 'https://i.pravatar.cc/80?img=18',
                ],
            ];
        @endphp

        <div class="google-reviews">
            <div class="google-wrapper">
                <div class="google-section-spacing">
                    <div class="google-review-header-1">
                        <img class="google-photo-profile-business" src="{{ $photoSrc }}"
                            alt="profile photo business">
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
                        Based on {{ $userRatingTotal }} reviews.<br>
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
                                        <div class="google-review-header-2">
                                            <div>
                                                <img class="google-photo-profile"
                                                    src="{{ $review->profile_photo_url }}" alt="profile photo">
                                                <h4 class="google-review-name">{{ $review->author_name }}</h4>
                                            </div>
                                            <div>
                                                <img class="google-logo-img"
                                                    src="{{ asset('img/admin/logo/logo-google.webp') }}"
                                                    alt="Google logo">
                                            </div>
                                        </div>
                                        <div class="google-stars">
                                            @for ($i = 1; $i <= $review->rating; $i++)
                                                <i class="fa fa-md fa-star"></i>
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
    @endif
</div>
