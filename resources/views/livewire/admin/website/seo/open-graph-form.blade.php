<div class="mb-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">
    <div class="card shadow">
        <div class="card-body">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fas fa-chart-line fa-xl me-2 text-indigo-600"></i>
                    <h4>
                        Upload an OpenGraph
                    </h4>
                </div>
                <span
                    class="bg-indigo-600 px-2 py-1 text-white text-md font-medium rounded-md inline-block whitespace-nowrap text-center">
                    Dimensions authorised : {{ $authorisedDimensionsWidth }} x {{ $authorisedDimensionsHeight }}px
                </span>
            </div>

            <hr class="border-gray-300 border mt-3 mb-2">

            <form wire:submit.prevent="submit">
                @csrf

                <div x-data="{ uploading: false, progressOpenGraph: 0 }" x-on:livewire-upload-start="uploading = true"
                    x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false"
                    x-on:livewire-upload-progress="progressOpenGraph = $event.detail.progress">

                    @error('file')
                        <div class="flex justify-center mb-2">
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-lg font-medium rounded-md inline-block text-left mt-1">
                                {{ $message }}
                            </span>
                        </div>
                    @enderror

                    <!-- Current Preview OpenGraph Or Preview OpenGraph Upload -->
                    @if ($file)
                        <div class="mt-3 border border-indigo-500 bg-indigo-500 p-2">
                            <h4 class="text-white text-center">OepnGraph Preview</h4>
                        </div>
                        <div class="border border-indigo-500 mt-3 p-2 rounded">
                            <div class="flex items-center">
                                <div class="w-1/2">
                                    <div class="m-auto w-fit">
                                        <h4>Preview Informations</h4>
                                        <div>
                                            Size :
                                            {{ \App\Helpers\CustomClasses::convertBytesToKiloBytes($fileSize) }}
                                            kiloBytes
                                            / {{ \App\Helpers\CustomClasses::convertBytesToMegaBytes($fileSize) }}
                                            Mo
                                        </div>
                                        <div>
                                            Width : {{ $fileWidth }}px
                                        </div>
                                        <div>
                                            Height : {{ $fileHeight }}px
                                        </div>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <img class="mx-auto w-32 my-5 border-gray-500 border rounded"
                                        src="{{ $file->temporaryUrl() }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-3 mb-3">
                            <button type="button" wire:click="removeFile"
                                class="flex items-center btn bg-red-600 text-white border-red-600 hover:bg-red-800 hover:border-red-800 active:bg-red-800 active:border-red-800 focus:outline-none  focus:ring-red-300">
                                <div class="me-2">
                                    Delete
                                </div>
                                <div>
                                    <img src="{{ asset('img/admin//svg/trash-2.svg') }}" alt="">
                                </div>
                            </button>
                        </div>
                    @else
                        @if ($seo->open_graph_file_path)
                            <div class="mt-3 border border-indigo-500 bg-indigo-500 p-2">
                                <h4 class="text-white text-center">Current OpenGraph</h4>
                            </div>

                            <div class="flex justify-center ">
                                <img class="w-1/3 my-5 border-gray-500 border roundedd"
                                    src="{{ asset($seo->open_graph_file_path) }}?{{ time() }}" alt="">
                            </div>
                        @endif

                        <div class="flex justify-center mt-8 mb-6">
                            <label for="file-upload-openGraph"
                                class="cursor-pointer btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300">
                                <div class="flex">
                                    <span>
                                        Choose a File
                                    </span>
                                    <img class="ms-2" src="{{ asset('img/admin//svg/upload.svg') }}"
                                        alt="">
                                </div>
                            </label>
                        </div>

                        <div>
                            <input wire:model.live="file" type="file" class="hidden" id="file-upload-openGraph"
                                name="file-upload-openGraph" accept=".jpg,.png">
                        </div>
                    @endif
                    <!-- Current Preview OpenGraph Or Preview OpenGraph Upload -->

                    <!-- Progress Bar -->
                    <div x-cloak x-show="uploading" class="mb-8 mt-8">
                        <div class="flex justify-center">
                            <span>
                                Uploading...
                            </span>
                            <span x-text="progressOpenGraph"></span>
                            <span>
                                %
                            </span>
                        </div>
                        <div class="w-full h-2 bg-slate-100 rounded-lg shadow-inner mt-1">
                            <div class="bg-teal-500 h-2 rounded-lg flex justify-center"
                                :style="{ width: `${progressOpenGraph}%` }">
                            </div>
                        </div>
                    </div>
                    <!-- Progress Bar -->

                    <div class="mt-4 flex justify-end">
                        <button type="submit" @if (!$isFormValid) disabled @endif
                            class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300 @if (!$isFormValid) disabled:bg-indigo-300 @endif">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
