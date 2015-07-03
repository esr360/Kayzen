
/* Tooltips
================================================================ */

var $tooltip = $("[data-tooltip]");

(function ( $ ) {
	
	$.fn.extend({
		
		tooltip: function(options) {
			
			var defaults = {  
				position : "top",
				color    : "dark"
			};  
			
			var options = $.extend(defaults, options);	
			
			return this.each(function() {
				
				var $content = $(this).attr("data-tooltip");			
				var $position = options.position;		
				var $color = options.color;
				
				$(this).append(
					$("<div class='tooltip-wrapper-" + $position + "-" + $color + "'><div class='tooltip-content'>"+ $content +"</div></div>")
				);
				
			});
			
		} // tooltip
		
	});

}( jQuery ));

$tooltip.tooltip({
	position : "left",
	color    : "light"
});