<?php 
    include ('../../app.php');
    // page config
    $theme = 'Blizzard';
    $title = 'Creative Services';
    $tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
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
                )
            ));

            billboard([
                'title'    => [
                    'text' => $title
                ],
                'tag-line' => $tagLine
            ]);
			
			include (ROOT.'/views/_features.php');
		
			appFooter();
		
		?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>
    
    <?php scripts($theme) ?>

</body>
</html>