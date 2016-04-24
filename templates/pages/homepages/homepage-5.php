<?php 
	include ('../../app.php');
	// page config
	$title = 'Homepage 5';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head() ?>

<body>
    
    <?php preloader() ?>

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
					<p class="lede">Welcome to Kayzen; the next generation of website & app theming. Kayzen is more than just a theme, it's a theme framework, custom built from the ground up to help make theming great again.</p>
					<div class="button_group">
						<a class="button-size-4-grey-1" href="#">Purchase Now</a>
						<a class="button-size-4-border-white" href="#">Explore The Potential</a>
					</div>
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
                'title' => array(
                    'content' => 'Popular Brands',
                    'modifiers' => 'heading-uppercase-light-brand-1-size-4',
                    'highlight' => false
                ),
                'sub-title' => array(
                    'content' => 'Get The Best Deals',
                    'modifiers' => 'heading-heavy-size-6 font-2',
                    'highlight' => false
                )
            ));
            
            featureCards();
        
            promoBanner();
            
            shareTheLove();
            
            googleMap();
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>
</html>