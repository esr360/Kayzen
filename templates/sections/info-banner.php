<?php function infoBanner($custom = array()) {

    $options = array_merge(array(
        'color'         => 'brand' // 'brand' / 'light'
    ), $custom); ?>
    
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
                        <h3 class="heading-uppercase-heavy-size-7 font-2">Next-Gen Theming</h3>
                    </header>
                    <p class="lede">Be part of the next generation of website theming and give Kayzen a try today - build whatever you want with endless possibilities.</p>
                    <div class="button_group">
                        <?php if ($options['color'] == 'light') { ?>
                            <a href="#" class="button-size-3">
                                View Demo
                            </a>
                            <a href="http://themeforest.net/user/skyux/portfolio" target="blank" class="button-primary-size-3">
                                Purchase Theme
                            </a>
                        <?php } else { ?>
                            <a href="#" target="blank" class="button-border-white-size-3">
                                View Demo
                            </a>
                            <a href="http://themeforest.net/user/skyux/portfolio" target="blank" class="button-white-size-3">
                                Purchase Theme
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php } ?>