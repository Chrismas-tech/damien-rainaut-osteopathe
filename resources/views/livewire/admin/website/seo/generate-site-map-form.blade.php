<div class="mb-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">
    <div class="card shadow">
        <div class="card-body">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fas fa-chart-line fa-xl me-2 text-indigo-600"></i>
                    <h4>
                        Generate Site Map
                    </h4>
                </div>

                @if (file_exists(public_path('sitemap.xml')))
                    <button wire:click="generateSiteMap"
                        class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300 flex items-center">
                        <span class="me-2">
                            <img src="{{ asset('img/admin//svg/check-circle.svg') }}" alt="check-circle">
                        </span>
                        <span>
                            Regenerate Site Map
                        </span>
                    </button>
                @else
                    <button wire:click="generateSiteMap"
                        class="btn bg-red-600 text-white border-red-600 hover:bg-red-800 hover:border-red-800 active:bg-red-800 active:border-red-800 focus:outline-none  focus:ring-indigo-300 flex items-center">
                        <span class="me-2">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </span>
                        <span>
                            Generate Site Map
                        </span>
                    </button>
                @endif
            </div>

            <hr class="border-gray-300 border mt-3 mb-2">

            <div class="mb-4 mt-4">

                <div class="flex mb-4">
                    <a class="btn flex items-center bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none {{--  focus:ring-indigo-300 --}}"
                        href="https://search.google.com/search-console" target="_blank">
                        <i class="fa-solid fa-lg fa-arrow-right-long me-2"></i>
                        <span>
                            Access Google Search Console
                        </span>
                    </a>
                </div>

                <p>Copy the following url site map and paste it in Google search console </p>

                <div class="flex">
                    <input
                        class="ClipboardText flex-grow px-4 text-lg text-black bg-gray-400 border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:pointer-events-none disabled:opacity-70" type="text" disabled value="{{ config('app.url') . 'sitemap' }}">
                    <button onclick="copyToClipboard(this)" type="button"
                        class="btn inline-block bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none">
                        <span>
                            <i class="fa-regular
                        fa-copy me-1"></i>
                        </span>
                        <span>Copy to Clipboard</span>
                    </button>
                </div>
            </div>

            <hr>

            <div class="mb-4 mt-4">
                <div class="flex">
                    <img class="me-1" src="{{ asset('img/admin//svg/google.svg') }}" alt="google-logo">
                    <h4>
                        Google Site Verification Code
                    </h4>
                </div>
                <p>Paste here the Google Site Verification code from Google Search Console </p>

                <form wire:submit.prevent="submit">
                    @csrf

                    <input wire:model.live="googleSiteVerificationCode" type="text" id="googleSiteVerificationCode"
                        class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:pointer-events-none disabled:opacity-5"
                        placeholder="Google Site Verification" />

                    @error('googleSiteVerificationCode')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="flex justify-center mt-4">
                        <button type="submit" @if (!$isFormValid) disabled @endif
                            class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300 @if (!$isFormValid) disabled:bg-indigo-300 @endif">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
