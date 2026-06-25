import './swiper.js';

import { initTimeline } from './timeline';
import { initHeader } from './header';
import { initScroll } from './scroll';

import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()

document.addEventListener('DOMContentLoaded', () => {

    initTimeline();
    initHeader();
    initScroll();

});