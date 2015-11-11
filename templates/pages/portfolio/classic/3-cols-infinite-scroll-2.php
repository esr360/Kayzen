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
		
		<section class="section-primary relative">
				
            <div class="container">

                <div class="row-flow row-waffle" id="portfolio-items">

                    <?php
                        
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
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'youtube',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'type'   => 'portfolio',
                            'size'   => 'small',
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
                        
                    ?>
                    
                </div>
                    
                <script>
				    $(document).ready(function() { 
                        $("#portfolio-items").KayenInfiniteScroll({
                            isotopeGrid : false
                        });
                    });
                </script>
                
                <ul id="pagination">
                    <li class="next"><a href="3-cols-infinite-scroll-3.php">3</a></li>
                </ul>
            
            </div><!-- container -->
			
		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>
    
    <?php if (env == 'dev') { ?>
        <script src="<?php echo appDir ?>/build/scripts/jquery-ias.js"></script>
    <?php } else if (env == 'prod') { ?>
        <script src="<?php echo appDir ?>/build/scripts/jquery-ias.min.js"></script>
    <?php } ?>

</body>