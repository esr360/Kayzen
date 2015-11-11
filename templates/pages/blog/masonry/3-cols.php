<?php 
	include ('../../../app.php');
	// page config
	$title = 'Our Blog';
	$tagLine = 'Read about all the great work we do';
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
				
			<div class="container">
                
                <div id="blog-items" class="row-flow row-waffle">
                    
                    <?php
                        
                        articleItem(array(
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'media'  => 'audio',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'media'  => 'youtube',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'media'  => 'audio',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                     
                    ?>
                
                </div>
                
                <ul class="pagination tabs_nav-pills object-center">
                    <li class="button-pill-grey-1-thin"><i class="fa fa-angle-left"></i></li>
                    <li class="button-pill-grey-1-thin">1</li>
                    <li class="button-pill-grey-1-thin active">2</li>
                    <li class="button-pill-grey-1-thin">3</li>
                    <li class="button-pill-grey-1-thin">...</li>
                    <li class="button-pill-grey-1-thin">10</li>
                    <li class="button-pill-grey-1-thin"><i class="fa fa-angle-right"></i></li>
                </ul>
            
                <script>
                    $(document).ready(function() {
                        
                        $('.article-thumbnails-carousel').each(function() {
                            $(this).owlCarousel({
                                items : 1,
                                nav : true,
                                navText : [
                                    '<i class="fa fa-angle-left fa-3x"></i>',
                                    '<i class="fa fa-angle-right fa-3x"></i>'
                                ],
                                loop : true
                            });
                        });
                        
                        $(window).load(function() {
                            $('#blog-items').isotope();
                        });
                        
                    });
                </script>
				
			</div><!-- container -->

		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>
    
    <?php if (env == 'dev') { ?>
        <script src="<?php echo appDir ?>/build/scripts/isotope.pkgd.js"></script>
    <?php } else if (env == 'prod') { ?>
        <script src="<?php echo appDir ?>/build/scripts/isotope.pkgd.min.js"></script>
    <?php } ?>

</body>