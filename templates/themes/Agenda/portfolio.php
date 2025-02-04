<?php 
    include ('../../app.php');
    // page config
    $theme = 'Agenda';
    $title = 'Our Portfolio';
    $tagLine = 'Some of our most recent and best work';
    // update the global theme variable
    $GLOBALS['theme'] = $theme;
?>

<!DOCTYPE html>
<html>

<?php head($theme) ?>

<body>
    
    <?php 
        
        preloader($style = 'pacman');

        appHeader(array(
            'nav-links'  => array(
                'Home' => themeLink($theme, '/index.php'),
                'About' => themeLink($theme, '/index.php').'#s-about',
                'Services' => themeLink($theme, '/index.php').'#s-services',
                'Portfolio' => themeLink($theme, '/index.php').'#s-portfolio',
                'Blog' => themeLink($theme, '/index.php').'#s-blog',
                'Contact' => themeLink($theme, '/index.php').'#s-contact'
            )
        ));
    
    ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php

            billboard([
                'title'    => [
                    'text' => $title
                ],
                'tag-line' => $tagLine
            ]);
            
            include (ROOT.'/views/portfolio/article/_full-width.php');
            
            appFooter(array(
                'columns' => false
            )); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>