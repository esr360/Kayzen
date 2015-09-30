<!-- Top Bar -->
<?php include ('../modules/objects/top-bar/top-bar.php'); ?>
	
<!-- Header -->
<?php if ($for == 'homepage') { ?>
<header class="app-header-bar-absolute-dark-sticky" id="app-header">
<?php } else { ?>
<header class="app-header-bar-absolute-dark-sticky" id="app-header">
<?php } ?>
			
	<div class="container">
		
		<div class="app-header_wrapper">

			<!-- Logo -->
			<div class="logo">
				<a href="/"><img src="<?php echo appDir ?>/images/logo-white.png" alt="logo"/ ></a>
			</div>

			<?php include ('../modules/objects/navigation/navigation.php'); ?>

		</div><!-- Header Wrapper -->
		
	</div><!-- Container -->

</header><!-- Header -->