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
    };

    function resetVideos(containerSelector) {
        const container = document.querySelector(containerSelector);

        if (!container) return;

        const videos = container.querySelectorAll('video');

        videos.forEach(video => {
            video.pause();
            video.currentTime = 0;
        });
    }

    // FRONT SWIPER
    const frontSwiper = new Swiper('.frontSwiper', {
        ...baseConfig,
        navigation: {
            nextEl: '.front-next',
            prevEl: '.front-prev',
        },

        on: {
            slideChangeTransitionStart: function () {
                resetVideos('.frontSwiper');
            }
        }
    });

    // BACK SWIPER
    const backSwiper = new Swiper('.backSwiper', {
        ...baseConfig,
        navigation: {
            nextEl: '.back-next',
            prevEl: '.back-prev',
        },

        on: {
            slideChangeTransitionStart: function () {
                resetVideos('.backSwiper');
            }
        }
    });

});