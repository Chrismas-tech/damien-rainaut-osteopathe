<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> --}}
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <title>{{ \App\Models\Website::getSettings()->application_name }} | @yield('title')</title>

    <!-- Prepare Seo Generation -->
    @php
        \App\Actions\Admin\Website\Seo\PrepareSeoMetaTag::run();
    @endphp
    <!-- Prepare Seo Generation -->

    <!-- SEO -->
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <!-- SEO -->

    <!-- Google Site Verification -->
    @if (\App\Models\Seo::getSeo()->google_site_verification_code)
        <meta name="google-site-verification" content="{{ \App\Models\Seo::getSeo()->google_site_verification_code }}">
    @endif
    <!-- Google Site Verification -->

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset(\App\Models\Seo::getSeo()->favicon_file_path) }}?{{ time() }}">
    <!-- Favicon icon -->

    <!-- Scripts -->
    @vite(['resources/scss/website/app.scss', 'resources/js/website/app.js'])
    @livewireStyles
</head>
