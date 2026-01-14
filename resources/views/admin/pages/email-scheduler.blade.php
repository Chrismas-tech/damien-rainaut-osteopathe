@extends('admin.layouts.base-admin')
@section('title', 'Website Management / Email Scheduler')
@section('content')
    <div class="p-6">
        @livewire('admin.website.email.email-scheduler-form')
    </div>
@endsection
