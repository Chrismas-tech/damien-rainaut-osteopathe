<div class="mb-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">

    <!-- card -->
    <div class="card shadow">
        <!-- card body -->
        <div class="card-body">
            <!-- card title -->
            <div class="mb-3">
                <h4 class="mb-4">Delete your account permanently ?</h4>
                <div>
                    <p>
                        Once your account is deleted, all of its resources and data will be permanently deleted.
                    </p>
                    <p>
                        Before deleting your account, please download any data or information that you wish to retain.
                    </p>
                </div>
            </div>

            <h4 class="mb-4">Enter your current password first and click on the delete button</h4>

            <div class="mb-4">

                <div class="flex items-end mb-1">
                    <label for="currentPassword">Current Password</label>

                    @if ($currentPasswordValid)
                        <span class="ms-2">
                            <img src="{{ asset('img/admin//svg/check-circle.svg') }}" alt="eye">
                        </span>
                    @else
                        <span class="ms-2">
                            <img src="{{ asset('img/admin//svg/alert-triangle.svg') }}" alt="eye">
                        </span>
                    @endif
                </div>

                <div class="flex items-center">
                    <input @if ($toggleCurrentPasswordEye) type="text" @else type="password" @endif
                        wire:model.live="currentPassword"
                        class="px-4 text-lg block w-full border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:pointer-events-none disabled:opacity-5"
                        id="currentPassword" />

                    <span wire:click="CurrentPasswordEyeToggle"
                        class="eye-password cursor-pointer bg-indigo-600 border p-2">
                        @if ($toggleCurrentPasswordEye)
                            <img src="{{ asset('img/admin//svg/eye.svg') }}" alt="eye">
                        @else
                            <img src="{{ asset('img/admin//svg/eye-off.svg') }}" alt="eye-off">
                        @endif
                    </span>

                    <div wire:loading wire:target="currentPassword"
                        class="ms-2 animate-spin inline-block w-6 h-6 border-[3px] border-current border-t-transparent text-indigo-600 rounded-full "
                        role="status" aria-label="loading">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

                @error('currentPassword')
                    <span
                        class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            <div class="mt-4 flex justify-center">
                <button wire:click="deleteAccountModal" @if (!$isFormValid) disabled @endif
                    class="btn bg-red-600 text-white border-red-600 hover:bg-red-800 hover:border-red-800 active:bg-red-800 active:border-red-800 focus:outline-none {{--  --}} focus:ring-red-300 @if (!$isFormValid) disabled:bg-red-300 @endif">
                    DELETE YOUR ACCOUNT
                </button>
            </div>
        </div>
    </div>
</div>
