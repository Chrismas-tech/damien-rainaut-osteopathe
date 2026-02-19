@extends('website.layouts.base-website')
@section('title')
    @if (session('locale') === 'fr')
        Conditions d'utilisation
    @elseif (session('locale') === 'en')
        Terms of Service
    @elseif (session('locale') === 'de')
        Nutzungsbedingungen
    @elseif (session('locale') === 'it')
        Condizioni di servizio
    @elseif (session('locale') === 'es')
        Términos de servicio
    @else
        Terms of Service
    @endif
@endsection
@section('content')
    <main class="main">

        @include('website.layouts.page-title')
        <section id="terms-of-services" class="contact section py-5">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h1 class="display-5 fw-bold text-center mb-5">Conditions d’utilisation du site</h1>

                <h3 class="fs-3 fw-semibold mb-4">1. Éditeur du site</h3>
                <div class="text-body lh-lg mb-5">
                    <p class="fw-semibold mb-2">
                        RAISON SOCIALE :
                        {{ mb_strtoupper(\App\Models\Website::getSettings()->application_name ?? 'Société', 'UTF-8') }}
                    </p>


                    <p class="mb-2 fw-semibold">
                        {!! nl2br(e(\App\Models\Website::getSettings()->address_website)) !!}
                    </p>


                    <p class="mb-2 fw-semibold">
                        SIRET : 990 714 776 00012
                    </p>

                    <p class="mb-0 fw-semibold">
                        CONTACT :
                        <a href="mailto:{{ \App\Models\Website::getSettings()->email_website }}"
                            class="text-primary text-decoration-none hover-underline">
                            {{ \App\Models\Website::getSettings()->email_website }}
                        </a>
                    </p>

                </div>

                <h3 class="fs-3 fw-semibold mb-4">2. Objet</h3>
                <p class="mb-3">
                    Les présentes conditions régissent l’utilisation du site (ci-après <a
                        href="{{ route('website.home') }}">« le Site
                        »</a>).
                </p>
                <p class="mb-4">
                    En accédant au Site, vous acceptez ces conditions. Si vous n’acceptez pas, veuillez ne pas utiliser le
                    Site.
                </p>

                <h3 class="fs-3 fw-semibold mb-4">3. Propriété intellectuelle</h3>
                <p class="mb-3">
                    L’ensemble des contenus (textes, images, logo, design…) est protégé par le droit d’auteur et reste la
                    propriété exclusive de
                    <strong>{{ mb_strtoupper(\App\Models\Website::getSettings()->application_name ?? 'l’éditeur', 'UTF-8') }}</strong>
                    ou de ses partenaires.
                </p>

                <h3 class="fs-3 fw-semibold mb-4">4. Responsabilité</h3>
                <p class="mb-3">
                    Nous mettons tout en œuvre pour que les informations soient exactes, mais nous ne garantissons pas
                    l’absence d’erreur ou d’omission.
                </p>
                <p class="mb-4">
                    Nous ne pourrons être tenus responsables des dommages indirects ou consécutifs liés à l’utilisation du
                    Site.
                </p>

                <h3 class="fs-3 fw-semibold mb-4">5. Formulaire de contact</h3>
                <p class="mb-0">
                    Les messages envoyés via le formulaire sont destinés uniquement à la prise de contact.
                </p>
            </div>
        </section>
    </main>
@endsection
