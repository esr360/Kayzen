<?php 
	include ('../app.php');
	// page config
	$title = 'Homepage 3';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
			$topBarModifiers = '-fixed';
			include ('../modules/objects/top-bar/top-bar.php'); 
		?>

		<?php 
			$headerModifiers = '-bar-absolute-dark'; 
			include ('../modules/objects/header/header.php'); 
		?>

		<section class="billboard-full-screen">
			<div class="billboard_wrapper container text-left">
				<div class="short" id="billboard-fade-parallax">
					<header class="heading_group">
						<h3 class="heading-uppercase-heavy-size-8 font-2">Welcome to Kayzen</h3>
						<h2 class="heading-light-size-6"><span>A Unique & Modern Theme Framework</span></h2>
					</header>
					<p class="lede">Kayzen is a powerful themeing framework for architecting CSS for large, modular & scalable web applications. Built using only Sass (SCSS), Kayzen has the customizing power of a complete CMS theme.</p>
					<p class="button_group">
						<a class="button-oval-size-4-white" href="#ALAN">Purchase Now</a>
						<a class="button-oval-size-4-border-white" href="#ALAN">Explore The Potential</a>
					</p>
				</div>
			</div>
			<nav class="slide-nav">
				<button class="slide-prev icon-border-size-4-white"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next icon-border-size-4-white"><i class="fa fa-angle-right"></i></button>
			</nav>
			<a href="#s-welcome" class="scroll-wheel"></a>
		</section>
		
		<section class="section-primary">
			
			<header class="heading_group text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>What is Kayzen?</span></h4>
					<h2 class="heading-uppercase-heavy-size-6 font-2"><span>Multipurpose Theme</span></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis dolor ut euismod pellentesque. Vivamus mattis cursus urna, non gravida purus pulvinar ac. Nunc dignissim velit justo, id aliquet neque cursus vitae. Nulla mattis purus sed posuere aliquet. Mauris vel nisl turpis.</p>
				</div>
			</header>
			
		</section>
		
		<div class="row-block text-center">
			<section 
				class="section-secondary-overlay-deep bg-cover span-6"
				style="background-image: url('<?php echo appDir ?>/images/stock-8.jpg')"
			>
				<div class="container-small">
					<h3 class="heading-size-5">Responsive Grid System</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis dolor ut euismod pellentesque. Vivamus mattis cursus urna, non gravida purus pulvinar ac. Nunc dignissim velit justo, id aliquet neque cursus vitae. Nulla mattis purus sed posuere aliquet.</p>
					<p class="button_group">
						<a href="#" class="button-oval-white" target="blank">View Demo</a>
						<a href="#" class="button-oval-border-white">Purchase Theme</a>
					</p>
				</div>
			</section>
			<section 
				class="section-secondary-overlay-alt span-6"
				style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
			>
				<div class="container">
					<h3 class="heading-size-5">UI Elements</h3>
					<div id="elements-carousel" class="owl-carousel">
						<a href="#" class="widget">
							<div class="icon-circle-border-white-size-8">
								<i class="fa fa-exclamation-triangle"></i>
							</div>
							<h3 class="heading-size-3">Alert Bars</h3>
						</a>
						<a href="#" class="widget">
							<div class="icon-circle-border-white-size-8">
								<i class="fa fa-exclamation-triangle"></i>
							</div>
							<h3 class="heading-size-3">Alert Bars</h3>
						</a>
					</div>
					<nav class="slide-nav">
						<button class="slide-prev icon-border-circle-size-4"><i class="fa fa-angle-left"></i></button>
						<button class="slide-next icon-border-circle-size-4"><i class="fa fa-angle-right"></i></button>
					</nav>
				</div>
				<script>
					$(document).ready(function() {
						
						var elementsCarousel = $("#elements-carousel");
						
						elementsCarousel.owlCarousel({
							items: 1,
							loop: true,
							margin: 30
						})
				
						elementsCarousel.find("+ .slide-nav .slide-next").click(function() {
							elementsCarousel.trigger('next.owl.carousel');
						});
						elementsCarousel.find("+ .slide-nav .slide-prev").click(function() {
							elementsCarousel.trigger('prev.owl.carousel');
						});
						
					});
				</script>
			</section>
		</div>
		
		<section class="section-primary">
			
			<header class="heading_group-large text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Features</span></h4>
					<h2 class="heading-uppercase-heavy-size-6 font-2"><span>Why We're The Best</span></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				</div>
			</header>
				
			<div class="container">
				
				<!-- Features Row -->
				<div class="widget_group row-magic text-center">
					
					<!-- Feature 1 -->
					<div class="widget span">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-desktop"></i>
						</div>
						<header class="widget_header heading_group">
							<h3 class="heading-heavy-size-4">100% Responsive</h3>
							<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
					</div>
					
					<!-- Feature 2 -->
					<div class="widget span">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-clipboard"></i>
						</div>
						<header class="widget_header heading_group">
							<h3 class="heading-heavy-size-4">Simple Page Builder</h3>
							<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
					</div>
					
					<!-- Feature 3 -->
					<div class="widget span">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-photo"></i>
						</div>
						<header class="widget_header heading_group">
							<h3 class="heading-heavy-size-4">Retina Ready</h3>
							<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
					</div>
					
					<!-- Feature 4 -->
					<div class="widget span">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-eyedropper"></i>
						</div>
						<header class="widget_header heading_group">
							<h3 class="heading-heavy-size-4">Unlimited Colors</h3>
							<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
					</div>
					
				</div><!-- Features Row -->
			
			</div>
			
		</section>
		
		<section 
			class="section-secondary-overlay-alt" 
			data-stellar-background-ratio="0.8"
			style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
		>
			<div class="container">
				<div class="row">
					<div class="span-6 va-middle">
						<img src="<?php echo appDir ?>/images/device-outline.png">
					</div>
					<div class="span-6 va-middle">
						<header class="heading_group">
							<h2 class="heading-heavy-size-5-uppercase font-2">Kayzen is the Best</h2>
							<h3 class="heading-light-brand-1-size-4">A Modern Template For Any Project</h3>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
						<ul class="list-arrow min-break-2">
							<li>Lorem ipsum dolor sit amet consectetur</li>
							<li>Donec malesuada metus non massa sodales auctor</li>
							<li>Sed sed iaculis arcu, eu pharetra nulla</li>
						</ul>
						<p class="button_group">
							<a href="#" class="button-oval-primary" target="blank" >View Demo</a>
							<a href="#" class="button-oval-border-white">Purchase Theme</a>
						</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section-primary">
			
			<header class="heading_group-large text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Share The Love</span></h4>
					<h2 class="heading-uppercase-heavy-size-6 font-2"><span>We Are Social <i class="fa fa-heart fa-brand"></i></span></h2>
					<div class="heading_icon">
						<i class="fa fa-link"></i>
					</div>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				</div>
			</header>
			
			<div class="container">
				<div class="icon_group-small text-center">
					<a href="https://twitter.com/esr360" target="blank" class="icon-size-7-border-circle-primary">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="https://github.com/esr360/One-Nexus" target="blank" class="icon-size-7-border-circle-primary">
						<i class="fa fa-github-alt"></i>
					</a>
					<a href="ttps://dribbble.com/esr360" target="blank" class="icon-size-7-border-circle-primary">
						<i class="fa fa-dribbble"></i>
					</a>
					<a href="http://codepen.io/esr360/" target="blank" class="icon-size-7-border-circle-primary">
						<i class="fa fa-codepen"></i>
					</a>
				</div>
			</div>
			
		</section>
		
		<?php include ('../modules/objects/google-map/google-map.php'); ?>
		
		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>