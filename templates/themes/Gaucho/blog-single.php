<?php 
    include ('../../app.php');
    // page config
    $theme = 'Gaucho';
    $title = 'Our Company';
    $tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
    // update the global theme variable
    $GLOBALS['theme'] = $theme;
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader($style = 'pacman') ?>

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

            billboard([
                'title'    => [
                    'text' => $title
                ],
                'tag-line' => $tagLine
            ]);
            
            _blogSingleSidebar([
                'link' => themeLink($theme, '/blog-single.php'),
                'root' => themeLink($theme, '/blog.php')
            ]);
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>