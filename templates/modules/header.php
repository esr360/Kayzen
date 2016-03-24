<?php function appHeader($custom = array()) { ?>

    <?php $options = array_merge(array(
        'modifiers'      => null,
        'nav-links'      => null,
        'flyout-trigger' => true
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
    
                <?php navigation(array(
                    'pages' => $options['nav-links']
                )) ?>
                
                <?php if ($options['flyout-trigger']) { ?>
                    <!-- Flyout Nav Trigger -->
                    <span class="button-icon-border-white flyout-trigger max-break-4" id="flyout-trigger">
                        <i class="fa fa-bars"></i>
                    </span>
                <?php } ?>
                
            </div><!-- Header Wrapper -->
            
        </div><!-- Container -->
    
    </header><!-- Header -->

<?php } ?>