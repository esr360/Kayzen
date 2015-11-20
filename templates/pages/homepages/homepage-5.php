<?php 
	include ('../../app.php');
	// page config
	$title = 'Homepage 5';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar(array(
                'modifiers' => 'fixed'
            ));

            appHeader(array(
                'modifiers' => 'bar-absolute-dark'
            ));

		?>

		<section class="billboard-full-screen">
			<div class="billboard_wrapper container text-left">
				<div class="short">
					<header class="heading_group">
						<h4 class="heading-uppercase-light-spaced-size-4"><span>This is Kayzen</span></h4>
						<h2 class="heading-uppercase-heavy-size-8 font-2"><span>The New Experience</span></h2>
					</header>
					<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis dolor ut euismod pellentesque. Vivamus mattis cursus urna, non gravida purus pulvinar ac. Nunc dignissim velit justo, id aliquet neque.</p>
					<p class="button_group">
						<a class="button-size-4-grey-1" href="#ALAN">Purchase Now</a>
						<a class="button-size-4-border-white" href="#ALAN">Explore The Potential</a>
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
			<div class="container">
				<div class="row-no-gutter">
					<div 
						class="widget-feature-zoom span-4"
						data-bg="<?php echo appDir ?>/images/wallpapers/bg-6.jpg"
					>
						<div class="corner-ribbon-pink" data-ribbon="Hot"></div>
						<header class="widget_header heading_group">
							<h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
							<h5 class="heading-light">Dolor Sit Amet</h4>
						</header>
					</div>
					<div 
						class="widget-feature-zoom span-4"
						data-bg="<?php echo appDir ?>/images/wallpapers/bg-3.jpg"
					>
						<div class="corner-ribbon-green" data-ribbon="New"></div>
						<header class="widget_header heading_group">
							<h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
							<h5 class="heading-light">Dolor Sit Amet</h4>
						</header>
					</div>
					<div 
						class="widget-feature-zoom span-4 col-full"
						data-bg="<?php echo appDir ?>/images/wallpapers/bg-4.jpg"
					>
						<header class="widget_header heading_group">
							<h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
							<h5 class="heading-light">Dolor Sit Amet</h4>
						</header>
					</div>
				</div>
				<div class="row-no-gutter">
					<div 
						class="widget-feature-zoom span-8"
						data-bg="<?php echo appDir ?>/images/wallpapers/bg-5.jpg"
					>
						<header class="widget_header heading_group">
							<h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
							<h5 class="heading-light">Dolor Sit Amet</h4>
						</header>
					</div>
				</div>
			</div>
		</section>
		
		<section 
			class="section-primary hide-overflow"
			style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
		>
		
			<header class="heading_group-large text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>In Store</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>Shop Til You Drop</span></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
				</div>
			</header>	
			
			<div class="container">
			
				<div class="tabs">
					
					<div class="text-center">
						<ul class="tabs_nav-pills-large">
							<li class="button-pill-grey-1-thin active">New Arrivals</li>
							<li class="button-pill-grey-1-thin">Best Sellers</li>
							<li class="button-pill-grey-1-thin">On Offer</li>
						</ul>
					</div>
					
					<section class="tabs_content active">    
						          
						<div class="row">
							
							<div class="span-3">
								<div class="thumbnail">
									<div class="thumbnail_mask">
										<div class="icon_group-small">
											<a href="#" class="icon-border-circle-size-3 tooltip-top" data-tooltip="Quick Look">
												<i class="fa fa-search-plus"></i>
											</a>
											<a href="#" class="icon-border-circle-size-3 tooltip-top" data-tooltip="Add To Cart">
												<i class="fa fa-shopping-cart"></i>
											</a>
										</div>
									</div>
									<img src="<?php echo appDir ?>/images/product-1.jpg">
								</div>
								<header class="heading_group-small">
									<h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
									<h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
								</header>
								<div class="heading_group-small">
									<span>$24.99</span>
								</div>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							
							<div class="span-3">
								<div class="thumbnail">
									<div class="corner-ribbon-pink" data-ribbon="Sale"></div>
									<div class="thumbnail_mask">
										<div class="icon_group-small">
											<a href="#" class="icon-border-circle-size-3 tooltip-top" data-tooltip="Quick Look">
												<i class="fa fa-search-plus"></i>
											</a>
											<a href="#" class="icon-border-circle-size-3 tooltip-top" data-tooltip="Add To Cart">
												<i class="fa fa-shopping-cart"></i>
											</a>
										</div>
									</div>
									<img src="<?php echo appDir ?>/images/product-2.jpg">
								</div>
								<header class="heading_group-small">
									<h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
									<h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
								</header>
								<div class="heading_group-small">
									<del>$24.99</del>
									<ins>$12.49</ins>
								</div>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							
							<div class="span-3">
								<div class="thumbnail">
									<div class="thumbnail_mask">
										<div class="icon_group-small">
											<a href="#" class="icon-border-circle-size-3 tooltip-top" data-tooltip="Quick Look">
												<i class="fa fa-search-plus"></i>
											</a>
											<a href="#" class="icon-border-circle-size-3 tooltip-top" data-tooltip="Add To Cart">
												<i class="fa fa-shopping-cart"></i>
											</a>
										</div>
									</div>
									<img src="<?php echo appDir ?>/images/product-3.jpg">
								</div>
								<header class="heading_group-small">
									<h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
									<h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
								</header>
								<div class="heading_group-small">
									<span>$24.99</span>
								</div>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							
							<div class="span-3">
								<div class="thumbnail">
									<div class="thumbnail_mask">
										<div class="icon_group-small">
											<a href="#" class="icon-border-circle-size-3 tooltip-top" data-tooltip="Quick Look">
												<i class="fa fa-search-plus"></i>
											</a>
											<a href="#" class="icon-border-circle-size-3 tooltip-top" data-tooltip="Add To Cart">
												<i class="fa fa-shopping-cart"></i>
											</a>
										</div>
									</div>
									<img src="<?php echo appDir ?>/images/product-4.jpg">
								</div>
								<header class="heading_group-small">
									<h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
									<h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
								</header>
								<div class="heading_group-small">
									<span>$12.49</span>
								</div>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							
						</div>
						
					</section>
					
					<section class="tabs_content">  
						                  
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in.</p>
						
					</section>
					<section class="tabs_content">      
						              
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in.</p>
						
					</section>
					
				</div>
			
			</div>
				
		</section>
		

		<section 
			class="section-secondary-overlay-alt"
			style="background-image: url('<?php echo appDir ?>/images/billboard-1.jpg')"
		>
		
			<div class="container">
				<div class="row">
					
					<div class="span-4 va-middle">
						<header class="heading_group">
							<h4 class="heading-uppercase-light-brand-1-size-4">Popular Brands</h4>
							<h2 class="heading-heavy-size-6 font-2"><span>Get The Best Deals</span></h2>
						</header>
					</div>
					<div class="span-8 va-middle">
						<div id="brands-slider" class="carousel-thumbnails owl-carousel">
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
								
								var brandsSlider = $("#brands-slider");
								
								brandsSlider.owlCarousel({
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
			<div class="container">
				<div class="row text-center">
					
					<div class="widget-card span-4">
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
						<div class="widget_content">
							<header class="heading_group">
								<h3 class="heading-heavy-size-4">Leather Jackets</h3>
								<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
							</header>
							<p>
								<a href="#" class="button-border">Shop Now</a>
							</p>
						</div>
					</div>
					
					<div class="widget-card span-4">
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
						<div class="widget_content">
							<header class="heading_group">
								<h3 class="heading-heavy-size-4">Summer Collection</h3>
								<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
							</header>
							<p>
								<a href="#" class="button-border">See Collection</a>
							</p>
						</div>
					</div>
					
					<div class="widget-card span-4">
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
							<img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg">
						</div>
						<div class="widget_content">
							<header class="heading_group">
								<h3 class="heading-heavy-size-4">TV Advert</h3>
								<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
							</header>
							<p>
								<a href="#" class="button-border">Watch Video</a>
							</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<?php 
        
            promoBanner();
            
            shareTheLove();
            
            googleMap();
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>