<?php 
    include ('../../app.php');
    // page config
    $theme = 'Arndale';
    // update the global theme variable
    $GLOBALS['theme'] = $theme;
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php 
    
        preloader($style = 'newton'); 

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

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();
			
			_homepage5([
                'billboard' => [
                    'ctas' => [
                        ['button-size-4-primary'],
                        ['button-size-4-border-white']
                    ],
                    'slide-nav' => false
                ],
                'masonryFeatures' => [
                    'title-highlight' => 'highlight-dark',
                    'subTitle-highlight' => 'highlight',
                    'link' => themeLink($theme, '/shop-category.php'),
                ],
                'inStore' => [
                    'link' => themeLink($theme, '/shop-single.php'),
                    'root' => themeLink($theme, '/shop-category.php')
                ],
                'featureCards' => [
                    'item-link' => themeLink($theme, '/shop-category.php')
                ]
            ]);
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>