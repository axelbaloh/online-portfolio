export function initHeader() {

    const body = document.querySelector('body');
    const header = document.getElementById('main-header');

    if (!body || !header) return;

    // Si pas home → on ne fait rien
    if (body.dataset.page !== 'home') return;

    const hero = document.querySelector('#hero');
    if (!hero) return;

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (!entry.isIntersecting) {

                header.classList.remove('-translate-y-full', 'opacity-0');
                header.classList.add('translate-y-0', 'opacity-100');

            } else {

                header.classList.add('-translate-y-full', 'opacity-0');
                header.classList.remove('translate-y-0', 'opacity-100');
            }

        });

    }, {
        threshold: 0.2
    });

    observer.observe(hero);
}