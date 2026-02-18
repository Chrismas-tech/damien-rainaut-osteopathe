<!-- Home About Section -->
<section id="home-about" class="home-about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                @if (session('locale') === 'fr')
                    <h2>Ostéopathie & Performance Durable à Nice</h2>
                @elseif (session('locale') === 'en')
                    <h2>Osteopathy & Sustainable Performance in Nice</h2>
                @elseif (session('locale') === 'de')
                    <h2>Osteopathie & Nachhaltige Leistungsfähigkeit in Nizza</h2>
                @elseif (session('locale') === 'it')
                    <h2>Osteopatia & Performance Duratura a Nizza</h2>
                @elseif (session('locale') === 'es')
                    <h2>Osteopatía & Rendimiento Sostenible en Niza</h2>
                @endif
            </div>
            <div class="col-lg-6 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                <div class="about-content">
                    @if (session('locale') === 'fr')
                        <p class="lead-text">
                            Spécialiste en dynamique du mouvement et régulation corps-esprit, j’accompagne toute
                            personne
                            qui recherche un mieux-être profond et durable.
                        </p>
                    @elseif (session('locale') === 'en')
                        <p class="lead-text">
                            Specialist in movement dynamics and body-mind regulation, I support anyone seeking deep and
                            lasting well-being.
                        </p>
                    @elseif (session('locale') === 'de')
                        <p class="lead-text">
                            Spezialist für Bewegungsdynamik und Körper-Geist-Regulation begleite ich jeden Menschen, der
                            ein tiefes und nachhaltiges Wohlbefinden sucht.
                        </p>
                    @elseif (session('locale') === 'it')
                        <p class="lead-text">
                            Specialista in dinamica del movimento e regolazione corpo-mente, accompagno chiunque cerchi
                            un benessere profondo e duraturo.
                        </p>
                    @elseif (session('locale') === 'es')
                        <p class="lead-text">
                            Especialista en dinámica del movimiento y regulación cuerpo-mente, acompaño a toda persona
                            que busca un bienestar profundo y duradero.
                        </p>
                    @endif

                    <div class="skills-section">
                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (session('locale') === 'fr')
                                <span>Sportifs (amateurs ou de haut niveau)</span>
                            @elseif (session('locale') === 'en')
                                <span>Athletes (amateur or high-level)</span>
                            @elseif (session('locale') === 'de')
                                <span>Sportler (Amateure oder Leistungssportler)</span>
                            @elseif (session('locale') === 'it')
                                <span>Sportivi (amatori o di alto livello)</span>
                            @elseif (session('locale') === 'es')
                                <span>Deportistas (amateurs o de alto nivel)</span>
                            @endif
                        </div>

                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (session('locale') === 'fr')
                                <span>Télétravailleurs soumis à des tensions posturales et au stress chronique</span>
                            @elseif (session('locale') === 'en')
                                <span>Remote workers subject to postural tensions and chronic stress</span>
                            @elseif (session('locale') === 'de')
                                <span>Home-Office-Mitarbeiter mit Haltungspannungen und chronischem Stress</span>
                            @elseif (session('locale') === 'it')
                                <span>Lavoratori da remoto soggetti a tensioni posturali e stress cronico</span>
                            @elseif (session('locale') === 'es')
                                <span>Trabajadores remotos sometidos a tensiones posturales y estrés crónico</span>
                            @endif
                        </div>

                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (session('locale') === 'fr')
                                <span>Toute personne souhaitant mieux gérer son anxiété, son stress ou retrouver un
                                    équilibre psycho-corporel harmonieux</span>
                            @elseif (session('locale') === 'en')
                                <span>Anyone wishing to better manage anxiety, stress or regain harmonious
                                    psycho-corporeal balance</span>
                            @elseif (session('locale') === 'de')
                                <span>Jede Person, die Angst, Stress besser bewältigen oder ein harmonisches
                                    psycho-körperliches Gleichgewicht wiederfinden möchte</span>
                            @elseif (session('locale') === 'it')
                                <span>Chiunque desideri gestire meglio ansia, stress o ritrovare un equilibrio
                                    psico-corporeo armonioso</span>
                            @elseif (session('locale') === 'es')
                                <span>Cualquier persona que desee gestionar mejor la ansiedad, el estrés o recuperar un
                                    equilibrio psico-corporal armónico</span>
                            @endif
                        </div>
                    </div>

                    @if (session('locale') === 'fr')
                        <p class="lead-text">
                            Chaque séance repose sur une évaluation approfondie et entièrement individualisée :
                            votre parcours de vie, votre posture actuelle, vos habitudes quotidiennes et vos objectifs
                            personnels servent de fil conducteur pour construire un accompagnement sur mesure,
                            résolument
                            orienté vers des changements profonds et durables, bien au-delà d’un soulagement temporaire.
                            <br>
                            <br>
                            J’intègre de façon complémentaire et adaptée à chaque personne les approches suivantes :
                        </p>
                    @elseif (session('locale') === 'en')
                        <p class="lead-text">
                            Each session is based on a thorough and fully individualized assessment:
                            your life journey, current posture, daily habits and personal goals serve as a guideline to
                            build a tailor-made support, firmly oriented towards deep and lasting changes, far beyond
                            temporary relief.
                            <br>
                            <br>
                            I integrate the following approaches in a complementary and adapted way for each person:
                        </p>
                    @elseif (session('locale') === 'de')
                        <p class="lead-text">
                            Jede Sitzung basiert auf einer gründlichen und vollständig individualisierten Bewertung:
                            Ihr Lebensweg, Ihre aktuelle Haltung, tägliche Gewohnheiten und persönliche Ziele dienen als
                            Leitfaden, um eine maßgeschneiderte Begleitung aufzubauen, die konsequent auf tiefe und
                            nachhaltige Veränderungen ausgerichtet ist – weit über eine vorübergehende Linderung hinaus.
                            <br>
                            <br>
                            Ich integriere ergänzend und individuell angepasst folgende Ansätze:
                        </p>
                    @elseif (session('locale') === 'it')
                        <p class="lead-text">
                            Ogni seduta si basa su una valutazione approfondita e completamente individualizzata:
                            il tuo percorso di vita, la postura attuale, le abitudini quotidiane e i tuoi obiettivi
                            personali fungono da filo conduttore per costruire un accompagnamento su misura, decisamente
                            orientato a cambiamenti profondi e duraturi, ben oltre un semplice sollievo temporaneo.
                            <br>
                            <br>
                            Integro in modo complementare e adattato a ciascuna persona i seguenti approcci:
                        </p>
                    @elseif (session('locale') === 'es')
                        <p class="lead-text">
                            Cada sesión se basa en una evaluación exhaustiva y completamente individualizada:
                            tu trayectoria vital, tu postura actual, tus hábitos diarios y tus objetivos personales
                            sirven como hilo conductor para construir un acompañamiento a medida, resueltamente
                            orientado a cambios profundos y duraderos, mucho más allá de un alivio temporal.
                            <br>
                            <br>
                            Integro de forma complementaria y adaptada a cada persona los siguientes enfoques:
                        </p>
                    @endif

                    <div class="skills-section">
                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (session('locale') === 'fr')
                                <span>Techniques structurelles (articulations, muscles, colonne)</span>
                            @elseif (session('locale') === 'en')
                                <span>Structural techniques (joints, muscles, spine)</span>
                            @elseif (session('locale') === 'de')
                                <span>Strukturelle Techniken (Gelenke, Muskeln, Wirbelsäule)</span>
                            @elseif (session('locale') === 'it')
                                <span>Tecniche strutturali (articolazioni, muscoli, colonna vertebrale)</span>
                            @elseif (session('locale') === 'es')
                                <span>Técnicas estructurales (articulaciones, músculos, columna)</span>
                            @endif
                        </div>

                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (session('locale') === 'fr')
                                <span>Ostéopathie crânio-sacrée</span>
                            @elseif (session('locale') === 'en')
                                <span>Cranio-sacral osteopathy</span>
                            @elseif (session('locale') === 'de')
                                <span>Craniosacrale Osteopathie</span>
                            @elseif (session('locale') === 'it')
                                <span>Osteopatia cranio-sacrale</span>
                            @elseif (session('locale') === 'es')
                                <span>Osteopatía craneosacral</span>
                            @endif
                        </div>

                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (session('locale') === 'fr')
                                <span>Travail viscéral</span>
                            @elseif (session('locale') === 'en')
                                <span>Visceral work</span>
                            @elseif (session('locale') === 'de')
                                <span>Viszerale Techniken</span>
                            @elseif (session('locale') === 'it')
                                <span>Lavoro viscerale</span>
                            @elseif (session('locale') === 'es')
                                <span>Trabajo visceral</span>
                            @endif
                        </div>

                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (session('locale') === 'fr')
                                <span>Libération des tissus fasciaux</span>
                            @elseif (session('locale') === 'en')
                                <span>Fascial tissue release</span>
                            @elseif (session('locale') === 'de')
                                <span>Fasziengewebe-Lösung / Myofasziale Release</span>
                            @elseif (session('locale') === 'it')
                                <span>Liberazione dei tessuti fasciali</span>
                            @elseif (session('locale') === 'es')
                                <span>Liberación de los tejidos fasciales</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                <div class="about-visual">
                    <div class="main-image">
                        <img src={{ asset('img/website/damien/osteo-11.webp') }} alt="Cabinet d'ostéopathie à Nice"
                            class="img-fluid">
                    </div>
                    <div class="experience-badge">
                        <div class="badge-content">
                            <div class="img-certificate">
                                <img src="{{ asset('img/website/damien/certificate.png') }}" alt="certificate-logo">
                            </div>
                            <span class="years">D.O.</span>
                            @if (session('locale') === 'fr')
                                <span class="text">Ostéopathe diplômé et reconnu</span>
                            @elseif (session('locale') === 'en')
                                <span class="text">Graduate and registered osteopath</span>
                            @elseif (session('locale') === 'de')
                                <span class="text">Dipl. und anerkannter Osteopath</span>
                            @elseif (session('locale') === 'it')
                                <span class="text">Osteopata diplomato e riconosciuto</span>
                            @elseif (session('locale') === 'es')
                                <span class="text">Osteópata diplomado y reconocido</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-8" data-aos="fade-up" data-aos-delay="100">
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
    </div>
</section>
<!-- /Home About Section -->
