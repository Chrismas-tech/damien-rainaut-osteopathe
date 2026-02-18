<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        @if (session('locale') === 'fr')
            <h2>Expertise Terrain & Sécurité Clinique</h2>
        @elseif (session('locale') === 'en')
            <h2>Field Expertise & Clinical Safety</h2>
        @elseif (session('locale') === 'de')
            <h2>Einsatzerfahrung & Klinische Sicherheit</h2>
        @elseif (session('locale') === 'it')
            <h2>Competenza sul Campo & Sicurezza Clinica</h2>
        @elseif (session('locale') === 'es')
            <h2>Experiencia de Campo y Seguridad Clínica</h2>
        @endif
        {{-- <p>
            La précision du geste et la rigueur du diagnostic sont au cœur de ma pratique.
            <br>
            Mon approche de l’ostéopathie
            est indissociable de mes 10 ans d’expérience terrain dans les secours d’urgence.
            <br>
            Ancien Chef d’équipe
            Sapeur-Pompier, j’ai développé une capacité d’analyse rapide et une rigueur qui constituent aujourd’hui le
            socle de ma pratique en cabinet.
        </p> --}}
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

            <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                <div class="featured-service-main">
                    <div class="service-image-wrapper">
                        <img src={{ asset('img/website/damien/expertise-terrain-1.webp') }}
                            alt="Cabinet d'ostéopathie à Nice" class="img-fluid" loading="lazy">
                        {{-- <div class="service-overlay">
                            <div class="service-badge">
                                <i class="bi bi-heart-pulse"></i>
                                <span>Prise en Charge Diagnostique</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                <div class="services-sidebar">

                    <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-icon-wrapper">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="service-info">
                            @if (session('locale') === 'fr')
                                <h4>Sûreté</h4>
                                <p>Vous avez la garantie d’une manipulation effectuée dans un cadre sécurisé, respectant
                                    les limites physiologiques de votre corps.</p>
                            @elseif (session('locale') === 'en')
                                <h4>Safety</h4>
                                <p>You are guaranteed manipulations performed in a secure setting, respecting the
                                    physiological limits of your body.</p>
                            @elseif (session('locale') === 'de')
                                <h4>Sicherheit</h4>
                                <p>Sie haben die Garantie, dass Manipulationen in einem sicheren Rahmen durchgeführt
                                    werden, unter Einhaltung der physiologischen Grenzen Ihres Körpers.</p>
                            @elseif (session('locale') === 'it')
                                <h4>Sicurezza</h4>
                                <p>Hai la garanzia di manipolazioni effettuate in un contesto sicuro, rispettando i
                                    limiti fisiologici del tuo corpo.</p>
                            @elseif (session('locale') === 'es')
                                <h4>Seguridad</h4>
                                <p>Tienes la garantía de manipulaciones realizadas en un marco seguro, respetando los
                                    límites fisiológicos de tu cuerpo.</p>
                            @endif
                        </div>
                    </div>

                    <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-icon-wrapper">
                            <i class="bi bi-activity"></i>
                        </div>
                        <div class="service-info">
                            @if (session('locale') === 'fr')
                                <h4>Fiabilité</h4>
                                <p>Évaluation rapide et fiable des situations complexes, même pour des douleurs
                                    chroniques installées depuis longtemps.</p>
                            @elseif (session('locale') === 'en')
                                <h4>Reliability</h4>
                                <p>Fast and reliable assessment of complex situations, even for long-standing chronic
                                    pain.</p>
                            @elseif (session('locale') === 'de')
                                <h4>Zuverlässigkeit</h4>
                                <p>Schnelle und zuverlässige Bewertung komplexer Situationen, auch bei langjährigen
                                    chronischen Schmerzen.</p>
                            @elseif (session('locale') === 'it')
                                <h4>Affidabilità</h4>
                                <p>Valutazione rapida e affidabile di situazioni complesse, anche per dolori cronici
                                    presenti da tempo.</p>
                            @elseif (session('locale') === 'es')
                                <h4>Fiabilidad</h4>
                                <p>Evaluación rápida y fiable de situaciones complejas, incluso para dolores crónicos
                                    instalados desde hace mucho tiempo.</p>
                            @endif
                        </div>
                    </div>

                    <div class="service-item" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-icon-wrapper">
                            <i class="bi bi-emoji-smile"></i>
                        </div>
                        <div class="service-info">
                            @if (session('locale') === 'fr')
                                <h4>Sérénité</h4>
                                <p>Ma pratique est ancrée dans le réel. L’objectif est de désamorcer vos tensions en
                                    toute confiance, en m’appuyant sur des bases cliniques solides.</p>
                            @elseif (session('locale') === 'en')
                                <h4>Serenity</h4>
                                <p>My practice is grounded in reality. The goal is to defuse your tensions with complete
                                    confidence, relying on solid clinical foundations.</p>
                            @elseif (session('locale') === 'de')
                                <h4>Gelassenheit</h4>
                                <p>Meine Praxis ist im Realen verankert. Ziel ist es, Ihre Spannungen mit voller
                                    Vertrauen zu entschärfen, gestützt auf solide klinische Grundlagen.</p>
                            @elseif (session('locale') === 'it')
                                <h4>Serenità</h4>
                                <p>La mia pratica è radicata nel reale. L’obiettivo è disinnescare le tue tensioni con
                                    piena fiducia, appoggiandomi su basi cliniche solide.</p>
                            @elseif (session('locale') === 'es')
                                <h4>Serenidad</h4>
                                <p>Mi práctica está anclada en lo real. El objetivo es desactivar tus tensiones con
                                    total confianza, apoyándome en bases clínicas sólidas.</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
                <div class="service-details">
                    @if (session('locale') === 'fr')
                        <h2>
                            <i class="bi bi-heart-pulse my-blue"></i>
                            Une prise en charge diagnostique de haute précision
                        </h2>
                    @elseif (session('locale') === 'en')
                        <h2>
                            <i class="bi bi-heart-pulse my-blue"></i>
                            High-precision diagnostic care
                        </h2>
                    @elseif (session('locale') === 'de')
                        <h2>
                            <i class="bi bi-heart-pulse my-blue"></i>
                            Hochpräzise diagnostische Betreuung
                        </h2>
                    @elseif (session('locale') === 'it')
                        <h2>
                            <i class="bi bi-heart-pulse my-blue"></i>
                            Presa in carico diagnostica ad alta precisione
                        </h2>
                    @elseif (session('locale') === 'es')
                        <h2>
                            <i class="bi bi-heart-pulse my-blue"></i>
                            Atención diagnóstica de alta precisión
                        </h2>
                    @endif

                    @if (session('locale') === 'fr')
                        <p>
                            Ancien sapeur-pompier de Nice pendant plus de 10 ans, j’ai exercé en première
                            intervention
                            sur des centaines de cas graves :
                            <br> secours routiers sur les axes majeurs, feux urbains,
                            urgences vitales et polytraumatismes.
                            <br>
                            <br>
                            Cette expérience m’a donné une capacité unique à
                            détecter vite les situations préoccupantes, à évaluer globalement et à rester méthodique
                            sous pression.

                            <br>
                            <br>

                            En ostéopathie, j’utilise ces compétences chaque jour : diagnostic
                            d’opportunité immédiat pour écarter les pathologies graves, analyse systématique de
                            l’ensemble des systèmes du corps, gestes toujours respectueux des limites
                            physiologiques.
                            <br>
                            <br>
                            Grâce à ce passé de terrain, votre prise en charge est plus vigilante, plus précise et
                            plus
                            sécurisante.
                        </p>
                    @elseif (session('locale') === 'en')
                        <p>
                            Former firefighter in Nice for over 10 years, I performed first-line interventions
                            on hundreds of serious cases:
                            <br> road rescues on major routes, urban fires,
                            life-threatening emergencies and polytrauma.
                            <br>
                            <br>
                            This experience gave me a unique ability to quickly detect concerning situations,
                            perform global assessments and remain methodical under pressure.

                            <br>
                            <br>

                            In osteopathy, I use these skills every day: immediate opportunity diagnosis to rule out
                            serious pathologies, systematic analysis of all body systems, gestures always respectful
                            of physiological limits.
                            <br>
                            <br>
                            Thanks to this field background, your care is more vigilant, more precise and more
                            reassuring.
                        </p>
                    @elseif (session('locale') === 'de')
                        <p>
                            Ehemaliger Feuerwehrmann in Nizza über mehr als 10 Jahre, ich habe in Ersteinsätzen
                            Hunderte schwerer Fälle versorgt:
                            <br> Rettungseinsätze auf Hauptachsen, Stadtbrände,
                            lebensbedrohliche Notfälle und Polytraumata.
                            <br>
                            <br>
                            Diese Erfahrung hat mir eine einzigartige Fähigkeit gegeben, schnell besorgniserregende
                            Situationen zu erkennen, global zu bewerten und unter Druck methodisch zu bleiben.

                            <br>
                            <br>

                            In der Osteopathie nutze ich diese Kompetenzen täglich: sofortige Chancendiagnostik zum
                            Ausschluss schwerer Pathologien, systematische Analyse aller Körpersysteme, immer
                            respektvolle Bewegungen innerhalb physiologischer Grenzen.
                            <br>
                            <br>
                            Dank dieses Einsatzhintergrunds ist Ihre Betreuung aufmerksamer, präziser und sicherer.
                        </p>
                    @elseif (session('locale') === 'it')
                        <p>
                            Ex vigile del fuoco a Nizza per più di 10 anni, ho svolto interventi in prima linea
                            su centinaia di casi gravi:
                            <br> soccorsi stradali sulle arterie principali, incendi urbani,
                            emergenze vitali e politraumi.
                            <br>
                            <br>
                            Questa esperienza mi ha dato una capacità unica di rilevare rapidamente situazioni
                            preoccupanti, valutare globalmente e rimanere metodico sotto pressione.

                            <br>
                            <br>

                            In osteopatia, utilizzo queste competenze ogni giorno: diagnosi d’opportunità immediata
                            per escludere patologie gravi, analisi sistematica di tutti i sistemi corporei, gesti
                            sempre rispettosi dei limiti fisiologici.
                            <br>
                            <br>
                            Grazie a questo passato sul campo, la tua presa in carico è più vigile, più precisa e
                            più rassicurante.
                        </p>
                    @elseif (session('locale') === 'es')
                        <p>
                            Ex bombero en Niza durante más de 10 años, realicé intervenciones de primera línea
                            en cientos de casos graves:
                            <br> rescates viales en vías principales, incendios urbanos,
                            emergencias vitales y politraumatismos.
                            <br>
                            <br>
                            Esta experiencia me dio una capacidad única para detectar rápidamente situaciones
                            preocupantes, evaluar globalmente y permanecer metódico bajo presión.

                            <br>
                            <br>

                            En osteopatía, utilizo estas competencias cada día: diagnóstico de oportunidad inmediato
                            para descartar patologías graves, análisis sistemático de todos los sistemas corporales,
                            gestos siempre respetuosos de los límites fisiológicos.
                            <br>
                            <br>
                            Gracias a este pasado de campo, tu atención es más vigilante, más precisa y más segura.
                        </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5" data-aos="fade-up" data-aos-delay="100">
            <a target="_blank" href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                class="btn-custom-primary-outlined">
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
        </div>
        <div class="row g-0">
            <div class="specialties-grid" data-aos="fade-up" data-aos-delay="300">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-6">
                        <div class="specialty-card">
                            <div class="specialty-image">
                                <img src={{ asset('img/website/damien/diag.webp') }} alt="Diagnostic d'opportunité"
                                    class="img-fluid" loading="lazy">
                            </div>
                            <div class="specialty-content">
                                @if (session('locale') === 'fr')
                                    <h5>Diagnostic d’Opportunité</h5>
                                    <span>Identification des signaux d'alerte pour orienter rapidement vers les soins
                                        adaptés</span>
                                @elseif (session('locale') === 'en')
                                    <h5>Opportunity Diagnosis</h5>
                                    <span>Identification of red flags to quickly direct towards appropriate care</span>
                                @elseif (session('locale') === 'de')
                                    <h5>Chancendiagnostik</h5>
                                    <span>Erkennung von Warnsignalen zur schnellen Weiterleitung zu passender
                                        Versorgung</span>
                                @elseif (session('locale') === 'it')
                                    <h5>Diagnosi d’Opportunità</h5>
                                    <span>Identificazione dei segnali d’allarme per indirizzare rapidamente alle cure
                                        appropriate</span>
                                @elseif (session('locale') === 'es')
                                    <h5>Diagnóstico de Oportunidad</h5>
                                    <span>Identificación de señales de alerta para orientar rápidamente hacia los
                                        cuidados
                                        adecuados</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="specialty-card">
                            <div class="specialty-image">
                                <img src={{ asset('img/website/damien/tensionmètre.webp') }}
                                    alt="Évaluation systématique" class="img-fluid" loading="lazy">
                            </div>
                            <div class="specialty-content">
                                @if (session('locale') === 'fr')
                                    <h5>Évaluation Systématique</h5>
                                    <span>Analyse complète des systèmes mécanique, viscéral et neurologique</span>
                                @elseif (session('locale') === 'en')
                                    <h5>Systematic Assessment</h5>
                                    <span>Complete analysis of mechanical, visceral and neurological systems</span>
                                @elseif (session('locale') === 'de')
                                    <h5>Systematische Bewertung</h5>
                                    <span>Vollständige Analyse der mechanischen, viszeralen und neurologischen
                                        Systeme</span>
                                @elseif (session('locale') === 'it')
                                    <h5>Valutazione Sistematica</h5>
                                    <span>Analisi completa dei sistemi meccanico, viscerale e neurologico</span>
                                @elseif (session('locale') === 'es')
                                    <h5>Evaluación Sistemática</h5>
                                    <span>Análisis completo de los sistemas mecánico, visceral y neurológico</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="specialty-card">
                            <div class="specialty-image">
                                <img src={{ asset('img/website/damien/stéthoscope.webp') }} alt="Réorientation médicale"
                                    class="img-fluid" loading="lazy">
                            </div>
                            <div class="specialty-content">
                                @if (session('locale') === 'fr')
                                    <h5>Réorientation Médicale</h5>
                                    <span>Collaboration avec votre parcours de soins pour garantir sécurité et
                                        efficacité</span>
                                @elseif (session('locale') === 'en')
                                    <h5>Medical Reorientation</h5>
                                    <span>Collaboration with your care pathway to ensure safety and effectiveness</span>
                                @elseif (session('locale') === 'de')
                                    <h5>Medizinische Weiterleitung</h5>
                                    <span>Zusammenarbeit mit Ihrem Versorgungsweg zur Gewährleistung von Sicherheit und
                                        Wirksamkeit</span>
                                @elseif (session('locale') === 'it')
                                    <h5>Reindirizzamento Medico</h5>
                                    <span>Collaborazione con il tuo percorso di cure per garantire sicurezza ed
                                        efficacia</span>
                                @elseif (session('locale') === 'es')
                                    <h5>Reorientación Médica</h5>
                                    <span>Colaboración con tu recorrido de cuidados para garantizar seguridad y
                                        eficacia</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="specialty-card">
                            <div class="specialty-image">
                                <img src={{ asset('img/website/damien/secours.webp') }} alt="Expertise terrain"
                                    class="img-fluid" loading="lazy">
                            </div>
                            <div class="specialty-content">
                                @if (session('locale') === 'fr')
                                    <h5>Expertise Terrain</h5>
                                    <span>10 ans d’expérience dans le secours d’urgence au service de votre
                                        ostéopathie</span>
                                @elseif (session('locale') === 'en')
                                    <h5>Field Expertise</h5>
                                    <span>10 years of emergency rescue experience serving your osteopathy</span>
                                @elseif (session('locale') === 'de')
                                    <h5>Einsatzerfahrung</h5>
                                    <span>10 Jahre Notfallrettungserfahrung im Dienst Ihrer Osteopathie</span>
                                @elseif (session('locale') === 'it')
                                    <h5>Competenza sul Campo</h5>
                                    <span>10 anni di esperienza nel soccorso d’urgenza al servizio della tua
                                        osteopatia</span>
                                @elseif (session('locale') === 'es')
                                    <h5>Experiencia de Campo</h5>
                                    <span>10 años de experiencia en rescate de emergencia al servicio de tu
                                        osteopatía</span>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section><!-- /Featured Services Section -->
