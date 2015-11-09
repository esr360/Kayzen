<?php 
	include ('../../../app.php');
	// page config
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
			$topBarModifiers = '';
			include (ROOT.'/modules/top-bar.php'); 
		?>

		<?php 
			$headerModifiers = '-bar-absolute-dark-sticky'; 
			include (ROOT.'/modules/header.php'); 
		?>

		<?php include (ROOT.'/modules/billboard.php'); ?>
		
		<section class="section-primary">
				
			<div class="container-small">
                
                <div id="portfolio-items">
                    
                    <?php 
                        
                        articleItem(array(
                            'type'  => 'portfolio'
                        ));
                        
                        articleItem(array(
                            'media' => 'vimeo',
                            'type'  => 'portfolio'
                        ));
                        
                        articleItem(array(
                            'media' => 'youtube',
                            'type'  => 'portfolio'
                        ));
                        
                        articleItem(array(
                            'media' => 'carousel',
                            'type'  => 'portfolio'
                        ));
                        
                        articleItem(array(
                            'media' => 'masonry',
                            'type'  => 'portfolio'
                        ));
                        
                        articleItem(array(
                            'media' => 'audio',
                            'type'  => 'portfolio'
                        ));
                        
                        articleItem(array(
                            'media' => 'codepen',
                            'type'  => 'portfolio'
                        ));
                        
                    ?>
                
                </div>
				
			</div><!-- container -->

		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>