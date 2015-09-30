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
						<header class="widget_header heading_group">
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
						<header class="widget_header heading_group">
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
						<header class="widget_header heading_group">
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

		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>