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
			
                <div id="portfolio-items" class="row-no-gutter">

                    <?php
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'   => 'portfolio',
                            'matrix' => true,
                            'span'   => 4,
                            'class'  => 'break-3-half break-2-full'
                        ));
                        
                    ?>
                                
                </div><!-- portfolio-items -->
                    
                <script>
                    $(document).ready(function() {
                        
                        // Redefine the lightbox plugin to pass to infiniteScroll
                        function articlesGallery() {
                            $('[rel="lightbox"]').magnificPopup({
                                type : 'image'
                            });
                        };

                        $("#portfolio-items").KayenInfiniteScroll({
                            isotopeGrid : false
                        }, articlesGallery);
                        
                    });
                </script>
                
                <ul id="pagination">
                    <li class="next"><a href="3-cols-infinite-scroll-2.php">2</a></li>
                </ul>   
            
            </div>       
			
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