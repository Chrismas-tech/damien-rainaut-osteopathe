<footer id="footer" class="footer-16 footer position-relative">

    <div class="container">

        <div class="footer-main" {{-- data-aos="fade-up" data-aos-delay="100" --}}>
            <div class="row align-items-start">

                <div class="col-lg-5">
                    <div class="brand-section">
                        <a href="{{ route('website.home') }}" class="logo d-flex align-items-center mb-4">
                            <img src="{{ asset('storage/logo/logo.svg') }}" alt="{{ $website->application_name }}">
                            <span class="sitename ms-4">{{ App\Models\Website::getSettings()->application_name }}</span>
                        </a>
                        <p class="brand-description">
                            Cabinet d’ostéopathie à Nice proposant une prise en charge globale et personnalisée
                            pour soulager douleurs, tensions et troubles fonctionnels du quotidien.
                        </p>

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

                            <div class="col-6 col-lg-4">
                                <div class="nav-column">
                                    <h6>Cabinet</h6>
                                    <nav class="footer-nav">
                                        <a href="#">Présentation</a>
                                        <a href="#">Approche ostéopathique</a>
                                        <a href="#">Le cabinet</a>
                                        <a target="_blank" href="{{ route('website.honoraires') }}">Honoraires</a>
                                        <a
                                            href="https://search.google.com/local/writereview?placeid=ChIJxTKGRwHRzRIRcEX6Youk4d0">Avis</a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4">
                                <div class="nav-column">
                                    <h6>Consultations</h6>
                                    <nav class="footer-nav">
                                        <a href="#">Adultes</a>
                                        <a href="#">Sportifs</a>
                                        <a href="#">Femmes</a>
                                        <a href="#">Douleurs chroniques</a>
                                        <a href="#">Prévention</a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4">
                                <div class="nav-column">
                                    <h6>Informations</h6>
                                    <nav class="footer-nav">
                                        <a target="_blank" href="{{ route('website.credits') }}">Crédits</a>
                                        <a href="#">Questions fréquentes</a>
                                        <a href="#">Remboursement mutuelle</a>
                                        <a href="#">Conseils post-consultation</a>
                                        <a href="#">Actualités</a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4">
                                <div class="nav-column">
                                    <h6>Rendez-vous</h6>
                                    <nav class="footer-nav">
                                        <a href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut"
                                            target="_blank">Prendre rendez-vous</a>
                                        <a href="{{ route('website.contact') }}">Contact</a>
                                        <a href="#">Horaires</a>
                                        <a href="#">Urgences</a>
                                        <a href="#">Accès Doctolib</a>
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
            <div class="bottom-content" data-aos="fade-up" data-aos-delay="300">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}.
                                Tous droits réservés.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="legal-links">
                            <a href="{{ route('website.privacy-policy') }}">Politique de confidentialité</a>
                            <a href="{{ route('website.terms-of-services') }}">Conditions d’utilisation</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
