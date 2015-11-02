/**
 *
 * Kayzen.infiniteScroll
 * @author @esr360
 * @description Uses "Isotope" and "Infinite Ajax Scroll" plugins
 *
 */

(function ($) {
 
    $.fn.KayenInfiniteScroll = function(custom) {
        
        // Options
        var options = $.extend({
            
            delay       : 600,
            loadSpinner : true,
            pagination  : '#pagination',
            next        : '.next a',
            endText     : 'You have reached the end!'
            
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
            var col = $(this).children().attr('class').split(' ')[0];
            var row = this.id;
            
            // Convert the passed element into an Isotope grid
            var isotopeGrid = new Isotope(this, {
                itemSelector     : '.' + col
            });
            
            // Call the infinite scroll plugin
            var ias = $.ias({
                container  : '#' + row,
                item       : '.' + col,
                pagination : options.pagination,
                next       : options.next,
                delay      : options.delay
            });
            
            // Set loaded item's initial opacity to 0
            ias.on('render', function(items) {
                $(items).css({ opacity: 0 });
            });
            
            // Call the infinite scroll plugin
            ias.on('rendered', function(items) {
                isotopeGrid.appended(items);
            });
            
            // Add a loading spinner image
            if (options.loadSpinner) {
                ias.extension(new IASSpinnerExtension());
            }
            
            // Add some end of scroll text
            if (options.endText) {
                ias.extension(new IASNoneLeftExtension({
                    html: '<div class="ias-noneleft"><p>' + options.endText + '</p></div>'
                }));
            }
            
        }); // this.each
 
    }; // KayenInfiniteScroll()
 
}(jQuery));