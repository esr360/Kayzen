//=================================================================
// Data-Manipulate
//=================================================================

function dataM() {
	
	// define data types
	var elReveal = $('[data-reveal]'),
		elReverseReveal = $('[data-reverse-reveal]'),
		elHover = $('[data-hover]');
	
	// [data-reveal]
	elReveal.each(function() {
		
		var el = $(this),
			styles = el.data('reveal');
							
		$(window).bind("load scroll", function() {
			
			// if element is visible in viewpoint
			if (el.visible(true)) { // from 'visible.js'
				el.attr('style', styles);
			}
			
		});	
	
	}); // elReveal
	
	// [data-reverse-reveal]
	elReverseReveal.each(function() {
		
		var el = $(this),
			styles = el.data('reverse-reveal'),
			cachedStyles = null;
			
		// cache current inline styles
		if (typeof(el.attr('style')) != 'undefined') {
			var cachedStyles = el.attr('style');
		}
		
		// add new styles to element
		el.attr('style', styles)
							
		$(window).bind("load scroll", function() {
			// if element is visible in viewpoint
			if (el.visible(true)) { // from 'visible.js'
				// reset the styles
				el.attr('style', cachedStyles);
			}
			
		});	
	
	}); // elReverseReveal
	
	// [data-hover]
	elHover.each(function(){
		
		var el = $(this),
			styles = el.data('hover');
						
		el.mouseenter(function(){
			
			// cache current inline styles
			cachedStyles = null;
			if (typeof(el.attr('style')) != 'undefined') {
				var cachedStyles = el.attr('style');
			}
			
			// combine cached + new styles
			el.attr('style', cachedStyles + ';' + styles);
			
			// remove new styles when move leaves element
			$(this).mouseleave(function(){
				el.attr('style', cachedStyles);
			});
			
		});
			
	}); // elHover
	
} // dataM()

$(dataM);