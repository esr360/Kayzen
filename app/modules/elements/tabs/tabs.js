/**
 * 
 * Kayzen.Tabs
 * @version 1.0.0
 * @author @esr360
 * @license The MIT License (MIT)
 * 
 */

(function ($) {
 
    $.fn.KayenTabs = function(custom) {
        
        // Options
        var options = $.extend({
            
            navParent   : '[class*="tabs_nav"]',
            navItem     : 'li',
            content     : '.tabs_content',
            activeClass : 'active',
            transition  : baseTransition/2
            
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
            // Cache parent's selector
            var parent = $(this);
            
            // Add active class to appropriate nav item
            $(options.navParent).KayzenClickHelper({
                targetClass : options.activeClass
            });
            
            // Execute the code when a tab navigation item is clicked 
            $(this).find(options.navParent).find(options.navItem).click(function() {
        
                // Cache the current index of clicked item
                var index = $(this).index();
                // Get the tab content sections
                var content = $(this).parents(parent).find(options.content);
                
                // Hide previously selected content
                content.fadeOut(options.transition);
                
                // Show the new content
		        setTimeout(function(){
                    content.eq(index).fadeIn(options.transition);
                }, options.transition);
                
                return false;
        
            });
            
        }); // this.each
 
    }; // KayenTabs()
 
}(jQuery));

$(_tabs).KayenTabs();