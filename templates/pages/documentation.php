<?php 
	include ('../app.php');
	// page config
	$title = 'Documentation';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php include (ROOT.'/modules/objects/header/header.php'); ?>

		<?php include (ROOT.'/modules/objects/billboard/billboard.php'); ?>
		
		<section class="section-primary">
			
			<div class="container-small">
				
				<div class="widget_group-large row-magic text-center" id="page-overview">
					
					<!-- Feature 1 -->
					<a class="widget-block-borderTop-scale span" href="#getting-started">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-power-off"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Getting started</h4>
						</header>
					</a>
					
					<!-- Feature 2 -->
					<a class="widget-block-borderTop-scale span" href="#configure">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-cog"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Configure</h4>
						</header>
					</a>
					
					<!-- Feature 3 -->
					<a class="widget-block-borderTop-scale span" href="#build">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-wrench"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Build</h4>
						</header>
					</a>
					
					<!-- Feature 4 -->
					<a class="widget-block-borderTop-scale span" href="#deploy">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-rocket"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Deploy</h4>
						</header>
					</a>
					
				</div>
			
				<h2 class="heading-light-size-5" id="getting-started">Getting Started</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ligula vel turpis pellentesque posuere. Vestibulum cursus mi ut nunc ultrices porttitor. Donec imperdiet efficitur hendrerit.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ligula vel turpis pellentesque posuere. Vestibulum cursus mi ut nunc ultrices porttitor. Donec imperdiet efficitur hendrerit.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ligula vel turpis pellentesque posuere. Vestibulum cursus mi ut nunc ultrices porttitor. Donec imperdiet efficitur hendrerit.</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ligula vel turpis pellentesque posuere. Vestibulum cursus mi ut nunc ultrices porttitor. Donec imperdiet efficitur hendrerit.</p>
				
			</div>
			
		</section>

		<?php include (ROOT.'/modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>