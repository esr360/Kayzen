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
		
		<section class="section-primary relative">
			
			<div id="portfolio-carousel" class="owl-carousel">
				
				<div class="container">
					<div class="row-no-gutter">
						<?php 
							$rows = 2; 
							$columns = 2;
							$thumbTitle = true;
							include ('../includes/portfolio-items.php'); 
						?>
					</div>
				</div>
				
				<div class="container">
					<div class="row-no-gutter">
						<?php 
							$rows = 2; 
							$columns = 2;
							$thumbTitle = true;
							include ('../includes/portfolio-items.php'); 
						?>
					</div>
				</div>
							
			</div><!-- portfolio-carousel -->
			
			<nav class="slide-nav">
				<button class="slide-prev icon-border-size-4"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next icon-border-size-4"><i class="fa fa-angle-right"></i></button>
			</nav>
			
			<script>
				$(document).ready(function() {
					
					var portfolioCarousel = $("#portfolio-carousel");
					
					portfolioCarousel.owlCarousel({
						items: 1,
						loop: true
					})
			
					portfolioCarousel.find("+ .slide-nav .slide-next").click(function() {
						portfolioCarousel.trigger('next.owl.carousel');
					});
					portfolioCarousel.find("+ .slide-nav .slide-prev").click(function() {
						portfolioCarousel.trigger('prev.owl.carousel');
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