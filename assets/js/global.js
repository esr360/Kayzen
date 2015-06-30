
/* Global Scripts
================================================================ */

$(document).ready(function() {

//-----------------------------------------------------------------
// Smooth Scroll
//-----------------------------------------------------------------

$('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1200);
            return false;
        }
    }
});

/******************************************************************
Add Active Class
******************************************************************/

if (window.matchMedia('(min-width: 940px)').matches) {
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
// Scroll to Top
//-----------------------------------------------------------------

$(window).bind("scroll", function() {
    if ($(this).scrollTop() > 350) {
        $(".scroll-top").addClass('active');
    } else {
        $(".scroll-top").stop().removeClass('active');
    }
});

//-----------------------------------------------------------------
// Modals
//-----------------------------------------------------------------

$("[rel*='modal']").leanModal({ 
    closeButton: ".modal-close" 
});

//-----------------------------------------------------------------
// Progress Bars
//-----------------------------------------------------------------

$(".progress").each(function() {
    attrProgress = $(this).attr('data-progress');
    $(this).css({ width : attrProgress }); 
});

//-----------------------------------------------------------------
// Tooltips
//-----------------------------------------------------------------

$(function() {
    $('a[rel*="tooltip"]').tipsy({
        fade: true, 
        gravity: 's'
    });
});

/******************************************************************
Animated Numbers
******************************************************************/

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
// Carousels
//-----------------------------------------------------------------

$('#showcase-thumbnails').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '#showcase-carousel',
    centerMode: true,
    focusOnSelect: true,
    infinite: true,
    centerPadding: '0px',
    arrows: false
});

$('#showcase-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    prevArrow: '#showcase .arrow-prev',
    nextArrow: '#showcase .arrow-next',
    asNavFor: '#showcase-thumbnails'
});

$('#shortcodes-carousel').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: '0px',
    prevArrow: '#shortcodes .arrow-prev',
    nextArrow: '#shortcodes .arrow-next',
    arrows: true
});  

}); // end document.ready