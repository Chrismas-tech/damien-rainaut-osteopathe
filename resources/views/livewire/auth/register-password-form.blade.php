<div>
    <div class="mb-4">
        <label for="password">
            {{ Route::currentRouteName() == 'register' ? 'Password' : 'New Password' }}
        </label>
        <div class="text-sm italic">
            (9 characters, 1 number, 1 uppercase letter, 1 lowercase letter)
        </div>

        <div class="flex items-center">
            <input @if ($togglePasswordEye) type="text" @else type="password" @endif wire:model.live="password"
                name="password"
                class="input-eye px-4 text-lg block w-full border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none"
                id="password" />

            <span wire:click="PasswordEyeToggle" class="eye-password cursor-pointer bg-indigo-600 border p-2">
                @if ($togglePasswordEye)
                    <img src="{{ asset('img/admin//svg/eye.svg') }}" alt="eye">
                @else
                    <img src="{{ asset('img/admin//svg/eye-off.svg') }}" alt="eye-off">
                @endif
            </span>
        </div>
        @error('password')
            <span class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="password">Password Confirmation</label>
        <div class="flex items-center">
            <input id="passwordConfirmation" @if ($togglePasswordConfirmationEye) type="text" @else type="password" @endif
                wire:model.live="passwordConfirmation" name="password_confirmation"
                class="input-eye px-4 text-lg block w-full border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none"
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
            <span class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                {{ $message }}
            </span>
        @enderror
    </div>
</div>
