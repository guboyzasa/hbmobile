// window._ = require('lodash');
// window.Popper = require('popper.js').default;

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    let $ = require('jquery');
    window.$ = window.jQuery = $;
    let jQueryBridget = require('jquery-bridget');
    let Isotope = require('isotope-layout');
    let Typed = require('typed.js');

    // Make Typed and isotope a jQuery plugin
    jQueryBridget('typed', Typed, $);
    jQueryBridget('isotope', Isotope, $);

    require('jquery-ui-bundle');
    require('./libs/jquery.ui.slider-rtl');

    window.Swiper = require('swiper');
    require('bootstrap');
    require('owl.carousel');
    require('@fancyapps/fancybox');
    require('classie');
    require('imagesloaded');
    require('jquery-slimscroll');
    require('starrr/dist/starrr');

    require('./libs/overlay');
} catch (e) {
}

/**
 * This variable will be used by the libs to make them support RTL.
 *
 * @type {boolean}
 */
window.isRTL = document.dir === "rtl";