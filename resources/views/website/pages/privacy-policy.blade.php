@extends('website.layouts.base-website')
@section('title')
    @if (session('locale') === 'fr')
        Politique de confidentialité
    @elseif (session('locale') === 'en')
        Privacy Policy
    @elseif (session('locale') === 'de')
        Datenschutzrichtlinie
    @elseif (session('locale') === 'it')
        Informativa sulla privacy
    @elseif (session('locale') === 'es')
        Política de privacidad
    @else
        Privacy Policy
    @endif
@endsection
@section('content')
    <main class="main">
        @include('website.layouts.page-title')

        <section id="call-to-action" class="call-to-action section light-background">
            <div class="container">

            </div>
        </section>
    </main>
@endsection
