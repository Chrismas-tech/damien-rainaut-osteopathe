@extends('website.layouts.base-website')
@section('title', 'Contact')
@section('content')
    <main class="main">

        @include('website.layouts.page-title')

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="100">
                                <div class="info-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h3>Notre Adresse</h3>
                                    <p>{{ App\Models\Website::getSettings()->address_service }}</p>
                                </div>
                            </div>

                            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="info-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <h3>Adresse e-mail</h3>
                                    <p>{{ App\Models\Website::getSettings()->email_website }}</p>
                                    <p>{{ App\Models\Website::getSettings()->email_website_secondary }}</p>
                                </div>
                            </div>

                            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="info-icon">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div class="info-content">
                                    <h3>Horaires d’ouverture</h3>
                                    <p>Lundi – Samedi : 7h30 – 21h
                                    </p>
                                    <p>Dimanche : 10h – 17h</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    @livewire('admin.website.components.contact-form')
                </div>
            </div>

            <div class="container-fluid map-container" data-aos="fade-up" data-aos-delay="200">
                <div class="map-overlay"></div>
                <iframe src="{{ App\Models\Website::getSettings()->iframe_link_google_map_src }}" width="100%"
                    height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </section><!-- /Contact Section -->
    </main>
@endsection
