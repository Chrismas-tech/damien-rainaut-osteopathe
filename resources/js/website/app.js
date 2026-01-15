/*---------------------------------------------------------------------*/

/* JQuery */
/* import JQuery from 'jquery'
window.JQuery = JQuery */

/* Test if JQuery is working */
/* if (window.jQuery) {
    console.log('jQuery is loaded!')
} else {
    console.log('jQuery is not loaded.')
} */

/*---------------------------------------------------------------------*/

/* SweetAlert */
/* Do No Delete this otherwise to alert anymore */
import swal from 'sweetalert2'
window.Swal = swal

/*---------------------------------------------------------------------*/

/* Splide Js Google Review */
import Splide from '@splidejs/splide'

if (document.getElementById('splide-google-reviews')) {
    new Splide('#splide-google-reviews', {
        type: 'loop',
        perPage: 3,
        gap: '20px',
        autoplay: true,
        pauseOnHover: false,
        interval: 4000,
        breakpoints: {
            1200: {
                perPage: 1,
                gap: '1rem'
            },
            640: {
                perPage: 1,
                gap: 0
            }
        }
    }).mount()
}

/*---------------------------------------------------------------------*/

/* Splide Slider */

if (document.getElementById('splide-slider')) {
    new Splide('#splide-slider', {
        type: 'loop',
        perPage: 6,
        gap: '20px',
        autoplay: true,
        pauseOnHover: false,
        interval: 4000,
        breakpoints: {
            1200: {
                perPage: 1,
                gap: '1rem'
            },
            640: {
                perPage: 1,
                gap: 0
            }
        }
    }).mount()
}

/*---------------------------------------------------------------------*/

/* Bootstrap-bundle-min-js */

import "bootstrap/dist/js/bootstrap.bundle.min.js";

/*---------------------------------------------------------------------*/

/* PureCounter */
import PureCounter from "@srexi/purecounterjs";
new PureCounter();

/*---------------------------------------------------------------------*/
/* Swiper */
/* import Swiper, { Navigation, Pagination, Autoplay } from "swiper";

const swiper = new Swiper(".my-swiper", {
    modules: [Navigation, Pagination, Autoplay],
    slidesPerView: 1,
    loop: true,
    autoplay: { delay: 4000 },
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
    pagination: { el: ".swiper-pagination", clickable: true }
}); */

/*---------------------------------------------------------------------*/

/* Main JS */

import "./main"

/*---------------------------------------------------------------------*/

/* AOS */
import AOS from "aos";

// Initialisation AOS après que tout soit prêt
/**
 * Animation on scroll function and init
 */
AOS.init({
    duration: 600,
    easing: 'ease-in-out',
    once: true,
    mirror: false
});
