<?php function earthSlider($custom = array()) { ?>

    <?php $options = array_merge(array(  
        'id' => 's-welcome',
        'title' => array(
            'modifiers' => 'heading-uppercase-light-brand-1-spaced-size-4',
            'highlight' => false
        ),
        'sub-title' => array(
            'modifiers' => 'heading-uppercase-heavy-size-7 font-2',
            'highlight' => false
        )
    ), $custom); ?>
    
    <section class="section earth-slider" id="<?php echo $options['id'] ?>">
        <header class="earth-slider_section heading_group-block text-center">
            <div class="container-small">
                <h4 class="<?php echo $options['title']['modifiers'] ?>">
                    <?php if ($options['title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        Nexus is Responsive
                    <?php if ($options['title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h4>
                <h2 class="<?php echo $options['sub-title']['modifiers'] ?>">
                    <?php if ($options['sub-title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        Built For All Experiences
                    <?php if ($options['sub-title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <div class="object">
                    <i style="color:#37a5e2" data-tooltip="MS Edge" class="tooltip button-icon-plain fa fa-edge fa-4x"></i>
                    <i style="color:#db6c19" data-tooltip="Firefox" class="tooltip button-icon-plain fa fa-firefox fa-4x"></i>
                    <i style="color:#4db849" data-tooltip="Chrome" class="tooltip button-icon-plain fa fa-chrome fa-4x"></i>
                    <i style="color:#e01326" data-tooltip="Opera" class="tooltip button-icon-plain fa fa-opera fa-4x"></i>
                    <i style="color:#00397f" data-tooltip="Safari" class="tooltip button-icon-plain fa fa-safari fa-4x"></i>
                </div>
            </div>
        </header>
        <header class="earth-slider_section heading_group-block text-center">
            <div class="container-small">
                <h4 class="<?php echo $options['title']['modifiers'] ?>">
                    <?php if ($options['title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        This is Kayzen
                    <?php if ($options['title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h4>
                <h2 class="<?php echo $options['sub-title']['modifiers'] ?>">
                    <?php if ($options['sub-title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        The New Experience
                    <?php if ($options['sub-title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Welcome to Kayzen; the next generation of website & app theming. Kayzen is more than just a theme, it's a theme framework, custom built from the ground up to help make theming great again.</p>
            </div>
        </header>
        <header class="earth-slider_section heading_group-block text-center">
            <div class="container-small">
                <h2 class="heading-size-7-light font-2">
                    <?php if ($options['sub-title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        Our <span class="heading-brand-1">Features</span> Are <span class="heading-heavy">World Class</span> <i class="fa fa-trophy heading-brand-1"></i>
                    <?php if ($options['sub-title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Welcome to Kayzen; the next generation of website & app theming. Kayzen is more than just a theme, it's a theme framework, custom built from the ground up to help make theming great again.</p>
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
        <nav class="slide-nav min-break-3">
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