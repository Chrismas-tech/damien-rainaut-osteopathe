<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('website.layouts.doctype-header')

<body>
    @include('website.layouts.header')

    {{--  @if (Auth::check() && Auth::user()->role === 'admin') --}}
    {{-- @include('website.layouts.header') --}}
    {{--  @endif --}}

    @yield('content')

    <div class="container">
        @livewire('admin.website.components.google-reviews-slider')
    </div>

 {{--    <div id="featurable-e956991d-27f2-44b6-a0d6-3212ce47fc5a" data-featurable-async></div>
    <script src="https://featurable.com/assets/v2/carousel_default.min.js" defer charset="UTF-8"></script> --}}

    @include('website.layouts.footer')
    @include('website.layouts.scroll-to-top')
    @include('website.layouts.preloader')
    @include('website.layouts.scripts')
    @livewireScripts
    <x-livewire-alert::scripts />
</body>

</html>
