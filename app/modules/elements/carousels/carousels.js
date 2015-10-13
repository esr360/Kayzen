//=================================================================
// Carousels
//=================================================================

(function ($) {
		
	$.fn.extend({
		
		kCarousel: function(options) {
			
			var defaults = {  
				navId: '',
				pagerId: '',
				pagerSelector: 'li',
				options : {
					items: 1,
					loop: true,
					dots: false
				}
			};
			
			var $options = $.extend(defaults, options);	
			
			var navId = $options.navId,
				pagerId = $options.pagerId,
				pagerSelector = $options.pagerSelector;
			
			return this.each(function() {
				
				var carouselId = $(this);
				
				function pagerTrigger(pagerId, pagerSelector) {
					$(pagerId).find(pagerSelector).click(function() {
						var $index = $(this).index();
						$(this).siblings().removeClass('active').end().addClass('active');
						$(carouselId).trigger('to.owl.carousel', [$index, 400, true]);
					});
				}
			
				function slideNext(navId, pagerId) {
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
			
				function slidePrev(navId, pagerId) {
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
					
				carouselId.owlCarousel($options.options);
				
				pagerTrigger(pagerId, pagerSelector);
				
				slideNext(navId, pagerId);
				
				slidePrev(navId, pagerId);
				
			});
			
		} // kCarousel
		
	});

}(jQuery));

/*
$("#portfolio-carousel").kCarousel({
	navId: '',
	pagerId: '',
	pagerSelector: 'li',
	options : {
		items: 1,
		loop: true,
		dots: false
	}
});
*/