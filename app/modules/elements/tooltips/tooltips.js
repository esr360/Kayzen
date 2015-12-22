//=================================================================
// Tooltips
//=================================================================

(function ($) {
		
	$.fn.extend({
		
		tooltip: function(options) {
			
			var defaults = {  
				position : "top"
			};
			
			var options = $.extend(defaults, options);	
			
			return this.each(function() {
				
				var $content = $(this).attr("data-tooltip");			
				var $position = options.position;
				
				$(this).attr("ontouchstart", "");
				
				$(this).append(
					$("<div class='tooltip_wrapper-" + $position + "'><div class='tooltip_content'>"+ $content +"</div></div>")
				);
				
			});
			
		} // tooltip
		
	});

}(jQuery));