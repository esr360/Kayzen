<?php 
	include ('../../../app.php');
	// page config
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
?>

<!DOCTYPE html>
<html>

<?php include (ROOT.'/includes/head.php'); ?>

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
		
		<section class="section-primary-mini relative text-center">	
			<ul class="tabs_nav-pills-center min-break-2" id="portfolio-categories">
				<li class="button-pill-grey-1-round active" data-filter="*">View All</li>
				<li class="button-pill-grey-1-round" data-filter="[data-HTML-theme]">HTML Themes</li>
				<li class="button-pill-grey-1-round" data-filter="[data-photography]">Photography</li>
				<li class="button-pill-grey-1-round" data-filter="[data-logo]">Logos</li>
			</ul>
		</section>
		
		<section class="section-primary-flush relative">
				
            <div class="container">

                <div class="row-flow row-waffle-filterable fixed-table" id="portfolio-items">
                    
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
                        
                        $('#portfolio-categories').KayzenClickHelper();
                        
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
                            $('#portfolio-items').isotope();
                            $('#portfolio-categories').on('click', 'li', function() {
                                var filterValue = $(this).attr('data-filter');
                                $('#portfolio-items').isotope({ 
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