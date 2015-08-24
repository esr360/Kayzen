//=================================================================
// Kayzen
//=================================================================

$(document).ready(function() {
	
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

//-----------------------------------------------------------------

}); // document.ready