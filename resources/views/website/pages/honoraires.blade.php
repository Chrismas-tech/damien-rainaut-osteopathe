@extends('website.layouts.base-website')
@section('title', 'Honoraires')
@section('content')
    <main class="main">
        <main class="main">
            @include('website.layouts.page-title')
            <section id="call-to-action" class="call-to-action section light-background">
                <div class="container">
                    <div class="featured-departments">
                        <div class="my-emergency-banner aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <div class="row align-items-center">
                                <div class="emergency-content">
                                    <h3>Consultations &amp; Visites à Domicile</h3>
                                    <p>
                                        Ouvert du lundi au samedi de 7h30 à 21h et le dimanche de 10-17h au cabinet Pôle
                                        Ostéo à Nice - 22 Rue Gounod - ou à domicile pour votre confort.
                                        <br>
                                        <br>
                                        <i class="bi bi-calendar-check me-1"></i>
                                        <span>
                                            RDV flexibles et rapides possibles.
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    @endsection
