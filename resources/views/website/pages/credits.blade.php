@extends('website.layouts.base-website')
@section('title', 'Crédits')
@section('content')
    <main class="main">
        @include('website.layouts.page-title')
        <section id="call-to-action" class="call-to-action section light-background">
            <div class="container">
                <h2 class="heading-title">Les images suivantes ont été utilisées pour créer ce site web :</h2>
                <div>
                    <a
                        href="https://fr.freepik.com/photos-gratuite/therapeute-osteopathe-masculin-verifiant-colonne-vertebrale-superieure-du-patient_12346989.htm">
                        Image
                        n°1
                    </a>
                </div>
                <div>
                    <a
                        href="https://fr.freepik.com/photos-gratuite/patient-osteopathie-recevant-massage-traitement_20148567.htm#fromView=search&page=1&position=15&uuid=13532c98-c9fe-4a58-9642-7849075614b5&query=osteopathe">Image
                        n°2
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
