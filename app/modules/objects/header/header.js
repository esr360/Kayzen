//-----------------------------------------------------------------
// Sticky Header
//-----------------------------------------------------------------

if (setting(appHeader, 'sticky'))  {
	
	var stickyOffset = $(appHeader).offset().top,
		navDropdown  = $(navigation).find("> ul > li > a:not(:only-child)").parent();
	
	function stickHeader() {
		$(appHeader).addClass('fixed');
		navDropdown.hover(
			function(){ 
				$("#site-overlay").addClass('visible');
			},
			function(){ 
				$("#site-overlay").removeClass('visible');
			}
		)
	}
	
	function unStickHeader() {
		$(appHeader).removeClass('fixed');
		navDropdown.unbind('mouseenter mouseleave');
		$("#site-overlay").removeClass('visible');
	}
	
	$(window).on("load scroll", function(e) {
		var scroll = $(window).scrollTop();
		if (scroll > stickyOffset) {
			stickHeader();
		} else {
			unStickHeader();
		}
	});

}