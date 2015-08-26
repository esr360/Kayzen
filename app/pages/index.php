<?php 
	include ('../app.php');
	// start the ouput buffer
	ob_start(); 
	// page config
	$title = 'Index';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php $for = 'index'; include ('../modules/objects/header/header.php'); ?>

		<?php $type = 'fullscreen'; include ('../modules/objects/billboard/billboard.php'); ?>

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

		<!-- Google Map -->
		<div class="google-map" id="map"></div>

		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>

<?php
$cachefile = "../../index.html";
$fp = fopen($cachefile, 'w'); 
// save the contents of output buffer to the file
fwrite($fp, ob_get_contents()); 
// close the file
fclose($fp); 
// Send the output to the browser
ob_end_flush(); 
?>