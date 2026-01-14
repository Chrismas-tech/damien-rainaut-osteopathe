@extends('auth.layouts.base-auth')
@section('title', 'Login')
@section('content')
    <div class="mt-3">
        <!-- form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if ($errors->any())
                <div class="mb-2">
                    @foreach ($errors->all() as $error)
                        <div class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md mb-3">
                            <p>{{ $error }}</p>
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

            <!-- password -->
            @livewire('auth.login-password-eye-form')

            <!-- checkbox -->
            <div class="lg:flex justify-between items-center mb-4">
                <div class="flex items-center">
                    <input type="checkbox"
                        class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2 cursor-pointer"
                        id="remember_me" />
                    <label class="inline-block ms-2 cursor-pointer" for="remember_me">Remember me</label>
                </div>
            </div>
            <div>
                <!-- button -->
                <div class="grid">
                    <button type="submit"
                        class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300">
                        Sign in
                    </button>
                </div>

                <div class="flex justify-between mt-4">
                    {{-- <div class="mb-2">
                        <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-600">
                            Create An Account
                        </a>
                    </div> --}}
                    <div>
                        <a href="{{ route('password.request') }}" class="text-indigo-600 hover:text-indigo-600">
                            Forgot your password?
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
