<?php function appHeader($custom = array()) { ?>

    <?php $options = array_merge(array(
        'module'         => 'app-header',
        'class'          => null,
        'modifiers'      => null,
        'nav-links'      => null,
        'logo-link'      => pageLink('homepages/homepage-1.php', 'pages', false)
    ), $custom); ?>
    
    <header 
        class="<?php 
            echo $options['module'];
            if ($options['modifiers']) echo '-'.$options['modifiers']; 
            if ($options['class']) echo ' '.$options['class'];
        ?>" 
        id="<?php echo $options['module'] ?>"
    >
                
        <div class="container">
            
            <div class="<?php echo $options['module'] ?>_wrapper">
    
                <!-- Logo -->
                <div class="logo">
                    <a href="<?php echo $options['logo-link'] ?>">
                        <img src="<?php echo appDir ?>/images/logo-white.png" alt="logo" />
                    </a>
                </div>
    
                <?php navigation(array(
                    'pages' => $options['nav-links']
                )) ?>
                
            </div><!-- Header Wrapper -->
            
        </div><!-- Container -->
    
    </header><!-- Header -->

<?php } ?>