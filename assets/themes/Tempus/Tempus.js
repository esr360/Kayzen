$(document).ready(function() {
    
//-----------------------------------------------------------------
// Elements
//-----------------------------------------------------------------

    $(_accordion).accordion();
    
    $(_form).form();

    $(_modal).modal();
    
    $('progress.progress-bar').progressBar();

    $(_tabs).tabs();

    $(_tooltip).each(function() {
        
        if ($(this).is('[class*="-top"]')) {
            
            $(this).tooltip({
                position : "top"
            });
            
        } else if ($(this).is('[class*="-bottom"]')) {
            
            $(this).tooltip({
                position : "bottom"
            });
            
        } else if ($(this).is('[class*="-left"]')) {
            
            $(this).tooltip({
                position : "left"
            });
            
        } else if ($(this).is('[class*="-right"]')) {
            
            $(this).tooltip({
                position : "right"
            });
            
        } else {
            
            $(this).tooltip({
                position : "top"
            });
            
        }
        
    });

//-----------------------------------------------------------------
// Modules
//-----------------------------------------------------------------

    $(_billboard).billboard({
        parallaxContent: true
    });
    
    $('#google-map').googleMap();

    $(_footer).footer();

    $('#flyout').flyoutNav({
        trigger : '#flyout-trigger, #demo-flyout-trigger'
    });
    
    $(_appHeader).header();
    
    $('#page-overview').pageOverview();
    
    $(_preloader).preloader();
    
    $(_scrollTop).scrollToTop();
    
    $('#search-trigger').searchBox();
    
    $(_topBar).topBar();
    
    $(_twitterFeed).twitterFeed();

}); // document.ready