<body>
    @component('mail::logo', ['logoUrl' => $logoUrl])
    @endcomponent

    <div class="card">
        @component('mail::receiver', ['receiverName' => $receiverName])
        @endcomponent

        <p class="light-gray">
            You have received a new message from <strong>{{ $senderName }}</strong>
            ({{ $senderEmail }}) through the contact page on
            {{ \App\Models\Website::getSettings()->application_name }} Application :
        </p>

        <hr>

        @component('mail::message', ['message' => $message])
        @endcomponent
    </div>

    @component('mail::footer')
    @endcomponent
</body>
