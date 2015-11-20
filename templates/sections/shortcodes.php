<?php function shortcodes($custom = array()) { ?>

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
 
    <!-- Shortcodes -->
    <section class="section-dot-map" id="shortcodes">
    
        <div class="container hide-overflow">
    
            <!-- Shortcodes Header -->
            <header class="heading_group-block has-icon text-center">
                <div class="container-small">
                    <h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Shortcodes</span></h4>
                    <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Reusable Elements</span></h2>
                    <div class="heading_icon">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <p class="lede">Thanks to the flexibility of Kayzen's options, there is no limit to the layouts you can achieve. Below is just a small sample of common styles and layouts that can easily be achieved with Kayzen.</p>
                </div>
            </header>
            
            <!-- Shortcodes Graphics -->
            <div class="carousel-scale-2 owl-carousel" id="shortcodes-carousel">
                <div class="desktop-graphic-scroll">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt=""/ >
                    <div style="background-image: url('<?php echo appDir ?>/images/stock-1.jpg')"></div>
                </div>
                <div class="desktop-graphic-scroll">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt=""/ >
                    <div style="background-image: url('<?php echo appDir ?>/images/stock-2.jpg')"></div>
                </div>
                <div class="desktop-graphic-scroll">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt=""/ >
                    <div style="background-image: url('<?php echo appDir ?>/images/stock-3.jpg')"></div>
                </div>
                <div class="desktop-graphic-scroll">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt=""/ >
                    <div style="background-image: url('<?php echo appDir ?>/images/stock-4.jpg')"></div>
                </div>
            </div>
            
        </div><!-- Container -->
    
        <!-- Shortcodes Slide Arrows -->
        <nav class="slide-nav">
            <button class="slide-prev icon-border-size-4-grey-3"><i class="fa fa-angle-left"></i></button>
            <button class="slide-next icon-border-size-4-grey-3"><i class="fa fa-angle-right"></i></button>
        </nav>
        
        <!-- Shortcodes Carousel -->
        <script>
            $(document).ready(function() {
                
                var shortcodesCarousel = $("#shortcodes-carousel");
                
                shortcodesCarousel.owlCarousel({
                    items: 3,
                    center: true,
                    loop: true
                })
                .on('click', '.owl-item', function(e) {
                    var carousel = shortcodesCarousel.data('owl.carousel');
                    e.preventDefault();
                    carousel.to(carousel.relative($(this).index()));
                });
                
                $("#shortcodes .slide-next").click(function() {
                    shortcodesCarousel.trigger('next.owl.carousel');
                });
                $("#shortcodes .slide-prev").click(function() {
                    shortcodesCarousel.trigger('prev.owl.carousel');
                });
                
            }); // document.ready
        </script>
    
    </section><!-- Shortcodes -->
    
<?php } ?>