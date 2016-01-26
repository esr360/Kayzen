(function ($) {
    
    /**
     * 
     * KAYZEN
     * @module: 'top-bar'
     * @requires: 'site-overlay'
     * @author: @esr360
     * 
     */
 
    $.fn.topBar = function(custom) {
        
        // Options
        var options = $.extend({
            
            navigation    : _navigation
            
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {

        }); // this.each
 
    }; // topBar()
 
}(jQuery));

//=================================================================
// Top Bar
//=================================================================

var topBarDropdown = $('[class*="top-bar_nav"]').find("> ul > li > a:not(:only-child)").parent();

$(window).on("load scroll", function(e) {
	
	var scroll = $(window).scrollTop(),
		topBarHeight = $(_topBar).height();
		
	if (scroll > topBarHeight) {
		topBarDropdown.hover(
			function(){ 
				$("#site-overlay").siteOverlay('show');
			},
			function(){ 
				$("#site-overlay").siteOverlay('hide');
			}
		);
	} else {
		topBarDropdown.unbind('mouseenter mouseleave');
		$("#site-overlay").removeClass('top-bar_visible');
	}
	
});