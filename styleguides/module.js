/******************************************************************
 * Kayzen
 * https://github.com/esr360/Kayzen
 * JavaScript module styleguide
 *****************************************************************/
 
(function ($) {
    
    /**
     * @module: 'foo'
     * @dependencies: 'foo', barBaz
     * @author: @esr360
     */
 
    $.fn.foo = function(custom) {
        
        // Options
        var options = $.extend({
            bar : _modules['foo']['bar']
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
            var baz = function(option) {
                
                var qux = false;
                
                if (option == 'foo') {
                    qux = true;
                };
                
                return qux;
                
            };
            
            console.log(baz(options.bar));
    
        }); // this.each
 
    }; // foo()
 
}(jQuery));