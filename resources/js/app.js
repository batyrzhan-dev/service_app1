import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const revealItems = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
    });

    revealItems.forEach((item) => observer.observe(item));

    const counters = document.querySelectorAll('[data-counter]');

    const animateCounter = (el) => {
        const target = Number(el.dataset.counter);
        const suffix = el.dataset.suffix || '';
        let current = 0;
        const step = Math.max(1, Math.ceil(target / 40));

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            el.textContent = current + suffix;
        }, 30);
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5,
    });

    counters.forEach((counter) => counterObserver.observe(counter));

    const scrollTopBtn = document.getElementById('scrollTopBtn');

    if (scrollTopBtn) {
        const toggleScrollBtn = () => {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
                scrollTopBtn.classList.add('opacity-100', 'translate-y-0');
            } else {
                scrollTopBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
                scrollTopBtn.classList.remove('opacity-100', 'translate-y-0');
            }
        };

        window.addEventListener('scroll', toggleScrollBtn);
        toggleScrollBtn();

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth',
            });
        });
    }
});