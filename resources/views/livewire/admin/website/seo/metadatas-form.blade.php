<div class="seo-admin mb-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">
    <div class="card shadow">
        <div class="card-body">

            <div class="mb-4">

                <div class="flex items-center">
                    <i class="fas fa-chart-line fa-xl me-2 text-indigo-600"></i>
                    <h4>
                        Website Metadatas
                    </h4>
                </div>

                <div class="mt-2 border border-gray-500 p-2 rounded">
                    <div class="flex items-start">
                        <img class="me-1" src="{{ asset('img/admin//svg/google.svg') }}" alt="">
                        -
                        <h4 class="ms-1">Google Preview</h4>
                    </div>
                    <div class="mt-1">
                        <a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>
                        <p class="text-lg text-purple-500 underline">
                            <a href="{{ env('APP_URL') }}">{{ $metaTitle }}</a>
                        </p>
                        <p>{{ $metaDescription }}</p>
                        <p class="text-gray-500">You've visited this page 2 times. Last visit: 7/31/22
                        </p>
                    </div>
                </div>
            </div>

            <form wire:submit.prevent="submit">
                @csrf

                <div class="mb-4">
                    <label for="metaTitle">Meta Title</label>

                    <input wire:model.live="metaTitle" type="text" id="metaTitle"
                        class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:pointer-events-none disabled:opacity-5" />

                    @error('metaTitle')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="metaDescription">Meta Description</label>

                    <textarea wire:model.live="metaDescription" type="text" id="metaDescription"
                        class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:pointer-events-none disabled:opacity-5"
                        rows="5">
                        {{ $metaDescription }}
                    </textarea>

                    @error('metaDescription')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-1">
                    <label for="metaKeywords">Meta Keywords</label>

                    <p class="italic text-gray-500">
                        Please enter a list of keywords, separated by commas: Keyword 1,
                        Keyword 2, Keyword 3
                    </p>

                    <div class="flex">
                        <input wire:model.live="metaKeywordsInput" wire:keydown.enter.prevent="addmetaKeywordsInput"
                            type="text" id="metaKeywords"minlength="0" maxlength="60"
                            class="w-full px-4 text-lg block border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:pointer-events-none disabled:opacity-5" />
                        @if ($toogleEnter)
                            <div wire:click="addmetaKeywordsInput" wire:target="metaKeywordsInput"
                                class="w-48 rounded-none btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300">
                                Press Enter
                            </div>
                        @endif
                    </div>
                    @error('metaKeywords')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <!-- MetaKeywords Array -->
                <div class="flex flex-wrap items-center mb-1">
                    @foreach ($metaKeywords as $key => $tag)
                        <div wire:click="removemetaKeywordsInput('{{ addslashes($tag) }}')"
                            class="cursor-pointer flex items-center bg-indigo-200 px-2 py-1 text-indigo-700 text-sm font-medium rounded-md *:text-left mt-1 me-2"
                            title="Remove Keyword">
                            <span class="me-1">
                                {{ $tag }}
                            </span>
                            <img src="{{ asset('img/admin//svg/x.svg') }}" alt="">
                        </div>
                    @endforeach
                </div>
                <!-- MetaKeywords Array -->


                <div class="mt-4 flex justify-end">
                    <button type="submit" @if (!$isFormValid) disabled @endif
                        class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
