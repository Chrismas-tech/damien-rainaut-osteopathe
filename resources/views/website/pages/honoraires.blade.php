@extends('website.layouts.base-website')

@section('title')
    @if (session('locale') === 'fr')
        Honoraires
    @elseif (session('locale') === 'en')
        Fees
    @elseif (session('locale') === 'de')
        Honorare
    @elseif (session('locale') === 'it')
        Tariffe
    @elseif (session('locale') === 'es')
        Honorarios
    @endif
@endsection

@section('content')
    <main class="main">
        @include('website.layouts.page-title')

        <section class="light-background honoraires">
            <div class="container">
                <div class="featured-departments">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="my-emergency-banner aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                <div class="row align-items-center">
                                    <div class="emergency-content">
                                        @if (session('locale') === 'fr')
                                            <h3>Consultations au cabinet - 70€</h3>
                                        @elseif (session('locale') === 'en')
                                            <h3>Office consultations - €70</h3>
                                        @elseif (session('locale') === 'de')
                                            <h3>Praxis-Konsultationen - 70 €</h3>
                                        @elseif (session('locale') === 'it')
                                            <h3>Visite in studio - 70 €</h3>
                                        @elseif (session('locale') === 'es')
                                            <h3>Consultas en consulta - 70 €</h3>
                                        @endif
                                        <p>
                                            <strong>
                                                <a target="_blank" class="honoraires-link"
                                                    href="https://www.google.com/maps?ll=43.700763,7.260688&z=16&t=m&hl=fr-FR&gl=US&mapclient=embed&q=22+Rue+Gounod+06000+Nice">
                                                    <i class="bi bi-geo-alt me-1"></i>
                                                    @if (session('locale') === 'fr')
                                                        Cabinet (22 rue Gounod, Nice)
                                                    @elseif (session('locale') === 'en')
                                                        Practice (22 rue Gounod, Nice)
                                                    @elseif (session('locale') === 'de')
                                                        Praxis (22 rue Gounod, Nizza)
                                                    @elseif (session('locale') === 'it')
                                                        Studio (22 rue Gounod, Nizza)
                                                    @elseif (session('locale') === 'es')
                                                        Consulta (22 rue Gounod, Niza)
                                                    @endif
                                                </a>
                                                <br>
                                                <br>
                                                <i class="bi bi-clock me-1"></i>
                                                @if (session('locale') === 'fr')
                                                    Horaires flexibles
                                                @elseif (session('locale') === 'en')
                                                    Flexible hours
                                                @elseif (session('locale') === 'de')
                                                    Flexible Sprechzeiten
                                                @elseif (session('locale') === 'it')
                                                    Orari flessibili
                                                @elseif (session('locale') === 'es')
                                                    Horarios flexibles
                                                @endif
                                            </strong>
                                        </p>
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
                                                        <span>Fast evening & weekend appointments available on
                                                            Doctolib</span>
                                                    @elseif (session('locale') === 'de')
                                                        <span>Schnelle Abend- & Wochenendtermine auf Doctolib
                                                            verfügbar</span>
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

                        <div class="col-lg-6">
                            <div class="my-emergency-banner aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                <div class="row align-items-center">
                                    <div class="emergency-content">
                                        @if (session('locale') === 'fr')
                                            <h3>Consultations & Visites à Domicile en urgence ou sur RDV - 90€</h3>
                                        @elseif (session('locale') === 'en')
                                            <h3>Office & Home Visits (urgent or by appointment) - €90</h3>
                                        @elseif (session('locale') === 'de')
                                            <h3>Praxis- & Hausbesuche (Notfall oder Termin) - 90 €</h3>
                                        @elseif (session('locale') === 'it')
                                            <h3>Visite in studio & a domicilio (urgenza o su appuntamento) - 90 €</h3>
                                        @elseif (session('locale') === 'es')
                                            <h3>Consultas y visitas a domicilio (urgencia o con cita) - 90 €</h3>
                                        @endif
                                        <p>
                                            <strong>
                                                <i class="bi bi-clock me-1"></i>
                                                @if (session('locale') === 'fr')
                                                    Horaires flexibles
                                                @elseif (session('locale') === 'en')
                                                    Flexible hours
                                                @elseif (session('locale') === 'de')
                                                    Flexible Sprechzeiten
                                                @elseif (session('locale') === 'it')
                                                    Orari flessibili
                                                @elseif (session('locale') === 'es')
                                                    Horarios flexibles
                                                @endif
                                            </strong>
                                        </p>
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
                                                        <span>Fast evening & weekend appointments available on
                                                            Doctolib</span>
                                                    @elseif (session('locale') === 'de')
                                                        <span>Schnelle Abend- & Wochenendtermine auf Doctolib
                                                            verfügbar</span>
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
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
