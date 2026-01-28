 <!-- 1. Le script API (async est OK) -->
 <script src="https://open.spotify.com/embed/iframe-api/v1" async></script>

 <!-- 2. Conteneur vide -->
 <div id="embed-iframe" class="d-none" style="width: 100%; height: 152px; border-radius: 12px; overflow: hidden;"></div>

 <!-- 3. Bouton (tu peux le cacher ou le garder) -->
 <button class="d-none" id="spotify-play-btn">Play</button>

 <script>
     let spotifyController = null;
     let isReady = false;
     let hasTriggeredPlay = false;

     window.onSpotifyIframeApiReady = (IFrameAPI) => {
         const element = document.getElementById('embed-iframe');

         const options = {
             uri: 'spotify:track:5YIdiGfPTmhGQv9C7jPd3e',
             width: '0%',
             height: 152,
         };

         const callback = (EmbedController) => {
             spotifyController = EmbedController;

             spotifyController.addListener('ready', () => {
                 console.log('Spotify Embed READY !');
                 isReady = true;
             });
         };

         IFrameAPI.createController(element, options, callback);
     };

     // Déclenche le "clic" / play dès le premier scroll significatif
     document.addEventListener('DOMContentLoaded', () => {
         const scrollThreshold = 100;

         const onScroll = () => {
             if (hasTriggeredPlay) return;

             if (window.scrollY > scrollThreshold && isReady && spotifyController) {
                 hasTriggeredPlay = true;
                 spotifyController.togglePlay();
             }
         };

         window.addEventListener('scroll', onScroll, {
             passive: true
         });
         const removeScroll = () => {
             if (hasTriggeredPlay) {
                 window.removeEventListener('scroll', onScroll);
             }
         };
         window.addEventListener('scroll', removeScroll, {
             once: true
         });
     });
 </script>
