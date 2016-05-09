<?php 
    include ('../../app.php');
    // page config
    $theme = 'Blizzard';
    // update the global theme variable
    $GLOBALS['theme'] = $theme;
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php 
        
        preloader();

        appHeader(array(
            'nav-links'  => array(
                'Home' => themeLink($theme, '/index.php'),
                'Services' => themeLink($theme, '/services.php'),
                'Portfolio' => themeLink($theme, '/portfolio.php'),
                'Blog' => themeLink($theme, '/blog.php'),
                'Contact' => themeLink($theme, '/contact.php')
            )
        ));
    
    ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar([
                'side-header' => true
            ]);
			
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