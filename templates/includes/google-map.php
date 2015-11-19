 <?php function googleMap($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            
            //'option' => 'VALUE'
            
        ), $custom);
        
    ?>
    
    <!-- Google Map -->
    <div class="google-map" id="map"></div>
    
    <script src="<?php echo appDir ?>/modules/objects/google-map/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    
<?php } ?>