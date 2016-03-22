<?php function skills($custom = array()) { ?>

    <?php $options = array_merge(array(
        'cta-modifiers'   => null
    ), $custom); ?>
    
    <section 
        class="section-secondary-overlay-alt" 
        data-stellar-background-ratio="0.8"
        style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
    >
    
        <div class="container">
            <div class="row">
                <div class="span-6">
                    <header class="heading_group">
                        <h2 class="heading-heavy-size-5-uppercase font-2">Kayzen is the Best</h2>
                        <h3 class="heading-light-brand-1-size-4">A Modern Template For Any Project</h3>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
                    <ul class="list-arrow min-break-2">
                        <li>Lorem ipsum dolor sit amet consectetur</li>
                        <li>Donec malesuada metus non massa sodales auctor</li>
                        <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                    </ul>
                    <div class="button_group">
                        <a href="#" class="button-primary<?php echo '-'.$options['cta-modifiers'] ?>">View Demo</a>
                        <a href="http://themeforest.net/user/skyux/portfolio" target="blank" class="button-border-white<?php echo '-'.$options['cta-modifiers'] ?>">Purchase Theme</a>
                    </div>
                </div>
                <hr class="hrule-stripes-large max-break-3" />
                <div class="span-6 progress-bar_group">
                    <h5 class="heading">HTML5</h5>
                    <progress class="progress-bar" max="100" data-progress="75%">
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                    </progress>
                    <h5 class="heading">CSS3/SASS</h5>
                    <progress class="progress-bar" max="100" data-progress="100%">
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                    </progress>
                    <h5 class="heading">JavaScript/jQuery</h5>
                    <progress class="progress-bar" max="100" data-progress="80%">
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                    </progress>
                    <h5 class="heading">PHP/Wordpress</h5>
                    <progress class="progress-bar" max="100" data-progress="65%">
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                    </progress>
                </div>
            </div>
        </div>
    </section>
    
<?php } ?>