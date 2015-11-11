<?php 
	include ('../../../app.php');
	// page config
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
?>

<!DOCTYPE html>
<html>

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content <?php echo ROOT ?>">
		
		<?php 
			$topBarModifiers = '';
			include (ROOT.'/modules/top-bar.php'); 
		?>

		<?php 
			$headerModifiers = '-bar-absolute-dark-sticky'; 
			include (ROOT.'/modules/header.php'); 
		?>

		<?php include (ROOT.'/modules/billboard.php'); ?>
		
		<section class="section-primary relative">
				
            <div class="container">

                <div class="row-flow row-waffle" id="portfolio-items">
                    
                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'audio',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'youtube',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'audio',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
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