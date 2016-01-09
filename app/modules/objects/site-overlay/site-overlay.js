(function ($) {
    
    /**
     * 
     * KAYZEN
     * @module: 'site-overlay'
     * @author: @esr360
     * 
     */

    $.fn.siteOverlay = function(state, custom) {
        
        // Options
        var options = $.extend({
            selfClose : true
        }, custom);
        
        var overlay = $(this);
        
        function showOverlay() {
            overlay.addClass('site-overlay-visible');
            Kayzen.eventEmitter.emit('overlay:show'); 
        }
        
        function hideOverlay() {
            overlay.removeClass('site-overlay-visible');
            Kayzen.eventEmitter.emit('overlay:hide'); 
        }
        
        if (state == 'show') {
            showOverlay();
        } else if (state == 'hide') {
            hideOverlay()
        } else {
            if (overlay.is('[class*="-visible"]')) {
                hideOverlay()
            } else {
                showOverlay();
            }
        }
        
        // Hide the overlay when clicked
        if (options.selfClose) {
            overlay.click(hideOverlay);
        }

    }; // Kayzen.siteOverlay
 
}(jQuery));