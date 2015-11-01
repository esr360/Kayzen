<?php 
	include ('../app.php');
	// page config
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
			$topBarModifiers = '';
			include ('../modules/top-bar.php'); 
		?>

		<?php 
			$headerModifiers = '-bar-absolute-dark-sticky'; 
			include ('../modules/header.php'); 
		?>

		<?php include ('../modules/billboard.php'); ?>
		
		<section class="section-primary relative">
				
            <div class="container">

                <div class="row-flow row-waffle js-masonry">
                    
                    <?php 
						$span = 4;
                        $img = 'wallpapers/tall/bg-7.jpg';
						include ('../includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $img = 'wallpapers/bg-5.jpg';
						include ('../includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $img = 'wallpapers/tall/bg-7.jpg';
						include ('../includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $img = 'wallpapers/tall/bg-7.jpg';
						include ('../includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $img = 'wallpapers/bg-3.jpg';
						include ('../includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $img = 'wallpapers/tall/bg-7.jpg';
						include ('../includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $img = 'wallpapers/tall/bg-7.jpg';
						include ('../includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $img = 'wallpapers/bg-6.jpg';
						include ('../includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $img = 'wallpapers/bg-4.jpg';
						include ('../includes/masonry-item.php'); 
					?>
                    
                    <?php 
						$span = 4;
                        $img = 'wallpapers/bg-4.jpg';
                        $hidden = true;
						include ('../includes/masonry-item.php'); 
					?>
                    
                </div>
            
            </div><!-- container -->
			
		</section>
		
		<?php include ('../sections/promo-banner.php'); ?>
		
		<?php include ('../modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>
    
    <?php if (env == 'dev') { ?>
        <script src="<?php echo appDir ?>/build/scripts/masonry.pkgd.js"></script>
    <?php } else if (env == 'prod') { ?>
        <script src="<?php echo appDir ?>/build/scripts/masonry.pkgd.min.js"></script>
    <?php } ?>

</body>