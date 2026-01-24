<!-- Departments Tabs Section -->
<section id="departments-tabs" class="departments-tabs section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="medical-specialties">
            <div class="row">
                <div class="col-12">
                    <div class="specialty-navigation">
                        <div class="nav nav-pills d-flex" id="specialty-tabs" role="tablist" data-aos="fade-up"
                            data-aos-delay="400">
                            <a class="nav-link department-tab active" id="qvt-tab" data-bs-toggle="pill"
                                href="#departments-tabs-qvt" role="tab" aria-controls="departments-tabs-qvt"
                                aria-selected="true">Entreprise & QVT</a>
                            <a class="nav-link department-tab" id="sport-tab" data-bs-toggle="pill"
                                href="#departments-tabs-sport" role="tab"
                                aria-controls="departments-tabs-sport">Clubs Sportifs & Salles</a>
                            <a class="nav-link department-tab" id="spa-tab" data-bs-toggle="pill"
                                href="#departments-tabs-spa" role="tab" aria-controls="departments-tabs-spa">Spas &
                                Prestige</a>
                            <a class="nav-link department-tab" id="autres-tab" data-bs-toggle="pill"
                                href="#departments-tabs-autres" role="tab"
                                aria-controls="departments-tabs-autres">Formats & Modalités</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tab-content department-content" id="specialty-content" data-aos="fade-up"
                        data-aos-delay="500">

                        <!-- Tab QVT / Entreprise -->
                        <div class="tab-pane fade show active" id="departments-tabs-qvt" role="tabpanel"
                            aria-labelledby="qvt-tab">
                            <div class="row department-layout">
                                <div class="col-lg-4 order-lg-2">
                                    <div class="department-image">
                                        <img src="{{ asset('img/website/damien/osteo-5.webp') }}"
                                            alt="Intervention QVT Nice" class="img-fluid"> <!-- change l'image -->
                                    </div>
                                </div>
                                <div class="col-lg-8 order-lg-1">
                                    <div class="department-info">
                                        <h2 class="department-title">Santé & Performance en Entreprise</h2>
                                        <p class="department-description">Interventions sur site à Nice et 06 pour
                                            prévenir les TMS, réduire l'absentéisme et booster la productivité via
                                            ostéopathie, ergonomie et gestion du stress.</p>
                                        <div class="row mt-4">
                                            <!-- Tes services ici, ex. -->
                                            <div class="col-md-6">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="fas fa-briefcase"></i></div>
                                                    <div class="service-content">
                                                        <h4>Permanences d'ostéopathie</h4>
                                                        <p>Consultations individuelles (30-45 min) directement dans vos
                                                            locaux.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ajoute les autres... -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Sport -->
                        <div class="tab-pane fade" id="departments-tabs-sport" role="tabpanel"
                            aria-labelledby="sport-tab">
                            <div class="row department-layout">
                                <div class="col-lg-4 order-lg-2">
                                    <div class="department-image">
                                        <img src="{{ asset('img/website/damien/osteo-5.webp') }}"
                                            alt="Ostéopathie sportif Nice" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-8 order-lg-1">
                                    <div class="department-info">
                                        <h2 class="department-title">Clubs Sportifs & Salles de Sport</h2>
                                        <p class="department-description">L’ingénierie de l’athlète au service du
                                            résultat. Analyse gestuelle, récupération, réathlétisation et vigilance
                                            terrain (héritage pompier).</p>
                                        <!-- Ajoute tes points en service-item -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Spa -->
                        <div class="tab-pane fade" id="departments-tabs-spa" role="tabpanel" aria-labelledby="spa-tab">
                            <!-- Similaire, avec ton texte spa -->
                        </div>

                        <!-- Tab Modalités -->
                        <div class="tab-pane fade" id="departments-tabs-autres" role="tabpanel"
                            aria-labelledby="autres-tab">
                            <!-- Ton tableau formats + citation finale -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
