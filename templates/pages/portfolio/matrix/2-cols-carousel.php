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
			
			<div id="portfolio-items" class="owl-carousel">
				
				<div class="container">
					<div class="row-no-gutter">
						
                        <?php
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'span'   => 6,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'span'   => 6,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'span'   => 6,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'span'   => 6,
                            ));
                            
                        ?>
                        
					</div>
				</div>
				
				<div class="container">
					<div class="row-no-gutter">
                        
                        <?php
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'span'   => 6,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'span'   => 6,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'span'   => 6,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'span'   => 6,
                            ));
                            
                        ?>
                        
					</div>
				</div>
							
			</div><!-- portfolio-items -->
			
			<nav class="slide-nav">
				<button class="slide-prev icon-border-size-4"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next icon-border-size-4"><i class="fa fa-angle-right"></i></button>
			</nav>
			
			<script>
				$(document).ready(function() {
					
					var portfolioCarousel = $("#portfolio-items");
					
					portfolioCarousel.owlCarousel({
						items: 1,
						loop: true
					})
			
					portfolioCarousel.find("+ .slide-nav .slide-next").click(function() {
						portfolioCarousel.trigger('next.owl.carousel');
					});
					portfolioCarousel.find("+ .slide-nav .slide-prev").click(function() {
						portfolioCarousel.trigger('prev.owl.carousel');
					});
					
                    $('.article-thumbnails-carousel').each(function() {
                        $(this).owlCarousel({
                            items : 1,
                            nav : true,
                            navText : [
                                '<i class="fa fa-angle-left fa-3x"></i>',
                                '<i class="fa fa-angle-right fa-3x"></i>'
                            ],
                            loop : true
                        })
                    });
					
				});
			</script>
			
		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>