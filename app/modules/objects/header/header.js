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
		navDropdown.hover(
			function(){ 
				$("#site-overlay").addClass('header-visible');
			},
			function(){ 
				$("#site-overlay").removeClass('header-visible');
			}
		);
	}
	
	function unStickHeader() {
		$(appHeader).removeClass('fixed');
		navDropdown.unbind('mouseenter mouseleave');
		$("#site-overlay").removeClass('header-visible');
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