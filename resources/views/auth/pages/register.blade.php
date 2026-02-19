@extends('auth.layouts.base-auth')
@section('title', 'Register')
@section('content')
    <div class="mt-3">
        <!-- form -->
        <form method="POST" action="{{ route('register') }}">
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

            <!-- First Name -->
            <div class="mb-3">
                <label for="firstname" class="inline-block">First Name</label>
                <input type="text" id="firstname" value="{{ old('firstname') }}"
                    class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                    name="firstname" placeholder="First Name" {{-- required="" --}} />
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="lastname" class="inline-block">Last Name</label>
                <input type="text" id="lastname" value="{{ old('lastname') }}"
                    class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                    name="lastname" {{-- required="" --}} />
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="inline-block">Email</label>
                <input type="email" id="email" value="{{ old('email') }}"
                    class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                    name="email" {{-- required="" --}} />
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="inline-block">Address</label>
                <input type="text" id="address" value="{{ old('address') }}"
                    class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                    name="address" {{-- required="" --}} />
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="inline-block">Phone Number</label>
                <input type="text" id="phone" value="{{ old('phone') }}"
                    class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                    name="phone" {{-- required="" --}} />
            </div>


            @livewire('auth.register-password-form')


            <!-- checkbox -->
            <div class="mb-5">
                <div class="flex items-start gap-2">
                    <input type="checkbox" id="terms"
                        class="mr-1 mt-1 w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                        id="agreeCheck" name="terms" />
                    <label class="inline-block cursor-pointer" for="terms">
                        <span>
                            I agree to the
                            <a href="{{ route('website.terms-of-services') }}"
                                class="text-indigo-600 hover:text-indigo-600">Terms of Service</a>
                            and
                           {{--  <a href="{{ route('website.privacy-policy') }}"
                                class="text-indigo-600 hover:text-indigo-600">Privacy Policy.</a> --}}
                        </span>
                    </label>
                </div>
            </div>
            <div>
                <!-- button -->
                <div class="grid">
                    <button type="submit"
                        class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300">
                        Create Free Account
                    </button>
                </div>
                <div class="md:flex md:justify-between mt-4">
                    <div class="mb-2 mb-md-0">
                        Already member?
                        <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-600">Login</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
