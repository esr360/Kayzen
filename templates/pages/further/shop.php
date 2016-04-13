<?php 
	include ('../../app.php');
	// page config
	$title = 'Online Store';
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

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
            
            masonryFeatures();
        
            inStore();
            
            clients(array(
                'title' => array(
                    'content' => 'Popular Brands',
                    'modifiers' => 'heading-uppercase-light-brand-1-size-4',
                    'highlight' => false
                ),
                'sub-title' => array(
                    'content' => 'Get The Best Deals',
                    'modifiers' => 'heading-heavy-size-6 font-2',
                    'highlight' => false
                )
            ));
            
            featureCards();
            
            promoBanner();
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>