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
        perPage: 4,
        gap: '20px',
        autoplay: true,
        pauseOnHover: true,
        interval: 5000,
        breakpoints: {
            1500: {
                perPage: 3,
                gap: '1rem'
            },
            1200: {
                perPage: 2,
                gap: '1rem'
            },
            850: {
                perPage: 1,
                gap: '1rem'
            },
            640: {
                perPage: 1,
                gap: '5rem'
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
import Swiper from 'swiper/bundle';
window.Swiper = Swiper;

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
    duration: 400,
    easing: 'ease-in-out',
    once: true,
    mirror: false
});


/*---------------------------------------------------------------------*/

import './tabs'
