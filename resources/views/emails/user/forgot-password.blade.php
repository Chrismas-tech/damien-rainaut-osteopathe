<body>
    <div class="card">
        @component('mail::logo', ['logoUrl' => $logoUrl])
        @endcomponent

        @component('mail::receiver', ['receiverName' => $receiverName])
        @endcomponent

        <p class="my-1">
            We received a password reset request for your account,
            {{ Lang::get('the password reset link will expire in :count minutes.', ['count' => config('auth.passwords.' . config('auth.defaults.passwords') . '.expire')]) }}
        </p>

        @component('mail::button', ['actionUrl' => $actionUrl])
            Reset Password
        @endcomponent

        <p class="my-1">
            If you did not request a password reset, no further action is required.
        </p>
    </div>

    @component('mail::footer')
    @endcomponent
</body>
