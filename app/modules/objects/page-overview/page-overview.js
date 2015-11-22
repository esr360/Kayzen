//=================================================================
// Page Overview
//=================================================================

// Get the page-overview position
var $pageOverviewPos = _module['page-overview']['position'];

// Set the correct tooltip position
if ($pageOverviewPos == 'left') {
	var $tooltipPos = 'right'
} else if ($pageOverviewPos == 'right') {
	var $tooltipPos = 'left'
} else if ($pageOverviewPos == 'top') {
	var $tooltipPos = 'bottom'
} else if ($pageOverviewPos == 'bottom') {
	var $tooltipPos = 'top'
}

// Create the overview navigation
$('#page-overview')
	.clone()
	.removeAttr('class id')
	.addClass('page-overview-' + $pageOverviewPos)
	.prependTo('body')
	.children('a').each(function() {
		var $title = $(this).find(_heading).first().text();
		$(this)
			.attr('class', 'page-overview_item tooltip-' + $tooltipPos)
			.attr('data-tooltip', $title);
		$(window).load(function(){
			$('.page-overview-' + $pageOverviewPos).scrollSpy({
				selector : 'a'
			});
		});
	});