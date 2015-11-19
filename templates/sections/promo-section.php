<?php function promoSection($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            
            'dark'          => false,
            'cta-modifiers' => null
            
        ), $custom);
        
    ?>
        
    <?php if ($options['dark']) { ?>
        <section class="section-secondary-overlay-alt">
    <?php } else  { ?>
        <section 
            class="section-primary"
            data-stellar-background-ratio="0.5"
            style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
        >
    <?php } ?>
        <div class="container">
            <div class="row">
                <div class="span-6 info-video">
                    <div class="auto-resizable-iframe">
                        <div>
                            <iframe allowfullscreen="" src="http://www.youtube.com/embed/Q3oItpVa9fs?theme=light"></iframe>
                        </div>
                    </div>
                </div>
                <div class="span-6">
                    <header class="heading_group">
                        <h2 class="heading-heavy-size-5-uppercase font-2">Kayzen is the Best</h2>
                        <h3 class="heading-light-brand-1-light-size-4">A Modern Template For Any Project</h3>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
                    <ul class="list-arrow min-break-2">
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>Donec malesuada metus non massa sodales auctor</li>
                        <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                        <li>Etiam dapibus, nulla placerat</li>
                    </ul>
                    <p class="button_group">
                        <?php if ($options['dark']) { ?>
                            <a href="#" target="blank" class="button-border-white<?php echo '-'.$options['cta-modifiers'] ?>">
                                View Demo
                            </a>
                        <?php } else  { ?>
                            <a href="#" target="blank" class="button<?php echo '-'.$options['cta-modifiers'] ?>">
                                View Demo
                            </a>
                        <?php } ?>
                        <a href="#" class="button-primary<?php echo '-'.$options['cta-modifiers'] ?>">
                            Purchase Theme
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php } ?>