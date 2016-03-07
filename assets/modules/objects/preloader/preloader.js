/******************************************************************
 * Kayzen
 * https://github.com/esr360/Kayzen
 * JavaScript module styleguide
 *****************************************************************/
 
(function ($) {
    
    /**
     * @module: 'preloader'
     * @dependencies: Aloads
     * @author: @esr360
     */
 
    $.fn.preloader = function(custom) {
        
        // Options
        var options = $.extend({}, custom);
            
        var preloader = $(this);
        
        $(window).bind("load", function() {
            preloader.addClass('preloader-loaded');
            setTimeout(function() {
                preloader.hide();
            }, baseTransition);
        });
        
        console.log('test');
 
    }; // preloader()
 
}(jQuery));