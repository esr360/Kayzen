<?php 
	include ('../app.php');
	// page config
	$title = 'Page Templates';
	$tagLine = 'Build your website using our pre-made templates...';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head() ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-opaque-sticky'
            ));

            billboard([
                'title'    => [
                    'text' => $title
                ],
                'tag-line' => $tagLine
            ]);
            
        ?>
		
		<section class="section-primary">
			
			<div class="container-small">
				
				<div class="widget_group-large row-magic text-center" id="page-overview">
					
					<!-- Feature 1 -->
					<a class="widget-block-borderTop-scale span" href="#homepages">
						<div class="widget_icon button-icon-plain-size-8">
							<i class="fa fa-home"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Homepages</h4>
						</header>
					</a>
					
					<!-- Feature 2 -->
					<a class="widget-block-borderTop-scale span" href="#portfolio">
						<div class="widget_icon button-icon-plain-size-8">
							<i class="fa fa-image"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Portfolio</h4>
						</header>
					</a>
					
					<!-- Feature 3 -->
					<a class="widget-block-borderTop-scale span" href="#blog">
						<div class="widget_icon button-icon-plain-size-8">
							<i class="fa fa-commenting"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Blog</h4>
						</header>
					</a>
					
					<!-- Feature 4 -->
					<a class="widget-block-borderTop-scale span" href="#further-pages">
						<div class="widget_icon button-icon-plain-size-8">
							<i class="fa fa-clone"></i>
						</div>
						<header class="widget_header heading_group">
							<h4 class="heading-light-uppercase-brand-1">Further Pages</h4>
						</header>
					</a>
					
				</div>
                
				<header id="homepages" class="heading_group">
                    <h2 class="heading-light-size-6">Homepages</h2>
                </header>
				
                <div class="">
                    <ul class="list-arrow-blocks row-flow">
                        <li class="span-4"><a href="<?php pageLink('homepages/homepage-1.php') ?>">Homepage 1</a></li>
                        <li class="span-4"><a href="<?php pageLink('homepages/homepage-2.php') ?>">Homepage 2</a></li>
                        <li class="span-4"><a href="<?php pageLink('homepages/homepage-3.php') ?>">Homepage 3</a></li>
                        <li class="span-4"><a href="<?php pageLink('homepages/homepage-4.php') ?>">Homepage 4</a></li>
                        <li class="span-4"><a href="<?php pageLink('homepages/homepage-5.php') ?>">Homepage 5</a></li>
                        <li class="span-4"><a href="<?php pageLink('homepages/homepage-6.php') ?>">Homepage 6</a></li>
                    </ul>
                </div>
				
				<hr class="hrule-stripes gutter" />
                
				<header id="portfolio" class="heading_group">
                    <h2 class="heading-light-size-6">Portfolio</h2>
                </header>
                
                <h3 class="heading-uppercase-size-2">Classic</h3>
    
                <div class="">
                    <ul class="list-arrow-blocks row-flow">
                        <li class="span-4"><a href="<?php pageLink('portfolio/classic/2-cols-carousel.php') ?>">2 Columns Carousel</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/classic/3-cols-carousel.php') ?>">3 Columns Carousel</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/classic/3-cols-filterable.php') ?>">3 Columns Filterable</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/classic/3-cols-infinite-scroll.php') ?>">3 Columns Infinite Scroll</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/classic/4-cols-carousel.php') ?>">4 Columns Carousel</a></li>
                    </ul>
                </div>
                
                <h3 class="heading-uppercase-size-2">Masonry</h3>
    
                <div class="">
                    <ul class="list-arrow-blocks row-flow">
                        <li class="span-4"><a href="<?php pageLink('portfolio/masonry/3-cols-filterable.php') ?>">3 Columns Filterable</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/masonry/3-cols-infinite-scroll.php') ?>">3 Columns Infinite Scroll</a></li>
                    </ul>
                </div>
                
                <h3 class="heading-uppercase-size-2">Matrix</h3>
    
                <div class="">
                    <ul class="list-arrow-blocks row-flow">
                        <li class="span-4"><a href="<?php pageLink('portfolio/matrix/2-cols-carousel.php') ?>">2 Columns Carousel</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/matrix/3-cols-carousel.php') ?>">3 Columns Carousel</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/matrix/3-cols-filterable.php') ?>">3 Columns Filterable</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/matrix/3-cols-fullscreen-carousel.php') ?>">3 Columns Fullscreen Carousel</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/matrix/3-cols-fullscreen-filterable.php') ?>">3 Columns Fullscreen Filterable</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/matrix/3-cols-infinite-scroll.php') ?>">3 Columns Infinite Scroll</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/matrix/4-cols-carousel.php') ?>">4 Columns Carousel</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/matrix/4-cols-fullscreen-carousel.php') ?>">4 Columns Fullscreen Carousel</a></li>
                    </ul>
                </div>
                
                <h3 class="heading-uppercase-size-2">Article</h3>
    
                <div class="">
                    <ul class="list-arrow-blocks row-flow">
                        <li class="span-4"><a href="<?php pageLink('portfolio/article/full-width.php') ?>">Full Width</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/article/full-width-infinite-scroll.php') ?>">Full Width Infinite Scroll</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/article/full-width-sidebar.php') ?>">Full Width Sidebar</a></li>
                    </ul>
                </div>
                
                <h3 class="heading-uppercase-size-2">Single</h3>
    
                <div class="">
                    <ul class="list-arrow-blocks row-flow">
                        <li class="span-4"><a href="<?php pageLink('portfolio/single.php') ?>">Single</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/single-sidebar.php') ?>">Single Sidebar</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/single-video.php') ?>">Single Video</a></li>
                        <li class="span-4"><a href="<?php pageLink('portfolio/single-video-bg.php') ?>">Single Video BG</a></li>
                    </ul>
                </div>
				
				<hr class="hrule-stripes gutter" />
				
				<header id="blog" class="heading_group">
                    <h2 class="heading-light-size-6">Blog</h2>
                </header>
                
                <h3 class="heading-uppercase-size-2">Classic</h3>
                
                <div class="">
                    <ul class="list-arrow-blocks row-flow">
                        <li class="span-4"><a href="<?php pageLink('blog/classic/2-cols.php') ?>">2 Columns</a></li>
                        <li class="span-4"><a href="<?php pageLink('blog/classic/3-cols.php') ?>">3 Columns</a></li>
                        <li class="span-4"><a href="<?php pageLink('blog/classic/3-cols-filterable.php') ?>">3 Columns Filterable</a></li>
                        <li class="span-4"><a href="<?php pageLink('blog/classic/3-cols-infinite-scroll.php') ?>">3 Columns Infinite Scroll</a></li>
                        <li class="span-4"><a href="<?php pageLink('blog/classic/4-cols.php') ?>">4 Columns</a></li>
                        <li class="span-4"><a href="<?php pageLink('blog/classic/full-width.php') ?>">Full Width</a></li>
                        <li class="span-4"><a href="<?php pageLink('blog/classic/full-width-sidebar.php') ?>">Full Width Sidebar</a></li>
                    </ul>
                </div>
                
                <h3 class="heading-uppercase-size-2">Masonry</h3>
                
                <div class="">
                    <ul class="list-arrow-blocks row-flow">
                        <li class="span-4"><a href="<?php pageLink('blog/masonry/3-cols.php') ?>">3 Columns</a></li>
                        <li class="span-4"><a href="<?php pageLink('blog/masonry/3-cols-filterable.php') ?>">3 Columns Filterable</a></li>
                    </ul>
                </div>
                
                <h3 class="heading-uppercase-size-2">Single</h3>
                
                <div class="">
                    <ul class="list-arrow-blocks row-flow">
                        <li class="span-4"><a href="<?php pageLink('blog/single.php') ?>">Single</a></li>
                        <li class="span-4"><a href="<?php pageLink('blog/single-sidebar.php') ?>">Single Sidebar</a></li>
                    </ul>
                </div>
				
				<hr class="hrule-stripes gutter" />
				
				<header id="further-pages" class="heading_group">
                    <h2 class="heading-light-size-6">Further Pages</h2>
                </header>
                
                <div class="">
                    <ul class="list-arrow-blocks row-flow">
                        <li class="span-4"><a href="<?php pageLink('further/about-us.php') ?>">About Us</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/about-us-2.php') ?>">About Us 2</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/contact-us.php') ?>">Contact Us</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/contact-us-2.php') ?>">Contact Us 2</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/services.php') ?>">Services</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/services-2.php') ?>">Services 2</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/services-3.php') ?>">Services 3</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/shop.php') ?>">Shop</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/shop-category.php') ?>">Shop Category</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/shop-category-sidebar.php') ?>">Shop Category Sidebar</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/shop-single.php') ?>">Shop Single</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/shop-single-sidebar.php') ?>">Shop Single Sidebar</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/404.php') ?>">404</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/login-register.php') ?>">Login/Register</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/coming-soon.php') ?>">Coming Soon</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/faq.php') ?>">FAQ</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/faq-2.php') ?>">FAQ 2</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/news.php') ?>">News</a></li>
                        <li class="span-4"><a href="<?php pageLink('further/search-results.php') ?>">Search Results</a></li>
                    </ul>
                </div>
				
			</div>
				
		</section>
		
		<?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>
</html>