<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/admin//favicon/favicon.ico') }}" />

    <title>{{ config('app.name', 'Laravel') }} | Maintenance</title>

    <!-- Theme CSS -->
    @vite(['resources/scss/admin/app.scss', 'resources/js/admin/app.js'])
    @livewireStyles
</head>

<body style="background-color: #0f172a;">
    <main class="py-12">
        <div>
            <div class="flex justify-center items-center mb-12">
                <div class="w-full max-w-6xl">
                    <div class="text-center mb-12">
                        <h1 class="text-4xl font-bold mb-4 text-gray-400">Site is Under Maintenance</h1>
                        <p class="text-gray-500">We're making the system more awesome. We'll be back shortly.</p>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('img/admin//svg/maintenance.svg') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="px-3 w-full md:w-1/3 lg:my-0 my-6">
                    <div class="text-left px-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-4 text-primary icon-md" width="42"
                            height="42" viewBox="0 0 24 24" fill="none" stroke="#624bff" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                        <h4 class="text-md font-semibold mb-2 text-gray-500">Why is the site down?</h4>
                        <p class="text-gray-500">it can be due to an error with your DNS settings, hosting provider, or
                            web applications.</p>
                    </div>
                </div>
                <div class="px-3 w-full md:w-1/3 lg:my-0 my-6">
                    <div class="text-left px-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-4 text-primary icon-md" width="42"
                            height="42" viewBox="0 0 24 24" fill="none" stroke="#624bff" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <h4 class="text-md font-semibold mb-2 text-gray-500">What is downtime?</h4>
                        <p class="text-gray-500">A machine is not operating or being productive due to required
                            maintenance work.</p>
                    </div>
                </div>
                <div class="px-3 w-full md:w-1/3 lg:my-0 my-6">
                    <div class="text-left px-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-4 text-primary icon-md" width="42"
                            height="42" viewBox="0 0 24 24" fill="none" stroke="#624bff" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line>
                            <line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line>
                            <line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line>
                            <line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line>
                            <line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>
                        </svg>
                        <h4 class="text-md font-semibold mb-2 text-gray-500">Do you need support?</h4>
                        <p class="text-gray-500">In emergency, our team will help you. Just drop a message to the</p>
                        <a href="#!"
                            class="text-inherit">{{ \App\Models\Website::getSettings()->email_website }}</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
