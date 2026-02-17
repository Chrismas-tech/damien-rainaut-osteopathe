<!-- Footer -->
<footer id="footer" class="footer-16 footer position-relative">

    <div class="container">

        <div class="footer-main" {{-- data-aos="fade-up" data-aos-delay="100" --}}>
            <div class="row align-items-start">

                <div class="col-lg-5">
                    <div class="brand-section">
                        <a href="{{ route('website.home') }}" class="logo d-flex align-items-center mb-4">
                            <img src="{{ asset('storage/logo/logo.svg') }}" alt="{{ $website->application_name }}">
                            <span class="sitename ms-2">{{ App\Models\Website::getSettings()->application_name }}</span>
                        </a>

                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            <p class="brand-description">
                                Cabinet d’ostéopathie à Nice proposant une prise en charge globale et personnalisée
                                pour soulager douleurs, tensions et troubles fonctionnels du quotidien.
                            </p>
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            <p class="brand-description">
                                Osteopathy practice in Nice offering comprehensive and personalised care
                                to relieve everyday pain, tension and functional disorders.
                            </p>
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            <p class="brand-description">
                                Osteopathie-Praxis in Nizza mit ganzheitlicher und individueller Betreuung
                                zur Linderung von Schmerzen, Verspannungen und funktionellen Störungen im Alltag.
                            </p>
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            <p class="brand-description">
                                Studio di osteopatia a Nizza con presa in carico globale e personalizzata
                                per alleviare dolori, tensioni e disturbi funzionali quotidiani.
                            </p>
                        @endif

                        <div class="contact-info mt-5">
                            <div class="contact-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>{{ App\Models\Website::getSettings()->address_service }}</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-telephone"></i>
                                <a
                                    href="tel:{{ App\Models\Website::getSettings()->country_code_phone_website . App\Models\Website::getSettings()->phone_website }}">
                                    {{ App\Helpers\CustomClasses::formatFrontendPhoneNumber(App\Models\Website::getSettings()->country_code_phone_website . App\Models\Website::getSettings()->phone_website) }}
                                </a>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:{{ App\Models\Website::getSettings()->email_website }}">
                                    {{ App\Models\Website::getSettings()->email_website }}
                                </a>
                            </div>
                        </div>

                        <div class="social-links mt-4 d-flex">
                            {{-- <a href="{{ App\Models\Website::getSettings()->link_twitter }}" target="_blank"
                                class="me-2"><i class="bi bi-twitter-x"></i></a> --}}
                            <a href="{{ App\Models\Website::getSettings()->link_linkedin }}" target="_blank"
                                class="me-2"><i class="bi bi-linkedin"></i></a>
                            <a href="{{ App\Models\Website::getSettings()->link_facebook }}" target="_blank"
                                class="me-2"><i class="bi bi-facebook"></i></a>
                            <a href="{{ App\Models\Website::getSettings()->link_instagram }}" target="_blank"
                                class="me-2"><i class="bi bi-instagram"></i></a>
                            <a href="https://wa.me/{{ App\Models\Website::getSettings()->whatsapp_phone }}"
                                target="_blank" class="me-2">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="footer-nav-wrapper">
                        <div class="row">
                            @if (Route::currentRouteName() === 'website.home')
                                <div class="col-6 col-lg-4">
                                    <div class="nav-column">
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <h6>Ostéopathie D.O</h6>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <h6>Osteopathy D.O</h6>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <h6>Osteopathie D.O</h6>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <h6>Osteopatia D.O</h6>
                                        @endif
                                        <nav class="footer-nav">
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                <a href="#hero">Présentation</a>
                                                <a href="#home-about">Approche ostéopathique</a>
                                                <a href="#departments-tabs">Spécialisations ostéopathiques</a>
                                                <a href="#featured-services">Expertise Terrain & Sécurité Clinique</a>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                <a href="#hero">Presentation</a>
                                                <a href="#home-about">Osteopathic Approach</a>
                                                <a href="#departments-tabs">Osteopathic Specialisations</a>
                                                <a href="#featured-services">Field Expertise & Clinical Safety</a>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                <a href="#hero">Vorstellung</a>
                                                <a href="#home-about">Osteopathischer Ansatz</a>
                                                <a href="#departments-tabs">Osteopathische Spezialisierungen</a>
                                                <a href="#featured-services">Einsatzerfahrung & Klinische Sicherheit</a>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                <a href="#hero">Presentazione</a>
                                                <a href="#home-about">Approccio osteopatico</a>
                                                <a href="#departments-tabs">Specializzazioni osteopatiche</a>
                                                <a href="#featured-services">Competenza sul Campo & Sicurezza
                                                    Clinica</a>
                                            @endif
                                        </nav>
                                    </div>
                                </div>
                            @endif

                            <div class="col-6 col-lg-4">
                                <div class="nav-column">
                                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                                        <h6>Consultations</h6>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                        <h6>Appointments</h6>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                        <h6>Termine</h6>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                        <h6>Appuntamenti</h6>
                                    @endif
                                    <nav class="footer-nav">
                                        <a href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut"
                                            target="_blank">
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                Prendre rendez-vous
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                Book appointment
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                Termin buchen
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                Prenota appuntamento
                                            @endif
                                        </a>
                                        <a target="_blank" href="{{ route('website.honoraires') }}">
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                Honoraires
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                Fees
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                Honorare
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                Tariffe
                                            @endif
                                        </a>
                                        <a target="_blank" href="{{ route('website.contact') }}">
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                Contact
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                Contact
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                Kontakt
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                Contatti
                                            @endif
                                        </a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4">
                                <div class="nav-column">
                                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                                        <h6>Site Web</h6>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                        <h6>Website</h6>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                        <h6>Website</h6>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                        <h6>Sito Web</h6>
                                    @endif
                                    <nav class="footer-nav">
                                        @if (Route::currentRouteName() === 'website.home')
                                            <a href="#google-map">
                                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                    Plan google map
                                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                    Google map
                                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                    Google Maps
                                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                    Mappa Google
                                                @endif
                                            </a>
                                        @endif
                                        <a target="_blank" href="{{ route('website.credits') }}">
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                Crédits
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                Credits
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                Impressum/Credits
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                Crediti
                                            @endif
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-content" {{-- data-aos="fade-up" data-aos-delay="300" --}}>
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="copyright">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}.
                                    <br>
                                    Tous droits réservés.
                                </p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}.
                                    <br>
                                    All rights reserved.
                                </p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}.
                                    <br>
                                    Alle Rechte vorbehalten.
                                </p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}.
                                    <br>
                                    Tutti i diritti riservati.
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="legal-links">
                            <a href="{{ route('website.privacy-policy') }}">
                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                    Politique de confidentialité
                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                    Privacy Policy
                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                    Datenschutz
                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                    Politica sulla privacy
                                @endif
                            </a>
                            <a href="{{ route('website.terms-of-services') }}">
                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                    Conditions d’utilisation
                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                    Terms of Use
                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                    Nutzungsbedingungen
                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                    Condizioni d’uso
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
