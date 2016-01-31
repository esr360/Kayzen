<?php function devAsset($custom = array()) { ?>

    <?php
    
        $options = array_merge(array(
            
            'path'  => '',
            'theme' => ''
            
        ), $custom);
        
        $extension = pathinfo($options['path'], PATHINFO_EXTENSION);
        $path = pathinfo($options['path'], PATHINFO_FILENAME);
        
        if ($options['theme']) {
            $themePath = '/themes/'.$options['theme'];
        } else {
            $themePath = '';
        }
        
    ?>
    
    <?php if ($extension === 'js') { ?>
    
        <?php if (env == 'dev') { ?>
            <script src="<?php echo appDir.$themePath ?>/scripts/<?php echo $path ?>.js"></script>
        <?php } else if (env == 'prod') { ?>
            <script src="<?php echo appDir.$themePath ?>/scripts/<?php echo $path ?>.min.js"></script>
        <?php } ?>
    
    <?php } else if ($extension === 'css') { ?>
    
        <?php if (env == 'dev') { ?>
            <link rel="stylesheet" href="<?php echo appDir.$themePath ?>/styles/<?php echo $path ?>.css">
        <?php } else if (env == 'prod') { ?>
            <link rel="stylesheet" href="<?php echo appDir.$themePath ?>/styles/<?php echo $path ?>.min.css">
        <?php } ?>
    
    <?php } ?>
    
<?php } ?>