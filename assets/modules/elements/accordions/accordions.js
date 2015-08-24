//=================================================================
// Accordions
//=================================================================

function accordionInit() {

	$(accordion).find('> *.active > *:first-child + *').addClass('active');

	$(accordion).find('> * > *:first-child').click(function () {

		var $parent = $(this).parent();

		$parent.toggleClass('active');
		$parent.siblings().removeClass('active');
		$parent.siblings().find('> *:first-child + *').slideUp(baseTransition);
		$(this).find('~ *').slideToggle(baseTransition);

	});
  
} // accordionInit

$(accordionInit);