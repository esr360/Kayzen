<?php function earthSlider($custom = array()) { ?>

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
    
    <section class="section earth-slider" id="s-welcome">
        <header class="earth-slider_section heading_group-block text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>This is Kayzen 1</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>The New Experience</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
        <header class="earth-slider_section heading_group-block text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>This is Kayzen 2</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>The Old Experience</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
        <header class="earth-slider_section heading_group-block text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>This is Kayzen 3</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>The Old Experience</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
        <div class="earth-wrapper">
            <div class="earth">               
                <img class="globe" src="<?php echo appDir ?>/images/earth.png" alt="" />
                <div class="pins">
                    <div class="pin-wrapper">
                        <div class='pin'></div>
                    </div>
                    <div class="pin-wrapper">
                        <div class='pin'></div>
                    </div>
                    <div class="pin-wrapper">
                        <div class='pin'></div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="slide-nav">
            <button class="slide-prev button-icon-border-size-3"><i class="fa fa-angle-left"></i></button>
            <button class="slide-next button-icon-border-size-3"><i class="fa fa-angle-right"></i></button>
        </nav>
    </section>
    
    <script>
        $(document).ready(function() {
            $('.earth-slider').KayzenEarthSlider();
        });
    </script>

<?php } ?>