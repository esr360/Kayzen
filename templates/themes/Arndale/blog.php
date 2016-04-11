<?php 
    include ('../../app.php');
    // page config
    $theme = 'Arndale';
    $title = 'Our Company';
    $tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
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
                    'Shop' => themeLink($theme, '/shop-category.php'),
                    'Blog' => themeLink($theme, '/blog.php'),
                    'Contact' => themeLink($theme, '/contact.php')
                )
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));

		?>
		
		<section class="section-primary">
				
			<div class="container">
				
				<div class="row fixed-table stack-break-5">
					
					<div class="span-8">
                  
                        <div id="blog-items">
                                
                            <?php
                                
                                articleItem(array(
                                    'link'  => themeLink($theme, '/blog-single.php'),
                                    'root'  => themeLink($theme, '/blog.php')
                                ));
                                
                                articleItem(array(
                                    'media' => 'vimeo',
                                    'link'  => themeLink($theme, '/blog-single.php'),
                                    'root'  => themeLink($theme, '/blog.php')
                                ));
                                
                                articleItem(array(
                                    'media' => 'youtube',
                                    'link'  => themeLink($theme, '/blog-single.php'),
                                    'root'  => themeLink($theme, '/blog.php')
                                ));
                                
                                articleItem(array(
                                    'media' => 'carousel',
                                    'link'  => themeLink($theme, '/blog-single.php'),
                                    'root'  => themeLink($theme, '/blog.php')
                                ));
                                
                                articleItem(array(
                                    'media' => 'masonry',
                                    'link'  => themeLink($theme, '/blog-single.php'),
                                    'root'  => themeLink($theme, '/blog.php')
                                ));
                                
                                articleItem(array(
                                    'media' => 'audio',
                                    'link'  => themeLink($theme, '/blog-single.php'),
                                    'root'  => themeLink($theme, '/blog.php')
                                ));
                                
                                articleItem(array(
                                    'media' => 'codepen',
                                    'link'  => themeLink($theme, '/blog-single.php'),
                                    'root'  => themeLink($theme, '/blog.php')
                                ));
                                
                            ?> 
                        
                        </div> 
                
                        <ul class="pagination tabs_nav-pills">
                            <li class="tabs_nav_item"><i class="fa fa-angle-left"></i></li>
                            <li class="tabs_nav_item">1</li>
                            <li class="tabs_nav_item active">2</li>
                            <li class="tabs_nav_item">3</li>
                            <li class="tabs_nav_item">...</li>
                            <li class="tabs_nav_item">10</li>
                            <li class="tabs_nav_item"><i class="fa fa-angle-right"></i></li>
                        </ul>
                    
                        <script>
                            $(document).ready(function() {
                                $('.article-thumbnails-carousel').each(function() {
                                    $(this).owlCarousel({
                                        items : 1,
                                        nav : true,
                                        navText : [
                                            '<i class="fa fa-angle-left fa-3x"></i>',
                                            '<i class="fa fa-angle-right fa-3x"></i>'
                                        ],
                                        loop : true
                                    })
                                })
                            });
                        </script>
                        
					</div>
					
                    <hr class="hrule-stripes-large max-break-3" />
                    
					<aside class="sidebar span-4">
    
                        <?php sidebar(); ?>
						
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

    <?php scripts($theme) ?>

</body>
</html>