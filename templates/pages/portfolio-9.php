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

                <div class="row-flow row-waffle">
                    
                    <div class="widget-card span-4">
                        <div class="thumbnail">
                            <div class="thumbnail_mask">
                                <div class="thumbnail_controls icon_group-small">
                                    <a href="#" class="icon-border-circle-size-3">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#" class="icon-border-circle-size-3">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="<?php echo appDir ?>/images/wallpapers/tall/bg-7.png">
                        </div>
                        <div class="widget_content text-center">
                            <header class="heading_group">
                                <h3 class="heading-heavy-size-3">Leather Jackets</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                            </header>
                        </div>
                    </div>
                    
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