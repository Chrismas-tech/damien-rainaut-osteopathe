<div class="col-lg-7">
    <div class="contact-form-card" {{-- data-aos="fade-up" data-aos-delay="200" --}}>
        @if (session('locale') === 'fr')
            <h2>Envoyez-nous un message</h2>
            <p class="mb-4">Vous avez des questions ou souhaitez en savoir plus ? Contactez-nous et notre équipe vous
                répondra rapidement.</p>
        @elseif (session('locale') === 'en')
            <h2>Send us a message</h2>
            <p class="mb-4">Do you have questions or want to know more? Contact us and our team will get back to you
                quickly.</p>
        @elseif (session('locale') === 'de')
            <h2>Schicken Sie uns eine Nachricht</h2>
            <p class="mb-4">Haben Sie Fragen oder möchten Sie mehr erfahren? Kontaktieren Sie uns – unser Team
                antwortet Ihnen schnell.</p>
        @elseif (session('locale') === 'it')
            <h2>Inviaci un messaggio</h2>
            <p class="mb-4">Hai domande o vuoi saperne di più? Contattaci e il nostro team ti risponderà rapidamente.
            </p>
        @elseif (session('locale') === 'es')
            <h2>Envíanos un mensaje</h2>
            <p class="mb-4">¿Tienes preguntas o deseas saber más? Contáctanos y nuestro equipo te responderá
                rápidamente.</p>
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
                        placeholder="@if (session('locale') === 'fr') Votre prénom
                                     @elseif (session('locale') === 'en') Your first name
                                     @elseif (session('locale') === 'de') Ihr Vorname
                                     @elseif (session('locale') === 'it') Il tuo nome
                                     @elseif (session('locale') === 'es') Tu nombre @endif"
                        required>
                </div>

                <div class="col-md-6">
                    <input type="text" wire:model.live="lastname"
                        class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                        placeholder="@if (session('locale') === 'fr') Votre nom
                                     @elseif (session('locale') === 'en') Your last name
                                     @elseif (session('locale') === 'de') Ihr Nachname
                                     @elseif (session('locale') === 'it') Il tuo cognome
                                     @elseif (session('locale') === 'es') Tu apellido @endif"
                        required>
                </div>

                <div class="col-12">
                    <input type="email" wire:model.live="email"
                        class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="@if (session('locale') === 'fr') Votre email
                                     @elseif (session('locale') === 'en') Your email
                                     @elseif (session('locale') === 'de') Ihre E-Mail
                                     @elseif (session('locale') === 'it') La tua email
                                     @elseif (session('locale') === 'es') Tu correo electrónico @endif"
                        required>
                </div>

                <div class="col-12">
                    <select wire:model.live="subject" class="form-control @error('subject') is-invalid @enderror"
                        id="subject" required>
                        <option value="" selected>
                            @if (session('locale') === 'fr')
                                Sélectionnez un type de demande
                            @elseif (session('locale') === 'en')
                                Select request type
                            @elseif (session('locale') === 'de')
                                Wählen Sie Anfragetyp
                            @elseif (session('locale') === 'it')
                                Seleziona tipo di richiesta
                            @elseif (session('locale') === 'es')
                                Selecciona tipo de solicitud
                            @endif
                        </option>
                        <option value="Demande de Contact">
                            @if (session('locale') === 'fr')
                                Demande de contact
                            @elseif (session('locale') === 'en')
                                Contact request
                            @elseif (session('locale') === 'de')
                                Kontaktanfrage
                            @elseif (session('locale') === 'it')
                                Richiesta di contatto
                            @elseif (session('locale') === 'es')
                                Solicitud de contacto
                            @endif
                        </option>
                        <option value="Demande de devis">
                            @if (session('locale') === 'fr')
                                Demande de devis
                            @elseif (session('locale') === 'en')
                                Quote request
                            @elseif (session('locale') === 'de')
                                Angebot anfragen
                            @elseif (session('locale') === 'it')
                                Richiesta di preventivo
                            @elseif (session('locale') === 'es')
                                Solicitud de presupuesto
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
                        placeholder="@if (session('locale') === 'fr') Votre message
                                     @elseif (session('locale') === 'en') Your message
                                     @elseif (session('locale') === 'de') Ihre Nachricht
                                     @elseif (session('locale') === 'it') Il tuo messaggio
                                     @elseif (session('locale') === 'es') Tu mensaje @endif"
                        required></textarea>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" wire:model.live="termsOfServices" class="form-check-input"
                            id="terms_of_services">
                        <label class="form-check-label" for="terms_of_services">
                            @if (session('locale') === 'fr')
                                J'accepte les <a target="_blank" href="{{ route('website.terms-of-services') }}"
                                    class="font-weight-bold">Conditions générales</a>
                            @elseif (session('locale') === 'en')
                                I accept the <a target="_blank" href="{{ route('website.terms-of-services') }}"
                                    class="font-weight-bold">Terms of Use</a>
                            @elseif (session('locale') === 'de')
                                Ich akzeptiere die <a target="_blank" href="{{ route('website.terms-of-services') }}"
                                    class="font-weight-bold">Nutzungsbedingungen</a>
                            @elseif (session('locale') === 'it')
                                Accetto le <a target="_blank" href="{{ route('website.terms-of-services') }}"
                                    class="font-weight-bold">Condizioni d’uso</a>
                            @elseif (session('locale') === 'es')
                                Acepto las <a target="_blank" href="{{ route('website.terms-of-services') }}"
                                    class="font-weight-bold">Condiciones generales</a>
                            @endif
                        </label>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-submit" @if (!$isFormValid) disabled @endif>
                        @if (session('locale') === 'fr')
                            Envoyer
                        @elseif (session('locale') === 'en')
                            Send
                        @elseif (session('locale') === 'de')
                            Senden
                        @elseif (session('locale') === 'it')
                            Invia
                        @elseif (session('locale') === 'es')
                            Enviar
                        @endif
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
