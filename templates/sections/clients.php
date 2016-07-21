<?php function clients($custom = array()) { ?>

    <?php $options = array_merge(array(
        'title' => array(
            'content' => 'Our Clients',
            'modifiers' => 'heading-uppercase-light-brand-1-size-4',
            'highlight' => false
        ),
        'sub-title' => array(
            'content' => 'Who We Work With',
            'modifiers' => 'heading-heavy-size-6 font-2',
            'highlight' => false
        )
    ), $custom); ?>
    
    <section 
        class="section-secondary-overlay-alt-mini"
        style="background-image: url('<?php echo appDir ?>/images/billboard-1.jpg')"
    >
    
        <div class="container">
            <div class="row row-waffle-large fixed-table">
                
                <div class="span-4 va-middle center-mobile">
                    <header class="heading_group">
                        <h4 class="<?php echo $options['title']['modifiers'] ?>">
                            <?php if ($options['title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                                <?php echo $options['title']['content'] ?>
                            <?php if ($options['title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                        </h4>
                        <h2 class="<?php echo $options['sub-title']['modifiers'] ?>">
                            <?php if ($options['sub-title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                                <?php echo $options['sub-title']['content'] ?>
                            <?php if ($options['sub-title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                        </h2>
                    </header>
                </div>
                <div class="span-8 va-middle">
                    <div id="clients-slider" class="carousel-thumbnails owl-carousel">
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-1.png" alt="">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-2.png" alt="">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-3.png" alt="">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-4.png" alt="">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-5.png" alt="">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-6.png" alt="">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-7.png" alt="">
                        </a>
                        <a class="well-dark-thumb" href="#">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-8.png" alt="">
                        </a>
                    </div>
                            
                    <script id="clientsScripts">
                        
                        $(document).ready(pageScripts);
                            
                        function pageScripts() {
                            
                            var clientsCarousel = $("#clients-slider");
                            
                            clientsCarousel.owlCarousel({
                                items: 2,
                                center: true,
                                loop: true,
                                margin: 30,
                                responsive: {
                                    540: {
                                        items:3
                                    }
                                }
                            })
                            
                        }
                    </script>
                </div>
                
            </div>
        </div>
    
    </section>

<?php } ?>