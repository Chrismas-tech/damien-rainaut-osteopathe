<!-- Find A Doctor Section -->
<section id="find-a-doctor" class="find-a-doctor section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Prenez RDV avec votre Ostéopathe</h2>
        <p>Damien Rainaut – Ostéopathe D.O. à Nice – Cabinet Pôle Ostéo et visites à domicile</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-8 text-center">
                <div class="search-section">
                    <h3 class="search-title">Trouvez votre Ostéopathe à Nice</h3>
                    <p class="search-subtitle">Prenez rendez-vous rapidement pour une consultation personnalisée au
                        cabinet ou à domicile</p>
                    <form class="search-form" action="#!" method="#">
                        <div class="search-input-group">
                            <div class="input-wrapper">
                                <i class="bi bi-person"></i>
                                <input type="text" class="form-control" name="doctor_name"
                                    placeholder="Nom de l'ostéopathe (ex: Damien Rainaut)">
                            </div>
                            <div class="select-wrapper">
                                <i class="bi bi-heart-pulse"></i>
                                <select class="form-select" name="specialty">
                                    <option value="">Toutes les spécialités</option>
                                    <option value="osteo-sport">Ostéopathie du sport</option>
                                    <option value="osteo-cranienne">Ostéopathie crânienne</option>
                                    <option value="osteo-femme">Ostéopathie de la femme</option>
                                    <option value="posturologie">Posturologie & bilan postural</option>
                                    <option value="drainage">Drainage lymphatique</option>
                                    <option value="myofascial">Ostéopathie myofasciale</option>
                                </select>
                            </div>
                            <button type="submit" class="search-btn">
                                <i class="bi bi-search"></i>
                                Chercher
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="doctors-grid" data-aos="fade-up" data-aos-delay="300">
            <div class="doctor-profile" data-aos="zoom-in" data-aos-delay="100">
                <div class="profile-header">
                    <div class="doctor-avatar">
                        <img src={{ asset('img/website/damien/osteo-8.webp') }} alt="Damien Rainaut Ostéopathe"
                            class="img-fluid">
                        <div class="status-indicator available"></div>
                    </div>
                    <div class="doctor-details">
                        <h4>Damien Rainaut</h4>
                        <span class="specialty-tag">Ostéopathe D.O.</span>
                        <div class="experience-info">
                            <i class="bi bi-award"></i>
                            <span>Diplômé I.T.O. – Pratique depuis 2020</span>
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
                    <span class="review-count">(plus de 120 avis)</span>
                </div>
                <div class="action-buttons">
                    <a href="#!" class="btn-secondary">Voir le profil</a>
                    <a target="_blank" href="#!" class="btn-primary">Prendre RDV</a>
                </div>
            </div><!-- End Doctor Profile -->

            {{-- <div class="doctor-profile" data-aos="zoom-in" data-aos-delay="200">
                <div class="profile-header">
                    <div class="doctor-avatar">
                        <img src={{ asset('img/website/health/photos-damien/photo-1.jpg') }} alt="Damien Rainaut Ostéopathe"
                            class="img-fluid">
                        <div class="status-indicator available"></div>
                    </div>
                    <div class="doctor-details">
                        <h4>Damien Rainaut</h4>
                        <span class="specialty-tag">Spécialisé Sport & Posturologie</span>
                        <div class="experience-info">
                            <i class="bi bi-award"></i>
                            <span>Expérience en centres sportifs & SSR</span>
                        </div>
                    </div>
                </div>
                <div class="rating-section">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                    <span class="rating-score">4.8</span>
                    <span class="review-count">(98 avis)</span>
                </div>
                <div class="action-buttons">
                    <a href="#!" class="btn-secondary">Voir le profil</a>
                    <a href="#!" class="btn-primary">Prendre RDV</a>
                </div>
            </div><!-- End Doctor Profile -->

            <div class="doctor-profile" data-aos="zoom-in" data-aos-delay="300">
                <div class="profile-header">
                    <div class="doctor-avatar">
                        <img src={{ asset('img/website/health/photos-damien/photo-1.jpg') }} alt="Damien Rainaut Ostéopathe"
                            class="img-fluid">
                        <div class="status-indicator available"></div>
                    </div>
                    <div class="doctor-details">
                        <h4>Damien Rainaut</h4>
                        <span class="specialty-tag">Ostéopathie de la Femme & Grossesse</span>
                        <div class="experience-info">
                            <i class="bi bi-award"></i>
                            <span>Accompagnement endométriose & post-partum</span>
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
                    <span class="rating-score">5.0</span>
                    <span class="review-count">(plus de 150 avis)</span>
                </div>
                <div class="action-buttons">
                    <a href="#!" class="btn-secondary">Voir le profil</a>
                    <a href="#!" class="btn-primary">Prendre RDV</a>
                </div>
            </div><!-- End Doctor Profile -->

            <div class="doctor-profile" data-aos="zoom-in" data-aos-delay="400">
                <div class="profile-header">
                    <div class="doctor-avatar">
                        <img src={{ asset('img/website/health/photos-damien/photo-1.jpg') }} alt="Damien Rainaut Ostéopathe"
                            class="img-fluid">
                        <div class="status-indicator available"></div>
                    </div>
                    <div class="doctor-details">
                        <h4>Damien Rainaut</h4>
                        <span class="specialty-tag">Ostéopathie Crânienne & Maxillo-faciale</span>
                        <div class="experience-info">
                            <i class="bi bi-award"></i>
                            <span>Troubles ATM, migraines, stress cranio-sacré</span>
                        </div>
                    </div>
                </div>
                <div class="rating-section">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                    <span class="rating-score">4.9</span>
                    <span class="review-count">(112 avis)</span>
                </div>
                <div class="action-buttons">
                    <a href="#!" class="btn-secondary">Voir le profil</a>
                    <a href="#!" class="btn-primary">Prendre RDV</a>
                </div>
            </div><!-- End Doctor Profile -->

            <!-- Les profils suivants peuvent être dupliqués ou supprimés selon tes besoins -->
            <div class="doctor-profile" data-aos="zoom-in" data-aos-delay="500">
                <div class="profile-header">
                    <div class="doctor-avatar">
                        <img src={{ asset('img/website/health/photos-damien/photo-1.jpg') }} alt="Damien Rainaut Ostéopathe"
                            class="img-fluid">
                        <div class="status-indicator available"></div>
                    </div>
                    <div class="doctor-details">
                        <h4>Damien Rainaut</h4>
                        <span class="specialty-tag">Drainage Lymphatique & Myofascial</span>
                        <div class="experience-info">
                            <i class="bi bi-award"></i>
                            <span>Œdèmes, circulation, libération fasciale</span>
                        </div>
                    </div>
                </div>
                <div class="rating-section">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <span class="rating-score">4.8</span>
                    <span class="review-count">(85 avis)</span>
                </div>
                <div class="action-buttons">
                    <a href="#!" class="btn-secondary">Voir le profil</a>
                    <a href="#!" class="btn-primary">Prendre RDV</a>
                </div>
            </div><!-- End Doctor Profile -->

            <div class="doctor-profile" data-aos="zoom-in" data-aos-delay="600">
                <div class="profile-header">
                    <div class="doctor-avatar">
                        <img src={{ asset('img/website/health/photos-damien/photo-1.jpg') }} alt="Damien Rainaut Ostéopathe"
                            class="img-fluid">
                        <div class="status-indicator available"></div>
                    </div>
                    <div class="doctor-details">
                        <h4>Damien Rainaut</h4>
                        <span class="specialty-tag">Ostéopathie Globale & Visites Domicile</span>
                        <div class="experience-info">
                            <i class="bi bi-award"></i>
                            <span>Disponible lundi-dimanche – Nice & environs</span>
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
                    <span class="review-count">(plus de 140 avis)</span>
                </div>
                <div class="action-buttons">
                    <a href="#!" class="btn-secondary">Voir le profil</a>
                    <a href="#!" class="btn-primary">Prendre RDV</a>
                </div>
            </div><!-- End Doctor Profile --> --}}

        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="700">
            <a href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing" class="btn-view-all"
                target="_blank">
                Voir sur Doctolib & Prendre RDV
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>

</section><!-- /Find A Doctor Section -->
