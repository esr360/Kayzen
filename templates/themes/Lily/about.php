<?php 
    include ('../../app.php');
    // page config
    $theme = 'Lily';
    $title = 'Our Company';
    $tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
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

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
            
            earthSlider();
    
            skills(array(
                'cta-modifiers' => '-oval'
            ));
            
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
                'item-link' => themeLink($theme, '/shop-category.php'),
                'title' => array(
                    'content' => 'Latest Products',
                    'modifiers' => 'heading-uppercase-light-brand-1-size-4-spaced',
                    'highlight' => false
                ),
                'sub-title' => array(
                    'content' => 'Whilst Stocks Last',
                    'modifiers' => 'heading-uppercase-heavy-size-7 font-2',
                    'highlight' => false
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