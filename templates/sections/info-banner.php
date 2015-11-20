<?php function infoBanner($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            
            'color'         => 'brand', // 'brand' / 'light'
            'cta-modifiers' => null
            
        ), $custom);
        
    ?>
    
    <!-- Info Banner -->
    <?php if ($options['color'] == 'brand') { ?>
        <section 
            class="section-secondary-overlay" 
            style="background-image: url('<?php echo appDir ?>/images/billboard-1.jpg')"
        >
    <?php } else if ($options['color'] == 'light') { ?>
        <section 
            class="section-primary" 
            data-stellar-background-ratio="0.5"
            style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
        >
    <?php } ?>
        <div class="container">
            <div class="row text-center">
                <div class="span-8">
                    <header class="heading_group">
                        <h2 class="heading-uppercase-light-strikethrough-spaced-size-4"><span>Kayzen</span></h2>
                        <h3 class="heading-uppercase-heavy-size-7 font-2">Wordpress Theme</h3>
                    </header>
                    <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
                    <p class="button_group">
                        <?php if ($options['color'] == 'light') { ?>
                            <a href="#" target="blank" class="button-size-3<?php echo '-'.$options['cta-modifiers'] ?>">
                                View Demo
                            </a>
                            <a href="#" class="button-primary-size-3<?php echo '-'.$options['cta-modifiers'] ?>">
                                Purchase Theme
                            </a>
                        <?php } else { ?>
                            <a href="#" target="blank" class="button-border-white-size-3<?php echo '-'.$options['cta-modifiers'] ?>">
                                View Demo
                            </a>
                            <a href="#" class="button-white-size-3<?php echo '-'.$options['cta-modifiers'] ?>">
                                Purchase Theme
                            </a>
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
<?php } ?>