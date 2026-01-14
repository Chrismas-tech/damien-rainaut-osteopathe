@extends('admin.layouts.base-admin')
@section('title', 'Youtube Videos')
@section('content')
    <div class="px-6 mb-6">
        @livewire('admin.website.components.youtube-videos.create-youtube-video-form')
    </div>
    <div class="px-6 mb-6">
        @livewire('admin.website.components.youtube-videos.youtube-videos-table')
    </div>
@endsection
