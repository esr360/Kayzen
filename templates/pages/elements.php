<?php 
	include ('../app.php');
	// page config
	$title = 'UI Elements';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php include ('../modules/objects/header/header.php'); ?>
	
		<?php include ('../modules/objects/billboard/billboard.php'); ?>
		
		<section class="section">
			
			<?php include ('../sections/elements.php'); ?>
			
		</section>

		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>