<?php 
    include ('../../app.php');
    // page config
    $theme = 'Mall';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader($style = 'pacman') ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink($theme, '/index.php'),
                    'About' => themeLink($theme, '/about.php'),
                    'Shop' => themeLink($theme, '/shop-category.php'),
                    'Blog' => themeLink($theme, '/blog.php'),
                    'Contact' => themeLink($theme, '/contact.php')
                )
            ));

		?>

		<section class="billboard-full-screen-overlay">
			<div class="billboard_wrapper container text-left">
				<div class="short">
					<header class="heading_group">
						<h4 class="heading-uppercase-light-size-5-highlight"><b>This is Kayzen</b></h4>
						<h2 class="heading-heavy-size-7-uppercase-highlight-dark font-2"><b>The New Experience</b></h2>
					</header>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis dolor ut euismod pellentesque. Vivamus mattis cursus urna, non gravida purus pulvinar ac. Nunc dignissim velit justo, id aliquet neque.</p>
					<div class="button_group">
						<a class="button-size-4-grey-1-oval greyscale" href="#">Purchase Now</a>
						<a class="button-size-4-border-white-oval" href="#">Explore The Potential</a>
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
        
            masonryFeatures(array(
                'title-highlight' => 'highlight-dark',
                'subTitle-highlight' => 'highlight'
            ));
        
            inStore(array(
                'title' => array(
                    'content' => 'In Store',
                    'modifiers' => 'heading-uppercase-light-brand-1-size-5-highlight',
                    'highlight' => true
                ),
                'sub-title' => array(
                    'content' => 'Shop Til You Drop',
                    'modifiers' => 'heading-uppercase-heavy-size-6-highlight-dark font-2',
                    'highlight' => true
                )
            ));
            
            clients(array(
                'title' => array(
                    'content' => 'Popular Brands',
                    'modifiers' => 'heading-uppercase-light-brand-1-size-3-highlight',
                    'highlight' => true
                ),
                'sub-title' => array(
                    'content' => 'Get The Best Deals',
                    'modifiers' => 'heading-uppercase-heavy-size-5-highlight-dark font-2',
                    'highlight' => true
                )
            ));
            
            featureCards(array(
                'cta-modifiers' => '-oval'
            ));
        
            promoBanner(array(
                'cta-modifiers' => '-oval'
            ));
            
            shareTheLove(array(
                'title' => array(
                    'content' => 'Share The Love',
                    'modifiers' => 'heading-uppercase-light-brand-1-spaced-size-5-highlight',
                    'highlight' => true
                ),
                'sub-title' => array(
                    'content' => 'We Are Social <i class="fa fa-heart heading-brand-1"></i>',
                    'modifiers' => 'heading-uppercase-heavy-size-6-highlight-dark font-2',
                    'highlight' => true
                )
            ));
            
            googleMap();
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>