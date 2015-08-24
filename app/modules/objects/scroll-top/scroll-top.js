//-----------------------------------------------------------------
// Scroll to Top
//-----------------------------------------------------------------

$(window).bind("scroll", function() {
    if ($(this).scrollTop() > 350) {
        $(".scroll-top").addClass('active');
    } else {
        $(".scroll-top").stop().removeClass('active');
    }
});