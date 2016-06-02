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
                'modifiers' => 'absolute-bar-sticky-opaque'
                //'modifiers' => 'side-left'
            ));
			
			_homepage1([
                'billboard' => [
                    'carousel' => true
                ]
            ]);
            
            appFooter();
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php') ?>

    <?php scripts() ?>

</body>
</html>