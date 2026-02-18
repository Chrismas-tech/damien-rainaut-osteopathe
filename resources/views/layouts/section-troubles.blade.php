<!-- Troubles et Spécialisations -->
<section class="service-details-2 section">
    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        @if (session('locale') === 'fr')
            <h2>Je prends en charge tous les troubles ci-dessous</h2>
        @elseif (session('locale') === 'en')
            <h2>I treat all the conditions listed below</h2>
        @elseif (session('locale') === 'de')
            <h2>Ich behandle alle unten aufgeführten Beschwerden</h2>
        @elseif (session('locale') === 'it')
            <h2>Tratto tutti i disturbi elencati di seguito</h2>
        @elseif (session('locale') === 'es')
            <h2>Me encargo de todos los trastornos que se indican a continuación</h2>
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
                        @if (session('locale') === 'fr')
                            <h4 class="my-4">Troubles digestifs</h4>
                        @elseif (session('locale') === 'en')
                            <h4 class="my-4">Digestive disorders</h4>
                        @elseif (session('locale') === 'de')
                            <h4 class="my-4">Verdauungsstörungen</h4>
                        @elseif (session('locale') === 'it')
                            <h4 class="my-4">Disturbi digestivi</h4>
                        @elseif (session('locale') === 'es')
                            <h4 class="my-4">Trastornos digestivos</h4>
                        @endif
                    </div>
                    <div class="row gy-1">
                        <div class="col-6 border-end">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Ballonnements<br>Aérophagie<br>Digestion lente<br>Reflux
                                    gastro-œsophagiens<br>(hernies hiatales)</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Bloating<br>Aerophagia<br>Slow digestion<br>Gastroesophageal
                                    reflux<br>(hiatal hernias)</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Blähungen<br>Aerophagie<br>Langsame Verdauung<br>Gastroösophagealer
                                    Reflux<br>(Hiatushernien)</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Gonfiore<br>Aerofagia<br>Digestione lenta<br>Reflusso
                                    gastroesofageo<br>(ernie iatali)</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Hinchazón<br>Aerofagia<br>Digestión lenta<br>Reflujo
                                    gastroesofágico<br>(hernias hiatales)</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Colopathies fonctionnelles<br>(constipations, diarrhées)<br>Troubles
                                    hépatobiliaires<br>Hémorroïdes</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Functional colopathies<br>(constipation, diarrhea)<br>Hepatobiliary
                                    disorders<br>Hemorrhoids</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Funktionelle Kolopathien<br>(Verstopfung, Durchfall)<br>Hepatobiliäre
                                    Störungen<br>Hämorrhoiden</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Colopatie funzionali<br>(stitichezza, diarrea)<br>Disturbi
                                    epatobiliari<br>Emorroidi</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Colopatías funcionales<br>(estreñimiento, diarrea)<br>Trastornos
                                    hepatobiliares<br>Hemorroides</p>
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
                        @if (session('locale') === 'fr')
                            <h4 class="my-4">Troubles vertébraux</h4>
                        @elseif (session('locale') === 'en')
                            <h4 class="my-4">Vertebral disorders</h4>
                        @elseif (session('locale') === 'de')
                            <h4 class="my-4">Wirbelsäulenbeschwerden</h4>
                        @elseif (session('locale') === 'it')
                            <h4 class="my-4">Disturbi vertebrali</h4>
                        @elseif (session('locale') === 'es')
                            <h4 class="my-4">Trastornos vertebrales</h4>
                        @endif
                    </div>
                    <div class="row gy-1">
                        <div class="col-6 border-end">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Névralgies d’Arnold<br>Névralgies
                                    cervico-brachiales<br>Torticolis<br>Cervicalgies<br>Dorsalgies</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Arnold's neuralgia<br>Cervicobrachial
                                    neuralgia<br>Torticollis<br>Cervicalgia<br>Dorsalgia</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">
                                    Arnold-Neuralgie<br>Zervikobrachialneuralgie<br>Torticollis<br>Zervikalgie<br>Dorsalgie
                                </p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Nevralgia di Arnold<br>Nevralgia
                                    cervico-brachiale<br>Torticollo<br>Cervicalgia<br>Dorsalgia</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Neuralgia de Arnold<br>Neuralgia
                                    cervicobraquial<br>Tortícolis<br>Cervicalgia<br>Dorsalgia</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Lumbagos<br>Lombalgies
                                    chroniques<br>Cruralgies<br>Sciatalgies<br>Pubalgies<br>Douleurs intercostales</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Lumbago<br>Chronic low back
                                    pain<br>Cruralgia<br>Sciatica<br>Pubalgia<br>Intercostal pain</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Lumbago<br>Chronische
                                    Lumbalgie<br>Cruralgie<br>Ischialgie<br>Pubalgie<br>Interkostalschmerzen</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Lombago<br>Lombalgia
                                    cronica<br>Cruralgia<br>Sciatalgia<br>Pubalgia<br>Dolori intercostali</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Lumbago<br>Lumbalgia
                                    crónica<br>Cruralgia<br>Ciática<br>Pubalgia<br>Dolores intercostales</p>
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
                        @if (session('locale') === 'fr')
                            <h4 class="my-4">Troubles locomoteurs</h4>
                        @elseif (session('locale') === 'en')
                            <h4 class="my-4">Locomotor disorders</h4>
                        @elseif (session('locale') === 'de')
                            <h4 class="my-4">Bewegungsapparat-Störungen</h4>
                        @elseif (session('locale') === 'it')
                            <h4 class="my-4">Disturbi locomotori</h4>
                        @elseif (session('locale') === 'es')
                            <h4 class="my-4">Trastornos locomotores</h4>
                        @endif
                    </div>
                    <div class="row gy-1">
                        <div class="col-6 border-end">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Entorses<br>Foulures<br>Tendinites (tennis et golf-elbows)<br>Canal
                                    carpien<br>Canal tarsien</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Sprains<br>Strains<br>Tendinitis (tennis and golfer's elbow)<br>Carpal
                                    tunnel<br>Tarsal tunnel</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Verstauchungen<br>Zerrungen<br>Tendinitiden (Tennis- und
                                    Golferellenbogen)<br>Karpaltunnel<br>Tarsaltunnel</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Distorsioni<br>Stiramenti<br>Tendiniti (gomito del tennista e del
                                    golfista)<br>Tunnel carpale<br>Tunnel tarsale</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Esguinces<br>Distensiones<br>Tendinitis (codo de tenista y
                                    golfista)<br>Túnel carpiano<br>Túnel tarsiano</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Douleurs articulaires<br>(épaules, hanches, genoux…)<br>Épines
                                    calcanéennes<br>Algodystrophies</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Joint pain<br>(shoulders, hips, knees…)<br>Calcaneal spurs<br>Complex
                                    regional pain syndrome (CRPS)</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Gelenkschmerzen<br>(Schultern, Hüften,
                                    Knie…)<br>Fersensporn<br>Algodystrophie (CRPS)</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Dolori articolari<br>(spalle, anche, ginocchia…)<br>Spina
                                    calcaneare<br>Algodistrofie</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Dolores articulares<br>(hombros, caderas, rodillas…)<br>Espolón
                                    calcáneo<br>Algodistrofia</p>
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
                        @if (session('locale') === 'fr')
                            <h4 class="my-4">Troubles O.R.L</h4>
                        @elseif (session('locale') === 'en')
                            <h4 class="my-4">ENT disorders</h4>
                        @elseif (session('locale') === 'de')
                            <h4 class="my-4">HNO-Beschwerden</h4>
                        @elseif (session('locale') === 'it')
                            <h4 class="my-4">Disturbi ORL</h4>
                        @elseif (session('locale') === 'es')
                            <h4 class="my-4">Trastornos ORL</h4>
                        @endif
                    </div>
                    <div class="row gy-1">
                        <div class="col-6 border-end">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Sinusites<br>Rhinites<br>Rhinopharyngites</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Sinusitis<br>Rhinitis<br>Rhinopharyngitis</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Sinusitis<br>Rhinitis<br>Rhinopharyngitis</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Sinusiti<br>Riniti<br>Rinofaringiti</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Sinusitis<br>Rinitis<br>Rinofaringitis</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Otites séreuses<br>Vertiges paroxystiques bénins</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Serous otitis media<br>Benign paroxysmal positional vertigo</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Seröse Otitis media<br>Gutartiger paroxysmaler Lagerungsschwindel</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Otiti sierose<br>Vertigini parossistiche benigne</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Otitis serosa<br>Vértigo posicional paroxístico benigno</p>
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
                        @if (session('locale') === 'fr')
                            <h4 class="my-4">Troubles respiratoires</h4>
                        @elseif (session('locale') === 'en')
                            <h4 class="my-4">Respiratory disorders</h4>
                        @elseif (session('locale') === 'de')
                            <h4 class="my-4">Atemwegsbeschwerden</h4>
                        @elseif (session('locale') === 'it')
                            <h4 class="my-4">Disturbi respiratori</h4>
                        @elseif (session('locale') === 'es')
                            <h4 class="my-4">Trastornos respiratorios</h4>
                        @endif
                    </div>
                    <p class="mb-0">
                        @if (session('locale') === 'fr')
                            Trachéites<br>Bronchites<br>Asthme
                        @elseif (session('locale') === 'en')
                            Tracheitis<br>Bronchitis<br>Asthma
                        @elseif (session('locale') === 'de')
                            Tracheitis<br>Bronchitis<br>Asthma
                        @elseif (session('locale') === 'it')
                            Tracheiti<br>Bronchiti<br>Asma
                        @elseif (session('locale') === 'es')
                            Traqueítis<br>Bronquitis<br>Asma
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
                        @if (session('locale') === 'fr')
                            <h4 class="my-4">Troubles urinaires</h4>
                        @elseif (session('locale') === 'en')
                            <h4 class="my-4">Urinary disorders</h4>
                        @elseif (session('locale') === 'de')
                            <h4 class="my-4">Harnwegsbeschwerden</h4>
                        @elseif (session('locale') === 'it')
                            <h4 class="my-4">Disturbi urinari</h4>
                        @elseif (session('locale') === 'es')
                            <h4 class="my-4">Trastornos urinarios</h4>
                        @endif
                    </div>
                    <p class="mb-0">
                        @if (session('locale') === 'fr')
                            Cystites<br>Troubles de la prostate<br>Incontinences<br>Énurésie
                        @elseif (session('locale') === 'en')
                            Cystitis<br>Prostate disorders<br>Incontinence<br>Enuresis
                        @elseif (session('locale') === 'de')
                            Zystitis<br>Prostatabeschwerden<br>Inkontinenz<br>Enuresis
                        @elseif (session('locale') === 'it')
                            Cistiti<br>Disturbi prostatici<br>Incontinenza<br>Enuresi
                        @elseif (session('locale') === 'es')
                            Cistitis<br>Trastornos de próstata<br>Incontinencia<br>Enuresis
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
                        @if (session('locale') === 'fr')
                            <h4 class="my-4">Troubles gynécologiques</h4>
                        @elseif (session('locale') === 'en')
                            <h4 class="my-4">Gynecological disorders</h4>
                        @elseif (session('locale') === 'de')
                            <h4 class="my-4">Gynäkologische Beschwerden</h4>
                        @elseif (session('locale') === 'it')
                            <h4 class="my-4">Disturbi ginecologici</h4>
                        @elseif (session('locale') === 'es')
                            <h4 class="my-4">Trastornos ginecológicos</h4>
                        @endif
                    </div>
                    <p class="mb-0">
                        @if (session('locale') === 'fr')
                            Normalisation du cycle<br>Règles douloureuses<br>Infertilité<br>Troubles de la ménopause
                        @elseif (session('locale') === 'en')
                            Cycle normalization<br>Painful periods<br>Infertility<br>Menopause disorders
                        @elseif (session('locale') === 'de')
                            Zyklusnormalisierung<br>Schmerzhafte
                            Regelblutung<br>Unfruchtbarkeit<br>Wechseljahresbeschwerden
                        @elseif (session('locale') === 'it')
                            Normalizzazione del ciclo<br>Regole dolorose<br>Infertilità<br>Disturbi della menopausa
                        @elseif (session('locale') === 'es')
                            Normalización del ciclo<br>Reglas dolorosas<br>Infertilidad<br>Trastornos de la menopausia
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
                        @if (session('locale') === 'fr')
                            <h4 class="my-4">Troubles circulatoires</h4>
                        @elseif (session('locale') === 'en')
                            <h4 class="my-4">Circulatory disorders</h4>
                        @elseif (session('locale') === 'de')
                            <h4 class="my-4">Kreislaufstörungen</h4>
                        @elseif (session('locale') === 'it')
                            <h4 class="my-4">Disturbi circolatori</h4>
                        @elseif (session('locale') === 'es')
                            <h4 class="my-4">Trastornos circulatorios</h4>
                        @endif
                    </div>
                    <p class="mb-0">
                        @if (session('locale') === 'fr')
                            Palpitations<br>Oppressions thoraciques<br>Jambes lourdes<br>Maladie de Raynaud
                        @elseif (session('locale') === 'en')
                            Palpitations<br>Chest tightness<br>Heavy legs<br>Raynaud's disease
                        @elseif (session('locale') === 'de')
                            Herzklopfen<br>Thorakale Beklemmung<br>Schwere Beine<br>Morbus Raynaud
                        @elseif (session('locale') === 'it')
                            Palpitazioni<br>Oppressione toracica<br>Gambe pesanti<br>Malattia di Raynaud
                        @elseif (session('locale') === 'es')
                            Palpitaciones<br>Opresión torácica<br>Piernas pesadas<br>Enfermedad de Raynaud
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
                        @if (session('locale') === 'fr')
                            <h4 class="my-4">Troubles généraux</h4>
                        @elseif (session('locale') === 'en')
                            <h4 class="my-4">General disorders</h4>
                        @elseif (session('locale') === 'de')
                            <h4 class="my-4">Allgemeine Beschwerden</h4>
                        @elseif (session('locale') === 'it')
                            <h4 class="my-4">Disturbi generali</h4>
                        @elseif (session('locale') === 'es')
                            <h4 class="my-4">Trastornos generales</h4>
                        @endif
                    </div>
                    <p class="mb-0">
                        @if (session('locale') === 'fr')
                            Céphalées<br>Migraines<br>Insomnies<br>Anxiété
                        @elseif (session('locale') === 'en')
                            Headaches<br>Migraines<br>Insomnia<br>Anxiety
                        @elseif (session('locale') === 'de')
                            Kopfschmerzen<br>Migräne<br>Schlaflosigkeit<br>Angstzustände
                        @elseif (session('locale') === 'it')
                            Cefalee<br>Emicranie<br>Insonnia<br>Ansia
                        @elseif (session('locale') === 'es')
                            Cefaleas<br>Migrañas<br>Insomnio<br>Ansiedad
                        @endif
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
