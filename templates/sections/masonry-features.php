 <?php function masonryfeatures($custom = array()) { ?>

    <?php $options = array_merge(array(
        'link' => '#',
        'id' => null,
        'background' => null,
        'title-highlight' => false,
        'subTitle-highlight' => false
    ), $custom); ?>

    <section 
        class="section-primary" 
        <?php if ($options['background']) { ?>
            style="background-image: url('<?php echo appDir.$options['background'] ?>')"
        <?php } if ($options['id']) { ?>
            id="<?php echo $options['id'] ?>"
        <?php } ?>
    >
        <div class="container">
            <div class="row-no-gutter">
                <a
                    href="<?php echo $options['link'] ?>" 
                    class="widget-feature-zoom span-4"
                    data-bg="<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg') ?>"
                >
                    <div class="corner-ribbon-pink" data-ribbon="Hot"></div>
                    <header class="widget_header heading_group">
                        <?php if ($options['title-highlight']) { ?>
                            <h4 class="heading-heavy-uppercase-size-4-<?php echo $options['title-highlight'] ?> font-2">
                                <b>Lorem Ipsum</b>
                            </h4>
                        <?php } else { ?>
                            <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                        <?php } if ($options['subTitle-highlight']) { ?>
                            <h5 class="heading-light-<?php echo $options['subTitle-highlight'] ?>">
                                <b>Dolor Sit Amet</b>
                            </h5>
                        <?php } else { ?>
                            <h5 class="heading-light">Dolor Sit Amet</h5>
                        <?php } ?>
                    </header>
                </a>
                <a 
                    href="<?php echo $options['link'] ?>" 
                    class="widget-feature-zoom span-4"
                    data-bg="<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg') ?>"
                >
                    <div class="corner-ribbon-green" data-ribbon="New"></div>
                    <header class="widget_header heading_group">
                        <?php if ($options['title-highlight']) { ?>
                            <h4 class="heading-heavy-uppercase-size-4-<?php echo $options['title-highlight'] ?> font-2">
                                <b>Lorem Ipsum</b>
                            </h4>
                        <?php } else { ?>
                            <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                        <?php } if ($options['subTitle-highlight']) { ?>
                            <h5 class="heading-light-<?php echo $options['subTitle-highlight'] ?>">
                                <b>Dolor Sit Amet</b>
                            </h5>
                        <?php } else { ?>
                            <h5 class="heading-light">Dolor Sit Amet</h5>
                        <?php } ?>
                    </header>
                </a>
                <a
                    href="<?php echo $options['link'] ?>"  
                    class="widget-feature-zoom span-4 col-full"
                    data-bg="<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg') ?>"
                >
                    <header class="widget_header heading_group">
                        <?php if ($options['title-highlight']) { ?>
                            <h4 class="heading-heavy-uppercase-size-4-<?php echo $options['title-highlight'] ?> font-2">
                                <b>Lorem Ipsum</b>
                            </h4>
                        <?php } else { ?>
                            <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                        <?php } if ($options['subTitle-highlight']) { ?>
                            <h5 class="heading-light-<?php echo $options['subTitle-highlight'] ?>">
                                <b>Dolor Sit Amet</b>
                            </h5>
                        <?php } else { ?>
                            <h5 class="heading-light">Dolor Sit Amet</h5>
                        <?php } ?>
                    </header>
                </a>
            </div>
            <div class="row-no-gutter">
                <a 
                    href="<?php echo $options['link'] ?>" 
                    class="widget-feature-zoom span-8"
                    data-bg="<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg') ?>"
                >
                    <header class="widget_header heading_group">
                        <?php if ($options['title-highlight']) { ?>
                            <h4 class="heading-heavy-uppercase-size-4-<?php echo $options['title-highlight'] ?> font-2">
                                <b>Lorem Ipsum</b>
                            </h4>
                        <?php } else { ?>
                            <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                        <?php } if ($options['subTitle-highlight']) { ?>
                            <h5 class="heading-light-<?php echo $options['subTitle-highlight'] ?>">
                                <b>Dolor Sit Amet</b>
                            </h5>
                        <?php } else { ?>
                            <h5 class="heading-light">Dolor Sit Amet</h5>
                        <?php } ?>
                    </header>
                </a>
            </div>
        </div>
    </section>
    
<?php } ?>