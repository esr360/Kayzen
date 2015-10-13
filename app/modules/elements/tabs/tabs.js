
/* Tabs
================================================================ */

function tabsInit() {

	$(tabs).find('[class*="tabs_nav"] > li').click(function() {

		var $section = $(this).parents(tabs).find('.tabs_content');

		$(this).siblings().removeClass('active');
		$(this).addClass('active');
		$section.fadeOut(baseTransition/2);
		setTimeout(function(){
			$section.eq($(this).index()).fadeIn(baseTransition/2);
		}, baseTransition/2);
		return false;

	});
  
}

$(tabsInit);