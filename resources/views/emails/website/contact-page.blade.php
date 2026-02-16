<body>
    @component('mail::logo', ['logoUrl' => $logoUrl])
    @endcomponent

    <div class="card">
        @component('mail::receiver', ['receiverName' => $receiverName])
        @endcomponent

        <p class="light-gray">
            Vous avez reçu un nouveau message de <strong>{{ $senderName }}</strong>
            ({{ $senderEmail }}) depuis votre site web
            {{ \App\Models\Website::getSettings()->application_name }} :
        </p>

        <hr>
        <h3 class="black m-0"> {{ $subject }}</h3>
        <hr>

        @component('mail::message', ['message' => $message])
        @endcomponent
    </div>

    @component('mail::footer')
    @endcomponent
</body>
