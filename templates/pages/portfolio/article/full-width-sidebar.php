<?php 
	include ('../../../app.php');
	// page config
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
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
		
		<section class="section-primary">
				
			<div class="container">
				
				<div class="row fixed-table">
					
					<div class="span-8">
                        
                        <div id="portfolio-items">
                            
                            <?php 
                                
                                articleItem(array(
                                    'type'  => 'portfolio'
                                ));
                                
                                articleItem(array(
                                    'media' => 'vimeo',
                                    'type'  => 'portfolio'
                                ));
                                
                                articleItem(array(
                                    'media' => 'youtube',
                                    'type'  => 'portfolio'
                                ));
                                
                                articleItem(array(
                                    'media' => 'carousel',
                                    'type'  => 'portfolio'
                                ));
                                
                                articleItem(array(
                                    'media' => 'masonry',
                                    'type'  => 'portfolio'
                                ));
                                
                                articleItem(array(
                                    'media' => 'audio',
                                    'type'  => 'portfolio'
                                ));
                                
                                articleItem(array(
                                    'media' => 'codepen',
                                    'type'  => 'portfolio'
                                ));
                                
                            ?>
                        
                        </div>
            
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
                        
                        <ul class="pagination tabs_nav-pills">
                            <li class="button-pill-grey-1-round"><i class="fa fa-angle-left"></i></li>
                            <li class="button-pill-grey-1-round">1</li>
                            <li class="button-pill-grey-1-round active">2</li>
                            <li class="button-pill-grey-1-round">3</li>
                            <li class="button-pill-grey-1-round">...</li>
                            <li class="button-pill-grey-1-round">10</li>
                            <li class="button-pill-grey-1-round"><i class="fa fa-angle-right"></i></li>
                        </ul>
                        
					</div>
					
					<aside class="sidebar span-4">
    
                        <?php sidebar(); ?>
						
					</aside><!-- sidebar -->
					
				</div><!-- row -->
				
			</div><!-- container -->

		</section>
		
		<?php
        
            promoBanner();
            
            appFooter(); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>