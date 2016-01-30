<?php function devAsset($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            
            'path'  => ''
            
        ), $custom);
        
        $extension = pathinfo($options['path'], PATHINFO_EXTENSION);
        $path = pathinfo($options['path'], PATHINFO_FILENAME);
        
    ?>
    
    <?php if ($extension === 'js') { ?>
    
        <?php if (env == 'dev') { ?>
            <script src="<?php echo appDir ?>/scripts/<?php echo $path ?>.js"></script>
        <?php } else if (env == 'prod') { ?>
            <script src="<?php echo appDir ?>/scripts/<?php echo $path ?>.min.js"></script>
        <?php } ?>
    
    <?php } else if ($extension === 'css') { ?>
    
        <?php if (env == 'dev') { ?>
            <link rel="stylesheet" href="<?php echo appDir ?>/styles/<?php echo $path ?>.css">
        <?php } else if (env == 'prod') { ?>
            <link rel="stylesheet" href="<?php echo appDir ?>/styles/<?php echo $path ?>.min.css">
        <?php } ?>
    
    <?php } ?>
    
<?php } ?>