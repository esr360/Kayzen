<?php 
	include ('../../app.php');
	// page config
    $theme = 'Coffee';
	$title = 'Our Blog';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader() ?>

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

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));

		?>
		
		<section class="section-primary-mini relative text-center min-break-1">	
			<ul class="tabs_nav-pills-center" id="blog-categories">
				<li class="tabs_nav_item active" data-filter="*">View All</li>
				<li class="tabs_nav_item" data-filter="[data-image]">Image</li>
				<li class="tabs_nav_item" data-filter="[data-carousel]">Carousel</li>
				<li class="tabs_nav_item" data-filter="[data-vimeo], [data-youtube]">Video</li>
			</ul>
		</section>
		
		<section class="section-primary-flush">
				
			<div class="container">
                
                <div id="blog-items" class="row-flow row-waffle-large-filterable fixed-table">
                    
                    <?php
                        
                        articleItem(array(
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full',
                            'link'   => themeLink($theme, '/blog-single.php'),
                            'root'   => themeLink($theme, '/blog.php')
                        ));
                    
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full',
                            'link'   => themeLink($theme, '/blog-single.php'),
                            'root'   => themeLink($theme, '/blog.php')
                        ));
                    
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full',
                            'link'   => themeLink($theme, '/blog-single.php'),
                            'root'   => themeLink($theme, '/blog.php')
                        ));
                    
                        articleItem(array(
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full',
                            'link'   => themeLink($theme, '/blog-single.php'),
                            'root'   => themeLink($theme, '/blog.php')
                        ));
                    
                        articleItem(array(
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full',
                            'link'   => themeLink($theme, '/blog-single.php'),
                            'root'   => themeLink($theme, '/blog.php')
                        ));
                    
                        articleItem(array(
                            'media'  => 'youtube',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full',
                            'link'   => themeLink($theme, '/blog-single.php'),
                            'root'   => themeLink($theme, '/blog.php')
                        ));
                    
                        articleItem(array(
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full',
                            'link'   => themeLink($theme, '/blog-single.php'),
                            'root'   => themeLink($theme, '/blog.php')
                        ));
                    
                        articleItem(array(
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full',
                            'link'   => themeLink($theme, '/blog-single.php'),
                            'root'   => themeLink($theme, '/blog.php')
                        ));
                    
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full',
                            'link'   => themeLink($theme, '/blog-single.php'),
                            'root'   => themeLink($theme, '/blog.php')
                        ));
                    
                    ?>
                    
                </div>
            
                <script>
                    $(document).ready(function() {
                        
                        $('#blog-categories').KayzenClickHelper();
                        
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
                        });
                        
                        $(window).load(function() {
                            $('#blog-items').isotope();
                            $('#blog-categories').on('click', 'li', function() {
                                var filterValue = $(this).attr('data-filter');
                                $('#blog-items').isotope({ 
                                    filter: filterValue 
                                });
                            });
                        });
                        
                    });
                </script>
                
            </div>       
			
		</section>
		
        <?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>
    
    <?php scripts($theme) ?>
    
    <?php devAsset('', 'isotope.pkgd.js') ?>

</body>
</html>