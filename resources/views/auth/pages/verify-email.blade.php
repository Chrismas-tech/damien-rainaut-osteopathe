@extends('auth.layouts.base-auth')
@section('title', 'Verify your Email')
@section('content')

    @if (session('status'))
        <div class="bg-green-200 px-2 py-1 text-green-700 text-md font-medium rounded-md mb-3">
            Your verification link has been sent ! <br>
            Don't forget to check your Spam box.
        </div>
    @endif


    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="grid">
                <button type="submit"
                    class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300">
                    Resend Verification Email
                </button>
            </div>

            {{-- <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div> --}}
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <!-- button -->
            <div class="grid">
                <button type="submit"
                    class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300">
                    Log Out
                </button>
            </div>

            {{-- <button type="submit"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button> --}}
        </form>
    </div>
@endsection
