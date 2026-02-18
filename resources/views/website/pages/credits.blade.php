@extends('website.layouts.base-website')

@section('title')
    @if (session('locale') === 'fr')
        Crédits
    @elseif (session('locale') === 'en')
        Credits
    @elseif (session('locale') === 'de')
        Impressum / Credits
    @elseif (session('locale') === 'it')
        Crediti
    @elseif (session('locale') === 'es')
        Créditos
    @endif
@endsection

@section('content')
    <main class="main">
        @include('website.layouts.page-title')

        <section id="call-to-action" class="call-to-action section light-background">
            <div class="container">
                @if (session('locale') === 'fr')
                    <h3 class="heading-title">Les images suivantes ont été utilisées pour créer ce site web :</h3>
                @elseif (session('locale') === 'en')
                    <h3 class="heading-title">The following images were used to create this website:</h3>
                @elseif (session('locale') === 'de')
                    <h3 class="heading-title">Die folgenden Bilder wurden zur Erstellung dieser Website verwendet:</h3>
                @elseif (session('locale') === 'it')
                    <h3 class="heading-title">Le seguenti immagini sono state utilizzate per creare questo sito web:</h3>
                @elseif (session('locale') === 'es')
                    <h3 class="heading-title">Las siguientes imágenes se utilizaron para crear este sitio web:</h3>
                @endif

                <div>
                    <a
                        href="https://fr.freepik.com/photos-gratuite/therapeute-osteopathe-masculin-verifiant-colonne-vertebrale-superieure-du-patient_12346989.htm">
                        @if (session('locale') === 'fr')
                            Image n°1 - Freepik
                        @elseif (session('locale') === 'en')
                            Image #1 - Freepik
                        @elseif (session('locale') === 'de')
                            Bild Nr. 1 - Freepik
                        @elseif (session('locale') === 'it')
                            Immagine n°1 - Freepik
                        @elseif (session('locale') === 'es')
                            Imagen n°1 - Freepik
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/oreille" title="oreille icônes">
                        @if (session('locale') === 'fr')
                            Oreille icônes créées par deemakdaksina - Flaticon
                        @elseif (session('locale') === 'en')
                            Ear icons created by deemakdaksina - Flaticon
                        @elseif (session('locale') === 'de')
                            Ohr-Icons erstellt von deemakdaksina - Flaticon
                        @elseif (session('locale') === 'it')
                            Icone orecchio create da deemakdaksina - Flaticon
                        @elseif (session('locale') === 'es')
                            Iconos de oreja creados por deemakdaksina - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/vertebre" title="vertébré icônes">
                        @if (session('locale') === 'fr')
                            Vertébré icônes créées par Freepik - Flaticon
                        @elseif (session('locale') === 'en')
                            Vertebra icons created by Freepik - Flaticon
                        @elseif (session('locale') === 'de')
                            Wirbelsäulen-Icons erstellt von Freepik - Flaticon
                        @elseif (session('locale') === 'it')
                            Icone vertebre create da Freepik - Flaticon
                        @elseif (session('locale') === 'es')
                            Iconos de vértebra creados por Freepik - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/douleur-articulaire"
                        title="douleur articulaire icônes">
                        @if (session('locale') === 'fr')
                            Douleur articulaire icônes créées par Prosymbols Premium - Flaticon
                        @elseif (session('locale') === 'en')
                            Joint pain icons created by Prosymbols Premium - Flaticon
                        @elseif (session('locale') === 'de')
                            Gelenkschmerz-Icons erstellt von Prosymbols Premium - Flaticon
                        @elseif (session('locale') === 'it')
                            Icone dolore articolare create da Prosymbols Premium - Flaticon
                        @elseif (session('locale') === 'es')
                            Iconos de dolor articular creados por Prosymbols Premium - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/poumon" title="poumon icônes">
                        @if (session('locale') === 'fr')
                            Poumon icônes créées par Kirill Kazachek - Flaticon
                        @elseif (session('locale') === 'en')
                            Lung icons created by Kirill Kazachek - Flaticon
                        @elseif (session('locale') === 'de')
                            Lungen-Icons erstellt von Kirill Kazachek - Flaticon
                        @elseif (session('locale') === 'it')
                            Icone polmone create da Kirill Kazachek - Flaticon
                        @elseif (session('locale') === 'es')
                            Iconos de pulmón creados por Kirill Kazachek - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/digestion" title="digestion icônes">
                        @if (session('locale') === 'fr')
                            Digestion icônes créées par Culmbio - Flaticon
                        @elseif (session('locale') === 'en')
                            Digestion icons created by Culmbio - Flaticon
                        @elseif (session('locale') === 'de')
                            Verdauungs-Icons erstellt von Culmbio - Flaticon
                        @elseif (session('locale') === 'it')
                            Icone digestione create da Culmbio - Flaticon
                        @elseif (session('locale') === 'es')
                            Iconos de digestión creados por Culmbio - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/femme" title="femme icônes">
                        @if (session('locale') === 'fr')
                            Femme icônes créées par Freepik - Flaticon
                        @elseif (session('locale') === 'en')
                            Woman icons created by Freepik - Flaticon
                        @elseif (session('locale') === 'de')
                            Frauen-Icons erstellt von Freepik - Flaticon
                        @elseif (session('locale') === 'it')
                            Icone donna create da Freepik - Flaticon
                        @elseif (session('locale') === 'es')
                            Iconos de mujer creados por Freepik - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/coeur" title="cœur icônes">
                        @if (session('locale') === 'fr')
                            Cœur icônes créées par Freepik - Flaticon
                        @elseif (session('locale') === 'en')
                            Heart icons created by Freepik - Flaticon
                        @elseif (session('locale') === 'de')
                            Herz-Icons erstellt von Freepik - Flaticon
                        @elseif (session('locale') === 'it')
                            Icone cuore create da Freepik - Flaticon
                        @elseif (session('locale') === 'es')
                            Iconos de corazón creados por Freepik - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/cerveau" title="cerveau icônes">
                        @if (session('locale') === 'fr')
                            Cerveau icônes créées par PIXARTIST - Flaticon
                        @elseif (session('locale') === 'en')
                            Brain icons created by PIXARTIST - Flaticon
                        @elseif (session('locale') === 'de')
                            Gehirn-Icons erstellt von PIXARTIST - Flaticon
                        @elseif (session('locale') === 'it')
                            Icone cervello create da PIXARTIST - Flaticon
                        @elseif (session('locale') === 'es')
                            Iconos de cerebro creados por PIXARTIST - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/goutte-deau" title="goutte d'eau icônes">
                        @if (session('locale') === 'fr')
                            Goutte d'eau icônes créées par Adury5711 - Flaticon
                        @elseif (session('locale') === 'en')
                            Water drop icons created by Adury5711 - Flaticon
                        @elseif (session('locale') === 'de')
                            Wassertropfen-Icons erstellt von Adury5711 - Flaticon
                        @elseif (session('locale') === 'it')
                            Icone goccia d'acqua create da Adury5711 - Flaticon
                        @elseif (session('locale') === 'es')
                            Iconos de gota de agua creados por Adury5711 - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a
                        href="https://www.flaticon.com/fr/icone-gratuite/italie_9906483?term=drapeau+italien&page=1&position=1&origin=tag&related_id=9906483">
                        @if (session('locale') === 'fr')
                            Drapeau Italien
                        @elseif (session('locale') === 'en')
                            Italian Flag
                        @elseif (session('locale') === 'de')
                            Italienische Flagge
                        @elseif (session('locale') === 'it')
                            Bandiera Italiana
                        @elseif (session('locale') === 'es')
                            Bandera Italiana
                        @endif
                    </a>
                </div>

                <div>
                    <a
                        href="https://www.flaticon.com/fr/icone-gratuite/france_197560?term=drapeau+fran%C3%A7ais&page=1&position=2&origin=search&related_id=197560">
                        @if (session('locale') === 'fr')
                            Drapeau Français
                        @elseif (session('locale') === 'en')
                            French Flag
                        @elseif (session('locale') === 'de')
                            Französische Flagge
                        @elseif (session('locale') === 'it')
                            Bandiera Francese
                        @elseif (session('locale') === 'es')
                            Bandera Francesa
                        @endif
                    </a>
                </div>

                <div>
                    <a
                        href="https://www.flaticon.com/fr/icone-gratuite/royaume-uni_197374?term=drapeau+anglais&page=1&position=2&origin=search&related_id=197374">
                        @if (session('locale') === 'fr')
                            Drapeau Anglais
                        @elseif (session('locale') === 'en')
                            English Flag
                        @elseif (session('locale') === 'de')
                            Englische Flagge
                        @elseif (session('locale') === 'it')
                            Bandiera Inglese
                        @elseif (session('locale') === 'es')
                            Bandera Inglesa
                        @endif
                    </a>
                </div>

                <div>
                    <a
                        href="https://www.flaticon.com/fr/icone-gratuite/allemand_4855806?term=drapeau+allemand&page=1&position=1&origin=search&related_id=4855806">
                        @if (session('locale') === 'fr')
                            Drapeau Allemand
                        @elseif (session('locale') === 'en')
                            German Flag
                        @elseif (session('locale') === 'de')
                            Deutsche Flagge
                        @elseif (session('locale') === 'it')
                            Bandiera Tedesca
                        @elseif (session('locale') === 'es')
                            Bandera Alemana
                        @endif
                    </a>
                </div>

                <div>
                    <a
                        href="https://www.flaticon.com/fr/icone-gratuite/espagne_8363059?term=drapeau+espagnol&page=1&position=12&origin=search&related_id=8363059">
                        @if (session('locale') === 'fr')
                            Drapeau Espagnol
                        @elseif (session('locale') === 'en')
                            Spanish Flag
                        @elseif (session('locale') === 'de')
                            Spanische Flagge
                        @elseif (session('locale') === 'it')
                            Bandiera Spagnola
                        @elseif (session('locale') === 'es')
                            Bandera Española
                        @endif
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
