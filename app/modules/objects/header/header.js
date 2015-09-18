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
	
	// create open/close icon
	var openClose = '<i class="side-nav_openClose fa ' + module['side-nav']['collapsible']['icon'] + '"></i>'
	
	// add collapsible functionality
	if (setting('side-nav', 'collapsible')) {
		$(navigation).find('a:not(:only-child)').prepend(openClose);
		$(navigation)
			.find('li > [class*="mega-menu"]').parent()
			.find('.side-nav_openClose').remove();
		$('.side-nav_openClose').each(function() {
			$(this).click(function(){
				console.log('test');
				$(this).parent().find('~ ul').slideToggle(baseTransition);
			});
		});
	}
	
	// collapse by default
	var setting = module['side-nav']['collapsible']['open-by-default'];
	if ($(navigation).is('[class*="-collapse"]') == true || setting == false) {
		$(navigation).find('a:not(:only-child) ~ ul').hide();
	}
	
	
}