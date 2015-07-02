
/* Tooltips
================================================================ */

var $tooltip = $("[data-tooltip]");

(function ( $ ) {
	
	$.fn.extend({
		
		tooltip: function(options) {
			
			var defaults = {  
				position: "top"
			};  
			
			var options = $.extend(defaults, options);	
			
			return this.each(function() { 
				var $content = $(this).attr("data-tooltip");			
				var $position = options.position;
				$(this).append(
					$("<div class='tooltip-wrapper-"+ $position +"'><div class='tooltip-content'>"+ $content +"</div></div>")
				);	
			});
			
		} // tooltip
		
	});

}( jQuery ));

$tooltip.tooltip({
	position: "left"
});