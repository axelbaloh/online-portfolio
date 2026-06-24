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
     * Stop + reset toutes les vidéos d’un swiper
     */
    function resetVideos(containerSelector) {
        const container = document.querySelector(containerSelector);

        if (!container) return;

        const videos = container.querySelectorAll('video');

        videos.forEach(video => {
            video.pause();
            video.currentTime = 0;
        });
    }

    /**
     * Stop toutes les vidéos (utile avant lecture active)
     */
    function pauseAllVideos(containerSelector) {
        const container = document.querySelector(containerSelector);

        if (!container) return;

        container.querySelectorAll('video').forEach(video => {
            video.pause();
        });
    }

    /**
     * Lecture vidéo active uniquement
     */
    function playActiveVideo(swiper) {
        const activeSlide = swiper.slides[swiper.activeIndex];

        if (!activeSlide) return;

        const video = activeSlide.querySelector('video');

        if (video) {
            video.play().catch(() => {
                // ignore autoplay policy errors
            });
        }
    }

    /**
     * FRONT SWIPER
     */
    const frontSwiper = new Swiper('.frontSwiper', {
        ...baseConfig,

        navigation: {
            nextEl: '.front-next',
            prevEl: '.front-prev',
        },

        on: {
            slideChangeTransitionStart() {
                resetVideos('.frontSwiper');
            },

            slideChangeTransitionEnd() {
                pauseAllVideos('.frontSwiper');
                playActiveVideo(this);
            }
        }
    });

    /**
     * BACK SWIPER
     */
    const backSwiper = new Swiper('.backSwiper', {
        ...baseConfig,

        navigation: {
            nextEl: '.back-next',
            prevEl: '.back-prev',
        },

        on: {
            slideChangeTransitionStart() {
                resetVideos('.backSwiper');
            },

            slideChangeTransitionEnd() {
                pauseAllVideos('.backSwiper');
                playActiveVideo(this);
            }
        }
    });
});