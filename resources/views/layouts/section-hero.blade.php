<!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="container custom-container-margin" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
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
                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Ostéopathe à <span class="highlight">Nice</span><br>
                            Une prise en charge humaine et personnalisée
                        </h1>
                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Osteopath in <span class="highlight">Nice</span><br>
                            Human and personalised care
                        </h1>
                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Osteopath in <span class="highlight">Nizza</span><br>
                            Menschliche und individuelle Betreuung
                        </h1>
                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Osteopata a <span class="highlight">Nizza</span><br>
                            Un’assistenza umana e personalizzata
                        </h1>
                    @endif

                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                        <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                            Ostéopathe D.O. diplômé d'école reconnu, je vous reçois à mon cabinet dans le centre de
                            Nice
                            ou
                            je viens à votre
                            domicile.
                            <br>
                            <br>
                            Ancien sapeur-pompier volontaire à Nice (chef d’équipe), nageur-sauveteur et passionné
                            de
                            triathlon et plongée, j’allie technicité, rigueur et écoute pour traiter efficacement
                            vos
                            douleurs et tensions.
                            <br>
                            <br>
                            De la femme enceinte au senior, du sportif au sédentaire, je vous accompagne vers un
                            mieux-être
                            durable.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                        <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                            Graduate DO osteopath, I receive you at my practice in the centre of Nice
                            or I come to your home.
                            <br>
                            <br>
                            Former volunteer firefighter in Nice (team leader), lifeguard and passionate about
                            triathlon
                            and diving, I combine technical skill, rigour and attentive listening to effectively treat
                            your
                            pain and tensions.
                            <br>
                            <br>
                            From pregnant women to seniors, from athletes to sedentary people, I support you towards
                            lasting
                            well-being.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                        <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                            Staatlich anerkannter Osteopath D.O., ich empfange Sie in meiner Praxis im Zentrum von Nizza
                            oder komme zu Ihnen nach Hause.
                            <br>
                            <br>
                            Ehemaliger freiwilliger Feuerwehrmann in Nizza (Gruppenführer), Rettungsschwimmer und
                            passionierter Triathlet und Taucher – ich verbinde fachliche Präzision, Disziplin und
                            Einfühlungsvermögen, um Ihre Schmerzen und Verspannungen wirksam zu behandeln.
                            <br>
                            <br>
                            Von der Schwangeren bis zum Senior, vom Sportler bis zum Wenig-Beweger – ich begleite Sie
                            zu dauerhaftem Wohlbefinden.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                        <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                            Osteopata D.O. diplomato presso scuola riconosciuta, ti ricevo nel mio studio nel centro di
                            Nizza oppure vengo a domicilio.
                            <br>
                            <br>
                            Ex vigile del fuoco volontario a Nizza (caposquadra), bagnino e appassionato di triathlon e
                            immersioni, combino competenza tecnica, rigore e ascolto per trattare efficacemente i tuoi
                            dolori e tensioni.
                            <br>
                            <br>
                            Dalla donna in gravidanza all’anziano, dallo sportivo alla persona sedentaria, ti accompagno
                            verso un benessere duraturo.
                        </p>
                    @endif


                    <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                        <div class="stat-item">
                            <h3>
                                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="2"
                                    class="purecounter"></span>+
                            </h3>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p>Années de pratique</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p>Years of practice</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p>Jahre Berufserfahrung</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p>Anni di pratica</p>
                            @endif
                        </div>
                        <div class="stat-item">
                            <h3>
                                <span data-purecounter-start="0" data-purecounter-end="500"
                                    data-purecounter-duration="2" class="purecounter"></span>+
                            </h3>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p>Plus de patients accompagnés</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p>Patients supported</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p>Patienten betreut</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p>Pazienti accompagnati</p>
                            @endif
                        </div>
                    </div>

                    <div class="hero-actions d-flex justify-content-center" data-aos="fade-right" data-aos-delay="600">
                        <a target="_blank" href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                            class="btn-custom-primary w-100">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <span>
                                    Prendre rendez-vous sur
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <span>
                                    Book appointment on
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <span>
                                    Termin buchen auf
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <span>
                                    Prenota appuntamento su
                                </span>
                            @endif
                            <span class="kaushan-script-regular ms-2">
                                Doctolib
                            </span>
                        </a>
                        {{--  <a target="_blank" href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                            class="btn btn-primary">
                            Prendre rendez-vous à domicile
                        </a> --}}
                    </div>

                    <div class="hero-actions d-flex justify-content-center" data-aos="fade-right" data-aos-delay="600">
                        <a href="https://www.youtube.com/shorts/3mFtnr0tC_I" class="btn btn-outline glightbox">
                            <i class="bi bi-play-circle me-2"></i>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                Découvrir le cabinet en vidéo
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                Discover the practice in video
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                Die Praxis im Video entdecken
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                Scopri lo studio nel video
                            @endif
                        </a>
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
                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                    <h6>Disponibilités</h6>
                                    <p>Consultations sur rendez-vous</p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                    <h6>Availability</h6>
                                    <p>By appointment</p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                    <h6>Verfügbarkeit</h6>
                                    <p>Nur mit Termin</p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                    <h6>Disponibilità</h6>
                                    <p>Solo su appuntamento</p>
                                @endif
                                <small>Damien Rainaut, Ostéopathe</small>
                            </div>
                        </div>

                        <div class="my-floating-card">
                            <div class="d-flex justify-content-end">
                                <div class="my-badge-card">
                                    <div>
                                        <i class="bi bi-shield-check"></i>
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <span>Ostéopathe diplômé D.O</span>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <span>Graduate DO Osteopath</span>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <span>Osteopath D.O. – diplomiert</span>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <span>Osteopata D.O. diplomato</span>
                                        @endif
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
                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                    <span>Ostéopathe diplômé</span>
                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                    <span>Graduate Osteopath</span>
                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                    <span>Dipl. Osteopath</span>
                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                    <span>Osteopata diplomato</span>
                                @endif
                            </div>
                        </div>
                        <a href="#google-reviews">
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
                                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                                        <small>Avis patients</small>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                        <small>Patient reviews</small>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                        <small>Bewertungen Patienten</small>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                        <small>Recensioni pazienti</small>
                                    @endif
                                </div>
                            </div>
                        </a>
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
                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                    <h3>Consultations & Visites à Domicile</h3>
                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                    <h3>Consultations & Home Visits</h3>
                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                    <h3>Praxis- & Hausbesuche</h3>
                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                    <h3>Visite in studio & a domicilio</h3>
                                @endif
                                <p>
                                    <strong>

                                        <a target="_blank" class="honoraires-link"
                                            href="https://www.google.com/maps?ll=43.700763,7.260688&z=16&t=m&hl=fr-FR&gl=US&mapclient=embed&q=22+Rue+Gounod+06000+Nice">
                                            <span>
                                                <i class="bi bi-geo-alt me-1"></i>
                                            </span>
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                <span>
                                                    Cabinet (22 rue Gounod, Nice)
                                        </a>
                                        urgence sur RDV
                                        </span>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                        <span>
                                            Practice (22 rue Gounod, Nice)</a>
                                            emergency by appointment
                                        </span>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                        <span>
                                            Praxis (22 rue Gounod, Nizza)</a>
                                            Notfalltermine nach Vereinbarung
                                        </span>
                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                        <span>
                                            Studio (22 rue Gounod, Nizza)</a>
                                            urgenze su appuntamento
                                        </span>
                                        @endif
                                        <br>
                                        <br>
                                        <i class="bi bi-clock me-1"></i>
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            Horaires flexibles
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            Flexible hours
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            Flexible Zeiten
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            Orari flessibili
                                        @endif
                                    </strong>
                                <p>
                                    <strong>
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            Lundi – Samedi : 7h30 – 21h
                                            <br>
                                            Dimanche : 10h – 17h
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            Monday – Saturday: 7:30 – 21:00
                                            <br>
                                            Sunday: 10:00 – 17:00
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            Montag – Samstag: 7:30 – 21:00
                                            <br>
                                            Sonntag: 10:00 – 17:00
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            Lunedì – Sabato: 7:30 – 21:00
                                            <br>
                                            Domenica: 10:00 – 17:00
                                        @endif
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
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                <span>
                                                    RDV rapides en soirée et le week-end disponibles sur Doctolib
                                                </span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                <span>
                                                    Fast evening & weekend appointments available on Doctolib
                                                </span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                <span>
                                                    Schnelle Abend- & Wochenendtermine auf Doctolib verfügbar
                                                </span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                <span>
                                                    Appuntamenti rapidi serali e festivi disponibili su Doctolib
                                                </span>
                                            @endif
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-content mt-4">
                    <div class="emergency-contact shadow-sm" data-aos="fade-right" data-aos-delay="700">
                        <div class="emergency-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="emergency-info">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <small>Renseignements et rendez-vous</small>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <small>Information & appointments</small>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <small>Auskunft & Terminvereinbarung</small>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <small>Informazioni e appuntamenti</small>
                            @endif
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
        </div>
    </div>
</section>
<!-- /Hero Section -->
