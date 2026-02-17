document.addEventListener('DOMContentLoaded', function () {
    const tabsContainer = document.querySelector('#specialty-tabs');
    if (!tabsContainer) return;

    const tabs = document.querySelectorAll('#specialty-tabs .department-tab');
    if (tabs.length === 0) return;

    const tabPanes = document.querySelectorAll('.tab-pane');

    let interval = null;
    let isHovering = false;
    let isSectionVisible = true;

    function activateTab(tabElement) {
        if (!tabElement) return;

        tabs.forEach(t => {
            t.classList.remove('active');
            t.setAttribute('aria-selected', 'false');
        });
        tabPanes.forEach(p => p.classList.remove('show', 'active'));

        tabElement.classList.add('active');
        tabElement.setAttribute('aria-selected', 'true');

        const targetId = tabElement.getAttribute('href');
        const targetPane = document.querySelector(targetId);
        if (targetPane) {
            targetPane.classList.add('show', 'active');
        }
    }

    function showNextTab() {
        if (isHovering || !isSectionVisible) return;

        const activeTab = tabsContainer.querySelector('.nav-link.active') || tabs[0];
        if (!activeTab) return;

        const currentIndex = Array.from(tabs).indexOf(activeTab);
        const nextIndex = (currentIndex + 1) % tabs.length;
        activateTab(tabs[nextIndex]);
    }

    function startAutoScroll() {
        if (interval) clearInterval(interval);
        interval = setInterval(showNextTab, 5000);
    }

    function stopAutoScroll() {
        if (interval) {
            clearInterval(interval);
            interval = null;
        }
    }

    activateTab(tabs[0]);
    startAutoScroll();

    const hoverElements = [...tabs, ...tabPanes];
    hoverElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            isHovering = true;
            stopAutoScroll();
        });
        el.addEventListener('mouseleave', () => {
            isHovering = false;
            if (isSectionVisible) {
                startAutoScroll();
            }
        });
    });

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            stopAutoScroll();
            setTimeout(() => {
                if (!isHovering && isSectionVisible) {
                    startAutoScroll();
                }
            }, 10000);
        });
    });

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    const wasVisible = isSectionVisible;
                    isSectionVisible = entry.isIntersecting;

                    if (isSectionVisible !== wasVisible) {
                        if (isSectionVisible) {
                            if (!isHovering) {
                                startAutoScroll();
                            }
                        } else {
                            stopAutoScroll();
                        }
                    }
                });
            }, {
                threshold: 0.05
            }
        );

        observer.observe(tabsContainer);
    }
});
