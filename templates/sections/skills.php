<?php function skills($custom = array()) {

    $options = array_merge(array(
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
    
    <section 
        class="section-secondary-overlay-alt" 
        data-stellar-background-ratio="0.8"
        style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
    >
    
        <div class="container">
            <div class="row">
                <div class="span-6">
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
                    </ul>
                    <div class="button_group">
                        <a href="#" class="button-primary">View Demo</a>
                        <a href="http://themeforest.net/user/skyux/portfolio" target="blank" class="button-border-white">Purchase Theme</a>
                    </div>
                </div>
                <hr class="hrule-stripes-large max-break-3" />
                <div class="span-6 progress-bar_group">
                    <h5 class="heading">HTML5</h5>
                    <progress class="progress-bar" max="100" data-progress="75%">
                        <span class="progress-bar">
                            <span class="progress"></span>
                        </span>
                    </progress>
                    <h5 class="heading">CSS3/SASS</h5>
                    <progress class="progress-bar" max="100" data-progress="100%">
                        <span class="progress-bar">
                            <span class="progress"></span>
                        </span>
                    </progress>
                    <h5 class="heading">JavaScript/jQuery</h5>
                    <progress class="progress-bar" max="100" data-progress="80%">
                        <span class="progress-bar">
                            <span class="progress"></span>
                        </span>
                    </progress>
                    <h5 class="heading">PHP/Wordpress</h5>
                    <progress class="progress-bar" max="100" data-progress="65%">
                        <span class="progress-bar">
                            <span class="progress"></span>
                        </span>
                    </progress>
                </div>
            </div>
        </div>
    </section>
    
<?php } ?>