//=================================================================
// Modals
//=================================================================

(function ($) {
		
	$.fn.extend({
		
		modalInit: function(options) {
			
			var defaults = {  
				overlay : true
			};
			
			var options = $.extend(defaults, options);	
			
			return this.each(function() {
				
				var el = $(this),
					id = el.attr('id');
				
				$('[data-modal="' + id + '"]').click(function() {
					el.addClass('modal_visible');
					$('#site-overlay').addClass('modal_visible');
				});
				
			});
			
		} // tooltip
		
	});

}(jQuery));

$(modal).modalInit({
	
});