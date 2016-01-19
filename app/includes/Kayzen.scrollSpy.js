(function ($) {
    
    /**
     * 
     * KAYZEN
     * Kayzen.scrollSpy
     * @author: @esr360
     * 
     */
 
    $.fn.scrollSpy = function(custom) {
        
        // Options
        
        var options = $.extend({
            position     : _module['page-overview']['position'],
            itemSelector : 'a'
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
        }); // this.each
 
    }; // pageOverview()
 
}(jQuery));