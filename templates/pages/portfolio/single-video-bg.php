<?php 
	include ('../../app.php');
	// page config
	$title = 'Project Title';
	$tagLine = 'Aenean lobortis ante nunc curabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head() ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 

            appHeader(array(
                'modifiers' => 'bar-absolute-sticky'
            ));
            
            billboard(array(
                'type' => 'videoBg'
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
        
            promoBanner();
            
            appFooter(); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>