@extends('auth.layouts.base-auth')
@section('title', 'Forgot your Password')
@section('content')
    <!-- Session Status -->
    @if (session('status'))
        <div class="bg-green-200 px-2 py-1 text-green-700 text-sm font-medium rounded-md whitespace-nowrap mb-3">
            {{ session('status') }}
        </div>
    @endif

    <div class="mt-3">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            @if ($errors->any())
                <div class="mb-2">
                    @foreach ($errors->all() as $error)
                        <div class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md whitespace-nowrap mb-3">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="inline-block">Email</label>
                <input type="email" id="email" value="{{ old('email') }}"
                    class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                    name="email" placeholder="Email address here" {{-- required="" --}} />
            </div>

            <!-- button -->
            <div class="grid">
                <button type="submit"
                    class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300">
                    Email Password Reset Link
                </button>
            </div>

            <!-- Email Address -->
            {{--           <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div> --}}
        </form>
    </div>
@endsection
