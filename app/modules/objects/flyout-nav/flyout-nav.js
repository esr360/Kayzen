//=================================================================
// Flyout Navigation
//=================================================================

$(document).ready(function() {
    
    $('#flyout')
        .addClass('flyout-nav')
        .append('<nav class="side-nav"></nav>');

    var fnContainer = $('#flyout').find(_sideNav);

    // create the flyout nav HTML
    function createFlyoutNav() {
        
        // relocate the flyout-trigger in the DOM
        $("#flyout-trigger").detach().prependTo('body')
        
        // clone the main nav into the flyout nav container
        $("#app-nav > ul").clone().appendTo(fnContainer);
        
        // add collapsible functionality
        if (_option('flyout-nav', 'collapsible')) {
            
            // create open/close icon
            var openClose = '<i class="side-nav_openClose fa ' + _module['side-nav']['collapsible']['icon'] + '"></i>'
            $(_flyoutNav).find('a:not(:only-child)').prepend(openClose);
        
            $(_flyoutNav)
                .find('li > [class*="mega-menu"]').parent()
                .find('.side-nav_openClose').remove();
                
            $(_flyoutNav).on('click', '.side-nav_openClose', function(e){
                $(this).parent().find('+ ul').slideToggle(baseTransition);
            });
                
        } else {
            $(_flyoutNav).find('.side-nav_openClose').remove();
        }

        // collapse by default
        var openDefault = _module['flyout-nav']['collapsible']['open-by-default'];
        
        if ($(_flyoutNav).is('[class*="-collapse"]') == true || openDefault == false) {
            $(_flyoutNav).find('a:not(:only-child) ~ ul').hide();
        }
    
    } // createFlyoutNav()

    $(createFlyoutNav);

}); // document.ready

$(window).load(function(){

    function toggleFlyout(state) {

        function flyoutEvents(){
            $('body').toggleClass('flyout-active');
            $('#flyout-trigger').toggleClass('active');
            $('#site-overlay').toggleClass('flyout_visible');
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