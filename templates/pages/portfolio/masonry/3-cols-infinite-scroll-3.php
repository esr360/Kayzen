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

                <div class="row-flow row-waffle" id="portfolio-items">
                    
                    <?php 
						$span = 4;
                        $filterItems = 'filter-HTML-theme';
                        $img = 'wallpapers/tall/bg-7.jpg';
						include (ROOT.'/includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $filterItems = 'filter-photography filter-logo';
                        $img = 'wallpapers/bg-5.jpg';
						include (ROOT.'/includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $filterItems = 'filter-logo';
                        $img = 'wallpapers/tall/bg-7.jpg';
						include (ROOT.'/includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $filterItems = 'filter-HTML-theme filter-logo';
                        $img = 'wallpapers/tall/bg-7.jpg';
						include (ROOT.'/includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $filterItems = 'filter-photography';
                        $img = 'wallpapers/bg-3.jpg';
						include (ROOT.'/includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $filterItems = 'filter-HTML-theme filter-photography';
                        $img = 'wallpapers/tall/bg-7.jpg';
						include (ROOT.'/includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $filterItems = 'filter-photography';
                        $img = 'wallpapers/tall/bg-7.jpg';
						include (ROOT.'/includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $filterItems = 'filter-logo';
                        $img = 'wallpapers/bg-6.jpg';
						include (ROOT.'/includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $filterItems = 'filter-HTML-theme';
                        $img = 'wallpapers/bg-4.jpg';
						include (ROOT.'/includes/masonry-item.php'); 
					?>
                    
                </div>
            
            </div><!-- container -->
			
		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>