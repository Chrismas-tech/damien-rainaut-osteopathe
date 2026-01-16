/*---------------------------------------------------------------------*/

/* import 'axios' */
import axios from 'axios'
window.axios = axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

/*---------------------------------------------------------------------*/

/* JQuery */
import JQuery from 'jquery'
window.JQuery = JQuery

/* Test if JQuery is working */
if (window.jQuery) {
    console.log('jQuery is loaded!')
} else {
    console.log('jQuery is not loaded.')
}

/*---------------------------------------------------------------------*/

/* SweetAlert */
/* Do No Delete this otherwise to alert anymore */
import Swal from 'sweetalert2'
window.Swal = Swal

/*---------------------------------------------------------------------*/

import './apexcharts'
import './bootstrap'
import './simplebar'
import './theme'

import { copyToClipboard } from './copyToClipboard'
window.copyToClipboard = copyToClipboard

/*---------------------------------------------------------------------*/

/* Import Splide Js */
import Splide from '@splidejs/splide'

/* Splide Js Google Review */
if (document.getElementById('splide-google-reviews')) {
    new Splide('#splide-google-reviews', {
        type: 'loop',
        perPage: 3,
        gap: '20px',
        autoplay: true,
        pauseOnHover: false,
        interval: 4000,
        breakpoints: {
            1200: { perPage: 1, gap: '1rem' },
            640: { perPage: 1, gap: 0 }
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
            1200: { perPage: 1, gap: '1rem' },
            640: { perPage: 1, gap: 0 }
        }
    }).mount()
}
