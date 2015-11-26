<head>
	
	<!-- Page Title -->
    <title>Kayzen - Multi-Purpose HTML5 Theme</title>
	
	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Multi-Purpose HTML5 Theme.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <!-- Icons -->
    <link rel="apple-touch-icon" href="<?php echo appDir ?>/images/apple-icon-touch.png">
    <link rel="icon" href="<?php echo appDir ?>/images/favicon.png">
    <!--[if IE]><link rel="shortcut icon" href="<?php echo appDir ?>/images/favicon.ico"><![endif]-->

    <!-- Stylesheet -->
    <?php if (env == 'dev') { ?>
        <link rel="stylesheet" href="<?php echo appDir ?>/build/styles/app.css">
    <?php } else if (env == 'prod') { ?>
        <link rel="stylesheet" href="<?php echo appDir ?>/build/styles/app.min.css">
    <?php } ?>
	
    <!-- sudojQuery start -->
    <?php if (env == 'dev') { ?>
        <script src="<?php echo appDir ?>/build/scripts/sudojQuery-start.js"></script>
    <?php } else if (env == 'prod') { ?>
        <script src="<?php echo appDir ?>/build/scripts/sudojQuery-start.min.js"></script>
    <?php } ?>
	
</head>