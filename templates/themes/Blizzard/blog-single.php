<?php 
    include ('../../app.php');
    // page config
    $theme = 'Blizzard';
    $title = 'Single Post Title';
    $tagLine = 'Aenean lobortis ante nunc, curabitur at enim ac nisi lacinia.';
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

            include (ROOT.'/views/blog/_single.php');
            
            appFooter(); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>