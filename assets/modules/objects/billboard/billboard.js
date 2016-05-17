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
            breakpoint: 'break-3',
            contentSelector: '#billboard-fade-parallax'
        }, custom);
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
            var billboard = $(this);
	
            var heroTitle = $(options.contentSelector);
            
            if (options.parallaxContent) {
                    
                if (breakpoint('min-width', options.breakpoint)) {
                    
                    $(window).on('scroll', function() {

                        var st = $(this).scrollTop();

                        heroTitle.css({ 
                            'transform' : 'translate3d(0px,' + (st/2.5) + 'px, 0px)',
                            'opacity' : 1 - st/600
                        }); 

                    });
                    
                }
            
            } // parallaxContent
            
            var slideNext = billboard.find('.slide-next');
            var slidePrev = billboard.find('.slide-prev');
            var billboardCarousel = billboard.find('.billboard_carousel');
            var initialBg = billboard.css('background-image');
            
            billboardCarousel.owlCarousel({
                items : 1,
                dots : false,
                navigation : false,
                loop: true,
                stagePadding : 0,animateOut: 'fadeOut'
            });
            
            billboardCarousel.on('changed.owl.carousel', function(event) {
                var currentItem = $(event.target).find('.owl-item').eq(event.item.index);
                var bg = currentItem.find('.billboard_wrapper').data('billboard-bg');
                if (bg) {
                    billboard.css('background-image', 'url(' + bg + ')');
                } else {
                    billboard.css('background-image', initialBg)
                }
            });
            
            slideNext.click(function() {
                billboardCarousel.trigger('next.owl.carousel');
            });
            
            slidePrev.click(function() {
                billboardCarousel.trigger('prev.owl.carousel');
            });
            
        }); // this.each
 
    }; // billboard()
 
}(jQuery));