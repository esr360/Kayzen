<?php 
	include ('../../../app.php');
	// page config
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
?>

<!DOCTYPE html>
<html>

<?php head() ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content <?php echo ROOT ?>">
		
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
		
		<section class="section-primary relative">
				
            <div class="container">

                <div class="row-flow row-waffle row-ias fixed-table" id="portfolio-items">
                    
                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'audio',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'youtube',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'height' => 'tall',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'audio',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                     
                    ?>
                    
                </div>
                    
                <script>
                    $(document).ready(function() {
                        
                        function articlesCarousel() {
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
                        } articlesCarousel();
                        
                        // Redefine the lightbox plugin to pass to infiniteScroll
                        function articlesGallery() {
                            $('[rel="lightbox"]').magnificPopup({
                                type : 'image'
                            });
                        };
                        
                        $(window).load(function() {
                            $('#portfolio-items').isotope();
                            $("#portfolio-items").KayenInfiniteScroll({}, [articlesCarousel, articlesGallery]);
                        });
                        
                    });
                </script>
                
                <ul id="pagination">
                    <li class="next"><a href="3-cols-infinite-scroll-2.php">2</a></li>
                </ul>
            
            </div><!-- container -->
			
		</section>
		
		<?php
        
            promoBanner();
            
            appFooter(); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>
    
    <?php devAsset(array('path' => 'jquery-ias.js')); ?>
    <?php devAsset(array('path' => 'isotope.pkgd.js')); ?>

</body>