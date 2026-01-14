<div class="mb-5">
    <label for="password" class="inline-block">Password</label>
    <div class="flex items-center">
        <input type="{{ $togglePasswordEye ? 'text' : 'password' }}" name="password"
            class="px-4 text-lg block w-full border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:pointer-events-none disabled:opacity-5"
            id="password" placeholder="*********" wire:model.defer="password">

        <span wire:click="togglePassword" class="eye-password cursor-pointer bg-indigo-600 border p-2">
            <img src="{{ $togglePasswordEye ? asset('img/admin//svg/eye.svg') : asset('img/admin/svg/eye-off.svg') }}"
                alt="eye">
        </span>
    </div>
</div>
