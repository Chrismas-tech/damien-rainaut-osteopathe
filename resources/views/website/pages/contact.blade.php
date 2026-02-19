@extends('website.layouts.base-website')

@section('title')
    @if (session('locale') === 'fr')
        Contact
    @elseif (session('locale') === 'en')
        Contact
    @elseif (session('locale') === 'de')
        Kontakt
    @elseif (session('locale') === 'it')
        Contatti
    @elseif (session('locale') === 'es')
        Contacto
    @endif
@endsection

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
                                    @if (session('locale') === 'fr')
                                        <h3>Notre Adresse</h3>
                                    @elseif (session('locale') === 'en')
                                        <h3>Our Address</h3>
                                    @elseif (session('locale') === 'de')
                                        <h3>Unsere Adresse</h3>
                                    @elseif (session('locale') === 'it')
                                        <h3>Il Nostro Indirizzo</h3>
                                    @elseif (session('locale') === 'es')
                                        <h3>Nuestra Dirección</h3>
                                    @endif
                                    <p>{{ App\Models\Website::getSettings()->address_service }}</p>
                                </div>
                            </div>

                            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="info-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="info-content">
                                    @if (session('locale') === 'fr')
                                        <h3>Adresse e-mail</h3>
                                    @elseif (session('locale') === 'en')
                                        <h3>Email Address</h3>
                                    @elseif (session('locale') === 'de')
                                        <h3>E-Mail-Adresse</h3>
                                    @elseif (session('locale') === 'it')
                                        <h3>Indirizzo e-mail</h3>
                                    @elseif (session('locale') === 'es')
                                        <h3>Dirección de correo electrónico</h3>
                                    @endif
                                    <a href="mailto:{{ App\Models\Website::getSettings()->email_website }}">
                                        {{ App\Models\Website::getSettings()->email_website }}
                                        </a>
                                </div>
                            </div>

                            <div class="contact-info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="info-icon">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div class="info-content">
                                    @if (session('locale') === 'fr')
                                        <h3>Horaires d’ouverture</h3>
                                    @elseif (session('locale') === 'en')
                                        <h3>Opening Hours</h3>
                                    @elseif (session('locale') === 'de')
                                        <h3>Öffnungszeiten</h3>
                                    @elseif (session('locale') === 'it')
                                        <h3>Orari di apertura</h3>
                                    @elseif (session('locale') === 'es')
                                        <h3>Horarios de apertura</h3>
                                    @endif
                                    @if (session('locale') === 'fr')
                                        <p>Lundi – Samedi : 7h30 – 21h</p>
                                        <p>Dimanche : 10h – 17h</p>
                                    @elseif (session('locale') === 'en')
                                        <p>Monday – Saturday: 7:30 AM – 9:00 PM</p>
                                        <p>Sunday: 10:00 AM – 5:00 PM</p>
                                    @elseif (session('locale') === 'de')
                                        <p>Montag – Samstag: 7:30 – 21:00 Uhr</p>
                                        <p>Sonntag: 10:00 – 17:00 Uhr</p>
                                    @elseif (session('locale') === 'it')
                                        <p>Lunedì – Sabato: 7:30 – 21:00</p>
                                        <p>Domenica: 10:00 – 17:00</p>
                                    @elseif (session('locale') === 'es')
                                        <p>Lunes – Sábado: 7:30 – 21:00</p>
                                        <p>Domingo: 10:00 – 17:00</p>
                                    @endif
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
