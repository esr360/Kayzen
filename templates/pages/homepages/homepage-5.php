<?php 
	include ('../../app.php');
	// page config
	$title = 'Homepage 5';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar(array(
                'modifiers' => 'fixed'
            ));

            appHeader(array(
                'modifiers' => 'bar-absolute-dark'
            ));

		?>

		<section class="billboard-full-screen-overlay">
			<div class="billboard_wrapper container text-left">
				<div class="short">
					<header class="heading_group">
						<h4 class="heading-uppercase-light-spaced-size-4"><span>This is Kayzen</span></h4>
						<h2 class="heading-uppercase-heavy-size-8 font-2"><span>The New Experience</span></h2>
					</header>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis dolor ut euismod pellentesque. Vivamus mattis cursus urna, non gravida purus pulvinar ac. Nunc dignissim velit justo, id aliquet neque.</p>
					<p class="button_group">
						<a class="button-size-4-grey-1" href="#ALAN">Purchase Now</a>
						<a class="button-size-4-border-white" href="#ALAN">Explore The Potential</a>
					</p>
				</div>
			</div>
			<nav class="slide-nav">
				<button class="slide-prev button-icon-border-size-3-white"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next button-icon-border-size-3-white"><i class="fa fa-angle-right"></i></button>
			</nav>
			<a href="#s-welcome" class="scroll-wheel"></a>
		</section>
		
		<?php 
        
            masonryFeatures();
        
            inStore();
            
            clients(array(
               'title'     => 'Popular Brands',
               'sub-title' => 'Get The Best Deals' 
            ));
            
            featureCards();
        
            promoBanner();
            
            shareTheLove();
            
            googleMap();
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>