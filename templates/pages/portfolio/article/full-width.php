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
                
                <ul class="pagination tabs_nav-pills object-center" id="portfolio-categories">
                    <li class="button-pill-grey-1-thin"><i class="fa fa-angle-left"></i></li>
                    <li class="button-pill-grey-1-thin">1</li>
                    <li class="button-pill-grey-1-thin active">2</li>
                    <li class="button-pill-grey-1-thin">3</li>
                    <li class="button-pill-grey-1-thin">...</li>
                    <li class="button-pill-grey-1-thin">10</li>
                    <li class="button-pill-grey-1-thin"><i class="fa fa-angle-right"></i></li>
                </ul>
				
			</div><!-- container -->

		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>