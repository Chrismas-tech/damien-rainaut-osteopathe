<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('website.layouts.doctype-header')

<body>
    @include('website.layouts.header')

    {{--  @if (Auth::check() && Auth::user()->role === 'admin') --}}
    {{-- @include('website.layouts.header') --}}
    {{--  @endif --}}

    @yield('content')

    <section>
        <div class="container">
            @livewire('admin.website.components.google-reviews-slider')
        </div>
    </section>

    @include('website.layouts.footer')
    @include('website.layouts.scroll-to-top')
    @include('website.layouts.preloader')
    @include('website.layouts.scripts')
    @livewireScripts
    <x-livewire-alert::scripts />
</body>

</html>
