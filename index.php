<!DOCTYPE html>
<html class="no-js">

<?php include ('app/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php include ('app/modules/objects/header/header.php'); ?>

        <!-- Main Content -->
        <main id="main">

			<?php $for = 'index'; include ('app/modules/objects/billboard/billboard.php'); ?>

			<?php include ('app/sections/key-features.php'); ?>

			<?php include ('app/sections/promo-banner.php'); ?>

			<?php include ('app/sections/showcase.php'); ?>
			
			<?php $style = 'brand'; include ('app/sections/info-banner.php'); ?>

			<?php include ('app/sections/key-features-2.php'); ?>

			<?php $style = 'light'; include ('app/sections/promo-section.php'); ?>

			<?php include ('app/sections/responsive.php'); ?>
			
			<?php include ('app/sections/promo-banner.php'); ?>

			<?php include ('app/sections/options.php'); ?>

			<?php $style = 'light'; include ('app/sections/info-banner.php'); ?>

			<?php include ('app/sections/layouts.php'); ?>
		
			<?php include ('app/sections/statistics.php'); ?>
			
			<?php include ('app/sections/shortcodes.php'); ?>

			<?php $style = 'dark'; include ('app/sections/promo-section.php'); ?>
			
			<?php include ('app/sections/more-features.php'); ?>
			
			<?php $style = 'minimal'; include ('app/sections/promo-banner.php'); ?>
			
			<?php include ('app/sections/contact-us.php'); ?>

        </main><!-- Main Content -->

		<!-- Google Map -->
		<div class="google-map" id="map"></div>

		<?php include ('app/modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('app/includes/ui-enhancements.php'); ?>

    <?php include ('app/includes/scripts.php'); ?>

</body>
</html>