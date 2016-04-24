<?php function promoBanner($custom = array()) { ?>

    <?php $options = array_merge(array(
        'minimal'         => false,
        'small-container' => false,
        'cta-modifiers'   => null
    ), $custom); ?>
    
    <!-- Promo Banner -->
    <?php if ($options['minimal']) { ?>
        <section class="section-secondary promo-banner text-center">
            <a href="http://themeforest.net/user/skyux/portfolio" target="blank" class="button-white-border-size-4<?php echo '-'.$options['cta-modifiers'] ?>">
                Get Kayzen Now
            </a>
        </section>
    <?php } else { ?>
        <section class="section-secondary promo-banner center-mobile">	
            <?php if ($options['small-container']) { ?>
                <div class="container-small">
            <?php } else { ?>
                <div class="container">
            <?php } ?>
                <div class="row-block row-ladder">
                    <div class="span va-middle">
                        <header class="heading_group">
                            <h4 class="heading-size-5">
                                Start your <b class="font-2">new project</b> with a <em>fresh</em> approach...
                            </h4>
                            <p class="heading">leave your visitors with an experience to remember and <a href="http://themeforest.net/user/skyux/portfolio" target="blank">Purchase Kayzen</a> now.</p>
                        </header>
                    </div>
                    <div class="span va-middle text-right-desktop button_group">
                        <a href="http://themeforest.net/user/skyux/portfolio" target="blank" class="button-white-border-size-3<?php echo '-'.$options['cta-modifiers'] ?>">Purchase Theme</a>
                        <span class="text-sep">or</span>
                        <a href="<?php pageLink('further/about-us.php') ?>">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

<?php } ?>