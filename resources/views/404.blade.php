@extends('website.layouts.base-website')
@section('title', 'Error - 404')
@section('content')
    <main class="main">

        <!-- Error 404 Section -->
        <section id="error-404" class="error-404 section">

            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">

                        <div class="error-number aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                            404
                        </div>

                        <h1 class="error-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            Page Not Found
                        </h1>

                        <p class="error-description aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            The page you are looking for might have been removed, had its name changed, or is
                            temporarily unavailable.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore.
                        </p>

                        <div class="error-actions aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <a href="{{ route('website.home') }}" class="btn-primary">
                                <i class="bi bi-house"></i>
                                Retourner à l'accueil
                            </a>
                        </div>
                    </div>
                </div>
        </section><!-- /Error 404 Section -->

    </main>
@endsection
