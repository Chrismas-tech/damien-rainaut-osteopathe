<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('website.layouts.doctype-header')

<body>
    @include('website.layouts.header')

    {{--  @if (Auth::check() && Auth::user()->role === 'admin') --}}
    {{-- @include('website.layouts.header') --}}
    {{--  @endif --}}

    @yield('content')

    <div id="featurable-dcbe86cd-ae90-46a5-8cf0-6c656870f0ab" data-featurable-async></div>
    <script src="https://featurable.com/assets/v2/grid_default.min.js" defer charset="UTF-8"></script>


    <section class="container">
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Nos Témoignages</h2>
        </div>
        @livewire('admin.website.components.google-reviews-slider')
    </section>

    @include('website.layouts.footer')
    @include('website.layouts.scroll-to-top')
    @include('website.layouts.preloader')
    @include('website.layouts.scripts')
    @livewireScripts
    <x-livewire-alert::scripts />
</body>

</html>
