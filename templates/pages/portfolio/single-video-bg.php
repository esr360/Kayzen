<?php 
	include ('../../app.php');
	// page config
	$title = 'Project Title';
	$tagLine = 'Aenean lobortis ante nunc curabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head() ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 

            appHeader(array(
                'modifiers' => 'bar-absolute-sticky'
            ));
            
            billboard([
                'type' => 'videoBg'
            ]);
            
            include (ROOT.'/views/portfolio/_single-video-bg.php');
            
            appFooter(); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>
</html>