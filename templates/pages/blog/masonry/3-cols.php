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
				
			<div class="container">
                
                <div id="blog-items" class="row-flow row-waffle fixed-table">
                    
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
                
                <ul class="pagination tabs_nav-pills-center">
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
                            });
                        });
                        
                        $(window).load(function() {
                            $('#blog-items').isotope();
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