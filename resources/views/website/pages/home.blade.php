@extends('website.layouts.base-website')
@section('title', 'Home')
@section('content')
    @livewire('website.components.jumbotrons.jumbotron-video')
    @livewire('website.components.slider')
    @livewire('website.components.nanogallery')
@endsection
