<?php 
	include ('../app.php');
	// page config
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
			$topBarModifiers = '';
			include ('../modules/objects/top-bar/top-bar.php'); 
		?>

		<?php 
			$headerModifiers = '-bar-absolute-dark-sticky'; 
			include ('../modules/objects/header/header.php'); 
		?>

		<?php include ('../modules/objects/billboard/billboard.php'); ?>
		
		<section class="section-primary-mini relative text-center">	
			<ul class="tabs_nav-pills" id="portfolio-categories">
				<li class="button-pill-grey-1-thin active">View All</li>
				<li class="button-pill-grey-1-thin">HTML Themes</li>
				<li class="button-pill-grey-1-thin">Photography</li>
				<li class="button-pill-grey-1-thin">Logos</li>
			</ul>
			<nav class="slide-nav" id="portfolio-carousel-nav">
				<button class="slide-prev icon-border-size-4"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next icon-border-size-4"><i class="fa fa-angle-right"></i></button>
			</nav>
		</section>
		
		<section class="section relative">
			
			<div id="portfolio-carousel" class="owl-carousel">
	
				<div class="row-no-gutter">
					
					<?php 
						$rows = 2; 
						$columns = 4;
						$thumbTitle = true;
						include ('../includes/portfolio-items.php'); 
					?>
					
				</div>

				<div class="row-no-gutter">
					
					<?php 
						$rows = 2; 
						$columns = 4;
						$thumbTitle = true;
						include ('../includes/portfolio-items.php'); 
					?>
					
				</div>

				<div class="row-no-gutter">
					
					<?php 
						$rows = 2; 
						$columns = 4;
						include ('../includes/portfolio-items.php'); 
					?>
					
				</div>

				<div class="row-no-gutter">
					
					<?php 
						$rows = 2; 
						$columns = 4;
						include ('../includes/portfolio-items.php'); 
					?>
					
				</div>
							
			</div><!-- portfolio-carousel -->
			
			<script>
				$(document).ready(function() {
					
					$("#portfolio-carousel").kCarousel({
						navId: '#portfolio-carousel-nav',
						pagerId: '#portfolio-categories'
					});
					
				});
			</script>
			
		</section>
		
		<?php include ('../sections/promo-banner.php'); ?>
		
		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>