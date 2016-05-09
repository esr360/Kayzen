<?php 
    include ('../../app.php');
    // page config
    $theme = 'Mall';
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
            
            _homepage5([
                'billboard' => [
                    'slide-nav' => false,
                    'headline' => [
                        'class' => 'heading-uppercase-light-size-5-highlight',
                        'text' => '<b>This is Kayzen</b>'
                    ],
                    'title' => [
                        'class' => 'heading-heavy-size-7-uppercase-highlight-dark font-2',
                        'text' => '<b>The New Experience</b>'
                    ],
                    'ctas' => [
                        ['button-size-4-grey-1-oval greyscale'],
                        ['button-size-4-border-white-oval']
                    ]
                ],
                'masonryFeatures' => [
                    'title-highlight' => 'highlight-dark',
                    'subTitle-highlight' => 'highlight'
                ],
                'inStore' => [
                    'title' => [
                        'modifiers' => 'heading-uppercase-light-brand-1-size-5-highlight',
                        'highlight' => true
                    ],
                    'sub-title' => [
                        'modifiers' => 'heading-uppercase-heavy-size-6-highlight-dark font-2',
                        'highlight' => true
                    ]
                ],
                'clients' => [
                    'title' => [
                        'content' => 'Popular Brands',
                        'modifiers' => 'heading-uppercase-light-brand-1-size-3-highlight',
                        'highlight' => true
                    ],
                    'sub-title' => [
                        'content' => 'Get The Best Deals',
                        'modifiers' => 'heading-uppercase-heavy-size-5-highlight-dark font-2',
                        'highlight' => true
                    ]
                ],
                'shareTheLove' => [
                    'title' => [
                        'modifiers' => 'heading-uppercase-light-brand-1-spaced-size-5-highlight',
                        'highlight' => true
                    ],
                    'sub-title' => [
                        'modifiers' => 'heading-uppercase-heavy-size-6-highlight-dark font-2',
                        'highlight' => true
                    ]
                ]
            ]);
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>