<?php 
	include ('../app.php');
	// page config
	$title = 'Page Templates';
	$tagLine = 'Build your website using our pre-made templates...';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php include (ROOT.'/modules/objects/header/header.php'); ?>

		<?php include (ROOT.'/modules/objects/billboard/billboard.php'); ?>
		
		<section class="section-primary">
			
			<div class="container-small">
				
				<div class="widget_group-large row-magic text-center" id="page-overview">
					
					<!-- Feature 1 -->
					<a class="widget-block-borderTop-scale span" href="#homepages">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-home"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Homepages</h4>
						</header>
					</a>
					
					<!-- Feature 2 -->
					<a class="widget-block-borderTop-scale span" href="#portfolio-blog">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-commenting"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Portfolio/Blog</h4>
						</header>
					</a>
					
					<!-- Feature 3 -->
					<a class="widget-block-borderTop-scale span" href="#further-pages">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-clone"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Further Pages</h4>
						</header>
					</a>
					
					<!-- Feature 4 -->
					<a class="widget-block-borderTop-scale span" href="#utility-pages">
						<div class="widget_icon icon-plain-size-9">
							<i class="fa fa-cog"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Utility Pages</h4>
						</header>
					</a>
					
				</div>
				
				<header class="heading_group" id="homepages">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-2"><span>Templates</span></h4>
					<h2 class="heading-uppercase-heavy-size-6 font-2"><span>Homepages</span></h2>
				</header>
				
				<div class="row-flow">
					<div class="thumbnail span-4">
						<div class="thumbnail_mask">
							<a href="#" class="icon-border-circle-size-3">
								<i class="fa fa-search"></i>
							</a>
						</div>
						<img src="<?php echo appDir ?>/images/stock-1-thumb.jpg">
					</div>
					<div class="span-4">
						<img src="<?php echo appDir ?>/images/stock-1-thumb.jpg">
					</div>
					<div class="span-4">
						<img src="<?php echo appDir ?>/images/stock-1-thumb.jpg">
					</div>
					<div class="span-4">
						<img src="<?php echo appDir ?>/images/stock-1-thumb.jpg">
					</div>
					<div class="span-4">
						<img src="<?php echo appDir ?>/images/stock-1-thumb.jpg">
					</div>
					<div class="span-4">
						<img src="<?php echo appDir ?>/images/stock-1-thumb.jpg">
					</div>
				</div>
				
				<hr class="stripes gutter" />
				
				<header class="heading_group" id="portfolio-blog">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-2"><span>Templates</span></h4>
					<h2 class="heading-uppercase-heavy-size-6 font-2"><span>Portfolio/Blog</span></h2>
				</header>
				
				<hr class="stripes gutter" />
				
				<header class="heading_group" id="further-pages">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-2"><span>Templates</span></h4>
					<h2 class="heading-uppercase-heavy-size-6 font-2"><span>Further Pages</span></h2>
				</header>
				
				<hr class="stripes gutter" />
				
				<header class="heading_group" id="utility-pages">
					<h4 class="heading-uppercase-light-spaced-brand-1-size-2"><span>Templates</span></h4>
					<h2 class="heading-uppercase-heavy-size-6 font-2"><span>Utility Pages</span></h2>
				</header>
				
			</div>
				
		</section>

		<?php include (ROOT.'/modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>