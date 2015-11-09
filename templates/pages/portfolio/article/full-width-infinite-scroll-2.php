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
			$topBarModifiers = '';
			include (ROOT.'/modules/top-bar.php'); 
		?>

		<?php 
			$headerModifiers = '-bar-absolute-dark-sticky'; 
			include (ROOT.'/modules/header.php'); 
		?>

		<?php include (ROOT.'/modules/billboard.php'); ?>
		
		<section class="section-primary">
				
			<div class="container-small">
                
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
                        }, [articlesCarousel, dataBG]);
                         
                    });
                </script>
                
                <ul id="pagination">
                    <li class="next"><a href="full-width-infinite-scroll-3.php">3</a></li>
                </ul>
				
			</div><!-- container -->

		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>
    
    <?php if (env == 'dev') { ?>
        <script src="<?php echo appDir ?>/build/scripts/jquery-ias.js"></script>
    <?php } else if (env == 'prod') { ?>
        <script src="<?php echo appDir ?>/build/scripts/jquery-ias.min.js"></script>
    <?php } ?>

</body>