<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="container custom-container-margin" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="trust-badges mb-4" data-aos="fade-right" data-aos-delay="200">
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
                    </div>

                    <h1 data-aos="fade-right" data-aos-delay="300">
                        Ostéopathe à <span class="highlight">Nice</span><br>
                        Une prise en charge humaine et personnalisée
                    </h1>

                    <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                        Damien Rainaut est ostéopathe à Nice et vous accueille au cabinet pour la prise en charge
                        des douleurs musculo-squelettiques, troubles fonctionnels et tensions du quotidien.
                        Chaque consultation est adaptée à votre histoire, vos besoins et votre mode de vie.
                    </p>

                    <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                        <div class="stat-item">
                            <h3>
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2"
                                    class="purecounter"></span>+
                            </h3>
                            <p>Années de pratique</p>
                        </div>
                        <div class="stat-item">
                            <h3>
                                <span data-purecounter-start="0" data-purecounter-end="{{ App\Models\GoogleReviewsProfile::first()->user_rating_total }}"
                                    data-purecounter-duration="2" class="purecounter"></span>+
                            </h3>
                            <p>Patients accompagnés</p>
                        </div>
                        <div class="stat-item">
                            <h3>
                                <span data-purecounter-start="0" data-purecounter-end="100"
                                    data-purecounter-duration="2" class="purecounter"></span>%
                            </h3>
                            <p>Approche personnalisée</p>
                        </div>
                    </div>

                    <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                        <a href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                            class="btn btn-primary">
                            Prendre rendez-vous
                        </a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-outline glightbox">
                            <i class="bi bi-play-circle me-2"></i>
                            Découvrir le cabinet
                        </a>
                    </div>

                    <div class="emergency-contact" data-aos="fade-right" data-aos-delay="700">
                        <div class="emergency-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="emergency-info">
                            <small>Renseignements et rendez-vous</small>
                            <strong>Via Doctolib</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                    <div class="main-image">
                        <img src={{ asset('img/website/damien/osteo-8.webp') }}
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
                                <small>Avis patients Doctolib</small>
                            </div>
                        </div>
                    </div>

                    <div class="background-elements">
                        <div class="element element-1"></div>
                        <div class="element element-2"></div>
                        <div class="element element-3"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- /Hero Section -->
