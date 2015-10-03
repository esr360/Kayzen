//=================================================================
// Billboard
//=================================================================

//-----------------------------------------------------------------
// Fade/Parralax Effect
//-----------------------------------------------------------------
	
$(document).ready(function() {
	
	var heroTitle = $('#billboard-fade-parallax');

	$(window).on('scroll', function() {

		var st = $(this).scrollTop();

		heroTitle.css({ 
			'transform' : "translate3d(0px,"+(st/2.5)+"px, 0px)",
			'opacity' : 1 - st/600
		}); 

	});
	
});