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

document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#specialty-tabs .department-tab');
    const tabPanes = document.querySelectorAll('.tab-pane');
    let currentIndex = 0;
    let interval;
    let isHovering = false;

    // Fonction pour changer de tab
    function activateTab(index) {
        // Retirer les classes actives de tous les tabs
        tabs.forEach(tab => {
            tab.classList.remove('active');
            tab.setAttribute('aria-selected', 'false');
        });

        // Retirer les classes actives de tous les panneaux
        tabPanes.forEach(pane => {
            pane.classList.remove('show', 'active');
        });

        // Activer le tab sélectionné
        tabs[index].classList.add('active');
        tabs[index].setAttribute('aria-selected', 'true');

        // Activer le panneau correspondant
        const targetId = tabs[index].getAttribute('href');
        const targetPane = document.querySelector(targetId);
        if (targetPane) {
            targetPane.classList.add('show', 'active');
        }

        currentIndex = index;
    }

    function showNextTab() {
        if (isHovering) return;

        // Passer au suivant
        const nextIndex = (currentIndex + 1) % tabs.length;

        // Activer le nouveau tab
        activateTab(nextIndex);
    }

    // Initialiser - s'assurer que le premier tab est actif
    activateTab(0);

    // Démarrer le défilement
    interval = setInterval(showNextTab, 5000);

    // Gérer le survol sur chaque tab individuellement
    tabs.forEach((tab, index) => {
        // Arrêter le défilement quand la souris entre sur un tab
        tab.addEventListener('mouseenter', () => {
            isHovering = true;
            clearInterval(interval);
        });

        // Reprendre le défilement quand la souris quitte le tab
        tab.addEventListener('mouseleave', () => {
            isHovering = false;
            interval = setInterval(showNextTab, 5000);
        });

        // Gérer les clics manuels sur les tabs
        tab.addEventListener('click', function (e) {
            e.preventDefault();
            activateTab(index);

            // Arrêter et redémarrer le défilement après un clic manuel
            clearInterval(interval);
            setTimeout(() => {
                if (!isHovering) {
                    interval = setInterval(showNextTab, 5000);
                }
            }, 10000);
        });
    });

    // Optionnel : Arrêter aussi quand on survole le contenu du tab actif
    tabPanes.forEach(pane => {
        pane.addEventListener('mouseenter', () => {
            isHovering = true;
            clearInterval(interval);
        });

        pane.addEventListener('mouseleave', () => {
            isHovering = false;
            interval = setInterval(showNextTab, 5000);
        });
    });
});
