document.addEventListener('DOMContentLoaded', function () {
    const tabsContainer = document.querySelector('#specialty-tabs');
    const tabs = document.querySelectorAll('#specialty-tabs .department-tab');
    const tabPanes = document.querySelectorAll('.tab-pane');
    let interval;
    let progressInterval;
    let isHovering = false;

    // Ajouter une progressbar vide dans chaque tab (on l'affichera seulement pour l'actif)
    tabs.forEach(tab => {
        const progressContainer = document.createElement('div');
        progressContainer.className = 'tab-progress mt-1';
        progressContainer.style.height = '3px';
        progressContainer.style.backgroundColor = 'transparent';
        progressContainer.style.borderRadius = '2px';
        progressContainer.style.overflow = 'hidden';

        const progressBar = document.createElement('div');
        progressBar.className = 'progress-fill bg-primary';
        progressBar.style.width = '0%';
        progressBar.style.height = '100%';
        progressBar.style.transition = 'width 0.3s linear';

        progressContainer.appendChild(progressBar);
        tab.appendChild(progressContainer); // la barre est à l'intérieur du <a>
    });

    // Récupère la barre du tab actif
    function getActiveProgressBar() {
        const activeTab = tabsContainer.querySelector('.nav-link.active');
        if (!activeTab) return null;
        return activeTab.querySelector('.tab-progress .progress-fill');
    }

    // Active un tab et réinitialise la barre
    function activateTab(tabElement) {
        if (!tabElement) return;

        // Retirer active partout
        tabs.forEach(t => {
            t.classList.remove('active');
            t.setAttribute('aria-selected', 'false');
            // Réinitialiser la barre du tab
            const bar = t.querySelector('.progress-fill');
            if (bar) bar.style.width = '0%';
        });
        tabPanes.forEach(p => p.classList.remove('show', 'active'));

        // Activer le nouveau
        tabElement.classList.add('active');
        tabElement.setAttribute('aria-selected', 'true');

        const targetId = tabElement.getAttribute('href');
        const targetPane = document.querySelector(targetId);
        if (targetPane) {
            targetPane.classList.add('show', 'active');
        }

        // Lancer la progressbar sur le nouveau tab actif
        startProgress();
    }

    // Passe au tab suivant
    function showNextTab() {
        if (isHovering) return;

        const activeTab = tabsContainer.querySelector('.nav-link.active');
        if (!activeTab) return;

        let currentIndex = Array.from(tabs).indexOf(activeTab);
        const nextIndex = (currentIndex + 1) % tabs.length;

        activateTab(tabs[nextIndex]);
    }

    // Lance la progressbar (0 → 100% en 5s)
    function startProgress() {
        stopProgress(); // Sécurité

        const bar = getActiveProgressBar();
        if (!bar) return;

        let progress = 0;
        bar.style.width = '0%';

        progressInterval = setInterval(() => {
            if (!isHovering) {
                progress += 100 / (5000 / 50); // +2% toutes les 50ms
                if (progress >= 100) {
                    progress = 100;
                    clearInterval(progressInterval);
                    progressInterval = null;
                }
                bar.style.width = `${progress}%`;
            }
        }, 50);
    }

    // Arrête la progressbar
    function stopProgress() {
        if (progressInterval) {
            clearInterval(progressInterval);
            progressInterval = null;
        }
    }

    // Démarre le carrousel + progress
    function startAutoScroll() {
        if (interval) clearInterval(interval);
        interval = setInterval(showNextTab, 5000);
        startProgress();
    }

    // Arrête tout
    function stopAutoScroll() {
        if (interval) {
            clearInterval(interval);
            interval = null;
        }
        stopProgress();
    }

    // Init
    activateTab(tabs[0]);
    startAutoScroll();

    // Hover → pause tout
    const hoverElements = [...tabs, ...tabPanes];
    hoverElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            isHovering = true;
            stopAutoScroll();
        });

        el.addEventListener('mouseleave', () => {
            isHovering = false;
            startAutoScroll();
        });
    });

    // Clic manuel → pause 10s puis reprise
    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            stopAutoScroll();
            setTimeout(() => {
                if (!isHovering) {
                    startAutoScroll();
                }
            }, 10000);
        });
    });

    // Reprise quand onglet visible
    document.addEventListener('visibilitychange', () => {
        if (document.visibilityState === 'visible' && !isHovering) {
            startAutoScroll();
        } else {
            stopAutoScroll();
        }
    });
});
