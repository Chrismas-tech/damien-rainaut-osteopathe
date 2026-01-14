@extends('admin.layouts.base-admin')
@section('title', 'Website Management / Seo Configuration')
@section('content')
    <div class="px-6 my-6">
        @livewire('admin.website.seo.metadatas-form')
    </div>
    <div class="px-6 mb-6">
        @livewire('admin.website.seo.logo-form')
    </div>
    <div class="px-6 mb-6">
        @livewire('admin.website.seo.favicon-form')
    </div>
    <div class="px-6 mb-6">
        @livewire('admin.website.seo.open-graph-form')
    </div>
    <div class="px-6 mb-6">
        @livewire('admin.website.seo.generate-site-map-form')
    </div>
@endsection
