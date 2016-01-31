/**
 *
 * Tools
 * @description general JS tools, helpers and plugin inits
 *
 */

// Get breakpoint value
function breakpoint(media, value) {
	return window.matchMedia('(' + media + ':' + _module['grid']['breakpoints'][value] + ')').matches;
}

// Create a global variable for base transition duration
window['baseTransition'] = _module['base']['transition'].slice(0,-1) * 1000;

$(document).ready(function() {

    // Smooth Scroll
    $('a[href*="#"]:not([href*="modal"])').smoothScroll();

    // Set Iframe Height
    $('.auto-resizable-iframe').iframeHeight();

    // Animated Numbers
    $('[id^="stat-"]').scrollStats();

    // Masonry Grid
    $('.js-masonry').masonryGrid();

    // Data Background Images
    $('[data-bg]').dataBg();

    // Parallax Init
    $.stellar({
        horizontalScrolling : false
    });

    // Owl Carousel Init
    $('.carousel').each(function() {
        $(this).addClass('owl-carousel');
        $(this).owlCarousel();
    });

    // Magnific Popup Init
    $('[rel="lightbox"]').magnificPopup({
        type : 'image'
    });

    // Magnific Popup Init
    $('.lightbox-gallery').each(function() {
        $(this).magnificPopup({
            delegate : 'a',
            type : 'image',
            gallery: {
                enabled : true
            }
        });
    });

}); // document.ready