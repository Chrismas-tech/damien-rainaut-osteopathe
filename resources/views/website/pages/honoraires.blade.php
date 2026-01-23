@extends('website.layouts.base-website')
@section('title', 'Honoraires')
@section('content')
    <main class="main">
        @include('website.layouts.page-title')

        <section class="section light-background honoraires">
            <div class="container">
                <div class="featured-departments">
                    <div class="my-emergency-banner aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <div class="row align-items-center">
                            <div class="emergency-content">
                                <h3>Consultations & Visites à Domicile</h3>
                                <p>
                                    <strong>

                                        <a target="_blank" class="honoraires-link"
                                            href="https://www.google.com/maps?ll=43.700763,7.260688&z=16&t=m&hl=fr-FR&gl=US&mapclient=embed&q=22+Rue+Gounod+06000+Nice">
                                            <span>
                                                <i class="bi bi-geo-alt me-1"></i>
                                            </span>
                                            <span>
                                                Cabinet (22 rue Gounod, Nice)</a>
                                        ou à domicile en
                                        urgence sur RDV
                                        </span>
                                        <br>
                                        <br>
                                        <i class="bi bi-clock me-1"></i>
                                        Horaires flexibles
                                    </strong>
                                <p>
                                    <strong>
                                        Lundi – Samedi : 7h30 – 21h
                                        <br>
                                        Dimanche : 10h – 17h
                                    </strong>
                                </p>
                                <p>
                                    <strong>
                                        <a target="_blank" class="honoraires-link"
                                            href="https://www.doctolib.fr/osteopathe/nice/damien-rainaut#pricing">
                                            <span>
                                                <i class="bi bi-arrow-right-square me-1">
                                                </i>
                                            </span>
                                            <span>
                                                RDV rapides en soirée et le week-end disponibles sur Doctolib
                                            </span>
                                        </a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
