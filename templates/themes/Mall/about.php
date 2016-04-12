<?php 
    include ('../../app.php');
    // page config
    $theme = 'Mall';
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
            
            earthSlider(array(
                'title' => array(
                    'modifiers' => 'heading-uppercase-light-brand-1-size-5-highlight',
                    'highlight' => true
                ),
                'sub-title' => array(
                    'modifiers' => 'heading-uppercase-heavy-size-6 font-2-highlight-dark font-2',
                    'highlight' => true
                )
            ));
    
            skills();
            
            whyChooseUs(array(
                'title' => array(
                    'content' => 'Why Choose Us',
                    'modifiers' => 'heading-uppercase-light-brand-1-size-5-highlight',
                    'highlight' => true
                ),
                'sub-title' => array(
                    'content' => 'We Thrive On Success',
                    'modifiers' => 'heading-uppercase-heavy-size-6-highlight-dark font-2',
                    'highlight' => true
                )
            ));
            
            promoBanner(array(
                'cta-modifiers' => '-oval'
            ));
            
            ourTeam(array(
                'title' => array(
                    'content' => 'Our Team',
                    'modifiers' => 'heading-uppercase-light-brand-1-size-5-highlight',
                    'highlight' => true
                ),
                'sub-title' => array(
                    'content' => 'Meet Our Crazy Team',
                    'modifiers' => 'heading-uppercase-heavy-size-6 font-2-highlight-dark font-2',
                    'highlight' => true
                )
            ));
            
            clients();
            
            promoSection(array(
                'cta-modifiers' => '-oval'
            ));
        
            statistics();
    
            recentWork(array(
                'item-link' => themeLink($theme, '/portfolio-single.php'),
                'title' => array(
                    'content' => 'Our Portfolio',
                    'modifiers' => 'heading-uppercase-light-brand-1-size-5-highlight',
                    'highlight' => true
                ),
                'sub-title' => array(
                    'content' => 'Some Recent Work',
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