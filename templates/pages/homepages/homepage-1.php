<?php 
	include ('../../app.php');
	// page config
	$title = 'Index';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar(array(
                'modifiers' => 'fixed'
            ));

            appHeader(array(
                'modifiers' => 'bar-absolute-dark'
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
            
            twitterFeed();
            
            googleMap();
            
            appFooter();
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>