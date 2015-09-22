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

<!-- Twitter Feed -->
<div class="twitter-feed">
	<a class="loading-tweets" href="http://twitter.com/esr360" target="blank">
		<i class="fa fa-twitter"></i>
	</a>
	<div class="container" id="twitter-feed">
		<div class="tweets-nav icon_group-small">
			<div class="tweet-prev icon-border">
				<i class="fa fa-angle-left"></i>
			</div>
			<div class="tweet-next icon-border">
				<i class="fa fa-angle-right"></i>
			</div>
		</div>
	</div>
</div>

		<?php include ('../modules/objects/google-map/google-map.php'); ?>

		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>