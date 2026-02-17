<!-- Departments Tabs Section -->
<section id="departments-tabs" class="departments-tabs section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            @if (\App\Models\Website::getSettings()->lang === 'fr')
                <h2>Mes Spécialisations en Ostéopathie</h2>
                <p>Approche manuelle globale, douce et personnalisée pour sportifs, gestion du stress, familles et
                    bien-être
                    quotidien à Nice.</p>
            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                <h2>My Osteopathy Specialisations</h2>
                <p>Global, gentle and personalised manual approach for athletes, stress management, families and
                    everyday well-being
                    in Nice.</p>
            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                <h2>Meine Spezialisierungen in der Osteopathie</h2>
                <p>Ganzheitlicher, sanfter und individueller manueller Ansatz für Sportler, Stressbewältigung, Familien
                    und tägliches Wohlbefinden
                    in Nizza.</p>
            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                <h2>Le Mie Specializzazioni in Osteopatia</h2>
                <p>Approccio manuale globale, dolce e personalizzato per sportivi, gestione dello stress, famiglie e
                    benessere
                    quotidiano a Nizza.</p>
            @endif
        </div><!-- End Section Title -->
        <div class="medical-specialties">
            <div class="row">
                <div class="col-12">
                    <div class="specialty-navigation">
                        <div class="nav nav-pills d-flex" id="specialty-tabs" role="tablist" data-aos="fade-up"
                            data-aos-delay="400">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <a class="nav-link department-tab active" id="qvt-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-stress" role="tab">Gestion Anxiété & Stress</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <a class="nav-link department-tab active" id="qvt-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-stress" role="tab">Anxiety & Stress Management</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <a class="nav-link department-tab active" id="qvt-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-stress" role="tab">Angst- & Stressmanagement</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <a class="nav-link department-tab active" id="qvt-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-stress" role="tab">Gestione Ansia & Stress</a>
                            @endif

                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <a class="nav-link department-tab" id="sport-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-sport" role="tab">Ostéopathie du Sport & Performance
                                    Durable</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <a class="nav-link department-tab" id="sport-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-sport" role="tab">Sports Osteopathy & Sustainable
                                    Performance</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <a class="nav-link department-tab" id="sport-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-sport" role="tab">Sportosteopathie & Nachhaltige
                                    Leistung</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <a class="nav-link department-tab" id="sport-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-sport" role="tab">Osteopatia dello Sport & Performance
                                    Duratura</a>
                            @endif

                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <a class="nav-link department-tab" id="spa-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-spa" role="tab">Récupération Accélérée & Drainage
                                    Tissulaire</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <a class="nav-link department-tab" id="spa-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-spa" role="tab">Accelerated Recovery & Tissue
                                    Drainage</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <a class="nav-link department-tab" id="spa-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-spa" role="tab">Beschleunigte Erholung &
                                    Gewebedrainage</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <a class="nav-link department-tab" id="spa-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-spa" role="tab">Recupero Accelerato & Drenaggio
                                    Tessutale</a>
                            @endif

                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <a class="nav-link department-tab" id="autres-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-femmes-enceintes" role="tab">Femmes Enceintes /
                                    Post-partum</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <a class="nav-link department-tab" id="autres-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-femmes-enceintes" role="tab">Pregnant Women /
                                    Postpartum</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <a class="nav-link department-tab" id="autres-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-femmes-enceintes" role="tab">Schwangere / Wochenbett</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <a class="nav-link department-tab" id="autres-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-femmes-enceintes" role="tab">Donne in Gravidanza /
                                    Post-partum</a>
                            @endif

                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <a class="nav-link department-tab" id="autres-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-posturologie" role="tab">Posturologie</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <a class="nav-link department-tab" id="autres-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-posturologie" role="tab">Posturology</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <a class="nav-link department-tab" id="autres-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-posturologie" role="tab">Posturologie</a>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <a class="nav-link department-tab" id="autres-tab" data-bs-toggle="pill"
                                    href="#departments-tabs-posturologie" role="tab">Posturologia</a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="tab-content department-content" id="specialty-content" data-aos="fade-up"
                        data-aos-delay="500">

                        <!-- Gestion Anxiété -->
                        <div class="tab-pane fade show active" id="departments-tabs-stress" role="tabpanel">
                            <div class="row department-layout">
                                <div class="col-lg-4 order-lg-2">
                                    <div class="department-image">
                                        <img src="{{ asset('img/website/damien/anxiété-1.webp') }}"
                                            alt="Gestion stress entreprise Nice" class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-lg-8 order-lg-1">
                                    <div class="department-info">
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <h2 class="department-title">Gestion Anxiété & Stress</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <h2 class="department-title">Anxiety & Stress Management</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <h2 class="department-title">Angst- & Stressbewältigung</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <h2 class="department-title">Gestione Ansia & Stress</h2>
                                        @endif

                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <p class="department-description">
                                                Vivre sous pression constante déclenche des symptômes physiques
                                                concrets,
                                                comme une raideur de la nuque ou une fatigue persistante, qui finissent
                                                par
                                                piéger l'esprit dans un cercle vicieux. L’ostéopathie intervient pour
                                                dénouer ces tensions, réguler le système nerveux et restaurer
                                                l'équilibre
                                                global entre le corps et l'esprit.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <p class="department-description">
                                                Living under constant pressure triggers real physical symptoms,
                                                such as neck stiffness or persistent fatigue, eventually trapping the
                                                mind in a vicious cycle. Osteopathy intervenes to release these
                                                tensions, regulate the nervous system and restore overall body-mind
                                                balance.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <p class="department-description">
                                                Ständiger Druck löst konkrete körperliche Symptome aus,
                                                wie Nackensteifheit oder anhaltende Müdigkeit, die den Geist in einen
                                                Teufelskreis einschließen. Die Osteopathie löst diese Spannungen,
                                                reguliert das Nervensystem und stellt das globale Gleichgewicht zwischen
                                                Körper und Geist wieder her.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <p class="department-description">
                                                Vivere sotto pressione costante scatena sintomi fisici concreti,
                                                come rigidità cervicale o stanchezza persistente, che finiscono per
                                                intrappolare la mente in un circolo vizioso. L’osteopatia interviene per
                                                sciogliere queste tensioni, regolare il sistema nervoso e ripristinare
                                                l’equilibrio globale tra corpo e mente.
                                            </p>
                                        @endif

                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Libération des tensions liées au stress</h4>
                                                            <p>Cervicales, mâchoire, diaphragme, bassin</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Release of stress-related tensions</h4>
                                                            <p>Neck, jaw, diaphragm, pelvis</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Lösung stressbedingter Verspannungen</h4>
                                                            <p>Halswirbelsäule, Kiefer, Zwerchfell, Becken</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Liberazione delle tensioni legate allo stress</h4>
                                                            <p>Cervicali, mandibola, diaframma, bacino</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Régulation nerveuse</h4>
                                                            <p>Techniques crâniennes favorisant détente, sommeil, calme
                                                                intérieur</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Nervous system regulation</h4>
                                                            <p>Cranial techniques promoting relaxation, sleep, inner
                                                                calm</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Nervenregulation</h4>
                                                            <p>Kraniale Techniken zur Förderung von Entspannung, Schlaf
                                                                und innerer Ruhe</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Regolazione del sistema nervoso</h4>
                                                            <p>Tecniche craniali per favorire rilassamento, sonno, calma
                                                                interiore</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Viscéral & fascial</h4>
                                                            <p>Travail des zones digestives et respiratoires amplifiées
                                                                par le stress</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Visceral & fascial</h4>
                                                            <p>Work on digestive and respiratory areas amplified by
                                                                stress</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Viszeral & faszial</h4>
                                                            <p>Arbeit an durch Stress verstärkten Verdauungs- und
                                                                Atemzonen</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Viscerale & fasciale</h4>
                                                            <p>Lavoro sulle zone digestive e respiratorie amplificate
                                                                dallo stress</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Bilan postural individuel</h4>
                                                            <p>Approche corps-esprit globale et personnalisée</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Individual postural assessment</h4>
                                                            <p>Global and personalised body-mind approach</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Individueller Haltungscheck</h4>
                                                            <p>Ganzheitlicher und personalisierter Körper-Geist-Ansatz
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Bilancio posturale individuale</h4>
                                                            <p>Approccio corpo-mente globale e personalizzato</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a target="_blank"
                                            href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                                            class="btn-custom-primary w-100">
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                <span>Prendre rendez-vous sur</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                <span>Book an appointment on</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                <span>Termin buchen auf</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                <span>Prenota un appuntamento su</span>
                                            @endif
                                            <span class="kaushan-script-regular ms-2">Doctolib</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ostéopathie du Sport -->
                        <div class="tab-pane fade" id="departments-tabs-sport" role="tabpanel">
                            <div class="row department-layout">
                                <div class="col-lg-4 order-lg-2">
                                    <div class="department-image">
                                        <img src="{{ asset('img/website/damien/sport-1.webp') }}"
                                            alt="Ostéopathie du sport Nice" class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-lg-8 order-lg-1">
                                    <div class="department-info">
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <h2 class="department-title">Ostéopathie du Sport & Performance Durable
                                            </h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <h2 class="department-title">Sports Osteopathy & Sustainable Performance
                                            </h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <h2 class="department-title">Sportosteopathie & Nachhaltige Leistung</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <h2 class="department-title">Osteopatia dello Sport & Performance Duratura
                                            </h2>
                                        @endif

                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <p class="department-description">
                                                Nice, capitale mondiale du triathlon : Ironman France, 70.3 Mondiaux…
                                                <br>
                                                Le corps encaisse des charges extrêmes : impacts cumulés, rotations
                                                asymétriques, sursollicitations intenses. Pour performer durablement
                                                sans se
                                                blesser, l’ostéopathie optimise mobilité, récupération et équilibre
                                                biomécanique.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <p class="department-description">
                                                Nice, world triathlon capital: Ironman France, 70.3 Worlds… <br>
                                                The body withstands extreme loads: cumulative impacts, asymmetrical
                                                rotations,
                                                intense overuse. To perform sustainably without injury, osteopathy
                                                optimises mobility, recovery and biomechanical balance.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <p class="department-description">
                                                Nizza, Welt-Hauptstadt des Triathlons: Ironman France, 70.3-WM… <br>
                                                Der Körper nimmt extreme Belastungen auf: kumulierte Stöße,
                                                asymmetrische Rotationen,
                                                intensive Überlastung. Um dauerhaft zu performen ohne Verletzungen
                                                optimiert die Osteopathie Mobilität, Erholung und biomechanisches
                                                Gleichgewicht.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <p class="department-description">
                                                Nizza, capitale mondiale del triathlon: Ironman France, Mondiali 70.3…
                                                <br>
                                                Il corpo subisce carichi estremi: impatti cumulati, rotazioni
                                                asimmetriche,
                                                sovraccarichi intensi. Per performare in modo duraturo senza infortuni,
                                                l’osteopatia ottimizza mobilità, recupero ed equilibrio biomeccanico.
                                            </p>
                                        @endif

                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Prévention des blessures</h4>
                                                            <p>Restrictions articulaires, déséquilibres posturaux,
                                                                tensions fasciales</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Injury Prevention</h4>
                                                            <p>Joint restrictions, postural imbalances, fascial tensions
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Verletzungsprävention</h4>
                                                            <p>Gelenksperren, Haltungsungleichgewichte, fasziale
                                                                Spannungen</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Prevenzione degli infortuni</h4>
                                                            <p>Restrizioni articolari, squilibri posturali, tensioni
                                                                fasciali</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Optimisation de la performance</h4>
                                                            <p>Libération des chaînes musculaires et amplitude améliorée
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Performance Optimisation</h4>
                                                            <p>Release of muscular chains and improved range of motion
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Leistungsoptimierung</h4>
                                                            <p>Lösung muskulärer Ketten und verbesserte Beweglichkeit
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Ottimizzazione della performance</h4>
                                                            <p>Liberazione delle catene muscolari e miglioramento
                                                                dell’ampiezza</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Récupération & drainage</h4>
                                                            <p>Post-effort, surcharges et microtraumatismes répétés</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Recovery & Drainage</h4>
                                                            <p>Post-exercise, overloads and repeated microtrauma</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Erholung & Drainage</h4>
                                                            <p>Nach Belastung, Überlastungen und wiederholte
                                                                Mikrotraumen</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Recupero & drenaggio</h4>
                                                            <p>Post-sforzo, sovraccarichi e microtraumi ripetuti</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Rééducation & gestion stress</h4>
                                                            <p>Retour terrain post-blessure et focus mental compétition
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Rehabilitation & Stress Management</h4>
                                                            <p>Return to sport post-injury and competition mental focus
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Rehabilitation & Stressmanagement</h4>
                                                            <p>Rückkehr zum Sport nach Verletzung und mentaler
                                                                Wettkampffokus</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Riabilitazione & gestione stress</h4>
                                                            <p>Ritorno in campo post-infortunio e focus mentale gara</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a target="_blank"
                                            href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                                            class="btn-custom-primary w-100">
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                <span>Prendre rendez-vous sur</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                <span>Book an appointment on</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                <span>Termin buchen auf</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                <span>Prenota un appuntamento su</span>
                                            @endif
                                            <span class="kaushan-script-regular ms-2">Doctolib</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Récupération Accélérée & Drainage Tissulaire -->
                        <div class="tab-pane fade" id="departments-tabs-spa" role="tabpanel">
                            <div class="row department-layout">
                                <div class="col-lg-4 order-lg-2">
                                    <div class="department-image">
                                        <img src="{{ asset('img/website/damien/damien-13.webp') }}"
                                            alt="Récupération ostéopathie Nice" class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-lg-8 order-lg-1">
                                    <div class="department-info">
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <h2 class="department-title">Récupération Accélérée & Drainage Tissulaire
                                            </h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <h2 class="department-title">Accelerated Recovery & Tissue Drainage</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <h2 class="department-title">Beschleunigte Erholung & Gewebedrainage</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <h2 class="department-title">Recupero Accelerato & Drenaggio Tessutale</h2>
                                        @endif

                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <p class="department-description">
                                                Après compétition ou entraînement intense, l'ostéopathie relance la
                                                circulation, améliore la mobilité et diminue les raideurs.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <p class="department-description">
                                                After competition or intense training, osteopathy boosts circulation,
                                                improves mobility and reduces stiffness.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <p class="department-description">
                                                Nach Wettkampf oder intensivem Training regt die Osteopathie die
                                                Durchblutung an, verbessert die Beweglichkeit und reduziert Steifheit.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <p class="department-description">
                                                Dopo competizione o allenamento intenso, l’osteopatia riattiva la
                                                circolazione, migliora la mobilità e riduce le rigidità.
                                            </p>
                                        @endif

                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Drainage tissulaire post-effort</h4>
                                                            <p>Élimination des toxines et retour musculaire rapide après
                                                                l'effort</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Post-exercise tissue drainage</h4>
                                                            <p>Elimination of toxins and rapid muscle recovery after
                                                                effort</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Gewebedrainage nach Belastung</h4>
                                                            <p>Entgiftung und schnelle Muskelregeneration nach
                                                                Anstrengung</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Drenaggio tessutale post-sforzo</h4>
                                                            <p>Eliminazione delle tossine e rapido ritorno muscolare
                                                                dopo lo sforzo</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Libération globale du corps</h4>
                                                            <p>Déverrouillage articulaire après charges importantes et
                                                                sursollicitations</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Global body release</h4>
                                                            <p>Joint unlocking after heavy loads and overuse</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Ganzkörperliche Lösung</h4>
                                                            <p>Gelenksmobilisation nach hohen Belastungen und
                                                                Überlastung</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Liberazione globale del corpo</h4>
                                                            <p>Sblocco articolare dopo carichi importanti e
                                                                sovraccarichi</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Amélioration vasculaire</h4>
                                                            <p>Optimisation de la vascularisation et oxygénation
                                                                tissulaire</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Vascular improvement</h4>
                                                            <p>Optimisation of blood supply and tissue oxygenation</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Gefäßverbesserung</h4>
                                                            <p>Optimierung der Durchblutung und Gewebeoxygenierung</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Miglioramento vascolare</h4>
                                                            <p>Ottimizzazione della vascolarizzazione e ossigenazione
                                                                tissutale</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Prévention des interruptions sportives</h4>
                                                            <p>Réduction des risques de blessure</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Prevention of sports interruptions</h4>
                                                            <p>Reduction of injury risks</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Prävention sportlicher Unterbrechungen</h4>
                                                            <p>Reduktion des Verletzungsrisikos</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Prevenzione delle interruzioni sportive</h4>
                                                            <p>Riduzione del rischio di infortuni</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a target="_blank"
                                            href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                                            class="btn-custom-primary w-100">
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                <span>Prendre rendez-vous sur</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                <span>Book an appointment on</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                <span>Termin buchen auf</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                <span>Prenota un appuntamento su</span>
                                            @endif
                                            <span class="kaushan-script-regular ms-2">Doctolib</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Femmes enceintes / Post-partum -->
                        <div class="tab-pane fade" id="departments-tabs-femmes-enceintes" role="tabpanel">
                            <div class="row department-layout">
                                <div class="col-lg-4 order-lg-2">
                                    <div class="department-image">
                                        <img src="{{ asset('img/website/damien/Femme-enceinte-1.webp') }}"
                                            alt="Ostéopathie Pédiatrique Nice" class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-lg-8 order-lg-1">
                                    <div class="department-info">
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <h2 class="department-title">Femmes Enceintes / Post-partum</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <h2 class="department-title">Pregnant Women / Postpartum</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <h2 class="department-title">Schwangere / Wochenbett</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <h2 class="department-title">Donne in Gravidanza / Post-partum</h2>
                                        @endif

                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <p class="department-description">
                                                Une approche douce et entièrement personnalisée pour les futures mamans.
                                                <br>
                                                Une méthode tout en douceur pour rééquilibrer vos appuis pendant la
                                                grossesse, réduire les asymétries posturales liées aux changements du
                                                corps
                                                et soulager en profondeur le dos, le bassin et les jambes.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <p class="department-description">
                                                A gentle and fully personalised approach for expectant mothers.
                                                <br>
                                                A very gentle method to rebalance your supports during pregnancy, reduce
                                                postural asymmetries linked to body changes and deeply relieve the back,
                                                pelvis and legs.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <p class="department-description">
                                                Ein sanfter und vollständig individualisierter Ansatz für werdende
                                                Mütter.
                                                <br>
                                                Eine sehr sanfte Methode, um Ihre Stützen während der Schwangerschaft
                                                wieder ins Gleichgewicht zu bringen, Haltungsasymmetrien durch
                                                Körperformveränderungen zu reduzieren und Rücken, Becken und Beine
                                                tiefgehend zu entlasten.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <p class="department-description">
                                                Un approccio dolce e completamente personalizzato per le future mamme.
                                                <br>
                                                Un metodo estremamente delicato per riequilibrare gli appoggi durante la
                                                gravidanza, ridurre le asimmetrie posturali legate ai cambiamenti del
                                                corpo e alleviare in profondità schiena, bacino e gambe.
                                            </p>
                                        @endif

                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Suivi de Grossesse</h4>
                                                            <p>Troubles du sommeil, sciatiques, cervicalgies, pubalgies,
                                                                lombalgies, dorsalgies… ces maux fréquents pendant la
                                                                grossesse peuvent être apaisés grâce à une méthode tout
                                                                en douceur pour réharmoniser vos appuis et retrouver du
                                                                confort</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Pregnancy Follow-up</h4>
                                                            <p>Sleep disturbances, sciatica, neck pain, pubic pain, low
                                                                back pain, thoracic pain… these common pregnancy
                                                                complaints can be soothed with a very gentle method to
                                                                reharmonise your supports and regain comfort</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Schwangerschaftsbegleitung</h4>
                                                            <p>Schlafstörungen, Ischias, Nackenschmerzen,
                                                                Schambeinschmerzen, Rückenschmerzen,
                                                                Brustwirbelsäulenschmerzen… diese häufigen Beschwerden
                                                                in der Schwangerschaft können durch eine sehr sanfte
                                                                Methode gelindert werden, um Ihre Stützen wieder zu
                                                                harmonisieren und Komfort zurückzugewinnen</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Seguimento in Gravidanza</h4>
                                                            <p>Disturbi del sonno, sciatalgia, cervicalgie, pubalgie,
                                                                lombalgie, dorsalgie… questi disturbi frequenti in
                                                                gravidanza possono essere alleviati con un metodo molto
                                                                dolce per riequilibrare gli appoggi e ritrovare comfort
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Suivi post-partum</h4>
                                                            <p>Rééquilibrage du bassin pour une meilleure stabilité,
                                                                gestion bienveillante des douleurs courantes et
                                                                traitement respectueux des cicatrices, pour vivre ces
                                                                étapes avec plus de confort et de sérénité.</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Postpartum Follow-up</h4>
                                                            <p>Pelvic rebalancing for better stability, gentle
                                                                management of common pains and respectful treatment of
                                                                scars, to experience these stages with more comfort and
                                                                serenity.</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Wochenbett-Begleitung</h4>
                                                            <p>Beckenrebalancierung für bessere Stabilität, achtsame
                                                                Behandlung häufiger Schmerzen und respektvoller Umgang
                                                                mit Narben, um diese Phase mit mehr Komfort und
                                                                Gelassenheit zu erleben.</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Seguimento post-partum</h4>
                                                            <p>Riequilibrio del bacino per maggiore stabilità, gestione
                                                                gentile dei dolori comuni e trattamento rispettoso delle
                                                                cicatrici, per vivere queste fasi con più comfort e
                                                                serenità.</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Bilan postural complet</h4>
                                                            <p>Analyse des déséquilibres et corrections structurelles
                                                                adaptées</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Complete postural assessment</h4>
                                                            <p>Analysis of imbalances and adapted structural corrections
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Vollständiger Haltungscheck</h4>
                                                            <p>Analyse von Ungleichgewichten und angepasste strukturelle
                                                                Korrekturen</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Bilancio posturale completo</h4>
                                                            <p>Analisi degli squilibri e correzioni strutturali adattate
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Prévention durable</h4>
                                                            <p>Optimisation posturale et prévention des douleurs
                                                                chroniques</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Sustainable prevention</h4>
                                                            <p>Postural optimisation and prevention of chronic pain</p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Nachhaltige Prävention</h4>
                                                            <p>Haltungsoptimierung und Vorbeugung chronischer Schmerzen
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Prevenzione duratura</h4>
                                                            <p>Ottimizzazione posturale e prevenzione dei dolori cronici
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a target="_blank"
                                            href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                                            class="btn-custom-primary w-100">
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                <span>Prendre rendez-vous sur</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                <span>Book an appointment on</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                <span>Termin buchen auf</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                <span>Prenota un appuntamento su</span>
                                            @endif
                                            <span class="kaushan-script-regular ms-2">Doctolib</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Posturologie -->
                        <div class="tab-pane fade" id="departments-tabs-posturologie" role="tabpanel">
                            <div class="row department-layout">
                                <div class="col-lg-4 order-lg-2">
                                    <div class="department-image">
                                        <img src="{{ asset('img/website/damien/posture-1.webp') }}"
                                            alt="Ostéopathie Pédiatrique Nice" class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-lg-8 order-lg-1">
                                    <div class="department-info">
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <h2 class="department-title">Posturologie</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <h2 class="department-title">Posturology</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <h2 class="department-title">Posturologie</h2>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <h2 class="department-title">Posturologia</h2>
                                        @endif

                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <p class="department-description">
                                                Une approche douce, globale et entièrement personnalisée pour retrouver
                                                un
                                                équilibre postural harmonieux.
                                                Une méthode tout en douceur pour réinformer vos capteurs posturaux,
                                                rééquilibrer vos appuis, réduire les asymétries et soulager en
                                                profondeur
                                                les tensions accumulées dans le dos, le bassin, les membres inférieurs
                                                et
                                                l’ensemble des chaînes musculaires.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <p class="department-description">
                                                A gentle, global and fully personalised approach to regain harmonious
                                                postural balance.
                                                A very gentle method to reinform your postural sensors, rebalance your
                                                supports, reduce asymmetries and deeply relieve accumulated tensions in
                                                the back, pelvis, lower limbs and all muscular chains.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <p class="department-description">
                                                Ein sanfter, ganzheitlicher und vollständig individualisierter Ansatz,
                                                um ein harmonisches Haltungs-Gleichgewicht wiederzuerlangen.
                                                Eine sehr sanfte Methode, um Ihre Haltungssensoren neu zu informieren,
                                                Ihre Stützen auszugleichen, Asymmetrien zu reduzieren und angesammelte
                                                Spannungen in Rücken, Becken, unteren Extremitäten und allen
                                                Muskelketten tiefgehend zu entlasten.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <p class="department-description">
                                                Un approccio dolce, globale e completamente personalizzato per ritrovare
                                                un equilibrio posturale armonioso.
                                                Un metodo molto delicato per reinformare i tuoi recettori posturali,
                                                riequilibrare gli appoggi, ridurre le asimmetrie e alleviare in
                                                profondità le tensioni accumulate nella schiena, bacino, arti inferiori
                                                e tutte le catene muscolari.
                                            </p>
                                        @endif

                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Bilan Postural Complet</h4>
                                                            <p>
                                                                Évaluation approfondie et systématique de votre posture
                                                                statique et dynamique.
                                                                Interrogatoire détaillé, analyse des capteurs posturaux
                                                                (podaux, oculaires, mandibulaires, vestibulaires),
                                                                examen
                                                                des chaînes musculaires, du centre de gravité et des
                                                                asymétries. Ce bilan identifie les origines des troubles
                                                                musculo-squelettiques chroniques et définit un plan de
                                                                prise
                                                                en charge adapté et priorisé.
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Complete Postural Assessment</h4>
                                                            <p>
                                                                Thorough and systematic evaluation of your static and
                                                                dynamic posture.
                                                                Detailed history, analysis of postural sensors (feet,
                                                                eyes, jaw, vestibular), examination of muscular chains,
                                                                centre of gravity and asymmetries. This assessment
                                                                identifies the origins of chronic musculoskeletal
                                                                disorders and defines an adapted and prioritised care
                                                                plan.
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Vollständige Haltungsanalyse</h4>
                                                            <p>
                                                                Gründliche und systematische Bewertung Ihrer statischen
                                                                und dynamischen Haltung.
                                                                Detaillierte Anamnese, Analyse der Haltungssensoren
                                                                (Fuß, Auge, Kiefer, Vestibular), Untersuchung der
                                                                Muskelketten, Schwerpunkt und Asymmetrien. Diese Analyse
                                                                identifiziert die Ursachen chronischer
                                                                muskuloskelettaler Beschwerden und legt einen
                                                                angepassten und priorisierten Behandlungsplan fest.
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Bilancio Posturale Completo</h4>
                                                            <p>
                                                                Valutazione approfondita e sistematica della tua postura
                                                                statica e dinamica.
                                                                Anamnesi dettagliata, analisi dei recettori posturali
                                                                (podalici, oculari, mandibolari, vestibolari), esame
                                                                delle catene muscolari, del centro di gravità e delle
                                                                asimmetrie. Questo bilancio identifica le origini dei
                                                                disturbi muscolo-scheletrici cronici e definisce un
                                                                piano di presa in carico adattato e prioritario.
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="service-item">
                                                    <div class="service-icon"><i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="service-content">
                                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                            <h4>Suivi ostéopathique postural</h4>
                                                            <p>
                                                                Traitement manuel ciblé et progressif centré sur la
                                                                rééducation des capteurs posturaux pour restaurer
                                                                l’équilibre global.
                                                                Libération des restrictions articulaires et fasciales,
                                                                réinformation précise des capteurs (podaux, oculaires,
                                                                mandibulaires, vestibulaires…), rééquilibrage des appuis
                                                                et normalisation des chaînes de compensation. Les
                                                                séances, adaptées à l’évolution du patient, visent une
                                                                réduction durable des douleurs, une meilleure stabilité
                                                                et une économie posturale optimale.
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                            <h4>Postural osteopathic follow-up</h4>
                                                            <p>
                                                                Targeted and progressive manual treatment focused on
                                                                re-educating postural sensors to restore global balance.
                                                                Release of articular and fascial restrictions, precise
                                                                reinformation of sensors (feet, eyes, jaw, vestibular…),
                                                                rebalancing of supports and normalisation of
                                                                compensation chains. Sessions, adapted to the patient’s
                                                                progress, aim for lasting pain reduction, better
                                                                stability and optimal postural economy.
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                            <h4>Osteopathische Haltungs-Begleitung</h4>
                                                            <p>
                                                                Gezielte und progressive manuelle Behandlung mit Fokus
                                                                auf die Reeducation der Haltungssensoren zur
                                                                Wiederherstellung des globalen Gleichgewichts.
                                                                Lösung artikulärer und faszialer Restriktionen, präzise
                                                                Neuinformation der Sensoren (Fuß, Auge, Kiefer,
                                                                Vestibular…), Rebalancierung der Stützen und
                                                                Normalisierung der Kompensationsketten. Die Sitzungen,
                                                                an den Fortschritt des Patienten angepasst, zielen auf
                                                                dauerhafte Schmerzlinderung, bessere Stabilität und
                                                                optimale Haltungswirtschaft ab.
                                                            </p>
                                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                            <h4>Seguimento osteopatico posturale</h4>
                                                            <p>
                                                                Trattamento manuale mirato e progressivo centrato sulla
                                                                rieducazione dei recettori posturali per ripristinare
                                                                l’equilibrio globale.
                                                                Liberazione delle restrizioni articolari e fasciali,
                                                                reinformazione precisa dei recettori (podalici, oculari,
                                                                mandibolari, vestibolari…), riequilibrio degli appoggi e
                                                                normalizzazione delle catene di compenso. Le sedute,
                                                                adattate all’evoluzione del paziente, mirano a una
                                                                riduzione duratura dei dolori, maggiore stabilità e
                                                                un’economia posturale ottimale.
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a target="_blank"
                                            href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing"
                                            class="btn-custom-primary w-100">
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                <span>Prendre rendez-vous sur</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                <span>Book an appointment on</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                <span>Termin buchen auf</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                <span>Prenota un appuntamento su</span>
                                            @endif
                                            <span class="kaushan-script-regular ms-2">Doctolib</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- End Tabs Content -->
                </div>
            </div>
        </div>
    </div>
</section>
