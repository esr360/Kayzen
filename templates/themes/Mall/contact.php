<?php 
    include ('../../app.php');
    // page config
    $theme = 'Mall';
    $title = 'Get in Touch';
    $tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink($theme, '/index.php'),
                    'About' => themeLink($theme, '/about.php'),
                    'Shop' => themeLink($theme, '/shop-category.php'),
                    'Blog' => themeLink($theme, '/blog.php'),
                    'Contact' => themeLink($theme, '/contact.php')
                )
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
            
            contactUs(array(
                'title' => array(
                    'content' => 'Contact Us',
                    'modifiers' => 'heading-uppercase-light-brand-1-size-5-highlight',
                    'highlight' => true
                ),
                'sub-title' => array(
                    'content' => 'Get in Touch',
                    'modifiers' => 'heading-uppercase-heavy-size-6-highlight-dark font-2',
                    'highlight' => true
                )
            ));
            
        ?>
        
        <div class="container-small">
            
            <?php socialWidgets() ?>

        </div>

        <section class="section-primary-flush-dot-map container"></section> 
        
        <?php
            
            googleMap();
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
		