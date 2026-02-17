@extends('website.layouts.base-website')

@section('title')
    @if (\App\Models\Website::getSettings()->lang === 'fr')
        Honoraires
    @elseif (\App\Models\Website::getSettings()->lang === 'en')
        Fees
    @elseif (\App\Models\Website::getSettings()->lang === 'de')
        Honorare
    @elseif (\App\Models\Website::getSettings()->lang === 'it')
        Tariffe
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
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <h3>Consultations au cabinet - 70€</h3>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <h3>Office consultations - €70</h3>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <h3>Praxis-Konsultationen - 70 €</h3>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <h3>Visite in studio - 70 €</h3>
                                        @endif
                                        <p>
                                            <strong>
                                                <a target="_blank" class="honoraires-link"
                                                    href="https://www.google.com/maps?ll=43.700763,7.260688&z=16&t=m&hl=fr-FR&gl=US&mapclient=embed&q=22+Rue+Gounod+06000+Nice">
                                                    <i class="bi bi-geo-alt me-1"></i>
                                                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                        Cabinet (22 rue Gounod, Nice)
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                        Practice (22 rue Gounod, Nice)
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                        Praxis (22 rue Gounod, Nizza)
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                        Studio (22 rue Gounod, Nizza)
                                                    @endif
                                                </a>
                                                <br>
                                                <br>
                                                <i class="bi bi-clock me-1"></i>
                                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                    Horaires flexibles
                                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                    Flexible hours
                                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                    Flexible Sprechzeiten
                                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                    Orari flessibili
                                                @endif
                                            </strong>
                                        </p>
                                        <p>
                                            <strong>
                                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                    Lundi – Samedi : 7h30 – 21h
                                                    <br>
                                                    Dimanche : 10h – 17h
                                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                    Monday – Saturday: 7:30 AM – 9:00 PM
                                                    <br>
                                                    Sunday: 10:00 AM – 5:00 PM
                                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                    Montag – Samstag: 7:30 – 21:00 Uhr
                                                    <br>
                                                    Sonntag: 10:00 – 17:00 Uhr
                                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                    Lunedì – Sabato: 7:30 – 21:00
                                                    <br>
                                                    Domenica: 10:00 – 17:00
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
                                                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                        <span>RDV rapides en soirée et le week-end disponibles sur
                                                            Doctolib</span>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                        <span>Fast evening & weekend appointments available on
                                                            Doctolib</span>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                        <span>Schnelle Abend- & Wochenendtermine auf Doctolib
                                                            verfügbar</span>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                        <span>Appuntamenti rapidi serali e weekend disponibili su
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
                                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                                            <h3>Consultations & Visites à Domicile en urgence ou sur RDV - 90€</h3>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                            <h3>Office & Home Visits (urgent or by appointment) - €90</h3>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                            <h3>Praxis- & Hausbesuche (Notfall oder Termin) - 90 €</h3>
                                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                            <h3>Visite in studio & a domicilio (urgenza o su appuntamento) - 90 €</h3>
                                        @endif
                                        <p>
                                            <strong>
                                                <i class="bi bi-clock me-1"></i>
                                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                    Horaires flexibles
                                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                    Flexible hours
                                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                    Flexible Sprechzeiten
                                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                    Orari flessibili
                                                @endif
                                            </strong>
                                        </p>
                                        <p>
                                            <strong>
                                                @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                    Lundi – Samedi : 7h30 – 21h
                                                    <br>
                                                    Dimanche : 10h – 17h
                                                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                    Monday – Saturday: 7:30 AM – 9:00 PM
                                                    <br>
                                                    Sunday: 10:00 AM – 5:00 PM
                                                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                    Montag – Samstag: 7:30 – 21:00 Uhr
                                                    <br>
                                                    Sonntag: 10:00 – 17:00 Uhr
                                                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                    Lunedì – Sabato: 7:30 – 21:00
                                                    <br>
                                                    Domenica: 10:00 – 17:00
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
                                                    @if (\App\Models\Website::getSettings()->lang === 'fr')
                                                        <span>RDV rapides en soirée et le week-end disponibles sur
                                                            Doctolib</span>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'en')
                                                        <span>Fast evening & weekend appointments available on
                                                            Doctolib</span>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'de')
                                                        <span>Schnelle Abend- & Wochenendtermine auf Doctolib
                                                            verfügbar</span>
                                                    @elseif (\App\Models\Website::getSettings()->lang === 'it')
                                                        <span>Appuntamenti rapidi serali e weekend disponibili su
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
