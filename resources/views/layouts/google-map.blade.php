<section class="google-map" id="google-map">
    <div class="row mb-4">
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            @if (session('locale') === 'fr')
                <h2>Où me trouver ?</h2>
                <p>22 rue Gounod à Nice</p>
            @elseif (session('locale') === 'en')
                <h2>Where to find me?</h2>
                <p>22 rue Gounod in Nice</p>
            @elseif (session('locale') === 'de')
                <h2>Wo finden Sie mich?</h2>
                <p>22 rue Gounod in Nizza</p>
            @elseif (session('locale') === 'it')
                <h2>Dove trovarmi?</h2>
                <p>22 rue Gounod a Nizza</p>
            @elseif (session('locale') === 'es')
                <h2>¿Dónde encontrarme?</h2>
                <p>22 rue Gounod en Niza</p>
            @endif
        </div>

        <div class="container-fluid map-container" data-aos="fade-up" data-aos-delay="200">
            <div class="map-overlay"></div>
            <iframe src="{{ App\Models\Website::getSettings()->iframe_link_google_map_src }}" width="100%"
                height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
