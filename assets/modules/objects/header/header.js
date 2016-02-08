(function ($) {
    
    /**
     * 
     * KAYZEN
     * @module: 'app-header'
     * @requires: 'navigation', 'side-nav', 'site-overlay'
     * @author: @esr360
     * 
     */
 
    $.fn.header = function(custom) {
        
        // Options
        var options = $.extend({
            navigation    : _navigation,
            overlay       : '#site-overlay',
            sticky        : _option('app-header', 'sticky'),
            side          : _option('app-header', 'side'),
            openCloseIcon : _module['side-nav']['collapsible']['icon']
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
            var header = $(this);
            
            function stickyHeader() {
                        
                var stickyOffset = header.offset().top;
                var navDropdown  = $(options.navigation).find("> ul > li > a:not(:only-child)").parent();
                
                function stickHeader() {
                    header.addClass('fixed');
                    navDropdown.hover(
                        function(){ 
                            $(options.overlay).siteOverlay('show', 'navDropdown');
                        },
                        function(){ 
                            $(options.overlay).siteOverlay('hide', 'navDropdown');
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
            
            function sideHeader() {
                
                header.prependTo('body');
                
                // replace navigation class
                $(_navigation).removeClass (function (index, css) {
                    return (css.match (/(^|\s)navigation\S+/g) || []).join(' ');
                }).addClass('app-header_side-nav');
                
                // add collapsible functionality
                if (_option('side-nav', 'collapsible')) {
                    
                    // create open/close icon
                    var openClose = '<i class="side-nav_openClose fa ' + options.openCloseIcon + '"></i>';
                    
                    $('.app-header_side-nav').find('a:not(:only-child)').prepend(openClose);
                    
                    var hasChildMegaMenu = $('.app-header_side-nav').find('li > [class*="mega-menu"]').parent();
                    
                    hasChildMegaMenu.find('.side-nav_openClose').remove();
                        
                    $('.app-header_side-nav').on('click', '.side-nav_openClose', function(){
                        $(this).parent().find('+ ul').slideToggle(baseTransition);
                        return false;
                    });
                        
                }

                // collapse by default
                var openDefault = _module['side-nav']['collapsible']['open-by-default'];
                
                if ($('.app-header_side-nav').is('[class*="-collapse"]') == true || openDefault == false) {
                    $('.app-header_side-nav').find('a:not(:only-child) ~ ul').hide();
                }
                
            }
                
            if (options.sticky)  {
                stickyHeader();
            }
                
            if (options.side) {	
                sideHeader();
            }

        }); // this.each
 
    }; // header()
 
}(jQuery));