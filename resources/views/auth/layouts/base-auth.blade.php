<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('auth.layouts.doctype-header')

<body>
    <div class="flex flex-col items-center justify-center g-0 h-screen px-4">
        <div class="justify-center items-center w-full bg-white rounded-md shadow lg:flex md:mt-0 max-w-md xl:p-0">
            <div class="p-6 w-full sm:p-8 lg:p-8">
                <div class="mb-2">
                    <a class="text-4xl text-indigo-600 font-bold" href="{{ route('website.home') }}">
                        {{ \App\Models\Website::getSettings()->application_name }}
                    </a>
                    @if (Route::currentRouteName() === 'password.request')
                        <p class="text-md my-2">
                            Don't worry, we'll send you an email to reset your password.
                        </p>
                    @elseif(Route::currentRouteName() === 'password.reset')
                        <p class="text-md my-2">
                            Reset your password.
                        </p>
                    @elseif(Route::currentRouteName() === 'verification.send')
                        <p class="text-md my-2">
                            Thanks for signing up! Before getting started, could you verify your
                            email address by clicking on the link we just emailed to you? If you didn't receive the
                            email, we will gladly send you another.
                        </p>
                    @elseif(Route::currentRouteName() === 'verification.notice')
                        <p class="text-md my-2">
                            Before proceeding, please check your email
                            (<b>{{ Auth::user()->email }}</b>)
                            for a verification link.
                        </p>
                    @else
                        <p class="text-md my-2">
                            Please enter your user information.
                        </p>
                    @endif
                </div>
                <hr class="border-1 border-gray-300">
                @yield('content')
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
