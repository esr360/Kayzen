//=================================================================
// Search
//=================================================================

$('#search-trigger').click(function(e) {
	$(_searchBox)
		.addClass('search-box-visible')
		.find('[type="search"]')
		.focus();
	e.preventDefault();
});

$('.search-box_close').click(function() {
	$(_searchBox).removeClass('search-box-visible');
});