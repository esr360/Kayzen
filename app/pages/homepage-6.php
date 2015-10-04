<?php 
	include ('../app.php');
	// page config
	$title = 'Homepage 6';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
			$topBarModifiers = '';
			include ('../modules/objects/top-bar/top-bar.php'); 
		?>

		<?php 
			$headerModifiers = '-bar-brand';
			include ('../modules/objects/header/header.php'); 
		?>

		<section 
			class="section-primary"
			style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
		>
			<div class="container">
				<div class="row-no-gutter">
					<div 
						class="widget-feature-zoom span-4"
						data-bg="url('<?php echo appDir ?>/images/wallpapers/bg-6.jpg')"
					>
						<div class="corner-ribbon-green" data-ribbon="23 Sep"></div>
						<header class="widget_header heading_group">
							<h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
							<h5 class="heading-light">Dolor Sit Amet</h4>
						</header>
					</div>
					<div 
						class="widget-feature-zoom span-4"
						data-bg="url('<?php echo appDir ?>/images/wallpapers/bg-3.jpg')"
					>
						<div class="corner-ribbon-green" data-ribbon="3 Oct"></div>
						<header class="widget_header heading_group">
							<h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
							<h5 class="heading-light">Dolor Sit Amet</h4>
						</header>
					</div>
					<div 
						class="widget-feature-zoom span-4 col-full"
						data-bg="url('<?php echo appDir ?>/images/wallpapers/bg-4.jpg')"
					>
						<div class="corner-ribbon-green" data-ribbon="16 Oct"></div>
						<header class="widget_header heading_group">
							<h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
							<h5 class="heading-light">Dolor Sit Amet</h4>
						</header>
					</div>
				</div>
				<div class="row-no-gutter">
					<div 
						class="widget-feature-zoom span-8"
						data-bg="url('<?php echo appDir ?>/images/wallpapers/bg-5.jpg')"
					>
						<div class="corner-ribbon-green" data-ribbon="27 Oct"></div>
						<header class="widget_header heading_group">
							<h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
							<h5 class="heading-light">Dolor Sit Amet</h4>
						</header>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section-primary">
			
			<div class="container">		
				
				<div class="row">
					
					<div class="newsfeed span-8">
								
						<div class="row">	
							
							<div class="span-6 relative">	
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
								<div class="thumbnail-profile-round-badge">
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
							
							<div class="span-6 relative">	
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
								<div class="thumbnail-profile-round-badge">
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
							
						</div><!-- row -->
						
					</div><!-- newsfeed -->
					
					<aside class="sidebar span-4">
						
						<div class="tabs">
						
							<ul class="tabs_nav">
								<li class="active">Latest</li>
								<li>Popular</li>
								<li>Comments</li>
							</ul>
							
							<section class="tabs_content-block active">
								<article class="row">
									<div class="span-3">
										<div class="thumbnail-profile-round">
											<img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
										</div>
									</div>
									<div class="span-9">
									</div>
							</section>
						
						</div>
						
					</aside><!-- sidebar -->
					
				</div><!-- row -->
				
			</div><!-- container -->
						
		</section>
		
		<?php include ('../modules/objects/google-map/google-map.php'); ?>
		
		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>