<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/admin/favicon/favicon.ico') }}" />

    <!-- Libs CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" />

    <title>{{ config('app.name', 'Laravel') }} | 404 Error</title>

    <!-- Scripts -->
    @vite(['resources/scss/admin/app.scss', 'resources/js/admin/app.js'])
</head>

<body>
    <!-- start error page -->
    <div class="h-screen flex justify-center items-center mx-auto">
        <!-- row -->
        <div class="flex flex-col">
            <!-- col -->
            <!-- content -->
            <div class="text-center">
                <div class="mb-3">
                    <!-- img -->
                    <img src="{{ asset('img/admin/error/404-error-img.png') }}" alt="" class="mw-100" />
                </div>
                <!-- text -->
                <h1 class="text-5xl font-bold mb-3">Oops! the page not found.</h1>
                <p class="mb-8 text-xl">Or simply leverage the expertise of our consultation team.</p>
                <!-- button -->
                <a href="{{ route('website.home') }}"
                    class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300">
                    Go Home
                </a>
            </div>
        </div>
    </div>
    <!-- end of navbar -->
</body>

</html>
