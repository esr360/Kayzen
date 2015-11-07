<?php 
	include ('../../app.php');
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
                
                <div id="blog-items" class="row-flow row-waffle-large-infinite">
                        
                    <div class="span-4">
                        <?php $type = 'image'; $size = 'small'; include (ROOT.'/includes/article-item.php'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php $type = 'carousel'; $size = 'small'; include (ROOT.'/includes/article-item.php'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php $type = 'video'; $size = 'small'; include (ROOT.'/includes/article-item.php'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php $type = 'image'; $size = 'small'; include (ROOT.'/includes/article-item.php'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php $type = 'video'; $size = 'small'; include (ROOT.'/includes/article-item.php'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php $type = 'image'; $size = 'small'; include (ROOT.'/includes/article-item.php'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php $type = 'image'; $size = 'small'; include (ROOT.'/includes/article-item.php'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php $type = 'image'; $size = 'small'; include (ROOT.'/includes/article-item.php'); ?>
                    </div>
                    
                    <div class="span-4">
                        <?php $type = 'carousel'; $size = 'small'; include (ROOT.'/includes/article-item.php'); ?>
                    </div>
                
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
                
                <ul id="pagination">
                    <li class="next"><a href="3-cols-infinite-scroll-3.php">3</a></li>
                </ul>
				
			</div><!-- container -->

		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>