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
            
            var flyoutContainer = $(this)
                .clone()
                .prependTo('body')
                .removeAttr('id')
                .wrap('<div class="flyout-nav side-nav"></div>');
                
            flyoutContainer = flyoutContainer.parent();
            
            // remove the trigger icon
            flyoutContainer.find(options.trigger).parents('ul').remove();
            
            // Function to create the flyout-nav based off existing elements
            function createFlyoutNav() {
                
                // Add collapsible functionality
                if (_option('flyout-nav', 'collapsible')) {
                    flyoutContainer.navDropdown();
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
                flyoutContainer.addClass('flyout-nav-visible');
                $(options.trigger).addClass('active');
            }
            
            // Close the flyout nav
            function closeFlyoutNav() {
                flyoutContainer.removeClass('flyout-nav-visible');
                $(options.trigger).removeClass('active');
            }
            
            // Create the flyout nav
            $(createFlyoutNav);
            
            // Toggle the flyout nav on trigger click
            $('body').on('click', options.trigger, function () {
                if (flyoutContainer.hasClass('flyout-nav-active')) {
                    closeFlyoutNav();
                    $(options.overlay).siteOverlay('hide', 'flyout');
                } else {
                    openFlyoutNav();
                    $(options.overlay).siteOverlay('show', 'flyout', {
                        selfClose : true
                    });
                }
            });
            
            // Close the flyout nav when the overlay is clicked
            $(options.overlay).click(closeFlyoutNav);
            
        }); // this.each
 
    }; // flyoutNav() 
    
}(jQuery));