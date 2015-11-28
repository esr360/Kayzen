/**
 *
 * Kayzen.earthSlider
 * @author @esr360
 *
 */

(function ($) {
 
    $.fn.KayzenEarthSlider = function(custom) {
        
        //
        // Options
        //
        
        var options = $.extend({
            
           // option : 'VALUE'
            
        }, custom);
        
        //
        // Run the code on each occurance of the element
        //
        
        return this.each(function() {
            
            var $pin = $(this).find('.pin-wrapper');
            var $pinCount = $pin.length;
            var $pinRange = 165;
            var $firstPin = $pin.first();
            var $lastPin = $pin.last();
            var $pinActive = $pin.filter('active');
            var $pinIndex = $pinActive.index() + 1;
    
            //
            // Position the pins
            //
    
            function pinRotate(pinAngle, pinNo) {
    
                var pinAngle = pinAngle / (pinNo + 1) + ((180 - $pinRange) / 2);
                
                pinAngle.toString();
                
                var interval = pinAngle - ((180 - $pinRange) / 2);
    
                for(i = 1; i < $pinCount + 1; i++) {   
                    if (i>1) {
                        pinAngle += interval;
                    }
                    i.toString();   
                    $('.pin-wrapper:nth-child('+i+')').css({
                        transform: 'translateY(-50%) rotate(' + pinAngle + 'deg)'
                    });
                }
    
            }
    
            pinRotate($pinRange, $pinCount);
    
            //
            // Hide all sections except the starting one
            //
            
            $('.earth-slider_section').hide(); 
            $('.earth-slider_section:nth-child(' + 1 + ')').show().addClass('active'); 
            
            //
            // Change content on pin click
            //
    
            $pin.click(function() {
            
                var $pinIndex = $(this).index() + 1;
    
                $pin.removeClass('active');
                $(this).addClass('active');
                
                $('.earth-slider_section.active').css({
                    'position' : 'absolute', 
                    'top' : 0,
                    'left' : 0,
                    'right' : 0
                }).fadeOut(baseTransition).removeClass('active'); 
                
                setTimeout(function(){
                    //$('.earth-slider_section.active').fadeOut(baseTransition); 
                }, 200);
                
                $('.earth-slider_section:nth-child('+$pinIndex+')').css({
                    'position' : 'relative'
                }).fadeIn(baseTransition).addClass('active'); 
     
    
            });
        
        }); // this.each
 
    }; // KayzenEarthSlider()
 
}(jQuery));