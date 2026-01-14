@extends('admin.layouts.base-admin')
@section('title', 'Images Gallery')
@section('content')
    <div class="px-6 mb-6">
        @livewire('admin.website.components.images-gallery.upload-images-gallery-form')
    </div>
    <div class="px-6 mb-6">
        @livewire('admin.website.components.images-gallery.images-gallery-table')
    </div>
@endsection
