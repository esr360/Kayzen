//=================================================================
// K-Reveal
//=================================================================

(function ($) {
	
	$.fn.extend({
	
		kReveal: function(options) {
			
			var defaults = {  
			};
			
			var options = $.extend(defaults, options);
			
			return this.each(function() {
				
				var el = this;
					
				$(window).bind("load scroll", function() {
					if ($(el).visible()) {
						console.log('test');
					}
				});
			
			});
		
		} // kReveal
	
	});
  
}(jQuery));

//-----------------------------------------------------------------
// K-Reveal
//-----------------------------------------------------------------

$('.reveal').kReveal();