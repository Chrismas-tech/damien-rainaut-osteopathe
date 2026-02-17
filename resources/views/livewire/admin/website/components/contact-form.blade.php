<div class="col-lg-7">
    <div class="contact-form-card" {{-- data-aos="fade-up" data-aos-delay="200" --}}>
        @if (\App\Models\Website::getSettings()->lang === 'fr')
            <h2>Envoyez-nous un message</h2>
            <p class="mb-4">Vous avez des questions ou souhaitez en savoir plus ? Contactez-nous et notre équipe vous
                répondra rapidement.</p>
        @elseif (\App\Models\Website::getSettings()->lang === 'en')
            <h2>Send us a message</h2>
            <p class="mb-4">Do you have questions or want to know more? Contact us and our team will get back to you
                quickly.</p>
        @elseif (\App\Models\Website::getSettings()->lang === 'de')
            <h2>Schicken Sie uns eine Nachricht</h2>
            <p class="mb-4">Haben Sie Fragen oder möchten Sie mehr erfahren? Kontaktieren Sie uns – unser Team
                antwortet Ihnen schnell.</p>
        @elseif (\App\Models\Website::getSettings()->lang === 'it')
            <h2>Inviaci un messaggio</h2>
            <p class="mb-4">Hai domande o vuoi saperne di più? Contattaci e il nostro team ti risponderà rapidamente.
            </p>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="row g-4">

                <div class="col-md-6">
                    <input type="text" wire:model.live="firstname"
                        class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                        placeholder="@if (\App\Models\Website::getSettings()->lang === 'fr') Votre prénom
                                     @elseif (\App\Models\Website::getSettings()->lang === 'en') Your first name
                                     @elseif (\App\Models\Website::getSettings()->lang === 'de') Ihr Vorname
                                     @elseif (\App\Models\Website::getSettings()->lang === 'it') Il tuo nome @endif"
                        required>
                </div>

                <div class="col-md-6">
                    <input type="text" wire:model.live="lastname"
                        class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                        placeholder="@if (\App\Models\Website::getSettings()->lang === 'fr') Votre nom
                                     @elseif (\App\Models\Website::getSettings()->lang === 'en') Your last name
                                     @elseif (\App\Models\Website::getSettings()->lang === 'de') Ihr Nachname
                                     @elseif (\App\Models\Website::getSettings()->lang === 'it') Il tuo cognome @endif"
                        required>
                </div>

                <div class="col-12">
                    <input type="email" wire:model.live="email"
                        class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="@if (\App\Models\Website::getSettings()->lang === 'fr') Votre email
                                     @elseif (\App\Models\Website::getSettings()->lang === 'en') Your email
                                     @elseif (\App\Models\Website::getSettings()->lang === 'de') Ihre E-Mail
                                     @elseif (\App\Models\Website::getSettings()->lang === 'it') La tua email @endif"
                        required>
                </div>

                <div class="col-12">
                    <select wire:model.live="subject" class="form-control @error('subject') is-invalid @enderror"
                        id="subject" required>
                        <option value="" selected>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                Sélectionnez un type de demande
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                Select request type
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                Wählen Sie Anfragetyp
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                Seleziona tipo di richiesta
                            @endif
                        </option>
                        <option value="Demande de Contact">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                Demande de contact
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                Contact request
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                Kontaktanfrage
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                Richiesta di contatto
                            @endif
                        </option>
                        <option value="Demande de devis">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                Demande de devis
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                Quote request
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                Angebot anfragen
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                Richiesta di preventivo
                            @endif
                        </option>
                    </select>

                    @error('subject')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-12">
                    <textarea wire:model.live="message" class="form-control @error('message') is-invalid @enderror" id="message"
                        rows="6"
                        placeholder="@if (\App\Models\Website::getSettings()->lang === 'fr') Votre message
                                     @elseif (\App\Models\Website::getSettings()->lang === 'en') Your message
                                     @elseif (\App\Models\Website::getSettings()->lang === 'de') Ihre Nachricht
                                     @elseif (\App\Models\Website::getSettings()->lang === 'it') Il tuo messaggio @endif"
                        required></textarea>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" wire:model.live="termsOfServices" class="form-check-input"
                            id="terms_of_services">
                        <label class="form-check-label" for="terms_of_services">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                J'accepte les <a href="{{ route('website.terms-of-services') }}"
                                    class="font-weight-bold">Conditions générales</a> et la <a
                                    href="{{ route('website.privacy-policy') }}" class="font-weight-bold">Politique de
                                    confidentialité</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                I accept the <a href="{{ route('website.terms-of-services') }}"
                                    class="font-weight-bold">Terms of Use</a> and the <a
                                    href="{{ route('website.privacy-policy') }}" class="font-weight-bold">Privacy
                                    Policy</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                Ich akzeptiere die <a href="{{ route('website.terms-of-services') }}"
                                    class="font-weight-bold">Nutzungsbedingungen</a> und die <a
                                    href="{{ route('website.privacy-policy') }}"
                                    class="font-weight-bold">Datenschutzrichtlinie</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                Accetto le <a href="{{ route('website.terms-of-services') }}"
                                    class="font-weight-bold">Condizioni d’uso</a> e la <a
                                    href="{{ route('website.privacy-policy') }}" class="font-weight-bold">Informativa
                                    sulla privacy</a>
                            @endif
                        </label>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-submit" @if (!$isFormValid) disabled @endif>
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Envoyer
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Send
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Senden
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Invia
                        @endif
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
