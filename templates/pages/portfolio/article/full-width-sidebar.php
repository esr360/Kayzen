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
				
			<div class="container">
				
				<div class="row">
					
					<div class="span-8">
                        
                        <?php include (ROOT.'/includes/article-item.php'); ?>
                        
                        <hr class="hrule-stripes">
                        
                        <?php include (ROOT.'/includes/article-item.php'); ?>
                        
                        <hr class="hrule-stripes">
                        
                        <?php include (ROOT.'/includes/article-item.php'); ?>
                        
                        <hr class="hrule-stripes">
                        
                        <?php include (ROOT.'/includes/article-item.php'); ?>
                        
                        <hr class="hrule-stripes">
                        
                        <?php include (ROOT.'/includes/article-item.php'); ?>
                        
                        <ul class="pagination tabs_nav-pills" id="portfolio-categories">
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