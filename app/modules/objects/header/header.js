(function ($) {
    
    /**
     * 
     * KAYZEN
     * @module: 'app-header'
     * @requires: 'navigation'
     * @author: @esr360
     * 
     */
 
    $.fn.header = function(custom) {
        
        // Options
        
        var options = $.extend({
            navigation : _navigation,
            overlay    : '#site-overlay'
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
            var header = $(this);
            
            if (_option('app-header', 'sticky'))  {
                    
                var stickyOffset = header.offset().top;
                var navDropdown  = $(options.navigation).find("> ul > li > a:not(:only-child)").parent();
                
                function stickHeader() {
                    header.addClass('fixed');
                    navDropdown.hover(
                        function(){ 
                            $(options.overlay).siteOverlay('show');
                        },
                        function(){ 
                            $(options.overlay).siteOverlay('hide');
                        }
                    );
                }
	
                function unStickHeader() {
                    header.removeClass('fixed');
                    navDropdown.unbind('mouseenter mouseleave');
                    $(options.overlay).siteOverlay('hide');
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
            
            if (_option('app-header', 'side')) {
                header.prependTo('body');	
            }

        }); // this.each
 
    }; // header()
 
}(jQuery));