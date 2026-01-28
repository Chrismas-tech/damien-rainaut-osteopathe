<!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="container custom-container-margin" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    {{-- <div class="trust-badges mb-4" data-aos="fade-right" data-aos-delay="200">
                        <div class="badge-item">
                            <i class="bi bi-shield-check"></i>
                            <span>Ostéopathe diplômé</span>
                        </div>
                        <div class="badge-item">
                            <i class="bi bi-clock"></i>
                            <span>Consultations sur rendez-vous</span>
                        </div>
                        <div class="badge-item">
                            <i class="bi bi-star-fill"></i>
                            <span>Excellents avis patients</span>
                        </div>
                    </div> --}}

                    <h1 data-aos="fade-right" data-aos-delay="300">
                        Ostéopathe à <span class="highlight">Nice</span><br>
                        Une prise en charge humaine et personnalisée
                    </h1>

                    <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                        Le corps possède une capacité d’adaptation remarquable lorsqu’on prend le temps de l’observer et
                        de le comprendre. Mon objectif est de vous accompagner vers des mouvements plus libres et un
                        quotidien plus confortable, à la maison comme au travail.
                        <br>
                        <br>
                        Je mets mes compétences à votre disposition pour soulager ces douleurs et troubles qui entravent
                        votre épanouissement :
                        <strong>
                            maux de dos, maux de genoux, articulations douloureuses, tensions,
                            douleurs aiguës, blocages, troubles digestifs, etc…
                        </strong>
                        <br>
                        <br>
                        Une pratique ostéopathique centrée sur la personne, qui s’intéresse aux causes profondes plutôt
                        qu’à la
                        simple manifestation de la douleur, pour vous guider durablement vers l’équilibre.
                    </p>

                    <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                        <div class="stat-item">
                            <h3>
                                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="2"
                                    class="purecounter"></span>+
                            </h3>
                            <p>Années de pratique</p>
                        </div>
                        <div class="stat-item">
                            <h3>
                                <span data-purecounter-start="0" data-purecounter-end="500"
                                    data-purecounter-duration="2" class="purecounter"></span>+
                            </h3>
                            <p>Plus de patients accompagnés</p>
                        </div>
                        {{-- <div class="stat-item">
                            <h3>
                                <span data-purecounter-start="0" data-purecounter-end="100"
                                    data-purecounter-duration="2" class="purecounter"></span>%
                            </h3>
                            <p>Approche personnalisée</p>
                        </div> --}}
                    </div>

                    <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                        <a target="_blank" href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                            class="btn-custom-primary">
                            Prendre rendez-vous sur Doctolib
                        </a>
                        {{--  <a target="_blank" href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                            class="btn btn-primary">
                            Prendre rendez-vous à domicile
                        </a> --}}
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-outline glightbox">
                            <i class="bi bi-play-circle me-2"></i>
                            Découvrir le cabinet en vidéo
                        </a>
                    </div>

                    <div class="emergency-contact" data-aos="fade-right" data-aos-delay="700">
                        <div class="emergency-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="emergency-info">
                            <small>Renseignements et rendez-vous</small>
                            <strong>
                                <a
                                    href="tel:{{ App\Models\Website::getSettings()->country_code_phone_website . App\Models\Website::getSettings()->phone_website }}">
                                    {{ App\Helpers\CustomClasses::formatFrontendPhoneNumber(App\Models\Website::getSettings()->country_code_phone_website . App\Models\Website::getSettings()->phone_website) }}
                                </a>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                    <div class="main-image">
                        <img src={{ asset('img/website/damien/damien-1.webp') }}
                            alt="Cabinet d’ostéopathie à Nice - Damien Rainaut" class="img-fluid">

                        <div class="floating-card appointment-card">
                            <div class="card-icon">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <div class="card-content">
                                <h6>Disponibilités</h6>
                                <p>Consultations sur rendez-vous</p>
                                <small>Damien Rainaut, Ostéopathe</small>
                            </div>
                        </div>

                        <div class="my-floating-card">
                            <div class="d-flex justify-content-end">
                                <div class="my-badge-card">
                                    <div>
                                        <i class="bi bi-shield-check"></i>
                                        <span>Ostéopathe diplômé D.O</span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="d-flex justify-content-end">
                                <div class="my-badge-card">
                                    <div>
                                        <i class="bi bi-calendar-check"></i>
                                        <span>Consultations sur rendez-vous</span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <div class="trust-badges mb-4" data-aos="fade-right" data-aos-delay="200">
                            <div class="badge-item">
                                <i class="bi bi-shield-check"></i>
                                <span>Ostéopathe diplômé</span>
                            </div>
                        </div>

                        <div class="floating-card rating-card">
                            <div class="card-content">
                                <div class="rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6>{{ App\Models\GoogleReviewsProfile::first()->general_rating }} / 5</h6>
                                <small>Avis patients</small>
                            </div>
                        </div>
                    </div>
                    <div class="background-elements">
                        <div class="element element-1"></div>
                        <div class="element element-2"></div>
                        <div class="element element-3"></div>
                    </div>
                </div>
                <div class="featured-departments">
                    <div class="my-emergency-banner aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <div class="row align-items-center">
                            <div class="emergency-content">
                                <h3>Consultations & Visites à Domicile</h3>
                                <p>
                                    <strong>

                                        <a target="_blank" class="honoraires-link"
                                            href="https://www.google.com/maps?ll=43.700763,7.260688&z=16&t=m&hl=fr-FR&gl=US&mapclient=embed&q=22+Rue+Gounod+06000+Nice">
                                            <span>
                                                <i class="bi bi-geo-alt me-1"></i>
                                            </span>
                                            <span>
                                                Cabinet (22 rue Gounod, Nice)</a>
                                        ou à domicile en
                                        urgence sur RDV
                                        </span>
                                        <br>
                                        <br>
                                        <i class="bi bi-clock me-1"></i>
                                        Horaires flexibles
                                    </strong>
                                <p>
                                    <strong>
                                        Lundi – Samedi : 7h30 – 21h
                                        <br>
                                        Dimanche : 10h – 17h
                                    </strong>
                                </p>
                                <p>
                                    <strong>
                                        <a target="_blank" class="honoraires-link"
                                            href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing">
                                            <span>
                                                <i class="bi bi-arrow-right-square me-1">
                                                </i>
                                            </span>
                                            <span>
                                                RDV rapides en soirée et le week-end disponibles sur Doctolib
                                            </span>
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->
