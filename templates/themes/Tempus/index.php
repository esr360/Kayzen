<?php 
    include ('../../app.php');
    // page config
    $theme = 'Tempus';
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
                    'Services' => themeLink($theme, '/services.php'),
                    'Portfolio' => themeLink($theme, '/portfolio.php'),
                    'Blog' => themeLink($theme, '/blog.php'),
                    'Contact' => themeLink($theme, '/contact.php')
                )
            ));

		?>

		<section class="billboard-full-screen"
			style="background-image: url('<?php stockImage('demo/stock-5.jpg') ?>')">
			<div class="billboard_wrapper container text-left">
				<div class="short" id="billboard-fade-parallax">
					<h3 class="heading-uppercase-heavy-highlight-dark-size-8 font-2">
						<b>Welcome to Kayzen</b><br />
						<b>A Unique Theme Framework</b>
					</h3>
					<div class="button_group">
						<a class="button-size-4-grey-6" href="#">Purchase Now</a>
						<a class="button-size-4-primary" href="#">Explore The Potential</a>
					</div>
				</div>
			</div>
			<nav class="slide-nav">
				<button class="slide-prev button-icon-border-size-3-white"><i class="fa fa-angle-left"></i></button>
				<button class="slide-next button-icon-border-size-3-white"><i class="fa fa-angle-right"></i></button>
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
			
			<div class="row-no-gutter">
				
                <?php
                
				    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 3,
                        'class'  => 'break-3-half break-1-full'
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 3,
                        'class'  => 'break-3-half break-1-full'
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 3,
                        'class'  => 'break-3-half break-1-full'
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 3,
                        'class'  => 'break-3-half break-1-full'
                    ));
                
				    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 3,
                        'class'  => 'break-3-half break-1-full'
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 3,
                        'class'  => 'break-3-half break-1-full'
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 3,
                        'class'  => 'break-3-half break-1-full'
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 3,
                        'class'  => 'break-3-half break-1-full'
                    ));
                    
                 ?>
				
			</div>
            
		</section><!-- Key Features -->
        
        <?php
        
            blocksWithQuote();
            
        ?>
		
		<section 
			class="section-secondary-full-screen-overlay-alt"
			data-stellar-background-ratio="0.8"
			style="background-image: url('<?php stockImage('demo/stock-7.jpg') ?>')"
		>
			<div class="container v-center text-right">
                <div class="row">
                    <div class="span-5 va-middle text-center">
                        <div class="center-xy span-6 min-break-3">
                            <img 
                                class="mobile-graphic-white" 
                                src="<?php echo appDir ?>/images/mobile-screen.png" 
                                data-trigger="transform: translate(-45%, -50%) translateZ(0) scale(0.85)"
                                data-hover="left: -25%"
                                alt=""
                            / >
                            <img 
                                class="mobile-graphic-red" 
                                src="<?php echo appDir ?>/images/mobile-screen.png" 
                                data-trigger="transform: translate(45%, -50%) translateZ(0) scale(0.85)"
                                data-hover="right: -25%"
                                alt=""
                            / >
                            <img 
                                class="mobile-graphic-red" 
                                src="<?php echo appDir ?>/images/mobile-screen.png" 
                                data-hover="transform: scale(1.05) translateY(-47.5%) translateZ(0)"
                                alt=""
                            / >
                        </div>
                    </div>
                    <div class="span-7 va-middle">
                        <h3 class="heading-uppercase-heavy-highlight-dark-size-6 font-2">
                            <b>Seeing things clearly is simple when you look at the bigger picture</b>
                        </h3>
                        <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque, eros vel scelerisque vestibulum, neque nunc lobortis ex, a venenatis enim nisi sit amet purus. Praesent lacinia et nulla a facilisis. Sed aliquam pharetra ante non efficitur. Sed malesuada mauris quis congue porttitor.</p>
                        <div class="button_group">
                            <a class="button-size-4-primary" href="#">Purchase Now</a>
                            <a class="button-size-4-border-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
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
			
		<div class="row-no-gutter text-center">
                    
			<a href="<?php pageLink('blog/single.php') ?>" class="widget-spectrum-quarter-tub span-3 break-4-half break-2-full">
				<div class="widget_lid">
					<div class="widget_sticker">
                        <div class="widget_icon button-icon-plain-size-8">
                            <i class="fa fa-battery-half"></i>
                        </div>
                        <header class="heading_group">
                            <h4 class="heading-size-3">Lorem Ipsum</h4>
                        </header>
					</div>
				</div>
				<div class="widget_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
				</div>
				<div class="button-block-grey-5-fat relative">Read More</div>
			</a>
			
			<a href="<?php pageLink('blog/single.php') ?>" class="widget-spectrum-quarter-tub span-3 break-4-half break-2-full">
				<div class="widget_lid">
					<div class="widget_sticker">
                        <div class="widget_icon button-icon-plain-size-8">
						    <i class="fa fa-bar-chart"></i>
                        </div>
                        <header class="heading_group">
                            <h4 class="heading-size-3">Lorem Ipsum</h4>
                        </header>
					</div>
				</div>
				<div class="widget_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
				</div>
				<div class="button-block-grey-5-fat relative">Read More</div>
			</a>
			
			<a href="<?php pageLink('blog/single.php') ?>" class="widget-spectrum-quarter-tub span-3 break-4-half break-2-full">
				<div class="widget_lid">
					<div class="widget_sticker">
                        <div class="widget_icon button-icon-plain-size-8">
						    <i class="fa fa-desktop"></i>
                        </div>
                        <header class="heading_group">
                            <h4 class="heading-size-3">Lorem Ipsum</h4>
                        </header>
					</div>
				</div>
				<div class="widget_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
				</div>
				<div class="button-block-grey-5-fat relative">Read More</div>
			</a>
			
			<a href="<?php pageLink('blog/single.php') ?>" class="widget-spectrum-quarter-tub span-3 break-4-half break-2-full">
				<div class="widget_lid">
					<div class="widget_sticker">
                        <div class="widget_icon button-icon-plain-size-8">
						    <i class="fa fa-image"></i>
                        </div>
                        <header class="heading_group">
                            <h4 class="heading-size-3">Lorem Ipsum</h4>
                        </header>
					</div>
				</div>
				<div class="widget_content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
				</div>
				<div class="button-block-grey-5-fat relative">Read More</div>
			</a>
			
		</div>
		
		<section 
			class="section-primary hide-overflow center-mobile"
			style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
		>
		
			<div class="container">
				<div class="row">
					<div class="span-8">
						<header class="heading_group">
							<h3 class="heading-size-6">One Nexus</h3>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper nisi eu metus accumsan aliquet. Mauris a diam ac lectus facilisis faucibus. Sed convallis, ex et viverra suscipit, dui neque accumsan magna, et auctor leo ligula non ipsum. Phasellus ullamcorper interdum nisl et ornare.</p>
						<div class="button_group">
							<a class="button-border-primary" href="#">Purchase Now</a>
							<a class="button-border" href="#">Read More</a>
						</div>
					</div>
					<div class="section_graphic span-4 text-center min-break-3">
						<img 
							class="span-10" 
							src="<?php echo appDir ?>/images/tablet-base-dark.png"
							data-trigger-reverse="transform: translateY(50%)"
							alt=""
						/>
					</div>
				</div>
			</div>
			
		</section>
		
		<?php 
            
            shareTheLove();
        
            appFooter();
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>