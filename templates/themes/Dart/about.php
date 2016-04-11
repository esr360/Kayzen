<?php 
    include ('../../app.php');
    // page config
    $theme = 'Dart';
    $title = 'Our Company';
    $tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

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
            
            blocksWithQuote();
            
            testimonials();
            
            responsive(array(
                'iphone-colors' => array(
                    'white', 'red', 'red'
                )
            ));
            
            promoBanner();
            
            ourTeam();
            
            clients();
            
            promoSection();
        
            statistics();
    
            recentWork(array(
                'item-link' => themeLink($theme, '/portfolio-single.php')
            ));
            
            googleMap();
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>