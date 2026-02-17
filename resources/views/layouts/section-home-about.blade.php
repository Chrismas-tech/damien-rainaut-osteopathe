<!-- Home About Section -->
<section id="home-about" class="home-about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row mb-4">
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                @if (\App\Models\Website::getSettings()->lang === 'fr')
                    <h2>Ostéopathie & Performance Durable à Nice</h2>
                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                    <h2>Osteopathy & Sustainable Performance in Nice</h2>
                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                    <h2>Osteopathie & Nachhaltige Leistungsfähigkeit in Nizza</h2>
                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                    <h2>Osteopatia & Performance Duratura a Nizza</h2>
                @endif
            </div>
            <div class="col-lg-6 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                <div class="about-content">
                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                        <p class="lead-text">
                            Spécialiste en dynamique du mouvement et régulation corps-esprit, j’accompagne toute
                            personne
                            qui recherche un mieux-être profond et durable.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                        <p class="lead-text">
                            Specialist in movement dynamics and body-mind regulation, I support anyone seeking deep and
                            lasting well-being.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                        <p class="lead-text">
                            Spezialist für Bewegungsdynamik und Körper-Geist-Regulation begleite ich jeden Menschen, der
                            ein tiefes und nachhaltiges Wohlbefinden sucht.
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                        <p class="lead-text">
                            Specialista in dinamica del movimento e regolazione corpo-mente, accompagno chiunque cerchi
                            un benessere profondo e duraturo.
                        </p>
                    @endif

                    <div class="skills-section">
                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <span>
                                    Sportifs (amateurs ou de haut niveau)
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <span>
                                    Athletes (amateur or high-level)
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <span>
                                    Sportler (Amateure oder Leistungssportler)
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <span>
                                    Sportivi (amatori o di alto livello)
                                </span>
                            @endif
                        </div>

                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <span>
                                    Télétravailleurs soumis à des tensions posturales et au stress chronique
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <span>
                                    Remote workers subject to postural tensions and chronic stress
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <span>
                                    Home-Office-Mitarbeiter mit Haltungspannungen und chronischem Stress
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <span>
                                    Lavoratori da remoto soggetti a tensioni posturali e stress cronico
                                </span>
                            @endif
                        </div>
                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <span>
                                    Toute personne souhaitant mieux gérer son anxiété, son stress ou retrouver un
                                    équilibre
                                    psycho-corporel harmonieux
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <span>
                                    Anyone wishing to better manage anxiety, stress or regain harmonious
                                    psycho-corporeal balance
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <span>
                                    Jede Person, die Angst, Stress besser bewältigen oder ein harmonisches
                                    psycho-körperliches Gleichgewicht wiederfinden möchte
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <span>
                                    Chiunque desideri gestire meglio ansia, stress o ritrovare un equilibrio
                                    psico-corporeo armonioso
                                </span>
                            @endif
                        </div>
                    </div>

                    @if (\App\Models\Website::getSettings()->lang === 'fr')
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
                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                        <p class="lead-text">
                            Each session is based on a thorough and fully individualized assessment:
                            your life journey, current posture, daily habits and personal goals serve as a guideline to
                            build a tailor-made support, firmly oriented towards deep and lasting changes, far beyond
                            temporary relief.
                            <br>
                            <br>
                            I integrate the following approaches in a complementary and adapted way for each person:
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                        <p class="lead-text">
                            Jede Sitzung basiert auf einer gründlichen und vollständig individualisierten Bewertung:
                            Ihr Lebensweg, Ihre aktuelle Haltung, tägliche Gewohnheiten und persönliche Ziele dienen als
                            Leitfaden, um eine maßgeschneiderte Begleitung aufzubauen, die konsequent auf tiefe und
                            nachhaltige Veränderungen ausgerichtet ist – weit über eine vorübergehende Linderung hinaus.
                            <br>
                            <br>
                            Ich integriere ergänzend und individuell angepasst folgende Ansätze:
                        </p>
                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                        <p class="lead-text">
                            Ogni seduta si basa su una valutazione approfondita e completamente individualizzata:
                            il tuo percorso di vita, la postura attuale, le abitudini quotidiane e i tuoi obiettivi
                            personali fungono da filo conduttore per costruire un accompagnamento su misura, decisamente
                            orientato a cambiamenti profondi e duraturi, ben oltre un semplice sollievo temporaneo.
                            <br>
                            <br>
                            Integro in modo complementare e adattato a ciascuna persona i seguenti approcci:
                        </p>
                    @endif

                    <div class="skills-section">
                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <span>
                                    Techniques structurelles (articulations, muscles, colonne)
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <span>
                                    Structural techniques (joints, muscles, spine)
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <span>
                                    Strukturelle Techniken (Gelenke, Muskeln, Wirbelsäule)
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <span>
                                    Tecniche strutturali (articolazioni, muscoli, colonna vertebrale)
                                </span>
                            @endif
                        </div>

                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <span>
                                    Ostéopathie crânio-sacrée
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <span>
                                    Cranio-sacral osteopathy
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <span>
                                    Craniosacrale Osteopathie
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <span>
                                    Osteopatia cranio-sacrale
                                </span>
                            @endif
                        </div>
                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <span>
                                    Travail viscéral
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <span>
                                    Visceral work
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <span>
                                    Viszerale Techniken
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <span>
                                    Lavoro viscerale
                                </span>
                            @endif
                        </div>
                        <div class="skills">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <span>
                                    Libération des tissus fasciaux
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <span>
                                    Fascial tissue release
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <span>
                                    Fasziengewebe-Lösung / Myofasziale Release
                                </span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <span>
                                    Liberazione dei tessuti fasciali
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Les commentaires restent inchangés, donc pas de traduction ici --}}

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
                            @if (\App\Models\Website::getSettings()->lang === 'fr')
                                <span class="text">Ostéopathe diplômé et reconnu</span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                <span class="text">Graduate and registered osteopath</span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                <span class="text">Dipl. und anerkannter Osteopath</span>
                            @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                <span class="text">Osteopata diplomato e riconosciuto</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Le reste commenté reste commenté, inchangé --}}
</section><!-- /Home About Section -->
