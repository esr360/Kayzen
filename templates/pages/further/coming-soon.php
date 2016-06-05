<?php 
	include ('../../app.php');
	// page config
	$title = 'Check back soon';
	$tagLine = '';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head() ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-opaque-sticky'
            ));

            billboard([
                'modifiers' => 'full-screen',
                'headline'  => [
                    'text' => 'Coming Soon'
                ],
                'title' => [
                    'text' => $title
                ],
                'tag-line' => '',
                'countdown' => true
            ]);
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>
</html>