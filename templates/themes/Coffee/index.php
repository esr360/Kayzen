<?php 
    include ('../../app.php');
    // page config
    $theme = 'Coffee';
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
                    'Blog' => themeLink($theme, '/blog.php'),
                    'Contact' => themeLink($theme, '/contact.php')
                )
            ));
            
            billboard([
                'type' => 'homepage',
                'wrapper-class' => 'text-left',
                'headline' => [
                    'class' => 'heading-uppercase-light-size-5-highlight',
                    'text' => '<b>This is Kayzen</b>'
                ],
                'title' => [
                    'class' => 'heading-heavy-size-7-uppercase-highlight-dark font-2',
                    'text' => '<b>The New Experience</b>'
                ],
                'ctas' => [
                    [
                        'button-oval-size-4-primary',
                        '#',
                        'Purchase Now'
                    ],
                    [
                        'button-oval-size-4-border-white',
                        '#s-welcome',
                        'Explore The Potential'
                    ]
                ],
                'bg-parallax' => false,
            ]);
            
            _homepage6([
                'masonryFeatures' => [
                    'title-highlight' => 'highlight-dark',
                    'subTitle-highlight' => 'highlight'
                ]
            ]);
            
            appFooter();
                    
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>