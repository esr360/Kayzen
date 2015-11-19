<?php 
	include ('../../app.php');
	// page config
	$title = 'Index';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
			$topBarModifiers = '-fixed';
			include (ROOT.'/modules/top-bar.php'); 
		?>
		
		<?php 
			$headerModifiers = '-bar-absolute-dark';
			include (ROOT.'/modules/header.php'); 
		?>

		<?php 
			$for = 'homepage'; 
			include (ROOT.'/modules/billboard.php'); 
		?>

		<?php include (ROOT.'/sections/key-features.php'); ?>

		<?php promoBanner(); ?>

		<?php include (ROOT.'/sections/showcase.php'); ?>
		
		<?php $style = 'brand'; include (ROOT.'/sections/info-banner.php'); ?>

		<?php include (ROOT.'/sections/key-features-2.php'); ?>

		<?php promoSection(); ?>

		<?php include (ROOT.'/sections/responsive.php'); ?>
		
		<?php promoBanner(); ?>

		<?php include (ROOT.'/sections/options.php'); ?>

		<?php $style = 'light'; include (ROOT.'/sections/info-banner.php'); ?>

		<?php include (ROOT.'/sections/layouts.php'); ?>
	
		<?php include (ROOT.'/sections/statistics.php'); ?>
		
		<?php include (ROOT.'/sections/shortcodes.php'); ?>

		<?php promoSection(array(
            'dark' => true
        )); ?>
		
		<?php include (ROOT.'/sections/more-features.php'); ?>
		
		<?php promoBanner(array(
            'minimal' => true
        )); ?>
		
		<?php include (ROOT.'/sections/contact-us.php'); ?>

		<?php include (ROOT.'/sections/twitter-feed.php'); ?>

		<?php include (ROOT.'/includes/google-map.php'); ?>

		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>