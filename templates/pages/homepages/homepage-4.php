<?php 
	include ('../../app.php');
	// page config
	$title = 'Homepage 4';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head() ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar(array(
                'modifiers' => 'fixed'
            ));

            appHeader(array(
                'modifiers' => 'bar-absolute-opaque'
            ));
			
			_homepage4();
        
            appFooter();
			
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>
</html>