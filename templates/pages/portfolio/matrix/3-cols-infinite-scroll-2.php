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
		
		<section class="section-primary relative">
                
            <div class="container">
			
                <div id="portfolio-items" class="row-no-gutter">
        
                    <?php 
                        $rows = 3; 
                        $columns = 3;
                        $thumbTitle = true;
                        include (ROOT.'/includes/portfolio-items.php'); 
                    ?>
                                
                </div><!-- portfolio-items -->
                    
                <script>
                    $(document).ready(function() {
                        $("#portfolio-items").KayenInfiniteScroll();
                    });
                </script>
                
                <ul id="pagination">
                    <li class="next"><a href="3-cols-infinite-scroll-3.php">3</a></li>
                </ul>   
            
            </div>       
			
		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>
    
    <?php if (env == 'dev') { ?>
        <script src="<?php echo appDir ?>/build/scripts/jquery-ias.js"></script>
        <script src="<?php echo appDir ?>/build/scripts/isotope.pkgd.js"></script>
    <?php } else if (env == 'prod') { ?>
        <script src="<?php echo appDir ?>/build/scripts/jquery-ias.min.js"></script>
        <script src="<?php echo appDir ?>/build/scripts/isotope.pkgd.min.js"></script>
    <?php } ?>

</body>