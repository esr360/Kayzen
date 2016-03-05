<?php 
	include ('../app.php');
	// page config
	$title = 'Modules';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-dark-sticky'
            ));

            billboard(array(
                'title'    => $title
            ));
            
        ?>
		
		<section id="kayzenElements" class="section-block">
			
			<header class="heading_group-block has-icon text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Elements</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>UI Components</span></h2>
					<div class="heading_icon">
						<i class="fa fa-cube"></i>
					</div>
				</div>
			</header>
				
			<?php elements(); ?>
			
		</section>
			
		<section id="kayzenObjects" class="section-block">
			
			<header class="heading_group-block has-icon text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Objects</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>Pre-Built Modules</span></h2>
					<div class="heading_icon">
						<i class="fa fa-cubes"></i>
					</div>
				</div>
			</header>
				
			<?php objects(); ?>
	
		</section>
			
		<section id="kayzenUtilities" class="section-block">
			
			<header class="heading_group-block has-icon text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Utilities</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>General Helpers</span></h2>
					<div class="heading_icon">
						<i class="fa fa-cubes"></i>
					</div>
				</div>
			</header>
				
			<?php utilities(); ?>
	
		</section>
        
		<?php 

            appFooter();
            
        ?>
        
        <script>
            $(document).ready(function() { 
                $('.widget_group-center').each(function() {
                    $(this).equalHeight();
                });
            });
        </script>
        
    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>