//=================================================================
// Search
//=================================================================

$('#search-trigger').click(function() {
	$(search)
		.addClass('search-visible')
		.find('[type="search"]')
		.focus();
});

$('.search_close').click(function () {
	$(search).removeClass('search-visible');
});