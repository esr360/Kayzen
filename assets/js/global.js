
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
// Sticky Header
//-----------------------------------------------------------------

if (setting(appHeader, 'sticky'))  {
	
	var stickyOffset = $(appHeader).offset().top,
		navDropdown  = $(navigation).find("> ul > li > a:not(:only-child)").parent();
	
	function stickHeader() {
		$(appHeader).addClass('fixed');
		navDropdown.hover(
			function(){ 
				$("#site-overlay").addClass('visible');
			},
			function(){ 
				$("#site-overlay").removeClass('visible');
			}
		)
	}
	
	function unStickHeader() {
		$(appHeader).removeClass('fixed');
		navDropdown.unbind('mouseenter mouseleave');
		$("#site-overlay").removeClass('visible');
	}
	
	$(window).on("load scroll", function(e) {
		var scroll = $(window).scrollTop();
		if (scroll > stickyOffset) {
			stickHeader();
		} else {
			unStickHeader();
		}
	});

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

$("[data-tooltip]").tooltip({
	position : "left",
	color    : "light"
});

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
// Carousels
//-----------------------------------------------------------------

// Showcase Thumbnails Carousel
//-----------------------------------------------------------------

var $sync1 = $("#showcase-carousel"),
	$sync2 = $("#showcase-thumbnails"),
	flag = false,
	duration = 300;

// Showcase Slides
$sync1.owlCarousel({
	items: 1
})
.on('changed.owl.carousel', function (e) {
	if (!flag) {
		flag = true;
		$sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
		flag = false;
	}
})
.trigger('to.owl.carousel', 2);

// Showcase Thumbs
$sync2.owlCarousel({
    center: true,
    items: 5,
	stagePadding: 0,
    responsive: {
        600: {
            items:4
        }
    }
})
.on('click', '.owl-item', function () {
	$sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
})
.on('changed.owl.carousel', function (e) {
	if (!flag) {
		flag = true;		
		$sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
		flag = false;
	}
})
.trigger('to.owl.carousel', 2);

// Slide Arrows

$sync2.find("+ .wrap-slide-arrows .slide-next").click(function() {
    $sync2.trigger('next.owl.carousel');
});
$sync2.find("+ .wrap-slide-arrows .slide-prev").click(function() {
    $sync2.trigger('prev.owl.carousel');
});

// Shortcodes Carousel
//-----------------------------------------------------------------

var shortcodesCarousel = $("#shortcodes-carousel");

shortcodesCarousel.owlCarousel({
    items: 3,
	center: true,
	loop: true
})
.on('click', '.owl-item', function(e) {
	var carousel = shortcodesCarousel.data('owl.carousel');
	e.preventDefault();
	carousel.to(carousel.relative($(this).index()));
});

$("#shortcodes .slide-next").click(function() {
    shortcodesCarousel.trigger('next.owl.carousel');
});
$("#shortcodes .slide-prev").click(function() {
    shortcodesCarousel.trigger('prev.owl.carousel');
});

}); // end document.ready