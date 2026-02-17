<!-- Page Title -->
<div class="page-title">
    <div class="custom-margin-page-title">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="heading-title">@yield('title')</h1>
                    {{--  <p class="mb-0">
                        Ostéopathe D.O. à Nice – Approche manuelle douce et globale pour soulager vos douleurs,
                        restaurer votre mobilité et améliorer votre bien-être au quotidien.
                        Consultations au cabinet et consultations à domicile.
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li>
                    <a href="{{ route('website.home') }}">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Accueil
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Home
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Startseite
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Home
                        @endif
                    </a>
                </li>
                <li>@yield('title')</li>
            </ol>
        </div>
    </nav>
</div>
<!-- End Page Title -->
