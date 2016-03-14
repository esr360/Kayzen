<?php 
	include ('../../app.php');
	// page config
    $theme = 'Agenda';
	$title = 'Homepage 2';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink($theme, '/index.php'),
                    'About' => themeLink($theme, '/about.php'),
                    'Services' => themeLink($theme, '/services.php'),
                    'Portfolio' => themeLink($theme, '/portfolio.php'),
                    'Blog' => themeLink($theme, '/blog.php'),
                    'Contact' => themeLink($theme, '/contact.php')
                )
            ));

		?>

		<section class="billboard-full-screen-overlay">
			<div class="billboard_wrapper container text-left">
				<div class="short" id="billboard-fade-parallax">
					<header class="heading_group">
						<h3 class="heading-uppercase-heavy-size-8 font-2">Welcome to Kayzen</h3>
						<h2 class="heading-light-size-6"><span>A Unique & Modern Theme Framework</span></h2>
					</header>
					<p class="lede">Kayzen is a powerful themeing framework for architecting CSS for large, modular & scalable web applications. Built using only Sass (SCSS), Kayzen has the customizing power of a complete CMS theme.</p>
					<div class="button_group">
						<a class="button-oval-size-4-white" href="#">Purchase Now</a>
						<a class="button-oval-size-4-border-white" href="#">Explore The Potential</a>
					</div>
				</div>
			</div>
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
                'items'     => 6,
                'item-link' => themeLink($theme, '/portfolio-single.php')
            ));
            
            testimonials();
            
            recentArticles(array(
                'item-link' => themeLink($theme, '/blog-single.php'),
                'item-root' => themeLink($theme, '/blog.php')
            ));
		
            promoBanner(array(
                'cta-modifiers' => '-oval'
            ));
            
            contactUs();
            
            googleMap();
            
            appFooter(array(
                'columns' => false
            )); 
                    
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>