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
            
            _homepage5([
                'billboard' => [
                    'ctas' => [
                        ['button-size-4-primary'],
                        ['button-size-4-border-white']
                    ]
                ],
                'masonryFeatures' => [
                    'link' => themeLink($theme, '/shop-category.php'),
                    'title-highlight' => 'highlight-dark',
                    'subTitle-highlight' => 'highlight-dark'
                ],
                'inStore' => [
                    'tabs_nav_item-modifiers' => '-round',
                    'link' => themeLink($theme, '/shop-single.php'),
                    'root' => themeLink($theme, '/shop-category.php')
                ],
                'clients' => [
                    'title' => [
                        'modifiers' => 'heading-uppercase-light-brand-1-size-4',
                        'highlight' => false
                    ],
                    'sub-title' => [
                        'modifiers' => 'heading-heavy-size-6 font-2',
                        'highlight' => false
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