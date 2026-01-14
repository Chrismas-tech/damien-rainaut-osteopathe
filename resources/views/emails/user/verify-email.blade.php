<body>
    <div class="card">
        @component('mail::logo', ['logoUrl' => $logoUrl])
        @endcomponent

        @component('mail::receiver', ['receiverName' => $receiverName])
        @endcomponent

        <p class="my-1">
            Please click the button below to verify your email address on our website.
        </p>

        @component('mail::button', ['actionUrl' => $actionUrl])
            Verify Email Address
        @endcomponent

        <p>
            If you did not create an account, no further action is required.
        </p>
    </div>

    @component('mail::footer')
    @endcomponent
</body>
