<?php 
	include ('../../app.php');
	// page config
    $theme = 'Agenda';
	$title = 'Our Company';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
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

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
            
            earthSlider();
    
            skills();
            
            whyChooseUs();
            
            promoBanner(array(
                'cta-modifiers' => '-oval'
            ));
            
            ourTeam();
            
            clients();
            
            promoSection(array(
                'cta-modifiers' => '-oval'
            ));
        
            statistics();
    
            recentWork(array(
                'item-link' => themeLink($theme, '/portfolio-single.php')
            ));
            
            googleMap();
            
            appFooter(array(
                'columns' => false
            )); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>