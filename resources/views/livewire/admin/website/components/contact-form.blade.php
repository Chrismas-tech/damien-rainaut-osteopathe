<div class="col-lg-7">
    <div class="contact-form-card" {{-- data-aos="fade-up" data-aos-delay="200" --}}>
        <h2>Envoyez-nous un message</h2>
        <p class="mb-4">Vous avez des questions ou souhaitez en savoir plus ? Contactez-nous et notre équipe vous
            répondra rapidement.</p>

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
                        placeholder="Votre prénom" required>
                </div>

                <div class="col-md-6">
                    <input type="text" wire:model.live="lastname"
                        class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                        placeholder="Votre nom" required>
                </div>

                <div class="col-12">
                    <input type="email" wire:model.live="email"
                        class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Votre email" required>
                </div>

                <div class="col-12">
                    <input type="text" wire:model.live="subject"
                        class="form-control @error('subject') is-invalid @enderror" id="subject" placeholder="Sujet"
                        required>
                </div>

                <div class="col-12">
                    <textarea wire:model.live="message" class="form-control @error('message') is-invalid @enderror" id="message"
                        rows="6" placeholder="Votre message" required></textarea>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" wire:model.live="termsOfServices" class="form-check-input"
                            id="terms_of_services">
                        <label class="form-check-label" for="terms_of_services">
                            J'accepte les <a href="{{ route('website.terms-of-services') }}"
                                class="font-weight-bold">Conditions générales</a> et la <a
                                href="{{ route('website.privacy-policy') }}" class="font-weight-bold">Politique de
                                confidentialité</a>
                        </label>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-submit" @if (!$isFormValid) disabled @endif>
                        Envoyer
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
