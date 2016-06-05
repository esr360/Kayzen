<?php function shortcodes($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option' => 'VALUE'
    ), $custom); ?>
 
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
                    <p class="lede">Kayzen comes with all the UI components you need to build an awesome, interactive web app. Thanks to the modular structure of Kayzen, you can easily omit any components you don't need.</p>
                </div>
            </header>
            
            <!-- Shortcodes Graphics -->
            <div class="carousel-scale-2 owl-carousel" id="shortcodes-carousel">
                <a href="<?php pageLink('modules/elements/tabs.php') ?>" class="desktop-graphic">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                    <div class="desktop-graphic_image" style="background-image: url('<?php echo appDir ?>/images/shortcodes-1.jpg')"></div>
                </a>
                <a href="<?php pageLink('modules/elements/tooltips.php') ?>" class="desktop-graphic">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                    <div class="desktop-graphic_image" style="background-image: url('<?php echo appDir ?>/images/shortcodes-2.jpg')"></div>
                </a>
                <a href="<?php pageLink('modules/elements/alert-bars.php') ?>" class="desktop-graphic">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                    <div class="desktop-graphic_image" style="background-image: url('<?php echo appDir ?>/images/shortcodes-3.jpg')"></div>
                </a>
                <a href="<?php pageLink('modules/elements/accordions.php') ?>" class="desktop-graphic">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                    <div class="desktop-graphic_image" style="background-image: url('<?php echo appDir ?>/images/shortcodes-4.jpg')"></div>
                </a>
                <a href="<?php pageLink('modules/elements/modals.php') ?>" class="desktop-graphic">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                    <div class="desktop-graphic_image" style="background-image: url('<?php echo appDir ?>/images/shortcodes-5.jpg')"></div>
                </a>
                <a href="<?php pageLink('modules/elements/buttons.php') ?>" class="desktop-graphic">
                    <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                    <div class="desktop-graphic_image" style="background-image: url('<?php echo appDir ?>/images/shortcodes-6.jpg')"></div>
                </a>
            </div>
            
        </div><!-- Container -->
    
        <!-- Shortcodes Slide Arrows -->
        <nav class="slide-nav full-nav">
            <button class="slide-prev button-icon-border-size-3-grey-3"><i class="fa fa-angle-left"></i></button>
            <button class="slide-next button-icon-border-size-3-grey-3"><i class="fa fa-angle-right"></i></button>
        </nav>
        
        <!-- Shortcodes Carousel -->
            
        <script id="pageScripts">
            
            $(document).ready(pageScripts);
                
            function pageScripts() {
                
                var shortcodesCarousel = $('#shortcodes-carousel');
                
                shortcodesCarousel.owlCarousel({
                    items: 3,
                    center: true,
                    loop: true
                }).on('click', '.owl-item', function(e) {
                    var carousel = shortcodesCarousel.data('owl.carousel');
                    if (!$(this).hasClass('center')) {
                        e.preventDefault();
                        carousel.to(carousel.relative($(this).index()));
                    }
                });
                
                $('#shortcodes .slide-next').click(function() {
                    shortcodesCarousel.trigger('next.owl.carousel');
                });
                $('#shortcodes .slide-prev').click(function() {
                    shortcodesCarousel.trigger('prev.owl.carousel');
                });
                
            }
        </script>
    
    </section><!-- Shortcodes -->
    
<?php } ?>