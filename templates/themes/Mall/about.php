<?php 
    include ('../../app.php');
    // page config
    $theme = 'Mall';
    $title = 'Our Company';
    $tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
    // update the global theme variable
    $GLOBALS['theme'] = $theme;
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

            billboard([
                'title'    => [
                    'text' => $title
                ],
                'tag-line' => $tagLine
            ]);
            
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
    
            skills(array(
                'title' => array(
                    'content' => 'Kayzen is the Best',
                    'modifiers' => 'heading-heavy-size-3-uppercase-highlight-dark font-2',
                    'highlight' => true
                ),
                'sub-title' => array(
                    'content' => 'A Modern Template For Any Project',
                    'modifiers' => 'heading-light-brand-1-size-4-highlight',
                    'highlight' => true
                )
            ));
            
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
            
            promoBanner();
            
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
            
            promoSection(array(
                'title' => array(
                    'content' => 'Kayzen is the Best',
                    'modifiers' => 'heading-heavy-size-3-uppercase-highlight-dark font-2',
                    'highlight' => true
                ),
                'sub-title' => array(
                    'content' => 'A Modern Template For Any Project',
                    'modifiers' => 'heading-light-brand-1-size-4-highlight',
                    'highlight' => true
                )
            ));
        
            statistics();
    
            recentArticles([
                'title' => [
                    'modifiers' => 'heading-uppercase-light-brand-1-size-5-highlight',
                    'highlight' => true
                ],
                'sub-title' => [
                    'modifiers' => 'heading-uppercase-heavy-size-6-highlight-dark font-2',
                    'highlight' => true
                ]
            ]);
            
            googleMap();
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>