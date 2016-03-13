<?php 
	include ('../../app.php');
	// page config
	$title = 'Our Company';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink('/index.php'),
                    'About' => themeLink('/about.php'),
                    'Services' => themeLink('/services.php'),
                    'Portfolio' => themeLink('/portfolio.php'),
                    'Blog' => themeLink('/blog.php'),
                    'Contact' => themeLink('/contact.php')
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
                'item-link' => themeLink('/portfolio-single.php')
            ));
            
            googleMap();
            
            appFooter(array(
                'columns' => false
            )); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>