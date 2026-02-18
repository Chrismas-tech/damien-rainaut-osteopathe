<!-- About Section -->
<section id="about" class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Titre principal -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            @if (session('locale') === 'fr')
                <h2>
                    Santé & Performance en entreprise
                    <br>
                    Ostéopathie en entreprise : Boostez votre QVT à Nice
                </h2>
            @elseif (session('locale') === 'en')
                <h2>
                    Health & Performance in the Workplace
                    <br>
                    Corporate Osteopathy: Boost Your Quality of Work Life in Nice
                </h2>
            @elseif (session('locale') === 'de')
                <h2>
                    Gesundheit & Leistung im Unternehmen
                    <br>
                    Betriebsosteopathie: Steigern Sie Ihre Lebensqualität am Arbeitsplatz in Nizza
                </h2>
            @elseif (session('locale') === 'it')
                <h2>
                    Salute & Performance in Azienda
                    <br>
                    Osteopatia in azienda: Potenzia la tua QVT a Nizza
                </h2>
            @elseif (session('locale') === 'es')
                <h2>
                    Salud y Rendimiento en la Empresa
                    <br>
                    Osteopatía en empresa: Potencia tu Calidad de Vida Laboral en Niza
                </h2>
            @endif
        </div>

        <!-- Première partie : Intro + Image côte-à-côte -->
        <div class="row align-items-start g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="about-content">
                    @if (session('locale') === 'fr')
                        <p>
                            Le saviez-vous ? <strong>78 %</strong> des arrêts maladie et de l'absentéisme en entreprise sont
                            causés par les <strong>Troubles Musculo-Squelettiques (TMS)</strong>.
                        </p>
                    @elseif (session('locale') === 'en')
                        <p>
                            Did you know? <strong>78 %</strong> of sick leave and absenteeism in companies are
                            caused by <strong>Musculoskeletal Disorders (MSDs)</strong>.
                        </p>
                    @elseif (session('locale') === 'de')
                        <p>
                            Wussten Sie schon? <strong>78 %</strong> der Krankmeldungen und des Absentismus im Unternehmen werden
                            durch <strong>Muskuloskelettale Beschwerden (MSB)</strong> verursacht.
                        </p>
                    @elseif (session('locale') === 'it')
                        <p>
                            Lo sapevi? <strong>Il 78 %</strong> delle assenze per malattia e dell’assenteismo aziendale sono
                            causati dai <strong>Disturbi Muscolo-Scheletrici (DMS)</strong>.
                        </p>
                    @elseif (session('locale') === 'es')
                        <p>
                            ¿Lo sabías? <strong>El 78 %</strong> de las bajas por enfermedad y del absentismo en las empresas
                            son causadas por los <strong>Trastornos Musculoesqueléticos (TME)</strong>.
                        </p>
                    @endif

                    @if (session('locale') === 'fr')
                        <p>
                            Lombalgies, cervicalgies, syndromes du canal carpien…
                            <br>
                            Ces pathologies ne sont <strong>pas une fatalité</strong>. Elles sont le résultat d'une mécanique corporelle sous contrainte.
                        </p>
                    @elseif (session('locale') === 'en')
                        <p>
                            Low back pain, neck pain, carpal tunnel syndrome…
                            <br>
                            These conditions are <strong>not inevitable</strong>. They result from a body mechanics under strain.
                        </p>
                    @elseif (session('locale') === 'de')
                        <p>
                            Rückenschmerzen, Nackenschmerzen, Karpaltunnelsyndrom…
                            <br>
                            Diese Beschwerden sind <strong>kein Schicksal</strong>. Sie sind das Ergebnis einer belasteten Körpermechanik.
                        </p>
                    @elseif (session('locale') === 'it')
                        <p>
                            Lombalgie, cervicalgie, sindrome del tunnel carpale…
                            <br>
                            Queste patologie <strong>non sono inevitabili</strong>. Sono il risultato di una meccanica corporea sotto stress.
                        </p>
                    @elseif (session('locale') === 'es')
                        <p>
                            Lumbalgias, cervicalgias, síndrome del túnel carpiano…
                            <br>
                            Estas patologías <strong>no son inevitables</strong>. Son el resultado de una mecánica corporal bajo tensión.
                        </p>
                    @endif

                    @if (session('locale') === 'fr')
                        <p>
                            Mon rôle ? Intervenir <strong>en amont</strong> grâce à l'ostéopathie pour transformer la santé
                            de vos collaborateurs en un <strong>levier de productivité durable</strong>.
                        </p>
                    @elseif (session('locale') === 'en')
                        <p>
                            My role? Intervene <strong>upstream</strong> through osteopathy to turn your employees’ health
                            into a <strong>sustainable productivity lever</strong>.
                        </p>
                    @elseif (session('locale') === 'de')
                        <p>
                            Meine Rolle? Frühzeitig mit Osteopathie eingreifen, um die Gesundheit Ihrer Mitarbeiter
                            in einen <strong>nachhaltigen Produktivitätshebel</strong> zu verwandeln.
                        </p>
                    @elseif (session('locale') === 'it')
                        <p>
                            Il mio ruolo? Intervenire <strong>a monte</strong> con l’osteopatia per trasformare la salute
                            dei tuoi collaboratori in una <strong>leva di produttività duratura</strong>.
                        </p>
                    @elseif (session('locale') === 'es')
                        <p>
                            ¿Mi rol? Intervenir <strong>de forma preventiva</strong> mediante la osteopatía para transformar la salud
                            de tus colaboradores en una <strong>palanca de productividad sostenible</strong>.
                        </p>
                    @endif

                    @if (session('locale') === 'fr')
                        <p>
                            Ancien Chef d'équipe Sapeur-Pompier, doublement formé en ostéopathie et en Activité Physique
                            Adaptée (STAPS-APA), spécialiste de l'anxiété et de la charge mentale, j'apporte une approche
                            unique alliant rigueur clinique, expertise du mouvement et régulation du stress.
                        </p>
                    @elseif (session('locale') === 'en')
                        <p>
                            Former Firefighter Team Leader, dual-trained in osteopathy and Adapted Physical Activity (STAPS-APA),
                            specialist in anxiety and mental load, I offer a unique approach combining clinical rigor, movement expertise and stress regulation.
                        </p>
                    @elseif (session('locale') === 'de')
                        <p>
                            Ehemaliger Gruppenführer bei der Feuerwehr, doppelt ausgebildet in Osteopathie und Angepasster Körperlicher Aktivität (STAPS-APA),
                            Spezialist für Angst und mentale Belastung – ich bringe einen einzigartigen Ansatz mit klinischer Strenge, Bewegungsexpertise und Stressregulation.
                        </p>
                    @elseif (session('locale') === 'it')
                        <p>
                            Ex Capo Squadra Vigile del Fuoco, doppia formazione in osteopatia e Attività Fisica Adattata (STAPS-APA),
                            specialista in ansia e carico mentale, offro un approccio unico che unisce rigore clinico, expertise nel movimento e regolazione dello stress.
                        </p>
                    @elseif (session('locale') === 'es')
                        <p>
                            Ex Jefe de Equipo Bombero, doble formación en osteopatía y Actividad Física Adaptada (STAPS-APA),
                            especialista en ansiedad y carga mental, ofrezco un enfoque único que combina rigor clínico, expertise en movimiento y regulación del estrés.
                        </p>
                    @endif
                </div>
            </div>

            <!-- Image -->
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
                @if (session('locale') === 'fr')
                    <h3 class="text-center mb-4">Une Expertise Triple pour un Impact Mesurable</h3>
                @elseif (session('locale') === 'en')
                    <h3 class="text-center mb-4">Triple Expertise for Measurable Impact</h3>
                @elseif (session('locale') === 'de')
                    <h3 class="text-center mb-4">Dreifache Expertise für messbaren Impact</h3>
                @elseif (session('locale') === 'it')
                    <h3 class="text-center mb-4">Tripla Competenza per un Impatto Misurabile</h3>
                @elseif (session('locale') === 'es')
                    <h3 class="text-center mb-4">Triple Expertise para un Impacto Medible</h3>
                @endif

                @if (session('locale') === 'fr')
                    <p class="text-center lead mb-4">
                        Mon intervention repose sur trois piliers uniques qui répondent aux enjeux réels de votre organisation :
                    </p>
                @elseif (session('locale') === 'en')
                    <p class="text-center lead mb-4">
                        My intervention is based on three unique pillars that address the real challenges of your organization:
                    </p>
                @elseif (session('locale') === 'de')
                    <p class="text-center lead mb-4">
                        Mein Einsatz ruht auf drei einzigartigen Säulen, die den realen Herausforderungen Ihrer Organisation gerecht werden:
                    </p>
                @elseif (session('locale') === 'it')
                    <p class="text-center lead mb-4">
                        Il mio intervento si basa su tre pilastri unici che rispondono alle reali esigenze della tua organizzazione:
                    </p>
                @elseif (session('locale') === 'es')
                    <p class="text-center lead mb-4">
                        Mi intervención se basa en tres pilares únicos que responden a los desafíos reales de tu organización:
                    </p>
                @endif

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-primary">
                            <div class="card-body text-center">
                                <i class="bi bi-shield-check text-primary fs-1 mb-3"></i>
                                @if (session('locale') === 'fr')
                                    <h4 class="mb-4">Rigueur Clinique & Sécurité (Expertise Terrain)</h4>
                                    <p class="fst-italic">
                                        Ancien Chef d'équipe Sapeur-Pompier, j'apporte une rigueur absolue dans le diagnostic.
                                        <br><br>
                                        Je sais identifier l'urgence et garantir une prise en charge sécurisée, parfaitement alignée avec vos protocoles de sécurité interne.
                                    </p>
                                @elseif (session('locale') === 'en')
                                    <h4 class="mb-4">Clinical Rigor & Safety (Field Expertise)</h4>
                                    <p class="fst-italic">
                                        Former Firefighter Team Leader, I bring absolute rigor to diagnosis.
                                        <br><br>
                                        I know how to identify emergencies and ensure secure care, perfectly aligned with your internal safety protocols.
                                    </p>
                                @elseif (session('locale') === 'de')
                                    <h4 class="mb-4">Klinische Strenge & Sicherheit (Einsatzerfahrung)</h4>
                                    <p class="fst-italic">
                                        Ehemaliger Gruppenführer bei der Feuerwehr, ich bringe absolute Strenge in die Diagnostik.
                                        <br><br>
                                        Ich erkenne Notfälle und gewährleiste eine sichere Betreuung, perfekt abgestimmt auf Ihre internen Sicherheitsprotokolle.
                                    </p>
                                @elseif (session('locale') === 'it')
                                    <h4 class="mb-4">Rigore Clinico & Sicurezza (Competenza sul Campo)</h4>
                                    <p class="fst-italic">
                                        Ex Capo Squadra Vigile del Fuoco, porto un rigore assoluto nella diagnosi.
                                        <br><br>
                                        So identificare le urgenze e garantire una presa in carico sicura, perfettamente allineata ai vostri protocolli di sicurezza interni.
                                    </p>
                                @elseif (session('locale') === 'es')
                                    <h4 class="mb-4">Rigor Clínico y Seguridad (Experiencia de Campo)</h4>
                                    <p class="fst-italic">
                                        Ex Jefe de Equipo Bombero, aporto un rigor absoluto en el diagnóstico.
                                        <br><br>
                                        Sé identificar la urgencia y garantizar una atención segura, perfectamente alineada con vuestros protocolos internos de seguridad.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-primary">
                            <div class="card-body text-center">
                                <i class="bi bi-gear-wide-connected text-primary fs-1 mb-4"></i>
                                @if (session('locale') === 'fr')
                                    <h4 class="mb-4">Ingénierie du Mouvement & Ergonomie (STAPS-APA)</h4>
                                    <p class="fst-italic">
                                        Ma formation en Activité Physique Adaptée me permet d'analyser les postes de travail
                                        et de proposer des corrections posturales concrètes.
                                        <br><br>
                                        Que vos équipes soient sédentaires ou sur le terrain, j'adapte le mouvement à leurs contraintes réelles.
                                    </p>
                                @elseif (session('locale') === 'en')
                                    <h4 class="mb-4">Movement Engineering & Ergonomics (STAPS-APA)</h4>
                                    <p class="fst-italic">
                                        My training in Adapted Physical Activity allows me to analyze workstations
                                        and propose concrete postural corrections.
                                        <br><br>
                                        Whether your teams are sedentary or field-based, I adapt movement to their real constraints.
                                    </p>
                                @elseif (session('locale') === 'de')
                                    <h4 class="mb-4">Bewegungsingenieurwesen & Ergonomie (STAPS-APA)</h4>
                                    <p class="fst-italic">
                                        Meine Ausbildung in Angepasster Körperlicher Aktivität ermöglicht mir die Analyse von Arbeitsplätzen
                                        und konkrete Haltungs-Korrekturen.
                                        <br><br>
                                        Ob Ihre Teams sitzend oder im Außeneinsatz arbeiten – ich passe die Bewegung an die realen Zwänge an.
                                    </p>
                                @elseif (session('locale') === 'it')
                                    <h4 class="mb-4">Ingegneria del Movimento & Ergonomia (STAPS-APA)</h4>
                                    <p class="fst-italic">
                                        La mia formazione in Attività Fisica Adattata mi permette di analizzare le postazioni di lavoro
                                        e proporre correzioni posturali concrete.
                                        <br><br>
                                        Che i tuoi team siano sedentari o sul campo, adatto il movimento alle loro reali costrizioni.
                                    </p>
                                @elseif (session('locale') === 'es')
                                    <h4 class="mb-4">Ingeniería del Movimiento y Ergonomía (STAPS-APA)</h4>
                                    <p class="fst-italic">
                                        Mi formación en Actividad Física Adaptada me permite analizar los puestos de trabajo
                                        y proponer correcciones posturales concretas.
                                        <br><br>
                                        Ya sea que tus equipos sean sedentarios o de campo, adapto el movimiento a sus restricciones reales.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-primary">
                            <div class="card-body text-center">
                                <i class="bi bi-yin-yang text-primary fs-1 mb-3"></i>
                                @if (session('locale') === 'fr')
                                    <h4 class="mb-3">Régulation de la Charge Mentale (Spécialiste Anxiété)</h4>
                                    <p class="fst-italic">
                                        Le stress est le premier accélérateur de TMS.
                                        <br><br>
                                        En travaillant sur la résilience corps-esprit, je réduis les tensions musculaires chroniques et favorise une meilleure concentration au travail.
                                    </p>
                                @elseif (session('locale') === 'en')
                                    <h4 class="mb-3">Mental Load Regulation (Anxiety Specialist)</h4>
                                    <p class="fst-italic">
                                        Stress is the primary accelerator of MSDs.
                                        <br><br>
                                        By working on body-mind resilience, I reduce chronic muscular tension and promote better focus at work.
                                    </p>
                                @elseif (session('locale') === 'de')
                                    <h4 class="mb-3">Regulation der Mentalen Belastung (Angstspezialist)</h4>
                                    <p class="fst-italic">
                                        Stress ist der Hauptbeschleuniger von MSB.
                                        <br><br>
                                        Durch Arbeit an der Körper-Geist-Resilienz reduziere ich chronische Muskelspannungen und fördere bessere Konzentration bei der Arbeit.
                                    </p>
                                @elseif (session('locale') === 'it')
                                    <h4 class="mb-3">Regolazione del Carico Mentale (Specialista Ansia)</h4>
                                    <p class="fst-italic">
                                        Lo stress è il principale acceleratore dei DMS.
                                        <br><br>
                                        Lavorando sulla resilienza corpo-mente, riduco le tensioni muscolari croniche e favorisco una migliore concentrazione al lavoro.
                                    </p>
                                @elseif (session('locale') === 'es')
                                    <h4 class="mb-3">Regulación de la Carga Mental (Especialista en Ansiedad)</h4>
                                    <p class="fst-italic">
                                        El estrés es el principal acelerador de los TME.
                                        <br><br>
                                        Trabajando en la resiliencia cuerpo-mente, reduzco las tensiones musculares crónicas y favorezco una mejor concentración en el trabajo.
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <blockquote class="blockquote border-start border-primary border-3 ps-4 mt-5 mb-5 text-center fst-italic">
                    @if (session('locale') === 'fr')
                        <p>"Un collaborateur libéré de ses tensions est un collaborateur 100 % opérationnel. Ne laissez pas les TMS dicter votre calendrier."</p>
                    @elseif (session('locale') === 'en')
                        <p>"An employee freed from tension is 100% operational. Don't let MSDs dictate your schedule."</p>
                    @elseif (session('locale') === 'de')
                        <p>"Ein Mitarbeiter ohne Spannungen ist zu 100 % einsatzfähig. Lassen Sie MSB nicht Ihren Kalender bestimmen."</p>
                    @elseif (session('locale') === 'it')
                        <p>"Un collaboratore liberato dalle tensioni è operativo al 100 %. Non lasciare che i DMS dettino il tuo calendario."</p>
                    @elseif (session('locale') === 'es')
                        <p>"Un colaborador liberado de sus tensiones es 100 % operativo. No dejes que los TME dicten tu calendario."</p>
                    @endif
                </blockquote>
            </div>
        </div>

        <!-- 📈 Tableau Pourquoi intégrer l’ostéopathie -->
        <div class="row mt-5 pt-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12">
                @if (session('locale') === 'fr')
                    <h3 class="text-center mb-4">📈 Pourquoi intégrer l’ostéopathie dans votre stratégie RH ?</h3>
                @elseif (session('locale') === 'en')
                    <h3 class="text-center mb-4">📈 Why integrate osteopathy into your HR strategy?</h3>
                @elseif (session('locale') === 'de')
                    <h3 class="text-center mb-4">📈 Warum Osteopathie in Ihre HR-Strategie integrieren?</h3>
                @elseif (session('locale') === 'it')
                    <h3 class="text-center mb-4">📈 Perché integrare l’osteopatia nella tua strategia HR?</h3>
                @elseif (session('locale') === 'es')
                    <h3 class="text-center mb-4">📈 ¿Por qué integrar la osteopatía en tu estrategia de RRHH?</h3>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                @if (session('locale') === 'fr')
                                    <th scope="col">Enjeu Entreprise</th>
                                    <th scope="col">Mon Intervention</th>
                                    <th scope="col">Bénéfice Opérationnel</th>
                                @elseif (session('locale') === 'en')
                                    <th scope="col">Business Challenge</th>
                                    <th scope="col">My Intervention</th>
                                    <th scope="col">Operational Benefit</th>
                                @elseif (session('locale') === 'de')
                                    <th scope="col">Unternehmensherausforderung</th>
                                    <th scope="col">Mein Einsatz</th>
                                    <th scope="col">Operativer Nutzen</th>
                                @elseif (session('locale') === 'it')
                                    <th scope="col">Sfida Aziendale</th>
                                    <th scope="col">Il Mio Intervento</th>
                                    <th scope="col">Beneficio Operativo</th>
                                @elseif (session('locale') === 'es')
                                    <th scope="col">Desafío Empresarial</th>
                                    <th scope="col">Mi Intervención</th>
                                    <th scope="col">Beneficio Operativo</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="bi bi-calendar-x text-danger fs-4 me-2"></i>
                                    @if (session('locale') === 'fr') Absentéisme @elseif (session('locale') === 'en') Absenteeism @elseif (session('locale') === 'de') Absentismus @elseif (session('locale') === 'it') Assenteismo @elseif (session('locale') === 'es') Absentismo @endif
                                </td>
                                <td>@if (session('locale') === 'fr') Traitement préventif des 78 % de TMS @elseif (session('locale') === 'en') Preventive treatment of 78% of MSDs @elseif (session('locale') === 'de') Präventive Behandlung der 78 % MSB @elseif (session('locale') === 'it') Trattamento preventivo del 78 % dei DMS @elseif (session('locale') === 'es') Tratamiento preventivo del 78 % de TME @endif</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>
                                    @if (session('locale') === 'fr') Réduction directe des coûts d'arrêt de travail @elseif (session('locale') === 'en') Direct reduction in sick leave costs @elseif (session('locale') === 'de') Direkte Reduktion der Ausfallkosten @elseif (session('locale') === 'it') Riduzione diretta dei costi di assenza @elseif (session('locale') === 'es') Reducción directa de los costes por baja laboral @endif
                                </td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-graph-up-arrow text-primary fs-4 me-2"></i>
                                    @if (session('locale') === 'fr') Productivité @elseif (session('locale') === 'en') Productivity @elseif (session('locale') === 'de') Produktivität @elseif (session('locale') === 'it') Produttività @elseif (session('locale') === 'es') Productividad @endif
                                </td>
                                <td>@if (session('locale') === 'fr') Optimisation de la posture et de la respiration @elseif (session('locale') === 'en') Posture & breathing optimisation @elseif (session('locale') === 'de') Optimierung von Haltung und Atmung @elseif (session('locale') === 'it') Ottimizzazione di postura e respirazione @elseif (session('locale') === 'es') Optimización de la postura y la respiración @endif</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>
                                    @if (session('locale') === 'fr') Collaborateurs plus alertes et moins fatigués physiquement @elseif (session('locale') === 'en') More alert and less physically fatigued employees @elseif (session('locale') === 'de') Aufmerksamere und körperlich weniger ermüdete Mitarbeiter @elseif (session('locale') === 'it') Collaboratori più attenti e meno affaticati fisicamente @elseif (session('locale') === 'es') Colaboradores más alerta y menos fatigados físicamente @endif
                                </td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-people text-primary fs-4 me-2"></i>
                                    @if (session('locale') === 'fr') Marque Employeur @elseif (session('locale') === 'en') Employer Brand @elseif (session('locale') === 'de') Arbeitgebermarke @elseif (session('locale') === 'it') Brand Employer @elseif (session('locale') === 'es') Marca Empleador @endif
                                </td>
                                <td>@if (session('locale') === 'fr') Mise en place de journées QVT dédiées @elseif (session('locale') === 'en') Dedicated QWL days implementation @elseif (session('locale') === 'de') Einführung dedizierter QVT-Tage @elseif (session('locale') === 'it') Implementazione di giornate QVT dedicate @elseif (session('locale') === 'es') Implementación de jornadas de CVL dedicadas @endif</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>
                                    @if (session('locale') === 'fr') Fidélisation des talents et climat social positif @elseif (session('locale') === 'en') Talent retention and positive social climate @elseif (session('locale') === 'de') Bindung von Talenten und positives Betriebsklima @elseif (session('locale') === 'it') Fidelizzazione dei talenti e clima sociale positivo @elseif (session('locale') === 'es') Fidelización de talentos y clima social positivo @endif
                                </td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-shield-lock text-primary fs-4 me-2"></i>
                                    @if (session('locale') === 'fr') Sécurité (Santé) @elseif (session('locale') === 'en') Safety (Health) @elseif (session('locale') === 'de') Sicherheit (Gesundheit) @elseif (session('locale') === 'it') Sicurezza (Salute) @elseif (session('locale') === 'es') Seguridad (Salud) @endif
                                </td>
                                <td>@if (session('locale') === 'fr') Diagnostic d'exclusion et orientation médicale @elseif (session('locale') === 'en') Exclusion diagnosis & medical referral @elseif (session('locale') === 'de') Ausschlussdiagnostik & medizinische Weiterleitung @elseif (session('locale') === 'it') Diagnosi di esclusione e orientamento medico @elseif (session('locale') === 'es') Diagnóstico de exclusión y orientación médica @endif</td>
                                <td><i class="bi bi-check-circle text-success fs-4 me-2"></i>
                                    @if (session('locale') === 'fr') Prévention des accidents et conformité santé @elseif (session('locale') === 'en') Accident prevention & health compliance @elseif (session('locale') === 'de') Unfallprävention & Gesundheitskonformität @elseif (session('locale') === 'it') Prevenzione infortuni e conformità sanitaria @elseif (session('locale') === 'es') Prevención de accidentes y cumplimiento sanitario @endif
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
                @if (session('locale') === 'fr')
                    <h3 class="text-center mb-5">🛠️ Formats d'Intervention : Flexibilité & Proximité</h3>
                @elseif (session('locale') === 'en')
                    <h3 class="text-center mb-5">🛠️ Intervention Formats: Flexibility & Proximity</h3>
                @elseif (session('locale') === 'de')
                    <h3 class="text-center mb-5">🛠️ Einsatzformate: Flexibilität & Nähe</h3>
                @elseif (session('locale') === 'it')
                    <h3 class="text-center mb-5">🛠️ Formati di Intervento: Flessibilità & Prossimità</h3>
                @elseif (session('locale') === 'es')
                    <h3 class="text-center mb-5">🛠️ Formatos de Intervención: Flexibilidad y Proximidad</h3>
                @endif

                @if (session('locale') === 'fr')
                    <p class="text-center lead mb-5">
                        J'interviens directement dans vos locaux à Nice et dans les Alpes-Maritimes (06)
                        <br>
                        avec des formules adaptées à votre agenda et aux besoins de votre entreprise.
                    </p>
                @elseif (session('locale') === 'en')
                    <p class="text-center lead mb-5">
                        I intervene directly at your premises in Nice and in the Alpes-Maritimes (06)
                        <br>
                        with formulas adapted to your schedule and your company’s needs.
                    </p>
                @elseif (session('locale') === 'de')
                    <p class="text-center lead mb-5">
                        Ich komme direkt in Ihre Räumlichkeiten in Nizza und im Département Alpes-Maritimes (06)
                        <br>
                        mit auf Ihren Zeitplan und die Bedürfnisse Ihres Unternehmens abgestimmten Formaten.
                    </p>
                @elseif (session('locale') === 'it')
                    <p class="text-center lead mb-5">
                        Interveniamo direttamente nei vostri locali a Nizza e nelle Alpi Marittime (06)
                        <br>
                        con formule adattate alla vostra agenda e alle esigenze della vostra azienda.
                    </p>
                @elseif (session('locale') === 'es')
                    <p class="text-center lead mb-5">
                        Intervengo directamente en vuestras instalaciones en Niza y en los Alpes Marítimos (06)
                        <br>
                        con fórmulas adaptadas a vuestra agenda y a las necesidades de vuestra empresa.
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
                                            @if (session('locale') === 'fr')
                                                <span>La Demi-Journée Prévention (4h)</span>
                                            @elseif (session('locale') === 'en')
                                                <span>Half-Day Prevention (4h)</span>
                                            @elseif (session('locale') === 'de')
                                                <span>Halbtags-Prävention (4 Std.)</span>
                                            @elseif (session('locale') === 'it')
                                                <span>Mezza Giornata di Prevenzione (4h)</span>
                                            @elseif (session('locale') === 'es')
                                                <span>Media Jornada de Prevención (4h)</span>
                                            @endif
                                        </h3>

                                        @if (session('locale') === 'fr')
                                            <p class="card-text text-muted lead mb-4">
                                                Idéal pour un suivi ciblé ou une petite équipe.
                                                <br><br>
                                                Comprend des consultations individuelles de 30 à 45 minutes sur site pour désamorcer les tensions aiguës et prévenir les TMS.
                                            </p>
                                        @elseif (session('locale') === 'en')
                                            <p class="card-text text-muted lead mb-4">
                                                Ideal for targeted follow-up or small teams.
                                                <br><br>
                                                Includes individual 30 to 45-minute on-site consultations to defuse acute tensions and prevent MSDs.
                                            </p>
                                        @elseif (session('locale') === 'de')
                                            <p class="card-text text-muted lead mb-4">
                                                Ideal für gezielte Betreuung oder kleine Teams.
                                                <br><br>
                                                Umfasst individuelle 30- bis 45-minütige Vor-Ort-Konsultationen zur Entschärfung akuter Spannungen und Prävention von MSB.
                                            </p>
                                        @elseif (session('locale') === 'it')
                                            <p class="card-text text-muted lead mb-4">
                                                Ideale per un follow-up mirato o piccoli team.
                                                <br><br>
                                                Include consulenze individuali da 30 a 45 minuti in loco per disinnescare tensioni acute e prevenire i DMS.
                                            </p>
                                        @elseif (session('locale') === 'es')
                                            <p class="card-text text-muted lead mb-4">
                                                Ideal para un seguimiento focalizado o equipos pequeños.
                                                <br><br>
                                                Incluye consultas individuales de 30 a 45 minutos in situ para desactivar tensiones agudas y prevenir los TME.
                                            </p>
                                        @endif

                                        @if (session('locale') === 'fr')
                                            <h4 class="mb-3">Autres modalités disponibles :</h4>
                                        @elseif (session('locale') === 'en')
                                            <h4 class="mb-3">Other available options:</h4>
                                        @elseif (session('locale') === 'de')
                                            <h4 class="mb-3">Weitere verfügbare Modalitäten:</h4>
                                        @elseif (session('locale') === 'it')
                                            <h4 class="mb-3">Altre modalità disponibili:</h4>
                                        @elseif (session('locale') === 'es')
                                            <h4 class="mb-3">Otras modalidades disponibles:</h4>
                                        @endif

                                        <div class="departments-tabs">
                                            <div class="service-item mb-0">
                                                <div class="service-icon"><i class="bi bi-check-circle-fill"></i></div>
                                                <div class="service-content">
                                                    @if (session('locale') === 'fr')
                                                        <h4>Permanences d'ostéopathie</h4>
                                                        <p>Directement sur site, Installation rapide, sans rien à préparer de votre côté</p>
                                                    @elseif (session('locale') === 'en')
                                                        <h4>Osteopathy on-site sessions</h4>
                                                        <p>Directly on premises, quick set-up, nothing to prepare on your side</p>
                                                    @elseif (session('locale') === 'de')
                                                        <h4>Osteopathie-Vor-Ort-Sprechstunden</h4>
                                                        <p>Direkt vor Ort, schneller Aufbau, nichts von Ihrer Seite vorzubereiten</p>
                                                    @elseif (session('locale') === 'it')
                                                        <h4>Permanenze di osteopatia</h4>
                                                        <p>Direttamente in loco, installazione rapida, nulla da preparare da parte vostra</p>
                                                    @elseif (session('locale') === 'es')
                                                        <h4>Permanencias de osteopatía</h4>
                                                        <p>Directamente in situ, instalación rápida, nada que preparar por vuestra parte</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="departments-tabs">
                                            <div class="service-item mb-0">
                                                <div class="service-icon"><i class="bi bi-check-circle-fill"></i></div>
                                                <div class="service-content">
                                                    @if (session('locale') === 'fr')
                                                        <h4>En complète autonomie</h4>
                                                        <p>Table de soins portable et protections draps, hygiéniques incluses.</p>
                                                    @elseif (session('locale') === 'en')
                                                        <h4>Fully autonomous</h4>
                                                        <p>Portable treatment table and hygienic sheet protections included.</p>
                                                    @elseif (session('locale') === 'de')
                                                        <h4>Vollständig autonom</h4>
                                                        <p>Tragbare Behandlungsliege und hygienische Schutzbezüge inklusive.</p>
                                                    @elseif (session('locale') === 'it')
                                                        <h4>In completa autonomia</h4>
                                                        <p>Tavolo da trattamento portatile e protezioni lenzuola igieniche incluse.</p>
                                                    @elseif (session('locale') === 'es')
                                                        <h4>En completa autonomía</h4>
                                                        <p>Mesa de tratamiento portátil y protecciones higiénicas de sábanas incluidas.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="departments-tabs">
                                            <div class="service-item mb-0">
                                                <div class="service-icon"><i class="bi bi-check-circle-fill"></i></div>
                                                <div class="service-content">
                                                    @if (session('locale') === 'fr')
                                                        <h4>Audits Ergo-Dynamiques</h4>
                                                        <p>Analyse et correction des gestes/postures en situation réelle</p>
                                                    @elseif (session('locale') === 'en')
                                                        <h4>Ergo-Dynamic Audits</h4>
                                                        <p>Analysis and correction of gestures/postures in real situations</p>
                                                    @elseif (session('locale') === 'de')
                                                        <h4>Ergo-dynamische Audits</h4>
                                                        <p>Analyse und Korrektur von Bewegungen/Haltungen in realen Situationen</p>
                                                    @elseif (session('locale') === 'it')
                                                        <h4>Audit Ergo-Dinamici</h4>
                                                        <p>Analisi e correzione di gesti/posture in situazione reale</p>
                                                    @elseif (session('locale') === 'es')
                                                        <h4>Auditorías Ergo-Dinámicas</h4>
                                                        <p>Análisis y corrección de gestos/posturas en situación real</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        @if (session('locale') === 'fr')
                                            <p class="mt-4 lead">Solutions "clés en main" directement dans vos locaux à Nice et 06.</p>
                                        @elseif (session('locale') === 'en')
                                            <p class="mt-4 lead">"Turnkey" solutions directly at your premises in Nice and 06.</p>
                                        @elseif (session('locale') === 'de')
                                            <p class="mt-4 lead">"Schlüsselfertige" Lösungen direkt in Ihren Räumen in Nizza und 06.</p>
                                        @elseif (session('locale') === 'it')
                                            <p class="mt-4 lead">Soluzioni "chiavi in mano" direttamente nei vostri locali a Nizza e 06.</p>
                                        @elseif (session('locale') === 'es')
                                            <p class="mt-4 lead">Soluciones "llave en mano" directamente en vuestras instalaciones en Niza y 06.</p>
                                        @endif

                                        <div class="d-flex justify-content-center mt-4">
                                            <p class="text-center text-lg-start">
                                                <a target="_blank" href="{{ route('website.contact') }}"
                                                    class="btn-custom-outline">
                                                    <i class="bi bi-arrow-right"></i>
                                                    @if (session('locale') === 'fr')
                                                        <span class="ms-1">Contactez-moi pour un devis gratuit</span>
                                                    @elseif (session('locale') === 'en')
                                                        <span class="ms-1">Contact me for a free quote</span>
                                                    @elseif (session('locale') === 'de')
                                                        <span class="ms-1">Kontaktieren Sie mich für ein kostenloses Angebot</span>
                                                    @elseif (session('locale') === 'it')
                                                        <span class="ms-1">Contattami per un preventivo gratuito</span>
                                                    @elseif (session('locale') === 'es')
                                                        <span class="ms-1">Contáctame para un presupuesto gratuito</span>
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
