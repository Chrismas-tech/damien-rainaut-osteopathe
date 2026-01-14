<div class="mb-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">
    <div class="card shadow">
        <div class="card-body">

            <div class="flex items-center mb-4">
                <i class="fas fa-envelope fa-lg mr-2 text-indigo-600"></i>
                <h4>Email Scheduler</h4>
            </div>

            @foreach ($emailSchedulers as $scheduler)
                <form wire:submit.prevent="submit('{{ $scheduler->id }}')">
                    @csrf
                    <div class="mb-4">
                        <label for="pageName">Page Name</label>
                        <input wire:model.live="schedulersData.{{ $scheduler->id }}.pageName" type="text"
                            value="{{ $scheduler->page_name }}"
                            class="px-4 text-lg block w-full border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-80 disabled:pointer-events-none" />
                        @error('pageName')
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="sendingFrequency-{{ $scheduler->id }}">Sending Frequency</label>
                        <select wire:model.live="schedulersData.{{ $scheduler->id }}.sendingFrequency"
                            class="py-2 px-4 block w-full border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600">
                            @foreach ($timeInSeconds as $timing)
                                <option value="{{ $timing->id }}">{{ $timing->name }}</option>
                            @endforeach
                        </select>
                        @error('schedulersData.*.sendingFrequency')
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="nbEmailsFrequency-{{ $scheduler->id }}">Number of Emails per Frequency</label>
                        <input wire:model.live="schedulersData.{{ $scheduler->id }}.nbEmailsFrequency" type="number"
                            class="px-4 text-lg block w-full border-gray-300 rounded">
                        @error('schedulersData.*.nbEmailsFreq')
                            <span
                                class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="my-4 flex justify-end">
                        <button class="btn bg-indigo-600 text-white hover:bg-indigo-800">
                            Update
                        </button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>
