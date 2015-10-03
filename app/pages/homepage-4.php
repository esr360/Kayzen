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

		<section class="billboard-full-screen"
			style="background-image: url('<?php echo appDir ?>/images/stock-9.jpg')">
			<div class="billboard_wrapper container text-left">
				<div class="short" id="billboard-fade-parallax">
					<h3 class="heading-uppercase-heavy-highlight-dark-size-8 font-2">
						<b>Welcome to Kayzen</b><br />
						<b>A Unique Theme Framework</b>
					</h3>
					<p class="button_group">
						<a class="button-size-4-grey-6" href="#ALAN">Purchase Now</a>
						<a class="button-size-4-grey-6" href="#ALAN">Explore The Potential</a>
					</p>
				</div>
			</div>
			<nav class="slide-nav">
				<button class="slide-prev icon-border-size-4-white"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next icon-border-size-4-white"><i class="fa fa-angle-right"></i></button>
			</nav>
			<a href="#s-welcome" class="scroll-wheel"></a>
		</section>
					
		<section class="section">
		
			<header class="heading_group-block has-icon text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Key Features</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>Build Pro Websites</span></h2>
					<div class="heading_icon">
						<i class="fa fa-star-o"></i>
					</div>
				</div>
			</header>
			
			<div class="row-no-gutter-waffle">
				
				<div class="thumbnail span-3">
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
				
				<div class="thumbnail span-3">
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
				
				<div class="thumbnail span-3">
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
				
				<div class="thumbnail span-3">
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
				
			</div>
			
			<div class="row-no-gutter-waffle">
				
				<div class="thumbnail span-3">
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
				
				<div class="thumbnail span-3">
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
				
				<div class="thumbnail span-3">
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
				
				<div class="thumbnail span-3">
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
				
			</div>
		
		</section><!-- Key Features -->
		
		<section class="section" id="key-features">
			
			<!-- Key Features Header -->
			<header class="heading_group-block has-icon text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Key Features</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>Build Pro Websites</span></h2>
					<div class="heading_icon">
						<i class="fa fa-star-o"></i>
					</div>
				</div>
			</header>
			
			<!-- Features Row 1 -->
			<div class="row-block text-center">
				
				<div class="widget-block-panel span-3">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-desktop"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-heavy-size-4">100% Responsive</h3>
						<h4 class="heading-light-uppercase-brand-1">Optimized for all devices</h4>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus.</p>
				</div>
				
				<div class="widget-block-panel span-3">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-clipboard"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-heavy-size-4">Simple Page Builder</h3>
						<h4 class="heading-light-uppercase-brand-1">Visual composer included</h4>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus.</p>
				</div>
				
				<div class="section-secondary span-6 va-middle">
					<div class="container-small">
						<blockquote class="blockquote">
							<div class="blockquote_content">
								<h4 class="heading-light-size-6 font-2">We can take your awesome ideas and turn them into an <b class="heading-heavy">exciting reality</b>...</h4>
							</div>
						</blockquote>
					</div>
				</div>
				
			</div><!-- Features Row 1 -->
			
		</section>
		
		<section 
			class="section-full-screen-overlay-alt"
			data-stellar-background-ratio="0.8"
			style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
		>
			<div class="container v-center text-right">
				<h3 class="heading-uppercase-heavy-highlight-dark-size-7 font-2">
					<b>Seeing things clearly is simple when</b><br />
					<b>you look at the bigger picture</b>
				</h3>
				<p class="button_group">
					<a class="button-size-4-primary" href="#ALAN">Purchase Now</a>
					<a class="button-size-4-border-white" href="#ALAN">Read More</a>
				</p>
			</div>
		</section>

		<section class="section">
			
			<header class="heading_group-block text-center">
				<div class="container-small">
					<h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Our Blog</span></h4>
					<h2 class="heading-uppercase-heavy-size-7 font-2"><span>Keep Up To Date</span></h2>
					<div class="heading_icon">
						<i class="fa fa-magic"></i>
					</div>
				</div>
			</header>
			
		</section>
			
		<div class="row-block text-center">
			
			<div class="widget-spectrum-quarter-tub span-3">
				<div class="widget_lid">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-battery-half"></i>
					</div>
					<header class="heading_group">
						<h4 class="heading-size-3">Lorem Ipsum</h4>
					</header>
				</div>
				<div class="widget_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
				</div>
				<a class="button-block-grey-5-fat relative">Read More</a>
			</div>
			
			<div class="widget-spectrum-quarter-tub span-3">
				<div class="widget_lid">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-bar-chart"></i>
					</div>
					<header class="heading_group">
						<h4 class="heading-size-3">Lorem Ipsum</h4>
					</header>
				</div>
				<div class="widget_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
				</div>
				<a class="button-block-grey-5-fat relative">Read More</a>
			</div>
			
			<div class="widget-spectrum-quarter-tub span-3">
				<div class="widget_lid">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-desktop"></i>
					</div>
					<header class="heading_group">
						<h4 class="heading-size-3">Lorem Ipsum</h4>
					</header>
				</div>
				<div class="widget_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
				</div>
				<a class="button-block-grey-5-fat relative">Read More</a>
			</div>
			
			<div class="widget-spectrum-quarter-tub span-3">
				<div class="widget_lid">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-image"></i>
					</div>
					<header class="heading_group">
						<h4 class="heading-size-3">Lorem Ipsum</h4>
					</header>
				</div>
				<div class="widget_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
				</div>
				<a class="button-block-grey-5-fat relative">Read More</a>
			</div>
			
		</div>
		
		<section 
			class="section-primary hide-overflow"
			style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
		>
		
			<div class="container">
				<div class="row">
					<div class="span-8">
						<header class="heading_group">
							<h3 class="heading-size-6">One Nexus</h3>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper nisi eu metus accumsan aliquet. Mauris a diam ac lectus facilisis faucibus. Sed convallis, ex et viverra suscipit, dui neque accumsan magna, et auctor leo ligula non ipsum. Phasellus ullamcorper interdum nisl et ornare.</p>
						<p class="button_group">
							<a class="button-border-primary" href="#ALAN">Purchase Now</a>
							<a class="button-border" href="#ALAN">Read More</a>
						</p>
					</div>
					<div class="section_graphic span-4 text-center">
						<img 
							class="span-10" 
							src="<?php echo appDir ?>/images/tablet-base-dark.png"
							data-reverse-reveal="transform: translateY(50%)"
							alt=""
						/>
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
					<a 
						href="#"
						class="tooltip-top icon-size-7-border-circle-primary"
						data-tooltip="Facebook"
					>
						<i class="fa fa-facebook"></i>
					</a>
					<a 
						href="#"
						class="tooltip-top icon-size-7-border-circle-primary"
						data-tooltip="Twitter"
					>
						<i class="fa fa-twitter"></i>
					</a>
					<a 
						href="#"
						class="tooltip-top icon-size-7-border-circle-primary"
						data-tooltip="Github"
					>
						<i class="fa fa-github-alt"></i>
					</a>
					<a 
						href="#" 
						class="tooltip-top icon-size-7-border-circle-primary"
						data-tooltip="Dribbble"
					>
						<i class="fa fa-dribbble"></i>
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