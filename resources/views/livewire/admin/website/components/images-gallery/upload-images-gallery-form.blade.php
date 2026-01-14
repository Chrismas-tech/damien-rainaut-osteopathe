<div class="my-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">
    <div class="card shadow">
        <div class="card-body">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fa-regular fa-image text-teal-500 fa-2x mr-2"></i>
                    <h3>
                        Upload Multiple Images
                    </h3>
                </div>
                {{-- <span
                    class="bg-indigo-600 px-2 py-1 text-white text-md font-medium rounded-md inline-block whitespace-nowrap text-center">
                    Dimensions authorised : {{ $authorisedDimensions }} x {{ $authorisedDimensions }}px
                </span> --}}
            </div>

            <div class="my-3">
                <p class="italic text-gray-500">Maximum of files per Upload : {{ $NbFiles }}</p>
                <p class="italic text-gray-500">Formats allowed :
                    @foreach ($extensions as $key => $ex)
                        @if ($key == 0)
                            {{ $ex }}
                        @else
                            , {{ $ex }}
                        @endif
                    @endforeach
                </p>
            </div>

            <hr class="border-gray-300 border mt-3 mb-2">

            <div x-data="{ uploading: false, progressLogo: 0 }" x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progressLogo = $event.detail.progress">

                @error('files')
                    <div class="flex justify-center mb-2">
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-lg font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    </div>
                @enderror

                @error('files.*')
                    <div class="flex justify-center mb-2">
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-lg font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    </div>
                @enderror

                <!-- Upload Multiple Images Files -->
                <div class="flex justify-center mt-8 mb-6">
                    <label for="upload-images-gallery"
                        class="cursor-pointer btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300">
                        <div class="flex">
                            <span>
                                Choose multiple Images
                            </span>
                            <img class="ms-2" src="{{ asset('img/admin/svg/upload.svg') }}" alt="">
                        </div>
                    </label>
                </div>

                <div>
                    <input class="hidden" wire:model="files" type="file" id="upload-images-gallery" multiple
                        accept="{{ $acceptString }}">
                </div>
                <!-- Upload Multiple Images Files -->

                <!-- Preview Uploaded Images Files List -->
                @if (count($files))
                    <div class="p-3">
                        @foreach ($files as $file)
                            <div class="flex items-center">
                                <i class="me-1 fa-solid fa-caret-right"></i>
                                <div wire:click="deleteFilesUpload('{{ addslashes($file->getClientOriginalName()) }}')"
                                    class="bg-gray-300 px-2 py-1 text-gray-800 text-md font-medium rounded-md whitespace-nowrap text-center cursor-pointer m-1">
                                    <i class="fa-regular fa-file-lines"></i>
                                    {{ $file->getClientOriginalName() }} -
                                    {{ App\Helpers\CustomClasses::convertBytesToKiloBytes($file->getSize()) }} Ko
                                    <i class="ms-3 fa-solid fa-xmark fa-md text-red-500"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                <!-- Preview Uploaded Images Files List -->

                <!-- Progress Bar -->
                <div x-cloak x-show="uploading" class="mb-8 mt-8">
                    <div class="flex justify-center">
                        <span>
                            Uploading...
                        </span>
                        <span x-text="progressLogo"></span>
                        <span>
                            %
                        </span>
                    </div>
                    <div class="w-full h-2 bg-slate-100 rounded-lg shadow-inner mt-1">
                        <div class="bg-teal-500 h-2 rounded-lg flex justify-center"
                            :style="{ width: `${progressLogo}%` }">
                        </div>
                    </div>
                </div>
                <!-- Progress Bar -->

                @if ($isFormValid && count($files))
                    <div class="mt-4 flex justify-end">
                        <button wire:click="uploadFiles"
                            class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300 @if (!$isFormValid) disabled:bg-indigo-300 @endif">
                            Upload
                            </span>
                            <i class="fa-solid fa-lg fa-upload"></i>
                        </button>
                        {{-- <button wire:click="cancelUploadFiles"
                            class="btn bg-red-600 text-white border-red-600 hover:bg-red-800 hover:border-red-800 active:bg-red-800 active:border-red-800 focus:outline-none focus:ring-red-300">
                        Cancel
                        </button>
                        --}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
