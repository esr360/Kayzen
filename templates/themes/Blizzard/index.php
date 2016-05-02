<?php 
    include ('../../app.php');
    // page config
    $theme = 'Blizzard';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar(array(
                'social-links' => array(
                    'facebook', 'twitter'
                ),
                'side-header' => true,
                'flyout-trigger' => true
            ));

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink($theme, '/index.php'),
                    'Services' => themeLink($theme, '/services.php'),
                    'Portfolio' => themeLink($theme, '/portfolio.php'),
                    'Blog' => themeLink($theme, '/blog.php'),
                    'Contact' => themeLink($theme, '/contact.php')
                ),
                'flyout-trigger' => false
            ));
			
			_homepage3([
                'billboard' => [
                    'slide-nav' => false
                ]
            ]);
            
            appFooter(array(
                'blurb' => true
            )); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>
    
    <?php scripts($theme) ?>

</body>
</html>