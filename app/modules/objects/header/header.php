<!-- Top Bar -->
<?php include ('../modules/objects/top-bar/top-bar.php'); ?>
	
<!-- Header -->
<?php if ($for == 'index') { ?>
<header class="app-header-bar-side-left" id="app-header">
<?php } else { ?>
<header class="app-header-bar-dark-sticky" id="app-header">
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