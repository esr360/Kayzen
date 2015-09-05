<?php 
	include ('../app.php');
	// start the ouput buffer
	ob_start(); 
	// page config
	$title = 'Awesome Features';
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
			
				<div class="widget_group-grid-large row-flow" id="page-overview">
					
					<!-- Feature 1 -->
					<a class="widget-block-borderLeft span-4" href="#modular-ui">
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-cubes"></i>
						</div>
						<header class="widget_header-inline heading_group">
							<h3 class="heading">100% Modular UI</h3>
							<h4 class="heading-light-uppercase-brand-1-size-1">Take complete control</h4>
						</header>
					</a>
					
					<!-- Feature 2 -->
					<a class="widget-block-borderLeft span-4" href="#page-builder">
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-arrows"></i>
						</div>
						<header class="widget_header-inline heading_group">
							<h3 class="heading">Page Builder</h3>
							<h4 class="heading-light-uppercase-brand-1-size-1">Drag & Drop Page Builder</h4>
						</header>
					</a>
					
					<!-- Feature 3 -->
					<a class="widget-block-borderLeft span-4" href="#unique-configuration">
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-cog"></i>
						</div>
						<header class="widget_header-inline heading_group">
							<h3 class="heading">Unique Configuration</h3>
							<h4 class="heading-light-uppercase-brand-1-size-1">Sass Powered Configuration</h4>
						</header>
					</a>
					
					<!-- Feature 4 -->
					<a class="widget-block-borderLeft span-4" href="#custom-grid-system">
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-th-large"></i>
						</div>
						<header class="widget_header-inline heading_group">
							<h3 class="heading">Custom Grid System</h3>
							<h4 class="heading-light-uppercase-brand-1-size-1">Our Own Powerful Grid</h4>
						</header>
					</a>
					
					<!-- Feature 5 -->
					<a class="widget-block-borderLeft span-4" href="#intelligent-theming">
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-eyedropper"></i>
						</div>
						<header class="widget_header-inline heading_group">
							<h3 class="heading">Intelligent Theming</h3>
							<h4 class="heading-light-uppercase-brand-1-size-1">Theming Like Never Before</h4>
						</header>
					</a>
					
					<!-- Feature 6 -->
					<a class="widget-block-borderLeft span-4" href="#mobile-optimised">
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-tablet"></i>
						</div>
						<header class="widget_header-inline heading_group">
							<h3 class="heading">Mobile Optimised</h3>
							<h4 class="heading-light-uppercase-brand-1-size-1">Perfect On Any Device</h4>
						</header>
					</a>
					
				</div>
			
			</div>
			
		</section>
		
		<section class="section-primary" id="modular-ui" style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')">
			<div class="container-small">
				<div class="row">
					<div class="span-8">
						<header class="heading_group">
							<h2 class="heading-light-size-6">100% Modular UI</h2>
						</header>
						<p>Kayzen's revolutionary modular structure means that customizing your project's UI has never been easier. With UI elements for every purpose, you can easily include only the ones you need, keeping your assets lighter and your website faster.</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section-primary" id="page-builder">
			<div class="container-small text-right">
				<div class="row">
					<div class="span-8">
						<header class="heading_group">
							<h2 class="heading-light-size-6">Drag & Drop Page Builder</h2>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan neque eros, quis sodales orci tincidunt eget. Morbi vehicula nulla ac ante hendrerit tempus. Donec rutrum arcu a felis ornare, luctus condimentum velit semper.</p>
					</div>
				</div>
			</div>
		</section>
		
		<hr class="stripes container-small" />
		
		<section class="section-primary" id="unique-configuration">
			<div class="container-small">
				<div class="row">
					<div class="span-8">
						<header class="heading_group">
							<h2 class="heading-light-size-6">Unique Configuration</h2>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan neque eros, quis sodales orci tincidunt eget. Morbi vehicula nulla ac ante hendrerit tempus. Donec rutrum arcu a felis ornare, luctus condimentum velit semper.</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section-secondary-overlay" id="custom-grid-system" style="background-image: url('<?php echo appDir ?>/images/billboard-1.jpg')">
			<div class="container-small text-right">
				<div class="row">
					<div class="span-8">
						<header class="heading_group">
							<h2 class="heading-light-size-6">Custom Grid system</h2>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan neque eros, quis sodales orci tincidunt eget. Morbi vehicula nulla ac ante hendrerit tempus. Donec rutrum arcu a felis ornare, luctus condimentum velit semper.</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section-primary" id="intelligent-theming">
			<div class="container-small">
				<div class="row">
					<div class="span-8">
						<header class="heading_group">
							<h2 class="heading-light-size-6">Intelligent Theming</h2>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan neque eros, quis sodales orci tincidunt eget. Morbi vehicula nulla ac ante hendrerit tempus. Donec rutrum arcu a felis ornare, luctus condimentum velit semper.</p>
					</div>
				</div>
			</div>
		</section>

		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>

<?php
$cachefile = "../../features.html";
$fp = fopen($cachefile, 'w'); 
// save the contents of output buffer to the file
fwrite($fp, ob_get_contents()); 
// close the file
fclose($fp); 
// Send the output to the browser
ob_end_flush(); 
?>