<?php 
	include ('../../app.php');
	// page config
    $theme = 'Agenda';
	$title = 'Project Title';
	$tagLine = 'Aenean lobortis ante nunc curabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 

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

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
            
            sectionTitle(array(
                'title' => 'Single Project',
                'sub-title' => 'See How We Did It',
                'icon' => 'fa-magic'
            ));
            
            include (ROOT.'/sections/portfolio-thumbs.php');
            
            include (ROOT.'/sections/project-summary.php');
            
            include (ROOT.'/sections/what-we-did.php');
                    
            projectSections(array(
               'cta-modifiers' => '-oval' 
            ));
            
            socialWidgets(array(
                'section' => 'section-primary-flush-dot-map container'
            ));
        
            include (ROOT.'/sections/project-testimonial.php');
    
            recentWork(array(
                'item-link' => themeLink($theme, '/portfolio-single.php')
            ));
            
            promoBanner(array(
                'cta-modifiers' => '-oval'
            ));
            
            appFooter(array(
                'columns' => false
            )); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>