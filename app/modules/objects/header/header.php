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
			<nav class="navigation-no-icons" id="app-nav">
				<ul>
					<li class="active"><a href="#"><i class="navigation_icon fa fa-home"></i> Home</a></li>
					<li>
						<a href="#"><i class="navigation_icon fa fa-home"></i> Demos</a>
						<ul class="mega-menu row">
							<li class="span-3">
								<h3 class="mega-menu_title heading">Business/Corporate</h3>
								<ul>
									<li><a href="#">Lorem</a></li>
								</ul>
							</li>
							<li class="span-3">
								<h3 class="mega-menu_title heading">Business/Corporate</h3>
								<ul>
									<li><a href="#">Lorem</a></li>
								</ul>
							</li>
							<li class="span-3">
								<h3 class="mega-menu_title heading">Business/Corporate</h3>
								<ul>
									<li><a href="#">Lorem</a></li>
								</ul>
							</li>
							<li class="span-3">
								<h3 class="mega-menu_title heading">Business/Corporate</h3>
								<ul>
									<li><a href="#">Lorem</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="navigation_icon fa fa-desktop"></i> Templates</a>
						<ul>
							<li><a href="#">Link 1</a></li>
							<li>
								<a href="#">Link 2</a>
								<ul>
									<li><a href="#">Shop</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Portfolio</a></li>
								</ul>
							</li>
							<li><a href="#">Link 3</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="navigation_icon fa fa-star"></i> Modules</a>
						<ul class="mega-menu row">
							<li class="span-6">
								
								<h3 class="mega-menu_title heading">Elements</h3>
								
								<div class="widget_group row-magic text-center">
									
									<!-- Feature 1 -->
									<div class="widget-block-small-borderTop span">
										<div class="widget_icon icon-plain-size-7">
											<i class="fa fa-chevron-circle-down""></i>
										</div>
										<header class="widget_header heading_group">
											<h4 class="heading-light-uppercase-brand-1-size-1">Accordions</h4>
										</header>
									</div>
									
									<!-- Feature 2 -->
									<div class="widget-block-small-borderTop span">
										<div class="widget_icon icon-plain-size-7">
											<i class="fa fa-exclamation-triangle"></i>
										</div>
										<header class="widget_header heading_group">
											<h4 class="heading-light-uppercase-brand-1-size-1">Alert Bars</h4>
										</header>
									</div>
									
									<!-- Feature 3 -->
									<div class="widget-block-small-borderTop span">
										<div class="widget_icon icon-plain-size-7">
											<i class="fa fa-quote-left"></i>
										</div>
										<header class="widget_header heading_group">
											<h4 class="heading-light-uppercase-brand-1-size-1">Blockquotes</h4>
										</header>
									</div>
									
									<!-- Feature 4 -->
									<div class="widget-block-small-borderTop span">
										<div class="widget_icon icon-plain-size-7">
											<i class="fa fa-keyboard-o"></i>
										</div>
										<header class="widget_header heading_group">
											<h4 class="heading-light-uppercase-brand-1-size-1">Buttons</h4>
										</header>
									</div>
									
								</div>
								
								<p>More...</p>
								
								<div class="row">
									<div class="span-4">
										<ul class="list-arrow">
											<li><a href="#">Lorem Ipsum</a></li>
											<li><a href="#">Lorem Ipsum</a></li>	
											<li><a href="#">Lorem Ipsum</a></li>	
											<li><a href="#">Lorem Ipsum</a></li>	
										</ul>
									</div>
									<div class="span-4">
										<ul class="list-arrow">
											<li><a href="#">Lorem Ipsum</a></li>
											<li><a href="#">Lorem Ipsum</a></li>	
											<li><a href="#">Lorem Ipsum</a></li>	
											<li><a href="#">Lorem Ipsum</a></li>	
										</ul>
									</div>
									<div class="span-4">
										<ul class="list-arrow">
											<li><a href="#">Lorem Ipsum</a></li>
											<li><a href="#">Lorem Ipsum</a></li>	
											<li><a href="#">Lorem Ipsum</a></li>
											<li><a href="#">Lorem Ipsum</a></li>		
										</ul>
									</div>
								</div>
								
							</li>
							<li class="span-6">
								
								<h3 class="mega-menu_title heading">Objects</h3>
										
								<div class="widget_group row-flow text-center">
									
									<div class="widget-block-borderTop-highlight span-6 text-left">
										<div class="widget_icon-inline icon-plain-size-7">
											<i class="fa fa-arrows"></i>
										</div>
										<header class="widget_header-inline heading_group">
											<h3 class="heading">Page Builder</h3>
											<h4 class="heading-light-uppercase-brand-1-size-1">Drag &amp; Drop Page Builder</h4>
										</header>
									</div>
									
									<div class="widget-block-fill-small-borderTop span-3">
										<div class="widget_icon icon-plain-size-7">
											<i class="fa fa-chevron-circle-down""></i>
										</div>
										<header class="widget_header heading_group">
											<h4 class="heading-light-uppercase-brand-1-size-1">Accordions</h4>
										</header>
									</div>
									
									<div class="widget-block-fill-small-borderTop span-3">
										<div class="widget_icon icon-plain-size-7">
											<i class="fa fa-exclamation-triangle"></i>
										</div>
										<header class="widget_header heading_group">
											<h4 class="heading-light-uppercase-brand-1-size-1">Alert Bars</h4>
										</header>
									</div>
									
								</div><!-- widget_group -->
								
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="navigation_icon fa fa-star"></i> Features</a>
						<ul>
							<li><a href="#">100% Modular UI</a></li>
							<li><a href="#">Drag & Drop Page Builder</a></li>
							<li><a href="#">Unique Configuration</a></li>
							<li><a href="#">Custom Grid System</a></li>
							<li><a href="#">Intelligent Theming</a></li>
							<li><a href="#">Mobile Optimized</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="navigation_icon fa fa-files-o"></i> Documentation</a>
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