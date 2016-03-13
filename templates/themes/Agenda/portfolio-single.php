<?php 
	include ('../../app.php');
	// page config
	$title = 'Project Title';
	$tagLine = 'Aenean lobortis ante nunc curabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink('/index.php'),
                    'About' => themeLink('/about.php'),
                    'Services' => themeLink('/services.php'),
                    'Portfolio' => themeLink('/portfolio.php'),
                    'Blog' => themeLink('/blog.php'),
                    'Contact' => themeLink('/contact.php')
                )
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));

		?>
		
		<section class="section">
                
            <header class="heading_group-block text-center">
                <div class="container-small">
                    <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Single Project</span></h4>
                    <h2 class="heading-uppercase-heavy-size-7 font-2"><span>See How We Did It</span></h2>
                    <div class="heading_icon">
                        <i class="fa fa-magic"></i>
                    </div>
                    <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
                </div>
            </header>
            
        </section>
				
		<section class="section-primary-flush relative container text-center">
                
            <div class="span-7">
                <div class="desktop-graphic">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                    <span class="desktop-graphic_image owl-carousel" id="portfolio-thumbs">
                        <div class="bg-cover" style="background-image: url('<?php stockImage('demo/hero-1.jpg')?>')"></div>
                        <div class="bg-cover" style="background-image: url('<?php stockImage('demo/hero-2.jpg')?>')"></div>
                        <div class="bg-cover" style="background-image: url('<?php stockImage('demo/hero-3.jpg')?>')"></div>
                        <div class="bg-cover" style="background-image: url('<?php stockImage('demo/hero-4.jpg')?>')"></div>
                    </span>
                </div>
                <nav class="slide-nav" id="desktop-graphic_nav">
                    <button class="slide-prev button-icon-border-size-3-grey-3"><i class="fa fa-angle-left"></i></button>
                    <button class="slide-next button-icon-border-size-3-grey-3"><i class="fa fa-angle-right"></i></button>
                </nav>
            </div>
                        
            <script>
                $(document).ready(function() {
                    
                    var thumbsCarousel = $("#portfolio-thumbs");
                    
                    thumbsCarousel.owlCarousel({
                        items : 1,
                        loop  : true,
                        dots  : false
                    });
                    
                    $("#desktop-graphic_nav .slide-next").click(function() {
                        thumbsCarousel.trigger('next.owl.carousel');
                    });
                    $("#desktop-graphic_nav .slide-prev").click(function() {
                        thumbsCarousel.trigger('prev.owl.carousel');
                    });
                    
                });
            </script>
            
        </section>
        
        <section class="section-primary-flush">
            <div class="container-small text-center">
                <p class="lede">Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Vestibulum euismod nisi tincidunt mollis sagittis. Sed rutrum quam non tortor ornare, ut semper lorem pellentesque. <a href="#">Mauris bibendum</a> velit mi, in elementum ex consequat id. Sed consequat cursus sapien, <i>non consequat</i> odio pretium sit amet. Nulla at lorem hendrerit sapien vehicula tincidunt faucibus sit amet nunc.</p>
            </div>
        </section>
        
        <section class="section-primary-flush container">
                
            <header class="heading_group-large">
                <h2 class="heading-size-6-light-strikethrough-dots text-center"><span>What We Did</span></h2>
            </header>
            
            <div class="row-flow row-waffle text-center">
                
                <!-- Feature 1 -->
                <div class="widget-borderTop-highlight-block-scale span-3 break-3-half break-2-full">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">100% Responsive</h3>
                        <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="widget-borderTop-highlight-block-scale span-3 break-3-half break-2-full">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-clipboard"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">Simple Page Builder</h3>
                        <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="widget-borderTop-highlight-block-scale span-3 break-3-half break-2-full">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-photo"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">Retina Ready</h3>
                        <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="widget-borderTop-highlight-block-scale span-3 break-3-half break-2-full">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-eyedropper"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">Unlimited Colors</h3>
                        <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
                </div>
                
            </div><!-- Features Row -->
                
        </section><!-- section -->
				
		<section class="section-secondary-mini">
            
            <div class="container">
                    
                <div class="row">
                    <div class="span-4 va-middle text-center min-break-3">
                        <img class="span-10 greyscale" src="<?php echo appDir ?>/images/layouts/layout-header-alt.png" alt="" />
                    </div>
                    <div class="span-8 va-middle">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-5 font-2">Digital Agency</h2>
                            <h3 class="heading-light-size-4-highlight-opaque"><b>A Modern Template for Creative Blog</b></h3>
                        </header>
                        <p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing</b> elit. Vestibulum euismod nisi tincidunt mollis sagittis. Sed rutrum quam non tortor ornare, ut semper lorem pellentesque. <a href="#">Mauris bibendum</a> velit mi, in elementum ex consequat id. Sed consequat cursus sapien, <i>non consequat</i> odio pretium sit amet. Nulla at lorem hendrerit sapien vehicula tincidunt faucibus sit amet nunc. Sed rutrum quam non tortor ornare, ut semper lorem pellentesque.</p>
                        <div class="button_group">
                            <a class="button-border-size-2-white-oval" href="#">View Modules</a>
                            <a class="button-size-2-white-oval" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                
            </div>
                
        </section><!-- section -->
				
		<section class="section-primary container">
        
            <div class="row">
                <div class="span-8 va-middle text-right">
                    <header class="heading_group">
                        <h2 class="heading-heavy-size-5  font-2">Digital Agency</h2>
                        <h3 class="heading-light-brand-1-size-4">A Modern Template for Creative Blogs</h3>
                    </header>
                    <p>Create multiple themes for your project and swap them at the change of a variable. Kayzen's unique theming system allows you to rapidly build multiple themes without altering any of the source code. The code for your theme is automatically generated based on the settings you pass in the configuration file.</p>
                    <ul class="list-arrow">
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>Donec malesuada metus non massa sodales auctor</li>
                        <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                        <li>Etiam dapibus, nulla placerat</li>
                    </ul>
                    <div class="button_group">
                        <a class="button-primary-size-2-oval" href="#">View Modules</a>
                        <a class="button-size-2-oval" href="#">Learn More</a>
                    </div>
                </div>
                <div class="span-4 va-middle text-center min-break-3">
                    <img class="greyscale" src="<?php echo appDir ?>/images/custom-graphic-1.png">
                </div>
            </div>
            
        </section>
        
        <section class="section-primary-flush-dot-map container"> 
                
		    <?php socialWidgets() ?>
            
        </section> 
		
		<section 
			class="section-secondary-overlay-alt"
			style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
		>
		
			<div class="container-small text-center">
				<blockquote class="blockquote">
					<a class="blockquote_avatar-large" href="#">
						<img src="<?php stockImage('team/team-2.jpg')?>" alt="">
					</a>
					<div class="blockquote_content">
						<p class="lede">Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
					</div>
					<div class="blockquote_cite"> 
						<h4 class="heading-highlight"><b>Brendon Mack - Theme Forest</b></h4>
					</div>
				</blockquote>
			</div>
			
		</section>    
		
		<?php
    
            recentWork(array(
                'item-link' => themeLink('/portfolio-single.php')
            ));
            
            promoBanner(array(
                'cta-modifiers' => '-oval'
            ));
            
            appFooter(array(
                'columns' => false
            )); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>