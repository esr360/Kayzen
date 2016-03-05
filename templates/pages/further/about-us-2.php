<?php 
	include ('../../app.php');
	// page config
	$title = 'Our Company';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
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
                'modifiers' => 'bar-absolute-dark-sticky'
            ));

            billboard(array(
                'type'    => 'videoBg'
            ))
            
        ?>
        
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
			<div class="row-no-gutter fixed-table text-center">
				
				<div class="widget-block-panel-noHover span-3 break-4-half break-2-full">
					<div class="widget_icon button-icon-plain-size-8">
						<i class="fa fa-desktop"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-heavy-size-4">100% Responsive</h3>
						<h4 class="heading-light-uppercase-brand-1">Optimized for all devices</h4>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus.</p>
				</div>
				
				<div class="widget-block-panel-noHover span-3 break-4-half break-2-full">
					<div class="widget_icon button-icon-plain-size-8">
						<i class="fa fa-clipboard"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-heavy-size-4">Simple Page Builder</h3>
						<h4 class="heading-light-uppercase-brand-1">Visual composer included</h4>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus.</p>
				</div>
				
				<div class="section-secondary span-6 break-4-full va-middle">
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
        
        <?php
            
            testimonials();
            
            responsive();
            
            promoBanner();
            
            ourTeam();
            
            clients();
            
            promoSection();
        
            statistics();
    
            recentWork();
            
            googleMap();
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
		