//=================================================================
// Flyout Navigation
//=================================================================

$(document).ready(function() {
    
    $('#flyout')
        .addClass('flyout-nav')
        .append('<nav class="side-nav"></nav>');

    var fnContainer = $('#flyout').find(sideNav);

    // create the flyout nav HTML
    function flyoutNav() {
        
        // relocate the flyout-trigger in the DOM
        $("#flyout-trigger").detach().prependTo('body')
        // clone the main nav into the flyout nav container
        $("#app-nav > ul").clone().appendTo(fnContainer);

    } // flyoutNav()

    $(flyoutNav);

}); // document.ready

$(window).load(function(){

    function toggleFlyout(state) {

        function flyoutEvents(){
            $('body').toggleClass('flyout-active');
            $('#flyout-trigger').toggleClass('active');
            $('#site-overlay').toggleClass('flyout-visible');
        }
        
        // is the flyout nav currently toggled?
        if($('body').hasClass('flyout-active')) {
            // yes
            if(state != 1) {
                flyoutEvents();
            }
        } else {
            // no
            if(state != 0) {
                flyoutEvents();
            }
        }

    } // toggleFlyout()

    // toggle the flyout nav
    $('#flyout-trigger').click(function() {
        toggleFlyout();
    });

    $('#flyout-nav a, .site-overlay').click(function() {
        toggleFlyout(0);
    });

}); // $(window).load()