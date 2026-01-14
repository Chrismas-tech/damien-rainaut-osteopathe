@extends('admin.layouts.base-admin')
@section('title', 'Website Management / General Settings')
@section('content')
    <div class="p-6">
        @livewire('admin.website.website-settings-form')
    </div>
@endsection
