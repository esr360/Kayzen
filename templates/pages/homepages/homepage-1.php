<?php 
	include ('../../app.php');
	// page config
	$title = 'Index';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head() ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-dark-sticky'
            ));

            billboard(array(
                'type'     => 'homepage',
                'title'    => $title
            ));
            
            keyFeatures();
            
            promoBanner();
            
            showcase();
            
            infoBanner();
            
            keyFeatures2();
            
            promoSection();
            
            responsive();
            
            promoBanner();
            
            options();
            
            infoBanner();
            
            layouts();
            
            statistics();
            
            shortcodes();
            
            promoSection(array(
                'dark' => true
            ));
            
            moreFeatures();
            
            promoBanner(array(
                'minimal' => true
            ));
            
            contactUs();
            
            googleMap();
            
            appFooter();
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php') ?>

    <?php scripts() ?>

</body>
</html>