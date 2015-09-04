//=================================================================
// Dropdown
//=================================================================

$(navigation).find('> ul > li > ul').on('mouseenter', function () {
	$(document).bind('mousewheel DOMMouseScroll',function(){ 
        stopWheel(); 
    });
}).on('mouseleave', function () {
    $(document).unbind('mousewheel DOMMouseScroll');
});