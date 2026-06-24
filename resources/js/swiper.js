import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', () => {

    const baseConfig = {
        modules: [Navigation],

        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
        grabCursor: true,

        loop: true,
    };

    /**
     * 🎬 VIDEO CONTROLLER SIMPLE ET SAFE
     */
    class VideoController {
        stopAll(container) {
            container.querySelectorAll('video').forEach(video => {
                video.pause();
                try {
                    video.currentTime = 0;
                } catch (e) {}
            });
        }

        play(video, container) {
            if (!video) return;

            this.stopAll(container);

            video.muted = true;
            video.playsInline = true;

            try {
                video.currentTime = 0;
            } catch (e) {}

            const promise = video.play();
            if (promise) promise.catch(() => {});
        }

        pauseAll() {
            document.querySelectorAll('video').forEach(v => v.pause());
        }
    }

    const videoController = new VideoController();

    /**
     * ================= FRONT SWIPER =================
     */
    const frontSwiper = new Swiper('.frontSwiper', {
        ...baseConfig,

        navigation: {
            nextEl: '.front-next',
            prevEl: '.front-prev',
        },

        on: {
            init(swiper) {
                videoController.stopAll(swiper.el);
            },

            slideChangeTransitionStart(swiper) {
                videoController.stopAll(swiper.el);
            }

            // ❌ IMPORTANT : aucun autoplay ici
        }
    });

    /**
     * ================= BACK SWIPER =================
     */
    const backSwiper = new Swiper('.backSwiper', {
        ...baseConfig,

        navigation: {
            nextEl: '.back-next',
            prevEl: '.back-prev',
        },

        on: {
            init(swiper) {
                videoController.stopAll(swiper.el);
            },

            slideChangeTransitionStart(swiper) {
                videoController.stopAll(swiper.el);
            }

            // ❌ aucun autoplay ici
        }
    });

    /**
     * ▶️ LECTURE UNIQUEMENT AU CLIC UTILISATEUR
     */
    document.addEventListener('click', (e) => {
        const video = e.target.closest('video');
        if (!video) return;

        const swiperEl = video.closest('.swiper');
        if (!swiperEl) return;

        const swiper = swiperEl.swiper;
        if (!swiper) return;

        videoController.play(video, swiper.el);
    });

    /**
     * 🧯 sécurité onglet caché
     */
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            videoController.pauseAll();
        }
    });

});