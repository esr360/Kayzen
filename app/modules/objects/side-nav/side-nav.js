(function ($) {
    
    /**
     * 
     * KAYZEN
     * @module: 'side-nav'
     * @author: @esr360
     * 
     */

    $.fn.sideNav = function(custom) {
        
        // Options
        var options = $.extend({
            
            container    : _searchBox
            
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
        }); // this.each

    }; // sideNav()

}(jQuery));

//=================================================================
// Side-Header Navigation
//=================================================================

if (_option('app-header', 'side')) {
	
	// replace navigation class
	$(_navigation).removeClass (function (index, css) {
		return (css.match (/(^|\s)navigation\S+/g) || []).join(' ');
	}).addClass('app-header_side-nav');
	
	// add collapsible functionality
	if (_option('side-nav', 'collapsible')) {
		
		// create open/close icon
		var openClose = '<i class="side-nav_openClose fa ' + _module['side-nav']['collapsible']['icon'] + '"></i>'
		$('.app-header_side-nav').find('a:not(:only-child)').prepend(openClose);
		
		$('.app-header_side-nav')
			.find('li > [class*="mega-menu"]').parent()
			.find('.side-nav_openClose').remove();
			
		$('.app-header_side-nav').on('click', '.side-nav_openClose', function(e){
			$(this).parent().find('+ ul').slideToggle(baseTransition);
		});
			
	}

	// collapse by default
	var openDefault = _module['side-nav']['collapsible']['open-by-default'];
	
	if ($('.app-header_side-nav').is('[class*="-collapse"]') == true || openDefault == false) {
		$('.app-header_side-nav').find('a:not(:only-child) ~ ul').hide();
	}
	
}