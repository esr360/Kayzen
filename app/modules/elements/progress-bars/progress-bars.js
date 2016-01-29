(function ($) {
    
    /**
     * 
     * KAYZEN
     * @module: 'progress-bar'
     * @requires: 'site-overlay'
     * @author: @esr360
     * 
     */
 
    $.fn.progressBar = function(custom) {
        
        // Options
        var options = $.extend({
            
            overlay       : $('#site-overlay')
            
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {

        }); // this.each
 
    }; // progressBar()
 
}(jQuery));

//-----------------------------------------------------------------
// Progress Bars
//-----------------------------------------------------------------

$("progress.progress-bar").each(function() {
    var attrProgress = $(this).attr('data-progress');
    $(this).attr('value', attrProgress.replace(/[^-\d\.]/g, ''));
    $(this).find('.progress').css({ width : attrProgress }); 
});