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
            
           startingSection : 2,
           pinWrapper : '.pin-wrapper'
            
        }, custom);
        
        //
        // Run the code on each occurance of the element
        //
        
        return this.each(function() {
            
            var $el = $(this);
            var $pin = $(this).find(options.pinWrapper);
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
            $('.earth-slider_section:nth-child(' + options.startingSection + ')').show().addClass('active');  
    
            //
            // Add active class to starting pin
            //
            
            $pin.removeClass('active'); 
            $pin.filter(':nth-child(' + options.startingSection + ')').addClass('active');  
            
            //
            // Change content
            //
            
            function earthCycle(pinIndex) {
                $('.earth-slider_section.active')
                    .fadeOut(baseTransition)
                    .removeClass('active'); 
                console.log(pinIndex);
                $('.earth-slider_section:nth-child('+ pinIndex +')')
                    .fadeIn(baseTransition)
                    .addClass('active'); 
            }
            
            //
            // Change content on pin click
            //
    
            $pin.click(function() {
            
                var $pinIndex = $(this).index() + 1;
    
                $pin.removeClass('active');
                $(this).addClass('active');
                
                earthCycle($pinIndex);
    
            });
            
            //
            // Change content on arrows click
            //
            
            function earthArrows(dir) {
            
                $el.find('.slide-' + dir).click(function() {
        
                    var $pinActive = $('.earth .pin-wrapper.active'); 
                    var $pinIndex = $pinActive.index();
        
                    $pinActive.removeClass('active');
        
                    if ($pinActive.is(':first-child')) {
                        $pinActive = $lastPin;
                        $pinActive.addClass('active');
                    } else {                
                        $pinActive.prev().addClass('active');               
                    }
                    
                    earthCycle($pinIndex);          
                    
                    var $pinActive = $('.earth .pin-wrapper.active');
                    var $pinIndex = $pinActive.index() + 1;
                    
                });
                
            }
            
            earthArrows('prev');
            earthArrows('next');
        
        }); // this.each
 
    }; // KayzenEarthSlider()
 
}(jQuery));