<?php function clients($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            
            'title'     => 'Our Clients',
            'sub-title' => 'Who We Work With'
            
        ), $custom);
        
    ?>
    
    <section 
        class="section-secondary-overlay-alt-mini"
        style="background-image: url('<?php echo appDir ?>/images/billboard-1.jpg')"
    >
    
        <div class="container">
            <div class="row">
                
                <div class="span-4 va-middle">
                    <header class="heading_group">
                        <h4 class="heading-uppercase-light-brand-1-size-4"><?php echo $options['title'] ?></h4>
                        <h2 class="heading-heavy-size-6 font-2"><span><?php echo $options['sub-title'] ?></span></h2>
                    </header>
                </div>
                <div class="span-8 va-middle">
                    <div id="clients-slider" class="carousel-thumbnails owl-carousel">
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-1.png">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-2.png">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-3.png">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-4.png">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-5.png">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-6.png">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-7.png">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-8.png">
                        </a>
                    </div>
                    <script>
                        $(document).ready(function() {
                            
                            var clientsCarousel = $("#clients-slider");
                            
                            clientsCarousel.owlCarousel({
                                items: 3,
                                center: true,
                                loop: true,
                                margin: 30
                            })
                            
                        });
                    </script>
                </div>
                
            </div>
        </div>
    
    </section>

<?php } ?>