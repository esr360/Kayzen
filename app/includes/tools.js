//=================================================================
// Tools
//=================================================================

//-----------------------------------------------------------------
// Styles Configuration
//-----------------------------------------------------------------

// Get breakpoint value
function breakpoint(media, value) {
	return window.matchMedia('(' + media + ':' + module['grid']['breakpoints'][value] + ')').matches;
}

// Create a global variable for base transition duration
window['baseTransition'] = module['base']['transition'].slice(0,-1) * 1000;
    
//-----------------------------------------------------------------

$(document).ready(function() {

//-----------------------------------------------------------------
// Smooth Scroll
//-----------------------------------------------------------------

// set which elements should be exempt from the smooth scroll effect
var scrollExempt = [
    ':not([href*="modal"])'
]

$('a[href*=#]' + scrollExempt).click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name="' + this.hash.slice(1) +'"]');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1200);
            return false;
        }
    }
});

//-----------------------------------------------------------------
// Add Active Class
//-----------------------------------------------------------------

if(breakpoint('min-width', 'break-3')) {
    tiles = $(".inactive");
    $(window).bind("load scroll", function(d,h) { 
        tiles.each(function(i) {
            a = $(this).offset().top + $(this).height();
            b = $(window).scrollTop() + $(window).height();
            if (a < b) $(this).removeClass('inactive').addClass('active');
        });
    });
} else {
    $('.inactive').removeClass('inactive');
}

//-----------------------------------------------------------------
// Animated Numbers
//-----------------------------------------------------------------

stat = $('[id^="stat-"]');

var statsDone = true;

$(window).on("load scroll", function(d,h) {
    stat.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        statSep = $.animateNumber.numberStepFactories.separator(',');
        attrStat = $(this).attr('data-val');
        if (a < b) {
            $(this).animateNumber({ 
                    number: attrStat,
                    numberStep: statSep
                }, 2000
            );
        }
    });
});

//-----------------------------------------------------------------
// Scroll Effects
//-----------------------------------------------------------------

window.sr = new scrollReveal();

//-----------------------------------------------------------------
// Parallax Scroll
//-----------------------------------------------------------------

$.stellar({
    horizontalScrolling:false
});

//-----------------------------------------------------------------
// Pointer Events Polyfill
//-----------------------------------------------------------------

PointerEventsPolyfill.initialize({});

//-----------------------------------------------------------------
// Data Background Images
//-----------------------------------------------------------------

$('[data-bg]').each(function() {
    var bg = $(this).attr('data-bg');
    $(this)
        .addClass('relative')
        .prepend('<div class="bg-img" style="background:' + bg + '"></div>')
});
    
//-----------------------------------------------------------------

}); // document.ready