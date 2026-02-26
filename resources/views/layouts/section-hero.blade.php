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

                    @if (session('locale') === 'fr')
                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Ostéopathe à <span class="highlight">Nice</span><br>
                            Une prise en charge humaine et personnalisée
                        </h1>
                    @elseif (session('locale') === 'en')
                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Osteopath in <span class="highlight">Nice</span><br>
                            Human and personalised care
                        </h1>
                    @elseif (session('locale') === 'de')
                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Osteopath in <span class="highlight">Nizza</span><br>
                            Menschliche und individuelle Betreuung
                        </h1>
                    @elseif (session('locale') === 'it')
                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Osteopata a <span class="highlight">Nizza</span><br>
                            Un’assistenza umana e personalizzata
                        </h1>
                    @elseif (session('locale') === 'es')
                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Osteópata en <span class="highlight">Niza</span><br>
                            Atención humana y personalizada
                        </h1>
                    @endif

                    @if (session('locale') === 'fr')
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
                    @elseif (session('locale') === 'en')
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
                    @elseif (session('locale') === 'de')
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
                    @elseif (session('locale') === 'it')
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
                    @elseif (session('locale') === 'es')
                        <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                            Osteópata D.O. diplomado en escuela reconocida, te recibo en mi consulta en el centro de
                            Niza
                            o
                            voy a tu domicilio.
                            <br>
                            <br>
                            Ex bombero voluntario en Niza (jefe de equipo), socorrista y apasionado del triatlón y el
                            buceo,
                            combino técnica, rigor y escucha para tratar eficazmente tus dolores y tensiones.
                            <br>
                            <br>
                            Desde mujeres embarazadas hasta personas mayores, desde deportistas hasta sedentarios, te
                            acompaño hacia un bienestar duradero.
                        </p>
                    @endif


                    <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                        <div class="stat-item">
                            <h3>
                                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="2"
                                    class="purecounter"></span>+
                            </h3>
                            @if (session('locale') === 'fr')
                                <p>Années de pratique</p>
                            @elseif (session('locale') === 'en')
                                <p>Years of practice</p>
                            @elseif (session('locale') === 'de')
                                <p>Jahre Berufserfahrung</p>
                            @elseif (session('locale') === 'it')
                                <p>Anni di pratica</p>
                            @elseif (session('locale') === 'es')
                                <p>Años de práctica</p>
                            @endif
                        </div>
                        <div class="stat-item">
                            <h3>
                                <span data-purecounter-start="0" data-purecounter-end="500"
                                    data-purecounter-duration="2" class="purecounter"></span>+
                            </h3>
                            @if (session('locale') === 'fr')
                                <p>Plus de patients accompagnés</p>
                            @elseif (session('locale') === 'en')
                                <p>Patients supported</p>
                            @elseif (session('locale') === 'de')
                                <p>Patienten betreut</p>
                            @elseif (session('locale') === 'it')
                                <p>Pazienti accompagnati</p>
                            @elseif (session('locale') === 'es')
                                <p>Pacientes acompañados</p>
                            @endif
                        </div>
                    </div>

                    <div class="hero-actions d-flex justify-content-center" data-aos="fade-right" data-aos-delay="600">
                        <a target="_blank" href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                            class="btn-custom-primary w-100">
                            @if (session('locale') === 'fr')
                                <span>Prendre rendez-vous sur</span>
                            @elseif (session('locale') === 'en')
                                <span>Book appointment on</span>
                            @elseif (session('locale') === 'de')
                                <span>Termin buchen auf</span>
                            @elseif (session('locale') === 'it')
                                <span>Prenota appuntamento su</span>
                            @elseif (session('locale') === 'es')
                                <span>Reservar cita en</span>
                            @endif
                            <span class="kaushan-script-regular ms-2">Doctolib</span>
                        </a>
                        {{--  <a target="_blank" href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                            class="btn btn-primary">
                            Prendre rendez-vous à domicile
                        </a> --}}
                    </div>

                    <div class="hero-actions d-flex justify-content-center" data-aos="fade-right" data-aos-delay="600">
                        <a target='_blank' href="https://www.youtube.com/shorts/3mFtnr0tC_I"
                            class="btn btn-outline glightbox">
                            <i class="bi bi-play-circle me-2"></i>
                            @if (session('locale') === 'fr')
                                Découvrir le cabinet en vidéo
                            @elseif (session('locale') === 'en')
                                Discover the practice in video
                            @elseif (session('locale') === 'de')
                                Die Praxis im Video entdecken
                            @elseif (session('locale') === 'it')
                                Scopri lo studio nel video
                            @elseif (session('locale') === 'es')
                                Descubrir la consulta en vídeo
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
                                @if (session('locale') === 'fr')
                                    <h6>Disponibilités</h6>
                                    <p>Consultations sur rendez-vous</p>
                                @elseif (session('locale') === 'en')
                                    <h6>Availability</h6>
                                    <p>By appointment</p>
                                @elseif (session('locale') === 'de')
                                    <h6>Verfügbarkeit</h6>
                                    <p>Nur mit Termin</p>
                                @elseif (session('locale') === 'it')
                                    <h6>Disponibilità</h6>
                                    <p>Solo su appuntamento</p>
                                @elseif (session('locale') === 'es')
                                    <h6>Disponibilidad</h6>
                                    <p>Solo con cita previa</p>
                                @endif
                                <small>Damien Rainaut, Ostéopathe</small>
                            </div>
                        </div>

                        <div class="my-floating-card">
                            <div class="d-flex justify-content-end">
                                <div class="my-badge-card">
                                    <div>
                                        <i class="bi bi-shield-check"></i>
                                        @if (session('locale') === 'fr')
                                            <span>Ostéopathe diplômé D.O</span>
                                        @elseif (session('locale') === 'en')
                                            <span>Graduate DO Osteopath</span>
                                        @elseif (session('locale') === 'de')
                                            <span>Osteopath D.O. – diplomiert</span>
                                        @elseif (session('locale') === 'it')
                                            <span>Osteopata D.O. diplomato</span>
                                        @elseif (session('locale') === 'es')
                                            <span>Osteópata D.O. diplomado</span>
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
                                @if (session('locale') === 'fr')
                                    <span>Ostéopathe diplômé</span>
                                @elseif (session('locale') === 'en')
                                    <span>Graduate Osteopath</span>
                                @elseif (session('locale') === 'de')
                                    <span>Dipl. Osteopath</span>
                                @elseif (session('locale') === 'it')
                                    <span>Osteopata diplomato</span>
                                @elseif (session('locale') === 'es')
                                    <span>Osteópata diplomado</span>
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
                                    @if (session('locale') === 'fr')
                                        <small>Avis patients</small>
                                    @elseif (session('locale') === 'en')
                                        <small>Patient reviews</small>
                                    @elseif (session('locale') === 'de')
                                        <small>Patientenbewertungen</small>
                                    @elseif (session('locale') === 'it')
                                        <small>Recensioni pazienti</small>
                                    @elseif (session('locale') === 'es')
                                        <small>Opiniones de pacientes</small>
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
                                @if (session('locale') === 'fr')
                                    <h3>Consultations & Visites à Domicile</h3>
                                @elseif (session('locale') === 'en')
                                    <h3>Office & Home Visits</h3>
                                @elseif (session('locale') === 'de')
                                    <h3>Praxis- & Hausbesuche</h3>
                                @elseif (session('locale') === 'it')
                                    <h3>Visite in studio & a domicilio</h3>
                                @elseif (session('locale') === 'es')
                                    <h3>Consultas & Visitas a Domicilio</h3>
                                @endif
                                <p>
                                    <strong>

                                        <a target="_blank" class="honoraires-link"
                                            href="https://www.google.com/maps?ll=43.700763,7.260688&z=16&t=m&hl=fr-FR&gl=US&mapclient=embed&q=22+Rue+Gounod+06000+Nice">
                                            <span>
                                                <i class="bi bi-geo-alt me-1"></i>
                                            </span>
                                            @if (session('locale') === 'fr')
                                                <span>
                                                    Cabinet (22 rue Gounod, Nice)
                                        </a>
                                        urgence sur RDV
                                        </span>
                                    @elseif (session('locale') === 'en')
                                        <span>
                                            Practice (22 rue Gounod, Nice)</a>
                                            emergency by appointment
                                        </span>
                                    @elseif (session('locale') === 'de')
                                        <span>
                                            Praxis (22 rue Gounod, Nizza)</a>
                                            Notfalltermine nach Vereinbarung
                                        </span>
                                    @elseif (session('locale') === 'it')
                                        <span>
                                            Studio (22 rue Gounod, Nizza)</a>
                                            urgenze su appuntamento
                                        </span>
                                    @elseif (session('locale') === 'es')
                                        <span>
                                            Consulta (22 rue Gounod, Niza)</a>
                                            urgencia con cita
                                        </span>
                                        @endif
                                        <br>
                                        <br>
                                        <i class="bi bi-clock me-1"></i>
                                        @if (session('locale') === 'fr')
                                            Horaires flexibles
                                        @elseif (session('locale') === 'en')
                                            Flexible hours
                                        @elseif (session('locale') === 'de')
                                            Flexible Zeiten
                                        @elseif (session('locale') === 'it')
                                            Orari flessibili
                                        @elseif (session('locale') === 'es')
                                            Horarios flexibles
                                        @endif
                                    </strong>
                                <p>
                                    <strong>
                                        @if (session('locale') === 'fr')
                                            Lundi – Samedi : 7h30 – 21h
                                            <br>
                                            Dimanche : 10h – 17h
                                        @elseif (session('locale') === 'en')
                                            Monday – Saturday: 7:30 AM – 9:00 PM
                                            <br>
                                            Sunday: 10:00 AM – 5:00 PM
                                        @elseif (session('locale') === 'de')
                                            Montag – Samstag: 7:30 – 21:00 Uhr
                                            <br>
                                            Sonntag: 10:00 – 17:00 Uhr
                                        @elseif (session('locale') === 'it')
                                            Lunedì – Sabato: 7:30 – 21:00
                                            <br>
                                            Domenica: 10:00 – 17:00
                                        @elseif (session('locale') === 'es')
                                            Lunes – Sábado: 7:30 – 21:00
                                            <br>
                                            Domingo: 10:00 – 17:00
                                        @endif
                                    </strong>
                                </p>
                                <p>
                                    <strong>
                                        <a target="_blank" class="honoraires-link"
                                            href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing">
                                            <span>
                                                <i class="bi bi-arrow-right-square me-1"></i>
                                            </span>
                                            @if (session('locale') === 'fr')
                                                <span>RDV rapides en soirée et le week-end disponibles sur
                                                    Doctolib</span>
                                            @elseif (session('locale') === 'en')
                                                <span>Fast evening & weekend appointments available on Doctolib</span>
                                            @elseif (session('locale') === 'de')
                                                <span>Schnelle Abend- & Wochenendtermine auf Doctolib verfügbar</span>
                                            @elseif (session('locale') === 'it')
                                                <span>Appuntamenti rapidi serali e weekend disponibili su
                                                    Doctolib</span>
                                            @elseif (session('locale') === 'es')
                                                <span>Citas rápidas por la tarde y fin de semana disponibles en
                                                    Doctolib</span>
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
                            @if (session('locale') === 'fr')
                                <small>Renseignements et rendez-vous</small>
                            @elseif (session('locale') === 'en')
                                <small>Information & appointments</small>
                            @elseif (session('locale') === 'de')
                                <small>Auskunft & Terminvereinbarung</small>
                            @elseif (session('locale') === 'it')
                                <small>Informazioni e appuntamenti</small>
                            @elseif (session('locale') === 'es')
                                <small>Información y citas</small>
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
            <div class="col-lg-12 mt-4">
                <iframe class="doctolib" scrolling="no"
                    src="https://partners.doctolib.fr/osteopathe/nice/damien-rainaut/booking/availabilities?specialityId=10&telehealth=false&placeId=practice-159544&motiveIds%5B%5D=13751581&source=profile"
                    style="height: 472px; min-height: 472px; width: 100%; overflow: hidden;"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->
