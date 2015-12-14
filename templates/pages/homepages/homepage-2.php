<?php 
	include ('../../app.php');
	// page config
	$title = 'Homepage 2';
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

		<section class="billboard-full-screen">
			<div class="billboard_wrapper container text-left">
				<div class="short" id="billboard-fade-parallax">
					<header class="heading_group">
						<h3 class="heading-uppercase-heavy-size-8 font-2">Welcome to Kayzen</h3>
						<h2 class="heading-light-size-6"><span>A Unique & Modern Theme Framework</span></h2>
					</header>
					<p class="lede">Kayzen is a powerful themeing framework for architecting CSS for large, modular & scalable web applications. Built using only Sass (SCSS), Kayzen has the customizing power of a complete CMS theme.</p>
					<p class="button_group">
						<a class="button-oval-size-4-white" href="#ALAN">Purchase Now</a>
						<a class="button-oval-size-4-border-white" href="#ALAN">Explore The Potential</a>
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
        
            earthSlider(); 
            
            skills(array(
                'cta-modifiers' => '-oval'
            ));
        
		    whyChooseUs();
		
            promoBanner(array(
                'cta-modifiers' => '-oval'
            ));
        
		    ourTeam();
            
            promoSection(array(
                'cta-modifiers' => '-oval'
            ));
            
            services();
            
            statistics();
            
            keyFeatures2();
            
            clients();
            
            pricing();
            
            featureQuote();
            
            recentWork(array(
                'items' => 6
            ));
            
            testimonials();
            
            recentArticles();
		
            promoBanner(array(
                'cta-modifiers' => '-oval'
            ));
            
            contactUs();
            
            googleMap();
            
            appFooter();
                    
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>