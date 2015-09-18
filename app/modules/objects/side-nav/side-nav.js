//=================================================================
// Side-Header Navigation
//=================================================================

if (setting('app-header', 'side')) {
	
	// add collapsible functionality
	if (setting('side-nav', 'collapsible')) {
		
		// create open/close icon
		var openClose = '<i class="side-nav_openClose fa ' + module['side-nav']['collapsible']['icon'] + '"></i>'
		$(appHeader).find($(navigation)).find('a:not(:only-child)').prepend(openClose);
		
		$(navigation)
			.find('li > [class*="mega-menu"]').parent()
			.find('.side-nav_openClose').remove();
			
		$(navigation).on('click', '.side-nav_openClose', function(e){
			$(this).parent().find('+ ul').slideToggle(baseTransition);
		});
			
	}

	// collapse by default
	var openDefault = module['side-nav']['collapsible']['open-by-default'];
	
	if ($(navigation).is('[class*="-collapse"]') == true || openDefault == false) {
		$(navigation).find('a:not(:only-child) ~ ul').hide();
	}
	
}