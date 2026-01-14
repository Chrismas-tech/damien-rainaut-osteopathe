<div x-data="{ showModal: false {{-- true --}} }">
    <div class="mb-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">
        <div class="card shadow">
            <div class="card-body">

                <div class="flex items-center mb-4">
                    <i class="fa-brands fa-youtube text-red-500 fa-2x mr-2"></i>
                    <h3>Youtube Video List</h3>
                </div>

                <!-- Choose Pagination -->
                <div class="flex items-center">
                    <label class="me-2">Result(s) by page</label>
                    <select
                        class="py-2 px-4 pe-9 block w-20 border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-non cursor-pointer"
                        wire:model.live="resultsPerPage">
                        <option {{ $resultsPerPage === 5 ? 'selected' : '' }} value="5">5</option>
                        <option {{ $resultsPerPage === 10 ? 'selected' : '' }} value="10">10</option>
                        <option {{ $resultsPerPage === 25 ? 'selected' : '' }} value="25">25</option>
                        <option {{ $resultsPerPage === 50 ? 'selected' : '' }} value="50">50</option>
                    </select>
                </div>

                <!-- Variables Helper -->
                {{-- {{ var_export($selection) }} --}}
                {{-- {{ var_export($isSelectionValid) }}
                {{-- {{ var_export($users) }} --}}
                <!-- Variables Helper -->

                <hr class="my-4 border border-gray-300">

                <!-- Pagination Start -->
                @if ($countSearch > $resultsPerPage)
                    <div class="flex justify-center items-center my-5">
                        {{ $youtubeVideos->links() }}
                    </div>
                @endif
                <!-- Pagination Start -->


                <div class="flex justify-between mt-3">
                    <div class="flex">
                        @if ($selectionAllToggle)
                            <button type="button" wire:click="selectOrDeselectEntries"
                                class="mb-3 mr-3 flex items-center btn gap-x-2 bg-teal-200 text-teal-700  border-teal-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-teal-700 hover:border-teal-700 active:bg-teal-700 active:border-teal-700 focus:outline-none focus:ring-teal-300 ">
                                <span>
                                    Select All Entries
                                </span>
                                <i class="fa-solid fa-check-double"></i>
                            </button>
                        @else
                            <button type="button" wire:click="selectOrDeselectEntries"
                                class="mb-3 mr-3 flex items-center btn gap-x-2 bg-indigo-200 text-indigo-700  border-indigo-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-indigo-700 hover:border-indigo-700 active:bg-indigo-700 active:border-indigo-700 focus:outline-none focus:ring-indigo-300 ">
                                <span>
                                    Deselect All Entries
                                </span>
                                <i class="fa-solid fa-check-double"></i>
                            </button>
                        @endif
                        <button type="button" wire:click="deleteSelectionModal"
                            @if (!$isSelectionValid) disabled @endif
                            class="mb-3 flex items-center btn gap-x-2 bg-red-200 text-red-700  border-red-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-red-700 hover:border-red-700 active:bg-red-700 active:border-red-700 focus:outline-none focus:ring-red-300 @if (!$isSelectionValid) disabled disabled:bg-red-200 @endif">
                            <span>
                                Delete Selected Entries
                            </span>
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </div>
                </div>

                <!-- Images Gallery Table -->
                <div class="overflow-x-auto">
                    <table class="text-left w-full whitespace-nowrap border border-gray-300">
                        <thead class="">
                            <tr>
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">Youtube Video</th>
                                <th scope="col" class="px-6 py-3">Order</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            @foreach ($youtubeVideos as $youtubeVideo)
                                <tr>
                                    <td class="py-3 px-6">
                                        <div class="flex justify-center items-center">
                                            <input type="checkbox" @if (in_array($youtubeVideo->id, $selection)) checked @endif
                                                wire:model.live="selection" wire:key="selected{{ $youtubeVideo->id }}"
                                                class="w-8 h-8 text-indigo-600 bg-white border-gray-500 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2 cursor-pointer"
                                                id="checked-checkbox" value="{{ $youtubeVideo->id }}" />
                                        </div>
                                    </td>
                                    <td width="10%" class="py-3 px-6 text-center">
                                        <div class="video-responsive">
                                            <iframe width="560" height="315"
                                                src="{{ $youtubeVideo->youtube_link }}" title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen>
                                            </iframe>
                                        </div>

                                        <div class="flex justify-center">
                                            <!-- Button to open the modal -->
                                            <button @click="showModal = true" type="button"
                                                wire:click="youtubeVideoUpdateModal('{{ $youtubeVideo->id }}')"
                                                {{-- @if (!$isFormValid) disabled @endif --}}
                                                class="my-3 flex items-center btn gap-x-2 bg-teal-200 text-teal-700  border-teal-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-teal-700 hover:border-teal-700 active:bg-teal-700 active:border-teal-700 focus:outline-none focus:ring-teal-300 {{-- @if (!$isFormValid) disabled disabled:bg-teal-200 @endif --}}">
                                                <span>
                                                    Update Link
                                                </span>
                                                <i class="fa-solid fa-link"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div>
                                            <label for="image-order">Update Order</label>

                                            <div class="flex justify-center items-center">
                                                <button type="button"
                                                    wire:click="decreaseOrder('{{ $youtubeVideo->id }}')"
                                                    class="mr-3 flex items-center btn gap-x-2 bg-teal-200 text-teal-700  border-teal-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-teal-700 hover:border-teal-700 active:bg-teal-700 active:border-teal-700 focus:outline-none focus:ring-teal-300 disabled disabled:bg-teal-200">
                                                    <i class="fa-solid fa-minus"></i>
                                                </button>

                                                <div>
                                                    <input type="text" disabled
                                                        class="px-4 text-lg block w-24 border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 {{-- disabled:opacity-80 --}} disabled:pointer-events-none"
                                                        value="{{ $youtubeVideo->order }}" />
                                                </div>

                                                <button type="button"
                                                    wire:click="increaseOrder('{{ $youtubeVideo->id }}')"
                                                    class="ml-3 flex items-center btn gap-x-2 bg-teal-200 text-teal-700  border-teal-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-teal-700 hover:border-teal-700 active:bg-teal-700 active:border-teal-700 focus:outline-none focus:ring-teal-300 disabled disabled:bg-teal-200">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Images Gallery Table -->

                <!-- Number Results Users All Database -->
                @if ($countSearch)
                    <span
                        class="mt-3 bg-indigo-200 px-2 py-1 text-indigo-700 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">
                        {{ $countSearch }} result(s) found in Database.
                    </span>
                @else
                    <span
                        class="mt-3 bg-indigo-200 px-2 py-1 text-indigo-700 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">
                        {{ $countSearch }} result(s) found in Database.
                    </span>
                @endif
                <!-- Number Results Users All Database -->


                <!-- Pagination Start -->
                @if ($countSearch > $resultsPerPage)
                    <hr class="my-4 border border-gray-300">
                    <div class="flex justify-center items-center my-5">
                        {{ $youtubeVideos->links() }}
                    </div>
                @endif
                <!-- Pagination Start -->
            </div>
        </div>
    </div>

    @include('admin.modals.ModalUpdateYoutubeVideoLink')
</div>
