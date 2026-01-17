@php
    $images = \App\Models\ImagesGallery::all();
@endphp

<section>
    <div class="splide-custom-1">
        <div class="splide" id="splide-slider">
            <div class="splide__slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($images as $image)
                            <li class="splide__slide">
                                <div class="slider-header">
                                    <img class="slider-image"
                                        src="{{ asset('storage/' . $image->file_path . '/' . $image->file_name) }}"
                                        alt="profile photo">
                                    <h4 class="slider-name">{{ $image->file_name }}</h4>
                                </div>
                                <p class="">{{ $image->file_name }}</p>
                                <p class="">{{ $image->file_type }}</p>
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
</section>
