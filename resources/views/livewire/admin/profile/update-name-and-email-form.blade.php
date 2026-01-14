<div class="mb-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="mb-4">Update your name and email</h4>

            <form wire:submit.prevent="submit">
                @csrf

                <div class="mb-4">
                    <label for="firstname">Firstname</label>
                    <input wire:model.live="firstname" type="text"
                        class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none" />
                    @error('firstname')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="lastname">Lastname</label>
                    <input wire:model.live="lastname" type="text"
                        class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none" />
                    @error('lastname')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email">Email</label>
                    <input wire:model.live="email" type="email"
                        class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none" />
                    @error('email')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

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
