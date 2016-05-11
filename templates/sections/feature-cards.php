 <?php function featureCards($custom = array()) {

    $options = array_merge([
        'item-link' => pageLink('further/shop-category.php', 'pages', false),
    ], $custom); ?>
    
    <section class="section-primary">
        <div class="container">
            <div class="row row-waffle-large text-center">
                
                <div class="widget-card span-4">
                    <div class="thumbnail-zoom">
                        <div class="thumbnail_mask">
                            <div class="thumbnail_controls button_group-small">
                                <a href="<?php echo stockImage('demo/stock-7.jpg') ?>" class="button-icon-border-circle" rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="<?php echo $options['item-link'] ?>" class="button-icon-border-circle">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo stockImage('demo/stock-7.jpg') ?>">
                    </div>
                    <div class="widget_content">
                        <header class="heading_group">
                            <h3 class="heading-heavy-size-4">Leather Jackets</h3>
                            <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                        </header>
                        <p>
                            <a href="<?php echo $options['item-link'] ?>" class="button-border">Shop Now</a>
                        </p>
                    </div>
                </div>
                
                <div class="widget-card span-4">
                    <div class="thumbnail-zoom">
                        <div class="thumbnail_mask">
                            <div class="thumbnail_controls button_group-small">
                                <a href="<?php echo stockImage('demo/stock-3.jpg') ?>" class="button-icon-border-circle" rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="<?php echo $options['item-link'] ?>" class="button-icon-border-circle">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo stockImage('demo/stock-3.jpg') ?>">
                    </div>
                    <div class="widget_content">
                        <header class="heading_group">
                            <h3 class="heading-heavy-size-4">Summer Collection</h3>
                            <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                        </header>
                        <p>
                            <a href="<?php echo $options['item-link'] ?>" class="button-border">See Collection</a>
                        </p>
                    </div>
                </div>
                
                <div class="widget-card span-4">
                    <div class="thumbnail-zoom">
                        <div class="thumbnail_mask">
                            <div class="thumbnail_controls button_group-small">
                                <a href="<?php echo stockImage('demo/stock-6.jpg') ?>" class="button-icon-border-circle" rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="<?php echo $options['item-link'] ?>" class="button-icon-border-circle">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo stockImage('demo/stock-6.jpg') ?>">
                    </div>
                    <div class="widget_content">
                        <header class="heading_group">
                            <h3 class="heading-heavy-size-4">TV Advert</h3>
                            <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                        </header>
                        <p>
                            <a href="<?php echo $options['item-link'] ?>" class="button-border">Watch Video</a>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<?php } ?>