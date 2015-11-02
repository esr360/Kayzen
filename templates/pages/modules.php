<?php 
	include ('../app.php');
	// page config
	$title = 'Reusable Modules';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php include (ROOT.'/modules/objects/header/header.php'); ?>

		<?php include (ROOT.'/modules/objects/billboard/billboard.php'); ?>
		
		<section class="section-block">
			
			<header class="heading_group-block has-icon text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Elements</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>UI Components</span></h2>
					<div class="heading_icon">
						<i class="fa fa-cube"></i>
					</div>
				</div>
			</header>
				
			<?php include (ROOT.'/sections/elements.php'); ?>
			
		</section>
			
		<section class="section-block">
			
			<header class="heading_group-block has-icon text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Objects</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>Pre-Built Modules</span></h2>
					<div class="heading_icon">
						<i class="fa fa-cubes"></i>
					</div>
				</div>
			</header>
				
			<?php include (ROOT.'/sections/objects.php'); ?>
	
		</section>

		<?php include (ROOT.'/modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>