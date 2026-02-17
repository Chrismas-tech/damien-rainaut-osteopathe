@extends('website.layouts.base-website')

@section('title')
    @if (\App\Models\Website::getSettings()->lang === 'fr')
        Crédits
    @elseif (\App\Models\Website::getSettings()->lang === 'en')
        Credits
    @elseif (\App\Models\Website::getSettings()->lang === 'de')
        Impressum / Credits
    @elseif (\App\Models\Website::getSettings()->lang === 'it')
        Crediti
    @endif
@endsection

@section('content')
    <main class="main">
        @include('website.layouts.page-title')

        <section id="call-to-action" class="call-to-action section light-background">
            <div class="container">
                @if (\App\Models\Website::getSettings()->lang === 'fr')
                    <h3 class="heading-title">Les images suivantes ont été utilisées pour créer ce site web :</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'en')
                    <h3 class="heading-title">The following images were used to create this website:</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'de')
                    <h3 class="heading-title">Die folgenden Bilder wurden zur Erstellung dieser Website verwendet:</h3>
                @elseif (\App\Models\Website::getSettings()->lang === 'it')
                    <h3 class="heading-title">Le seguenti immagini sono state utilizzate per creare questo sito web:</h3>
                @endif

                <div>
                    <a
                        href="https://fr.freepik.com/photos-gratuite/therapeute-osteopathe-masculin-verifiant-colonne-vertebrale-superieure-du-patient_12346989.htm">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Image n°1 - Freepik
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Image #1 - Freepik
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Bild Nr. 1 - Freepik
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Immagine n°1 - Freepik
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/oreille" title="oreille icônes">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Oreille icônes créées par deemakdaksina - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Ear icons created by deemakdaksina - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Ohr-Icons erstellt von deemakdaksina - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Icone orecchio create da deemakdaksina - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/vertebre" title="vertébré icônes">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Vertébré icônes créées par Freepik - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Vertebra icons created by Freepik - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Wirbelsäulen-Icons erstellt von Freepik - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Icone vertebre create da Freepik - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/douleur-articulaire"
                        title="douleur articulaire icônes">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Douleur articulaire icônes créées par Prosymbols Premium - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Joint pain icons created by Prosymbols Premium - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Gelenkschmerz-Icons erstellt von Prosymbols Premium - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Icone dolore articolare create da Prosymbols Premium - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/poumon" title="poumon icônes">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Poumon icônes créées par Kirill Kazachek - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Lung icons created by Kirill Kazachek - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Lungen-Icons erstellt von Kirill Kazachek - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Icone polmone create da Kirill Kazachek - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/digestion" title="digestion icônes">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Digestion icônes créées par Culmbio - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Digestion icons created by Culmbio - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Verdauungs-Icons erstellt von Culmbio - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Icone digestione create da Culmbio - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/femme" title="femme icônes">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Femme icônes créées par Freepik - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Woman icons created by Freepik - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Frauen-Icons erstellt von Freepik - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Icone donna create da Freepik - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/coeur" title="cœur icônes">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Cœur icônes créées par Freepik - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Heart icons created by Freepik - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Herz-Icons erstellt von Freepik - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Icone cuore create da Freepik - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/cerveau" title="cerveau icônes">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Cerveau icônes créées par PIXARTIST - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Brain icons created by PIXARTIST - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Gehirn-Icons erstellt von PIXARTIST - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Icone cervello create da PIXARTIST - Flaticon
                        @endif
                    </a>
                </div>

                <div>
                    <a href="https://www.flaticon.com/fr/icones-gratuites/goutte-deau" title="goutte d'eau icônes">
                        @if (\App\Models\Website::getSettings()->lang === 'fr')
                            Goutte d'eau icônes créées par Adury5711 - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'en')
                            Water drop icons created by Adury5711 - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'de')
                            Wassertropfen-Icons erstellt von Adury5711 - Flaticon
                        @elseif (\App\Models\Website::getSettings()->lang === 'it')
                            Icone goccia d'acqua create da Adury5711 - Flaticon
                        @endif
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
