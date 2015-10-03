<?php 
	include ('../app.php');
	// page config
	$title = 'Index';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
			include ('../modules/objects/header/header.php'); 
		?>

		<?php 
			$type = 'fullscreen'; 
			include ('../modules/objects/billboard/billboard.php'); 
		?>

		<?php include ('../sections/key-features.php'); ?>

		<?php include ('../sections/promo-banner.php'); ?>

		<?php include ('../sections/showcase.php'); ?>
		
		<?php $style = 'brand'; include ('../sections/info-banner.php'); ?>

		<?php include ('../sections/key-features-2.php'); ?>

		<?php $style = 'light'; include ('../sections/promo-section.php'); ?>

		<?php include ('../sections/responsive.php'); ?>
		
		<?php include ('../sections/promo-banner.php'); ?>

		<?php include ('../sections/options.php'); ?>

		<?php $style = 'light'; include ('../sections/info-banner.php'); ?>

		<?php include ('../sections/layouts.php'); ?>
	
		<?php include ('../sections/statistics.php'); ?>
		
		<?php include ('../sections/shortcodes.php'); ?>

		<?php $style = 'dark'; include ('../sections/promo-section.php'); ?>
		
		<?php include ('../sections/more-features.php'); ?>
		
		<?php $style = 'minimal'; include ('../sections/promo-banner.php'); ?>
		
		<?php include ('../sections/contact-us.php'); ?>

		<?php include ('../sections/twitter-feed.php'); ?>

		<?php include ('../modules/objects/google-map/google-map.php'); ?>

		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>