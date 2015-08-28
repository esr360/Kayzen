<!-- Header -->
<?php if ($for == 'index') { ?>
<header class="app-header-bar-absolute-sticky" id="app-header">
<?php } else { ?>
<header class="app-header-bar-dark-sticky" id="app-header">
<?php } ?>

	<div class="container">
		
		<div class="app-header_wrapper">

			<!-- Logo -->
			<div class="logo">
				<a href="/"><img src="<?php echo appDir ?>/images/logo-white.png" alt="logo"/ ></a>
			</div>

			<!-- Navigation -->
			<nav class="navigation-style-1" id="app-nav">
				<ul>
					<li class="active"><a href="#"><i class="fa fa-home"></i> Home</a></li>
					<li>
						<a href="#"><i class="fa fa-desktop"></i> Demos</a>
						<ul>
							<li><a href="#">Link 1</a></li>
							<li>
								<a href="#">Link 2</a>
								<ul>
									<li><a href="#">Lorem Ipsum</a></li>
									<li><a href="#">Dolor Sit Amet</a></li>
									<li><a href="#">Theme Forest</a></li>
								</ul>
							</li>
							<li><a href="#">Link 3</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-home"></i> Templates</a>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Portfolio</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-star"></i> Features</a>
						<ul>
							<li><a href="#">100% Modular UI</a></li>
							<li><a href="#">Unique Configuration</a></li>
							<li><a href="#">Custom Grid System</a></li>
							<li><a href="#">Intelligent Theming</a></li>
							<li><a href="#">Mobile Optimized</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-files-o"></i> Documentation</a>
						<ul>
							<li><a href="#">Getting Started</a></li>
							<li><a href="#">Configure</a></li>
							<li><a href="#">Build</a></li>
							<li><a href="#">Deploy</a></li>
						</ul>
					</li>
				</ul>
			</nav>

			<!-- Off Canvas Menu Trigger -->
			<a class="nav-trigger max-bp3" href="#"></a>

		</div><!-- Header Wrapper -->
		
	</div><!-- Container -->
	
</header><!-- Header -->