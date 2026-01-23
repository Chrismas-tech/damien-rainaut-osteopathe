<div class="container-fluid map-container" data-aos="fade-up" data-aos-delay="200">
    <div class="map-overlay"></div>
    <iframe src="{{ App\Models\Website::getSettings()->iframe_link_google_map_src }}" width="100%" height="500"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
