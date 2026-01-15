<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('website.layouts.doctype-header')

<body>

    @include('website.layouts.top-bar')
    {{--  @if (Auth::check() && Auth::user()->role === 'admin') --}}
    {{-- @include('website.layouts.header') --}}
    {{--  @endif --}}

    @yield('content')

    @livewire('admin.website.components.google-reviews-slider')

    @include('website.layouts.footer')
    @include('website.layouts.scripts')
    @livewireScripts
    <x-livewire-alert::scripts />
</body>

</html>
