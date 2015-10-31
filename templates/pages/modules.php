<?php 
	include ('../app.php');
	// page config
	$title = 'Reusable Modules';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php include ('../modules/objects/header/header.php'); ?>

		<?php include ('../modules/objects/billboard/billboard.php'); ?>
		
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
				
			<?php include ('../sections/elements.php'); ?>
			
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
				
			<?php include ('../sections/objects.php'); ?>
	
		</section>

		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>