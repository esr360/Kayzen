//=================================================================
// Search
//=================================================================

$('#search-trigger').click(function(e) {
	$(searchBox)
		.addClass('search-box-visible')
		.find('[type="search"]')
		.focus();
	e.preventDefault();
});

$('.search-box_close').click(function() {
	$(searchBox).removeClass('search-box-visible');
});