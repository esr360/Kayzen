<?php 
    include ('../../app.php');
    // page config
    $theme = 'Hollywood';
    // update the global theme variable
    $GLOBALS['theme'] = $theme;
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader($style = 'wave') ?>

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
			
			_homepage6([
                'blog-category' => themeLink($theme, '/blog.php'),
                'blog-single' => themeLink($theme, '/blog-single.php'),
                'masonryFeatures' => [
                    'link' => themeLink($theme, '/blog-single.php'),
                    'title-highlight' => 'highlight-dark',
                    'subTitle-highlight' => 'highlight'
                ],
                'sidebar' => [
                    'item-link' => themeLink($theme, '/blog-single.php'),
                    'category' => themeLink($theme, '/blog.php')
                ]
            ]);
            
            appFooter();
                    
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>