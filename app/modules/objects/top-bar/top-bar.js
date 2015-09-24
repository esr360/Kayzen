//=================================================================
// Top Bar
//=================================================================

var topBarDropdown = $('[class*="top-bar_nav"]').find("> ul > li > a:not(:only-child)").parent();

$(window).on("load scroll", function(e) {
	
	var scroll = $(window).scrollTop(),
		topBarHeight = $(topBar).height();
		
	if (scroll > topBarHeight) {
		topBarDropdown.hover(
			function(){ 
				$("#site-overlay").addClass('top-bar_visible');
			},
			function(){ 
				$("#site-overlay").removeClass('top-bar_visible');
			}
		);
	} else {
		topBarDropdown.unbind('mouseenter mouseleave');
		$("#site-overlay").removeClass('top-bar_visible');
	}
	
});