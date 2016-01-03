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
		
		<section class="section-primary-mini relative text-center">	
			<ul class="tabs_nav-pills-center" id="portfolio-categories">
				<li class="button-pill-grey-1-round active">View All</li>
				<li class="button-pill-grey-1-round">HTML Themes</li>
				<li class="button-pill-grey-1-round">Photography</li>
				<li class="button-pill-grey-1-round">Logos</li>
			</ul>
			<nav class="slide-nav" id="portfolio-carousel-nav">
				<button class="slide-prev button-icon-border-size-3"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next button-icon-border-size-3"><i class="fa fa-angle-right"></i></button>
			</nav>
		</section>
		
		<section class="section relative">
			
			<div id="portfolio-carousel" class="owl-carousel">
	
				<div class="row-no-gutter">
                    
                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                    ?>
					
				</div>

				<div class="row-no-gutter">
                    
                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                    ?>
					
				</div>

				<div class="row-no-gutter">
                    
                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                    ?>
					
				</div>

				<div class="row-no-gutter">
                    
                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 3,
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