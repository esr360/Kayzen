<?php 
	include ('../app.php');
	// page config
	$title = 'UI Elements';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php include (ROOT.'/modules/objects/header/header.php'); ?>
	
		<?php include (ROOT.'/modules/objects/billboard/billboard.php'); ?>
		
		<section class="section">
			
			<?php include (ROOT.'/sections/elements.php'); ?>
			
		</section>

		<?php include (ROOT.'/modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>