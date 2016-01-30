<?php function appHeader($custom = array()) { ?>

    <?php $options = array_merge(array(
        'modifiers' => null
    ), $custom); ?>

    <!-- Flyout Nav Trigger -->
    <span class="button-icon-primary flyout-trigger" id="flyout-trigger">
        <i class="fa fa-bars"></i>
    </span>
    
    <header 
        class="app-header<?php echo '-'.$options['modifiers'] ?>" 
        id="app-header"
    >
                
        <div class="container">
            
            <div class="app-header_wrapper">
    
                <!-- Logo -->
                <div class="logo">
                    <a href="/"><img src="<?php echo appDir ?>/images/logo-white.png" alt="logo" /></a>
                </div>
    
                <?php include (ROOT.'/modules/navigation.php'); ?>
    
            </div><!-- Header Wrapper -->
            
        </div><!-- Container -->
    
    </header><!-- Header -->

<?php } ?>