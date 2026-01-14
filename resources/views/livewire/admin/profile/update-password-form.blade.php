<div class="mb-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">
    <!-- card -->
    <div class="card shadow">
        <!-- card body -->
        <div class="card-body">
            <!-- card title -->
            <h4 class="mb-4">Update your password</h4>

            <form wire:submit.prevent="submit">
                @csrf

                <div class="mb-4">
                    <div class="flex items-end mb-1">
                        <label for="currentPassword">Current Password</label>

                        @if ($currentPasswordValid)
                            <span class="ms-2">
                                <img src="{{ asset('img/admin//svg/check-circle.svg') }}" alt="eye">
                            </span>
                        @endif
                    </div>

                    <div class="flex items-center">
                        <div wire:loading wire:target="currentPassword"
                            class="me-2 animate-spin inline-block w-6 h-6 border-[3px] border-current border-t-transparent text-indigo-600 rounded-full "
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <input @if ($toggleCurrentPasswordEye) type="text" @else type="password" @endif
                            wire:model.live="currentPassword"
                            class="px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:pointer-events-none disabled:opacity-5"
                            id="currentPassword" />

                        <span wire:click="CurrentPasswordEyeToggle"
                            class="eye-password cursor-pointer bg-indigo-600 border p-2">
                            @if ($toggleCurrentPasswordEye)
                                <img src="{{ asset('img/admin//svg/eye.svg') }}" alt="eye">
                            @else
                                <img src="{{ asset('img/admin//svg/eye-off.svg') }}" alt="eye-off">
                            @endif
                        </span>
                    </div>
                    @error('currentPassword')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password">New Password</label>
                    <div class="text-sm italic">
                        (9 characters, 1 number, 1 uppercase letter, 1 lowercase letter)
                    </div>

                    <div class="flex items-center">
                        <input @if ($togglePasswordEye) type="text" @else type="password" @endif
                            wire:model.live="password"
                            class="input-eye px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none"
                            id="password" />

                        <span wire:click="PasswordEyeToggle"
                            class="eye-password cursor-pointer bg-indigo-600 border p-2">
                            @if ($togglePasswordEye)
                                <img src="{{ asset('img/admin//svg/eye.svg') }}" alt="eye">
                            @else
                                <img src="{{ asset('img/admin//svg/eye-off.svg') }}" alt="eye-off">
                            @endif
                        </span>
                    </div>
                    @error('password')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="password">New Password Confirmation</label>
                    <div class="flex items-center">
                        <input id="passwordConfirmation"
                            @if ($togglePasswordConfirmationEye) type="text" @else type="password" @endif
                            wire:model.live="passwordConfirmation"
                            class="input-eye px-4 text-lg block w-full border-gray-500 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none"
                            id="password" />

                        <span wire:click="PasswordConfirmationEyeToggle"
                            class="eye-password cursor-pointer bg-indigo-600 border p-2">
                            @if ($togglePasswordConfirmationEye)
                                <img src="{{ asset('img/admin//svg/eye.svg') }}" alt="eye">
                            @else
                                <img src="{{ asset('img/admin//svg/eye-off.svg') }}" alt="eye-off">
                            @endif
                        </span>

                    </div>
                    @error('passwordConfirmation')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mt-4 flex justify-end">
                    <button type="submit" @if (!$isFormValid) disabled @endif
                        class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none  focus:ring-indigo-300 @if (!$isFormValid) disabled:bg-indigo-300 @endif">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
