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
                                <p class="mb-0">Ballonnement<br>Aérophagie<br>Digestion lente<br>Reflux
                                    gastro-œsophagien<br>(hernie hiatale)</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Bloating<br>Aerophagia<br>Slow digestion<br>Gastroesophageal
                                    reflux<br>(hiatal hernia)</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Blähung<br>Aerophagie<br>Langsame Verdauung<br>Gastroösophagealer
                                    Reflux<br>(Hiatushernie)</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Gonfiore<br>Aerofagia<br>Digestione lenta<br>Reflusso
                                    gastroesofageo<br>(ernia iatale)</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Hinchazón<br>Aerofagia<br>Digestión lenta<br>Reflujo
                                    gastroesofágico<br>(hernia hiatal)</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Colopathie fonctionnelle<br>(constipation, diarrhée)<br>Trouble
                                    hépatobiliaire<br>Hémorroïde</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Functional colopathy<br>(constipation, diarrhea)<br>Hepatobiliary
                                    disorder<br>Hemorrhoid</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Funktionelle Kolopathie<br>(Verstopfung, Durchfall)<br>Hepatobiliäre
                                    Störung<br>Hämorrhöide</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Colopatia funzionale<br>(stitichezza, diarrea)<br>Disturbo
                                    epatobiliare<br>Emorroide</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Colopatía funcional<br>(estreñimiento, diarrea)<br>Trastorno
                                    hepatobiliar<br>Hemorroide</p>
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
                                <p class="mb-0">
                                    Névralgie d’Arnold<br>
                                    Névralgie cervico-brachiale<br>
                                    Torticolis<br>
                                    Cervicalgie<br>
                                    Dorsalgie<br>
                                    Sciatique
                                </p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">
                                    Arnold's neuralgia<br>
                                    Cervicobrachial neuralgia<br>
                                    Torticollis<br>
                                    Cervicalgia<br>
                                    Dorsalgia<br>
                                    Sciatica
                                </p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">
                                    Arnold-Neuralgie<br>
                                    Zervikobrachialneuralgie<br>
                                    Torticollis<br>
                                    Zervikalgie<br>
                                    Dorsalgie<br>
                                    Ischialgie
                                </p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">
                                    Nevralgia di Arnold<br>
                                    Nevralgia cervico-brachiale<br>
                                    Torticollo<br>
                                    Cervicalgia<br>
                                    Dorsalgia<br>
                                    Sciatalgia
                                </p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">
                                    Neuralgia de Arnold<br>
                                    Neuralgia cervicobraquial<br>
                                    Tortícolis<br>
                                    Cervicalgia<br>
                                    Dorsalgia<br>
                                    Ciática
                                </p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Lumbago<br>Lombalgie
                                    chronique<br>Cruralgie<br>Sciatalgie<br>Pubalgie<br>Douleur intercostale</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Lumbago<br>Chronic low back
                                    pain<br>Cruralgia<br>Sciatica<br>Pubalgia<br>Intercostal pain</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Lumbago<br>Chronische
                                    Lumbalgie<br>Cruralgie<br>Ischialgie<br>Pubalgie<br>Interkostalschmerz</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Lombago<br>Lombalgia
                                    cronica<br>Cruralgia<br>Sciatalgia<br>Pubalgia<br>Dolore intercostale</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Lumbago<br>Lumbalgia
                                    crónica<br>Cruralgia<br>Ciática<br>Pubalgia<br>Dolor intercostal</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Troubles locomoteurs -->
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
                                <p class="mb-0">Entorse<br>Foulure<br>Tendinite (tennis et golf-elbow)<br>Canal
                                    carpien<br>Canal tarsien</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Sprain<br>Strain<br>Tendinitis (tennis and golfer's elbow)<br>Carpal
                                    tunnel<br>Tarsal tunnel</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Verstauchung<br>Zerrung<br>Tendinitis (Tennis- und
                                    Golferellenbogen)<br>Karpaltunnel<br>Tarsaltunnel</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Distorsione<br>Stiramento<br>Tendinite (gomito del tennista e del
                                    golfista)<br>Tunnel carpale<br>Tunnel tarsale</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Esguince<br>Distensión<br>Tendinitis (codo de tenista y
                                    golfista)<br>Túnel carpiano<br>Túnel tarsiano</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Douleurs articulaires<br>(épaules, hanches, genoux…)<br>Épine
                                    calcanéenne<br>Algodystrophie</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Joint pains<br>(shoulders, hips, knees…)<br>Calcaneal spurs<br>Complex
                                    regional pain syndrome (CRPS)</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Gelenkschmerzen<br>(Schultern, Hüften,
                                    Knie…)<br>Fersensporn<br>Algodystrophie (CRPS)</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Dolori articolari<br>(spalle, anche, ginocchia…)<br>Spina
                                    calcaneare<br>Algodistrofia</p>
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
                                <p class="mb-0">Sinusite<br>Rhinite<br>Rhinopharyngite</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Sinusitis<br>Rhinitis<br>Rhinopharyngitis</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Sinusitis<br>Rhinitis<br>Rhinopharyngitis</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Sinusite<br>Rinite<br>Rinofaringite</p>
                            @elseif (session('locale') === 'es')
                                <p class="mb-0">Sinusitis<br>Rinitis<br>Rinofaringitis</p>
                            @endif
                        </div>
                        <div class="col-6">
                            @if (session('locale') === 'fr')
                                <p class="mb-0">Otite séreuse<br>Vertige paroxystique bénin</p>
                            @elseif (session('locale') === 'en')
                                <p class="mb-0">Serous otitis media<br>Benign paroxysmal positional vertigo</p>
                            @elseif (session('locale') === 'de')
                                <p class="mb-0">Seröse Otitis media<br>Gutartiger paroxysmaler Lagerungsschwindel</p>
                            @elseif (session('locale') === 'it')
                                <p class="mb-0">Otite sierosa<br>Vertigine parossistica benigna</p>
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
                            Bronchopneumopathie chronique obstructive<br>Trachéite<br>Bronchite<br>Asthme
                        @elseif (session('locale') === 'en')
                            Chronic obstructive pulmonary disease<br>Tracheitis<br>Bronchitis<br>Asthma
                        @elseif (session('locale') === 'de')
                            Chronisch obstruktive Lungenerkrankung<br>Tracheitis<br>Bronchitis<br>Asthma
                        @elseif (session('locale') === 'it')
                            Broncopneumopatia cronica ostruttiva<br>Tracheite<br>Bronchite<br>Asma
                        @elseif (session('locale') === 'es')
                            Enfermedad pulmonar obstructiva crónica<br>Traqueítis<br>Bronquitis<br>Asma
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
                            Cystite<br>Trouble de la prostate<br>Incontinence<br>Énurésie
                        @elseif (session('locale') === 'en')
                            Cystitis<br>Prostate disorder<br>Incontinence<br>Enuresis
                        @elseif (session('locale') === 'de')
                            Zystitis<br>Prostatabeschwerde<br>Inkontinenz<br>Enuresis
                        @elseif (session('locale') === 'it')
                            Cistite<br>Disturbo prostatico<br>Incontinenza<br>Enuresi
                        @elseif (session('locale') === 'es')
                            Cistitis<br>Trastorno de próstata<br>Incontinencia<br>Enuresis
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
                            Normalisation du cycle<br>Règle douloureuse<br>Trouble de la ménopause<br>Endométriose
                        @elseif (session('locale') === 'en')
                            Cycle normalization<br>Painful period<br>Menopause disorder<br>Endometriosis
                        @elseif (session('locale') === 'de')
                            Zyklusnormalisierung<br>Schmerzhafte Regelblutung<br>Wechseljahresbeschwerde<br>Endometriose
                        @elseif (session('locale') === 'it')
                            Normalizzazione del ciclo<br>Regola dolorosa<br>Disturbo della menopausa<br>Endometriosi
                        @elseif (session('locale') === 'es')
                            Normalización del ciclo<br>Regla dolorosa<br>Trastorno de la menopausia<br>Endometriosis
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
                            Palpitation<br>Oppression thoracique<br>Jambe lourde<br>Maladie de Raynaud
                        @elseif (session('locale') === 'en')
                            Palpitation<br>Chest tightness<br>Heavy leg<br>Raynaud's disease
                        @elseif (session('locale') === 'de')
                            Herzklopfen<br>Thorakale Beklemmung<br>Schwere Beine<br>Morbus Raynaud
                        @elseif (session('locale') === 'it')
                            Palpitazione<br>Oppressione toracica<br>Gamba pesante<br>Malattia di Raynaud
                        @elseif (session('locale') === 'es')
                            Palpitación<br>Opresión torácica<br>Pierna pesada<br>Enfermedad de Raynaud
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
                            Céphalée<br>Migraine<br>Insomnie<br>Anxiété<br>Stress<br>Fatigue
                        @elseif (session('locale') === 'en')
                            Headache<br>Migraine<br>Insomnia<br>Anxiety<br>Stress<br>Fatigue
                        @elseif (session('locale') === 'de')
                            Kopfschmerz<br>Migräne<br>Schlaflosigkeit<br>Angstzustand<br>Stress<br>Müdigkeit
                        @elseif (session('locale') === 'it')
                            Cefalea<br>Emicrania<br>Insonnia<br>Ansia<br>Stress<br>Fatica
                        @elseif (session('locale') === 'es')
                            Cefalea<br>Migraña<br>Insomnio<br>Ansiedad<br>Estrés<br>Fatiga
                        @endif
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
