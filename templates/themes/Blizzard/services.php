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
        
            topbar(array(
                'side-header' => true,
                'flyout-trigger' => true
            ));

            billboard([
                'title'    => [
                    'text' => $title
                ],
                'tag-line' => $tagLine
            ]);
			
			include (ROOT.'/views/further/_services-3.php');
		
			appFooter();
		
		?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>
    
    <?php scripts($theme) ?>

</body>
</html>