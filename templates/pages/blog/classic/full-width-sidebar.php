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
			$topBarModifiers = '';
			include (ROOT.'/modules/top-bar.php'); 
		?>

		<?php 
			$headerModifiers = '-bar-absolute-dark-sticky'; 
			include (ROOT.'/modules/header.php'); 
		?>

		<?php include (ROOT.'/modules/billboard.php'); ?>
		
		<section class="section-primary">
				
			<div class="container">
				
				<div class="row">
					
					<div class="span-8">
                  
                        <div id="blog-items">
                                
                            <?php
                                
                                articleItem();
                                
                                articleItem(array(
                                    'media' => 'video'
                                ));
                                
                                articleItem(array(
                                    'media' => 'carousel'
                                ));
                                
                                articleItem(array(
                                    'media' => 'masonry'
                                ));
                                
                                articleItem(array(
                                    'media' => 'audio'
                                ));
                                
                                articleItem(array(
                                    'media' => 'codepen'
                                ));
                                
                            ?> 
                        
                        </div> 
                        
                        <ul class="pagination tabs_nav-pills object-center" id="portfolio-categories">
                            <small>
                                <li class="button-pill-grey-1-thin"><i class="fa fa-angle-left"></i></li>
                                <li class="button-pill-grey-1-thin">1</li>
                                <li class="button-pill-grey-1-thin active">2</li>
                                <li class="button-pill-grey-1-thin">3</li>
                                <li class="button-pill-grey-1-thin">...</li>
                                <li class="button-pill-grey-1-thin">10</li>
                                <li class="button-pill-grey-1-thin"><i class="fa fa-angle-right"></i></li>
                            </small>
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
					
					<aside class="sidebar span-4">

                        <?php include (ROOT.'/includes/sidebar.php'); ?>
						
					</aside><!-- sidebar -->
					
				</div><!-- row -->
				
			</div><!-- container -->

		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>