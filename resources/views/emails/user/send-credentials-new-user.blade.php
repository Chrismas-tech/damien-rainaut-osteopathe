<body>
    <div class="card">
        @component('mail::logo', ['logoUrl' => $logoUrl])
        @endcomponent

        @component('mail::receiver', ['receiverName' => $receiverName])
        @endcomponent

        <p class="my-1">
            Your access is now available as {{ ucfirst($role) }} !
        </p>

        <hr>

        <p class="my-1">
            Please find your credentials below to access your personal account : <br>
            Email : {{ $receiverEmail }} <br>
            Password : {{ $passwordNoBcrypt }}
        </p>

        <small class="light-gray">
            Note : Please change your password as soon as possible once you have logged in.
        </small>

        @component('mail::button', ['actionUrl' => $actionUrl])
            Click here to Login
        @endcomponent
    </div>

    @component('mail::footer')
    @endcomponent
</body>
