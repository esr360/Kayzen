 <?php function googleMap($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            
            'size' => null
            
        ), $custom);
        
    ?>
    
    <!-- Google Map -->
    <div class="google-map<?php if ($options['size'] == 'large') echo ' map-large' ?>" id="map"></div>
    
    <script src="<?php echo appDir ?>/modules/objects/google-map/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    
<?php } ?>