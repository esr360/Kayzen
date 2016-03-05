<?php function appHeader($custom = array()) { ?>

    <?php $options = array_merge(array(
        'modifiers' => null
    ), $custom); ?>
    
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
                
                <!-- Flyout Nav Trigger -->
                <span class="button-icon-border-white flyout-trigger max-break-4" id="flyout-trigger">
                    <i class="fa fa-bars"></i>
                </span>
    
            </div><!-- Header Wrapper -->
            
        </div><!-- Container -->
    
    </header><!-- Header -->

<?php } ?>