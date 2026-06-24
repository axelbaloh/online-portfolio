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
     * Stoppe toutes les vidéos YouTube
     * lorsqu'on change de slide.
     */
    function stopYoutubeVideos(swiper) {
        swiper.el.querySelectorAll('iframe').forEach(frame => {
            const src = frame.src;
            frame.src = src;
        });
    }

    /**
     * ================= FRONT SWIPER =================
     */
    new Swiper('.frontSwiper', {
        ...baseConfig,

        navigation: {
            nextEl: '.front-next',
            prevEl: '.front-prev',
        },

        on: {
            slideChangeTransitionStart(swiper) {
                stopYoutubeVideos(swiper);
            }
        }
    });

    /**
     * ================= BACK SWIPER =================
     */
    new Swiper('.backSwiper', {
        ...baseConfig,

        navigation: {
            nextEl: '.back-next',
            prevEl: '.back-prev',
        },

        on: {
            slideChangeTransitionStart(swiper) {
                stopYoutubeVideos(swiper);
            }
        }
    });

});