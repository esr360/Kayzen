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
                        
                    <?php $fullWidth = true; include (ROOT.'/includes/article-item.php'); ?>
                    
                    <?php include (ROOT.'/includes/article-item.php'); ?>
                    
                    <?php include (ROOT.'/includes/article-item.php'); ?>
                    
                    <?php include (ROOT.'/includes/article-item.php'); ?>
                    
                    <?php include (ROOT.'/includes/article-item.php'); ?>
                
                </div>
                
                <script>     
				    $(document).ready(function() { 
                        $("#portfolio-items").KayenInfiniteScroll({
                            isotopeGrid : false
                        });
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