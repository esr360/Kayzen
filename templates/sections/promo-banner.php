<?php function promoBanner($custom = array()) { ?>

    <?php $options = array_merge(array(
        'minimal'         => false,
        'small-container' => false,
        'cta-modifiers'   => null
    ), $custom); ?>
    
    <!-- Promo Banner -->
    <?php if ($options['minimal']) { ?>
        <section class="section-secondary promo-banner text-center">
            <a href="#" target="blank" class="button-white-border-size-4<?php echo '-'.$options['cta-modifiers'] ?>">
                Get Kayzen Now
            </a>
        </section>
    <?php } else { ?>
        <section class="section-secondary promo-banner">	
            <?php if ($options['small-container']) { ?>
                <div class="container-small">
            <?php } else { ?>
                <div class="container">
            <?php } ?>
                <div class="row">
                    <div class="span-7 va-middle">
                        <header class="heading_group">
                            <h4 class="heading-size-5">
                                Start your <b class="font-2">new project</b> with a <em>fresh</em> approach...
                            </h4>
                            <p class="heading">leave your visitors with an experience to remember and <a href="#" target="blank">Purchase Nexus</a> now.</p>
                        </header>
                    </div>
                    <div class="span-5 va-middle text-right button_group">
                        <a href="#" target="blank" class="button-white-border-size-3<?php echo '-'.$options['cta-modifiers'] ?>">Purchase Theme</a>
                        <span class="text-sep">or</span>
                        <a href="#about">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

<?php } ?>