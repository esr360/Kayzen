<?php 
include ('../../app.php');
// page config
$theme = 'Lily';
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
						<h4 class="heading-uppercase-light-spaced-size-4"><span>This is Kayzen</span></h4>
						<h2 class="heading-uppercase-heavy-size-8 font-2"><span>The New Experience</span></h2>
					</header>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis dolor ut euismod pellentesque. Vivamus mattis cursus urna, non gravida purus pulvinar ac. Nunc dignissim velit justo, id aliquet neque.</p>
					<div class="button_group">
						<a class="button-size-4-primary-oval" href="#">Purchase Now</a>
						<a class="button-size-4-grey-1-border-oval" href="#">Explore The Potential</a>
					</div>
				</div>
			</div>
			<a href="#s-welcome" class="scroll-wheel"></a>
		</section>
		
		<?php 
        
            masonryFeatures(array(
                'link' => themeLink($theme, '/shop-category.php'),
                'title-highlight' => 'highlight-dark',
                'subTitle-highlight' => 'highlight-dark'
            ));
        
            inStore(array(
                'tabs_nav_item-modifiers' => '-round',
                'link' => themeLink($theme, '/shop-single.php'),
                'root' => themeLink($theme, '/shop-category.php')
            ));
            
            clients(array(
                'title' => array(
                    'content' => 'Our Clients',
                    'modifiers' => 'heading-uppercase-light-brand-1-size-4',
                    'highlight' => false
                ),
                'sub-title' => array(
                    'content' => 'Who We Work With',
                    'modifiers' => 'heading-heavy-size-6 font-2',
                    'highlight' => false
                )
            ));
            
            featureCards();
        
            promoBanner(array(
                'cta-modifiers' => '-oval'
            ));
            
            shareTheLove();
            
            googleMap();
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>