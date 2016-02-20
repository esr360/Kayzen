(function ($) {
    
    /**
     * 
     * KAYZEN
     * @module: 'flyout-nav'
     * @dependencies: 'side-nav' (, 'site-overlay')
     * @author: @esr360
     * 
     */
 
    $.fn.flyoutNav = function(custom) {
        
        // Options
        var options = $.extend({
            
            menu    : '#app-nav > ul',
            trigger : '#flyout-trigger',
            overlay : '#site-overlay'
            
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
    
            // Add the module class to receive appropriate styles
            $(this).addClass('flyout-nav');
            
            $(this).append('<nav class="side-nav"></nav>');

            var flyoutSideNav = $(this).find(_sideNav);
            
            // Function to create the flyout-nav based off existing elements
            function createFlyoutNav() {
        
                // Clone the main nav into the flyout nav container
                $(options.menu).clone().appendTo(flyoutSideNav);
                
                // Add collapsible functionality
                if (_option('flyout-nav', 'collapsible')) {
            
                    // Create open/close icon
                    var openClose = '<i class="side-nav_openClose fa ' + _modules['side-nav']['collapsible']['icon'] + '"></i>';
                    
                    // Add icon to appropriate menu items
                    $(_flyoutNav).find('a:not(:only-child)').prepend(openClose);
                
                    // Remove icon from any mega-menu items
                    $(_flyoutNav).find('li > [class*="mega-menu"]').parent().find('.side-nav_openClose').remove();
                        
                    // Hide/show child menus
                    $(_flyoutNav).on('click', '.side-nav_openClose', function(e){
                        $(this).parent().find('+ ul').slideToggle(baseTransition);
                        return false;
                    });
                    
                } else {
                    $(_flyoutNav).find('.side-nav_openClose').remove();
                }

                // collapse by default
                var openDefault = _modules['flyout-nav']['collapsible']['open-by-default'];
                
                if (!openDefault) {
                    $(_flyoutNav).find('a:not(:only-child) ~ ul').hide();
                }
        
            } // createFlyoutNav
            
            // Open the flyout nav
            function openFlyoutNav() {
                $('body').addClass('flyout-active');
                $(options.trigger).addClass('active');
            }
            
            // Close the flyout nav
            function closeFlyoutNav() {
                $('body').removeClass('flyout-active');
                $(options.trigger).removeClass('active');
            }
            
            // Create the flyout nav
            $(createFlyoutNav);
            
            // Toggle the flyout nav on trigger click
            $(options.trigger).click(function() {
                if ($('body').hasClass('flyout-active')) {
                    closeFlyoutNav();
                    $(options.overlay).siteOverlay('hide', 'flyout');
                } else {
                    openFlyoutNav();
                    $(options.overlay).siteOverlay('show', 'flyout', {
                        selfClose : true
                    });
                }
                return false;
            });
            
            // Close the flyout nav when the overlay is clicked
            $(options.overlay).click(closeFlyoutNav);
            
        }); // this.each
 
    }; // flyoutNav() 
    
}(jQuery));