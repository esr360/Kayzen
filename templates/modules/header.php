<?php function appHeader($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            
            'modifiers' => null
            
        ), $custom);
        
    ?>
    
    <header 
        class="app-header<?php echo '-'.$options['modifiers'] ?>" 
        id="app-header"
    >
                
        <div class="container">
            
            <div class="app-header_wrapper">
    
                <!-- Logo -->
                <div class="logo">
                    <a href="/"><img src="<?php echo appDir ?>/images/logo-white.png" alt="logo"/ ></a>
                </div>
    
                <?php include ('navigation.php'); ?>
    
            </div><!-- Header Wrapper -->
            
        </div><!-- Container -->
    
    </header><!-- Header -->

<?php } ?>