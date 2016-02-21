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
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-dark-sticky'
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
           
       ?>
		
		<section class="section-primary relative">
			
			<div id="portfolio-carousel" class="owl-carousel">
				
				<div class="container">
	
					<div class="row-no-gutter">
    
                        <?php
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                        ?>
						
					</div>
				
				</div><!-- container -->
				
				<div class="container">
	
					<div class="row-no-gutter">
    
                        <?php
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                            articleItem(array(
                                'type'   => 'portfolio',
                                'matrix' => true,
                                'size'   => 'small',
                                'span'   => 3,
                            ));
                            
                        ?>
						
					</div>
				
				</div><!-- container -->
							
			</div><!-- portfolio-carousel -->
			
			<nav class="slide-nav">
				<button class="slide-prev button-icon-border-size-3"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next button-icon-border-size-3"><i class="fa fa-angle-right"></i></button>
			</nav>
			
			<script>
				$(document).ready(function() {
					
					var portfolioCarousel = $("#portfolio-carousel");
					
					portfolioCarousel.owlCarousel({
						items: 1,
						loop: true
					});
			
					portfolioCarousel.find("+ .slide-nav .slide-next").click(function() {
						portfolioCarousel.trigger('next.owl.carousel');
					});
					portfolioCarousel.find("+ .slide-nav .slide-prev").click(function() {
						portfolioCarousel.trigger('prev.owl.carousel');
					});
					
				});
			</script>
			
		</section>
		
		<?php
        
            promoBanner();
            
            appFooter(); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>