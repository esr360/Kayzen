<?php 
	include ('../../app.php');
	// page config
	$title = 'Homepage 6';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-brand'
            ));

		?>

		<section 
			class="section-primary"
			style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
		>
			<div class="container">
				<div class="row-no-gutter">
					<div 
						class="widget-feature-zoom span-4"
						data-bg="<?php echo appDir ?>/images/wallpapers/bg-6.jpg"
					>
						<div class="corner-ribbon-green" data-ribbon="23 Sep"></div>
						<header class="widget_header heading_group">
							<h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
							<h5 class="heading-light">Dolor Sit Amet</h4>
						</header>
					</div>
					<div 
						class="widget-feature-zoom span-4"
						data-bg="<?php echo appDir ?>/images/wallpapers/bg-3.jpg"
					>
						<div class="corner-ribbon-green" data-ribbon="3 Oct"></div>
						<header class="widget_header heading_group">
							<h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
							<h5 class="heading-light">Dolor Sit Amet</h4>
						</header>
					</div>
					<div 
						class="widget-feature-zoom span-4 col-full"
						data-bg="<?php echo appDir ?>/images/wallpapers/bg-4.jpg"
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
						data-bg="<?php echo appDir ?>/images/wallpapers/bg-5.jpg"
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
							
						<div class="relative">
								
							<!-- Latest Articles -->
							
							<div class="owl-carousel" id="latest-articles">
								
								<div class="thumbnail-feature">
									<img src="<?php echo appDir ?>/images/wallpapers/bg-2.jpg">
									<div class="thumbnail_content">
										<header class="heading_group-small">
											<div class="heading_date">
												<div>Sep</div>
												<div>23</div>
											</div>
											<span>
												<h3 class="heading-heavy-size-4">Kayzen is Released</h3>
											</span>
										</header>
										<div class="thumbnail_excerpt">Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</div>
									</div>
								</div>
								
								<div class="thumbnail-feature">
									<img src="<?php echo appDir ?>/images/wallpapers/bg-3.jpg">
									<div class="thumbnail_content">
										<header class="heading_group-small">
											<div class="heading_date">
												<div>Sep</div>
												<div>23</div>
											</div>
											<span>
												<h3 class="heading-heavy-size-4">Kayzen is Released</h3>
											</span>
										</header>
										<div class="thumbnail_excerpt">Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</div>
									</div>
								</div>
								
								<div class="thumbnail-feature">
									<img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg">
									<div class="thumbnail_content">
										<header class="heading_group-small">
											<div class="heading_date">
												<div>Sep</div>
												<div>23</div>
											</div>
											<span>
												<h3 class="heading-heavy-size-4">Kayzen is Released</h3>
											</span>
										</header>
										<div class="thumbnail_excerpt">Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</div>
									</div>
								</div>
								
								<div class="thumbnail-feature">
									<img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg">
									<div class="thumbnail_content">
										<header class="heading_group-small">
											<div class="heading_date">
												<div>Sep</div>
												<div>23</div>
											</div>
											<span>
												<h3 class="heading-heavy-size-4">Kayzen is Released</h3>
											</span>
										</header>
										<div class="thumbnail_excerpt">Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</div>
									</div>
								</div>
								
								<div class="thumbnail-feature">
									<img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg">
									<div class="thumbnail_content">
										<header class="heading_group-small">
											<div class="heading_date">
												<div>Sep</div>
												<div>23</div>
											</div>
											<span>
												<h3 class="heading-heavy-size-4">Kayzen is Released</h3>
											</span>
										</header>
										<div class="thumbnail_excerpt">Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</div>
									</div>
								</div>
								
							</div>
							
							<nav class="thumbnail_nav slide-nav" id="latest-articles-nav">
								<button class="slide-prev icon-size-5"><i class="fa fa-angle-left"></i></button>
								<button class="slide-next icon-size-5"><i class="fa fa-angle-right"></i></button>
							</nav>
						
						</div>
						
						<div class="thumbnail_grid-fade row-magic" id="latest-articles-thumbs">
							<img class="span active" src="<?php echo appDir ?>/images/wallpapers/bg-2.jpg">
							<img class="span" src="<?php echo appDir ?>/images/wallpapers/bg-3.jpg">
							<img class="span" src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg">
							<img class="span" src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg">
							<img class="span" src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg">
						</div>
						
						<script>
							$(document).ready(function() {
                                
                                $("#latest-articles").kCarousel({
                                    navId: '#latest-articles-nav',
                                    pagerId: '#latest-articles-thumbs',
                                    pagerSelector: 'img'
                                });
								
							});
						</script>
						
						<hr class="hrule-stripes-large" />
								
						<!-- Featured Articles -->
								
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
									<h3 class="heading-heavy-size-4">Kayzen is Released</h3>
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
									<h3 class="heading-heavy-size-4">Kayzen is Released</h3>
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
						
						<hr class="hrule-stripes-large" />
								
						<!-- Featured Categories -->
						
						<div class="widget_group row-magic text-center">
							
							<div class="widget-borderTop-highlight-block-scale span">
								<div class="widget_icon icon-plain-size-9">
									<i class="fa fa-desktop"></i>
								</div>
								<header class="widget_header heading_group">
									<h3 class="heading-heavy-size-4">100% Responsive</h3>
									<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
								</header>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
							</div>
							
							<div class="widget-borderTop-highlight-block-scale span">
								<div class="widget_icon icon-plain-size-9">
									<i class="fa fa-desktop"></i>
								</div>
								<header class="widget_header heading_group">
									<h3 class="heading-heavy-size-4">100% Responsive</h3>
									<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
								</header>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
							</div>
							
							<div class="widget-borderTop-highlight-block-scale span">
								<div class="widget_icon icon-plain-size-9">
									<i class="fa fa-desktop"></i>
								</div>
								<header class="widget_header heading_group">
									<h3 class="heading-heavy-size-4">100% Responsive</h3>
									<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
								</header>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
							</div>
							
						</div>
						
						<hr class="hrule-stripes-large" />
								
						<!-- Featured Comments -->
						
						<section 
							class="section-secondary-mini-overlay-alt"
							style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
						>
						
							<div class="container text-center owl-carousel force-dots" id="testimonials-carousel">
								
								<blockquote class="blockquote">
									<a class="blockquote_avatar-large" href="#">
										<img src="/app/images/team/team-2.jpg" alt="">
									</a>
									<div class="blockquote_content">
										<p>Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
									</div>
									<div class="blockquote_cite"> 
										<h4 class="heading-highlight-light"><b>Brendon Mack - Theme Forest</b></h4>
									</div>
								</blockquote>
								
								<blockquote class="blockquote">
									<a class="blockquote_avatar-large" href="#">
										<img src="/app/images/team/team-2.jpg" alt="">
									</a>
									<div class="blockquote_content">
										<p>Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
									</div>
									<div class="blockquote_cite"> 
										<h4 class="heading-highlight-light"><b>Brendon Mack - Theme Forest</b></h4>
									</div>
								</blockquote>
								
							</div>
							
							<script>
								$(document).ready(function() {
									
									var testimonialsCarousel = $("#testimonials-carousel");
									
									testimonialsCarousel.owlCarousel({
										items: 1,
										margin: 30
									})
									
								});
							</script>
							
						</section>
						
						<hr class="hrule-stripes-large" />
								
						<!-- More Articles -->
						
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
								<header class="heading_group">
									<div class="heading_date">
										<div>Sep</div>
										<div>23</div>
									</div>
									<h3 class="heading-heavy-size-3">Kayzen is Released</h3>
									<h4 class="heading-light">Posted by <a href="#">Naomi Olson</a></h4>
								</header>
								<p>Cum socis natoque penatibus et magnis dis parturient montes...</p>
								<div class="row">
									<div class="span-5 va-middle">
										<a href="#" class="button-oval-primary-size-2">Read More</a>
									</div>
									<div class="span-7 va-middle text-right">
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
								<header class="heading_group">
									<div class="heading_date">
										<div>Sep</div>
										<div>23</div>
									</div>
									<h3 class="heading-heavy-size-3">Kayzen is Released</h3>
									<h4 class="heading-light">Posted by <a href="#">Naomi Olson</a></h4>
								</header>
								<p>Cum socis natoque penatibus et magnis dis parturient montes...</p>
								<div class="row">
									<div class="span-5 va-middle">
										<a href="#" class="button-oval-primary-size-2">Read More</a>
									</div>
									<div class="span-7 va-middle text-right">
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
								<header class="heading_group">
									<div class="heading_date">
										<div>Sep</div>
										<div>23</div>
									</div>
									<h3 class="heading-heavy-size-3">Kayzen is Released</h3>
									<h4 class="heading-light">Posted by <a href="#">Naomi Olson</a></h4>
								</header>
								<p>Cum socis natoque penatibus et magnis dis parturient montes...</p>
								<div class="row">
									<div class="span-5 va-middle">
										<a href="#" class="button-oval-primary-size-2">Read More</a>
									</div>
									<div class="span-7 va-middle text-right">
										<small>Posted in <a href="blog.html">Web Design</a></small>
									</div>
								</div>
							</div>
					
						</div>
						
					</div><!-- newsfeed -->
					
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
							data-height="394" 
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
		
		<?php 
        
            googleMap();
            
            appFooter();
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>