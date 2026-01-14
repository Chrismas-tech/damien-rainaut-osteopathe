<div class="mb-6 my-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">
    <div class="card shadow">
        <div class="card-body">

            <div class="flex items-center mb-4">
                <i class="fa-brands fa-youtube text-red-500 fa-2x mr-2"></i>
                <h3>Create a Youtube Video</h3>
            </div>

            <form class="text-left" wire:submit.prevent="submit">
                @csrf

                <div class="mb-4">
                    <label for="youtubeLink">Paste the Youtube Url</label>
                    <input wire:model.live="youtubeLink" type="text"
                        class="px-4 text-lg block w-full border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none" />
                    @error('youtubeLink')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mt-4 flex justify-end">
                    <button type="submit" @if (!$isFormValid) disabled @endif
                        class="mb-3 flex items-center btn gap-x-2 bg-teal-200 text-teal-700 border-teal-600   active:bg-teal-700 active:border-teal-700 focus:outline-none focus:ring-teal-300 hover:text-white hover:bg-teal-500 hover:border-teal-700 @if (!$isFormValid) disabled:bg-gray-100 disabled:text-gray-400 disabled:border-gray-600 disabled:pointer-events-none @endif">
                        <span>
                            Add a new Youtube Video
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
