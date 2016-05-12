<?php 
	include ('../../app.php');
	// page config
	$title = 'Page Not Found';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
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
                'modifiers' => 'bar-absolute-dark-sticky'
            ));

            billboard([
                'modifiers' => 'full-screen',
                'headline' => [
                    'text' => '404'
                 ],
                'title' => [
                    'text' => $title
                ],
                'tag-line' => '',
                'search' => true
            ]);
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>
</html>