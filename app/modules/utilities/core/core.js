/**
 *
 * Tools
 * @description general JS tools, helpers and plugin inits
 *
 */

//-----------------------------------------------------------------
// Styles Configuration
//-----------------------------------------------------------------

// Get breakpoint value
function breakpoint(media, value) {
	return window.matchMedia('(' + media + ':' + _module['grid']['breakpoints'][value] + ')').matches;
}

// Create a global variable for base transition duration
window['baseTransition'] = _module['base']['transition'].slice(0,-1) * 1000;
    
//-----------------------------------------------------------------

//-----------------------------------------------------------------
// Data Background Images
//-----------------------------------------------------------------

function dataBG() {
    $('[data-bg]').each(function() {
        var bg = $(this).attr('data-bg');
        $(this).prepend('<div class="bg-img" style="background-image: url(' + bg + ')"></div>')
    });
}

$(document).ready(function() {

//-----------------------------------------------------------------
// Smooth Scroll
//-----------------------------------------------------------------

$('a[href*=#]:not([href*="modal"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name="' + this.hash.slice(1) +'"]');
           if (target.length) {
             $('html,body').animate({
                 // change this number as desired
                 scrollTop: target.offset().top - 80
            }, 1200);
            return false;
        }
    }
});

//-----------------------------------------------------------------
// Set Iframe Height
//-----------------------------------------------------------------

$('.auto-resizable-iframe').each(function() {
    var height = $(this).attr('data-iframe-height');
    $(this).find('> div').css({
        paddingBottom : height
    })
});

//-----------------------------------------------------------------
// Animated Numbers
//-----------------------------------------------------------------

var statsDone = true;

$(window).on("load scroll", function(d,h) {
    $('[id^="stat-"]').each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        statSep = $.animateNumber.numberStepFactories.separator(',');
        attrStat = $(this).attr('data-val');
        if (a < b) {
            $(this).animateNumber({ 
                    number : attrStat,
                    numberStep : statSep
                }, 2000
            );
        }
    });
});

//-----------------------------------------------------------------
// Masonry Grid
//-----------------------------------------------------------------

$(window).bind("load resize", function() {
    
    var $break = (_module['grid']['options']['col-break']).replace(/[^-\d\.]/g, '');
        
    $('.js-masonry').each(function() {
        if (($(document).width()) < $break) {
            $(this).masonry('destroy');
        } else {
            $(this).masonry();
        }
    });

});

//-----------------------------------------------------------------
// Owl Carousel Init
//-----------------------------------------------------------------

$('.carousel').each(function() {
    $(this).addClass('owl-carousel');
    $(this).owlCarousel();
});

//-----------------------------------------------------------------
// Data Background Images
//-----------------------------------------------------------------

dataBG();

//-----------------------------------------------------------------
// Parallax Init
//-----------------------------------------------------------------

$.stellar({
    horizontalScrolling : false
});

//-----------------------------------------------------------------
// Magnific Popup Init
//-----------------------------------------------------------------

$('[rel="lightbox"]').magnificPopup({
    type : 'image'
});

$('.lightbox-gallery').each(function() {
    $(this).magnificPopup({
        delegate : 'a',
        type : 'image',
        gallery: {
            enabled : true
        }
    });
});
    
//-----------------------------------------------------------------

}); // document.ready