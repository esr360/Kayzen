 <?php function googleMap($custom = array()) { ?>

    <?php $options = array_merge(array(
        'size' => null
    ), $custom); ?>
    
    <!-- Google Map -->
    <div class="google-map<?php if ($options['size'] == 'large') echo '-large' ?>" id="google-map"></div>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    
<?php } ?>