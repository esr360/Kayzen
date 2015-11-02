/**
 *
 * Masonry Infinite Scroll
 * Uses "Isotope" and "Infinite Ajax Scroll" Git modules
 *
 */

(function ($) {
 
    $.fn.masonryInfiniteScroll = function(custom) {
        
        // Options
        var options = $.extend({
            
            color : "#556b2f",
            size  : "1em"
            
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
            // Convert the passed element into an Isotope grid
            var isotopeGrid = new Isotope(this, {
                
                itemSelector     : '.span-4',
                containerStyle   : { 
                    marginBottom : '2em' 
                }
                
            });
            
            // Call the infinite scroll plugin
            var ias = $.ias({
                
                container  : this,
                item       : ".span-4",
                pagination : "#pagination",
                next       : ".next a",
                delay      : 400
                
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
            ias.extension(new IASSpinnerExtension());
            
            // Add some end of scroll text
            ias.extension(new IASNoneLeftExtension({
                html: '<div class="ias-noneleft"><p>You have reached the end!</p></div>'
            }));
            
            // UI to filter Isotope items
            $('#portfolio-categories').on( 'click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $('#portfolio-items').isotope({ filter: filterValue });
            });
            
        }); // this.each
 
    }; // masonryInfiniteScroll()
 
}(jQuery));