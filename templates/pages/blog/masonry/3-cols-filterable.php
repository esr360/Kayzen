<?php 
	include ('../../../app.php');
	// page config
	$title = 'Our Blog';
	$tagLine = 'Read about all the great work we do';
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
                'modifiers' => 'bar-absolute-dark-sticky'
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));

		?>
		
		<section class="section-primary">
            
			<ul class="tabs_nav-pills-center-large min-break-2" id="blog-types">
				<li class="tabs_nav_item active" data-filter="*">View All</li>
				<li class="tabs_nav_item" data-filter="[data-image]">Image</li>
				<li class="tabs_nav_item" data-filter="[data-carousel]">Carousel</li>
				<li class="tabs_nav_item" data-filter="[data-vimeo], [data-youtube]">Video</li>
				<li class="tabs_nav_item" data-filter="[data-audio]">Audio</li>
			</ul>
				
			<div class="container">
                
                <div id="blog-items" class="row-flow row-waffle-filterable fixed-table">
                        
                    <?php
                        
                        articleItem(array(
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'media'  => 'audio',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'media'  => 'youtube',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'media'  => 'audio',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                     
                    ?>
                
                </div>
            
                <script>
                    $(document).ready(function() {
                        
                        $('#blog-types').KayzenClickHelper();
                        
                        $('.article-thumbnails-carousel').each(function() {
                            $(this).owlCarousel({
                                items : 1,
                                nav : true,
                                navText : [
                                    '<i class="fa fa-angle-left fa-3x"></i>',
                                    '<i class="fa fa-angle-right fa-3x"></i>'
                                ],
                                loop : true
                            });
                        });
                        
                        $(window).load(function() {
                            $('#blog-items').isotope();
                            $('#blog-types').on('click', 'li', function() {
                                var filterValue = $(this).attr('data-filter');
                                $('#blog-items').isotope({ 
                                    filter: filterValue 
                                });
                            });
                        });
                        
                    });
                </script>
				
			</div><!-- container -->

		</section>
		
		<?php
        
            promoBanner();
            
            appFooter(); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>
    
    <?php devAsset('', 'isotope.pkgd.js') ?>

</body>