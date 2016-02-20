(function ($) {
    
    /**
     * 
     * KAYZEN
     * @module: 'page-overview'
     * @requires: 'tooltips', 'headings', Kayzen.ScrollSpy
     * @author: @esr360
     * 
     */
 
    $.fn.pageOverview = function(custom) {
        
        // Options
        
        var options = $.extend({
            position      : _modules['page-overview']['position'],
            itemSelector  : 'a',
            titleSelector : _heading
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
            var $container = $(this);

            // Set the correct tooltip position
            if (options.position == 'left') {
                var $tooltipPos = 'right'
            } else if (options.position == 'right') {
                var $tooltipPos = 'left'
            } else if (options.position == 'top') {
                var $tooltipPos = 'bottom'
            } else if (options.position == 'bottom') {
                var $tooltipPos = 'top'
            }
            
            // Create the overview navigation
            $container = $container.clone();
            
            // Clean attributes
            $container.removeAttr('class id');
            
            // Add module class
            $container.addClass('page-overview-' + options.position);
            
            // Relocate in the DOM
            $container.prependTo('body');
            
            // Prepare each overview item
            $container.children(options.itemSelector).each(function() {
                
                // Cache the current item
                var $item = $(this);
                
                // Get item title
                var $title = $item.find(options.titleSelector).first().text();
                
                // Set appropriate tooltip class
                $item.attr('class', 'page-overview_item tooltip-' + $tooltipPos);
                
                // Set the tootlip content
                $item.attr('data-tooltip', $title);
                
                // Call tooltip on item
                $item.tooltip({
                    position : $tooltipPos
                });
                
                // Call scrollSpy plugin on parent
                $('.page-overview-' + options.position).scrollSpy({
                    itemSelector : 'a'
                });
                
                // Reload the smoothScroll plugin
                $item.smoothScroll();
                
            });
            
        }); // this.each
 
    }; // pageOverview()
 
}(jQuery));