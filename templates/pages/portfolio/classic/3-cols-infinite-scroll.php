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
		
		<section class="section-primary relative">
				
            <div class="container">

                <div class="row-flow row-waffle fixed-table" id="portfolio-items">

                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'vimeo',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'type'   => 'portfolio',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'youtube',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'type'   => 'portfolio',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'type'   => 'portfolio',
                            'size'   => 'small',
                            'span'   => 4,
                        ));
                    
                        articleItem(array(
                            'type'   => 'portfolio',
                            'media'  => 'carousel',
                            'size'   => 'small',
                            'span'   => 4,
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

                        $("#portfolio-items").KayenInfiniteScroll({
                            isotopeGrid : false
                        }, [articlesCarousel]);
                        
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
    
    <?php devAsset('', 'jquery-ias.js') ?>

</body>