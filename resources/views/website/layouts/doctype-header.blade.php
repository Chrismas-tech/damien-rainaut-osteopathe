<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Libs CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" />

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
