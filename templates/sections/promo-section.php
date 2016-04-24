<?php function promoSection($custom = array()) { ?>

    <?php $options = array_merge(array(  
        'dark'          => false,
        'brand'         => false,
        'cta-modifiers' => null,
        'title' => array(
            'content' => 'Kayzen is the Best',
            'modifiers' => 'heading-heavy-size-5-uppercase font-2',
            'highlight' => false
        ),
        'sub-title' => array(
            'content' => 'A Modern Template For Any Project',
            'modifiers' => 'heading-light-brand-1-size-4',
            'highlight' => false
        )
    ), $custom); ?>
        
    <?php if ($options['dark']) { ?>
        <section class="section-secondary-overlay-dark" style="background-image: url('<?php echo appDir ?>/images/billboard-1.jpg')">
    <?php } else if ($options['brand']) { ?>
        <section class="section-secondary-overlay-alt">
    <?php } else  { ?>
        <section 
            class="section-primary"
            data-stellar-background-ratio="0.75"
            style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
        >
    <?php } ?>
        <div class="container">
            <div class="row">
                <div class="span-6 info-video va-middle">
                    <div class="auto-resizable-iframe">
                        <div>
                            <iframe src="https://player.vimeo.com/video/87701971" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <hr class="hrule-stripes-large max-break-3" />
                <div class="span-6 va-middle">
                    <header class="heading_group">
                        <h2 class="<?php echo $options['title']['modifiers'] ?>">
                            <?php if ($options['title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                                <?php echo $options['title']['content'] ?>
                            <?php if ($options['title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                        </h2>
                        <h3 class="<?php echo $options['sub-title']['modifiers'] ?>">
                            <?php if ($options['sub-title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                                <?php echo $options['sub-title']['content'] ?>
                            <?php if ($options['sub-title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                        </h3>
                    </header>
                    <p>Kayzen has been robustly built using the latest tools & technologies, and will work on any common browser or device giving your users the best experience possible.</p>
                    <ul class="list-arrow min-break-2">
                        <li>100% validated HTML5 code</li>
                        <li>Modular Sass architecture</li>
                        <li>Completely responsive & mobile optimized</li>
                        <li>Custom <a href="https://github.com/esr360/Kayzen-GS" target="blank">Kayzen GS</a> grid system</li>
                    </ul>
                    <div class="button_group">
                        <?php if ($options['dark']) { ?>
                            <a href="#" class="button-border-white<?php echo '-'.$options['cta-modifiers'] ?>">
                                View Demo
                            </a>
                        <?php } else  { ?>
                            <a href="#" class="button<?php echo '-'.$options['cta-modifiers'] ?>">
                                View Demo
                            </a>
                        <?php } ?>
                        <a href="http://themeforest.net/user/skyux/portfolio" target="blank" class="button-primary<?php echo '-'.$options['cta-modifiers'] ?>">
                            Purchase Theme
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>