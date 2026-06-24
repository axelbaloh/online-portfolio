import './swiper.js';

import { initTimeline } from './timeline';
import { initHeader } from './header';
import { initScroll } from './scroll';

document.addEventListener('DOMContentLoaded', () => {

    initTimeline();
    initHeader();
    initScroll();

});