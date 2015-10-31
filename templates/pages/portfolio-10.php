<?php 
	include ('../app.php');
	// page config
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
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
			$headerModifiers = '-bar-absolute-dark-sticky'; 
			include ('../modules/objects/header/header.php'); 
		?>

		<?php include ('../modules/objects/billboard/billboard.php'); ?>
		
		<section class="section-primary">
				
			<div class="container">
				
				<div class="row">
					
					<div class="span-8">
						
					</div>
					
					<aside class="sidebar span-4">
						
						<div class="tabs">
						
							<ul class="tabs_nav">
								<li class="active">Latest</li>
								<li>Popular</li>
								<li>Comments</li>
							</ul>
							
							<section class="tabs_content-block-glue active">
								
								<article class="row">
									<div class="span-2">
										<div class="thumbnail-profile-round-fill">
											<img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
										</div>
									</div>
									<div class="span-10">
										<header class="heading_group">
											<div class="heading_date">
												<div>Sep</div>
												<div>23</div>
											</div>
											<span>
												<h3 class="heading">Lorem Ipsum Dolor</h3>
												<h4 class="heading-light-uppercase-size-1">Category: <a href="#">Themes</a></h4>
												<ul class="list-tags-small">
													<li class="plain"><a href="#">CSS</a></li>	
													<li class="plain"><a href="#">HTML</a></li>	
													<li class="plain"><a href="#">JS</a></li>	
												</ul>
											</span>
										</header>
									</div>
								</article>
								
								<hr class="hrule-line-small" />
								
								<article class="row">
									<div class="span-2">
										<div class="thumbnail-profile-round-fill">
											<img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
										</div>
									</div>
									<div class="span-10">
										<header class="heading_group">
											<div class="heading_date">
												<div>Sep</div>
												<div>23</div>
											</div>
											<span>
												<h3 class="heading">Lorem Ipsum Dolor</h3>
												<h4 class="heading-light-uppercase-size-1">Category: <a href="#">Themes</a></h4>
												<ul class="list-tags-small">
													<li class="plain"><a href="#">CSS</a></li>	
													<li class="plain"><a href="#">HTML</a></li>	
													<li class="plain"><a href="#">JS</a></li>	
												</ul>
											</span>
										</header>
									</div>
								</article>
								
								<hr class="hrule-line-small" />
								
								<article class="row">
									<div class="span-2">
										<div class="thumbnail-profile-round-fill">
											<img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
										</div>
									</div>
									<div class="span-10">
										<header class="heading_group">
											<div class="heading_date">
												<div>Sep</div>
												<div>23</div>
											</div>
											<span>
												<h3 class="heading">Lorem Ipsum Dolor</h3>
												<h4 class="heading-light-uppercase-size-1">Category: <a href="#">Themes</a></h4>
												<ul class="list-tags-small">
													<li class="plain"><a href="#">CSS</a></li>	
													<li class="plain"><a href="#">HTML</a></li>	
													<li class="plain"><a href="#">JS</a></li>	
												</ul>
											</span>
										</header>
									</div>
								</article>
						
						</div>
						
						<hr class="hrule-stripes" />
						
						<!-- Categories -->
						
						<header class="heading_group-small">
							<h4 class="heading-uppercase-size-3">Categories</h4>
						</header>
						
						<ul class="list-arrow">
							<li><a href="#">HTML Templates</a></li>
							<li><a href="#">Wordpress Themes</a></li>
							<li><a href="#">jQuery Plugins</a></li>
							<li><a href="#">Tutorials</a></li>
							<li><a href="#">Photoshop/Design</a></li>
						</ul>
						
						<hr class="hrule-stripes" />
						
						<!-- Facebook Like Box -->
						
						<div 
							class="fb-page" 
							data-href="https://www.facebook.com/envato" 
							data-width="500" 
							data-height="400" 
							data-small-header="false" 
							data-adapt-container-width="true" 
							data-hide-cover="false" 
							data-show-facepile="true" 
							data-show-posts="true"
						>
							<div class="fb-xfbml-parse-ignore">
								<blockquote cite="https://www.facebook.com/envato">
									<a href="https://www.facebook.com/envato">Envato</a>
								</blockquote>
							</div>
						</div>
						
						<div id="fb-root"></div>
						<script>
							(function(d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0];
								if (d.getElementById(id)) return;
								js = d.createElement(s); js.id = id;
								js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=332439048287";
								fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
						</script>
						
						<hr class="hrule-stripes" />
						
						<!-- Twitter Feed -->
						
						<a 
							class="twitter-timeline" 
							href="https://twitter.com/envato" 
							data-widget-id="650783016462123008"
						>
							Tweets by @envato
						</a>
						
						<script>
							!function(d,s,id){
								var js,fjs=d.getElementsByTagName(s)[0],
									p=/^http:/.test(d.location)?'http':'https';
								if(!d.getElementById(id)){
									js=d.createElement(s);
									js.id=id;
									js.src=p+"://platform.twitter.com/widgets.js";
									fjs.parentNode.insertBefore(js,fjs);
								}
							}(document,"script","twitter-wjs");
						</script>
						
						<hr class="hrule-stripes" />
						
						<!-- YouTube Video -->
						
						<div class="auto-resizable-iframe">
							<div>
								<iframe allowfullscreen="" src="http://www.youtube.com/embed/Q3oItpVa9fs?theme=light"></iframe>
							</div>
						</div>
						
						<hr class="hrule-stripes" />
						
						<!-- Accordion -->
						
						<div class="accordion">
							<section class="active">
								<h4 class="heading">Native Wordpress Editor</h4>
								<p>Kayzen uses the native WordPress theme cuztomizer, making it future proof and allowing you to visually see any changes as you make them.</p>
							</section>
							<section class="">
								<h4 class="heading">Visual Composer</h4>
								<p>Kayzen comes with the famous <a href="http://vc.wpbakery.com/">Visual Composer</a> drag-and-drop page builder plugin, allowing you to use our custom widgets anywhere on your website.</p>
							</section>
							<section>
								<h4 class="heading">Our Own Custom Framework</h4>
								<p>We have developed our own custom framework specifically for this theme - no Bootstrap nonsense, our framework has been created with theming and WordPress in mind, making it the most flexible theme framework there is.</p>
							</section>
						</div>
						
					</aside><!-- sidebar -->
					
				</div><!-- row -->
				
			</div><!-- container -->

		</section>
		
		<?php include ('../sections/promo-banner.php'); ?>
		
		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>