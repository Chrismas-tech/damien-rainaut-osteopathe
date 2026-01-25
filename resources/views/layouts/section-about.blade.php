<!-- About Section -->
<section id="about" class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Première partie : Texte + Image côte-à-côte -->
        <div class="row align-items-start g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="about-content">
                    <h2>Santé & Performance en entreprise : Votre Partenaire QVT à Nice</h2>
                    <p class="lead">Environ 30 % des arrêts de travail sont liés aux Troubles Musculo-Squelettiques
                        (TMS). Lombalgies, cervicalgies, canal carpien… <br><br> Ces douleurs ne sont pas une fatalité.
                        Mon rôle
                        ? Intervenir en prévention pour transformer la santé de vos équipes en véritable levier de
                        performance durable.</p>

                    <p>Avec plus de 10 ans d’expérience terrain (ancien Chef d’équipe Sapeur-Pompier) et une double
                        formation en ostéopathie + Activité Physique Adaptée (STAPS-APA), j’allie rigueur clinique,
                        expertise du mouvement et gestion du stress.</p>

                    <h3 class="mt-5">Trois piliers pour un impact concret</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="bi bi-shield-check text-primary me-2"></i>
                            <strong>Rigueur Clinique & Sécurité</strong> :
                            Diagnostic précis et prise en charge sécurisée.
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-gear-wide-connected text-primary me-2"></i>
                            <strong>Ingénierie du Mouvement & Ergonomie</strong> :
                            Analyse des postes de travail et corrections posturales adaptées,
                            que ce soit au bureau ou sur le terrain.
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-peace text-primary me-2"></i>
                            <strong>Régulation de la Charge Mentale</strong> :
                            Réduction du stress (première cause de TMS), pour diminuer les tensions
                            et améliorer la concentration.
                        </li>
                    </ul>

                    <blockquote class="blockquote border-start border-primary border-3 ps-4 mt-4 mb-4">
                        <p class="fst-italic">"Un collaborateur libéré de ses tensions est un collaborateur 100 %
                            opérationnel. Ne laissez pas les TMS dicter votre calendrier."</p>
                    </blockquote>

                    <p class="text-center text-lg-start mt-4">
                        <a target="_blank" href="{{ route('website.contact') }}" class="btn-custom-outline">
                            <i class="bi bi-arrow-right"></i>
                            <span class="ms-1">
                                Contactez-moi pour un devis
                                gratuit
                            </span>
                        </a>
                    </p>
                </div>
            </div>

            <!-- Image avec TES paths originaux + hauteur forcée pour qu'elle soit vraiment haute -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="image-wrapper position-relative">
                    <img src="{{ asset('img/website/damien/entreprise-1.webp') }}"
                        class="img-fluid rounded shadow main-image" alt="Ostéopathie en entreprise Nice"
                        style="height: 580px; object-fit: cover; width: 100%;">
                    {{-- <div class="floating-image position-absolute bottom-0 end-0 me-4 mb-4" data-aos="zoom-in"
                        data-aos-delay="400">
                        <img src="{{ asset('img/website/damien/osteo-3.webp') }}" class="img-fluid rounded shadow"
                            alt="Séance ostéopathie entreprise" style="max-width: 280px; height: auto;">
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Deuxième partie : Tableau pleine largeur -->
        <div class="row mt-5 pt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12">
                <h3 class="text-center mb-4">Pourquoi intégrer l’ostéopathie dans votre stratégie RH ?</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Enjeu Entreprise</th>
                                <th scope="col">Mon Intervention</th>
                                <th scope="col">Bénéfice Opérationnel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="bi bi-calendar-x text-danger fs-4 me-2"></i>Absentéisme</td>
                                <td>Traitement préventif des TMS (cause n°1 des arrêts)</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>Réduction directe des coûts
                                </td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-graph-up-arrow text-primary fs-4 me-2"></i>Productivité</td>
                                <td>Optimisation posture + respiration</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>Équipes plus alertes, moins
                                    fatiguées</td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-people text-primary fs-4 me-2"></i>Marque Employeur</td>
                                <td>Journées QVT & actions bien-être dédiées</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>Fidélisation & climat
                                    social positif</td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-shield-lock text-primary fs-4 me-2"></i>Sécurité & Santé</td>
                                <td>Diagnostic d’exclusion + orientation médicale</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>Prévention accidents &
                                    conformité</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Section -->
