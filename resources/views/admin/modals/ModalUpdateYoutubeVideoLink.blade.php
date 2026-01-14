<!-- Modal Alpine JS -->

<!-- SOURCE : -->

<!-- https://www.creative-tim.com/twcomponents/component/modal-confirmation-with-alpine-js-with-style-headless-ui
    -->

<div x-show="showModal" class="fixed inset-0 transition-opacity" aria-hidden="true" @click="showModal = false"
    @click.away="showModal = false">
    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
</div>
<div x-show="showModal" x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
    x-transition:leave="transition ease-in duration-200 transform"
    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    class="fixed z-10 inset-0 flex items-center justify-center" x-cloak>
    <div class="w-full inline-block align-middle bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all max-w-2xl"
        role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <!-- Modal content -->
            <div class="mt-3 text-center sm:mt-0 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                    Update Youtube Link - ID {{ $targetYoutubeVideoId }}
                </h3>
            </div>

            <div>
                <input wire:model.live="youtubeVideoLink" type="text"
                    class="px-4 mt-3 text-lg block w-full border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none" />
                @error('newYoutubeVideoLink')
                    <span
                        class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block text-left mt-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button @click="showModal = false" wire:click="updateYoutubeVideo('{{ $targetYoutubeVideoId }}')"
                type="button" @if (!$isFormValid) disabled @endif
                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-teal-500 text-base font-medium text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 sm:ml-3 sm:w-auto sm:text-sm @if (!$isFormValid) disabled:bg-teal-100 disabled:text-teal-400 disabled:border-teal-600 disabled:pointer-events-none @endif">
                Update
            </button>
            <button @click="showModal = false" type="button"
                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </button>
        </div>
    </div>
</div>


<!-- Modal Alpine JS -->
