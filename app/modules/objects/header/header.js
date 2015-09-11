//=================================================================
// Header
//=================================================================

//-----------------------------------------------------------------
// Sticky Header
//-----------------------------------------------------------------

if (setting('app-header', 'sticky'))  {
	
	var stickyOffset = $(appHeader).offset().top,
		navDropdown  = $(navigation).find("> ul > li > a:not(:only-child)").parent();
	
	function stickHeader() {
		$(appHeader).addClass('fixed');
		if (!$('body').hasClass('flyout-active')) {
			navDropdown.hover(
				function(){ 
					$("#site-overlay").addClass('visible');
				},
				function(){ 
					$("#site-overlay").removeClass('visible');
				}
			);
		}
	}
	
	function unStickHeader() {
		$(appHeader).removeClass('fixed');
		navDropdown.unbind('mouseenter mouseleave');
		if (!$('body').hasClass('flyout-active')) {
			$("#site-overlay").removeClass('visible');
		}
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

//-----------------------------------------------------------------
// Side Header
//-----------------------------------------------------------------

if (setting('app-header', 'side')) {
	
	$(appHeader).prependTo('body');
	
}