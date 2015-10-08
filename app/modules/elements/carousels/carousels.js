//=================================================================
// Carousels
//=================================================================

function kCarousel(carouselId, navId, pagerId, pagerSelector) {
	
	function pagerTrigger(carouselId, pagerId, pagerSelector) {
		$(pagerId).find(pagerSelector).click(function() {
			var $index = $(this).index();
			$(this).siblings().removeClass('active').end().addClass('active');
			$(carouselId).trigger('to.owl.carousel', [$index, 400, true]);
		});
	}
	
	function slideNext(carouselId, navId, pagerId) {
		$(navId + " .slide-next").click(function() {
			var $activeItem = $(pagerId).find('.active');
			if ($activeItem.is(':last-child')) {
				$activeItem.removeClass('active').siblings(':first').addClass('active');
			} else {
				$activeItem.removeClass('active').next().addClass('active');
			}
			$(carouselId).trigger('next.owl.carousel');
		});
	} 
	
	function slidePrev(carouselId, navId, pagerId) {
		$(navId + " .slide-prev").click(function() {
			var $activeItem = $(pagerId).find('.active');
			if ($activeItem.is(':first-child')) {
				$activeItem.removeClass('active').siblings(':last').addClass('active');
			} else {
				$activeItem.removeClass('active').prev().addClass('active');
			}
			$(carouselId).trigger('prev.owl.carousel');
		});
	} 
	
	pagerTrigger(
		carouselId, 
		pagerId, 
		pagerSelector
	);
	slideNext(
		carouselId,
		navId,
		pagerId
	);
	slidePrev(
		carouselId,
		navId,
		pagerId
	);

}