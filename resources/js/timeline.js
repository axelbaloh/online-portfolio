export function initTimeline() {
    const items = document.querySelectorAll('.timeline-item');

    if (!items.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.remove(
                    'opacity-0',
                    'translate-x-20',
                    '-translate-x-20'
                );

                entry.target.classList.add(
                    'opacity-100',
                    'translate-x-0'
                );

                observer.unobserve(entry.target);
            }

        });
    }, {
        threshold: 0.2
    });

    items.forEach(item => observer.observe(item));
}