<?php 
    include ('../../app.php');
    // page config
    $theme = 'Arndale';
    $title = 'Our Company';
    $tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
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

            billboard([
                'title'    => [
                    'text' => $title
                ],
                'tag-line' => $tagLine
            ]);
			
			_shopSingleSidebar([
                'item-link' => themeLink($theme, '/shop-single.php'),
                'item-root' => themeLink($theme, '/shop-category.php'),
                'blog-link' => themeLink($theme, '/blog-single.php'),
                'blog-root' => themeLink($theme, '/blog.php')
            ]);
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>