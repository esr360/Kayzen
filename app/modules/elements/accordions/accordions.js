//=================================================================
// Accordions
//=================================================================

function accordion() {

	$(_accordion).find('> *.active > *:first-child + *').addClass('active');

	$(_accordion).find('> * > *:first-child').click(function () {

		var $parent = $(this).parent();

		if ($(this).parents().eq(1).is(':not([class*="-keep-open"])')) {
			$parent.siblings().removeClass('active');
			$parent.siblings().find('> *:first-child + *').slideUp(baseTransition);
		}
		
		$parent.toggleClass('active');
		$(this).find('~ *').slideToggle(baseTransition);

	});
  
} // accordion