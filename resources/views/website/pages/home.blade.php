@extends('website.layouts.base-website')
@section('title', 'Home')
@section('content')
    @livewire('admin.website.components.jumbotrons.jumbotron-video')
    @livewire('admin.website.components.slider')
    @livewire('admin.website.components.nanogallery')
@endsection
