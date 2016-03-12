<?php 
	include ('../../app.php');
	// page config
	$title = 'Get in Touch';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-dark-sticky'
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
            
            contactUs();
            
        ?>
        
        <section class="section-primary-flush-dot-map container"> 
            
            <div class="container-small">
                
				<?php socialWidgets() ?>
            
            </div>
            
        </section> 
        
        <?php
            
            googleMap();
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
		