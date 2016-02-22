<?php 
	include ('../../../app.php');
	// page config
	$title = 'Our Blog';
	$tagLine = 'Read about all the great work we do';
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
                'title'    => $title,
                'tag-line' => $tagLine
            ));

		?>
		
		<section class="section-primary-mini relative">	
			<ul class="tabs_nav-pills-center" id="blog-types">
				<li class="button-pill-grey-1-round active" data-filter="*">View All</li>
				<li class="button-pill-grey-1-round" data-filter="[data-image]">Image</li>
				<li class="button-pill-grey-1-round" data-filter="[data-carousel]">Carousel</li>
				<li class="button-pill-grey-1-round" data-filter="[data-vimeo], [data-youtube]">Video</li>
			</ul>
		</section>
		
		<section class="section-primary-flush">
				
			<div class="container">
                
                <div id="blog-items" class="row-flow row-waffle-large-filterable">
                    
                    <?php
                        
                        articleItem(array(
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'media'  => 'youtube',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
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
                            })
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

    <?php include (ROOT.'/includes/scripts.php'); ?>
    
    <?php devAsset(array('path' => 'isotope.pkgd.js')); ?>

</body>