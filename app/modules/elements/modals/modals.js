//=================================================================
// Modals
//=================================================================

(function ($) {
		
	$.fn.extend({
		
		modalInit: function(options) {
			
			var defaults = {  
				overlay : true,
				animate : 'top'
			};
			
			var options = $.extend(defaults, options);	
			
			var animateStyle = options.animate;
			
			function openModal(el) {
				el.addClass('modal-visible');
				if (options.overlay) {
					$('#site-overlay').addClass('modal_visible');
				}
			}
			
			function closeModal(el) {
				el.removeClass('modal-visible');
				if (options.overlay) {
					$('#site-overlay').removeClass('modal_visible');
				}
			}
			
			return this.each(function() {
				
				var el = $(this),
					id = el.attr('id');
					
				if (el.is('[class*="-animate"]')) {
					options.animate = false;
				}
				
				if (options.animate !== false) {
					el.addClass('modal-animate-' + animateStyle);
				}
				
				$('[data-modal="' + id + '"]').click(function(e) {
					openModal(el);
					e.preventDefault();
					$('.modal_visible, .modal_close').click(function() {
						closeModal(el);
					});
				});
				
			});
			
		} // tooltip
		
	});

}(jQuery));

$(modal).modalInit({
	animate: 'left'
});