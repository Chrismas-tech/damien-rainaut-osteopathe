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

                        @if (session('locale') === 'fr')
                            <p class="brand-description">
                                Cabinet d’ostéopathie à Nice proposant une prise en charge globale et personnalisée
                                pour soulager douleurs, tensions et troubles fonctionnels du quotidien.
                            </p>
                        @elseif (session('locale') === 'en')
                            <p class="brand-description">
                                Osteopathy practice in Nice offering comprehensive and personalised care
                                to relieve everyday pain, tension and functional disorders.
                            </p>
                        @elseif (session('locale') === 'de')
                            <p class="brand-description">
                                Osteopathie-Praxis in Nizza mit ganzheitlicher und individueller Betreuung
                                zur Linderung von Schmerzen, Verspannungen und funktionellen Störungen im Alltag.
                            </p>
                        @elseif (session('locale') === 'it')
                            <p class="brand-description">
                                Studio di osteopatia a Nizza con presa in carico globale e personalizzata
                                per alleviare dolori, tensioni e disturbi funzionali quotidiani.
                            </p>
                        @elseif (session('locale') === 'es')
                            <p class="brand-description">
                                Gabinete de osteopatía en Niza que ofrece una atención global y personalizada
                                para aliviar dolores, tensiones y trastornos funcionales del día a día.
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

                        <div class="social-links mt-2 d-flex">
                            {{-- <a href="{{ App\Models\Website::getSettings()->link_twitter }}" target="_blank"
                                class="me-2"><i class="bi bi-twitter-x"></i></a> --}}
                            <a href="{{ App\Models\Website::getSettings()->link_linkedin }}" target="_blank"
                                class="me-4"><i class="bi bi-linkedin"></i></a>
                            <a href="{{ App\Models\Website::getSettings()->link_facebook }}" target="_blank"
                                class="me-4"><i class="bi bi-facebook"></i></a>
                            <a href="{{ App\Models\Website::getSettings()->link_instagram }}" target="_blank"
                                class="me-4"><i class="bi bi-instagram"></i></a>
                            <a href="https://wa.me/{{ App\Models\Website::getSettings()->whatsapp_phone }}"
                                target="_blank" class="me-4">
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
                                        @if (session('locale') === 'fr')
                                            <h6>Ostéopathie D.O</h6>
                                        @elseif (session('locale') === 'en')
                                            <h6>Osteopathy D.O</h6>
                                        @elseif (session('locale') === 'de')
                                            <h6>Osteopathie D.O</h6>
                                        @elseif (session('locale') === 'it')
                                            <h6>Osteopatia D.O</h6>
                                        @elseif (session('locale') === 'es')
                                            <h6>Osteopatía D.O</h6>
                                        @endif
                                        <nav class="footer-nav">
                                            @if (session('locale') === 'fr')
                                                <a href="#hero">Présentation</a>
                                                <a href="#home-about">Approche ostéopathique</a>
                                                <a href="#departments-tabs">Spécialisations ostéopathiques</a>
                                                <a href="#featured-services">Expertise Terrain & Sécurité Clinique</a>
                                            @elseif (session('locale') === 'en')
                                                <a href="#hero">Presentation</a>
                                                <a href="#home-about">Osteopathic Approach</a>
                                                <a href="#departments-tabs">Osteopathic Specialisations</a>
                                                <a href="#featured-services">Field Expertise & Clinical Safety</a>
                                            @elseif (session('locale') === 'de')
                                                <a href="#hero">Vorstellung</a>
                                                <a href="#home-about">Osteopathischer Ansatz</a>
                                                <a href="#departments-tabs">Osteopathische Spezialisierungen</a>
                                                <a href="#featured-services">Einsatzerfahrung & Klinische Sicherheit</a>
                                            @elseif (session('locale') === 'it')
                                                <a href="#hero">Presentazione</a>
                                                <a href="#home-about">Approccio osteopatico</a>
                                                <a href="#departments-tabs">Specializzazioni osteopatiche</a>
                                                <a href="#featured-services">Competenza sul Campo & Sicurezza
                                                    Clinica</a>
                                            @elseif (session('locale') === 'es')
                                                <a href="#hero">Presentación</a>
                                                <a href="#home-about">Enfoque osteopático</a>
                                                <a href="#departments-tabs">Especializaciones osteopáticas</a>
                                                <a href="#featured-services">Experiencia de Campo y Seguridad
                                                    Clínica</a>
                                            @endif
                                        </nav>
                                    </div>
                                </div>
                            @endif

                            <div class="col-6 col-lg-4">
                                <div class="nav-column">
                                    @if (session('locale') === 'fr')
                                        <h6>Consultations</h6>
                                    @elseif (session('locale') === 'en')
                                        <h6>Appointments</h6>
                                    @elseif (session('locale') === 'de')
                                        <h6>Termine</h6>
                                    @elseif (session('locale') === 'it')
                                        <h6>Appuntamenti</h6>
                                    @elseif (session('locale') === 'es')
                                        <h6>Citas</h6>
                                    @endif
                                    <nav class="footer-nav">
                                        <a href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut"
                                            target="_blank">
                                            @if (session('locale') === 'fr')
                                                Prendre rendez-vous
                                            @elseif (session('locale') === 'en')
                                                Book appointment
                                            @elseif (session('locale') === 'de')
                                                Termin buchen
                                            @elseif (session('locale') === 'it')
                                                Prenota appuntamento
                                            @elseif (session('locale') === 'es')
                                                Reservar cita
                                            @endif
                                        </a>
                                        <a target="_blank" href="{{ route('website.honoraires') }}">
                                            @if (session('locale') === 'fr')
                                                Honoraires
                                            @elseif (session('locale') === 'en')
                                                Fees
                                            @elseif (session('locale') === 'de')
                                                Honorare
                                            @elseif (session('locale') === 'it')
                                                Tariffe
                                            @elseif (session('locale') === 'es')
                                                Honorarios
                                            @endif
                                        </a>
                                        <a target="_blank" href="{{ route('website.contact') }}">
                                            @if (session('locale') === 'fr')
                                                Contact
                                            @elseif (session('locale') === 'en')
                                                Contact
                                            @elseif (session('locale') === 'de')
                                                Kontakt
                                            @elseif (session('locale') === 'it')
                                                Contatti
                                            @elseif (session('locale') === 'es')
                                                Contacto
                                            @endif
                                        </a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4">
                                <div class="nav-column">
                                    @if (session('locale') === 'fr')
                                        <h6>Site Web</h6>
                                    @elseif (session('locale') === 'en')
                                        <h6>Website</h6>
                                    @elseif (session('locale') === 'de')
                                        <h6>Website</h6>
                                    @elseif (session('locale') === 'it')
                                        <h6>Sito Web</h6>
                                    @elseif (session('locale') === 'es')
                                        <h6>Sitio Web</h6>
                                    @endif
                                    <nav class="footer-nav">
                                        @if (Route::currentRouteName() === 'website.home')
                                            <a href="#google-map">
                                                @if (session('locale') === 'fr')
                                                    Plan google map
                                                @elseif (session('locale') === 'en')
                                                    Google map
                                                @elseif (session('locale') === 'de')
                                                    Google Maps
                                                @elseif (session('locale') === 'it')
                                                    Mappa Google
                                                @elseif (session('locale') === 'es')
                                                    Mapa Google
                                                @endif
                                            </a>
                                        @endif
                                        <a target="_blank" href="{{ route('website.credits') }}">
                                            @if (session('locale') === 'fr')
                                                Crédits
                                            @elseif (session('locale') === 'en')
                                                Credits
                                            @elseif (session('locale') === 'de')
                                                Impressum/Credits
                                            @elseif (session('locale') === 'it')
                                                Crediti
                                            @elseif (session('locale') === 'es')
                                                Créditos
                                            @endif
                                        </a>
                                        <a href="{{ route('website.terms-of-services') }}">
                                            @if (session('locale') === 'fr')
                                                Conditions d’utilisation
                                            @elseif (session('locale') === 'en')
                                                Terms of Use
                                            @elseif (session('locale') === 'de')
                                                Nutzungsbedingungen
                                            @elseif (session('locale') === 'it')
                                                Condizioni d’uso
                                            @elseif (session('locale') === 'es')
                                                Condiciones de uso
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
                            @if (session('locale') === 'fr')
                                <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}.
                                    <br>
                                    Tous droits réservés.
                                </p>
                            @elseif (session('locale') === 'en')
                                <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}.
                                    <br>
                                    All rights reserved.
                                </p>
                            @elseif (session('locale') === 'de')
                                <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}.
                                    <br>
                                    Alle Rechte vorbehalten.
                                </p>
                            @elseif (session('locale') === 'it')
                                <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}.
                                    <br>
                                    Tutti i diritti riservati.
                                </p>
                            @elseif (session('locale') === 'es')
                                <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}.
                                    <br>
                                    Todos los derechos reservados.
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
