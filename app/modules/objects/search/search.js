//=================================================================
// Search
//=================================================================

$('#search-trigger').click(function() {
	$(_searchBox)
		.addClass('search-box-visible')
		.find('[type="search"]')
		.focus();
    return false;
});

$('.search-box_close').click(function() {
	$(_searchBox).removeClass('search-box-visible');
});