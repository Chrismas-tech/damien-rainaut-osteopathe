@extends('website.layouts.base-website')
@section('title', 'Home')
@section('content')

    <main class="main">
        @include('layouts.section-hero')
        @include('layouts.google-map')

        <section class="container">
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Des centaines de personnes m'ont déjà fait confiance</h2>
            </div>
            @livewire('admin.website.components.google-reviews-slider')
        </section>

        @include('layouts.section-home-about')
        {{-- @include('layouts.section-features-departments') --}}
        @include('layouts.section-departments-tab')
        @include('layouts.section-features-services')
        @include('layouts.section-about')
        @include('layouts.section-departments-cards')
        {{-- @include('layouts.section-find-a-doctor') --}}
        @include('layouts.section-call-to-action')
    </main>

    {{--    <h1>COMPONENTS</h1>

    @livewire('admin.website.components.jumbotrons.jumbotron-video')
    @livewire('admin.website.components.slider')
    @livewire('admin.website.components.nanogallery') --}}
@endsection
