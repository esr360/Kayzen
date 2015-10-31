//=================================================================
// Header
//=================================================================

//-----------------------------------------------------------------
// Sticky Header
//-----------------------------------------------------------------

if (_option('app-header', 'sticky'))  {
	
	var stickyOffset = $(_appHeader).offset().top,
		navDropdown  = $(_navigation).find("> ul > li > a:not(:only-child)").parent();
	
	function stickHeader() {
		$(_appHeader).addClass('fixed');
		navDropdown.hover(
			function(){ 
				$("#site-overlay").addClass('header_visible');
			},
			function(){ 
				$("#site-overlay").removeClass('header_visible');
			}
		);
	}
	
	function unStickHeader() {
		$(_appHeader).removeClass('fixed');
		navDropdown.unbind('mouseenter mouseleave');
		$("#site-overlay").removeClass('header_visible');
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

if (_option('app-header', 'side')) {
	$(_appHeader).prependTo('body');	
}