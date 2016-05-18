<?php function head($theme = 'Kayzen') { ?>
    
    <head>
        
        <!-- Page Title -->
        <title>Kayzen - Multi-Purpose HTML5 Theme</title>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Multi-Purpose HTML5 Theme.">
        <meta name="viewport" content="width=device-width, initial-scale=0.9">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">

        <!-- Icons -->
        <link rel="apple-touch-icon" href="<?php echo appDir ?>/images/apple-icon-touch.png">
        <link rel="icon" href="<?php echo appDir ?>/images/favicon.png">
        <!--[if IE]><link rel="shortcut icon" href="<?php echo appDir ?>/images/favicon.ico"><![endif]-->

        <!-- Stylesheet -->
        <?php themeAsset($theme, 'app.css'); ?>
        
        <!-- pseudojQuery start -->
        <?php devAsset(null, 'pseudojQuery-start.js'); ?>
        
    </head>
    
<?php } ?>