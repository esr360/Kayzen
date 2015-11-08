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
		
		<section class="section-primary-mini relative text-center">	
			<ul class="tabs_nav-pills" id="portfolio-categories">
				<li class="button-pill-grey-1-thin active" data-filter="*">View All</li>
				<li class="button-pill-grey-1-thin" data-filter="[data-HTML-theme]">Image</li>
				<li class="button-pill-grey-1-thin" data-filter="[data-photography]">Carousel</li>
				<li class="button-pill-grey-1-thin" data-filter="[data-logo]">Video</li>
				<li class="button-pill-grey-1-thin" data-filter="[data-logo]">Audio</li>
			</ul>
		</section>
		
		<section class="section-primary-flush">
				
			<div class="container">
                
                <div id="blog-items" class="row-flow row-waffle">
                        
                    <div class="span-4">
                        <?php articleItem('image', 'small', 'tall'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php articleItem('video', 'small'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php articleItem('carousel', 'small', 'tall'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php articleItem('audio', 'small', 'tall'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php articleItem('video', 'small', 'tall'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php articleItem('image', 'small'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php articleItem('carousel', 'small'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php articleItem('carousel', 'small', 'tall'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php articleItem('audio', 'small'); ?>
                    </div>
                
                </div>
            
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