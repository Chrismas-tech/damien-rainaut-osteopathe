@extends('website.layouts.base-website')
@section('title')
    @if (session('locale') === 'fr')
        Accueil
    @elseif (session('locale') === 'en')
        Home
    @elseif (session('locale') === 'de')
        Startseite
    @elseif (session('locale') === 'it')
        Home
    @elseif (session('locale') === 'es')
        Inicio
    @else
        Home
    @endif
@endsection
@section('content')
    <main class="main">

        @include('layouts.section-hero')

        @include('layouts.section-temoignages')

        {{-- @include('layouts.section-call-troubles') --}}

        @include('layouts.section-home-about')

        @include('layouts.section-departments-tab')

        @include('layouts.section-troubles')

        @include('layouts.section-features-services')

        @include('layouts.google-map')

        @include('layouts.section-about')

        {{-- @include('layouts.section-call-to-action') --}}

        {{-- @include('layouts.section-features-departments') --}}

        {{-- @include('layouts.section-departments-cards') --}}

        {{-- @include('layouts.section-find-a-doctor') --}}

    </main>

    {{--    <h1>COMPONENTS</h1>

    @livewire('admin.website.components.jumbotrons.jumbotron-video')
    @livewire('admin.website.components.slider')
    @livewire('admin.website.components.nanogallery') --}}
@endsection
