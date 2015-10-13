//=================================================================
// Tooltips
//=================================================================

(function ($) {
		
	$.fn.extend({
		
		tooltipInit: function(options) {
			
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

//-----------------------------------------------------------------
// Tooltips
//-----------------------------------------------------------------

$(window).load(function(){
	
	$(tooltip).each(function() {
		
		if ($(this).is('[class*="-top"]')) {
			
			$(this).tooltipInit({
				position : "top"
			});
			
		} else if ($(this).is('[class*="-bottom"]')) {
			
			$(this).tooltipInit({
				position : "bottom"
			});
			
		} else if ($(this).is('[class*="-left"]')) {
			
			$(this).tooltipInit({
				position : "left"
			});
			
		} else if ($(this).is('[class*="-right"]')) {
			
			$(this).tooltipInit({
				position : "right"
			});
			
		}
		
	});

});