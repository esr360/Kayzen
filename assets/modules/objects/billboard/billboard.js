(function ($) {
 
    /**
     * 
     * KAYZEN
     * @module: 'billboard'
     * @author: @esr360
     * 
     */
    
    $.fn.billboard = function(custom) {
        
        // Options
        var options = $.extend({
            parallaxBg: false,
            parallaxContent: false,
            contentSelector: '#billboard-fade-parallax'
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
	
            var heroTitle = $(options.contentSelector);
            
            if (options.parallaxContent) {

                $(window).on('scroll', function() {

                    var st = $(this).scrollTop();

                    heroTitle.css({ 
                        'transform' : "translate3d(0px,"+(st/2.5)+"px, 0px)",
                        'opacity' : 1 - st/600
                    }); 

                });
            
            }
            
        }); // this.each
 
    }; // billboard()
 
}(jQuery));