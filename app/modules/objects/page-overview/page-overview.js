//-----------------------------------------------------------------
// Page Overview
//-----------------------------------------------------------------

$('#page-overview').clone()
	.removeAttr('class id')
	.addClass('page-overview-fixed')
	.prependTo('body')
	.children('a').each(function() {
		var $title = $(this).find($(heading)).text();
		$(this).attr('class', 'tooltip-right')
			.attr('data-tooltip', $title);
	});