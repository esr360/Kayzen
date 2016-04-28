<?php 
    include ('../../app.php');
    // page config
    $theme = 'Nexus';
    $title = 'Homepage 2';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader($style = 'nexus') ?>

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
			
			include (ROOT.'/views/homepages/_homepage-2.php');
            
            /*
            recentArticles(array(
                'item-link' => themeLink($theme, '/blog-single.php'),
                'item-root' => themeLink($theme, '/blog.php')
            ));
            */
            
            appFooter();
                    
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>