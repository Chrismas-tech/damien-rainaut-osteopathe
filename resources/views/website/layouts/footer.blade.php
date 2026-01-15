<footer id="footer" class="footer-16 footer position-relative">

    <div class="container">

        <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-start">

                <div class="col-lg-5">
                    <div class="brand-section">
                        <a href="{{ route('website.home') }}" class="logo d-flex align-items-center mb-4">
                            <span class="sitename">{{ App\Models\Website::getSettings()->application_name }}</span>
                        </a>
                        <p class="brand-description">
                            Nous créons des expériences digitales exceptionnelles grâce à un design réfléchi et des
                            solutions innovantes qui valorisent votre présence en ligne.
                        </p>

                        <div class="contact-info mt-5">
                            <div class="contact-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>{{ App\Models\Website::getSettings()->address_service }}</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-telephone"></i>
                                <span>{{ App\Models\Website::getSettings()->country_code_phone_website }}{{ App\Models\Website::getSettings()->phone_website }}</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope"></i>
                                <span>{{ App\Models\Website::getSettings()->email_website }}</span>
                            </div>
                        </div>

                        <div class="social-links mt-4 d-flex">
                            <a href="{{ App\Models\Website::getSettings()->link_twitter }}" target="_blank"
                                class="me-2"><i class="bi bi-twitter-x"></i></a>
                            <a href="{{ App\Models\Website::getSettings()->link_facebook }}" target="_blank"
                                class="me-2"><i class="bi bi-facebook"></i></a>
                            <a href="{{ App\Models\Website::getSettings()->link_instagram }}" target="_blank"
                                class="me-2"><i class="bi bi-instagram"></i></a>
                            <a href="{{ App\Models\Website::getSettings()->link_linkedin }}" target="_blank"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="footer-nav-wrapper">
                        <div class="row">

                            <div class="col-6 col-lg-3">
                                <div class="nav-column">
                                    <h6>Studio</h6>
                                    <nav class="footer-nav">
                                        <a href="#">Notre Histoire</a>
                                        <a href="#">Processus de Design</a>
                                        <a href="#">Portfolio</a>
                                        <a href="#">Études de Cas</a>
                                        <a href="#">Récompenses</a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3">
                                <div class="nav-column">
                                    <h6>Services</h6>
                                    <nav class="footer-nav">
                                        <a href="#">Identité de Marque</a>
                                        <a href="#">Web Design</a>
                                        <a href="#">Applications Mobiles</a>
                                        <a href="#">Stratégie Digitale</a>
                                        <a href="#">Consultation</a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3">
                                <div class="nav-column">
                                    <h6>Ressources</h6>
                                    <nav class="footer-nav">
                                        <a href="#">Blog Design</a>
                                        <a href="#">Guide de Style</a>
                                        <a href="#">Ressources Gratuites</a>
                                        <a href="#">Tutoriels</a>
                                        <a href="#">Inspiration</a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3">
                                <div class="nav-column">
                                    <h6>Nous Contacter</h6>
                                    <nav class="footer-nav">
                                        <a href="#">Lancer un Projet</a>
                                        <a href="#">Planifier un Appel</a>
                                        <a href="#">S’abonner à la Newsletter</a>
                                        <a href="#">Suivre les Actualités</a>
                                        <a href="#">Partenariat</a>
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
                            <p>© {{ App\Models\Website::getSettings()->application_name }} - {{ date('Y') }}. Tous
                                droits réservés.</p>
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
