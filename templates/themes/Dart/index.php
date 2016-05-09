<?php 
    include ('../../app.php');
    // page config
    $theme = 'Dart';
    // update the global theme variable
    $GLOBALS['theme'] = $theme;
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php 
    
        preloader($style = 'pacman');

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
        
    ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();
			
			_homepage4([
                'billboard' => [
                    'slide-nav' => false,
                    'title' => [
                        'text' => '<b>Welcome to Kayzen<br />A Unique Theme Framework</b>',
                        'class' => 'heading-uppercase-heavy-size-8-highlight-dark font-2'
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