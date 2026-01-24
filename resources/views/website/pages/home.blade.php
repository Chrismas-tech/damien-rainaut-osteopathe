@extends('website.layouts.base-website')
@section('title', 'Home')
@section('content')

    <main class="main">
        @include('layouts.section-hero')
        @include('layouts.google-map')
        @include('layouts.section-home-about')
        @include('layouts.section-features-departments')
        @include('layouts.section-features-services')
        @include('layouts.section-about')
        @include('layouts.section-departments-tab')
        @include('layouts.section-departments-cards')
        {{-- @include('layouts.section-find-a-doctor') --}}
        @include('layouts.section-call-to-action')
    </main>

    {{--    <h1>COMPONENTS</h1>

    @livewire('admin.website.components.jumbotrons.jumbotron-video')
    @livewire('admin.website.components.slider')
    @livewire('admin.website.components.nanogallery') --}}
@endsection
