<?php 
    include ('../../app.php');
    // page config
    $theme = 'Coffee';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader($style = 'pacman') ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink($theme, '/index.php'),
                    'About' => themeLink($theme, '/about.php'),
                    'Blog' => themeLink($theme, '/blog.php'),
                    'Contact' => themeLink($theme, '/contact.php')
                )
            ));
            
        ?>

		<section class="billboard-full-screen-overlay">
			<div class="billboard_wrapper container text-left">
				<div class="short" id="billboard-fade-parallax">
					<header class="heading_group">
						<h4 class="heading-uppercase-light-size-5-highlight"><b>This is Kayzen</b></h4>
						<h2 class="heading-heavy-size-7-uppercase-highlight-dark font-2"><b>The New Experience</b></h2>
					</header>
					<p class="lede">Kayzen is a powerful themeing framework for architecting CSS for large, modular & scalable web applications. Built using only Sass (SCSS), Kayzen has the customizing power of a complete CMS theme.</p>
					<div class="button_group">
						<a class="button-oval-size-4-primary" href="#">Purchase Now</a>
						<a class="button-oval-size-4-border-white" href="#">Explore The Potential</a>
					</div>
				</div>
			</div>
			<nav class="slide-nav">
				<button class="slide-prev button-icon-border-size-3-white"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next button-icon-border-size-3-white"><i class="fa fa-angle-right"></i></button>
			</nav>
			<a href="#s-welcome" class="scroll-wheel"></a>
		</section>
        
        <?php {
            masonryFeatures(array(
                'background' => '/images/billboard-2.jpg',
                'title-highlight' => 'highlight-dark',
                'subTitle-highlight' => 'highlight-dark'
            ));
        } ?>
		
		<section class="section-primary">
			
			<div class="container">		
				
				<div class="row fixed-table">
					
					<aside class="sidebar span-4">
    
                        <?php sidebar(array(
                            'category' => themeLink($theme, '/blog.php')
                        )); ?>
						
					</aside><!-- sidebar -->
                    
                    <hr class="hrule-stripes-large max-break-3" />
					
					<div class="newsfeed span-8">
                            
                        <?php articleCarousel() ?>
						
						<hr class="hrule-stripes-large" />
								
						<!-- Featured Articles -->
								
						<div class="row stack-break-2 row-waffle-large">	
                            
                            <?php
                
                                articleItem(array(
                                    'title'         => 'Kayzen is Released',
                                    'cta-modifiers' => '-oval',
                                    'span'          => 6,
                                    'author-thumb'  => true,
                                    'widget'        => false,
                                    'link'          => themeLink($theme, '/blog-single.php'),
                                    'root'          => themeLink($theme, '/blog.php'),
                                    'class'         => 'break-3-half break-2-full relative'
                                ));
                            
                                articleItem(array(
                                    'title'         => 'Kayzen is Released',
                                    'cta-modifiers' => '-oval',
                                    'span'          => 6,
                                    'author-thumb'  => true,
                                    'widget'        => false,
                                    'link'          => themeLink($theme, '/blog-single.php'),
                                    'root'          => themeLink($theme, '/blog.php'),
                                    'class'         => 'break-3-half break-2-full relative'
                                ));
                                
							?>
                            
						</div><!-- row -->
						
						<hr class="hrule-stripes-large" />
								
						<!-- Featured Categories -->
						
						<div class="widget_group row-flow row-waffle-large text-center">
							
							<div class="widget-borderTop-highlight-block-scale span-4 break-4-half break-2-full">
								<div class="widget_icon button-icon-plain-size-8">
									<i class="fa fa-desktop"></i>
								</div>
								<header class="widget_header heading_group">
									<h3 class="heading-heavy-size-4">100% Responsive</h3>
									<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
								</header>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
							</div>
							
							<div class="widget-borderTop-highlight-block-scale span-4 break-4-half break-2-full">
								<div class="widget_icon button-icon-plain-size-8">
									<i class="fa fa-desktop"></i>
								</div>
								<header class="widget_header heading_group">
									<h3 class="heading-heavy-size-4">100% Responsive</h3>
									<h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
								</header>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
							</div>
							
							<div class="widget-borderTop-highlight-block-scale span-4 min-break-4">
								<div class="widget_icon button-icon-plain-size-8">
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
										<img src="<?php stockImage('team/team-2.jpg') ?>" alt="">
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
										<img src="<?php stockImage('team/team-2.jpg') ?>" alt="">
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
						
						<div class="row-flow row-waffle-large">
							
							<div class="span-4 break-4-half break-2-full relative">	
								<div class="thumbnail-zoom">
									<div class="thumbnail_mask">
										<div class="thumbnail_controls button_group-small">
											<a 
                                                href="<?php stockImage('demo/stock-7.jpg') ?>" 
                                                class="button-icon-border-circle" 
                                                rel="lightbox"
                                            >
												<i class="fa fa-search"></i>
											</a>
											<a href="#" class="button-icon-border-circle">
												<i class="fa fa-link"></i>
											</a>
										</div>
									</div>
									<img src="<?php stockImage('demo/stock-7.jpg') ?>">
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
								<div class="row stack-0">
									<div class="span-5 va-middle">
										<a href="#" class="button-oval-primary-size-2">Read More</a>
									</div>
									<div class="span-7 va-middle text-right">
										<small>Posted in <a href="blog.html">Web Design</a></small>
									</div>
								</div>
							</div>
							
							<div class="span-4 break-4-half break-2-full relative">	
								<div class="thumbnail-zoom">
									<div class="thumbnail_mask">
										<div class="thumbnail_controls button_group-small">
											<a 
                                                href="<?php stockImage('demo/stock-5.jpg') ?>" 
                                                class="button-icon-border-circle" 
                                                rel="lightbox"
                                            >
												<i class="fa fa-search"></i>
											</a>
											<a href="#" class="button-icon-border-circle">
												<i class="fa fa-link"></i>
											</a>
										</div>
									</div>
									<img src="<?php stockImage('demo/stock-5.jpg') ?>">
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
								<div class="row stack-0">
									<div class="span-5 va-middle">
										<a href="#" class="button-oval-primary-size-2">Read More</a>
									</div>
									<div class="span-7 va-middle text-right">
										<small>Posted in <a href="blog.html">Web Design</a></small>
									</div>
								</div>
							</div>
							
							<div class="span-4 relative min-break-4">	
								<div class="thumbnail-zoom">
									<div class="thumbnail_mask">
										<div class="thumbnail_controls button_group-small">
											<a 
                                                href="<?php stockImage('demo/stock-3.jpg') ?>" 
                                                class="button-icon-border-circle" 
                                                rel="lightbox"
                                            >
												<i class="fa fa-search"></i>
											</a>
											<a href="#" class="button-icon-border-circle">
												<i class="fa fa-link"></i>
											</a>
										</div>
									</div>
									<img src="<?php stockImage('demo/stock-3.jpg') ?>">
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
								<div class="row stack-0">
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
					
				</div><!-- row -->
				
			</div><!-- container -->
						
		</section>
		
		<?php 
            
            googleMap();
            
            appFooter();
                    
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>