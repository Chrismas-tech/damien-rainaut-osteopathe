@extends('website.layouts.base-website')
@section('title', 'Home')
@section('content')


    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container custom-container-margin" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">

                            <div class="trust-badges mb-4" data-aos="fade-right" data-aos-delay="200">
                                <div class="badge-item">
                                    <i class="bi bi-shield-check"></i>
                                    <span>Ostéopathe diplômé DO</span>
                                </div>
                                <div class="badge-item">
                                    <i class="bi bi-calendar-check"></i>
                                    <span>Consultations sur rendez-vous</span>
                                </div>
                                <div class="badge-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Cabinet à Nice</span>
                                </div>
                            </div>

                            <h1 data-aos="fade-right" data-aos-delay="300">
                                Ostéopathie <span class="highlight">globale et personnalisée</span><br>
                                pour soulager douleurs et tensions
                            </h1>

                            <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                                Je vous accompagne au cabinet Pôle Ostéo à Nice pour une prise en charge manuelle,
                                adaptée à votre corps, votre mode de vie et vos besoins quotidiens.
                            </p>

                            <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                                <div class="stat-item">
                                    <h3>Adultes</h3>
                                    <p>et sportifs</p>
                                </div>
                                <div class="stat-item">
                                    <h3>Femmes</h3>
                                    <p>suivi personnalisé</p>
                                </div>
                                <div class="stat-item">
                                    <h3>Posture</h3>
                                    <p>et douleurs chroniques</p>
                                </div>
                            </div>

                            <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                                <a href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut/booking/motives?specialityId=10&telehealth=false&placeId=practice-159544&bookingFunnelSource=profile"
                                    class="btn btn-primary">Prendre Rendez-vous</a>
                            </div>

                            <div class="emergency-contact" data-aos="fade-right" data-aos-delay="700">
                                <div class="emergency-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="emergency-info">
                                    <small>Contact cabinet</small>
                                    <strong>04 93 59 51 84</strong>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                            <div class="main-image">
                                <img src={{ asset('img/website/health/photos-damien/photo-1.jpg') }}
                                    alt="Ostéopathe à Nice - Cabinet Damien Rainaut" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- Home About Section -->
        <section id="home-about" class="home-about section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">

                    <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                        <div class="about-content">
                            <h2 class="section-heading">Ostéopathie adaptée à votre quotidien</h2>

                            <p class="lead-text">
                                Ostéopathe diplômé de l’Institut Toulousain d’Ostéopathie, je propose une prise en charge
                                manuelle globale pour soulager douleurs articulaires, tensions musculaires, troubles
                                posturaux et déséquilibres fonctionnels.
                            </p>

                            <p>
                                Mon expérience dans des contextes variés (milieu hospitalier, structure universitaire,
                                cabinet libéral) me permet d’ajuster mes techniques à chaque situation et chaque patient,
                                adulte, sportif ou femme.
                            </p>

                            <div class="stats-grid">
                                <div class="stat-item">
                                    <div class="stat-number purecounter" data-purecounter-start="0"
                                        data-purecounter-end="2025" data-purecounter-duration="1"></div>
                                    <div class="stat-label">Année de diplôme DO</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-label">Approche personnalisée</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-label">Cabinet à Nice</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="about-visual">
                            <div class="main-image">
                                <img src={{ asset('img/website/health/facilities-9.webp') }} alt="Cabinet Ostéopathie Nice"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /Home About Section -->

        <!-- Featured Departments Section -->
        <section id="featured-departments" class="featured-departments section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Domaines d'intervention</h2>
                <p>Techniques et prises en charge ostéopathiques</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="specialty-card">
                            <div class="specialty-content">
                                <h3>Ostéopathie du sport</h3>
                                <p>
                                    Prévention des blessures, préparation à la reprise, récupération et optimisation
                                    des performances.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="specialty-card">
                            <div class="specialty-content">
                                <h3>Ostéopathie structurelle</h3>
                                <p>
                                    Douleurs lombaires, cervicales, troubles posturaux, tensions chroniques du quotidien.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="specialty-card">
                            <div class="specialty-content">
                                <h3>Approche crânienne</h3>
                                <p>
                                    Techniques douces pour gérer maux de tête, stress, déséquilibres nerveux et tensions
                                    faciales.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="specialty-card">
                            <div class="specialty-content">
                                <h3>Ostéopathie viscérale</h3>
                                <p>
                                    Accompagnement des troubles digestifs et relâchements fonctionnels du système
                                    viscéral.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Featured Departments Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Techniques ostéopathiques</h2>
                <p>Solutions manuelles adaptées à vos besoins</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                        <div class="featured-service-main">
                            <div class="service-image-wrapper">
                                <img src={{ asset('img/website/health/consultation-4.webp') }}
                                    alt="Consultation ostéopathique" class="img-fluid">
                            </div>
                            <div class="service-details">
                                <h2>Consultations ostéopathiques personnalisées</h2>
                                <p>
                                    Chaque séance est adaptée à votre situation personnelle pour chercher une amélioration
                                    durable de votre mobilité, votre posture et vos fonctions corporelles.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                        <div class="services-sidebar">

                            <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="service-icon-wrapper">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="service-info">
                                    <h4>Évaluation complète</h4>
                                    <p>Analyse posturale et historique de santé détaillé.</p>
                                </div>
                            </div>

                            <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="service-icon-wrapper">
                                    <i class="bi bi-person-check"></i>
                                </div>
                                <div class="service-info">
                                    <h4>Techniques douces</h4>
                                    <p>Approche manuelle adaptée à chaque patient.</p>
                                </div>
                            </div>

                            <div class="service-item" data-aos="fade-up" data-aos-delay="600">
                                <div class="service-icon-wrapper">
                                    <i class="bi bi-heart-pulse"></i>
                                </div>
                                <div class="service-info">
                                    <h4>Suivi personnalisé</h4>
                                    <p>Conseils et accompagnement post-séance.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- Find A Doctor Section -->
        <section id="find-a-doctor" class="find-a-doctor section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Votre ostéopathe à Nice</h2>
                <p>Présentation du praticien</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="doctor-profile" data-aos="zoom-in" data-aos-delay="200">
                    <div class="profile-header">
                        <div class="doctor-avatar">
                            <img src={{ asset('img/website/health/photos-damien/photo-1.jpg') }}
                                alt="Ostéopathe Damien Rainaut" class="img-fluid">
                        </div>
                        <div class="doctor-details">
                            <h4>Damien Rainaut</h4>
                            <span class="specialty-tag">Ostéopathe D.O.</span>
                            <div class="experience-info">
                                <i class="bi bi-award"></i>
                                <span>Diplômé de l’Institut Toulousain d’Ostéopathie</span>
                            </div>
                        </div>
                    </div>
                    <div class="rating-section">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="rating-score">4.9</span>
                        <span class="review-count">(Basé sur les avis patients)</span>
                    </div>
                    <div class="action-buttons">
                        <a href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut/booking/motives?specialityId=10&telehealth=false&placeId=practice-159544&bookingFunnelSource=profile" class="btn-primary">Prendre
                            RDV</a>
                    </div>
                </div>
            </div>

        </section><!-- /Find A Doctor Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="hero-content">
                    <div class="row align-items-center">

                        <div class="col-lg-6">
                            <div class="content-wrapper" data-aos="fade-up" data-aos-delay="200">
                                <h1>Besoin d’un suivi personnalisé ?</h1>
                                <p>
                                    Chaque consultation est une opportunité de mieux comprendre votre corps et de
                                    restaurer votre équilibre fonctionnel.
                                </p>

                                <div class="cta-wrapper">
                                    <a href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut/booking/motives?specialityId=10&telehealth=false&placeId=practice-159544&bookingFunnelSource=profile" class="primary-cta">
                                        <span>Prendre rendez-vous</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="image-container" data-aos="fade-left" data-aos-delay="300">
                                <img src={{ asset('img/website/health/facilities-9.webp') }} alt="Ostéopathie à Nice"
                                    class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /Call To Action Section -->

    </main>

    {{--  <h1>COMPONENTS</h1>

    @livewire('admin.website.components.jumbotrons.jumbotron-video')
    @livewire('admin.website.components.slider')
    @livewire('admin.website.components.nanogallery') --}}


@endsection
