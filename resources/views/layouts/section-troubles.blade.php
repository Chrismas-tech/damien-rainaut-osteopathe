<section class="service-details-2 section">
    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        @if (\App\Models\Website::getSettings()->lang === 'fr')
            <h2>Je prends en charge tous les troubles ci-dessous</h2>
        @elseif (\App\Models\Website::getSettings()->lang === 'en')
            <h2>I treat all the conditions listed below</h2>
        @elseif (\App\Models\Website::getSettings()->lang === 'de')
            <h2>Ich behandle alle unten aufgeführten Beschwerden</h2>
        @elseif (\App\Models\Website::getSettings()->lang === 'it')
            <h2>Tratto tutti i disturbi elencati di seguito</h2>
        @endif
    </div>
    <div class="container">
        <div class="row gy-4">

            <!-- Troubles digestifs -->
            <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                <div class="action-card primary">
                    <div class="card-header">
                        <img class="img-troubles" src="{{ asset('img/website/damien/troubles/digestion.png') }}"
                            alt="Troubles digestifs">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            <h4 class="my-4">Troubles digestifs</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            <h4 class="my-4">Digestive disorders</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            <h4 class="my-4">Verdauungsstörungen</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            <h4 class="my-4">Disturbi digestivi</h4>
                        @endif
                    </div>
                    <div class="row gy-1">
                        <div class="col-6 border-end">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p class="mb-0">Ballonnements<br>Aérophagie<br>Digestion lente<br>Reflux
                                    gastro-œsophagiens<br>(hernies hiatales)</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p class="mb-0">Bloating<br>Aerophagia<br>Slow digestion<br>Gastroesophageal
                                    reflux<br>(hiatal hernias)</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p class="mb-0">Blähungen<br>Aerophagie<br>Langsame Verdauung<br>Gastroösophagealer
                                    Reflux<br>(Hiatushernien)</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p class="mb-0">Gonfiore<br>Aerofagia<br>Digestione lenta<br>Reflusso
                                    gastroesofageo<br>(ernie iatali)</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p class="mb-0">Colopathies fonctionnelles<br>(constipations, diarrhées)<br>Troubles
                                    hépatobiliaires<br>Hémorroïdes</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p class="mb-0">Functional colopathies<br>(constipation, diarrhea)<br>Hepatobiliary
                                    disorders<br>Hemorrhoids</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p class="mb-0">Funktionelle Kolopathien<br>(Verstopfung, Durchfall)<br>Hepatobiliäre
                                    Störungen<br>Hämorrhoiden</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p class="mb-0">Colopatie funzionali<br>(stitichezza, diarrea)<br>Disturbi
                                    epatobiliari<br>Emorroidi</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Troubles d’origine vertébrale -->
            <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150">
                <div class="action-card primary">
                    <div class="card-header">
                        <img class="img-troubles" src="{{ asset('img/website/damien/troubles/vertebres.png') }}"
                            alt="Troubles vertébraux">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            <h4 class="my-4">Troubles vertébraux</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            <h4 class="my-4">Vertebral disorders</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            <h4 class="my-4">Wirbelsäulenbeschwerden</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            <h4 class="my-4">Disturbi vertebrali</h4>
                        @endif
                    </div>
                    <div class="row gy-1">
                        <div class="col-6 border-end">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p class="mb-0">Névralgies d’Arnold<br>Névralgies
                                    cervico-brachiales<br>Torticolis<br>Cervicalgies<br>Dorsalgies</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p class="mb-0">Arnold's neuralgia<br>Cervicobrachial
                                    neuralgia<br>Torticollis<br>Cervicalgia<br>Dorsalgia</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p class="mb-0">
                                    Arnold-Neuralgie<br>Zervikobrachialneuralgie<br>Torticollis<br>Zervikalgie<br>Dorsalgie
                                </p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p class="mb-0">Nevralgia di Arnold<br> Nevralgia
                                    cervico-brachiale<br>Torticollo<br>Cervicalgia<br>Dorsalgia</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p class="mb-0">Lumbagos<br>Lombalgies
                                    chroniques<br>Cruralgies<br>Sciatalgies<br>Pubalgies<br>Douleurs
                                    intercostales</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p class="mb-0">Lumbago<br>Chronic low back
                                    pain<br>Cruralgia<br>Sciatica<br>Pubalgia<br>Intercostal pain</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p class="mb-0">Lumbago<br>Chronische
                                    Lumbalgie<br>Cruralgie<br>Ischialgie<br>Pubalgie<br>Interkostalschmerzen</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p class="mb-0">Lombago<br>Lombalgia
                                    cronica<br>Cruralgia<br>Sciatalgia<br>Pubalgia<br>Dolori intercostali</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Troubles locomoteurs -->
            <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <div class="action-card primary">
                    <div class="card-header">
                        <img class="img-troubles"
                            src="{{ asset('img/website/damien/troubles/douleurs-articulaires.png') }}"
                            alt="Troubles locomoteurs">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            <h4 class="my-4">Troubles locomoteurs</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            <h4 class="my-4">Locomotor disorders</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            <h4 class="my-4">Bewegungsapparat-Störungen</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            <h4 class="my-4">Disturbi locomotori</h4>
                        @endif
                    </div>
                    <div class="row gy-1">
                        <div class="col-6 border-end">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p class="mb-0">Entorses<br>Foulures<br>Tendinites (tennis et golf-elbows)<br>Canal
                                    carpien<br>Canal
                                    tarsien</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p class="mb-0">Sprains<br>Strains<br>Tendinitis (tennis and golfer's elbow)<br>Carpal
                                    tunnel<br>Tarsal
                                    tunnel</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p class="mb-0">Verstauchungen<br>Zerrungen<br>Tendinitiden (Tennis- und
                                    Golferellenbogen)<br>Karpaltunnel<br>Tarsaltunnel</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p class="mb-0">Distorsioni<br>Stiramenti<br>Tendiniti (gomito del tennista e del
                                    golfista)<br>Tunnel
                                    carpale<br>Tunnel
                                    tarsale</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p class="mb-0">Douleurs articulaires<br>(épaules, hanches, genoux…)<br>Épines
                                    calcanéennes<br>Algodystrophies</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p class="mb-0">Joint pain<br>(shoulders, hips, knees…)<br>Calcaneal spurs<br>Complex
                                    regional pain syndrome (CRPS)</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p class="mb-0">Gelenkschmerzen<br>(Schultern, Hüften,
                                    Knie…)<br>Fersensporn<br>Algodystrophie (CRPS)</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p class="mb-0">Dolori articolari<br>(spalle, anche, ginocchia…)<br>Spina
                                    calcaneare<br>Algodistrofie</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Troubles O.R.L -->
            <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <div class="action-card primary">
                    <div class="card-header">
                        <img class="img-troubles" src="{{ asset('img/website/damien/troubles/oreille.png') }}"
                            alt="Troubles ORL">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            <h4 class="my-4">Troubles O.R.L</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            <h4 class="my-4">ENT disorders</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            <h4 class="my-4">HNO-Beschwerden</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            <h4 class="my-4">Disturbi ORL</h4>
                        @endif
                    </div>
                    <div class="row gy-1">
                        <div class="col-6 border-end">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p class="mb-0">Sinusites<br>Rhinites<br>Rhinopharyngites</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p class="mb-0">Sinusitis<br>Rhinitis<br>Rhinopharyngitis</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p class="mb-0">Sinusitis<br>Rhinitis<br>Rhinopharyngitis</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p class="mb-0">Sinusiti<br>Riniti<br>Rinofaringiti</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <p class="mb-0">Otites séreuses<br>Vertiges paroxystiques bénins</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <p class="mb-0">Serous otitis media<br>Benign paroxysmal positional vertigo</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <p class="mb-0">Seröse Otitis media<br>Gutartiger paroxysmaler Lagerungsschwindel</p>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <p class="mb-0">Otiti sierose<br>Vertigini parossistiche benigne</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Troubles respiratoires -->
            <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="250">
                <div class="action-card primary">
                    <div class="card-header">
                        <img class="img-troubles" src="{{ asset('img/website/damien/troubles/poumons.png') }}"
                            alt="Troubles respiratoires">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            <h4 class="my-4">Troubles respiratoires</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            <h4 class="my-4">Respiratory disorders</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            <h4 class="my-4">Atemwegsbeschwerden</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            <h4 class="my-4">Disturbi respiratori</h4>
                        @endif
                    </div>
                    <p class="mb-0">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Trachéites<br>Bronchites<br>Asthme
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Tracheitis<br>Bronchitis<br>Asthma
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Tracheitis<br>Bronchitis<br>Asthma
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Tracheiti<br>Bronchiti<br>Asma
                        @endif
                    </p>
                </div>
            </div>

            <!-- Troubles urinaires -->
            <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="350">
                <div class="action-card primary">
                    <div class="card-header">
                        <img class="img-troubles" src="{{ asset('img/website/damien/troubles/goutte.png') }}"
                            alt="Troubles urinaires">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            <h4 class="my-4">Troubles urinaires</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            <h4 class="my-4">Urinary disorders</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            <h4 class="my-4">Harnwegsbeschwerden</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            <h4 class="my-4">Disturbi urinari</h4>
                        @endif
                    </div>
                    <p class="mb-0">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Cystites<br>Troubles de la prostate<br>Incontinences<br>Énurésie
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Cystitis<br>Prostate disorders<br>Incontinence<br>Enuresis
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Zystitis<br>Prostatabeschwerden<br>Inkontinenz<br>Enuresis
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Cistiti<br>Disturbi prostatici<br>Incontinenza<br>Enuresi
                        @endif
                    </p>
                </div>
            </div>

            <!-- Troubles gynécologiques -->
            <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                <div class="action-card primary">
                    <div class="card-header">
                        <img class="img-troubles" src="{{ asset('img/website/damien/troubles/feminin.png') }}"
                            alt="Troubles gynécologiques">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            <h4 class="my-4">Troubles gynécologiques</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            <h4 class="my-4">Gynecological disorders</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            <h4 class="my-4">Gynäkologische Beschwerden</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            <h4 class="my-4">Disturbi ginecologici</h4>
                        @endif
                    </div>
                    <p class="mb-0">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Normalisation du cycle<br>Règles douloureuses<br>Infertilité<br>Troubles de
                            la ménopause
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Cycle normalization<br>Painful periods<br>Infertility<br>Menopause disorders
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Zyklusnormalisierung<br>Schmerzhafte
                            Regelblutung<br>Unfruchtbarkeit<br>Wechseljahresbeschwerden
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Normalizzazione del ciclo<br>Regole dolorose<br>Infertilità<br>Disturbi della menopausa
                        @endif
                    </p>
                </div>
            </div>

            <!-- Troubles circulatoires -->
            <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="450">
                <div class="action-card primary">
                    <div class="card-header">
                        <img class="img-troubles" src="{{ asset('img/website/damien/troubles/crise-cardiaque.png') }}"
                            alt="Troubles circulatoires">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            <h4 class="my-4">Troubles circulatoires</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            <h4 class="my-4">Circulatory disorders</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            <h4 class="my-4">Kreislaufstörungen</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            <h4 class="my-4">Disturbi circolatori</h4>
                        @endif
                    </div>
                    <p class="mb-0">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Palpitations<br>Oppressions thoraciques<br>Jambes lourdes<br>Maladie de
                            Raynaud
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Palpitations<br>Chest tightness<br>Heavy legs<br>Raynaud's disease
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Herzklopfen<br>Thorakale Beklemmung<br>Schwere Beine<br>Morbus Raynaud
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Palpitazioni<br>Oppressione toracica<br>Gambe pesanti<br>Malattia di Raynaud
                        @endif
                    </p>
                </div>
            </div>

            <!-- Troubles généraux -->
            <div class="col-lg-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="500">
                <div class="action-card primary">
                    <div class="card-header">
                        <img class="img-troubles" src="{{ asset('img/website/damien/troubles/cerveau.png') }}"
                            alt="Troubles généraux">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            <h4 class="my-4">Troubles généraux</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            <h4 class="my-4">General disorders</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            <h4 class="my-4">Allgemeine Beschwerden</h4>
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            <h4 class="my-4">Disturbi generali</h4>
                        @endif
                    </div>
                    <p class="mb-0">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Céphalées<br>Migraines<br>Insomnies<br>Anxiété
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Headaches<br>Migraines<br>Insomnia<br>Anxiety
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Kopfschmerzen<br>Migräne<br>Schlaflosigkeit<br>Angstzustände
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Cefalee<br>Emicranie<br>Insonnia<br>Ansia
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
