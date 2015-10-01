<?php 
	include ('../app.php');
	// page config
	$title = 'Homepage 2';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
			$for = 'homepage'; 
			include ('../modules/objects/header/header.php'); 
		?>

		<section class="billboard-full-screen">
			<div class="billboard_wrapper container text-left">
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
			<nav class="slide-nav">
				<button class="slide-prev icon-border-size-4-white"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next icon-border-size-4-white"><i class="fa fa-angle-right"></i></button>
			</nav>
			<a href="#key-features" class="scroll-wheel"></a>
		</section>
		
		<section class="section earth-slider" id="s-welcome">
			<header class="heading_group-block text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>This is Kayzen</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>The New Experience</span></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				</div>
			</header>
			<div class="earth-wrapper">
				<div class="earth">               
					<img class="globe" src="<?php echo appDir ?>/images/earth.png" alt="" />
					<div class="pins">
						<div class="pin-wrapper active">
							<div class='pin'></div>
						</div>
						<div class="pin-wrapper">
							<div class='pin'></div>
						</div>
						<div class="pin-wrapper">
							<div class='pin'></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section 
			class="section-secondary-overlay-alt" 
			data-stellar-background-ratio="0.8"
			style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
		>
			<div class="container">
				<div class="row">
					<div class="span-6">
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
					<div class="span-6 progress-bar_group">
						<h5 class="heading">HTML5</h5>
						<progress class="progress-bar" max="100" data-progress="75%">
							<div class="progress-bar">
								<div class="progress"></div>
							</div>
						</progress>
						<h5 class="heading">CSS3/SASS</h5>
						<progress class="progress-bar" max="100" data-progress="100%">
							<div class="progress-bar">
								<div class="progress"></div>
							</div>
						</progress>
						<h5 class="heading">JavaScript/jQuery</h5>
						<progress class="progress-bar" max="100" data-progress="80%">
							<div class="progress-bar">
								<div class="progress"></div>
							</div>
						</progress>
						<h5 class="heading">PHP/Wordpress</h5>
						<progress class="progress-bar" max="100" data-progress="65%">
							<div class="progress-bar">
								<div class="progress"></div>
							</div>
						</progress>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section-primary-dot-map">
			
			<header class="heading_group-large text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Why Choose Us</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>We Thrive On Success</span></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				</div>
			</header>
				
			<div class="container">
				
				<div class="row">
					
					<!-- Responsive Features -->
					<div class="widget_group span-3 va-middle text-right">
						<div class="widget-stacked">   
							<header class="widget_header-inline heading_group">
								<h3 class="heading-heavy-size-4">Fast Performance</h3>
								<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
							</header>                        
							<div class="widget_icon-inline icon-plain-size-8">
								<i class="fa fa-bar-chart"></i>
							</div> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
						</div>
						<div class="widget-stacked">
							<header class="widget_header-inline heading_group">
								<h3 class="heading-heavy-size-4">Lazy Loading</h3>
								<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
							</header>                       
							<div class="widget_icon-inline icon-plain-size-8">
								<i class="fa fa-refresh"></i>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
						</div>
						<div class="widget-stacked">
							<header class="widget_header-inline heading_group">
								<h3 class="heading-heavy-size-4">Retina Ready</h3>
								<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
							</header>                        
							<div class="widget_icon-inline icon-plain-size-8">
								<i class="fa fa-eye"></i>
							</div> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
						</div>
					</div>
					
					<!-- Responsive Graphics -->
					<div class="span-6 va-middle text-center">
						<img class="globe" src="<?php echo appDir ?>/images/custom-graphic-1.png" alt="" />
					</div>
					
					<!-- Responsive Features -->
					<div class="widget_group span-3 va-middle">
						<div class="widget-stacked">                  
							<div class="widget_icon-inline icon-plain-size-8">
								<i class="fa fa-user"></i>
							</div> 
							<header class="widget_header-inline heading_group">
								<h3 class="heading-heavy-size-4">User Experience</h3>
								<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
							</header>   
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
						</div>
						<div class="widget-stacked">               
							<div class="widget_icon-inline icon-plain-size-8">
								<i class="fa fa-tablet"></i>
							</div> 
							<header class="widget_header-inline heading_group">
								<h3 class="heading-heavy-size-4">Mobile Menu</h3>
								<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
							</header>      
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
						</div>
						<div class="widget-stacked">                  
							<div class="widget_icon-inline icon-plain-size-8">
								<i class="fa fa-th-large"></i>
							</div> 
							<header class="widget_header-inline heading_group">
								<h3 class="heading-heavy-size-4">User Panel</h3>
								<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
							</header>   
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
						</div>
					</div>
					
				</div><!-- Row -->
				
			</div><!-- Container -->
			
		</section>
		
		<section class="section-secondary promo-banner">
			<div class="container">
				<div class="row">
					<div class="span-7 va-middle">
						<header class="heading_group">
							<h4 class="heading-size-5">
								Start your <b class="font-2">new project</b> with a <em>fresh</em> approach...
							</h4>
							<p class="heading">leave your visitors with an experience to remember and <a href="#" target="blank">Purchase Nexus</a> now.</p>
						</header>
					</div>
					<div class="span-5 va-middle text-right button_group">
						<a href="#" target="blank" class="button-white-border-size-3-oval">Purchase Theme</a>
						<span class="text-sep">or</span>
						<a href="#about">Learn More</a>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section-primary">
			
			<header class="heading_group-large text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Our Team</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>Meet Our Crazy Team</span></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				</div>
			</header>
			
			<div class="container">
				<div class="row">
					
					<div class="span-4">
						<div class="thumbnail">
							<div class="thumbnail_mask">
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-search"></i>
								</a>
							</div>
							<img src="<?php echo appDir ?>/images/team/team-1.jpg">
						</div>
						<header class="heading_group">
							<h3 class="heading-heavy-size-4">Alexander	Welch</h3>
							<h4 class="heading-light-uppercase-brand-1">Chief Executive Officer</h4>
						</header>
						<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur maximus ridiculus mus. Donec finibus fringilla ultrices purus.</p>		
						<div class="icon_group-small">
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="Dribbble">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="LinkedIn">
								<i class="fa fa-linkedin"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="DeviantArt">
								<i class="fa fa-deviantart"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="Behance">
								<i class="fa fa-behance"></i>
							</a>
						</div>	
					</div>
					
					<div class="span-4">
						<div class="thumbnail">
							<div class="thumbnail_mask">
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-search"></i>
								</a>
							</div>
							<img src="<?php echo appDir ?>/images/team/team-2.jpg">
						</div>
						<header class="heading_group">
							<h3 class="heading-heavy-size-4">Naomi Olson</h3>
							<h4 class="heading-light-uppercase-brand-1">Graphic Designer</h4>
						</header>
						<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur maximus ridiculus mus. Donec finibus fringilla ultrices purus.</p>		
						<div class="icon_group-small">
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="Dribbble">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="LinkedIn">
								<i class="fa fa-linkedin"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="DeviantArt">
								<i class="fa fa-deviantart"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="Behance">
								<i class="fa fa-behance"></i>
							</a>
						</div>	
					</div>
					
					<div class="span-4">
						<div class="thumbnail">
							<div class="thumbnail_mask">
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-search"></i>
								</a>
							</div>
							<img src="<?php echo appDir ?>/images/team/team-3.jpg">
						</div>
						<header class="heading_group">
							<h3 class="heading-heavy-size-4">Brendan Mack</h3>
							<h4 class="heading-light-uppercase-brand-1">Web Developer</h4>
						</header>
						<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur maximus ridiculus mus. Donec finibus fringilla ultrices purus.</p>		
						<div class="icon_group-small">
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="Dribbble">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="icon-primary-size-3 tooltip-top" data-tooltip="LinkedIn">
								<i class="fa fa-linkedin"></i>
							</a>
						</div>	
					</div>
					
				</div><!-- row -->
			</div><!-- container -->
			
		</section>
		
		<section 
			class="section-primary"
			data-stellar-background-ratio="0.5"
			style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
		>
			<div class="container">
				<div class="row">
					<div class="span-6 info-video">
						<div class="auto-resizable-iframe">
							<div>
								<iframe allowfullscreen="" src="http://www.youtube.com/embed/Q3oItpVa9fs"></iframe>
							</div>
						</div>
					</div>
					<div class="span-6">
						<header class="heading_group">
							<h2 class="heading-heavy-size-5-uppercase font-2">Kayzen is the Best</h2>
							<h3 class="heading-light-brand-1-light-size-4">A Modern Template For Any Project</h3>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
						<ul class="list-arrow min-break-2">
							<li>Lorem ipsum dolor sit amet consectetur</li>
							<li>Donec malesuada metus non massa sodales auctor</li>
							<li>Sed sed iaculis arcu, eu pharetra nulla</li>
							<li>Etiam dapibus, nulla placerat</li>
						</ul>
						<p class="button_group">
							<a href="#" class="button-oval" target="blank">View Demo</a>
							<a href="#" class="button-primary-oval">Purchase Theme</a>
						</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section-primary">
			
			<header class="heading_group-large text-center">
				<div class="container-small">
					<h2 class="heading-light-size-7 font-2">Our <span class="heading-brand-1">Services</span> Are <span class="heading-heavy font-2">World Class</span> <i class="fa fa-trophy fa-brand"></i></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				</div>
			</header>
			
			<div class="container">

				<!-- More Features Row -->
				<div class="widget_group-grid row-flow">
					
					<!-- Feature 1 -->
					<div class="widget span-4">                     
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-cogs"></i>
						</div>  
						<header class="widget_header-inline heading_group">
							<h3 class="heading-heavy-uppercase">Fast Performance</h3>
							<h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
						</header>     
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
					</div>
					
					<!-- Feature 2 -->
					<div class="widget span-4">                     
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-star"></i>
						</div>  
						<header class="widget_header-inline heading_group">
							<h3 class="heading-heavy-uppercase">Fast Performance</h3>
							<h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
						</header>     
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
					</div>
					
					<!-- Feature 3 -->
					<div class="widget span-4">                     
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-eye"></i>
						</div>  
						<header class="widget_header-inline heading_group">
							<h3 class="heading-heavy-uppercase">Fast Performance</h3>
							<h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
						</header>     
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
					</div>
					
					<!-- Feature 4 -->
					<div class="widget span-4">                     
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-home"></i>
						</div>  
						<header class="widget_header-inline heading_group">
							<h3 class="heading-heavy-uppercase">Fast Performance</h3>
							<h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
						</header>     
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
					</div>
					
					<!-- Feature 5 -->
					<div class="widget span-4">                     
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-image"></i>
						</div>  
						<header class="widget_header-inline heading_group">
							<h3 class="heading-heavy-uppercase">Fast Performance</h3>
							<h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
						</header>     
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
					</div>
					
					<!-- Feature 6 -->
					<div class="widget span-4">                     
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-search"></i>
						</div>  
						<header class="widget_header-inline heading_group">
							<h3 class="heading-heavy-uppercase">Fast Performance</h3>
							<h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
						</header>     
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
					</div>
					
					<!-- Feature 7 -->
					<div class="widget span-4">                     
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-user"></i>
						</div>  
						<header class="widget_header-inline heading_group">
							<h3 class="heading-heavy-uppercase">Fast Performance</h3>
							<h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
						</header>     
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
					</div>
					
					<!-- Feature 8 -->
					<div class="widget span-4">                     
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-twitter"></i>
						</div>  
						<header class="widget_header-inline heading_group">
							<h3 class="heading-heavy-uppercase">Fast Performance</h3>
							<h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
						</header>     
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
					</div>
					
					<!-- Feature 9 -->
					<div class="widget span-4">                     
						<div class="widget_icon-inline icon-plain-size-7">
							<i class="fa fa-github-alt"></i>
						</div>  
						<header class="widget_header-inline heading_group">
							<h3 class="heading-heavy-uppercase">Fast Performance</h3>
							<h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
						</header>     
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
					</div>
					
				</div><!-- Row -->
				
			</div>
			
		</section>
		
		<?php include ('../sections/statistics.php'); ?>
		
		<?php include ('../sections/key-features-2.php'); ?>
		
		<section 
			class="section-secondary-overlay-alt"
			style="background-image: url('<?php echo appDir ?>/images/billboard-1.jpg')"
		>
		
			<div class="container">
				<div class="row">
					
					<div class="span-4 va-middle">
						<header class="heading_group">
							<h4 class="heading-uppercase-light-brand-1-size-5">Our Clients</h4>
							<h2 class="heading-heavy-size-6 font-2"><span>Who We Work With</span></h2>
						</header>
					</div>
					<div class="span-8 va-middle">
						<div id="clients-slider" class="carousel-thumbnails owl-carousel">
							<a class="well-dark" href="#">
								<img src="<?php echo appDir ?>/images/envato/envato-1.png">
							</a>
							<a class="well-dark" href="#">
								<img src="<?php echo appDir ?>/images/envato/envato-2.png">
							</a>
							<a class="well-dark" href="#">
								<img src="<?php echo appDir ?>/images/envato/envato-3.png">
							</a>
							<a class="well-dark" href="#">
								<img src="<?php echo appDir ?>/images/envato/envato-4.png">
							</a>
							<a class="well-dark" href="#">
								<img src="<?php echo appDir ?>/images/envato/envato-5.png">
							</a>
							<a class="well-dark" href="#">
								<img src="<?php echo appDir ?>/images/envato/envato-6.png">
							</a>
							<a class="well-dark" href="#">
								<img src="<?php echo appDir ?>/images/envato/envato-7.png">
							</a>
							<a class="well-dark" href="#">
								<img src="<?php echo appDir ?>/images/envato/envato-8.png">
							</a>
						</div>
						<script>
							$(document).ready(function() {
								
								var clientsCarousel = $("#clients-slider");
								
								clientsCarousel.owlCarousel({
									items: 3,
									center: true,
									loop: true,
									margin: 30
								})
								
							});
						</script>
					</div>
					
				</div>
			</div>
		
		</section>
		
		<section class="section-primary">
			
			<header class="heading_group-large text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Our Pricing</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>Our Best Packages</span></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				</div>
			</header>
			
			<div class="container">
				<div class="row">
					
					<div class="span-4 price-chart_wrapper">
						<div class="price-chart-free">
							<header class="heading_group">
								<h4 class="heading-heavy-size-6-flush">Free</h4>
								<h5 class="heading-light-size-3">Our free package</h5>
							</header>
							<div class="price-chart_price">
								<small>$</small><span>0</span>/mo
							</div>
							<ul>
								<li><span><i class="fa fa-database"></i> Diskspace</span><strong>1GB</strong></li>
								<li><span><i class="fa fa-group"></i> Bandwidth</span><strong>10GB</strong></li>
								<li><span><i class="fa fa-desktop"></i> Sub-domains</span><strong>1</strong></li>
								<li><span><i class="fa fa-envelope"></i> Emails</span><strong>5</strong></li>
								<li><span><i class="fa fa-support"></i> Support</span><strong>None</strong></li>
							</ul>
							<div class="buy-now">
								<a href="#" class="button-block-size-3"><i class="fa fa-shopping-cart"></i> Get For Free</a>
							</div>
						</div>
					</div>
					
					<div class="span-4 price-chart_wrapper">                    
						<div class="price-chart">
							<div class="corner-ribbon-large-green" data-ribbon="Great Valule"></div>
							<header class="heading_group">
								<h4 class="heading-heavy-size-6-flush">Basic</h4>
								<h5 class="heading-light-size-3">Our basic package</h5>
							</header>
							<div class="price-chart_price">
								<small>$</small><span>5</span>/mo
							</div>
							<ul>
								<li><span><i class="fa fa-database"></i> Diskspace</span><strong>5GB</strong></li>
								<li><span><i class="fa fa-group"></i> Bandwidth</span><strong>50GB</strong></li>
								<li><span><i class="fa fa-desktop"></i> Sub-domains</span><strong>10</strong></li>
								<li><span><i class="fa fa-envelope"></i> Emails</span><strong>50</strong></li>
								<li><span><i class="fa fa-support"></i> Support</span><strong>Yes</strong></li>
							</ul>
							<div class="buy-now">
								<a href="#" class="button-primary-block-size-3"><i class="fa fa-shopping-cart"></i> Buy Now</a>
							</div>
						</div>
					</div>
					
					<div class="span-4 price-chart_wrapper">
						<div class="price-chart">
							<header class="heading_group">
								<h4 class="heading-heavy-size-6-flush">Pro <i class="fa fa-trophy"></i></h4>
								<h5 class="heading-light-size-3">Our pro package</h5>
							</header>
							<div class="price-chart_price">
								<small>$</small><span>15</span>/mo
							</div>
							<ul>
								<li><span><i class="fa fa-database"></i> Diskspace</span><strong>500GB</strong></li>
								<li><span><i class="fa fa-group"></i> Bandwidth</span><strong>Unlimited</strong></li>
								<li><span><i class="fa fa-desktop"></i> Sub-domains</span><strong>500</strong></li>
								<li><span><i class="fa fa-envelope"></i> Emails</span><strong>Unlimited</strong></li>
								<li><span><i class="fa fa-support"></i> Support</span><strong>Yes</strong></li>
							</ul>
							<div class="buy-now">
								<a href="#" class="button-primary-block-size-3"><i class="fa fa-shopping-cart"></i> Buy Now</a>
							</div>
						</div>
					</div>
					
				</div><!-- row -->
			</div><!-- container -->
		
		</section>
		
		<section class="section-secondary">
			<div class="container-small">
				<blockquote class="blockquote">
					<div class="blockquote_content">
						<h4 class="heading-light-size-6 font-2">We can take your awesome ideas and turn them into an <b class="heading-heavy">exciting reality</b>...</h4>
					</div>
				</blockquote>
			</div>
		</section>

		<section class="section-primary">
			
			<header class="heading_group-large text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Our Portfolio</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>Some Recent Work</span></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				</div>
			</header>
			
			<div class="container">
				<div class="row-no-gutter-waffle">
					
					<div class="thumbnail span-4">
						<div class="thumbnail_mask">
							<div class="icon_group-small">
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-search"></i>
								</a>
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-link"></i>
								</a>
							</div>
						</div>
						<img src="<?php echo appDir ?>/images/wallpapers/bg-1.jpg">
					</div>
					
					<div class="thumbnail span-4">
						<div class="thumbnail_mask">
							<div class="icon_group-small">
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-search"></i>
								</a>
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-link"></i>
								</a>
							</div>
						</div>
						<img src="<?php echo appDir ?>/images/wallpapers/bg-2.jpg">
					</div>
					
					<div class="thumbnail span-4">
						<div class="thumbnail_mask">
							<div class="icon_group-small">
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-search"></i>
								</a>
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-link"></i>
								</a>
							</div>
						</div>
						<img src="<?php echo appDir ?>/images/wallpapers/bg-3.jpg">
					</div>
					
				</div>
				<div class="row-no-gutter-waffle">
					
					<div class="thumbnail span-4">
						<div class="thumbnail_mask">
							<div class="icon_group-small">
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-search"></i>
								</a>
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-link"></i>
								</a>
							</div>
						</div>
						<img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg">
					</div>
					
					<div class="thumbnail span-4">
						<div class="thumbnail_mask">
							<div class="icon_group-small">
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-search"></i>
								</a>
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-link"></i>
								</a>
							</div>
						</div>
						<img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg">
					</div>
					
					<div class="thumbnail span-4">
						<div class="thumbnail_mask">
							<div class="icon_group-small">
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-search"></i>
								</a>
								<a href="#" class="icon-border-circle-size-3">
									<i class="fa fa-link"></i>
								</a>
							</div>
						</div>
						<img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg">
					</div>
					
				</div>
			</div>
			
		</section>
		
		<section 
			class="section-secondary-overlay-alt"
			style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
		>
		
			<div class="container-small text-center owl-carousel" id="testimonials-carousel">
				<blockquote class="blockquote">
					<a class="blockquote_avatar-large" href="#">
						<img src="/app/images/team/team-2.jpg" alt="">
					</a>
					<div class="blockquote_content">
						<p class="lede">Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
					</div>
					<div class="blockquote_cite"> 
						<h4 class="heading-highlight"><b>Brendon Mack - Theme Forest</b></h4>
					</div>
				</blockquote>
				<blockquote class="blockquote">
					<a class="blockquote_avatar-large" href="#">
						<img src="/app/images/team/team-2.jpg" alt="">
					</a>
					<div class="blockquote_content">
						<p class="lede">Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
					</div>
					<div class="blockquote_cite"> 
						<h4 class="heading-highlight"><b>Brendon Mack - Theme Forest</b></h4>
					</div>
				</blockquote>
			</div>
			<nav class="slide-nav">
				<button class="slide-prev icon-border-size-4-grey-3"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next icon-border-size-4-grey-3"><i class="fa fa-angle-right"></i></button>
			</nav>
			<script>
				$(document).ready(function() {
					
					var testimonialsCarousel = $("#testimonials-carousel");
					
					testimonialsCarousel.owlCarousel({
						items: 1,
						loop: true,
						margin: 30,
						dots: false
					})
			
					testimonialsCarousel.find("+ .slide-nav .slide-next").click(function() {
						testimonialsCarousel.trigger('next.owl.carousel');
					});
					testimonialsCarousel.find("+ .slide-nav .slide-prev").click(function() {
						testimonialsCarousel.trigger('prev.owl.carousel');
					});
					
				});
			</script>
			
		</section>
		
		<section class="section-primary">
			
			<header class="heading_group-large text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Our Blog</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>Keep Up To Date</span></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				</div>
			</header>
			
			<div class="container">		
				<div class="row">	
					
					<div class="span-4 relative">	
						<div class="thumbnail-zoom">
							<div class="thumbnail_mask">
								<div class="icon_group-small">
									<a href="#" class="icon-border-circle-size-3">
										<i class="fa fa-search"></i>
									</a>
									<a href="#" class="icon-border-circle-size-3">
										<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
							<img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg">
						</div>
						<div class="thumbnail-profile">
							<img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
						</div>
						<header class="heading_group">
							<div class="heading_date">
								<div>Sep</div>
								<div>23</div>
							</div>
							<h3 class="heading-heavy-size-5">Kayzen is Released</h3>
							<h4 class="heading-light-size-3">Posted by <a href="#">Naomi Olson</a></h4>
						</header>
						<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec finibus fringilla purus. Integer libero justo, mattis et magna eget...</p>
						<div class="row">
							<div class="span-6 va-middle">
								<a href="#" class="button-oval-primary">Read More</a>
							</div>
							<div class="span-6 va-middle text-right">
								<small>Posted in <a href="blog.html">Web Design</a></small>
							</div>
						</div>
					</div>
					
					<div class="span-4 relative">	
						<div class="thumbnail-zoom">
							<div class="thumbnail_mask">
								<div class="icon_group-small">
									<a href="#" class="icon-border-circle-size-3">
										<i class="fa fa-search"></i>
									</a>
									<a href="#" class="icon-border-circle-size-3">
										<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
							<img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg">
						</div>
						<div class="thumbnail-profile">
							<img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
						</div>
						<header class="heading_group">
							<div class="heading_date">
								<div>Sep</div>
								<div>23</div>
							</div>
							<h3 class="heading-heavy-size-5">Kayzen is Released</h3>
							<h4 class="heading-light-size-3">Posted by <a href="#">Naomi Olson</a></h4>
						</header>
						<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec finibus fringilla purus. Integer libero justo, mattis et magna eget...</p>
						<div class="row">
							<div class="span-6 va-middle">
								<a href="#" class="button-oval-primary">Read More</a>
							</div>
							<div class="span-6 va-middle text-right">
								<small>Posted in <a href="blog.html">Web Design</a></small>
							</div>
						</div>
					</div>
					
					<div class="span-4 relative">	
						<div class="thumbnail-zoom">
							<div class="thumbnail_mask">
								<div class="icon_group-small">
									<a href="#" class="icon-border-circle-size-3">
										<i class="fa fa-search"></i>
									</a>
									<a href="#" class="icon-border-circle-size-3">
										<i class="fa fa-link"></i>
									</a>
								</div>
							</div>
							<img src="<?php echo appDir ?>/images/wallpapers/bg-3.jpg">
						</div>
						<div class="thumbnail-profile">
							<img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
						</div>
						<header class="heading_group">
							<div class="heading_date">
								<div>Sep</div>
								<div>23</div>
							</div>
							<h3 class="heading-heavy-size-5">Kayzen is Released</h3>
							<h4 class="heading-light-size-3">Posted by <a href="#">Naomi Olson</a></h4>
						</header>
						<p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec finibus fringilla purus. Integer libero justo, mattis et magna eget...</p>
						<div class="row">
							<div class="span-6 va-middle">
								<a href="#" class="button-oval-primary">Read More</a>
							</div>
							<div class="span-6 va-middle text-right">
								<small>Posted in <a href="blog.html">Web Design</a></small>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</section>
		
		<section class="section-secondary promo-banner">
			<div class="container">
				<div class="row">
					<div class="span-7 va-middle">
						<header class="heading_group">
							<h4 class="heading-size-5">
								Start your <b class="font-2">new project</b> with a <em>fresh</em> approach...
							</h4>
							<p class="heading">leave your visitors with an experience to remember and <a href="#" target="blank">Purchase Nexus</a> now.</p>
						</header>
					</div>
					<div class="span-5 va-middle text-right button_group">
						<a href="#" target="blank" class="button-white-border-size-3-oval">Purchase Theme</a>
						<span class="text-sep">or</span>
						<a href="#about">Learn More</a>
					</div>
				</div>
			</div>
		</section>
		
		<?php include ('../sections/contact-us.php'); ?>
		
		<?php include ('../modules/objects/google-map/google-map.php'); ?>
		
		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>