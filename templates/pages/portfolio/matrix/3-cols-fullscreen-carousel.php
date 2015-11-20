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
                'modifiers' => 'bar-absolute-dark-stick'
            ));
            
            billboard();

		?>
		
		<section class="section-primary-mini relative text-center">	
			<ul class="tabs_nav-pills" id="portfolio-categories">
				<li class="button-pill-grey-1-thin active">View All</li>
				<li class="button-pill-grey-1-thin">HTML Themes</li>
				<li class="button-pill-grey-1-thin">Photography</li>
				<li class="button-pill-grey-1-thin">Logos</li>
			</ul>
			<nav class="slide-nav" id="portfolio-carousel-nav">
				<button class="slide-prev icon-border-size-4"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next icon-border-size-4"><i class="fa fa-angle-right"></i></button>
			</nav>
		</section>
		
		<section class="section relative">
			
			<div id="portfolio-carousel" class="owl-carousel">
	
				<div class="row-no-gutter">
                    
                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                    ?>
					
				</div>

				<div class="row-no-gutter">
                    
                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                    ?>
					
				</div>

				<div class="row-no-gutter">
                    
                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                    ?>
					
				</div>

				<div class="row-no-gutter">
                    
                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                        ));
                        
                    ?>
					
				</div>
							
			</div><!-- portfolio-carousel -->
			
			<script>
				$(document).ready(function() {
					
					$("#portfolio-carousel").kCarousel({
						navId: '#portfolio-carousel-nav',
						pagerId: '#portfolio-categories'
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