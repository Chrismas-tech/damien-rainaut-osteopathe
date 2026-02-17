<!-- About Section -->
<section id="about" class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Titre principal -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            @if (\App\Models\Website::getSettings()->lang === 'fr')
                <h2>
                    Santé & Performance en entreprise
                    <br>
                    Ostéopathie en entreprise : Boostez votre QVT à Nice
                </h2>
            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                <h2>
                    Health & Performance in the Workplace
                    <br>
                    Corporate Osteopathy: Boost Your Quality of Work Life in Nice
                </h2>
            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                <h2>
                    Gesundheit & Leistung im Unternehmen
                    <br>
                    Betriebsosteopathie: Steigern Sie Ihre Lebensqualität am Arbeitsplatz in Nizza
                </h2>
            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                <h2>
                    Salute & Performance in Azienda
                    <br>
                    Osteopatia in azienda: Potenzia la tua QVT a Nizza
                </h2>
            @endif
        </div>

        <!-- Première partie : Intro + Image côte-à-côte -->
        <div class="row align-items-start g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="about-content">
                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                        <p>
                            Le saviez-vous ? <strong>78 %</strong> des arrêts maladie et de l'absentéisme en entreprise sont
                            causés par les <strong>Troubles Musculo-Squelettiques (TMS)</strong>.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                        <p>
                            Did you know? <strong>78 %</strong> of sick leave and absenteeism in companies are
                            caused by <strong>Musculoskeletal Disorders (MSDs)</strong>.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                        <p>
                            Wussten Sie schon? <strong>78 %</strong> der Krankmeldungen und des Absentismus im Unternehmen werden
                            durch <strong>Muskuloskelettale Beschwerden (MSB)</strong> verursacht.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                        <p>
                            Lo sapevi? <strong>Il 78 %</strong> delle assenze per malattia e dell’assenteismo aziendale sono
                            causati dai <strong>Disturbi Muscolo-Scheletrici (DMS)</strong>.
                        </p>
                    @endif

                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                        <p>
                            Lombalgies, cervicalgies, syndromes du canal carpien…
                            <br>
                            Ces pathologies ne sont <strong>pas une
                                fatalité</strong>. Elles sont le résultat d'une mécanique corporelle sous contrainte.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                        <p>
                            Low back pain, neck pain, carpal tunnel syndrome…
                            <br>
                            These conditions are <strong>not inevitable</strong>. They result from a body mechanics under strain.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                        <p>
                            Rückenschmerzen, Nackenschmerzen, Karpaltunnelsyndrom…
                            <br>
                            Diese Beschwerden sind <strong>kein Schicksal</strong>. Sie sind das Ergebnis einer belasteten Körpermechanik.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                        <p>
                            Lombalgie, cervicalgie, sindrome del tunnel carpale…
                            <br>
                            Queste patologie <strong>non sono inevitabili</strong>. Sono il risultato di una meccanica corporea sotto stress.
                        </p>
                    @endif

                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                        <p>
                            Mon rôle ? Intervenir <strong>en amont</strong> grâce à l'ostéopathie pour transformer la santé
                            de vos collaborateurs
                            en un <strong>levier de productivité durable</strong>.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                        <p>
                            My role? Intervene <strong>upstream</strong> through osteopathy to turn your employees’ health
                            into a <strong>sustainable productivity lever</strong>.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                        <p>
                            Meine Rolle? Frühzeitig mit Osteopathie eingreifen, um die Gesundheit Ihrer Mitarbeiter
                            in einen <strong>nachhaltigen Produktivitätshebel</strong> zu verwandeln.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                        <p>
                            Il mio ruolo? Intervenire <strong>a monte</strong> con l’osteopatia per trasformare la salute
                            dei tuoi collaboratori
                            in una <strong>leva di produttività duratura</strong>.
                        </p>
                    @endif

                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                        <p>
                            Ancien Chef d'équipe Sapeur-Pompier, doublement formé en ostéopathie et en Activité Physique
                            Adaptée (STAPS-APA), spécialiste de l'anxiété et de la charge mentale, j'apporte une approche
                            unique alliant rigueur clinique, expertise du mouvement et régulation du stress.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                        <p>
                            Former Firefighter Team Leader, dual-trained in osteopathy and Adapted Physical Activity (STAPS-APA),
                            specialist in anxiety and mental load, I offer a unique approach combining clinical rigor, movement expertise and stress regulation.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                        <p>
                            Ehemaliger Gruppenführer bei der Feuerwehr, doppelt ausgebildet in Osteopathie und Angepasster Körperlicher Aktivität (STAPS-APA),
                            Spezialist für Angst und mentale Belastung – ich bringe einen einzigartigen Ansatz mit klinischer Strenge, Bewegungsexpertise und Stressregulation.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                        <p>
                            Ex Capo Squadra Vigile del Fuoco, doppia formazione in osteopatia e Attività Fisica Adattata (STAPS-APA),
                            specialista in ansia e carico mentale, offro un approccio unico che unisce rigore clinico, expertise nel movimento e regolazione dello stress.
                        </p>
                    @endif
                </div>
            </div>

            <!-- Image (garde ton chemin d'origine, ajuste si besoin) -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="image-wrapper position-relative">
                    <img src="{{ asset('img/website/damien/entreprise-1.webp') }}"
                        class="img-fluid rounded shadow main-image"
                        alt="Ostéopathie en entreprise Nice - Prévention TMS"
                        style="height: 580px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>

        <!-- 🚀 Trois piliers -->
        <div class="row mt-5">
            <div class="col-lg-12">
                @if (\App\Models\Website::getSettings()->lang === 'fr')
                    <h3 class="text-center mb-4">Une Expertise Triple pour un Impact Mesurable</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                    <h3 class="text-center mb-4">Triple Expertise for Measurable Impact</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                    <h3 class="text-center mb-4">Dreifache Expertise für messbaren Impact</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                    <h3 class="text-center mb-4">Tripla Competenza per un Impatto Misurabile</h3>
                @endif

                @if (\App\Models\Website::getSettings()->lang === 'fr')
                    <p class="text-center lead mb-4">
                        Mon intervention repose sur trois piliers uniques qui répondent aux enjeux réels de votre
                        organisation :
                    </p>
                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                    <p class="text-center lead mb-4">
                        My intervention is based on three unique pillars that address the real challenges of your organization:
                    </p>
                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                    <p class="text-center lead mb-4">
                        Mein Einsatz ruht auf drei einzigartigen Säulen, die den realen Herausforderungen Ihrer Organisation gerecht werden:
                    </p>
                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                    <p class="text-center lead mb-4">
                        Il mio intervento si basa su tre pilastri unici che rispondono alle reali esigenze della tua organizzazione:
                    </p>
                @endif

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-primary">
                            <div class="card-body text-center">
                                <i class="bi bi-shield-check text-primary fs-1 mb-3"></i>
                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                    <h4 class="mb-4">Rigueur Clinique & Sécurité (Expertise Terrain)</h4>
                                    <p class="fst-italic">
                                        Ancien Chef d'équipe Sapeur-Pompier, j'apporte une rigueur absolue dans le
                                        diagnostic.
                                        <br>
                                        <br>
                                        Je sais identifier l'urgence et garantir une prise en charge sécurisée,
                                        parfaitement alignée avec vos protocoles de sécurité interne.
                                    </p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                    <h4 class="mb-4">Clinical Rigor & Safety (Field Expertise)</h4>
                                    <p class="fst-italic">
                                        Former Firefighter Team Leader, I bring absolute rigor to diagnosis.
                                        <br>
                                        <br>
                                        I know how to identify emergencies and ensure secure care,
                                        perfectly aligned with your internal safety protocols.
                                    </p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                    <h4 class="mb-4">Klinische Strenge & Sicherheit (Einsatzerfahrung)</h4>
                                    <p class="fst-italic">
                                        Ehemaliger Gruppenführer bei der Feuerwehr, ich bringe absolute Strenge in die Diagnostik.
                                        <br>
                                        <br>
                                        Ich erkenne Notfälle und gewährleiste eine sichere Betreuung,
                                        perfekt abgestimmt auf Ihre internen Sicherheitsprotokolle.
                                    </p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                    <h4 class="mb-4">Rigore Clinico & Sicurezza (Competenza sul Campo)</h4>
                                    <p class="fst-italic">
                                        Ex Capo Squadra Vigile del Fuoco, porto un rigore assoluto nella diagnosi.
                                        <br>
                                        <br>
                                        So identificare le urgenze e garantire una presa in carico sicura,
                                        perfettamente allineata ai vostri protocolli di sicurezza interni.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-primary">
                            <div class="card-body text-center">
                                <i class="bi bi-gear-wide-connected text-primary fs-1 mb-4"></i>
                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                    <h4 class="mb-4">Ingénierie du Mouvement & Ergonomie (STAPS-APA)</h4>
                                    <p class="fst-italic">
                                        Ma formation en Activité Physique Adaptée me permet d'analyser les postes de travail
                                        et de proposer des corrections posturales concrètes.
                                        <br>
                                        <br>
                                        Que vos équipes soient
                                        sédentaires ou sur le terrain, j'adapte le mouvement à leurs contraintes réelles.
                                    </p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                    <h4 class="mb-4">Movement Engineering & Ergonomics (STAPS-APA)</h4>
                                    <p class="fst-italic">
                                        My training in Adapted Physical Activity allows me to analyze workstations
                                        and propose concrete postural corrections.
                                        <br>
                                        <br>
                                        Whether your teams are sedentary or field-based, I adapt movement to their real constraints.
                                    </p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                    <h4 class="mb-4">Bewegungsingenieurwesen & Ergonomie (STAPS-APA)</h4>
                                    <p class="fst-italic">
                                        Meine Ausbildung in Angepasster Körperlicher Aktivität ermöglicht mir die Analyse von Arbeitsplätzen
                                        und konkrete Haltungs-Korrekturen.
                                        <br>
                                        <br>
                                        Ob Ihre Teams sitzend oder im Außeneinsatz arbeiten – ich passe die Bewegung an die realen Zwänge an.
                                    </p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                    <h4 class="mb-4">Ingegneria del Movimento & Ergonomia (STAPS-APA)</h4>
                                    <p class="fst-italic">
                                        La mia formazione in Attività Fisica Adattata mi permette di analizzare le postazioni di lavoro
                                        e proporre correzioni posturali concrete.
                                        <br>
                                        <br>
                                        Che i tuoi team siano sedentari o sul campo, adatto il movimento alle loro reali costrizioni.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-primary">
                            <div class="card-body text-center">
                                <i class="bi bi-yin-yang text-primary fs-1 mb-3"></i>
                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                    <h4 class="mb-3">Régulation de la Charge Mentale (Spécialiste Anxiété)</h4>
                                    <p class="fst-italic">
                                        Le stress est le premier accélérateur de TMS.
                                        <br>
                                        <br>
                                        En travaillant sur la résilience
                                        corps-esprit, je réduis les tensions musculaires chroniques et favorise une
                                        meilleure concentration au travail.
                                    </p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                    <h4 class="mb-3">Mental Load Regulation (Anxiety Specialist)</h4>
                                    <p class="fst-italic">
                                        Stress is the primary accelerator of MSDs.
                                        <br>
                                        <br>
                                        By working on body-mind resilience, I reduce chronic muscular tension and promote better focus at work.
                                    </p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                    <h4 class="mb-3">Regulation der Mentalen Belastung (Angstspezialist)</h4>
                                    <p class="fst-italic">
                                        Stress ist der Hauptbeschleuniger von MSB.
                                        <br>
                                        <br>
                                        Durch Arbeit an der Körper-Geist-Resilienz reduziere ich chronische Muskelspannungen und fördere bessere Konzentration bei der Arbeit.
                                    </p>
                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                    <h4 class="mb-3">Regolazione del Carico Mentale (Specialista Ansia)</h4>
                                    <p class="fst-italic">
                                        Lo stress è il principale acceleratore dei DMS.
                                        <br>
                                        <br>
                                        Lavorando sulla resilienza corpo-mente, riduco le tensioni muscolari croniche e favorisco una migliore concentrazione al lavoro.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <blockquote
                    class="blockquote border-start border-primary border-3 ps-4 mt-5 mb-5 text-center fst-italic">
                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                        <p>"Un collaborateur libéré de ses tensions est un collaborateur 100 % opérationnel. Ne laissez pas
                            les TMS dicter votre calendrier."</p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                        <p>"An employee freed from tension is 100% operational. Don't let MSDs dictate your schedule."</p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                        <p>"Ein Mitarbeiter ohne Spannungen ist zu 100 % einsatzfähig. Lassen Sie MSB nicht Ihren Kalender bestimmen."</p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                        <p>"Un collaboratore liberato dalle tensioni è operativo al 100 %. Non lasciare che i DMS dettino il tuo calendario."</p>
                    @endif
                </blockquote>
            </div>
        </div>

        <!-- 📈 Tableau Pourquoi intégrer l’ostéopathie -->
        <div class="row mt-5 pt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12">
                @if (\App\Models\Website::getSettings()->lang === 'fr')
                    <h3 class="text-center mb-4">📈 Pourquoi intégrer l’ostéopathie dans votre stratégie RH ?</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                    <h3 class="text-center mb-4">📈 Why integrate osteopathy into your HR strategy?</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                    <h3 class="text-center mb-4">📈 Warum Osteopathie in Ihre HR-Strategie integrieren?</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                    <h3 class="text-center mb-4">📈 Perché integrare l’osteopatia nella tua strategia HR?</h3>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                    <th scope="col">Enjeu Entreprise</th>
                                    <th scope="col">Mon Intervention</th>
                                    <th scope="col">Bénéfice Opérationnel</th>
                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                    <th scope="col">Business Challenge</th>
                                    <th scope="col">My Intervention</th>
                                    <th scope="col">Operational Benefit</th>
                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                    <th scope="col">Unternehmensherausforderung</th>
                                    <th scope="col">Mein Einsatz</th>
                                    <th scope="col">Operativer Nutzen</th>
                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                    <th scope="col">Sfida Aziendale</th>
                                    <th scope="col">Il Mio Intervento</th>
                                    <th scope="col">Beneficio Operativo</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="bi bi-calendar-x text-danger fs-4 me-2"></i>
                                    @if (\App\Models\Website::getSettings()->lang === 'fr') Absentéisme @elseif (\App\Models\Website::getSettings()->lang === 'en') Absenteeism @elseif (\App\Models\Website::getSettings()->lang === 'de') Absentismus @elseif (\App\Models\Website::getSettings()->lang === 'it') Assenteismo @endif
                                </td>
                                <td>@if (\App\Models\Website::getSettings()->lang === 'fr') Traitement préventif des 78 % de TMS @elseif (\App\Models\Website::getSettings()->lang === 'en') Preventive treatment of 78% of MSDs @elseif (\App\Models\Website::getSettings()->lang === 'de') Präventive Behandlung der 78 % MSB @elseif (\App\Models\Website::getSettings()->lang === 'it') Trattamento preventivo del 78 % dei DMS @endif</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>
                                    @if (\App\Models\Website::getSettings()->lang === 'fr') Réduction directe des coûts d'arrêt de travail @elseif (\App\Models\Website::getSettings()->lang === 'en') Direct reduction in sick leave costs @elseif (\App\Models\Website::getSettings()->lang === 'de') Direkte Reduktion der Ausfallkosten @elseif (\App\Models\Website::getSettings()->lang === 'it') Riduzione diretta dei costi di assenza @endif
                                </td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-graph-up-arrow text-primary fs-4 me-2"></i>
                                    @if (\App\Models\Website::getSettings()->lang === 'fr') Productivité @elseif (\App\Models\Website::getSettings()->lang === 'en') Productivity @elseif (\App\Models\Website::getSettings()->lang === 'de') Produktivität @elseif (\App\Models\Website::getSettings()->lang === 'it') Produttività @endif
                                </td>
                                <td>@if (\App\Models\Website::getSettings()->lang === 'fr') Optimisation de la posture et de la respiration @elseif (\App\Models\Website::getSettings()->lang === 'en') Posture & breathing optimisation @elseif (\App\Models\Website::getSettings()->lang === 'de') Optimierung von Haltung und Atmung @elseif (\App\Models\Website::getSettings()->lang === 'it') Ottimizzazione di postura e respirazione @endif</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>
                                    @if (\App\Models\Website::getSettings()->lang === 'fr') Collaborateurs plus alertes et moins fatigués physiquement @elseif (\App\Models\Website::getSettings()->lang === 'en') More alert and less physically fatigued employees @elseif (\App\Models\Website::getSettings()->lang === 'de') Aufmerksamere und körperlich weniger ermüdete Mitarbeiter @elseif (\App\Models\Website::getSettings()->lang === 'it') Collaboratori più attenti e meno affaticati fisicamente @endif
                                </td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-people text-primary fs-4 me-2"></i>
                                    @if (\App\Models\Website::getSettings()->lang === 'fr') Marque Employeur @elseif (\App\Models\Website::getSettings()->lang === 'en') Employer Brand @elseif (\App\Models\Website::getSettings()->lang === 'de') Arbeitgebermarke @elseif (\App\Models\Website::getSettings()->lang === 'it') Brand Employer @endif
                                </td>
                                <td>@if (\App\Models\Website::getSettings()->lang === 'fr') Mise en place de journées QVT dédiées @elseif (\App\Models\Website::getSettings()->lang === 'en') Dedicated QWL days implementation @elseif (\App\Models\Website::getSettings()->lang === 'de') Einführung dedizierter QVT-Tage @elseif (\App\Models\Website::getSettings()->lang === 'it') Implementazione di giornate QVT dedicate @endif</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>
                                    @if (\App\Models\Website::getSettings()->lang === 'fr') Fidélisation des talents et climat social positif @elseif (\App\Models\Website::getSettings()->lang === 'en') Talent retention and positive social climate @elseif (\App\Models\Website::getSettings()->lang === 'de') Bindung von Talenten und positives Betriebsklima @elseif (\App\Models\Website::getSettings()->lang === 'it') Fidelizzazione dei talenti e clima sociale positivo @endif
                                </td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-shield-lock text-primary fs-4 me-2"></i>
                                    @if (\App\Models\Website::getSettings()->lang === 'fr') Sécurité (Santé) @elseif (\App\Models\Website::getSettings()->lang === 'en') Safety (Health) @elseif (\App\Models\Website::getSettings()->lang === 'de') Sicherheit (Gesundheit) @elseif (\App\Models\Website::getSettings()->lang === 'it') Sicurezza (Salute) @endif
                                </td>
                                <td>@if (\App\Models\Website::getSettings()->lang === 'fr') Diagnostic d'exclusion et orientation médicale @elseif (\App\Models\Website::getSettings()->lang === 'en') Exclusion diagnosis & medical referral @elseif (\App\Models\Website::getSettings()->lang === 'de') Ausschlussdiagnostik & medizinische Weiterleitung @elseif (\App\Models\Website::getSettings()->lang === 'it') Diagnosi di esclusione e orientamento medico @endif</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>
                                    @if (\App\Models\Website::getSettings()->lang === 'fr') Prévention des accidents et conformité santé @elseif (\App\Models\Website::getSettings()->lang === 'en') Accident prevention & health compliance @elseif (\App\Models\Website::getSettings()->lang === 'de') Unfallprävention & Gesundheitskonformität @elseif (\App\Models\Website::getSettings()->lang === 'it') Prevenzione infortuni e conformità sanitaria @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 🛠️ Formats d'Intervention -->
        <div class="row mt-5 pt-5" data-aos="fade-up">
            <div class="col-12">
                @if (\App\Models\Website::getSettings()->lang === 'fr')
                    <h3 class="text-center mb-5">🛠️ Formats d'Intervention : Flexibilité & Proximité</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                    <h3 class="text-center mb-5">🛠️ Intervention Formats: Flexibility & Proximity</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                    <h3 class="text-center mb-5">🛠️ Einsatzformate: Flexibilität & Nähe</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                    <h3 class="text-center mb-5">🛠️ Formati di Intervento: Flessibilità & Prossimità</h3>
                @endif

                @if (\App\Models\Website::getSettings()->lang === 'fr')
                    <p class="text-center lead mb-5">
                        J'interviens directement dans vos locaux à Nice et dans les Alpes-Maritimes (06)
                        <br>
                        avec des formules
                        adaptées à votre agenda et aux besoins de votre entreprise.
                    </p>
                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                    <p class="text-center lead mb-5">
                        I intervene directly at your premises in Nice and in the Alpes-Maritimes (06)
                        <br>
                        with formulas adapted to your schedule and your company’s needs.
                    </p>
                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                    <p class="text-center lead mb-5">
                        Ich komme direkt in Ihre Räumlichkeiten in Nizza und im Département Alpes-Maritimes (06)
                        <br>
                        mit auf Ihren Zeitplan und die Bedürfnisse Ihres Unternehmens abgestimmten Formaten.
                    </p>
                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                    <p class="text-center lead mb-5">
                        Interveniamo direttamente nei vostri locali a Nizza e nelle Alpi Marittime (06)
                        <br>
                        con formule adattate alla vostra agenda e alle esigenze della vostra azienda.
                    </p>
                @endif

                <div class="row g-5 justify-content-center align-items-stretch">
                    <!-- Carte 1 : Demi-Journée Prévention -->
                    <div class="col-lg-12">
                        <div class="card shadow-lg border-0 overflow-hidden h-100 department-card">
                            <div class="row g-0 h-100">
                                <div class="col-md-5">
                                    <img src="{{ asset('img/website/bg/entreprise-2.webp') }}"
                                        class="img-entreprise-2 img-fluid h-100 object-fit-cover"
                                        alt="Séance ostéopathie demi-journée prévention TMS en entreprise à Nice">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body d-flex flex-column justify-content-between p-4 p-lg-5 h-100">
                                        <h3 class="card-title mb-4 d-flex align-items-center">
                                            <i class="bi bi-clock me-2"></i>
                                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                <span>La Demi-Journée Prévention (4h)</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                <span>Half-Day Prevention (4h)</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                <span>Halbtags-Prävention (4 Std.)</span>
                                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                <span>Mezza Giornata di Prevenzione (4h)</span>
                                            @endif
                                        </h3>

                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <p class="card-text text-muted lead mb-4">
                                                Idéal pour un suivi ciblé ou une petite équipe.
                                                <br>
                                                <br>
                                                Comprend des consultations
                                                individuelles de 30 à 45 minutes sur site pour désamorcer les tensions
                                                aiguës et prévenir les TMS.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <p class="card-text text-muted lead mb-4">
                                                Ideal for targeted follow-up or small teams.
                                                <br>
                                                <br>
                                                Includes individual 30 to 45-minute on-site consultations to defuse acute tensions and prevent MSDs.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <p class="card-text text-muted lead mb-4">
                                                Ideal für gezielte Betreuung oder kleine Teams.
                                                <br>
                                                <br>
                                                Umfasst individuelle 30- bis 45-minütige Vor-Ort-Konsultationen zur Entschärfung akuter Spannungen und Prävention von MSB.
                                            </p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <p class="card-text text-muted lead mb-4">
                                                Ideale per un follow-up mirato o piccoli team.
                                                <br>
                                                <br>
                                                Include consulenze individuali da 30 a 45 minuti in loco per disinnescare tensioni acute e prevenire i DMS.
                                            </p>
                                        @endif

                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <h4 class="mb-3">Autres modalités disponibles :</h4>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <h4 class="mb-3">Other available options:</h4>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <h4 class="mb-3">Weitere verfügbare Modalitäten:</h4>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <h4 class="mb-3">Altre modalità disponibili:</h4>
                                        @endif

                                        <div class="departments-tabs">
                                            <div class="service-item mb-0">
                                                <div class="service-icon"><i class="bi bi-check-circle-fill"></i></div>
                                                <div class="service-content">
                                                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                        <h4>Permanences d'ostéopathie</h4>
                                                        <p>Directement sur site, Installation rapide, sans rien à préparer de votre côté</p>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                        <h4>Osteopathy on-site sessions</h4>
                                                        <p>Directly on premises, quick set-up, nothing to prepare on your side</p>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                        <h4>Osteopathie-Vor-Ort-Sprechstunden</h4>
                                                        <p>Direkt vor Ort, schneller Aufbau, nichts von Ihrer Seite vorzubereiten</p>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                        <h4>Permanenze di osteopatia</h4>
                                                        <p>Direttamente in loco, installazione rapida, nulla da preparare da parte vostra</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="departments-tabs">
                                            <div class="service-item mb-0">
                                                <div class="service-icon"><i class="bi bi-check-circle-fill"></i></div>
                                                <div class="service-content">
                                                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                        <h4>En complète autonomie</h4>
                                                        <p>Table de soins portable et protections draps, hygiéniques incluses.</p>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                        <h4>Fully autonomous</h4>
                                                        <p>Portable treatment table and hygienic sheet protections included.</p>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                        <h4>Vollständig autonom</h4>
                                                        <p>Tragbare Behandlungsliege und hygienische Schutzbezüge inklusive.</p>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                        <h4>In completa autonomia</h4>
                                                        <p>Tavolo da trattamento portatile e protezioni lenzuola igieniche incluse.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="departments-tabs">
                                            <div class="service-item mb-0">
                                                <div class="service-icon"><i class="bi bi-check-circle-fill"></i></div>
                                                <div class="service-content">
                                                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                        <h4>Audits Ergo-Dynamiques</h4>
                                                        <p>Analyse et correction des gestes/postures en situation réelle</p>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                        <h4>Ergo-Dynamic Audits</h4>
                                                        <p>Analysis and correction of gestures/postures in real situations</p>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                        <h4>Ergo-dynamische Audits</h4>
                                                        <p>Analyse und Korrektur von Bewegungen/Haltungen in realen Situationen</p>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                        <h4>Audit Ergo-Dinamici</h4>
                                                        <p>Analisi e correzione di gesti/posture in situazione reale</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <p class="mt-4 lead">Solutions "clés en main" directement dans vos locaux à Nice et 06.</p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <p class="mt-4 lead">"Turnkey" solutions directly at your premises in Nice and 06.</p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <p class="mt-4 lead">"Schlüsselfertige" Lösungen direkt in Ihren Räumen in Nizza und 06.</p>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <p class="mt-4 lead">Soluzioni "chiavi in mano" direttamente nei vostri locali a Nizza e 06.</p>
                                        @endif

                                        <div class="d-flex justify-content-center mt-4">
                                            <p class="text-center text-lg-start">
                                                <a target="_blank" href="{{ route('website.contact') }}"
                                                    class="btn-custom-outline">
                                                    <i class="bi bi-arrow-right"></i>
                                                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                        <span class="ms-1">Contactez-moi pour un devis gratuit</span>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                        <span class="ms-1">Contact me for a free quote</span>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                        <span class="ms-1">Kontaktieren Sie mich für ein kostenloses Angebot</span>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                        <span class="ms-1">Contattami per un preventivo gratuito</span>
                                                    @endif
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End About Section -->
