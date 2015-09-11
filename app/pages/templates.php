<?php 
	include ('../app.php');
	// page config
	$title = 'Templates';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php include ('../modules/objects/header/header.php'); ?>

		<?php include ('../modules/objects/billboard/billboard.php'); ?>
		
		<section class="section-primary">
			
			<div class="container-small">
				
				<div class="widget_group-large row-magic text-center" id="page-overview">
					
					<!-- Feature 1 -->
					<a class="widget-block-borderTop-scale span" href="#getting-started">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-home"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Homepages</h4>
						</header>
					</a>
					
					<!-- Feature 2 -->
					<a class="widget-block-borderTop-scale span" href="#configure">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-commenting"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Portfolio/Blog</h4>
						</header>
					</a>
					
					<!-- Feature 3 -->
					<a class="widget-block-borderTop-scale span" href="#build">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-clone"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Further Pages</h4>
						</header>
					</a>
					
					<!-- Feature 4 -->
					<a class="widget-block-borderTop-scale span" href="#deploy">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-cog"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Utility Pages</h4>
						</header>
					</a>
					
				</div>
				
			</div>
				
		</section>

		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>