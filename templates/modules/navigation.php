<?php function navigation($custom = []) {

    $options = array_merge([
        'pages'           => null,
        'modifiers'       => null,
        'flyout-trigger'  => true
    ], $custom);
    
    function navThemeItem($custom = []) {
        
        $options = array_merge([
            'theme'   => 'Kayzen',
            'thumb'   => 'theme-1-thumb.jpg',
            'heading' => 'Digital Agency Demo',
            'tags'    => ['Multi-Page'],
            'ribbon'  => null
        ], $custom); 
        
        $link = themeLink($options['theme'], '/index.php');
        
        if ($options['theme'] == 'Kayzen') {
            $link = pageLink('homepages/homepage-1.php', $root = 'pages', $echo = false);
        } ?>
        
        <a href="<?php echo $link ?>" class="widget-media row">               
            <div class="span-4">
                <?php if ($options['ribbon']) { ?>
                    <div class="corner-ribbon-small-<?php echo $options['ribbon'][0] ?>" data-ribbon="<?php echo $options['ribbon'][1] ?>"></div>
                <?php } ?>
                <img src="<?php echo appDir ?>/images/themes/small/<?php echo $options['thumb'] ?>" alt="<?php echo $options['thumb'] ?>" />
            </div> 
            <div class="span-8">
                <div class="heading_group">
                    <h3 class="heading-heavy-size-2"><?php echo $options['theme'] ?></h3>
                    <h4 class="heading-light-uppercase-brand-1-size-1"><?php echo $options['heading'] ?></h4>
                </div>   
                <div class="widget_controls">
                    <ul class="list-tags-small">
                        <?php foreach ($options['tags'] as $tag) { ?>
                            <li class="plain"><span><?php echo $tag ?></span></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>   
        </a>
        
    <?php } if ($options['pages']) { ?>

        <!-- Navigation -->
        <nav 
            class="navigation<?php if ($options['modifiers']) echo '-'.$options['modifiers'] ?>" 
            id="app-nav"
        >
            <ul class="min-break-4">
                <?php foreach ($options['pages'] as $page => $url) { ?>
                    <li><a href="<?php echo $url ?>"><?php echo $page ?></a></li>
                <?php } ?>
            </ul>
            <?php if ($options['flyout-trigger']) { ?>
                <!-- Flyout Nav Trigger -->
                <ul class="max-break-4">
                    <li>
                        <span class="button-icon-border-white flyout-trigger" id="flyout-nav-trigger">
                            <i class="fa fa-bars"></i>
                        </span>
                    </li>
                </ul>
            <?php } ?>
        </nav>
                
    <?php } else { ?>

        <!-- Navigation -->
        <nav 
            class="navigation<?php if ($options['modifiers']) echo '-'.$options['modifiers'] ?>" 
            id="app-nav"
        >
            <ul class="min-break-4">
                <li class="active"><a href="<?php pageLink('homepages/homepage-1.php') ?>"><i class="navigation_icon fa fa-home"></i> Home</a></li>
                <li>
                    <a href="<?php pageLink('demos.php') ?>"><i class="navigation_icon fa fa-cogs"></i> Demos</a>
                    <ul class="mega-menu row">
                        
                        <li class="span-3">
                            <h3 class="mega-menu_title heading">General/Multipurpose</h3>
                            <ul class="list-divider">
                                
                                <!-- Theme 1 -->
                                <li>
                                    <?php navThemeItem([
                                        'theme' => 'Nexus',
                                        'heading' => 'Digital Agency Theme',
                                        'thumb' => 'theme-2-thumb.jpg',
                                        'ribbon' => ['pink', 'Hot']
                                    ]) ?>
                                </li>
                                
                                <!-- Theme 2 -->
                                <li>
                                    <?php navThemeItem([
                                        'theme' => 'Kayzen',
                                        'heading' => 'Kayzen Default Theme',
                                        'thumb' => 'theme-1-thumb.jpg',
                                        'ribbon' => ['purple', 'Featured']
                                    ]) ?>
                                </li>
                                
                                <!-- Theme 3 -->
                                <li>
                                    <?php navThemeItem([
                                        'theme' => 'Agenda',
                                        'heading' => 'Multipurpose Theme',
                                        'thumb' => 'theme-3-thumb.jpg',
                                        'tags' => ['One-Page'],
                                        'ribbon' => ['blue', 'One-Page']
                                    ]) ?>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li class="span-3">
                            <h3 class="mega-menu_title heading">Creative/Portfolio</h3>
                            <ul class="list-divider">
                                
                                <!-- Theme 4 -->
                                <li>
                                    <?php navThemeItem(array(
                                        'theme' => 'Blizzard',
                                        'heading' => 'Portfolio Theme',
                                        'thumb' => 'theme-4-thumb.jpg'
                                    )) ?>
                                </li>
                                
                                <!-- Theme 5 -->
                                <li>
                                    <?php navThemeItem(array(
                                        'theme' => 'Tempus',
                                        'heading' => 'Portfolio Theme',
                                        'thumb' => 'theme-5-thumb.jpg'
                                    )) ?>
                                </li>
                                
                                <!-- Theme 6 -->
                                <li>
                                    <?php navThemeItem(array(
                                        'theme' => 'Dart',
                                        'heading' => 'Portfolio Theme',
                                        'thumb' => 'theme-6-thumb.jpg'
                                    )) ?>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li class="span-3">
                            <h3 class="mega-menu_title heading">Shop/E-Commerce</h3>
                            <ul class="list-divider">
                                
                                <!-- Theme 7 -->
                                <li>
                                    <?php navThemeItem([
                                        'theme' => 'Mall',
                                        'heading' => 'Shop Theme',
                                        'thumb' => 'theme-7-thumb.jpg'
                                    ]) ?>
                                </li>
                                
                                <!-- Theme 8 -->
                                <li>
                                    <?php navThemeItem([
                                        'theme' => 'Arndale',
                                        'heading' => 'Shop Theme',
                                        'thumb' => 'theme-8-thumb.jpg'
                                    ]) ?>
                                </li>
                                
                                <!-- Theme 9 -->
                                <li>
                                    <?php navThemeItem([
                                        'theme' => 'Lily',
                                        'heading' => 'Shop Theme',
                                        'thumb' => 'theme-9-thumb.jpg',
                                        'ribbon' => ['pink', 'Hot']
                                    ]) ?>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="span-3">
                            <h3 class="mega-menu_title heading">Blog/News</h3>
                            <ul class="list-divider">
                                
                                <!-- Theme 10 -->
                                <li>
                                    <?php navThemeItem([
                                        'theme' => 'Hollywood',
                                        'heading' => 'Newspaper Theme',
                                        'thumb' => 'theme-10-thumb.jpg'
                                    ]) ?>
                                </li>
                                
                                <!-- Theme 11 -->
                                <li>
                                    <?php navThemeItem([
                                        'theme' => 'Coffee',
                                        'heading' => 'Newspaper Theme',
                                        'thumb' => 'theme-11-thumb.jpg'
                                    ]) ?>
                                </li>
                                
                                <!-- Theme 12 -->
                                <li>
                                    <?php navThemeItem([
                                        'theme' => 'Gaucho',
                                        'heading' => 'Newspaper Theme',
                                        'thumb' => 'theme-12-thumb.jpg'
                                    ]) ?>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="<?php pageLink('templates.php') ?>"><i class="navigation_icon fa fa-files-o"></i> Templates</a>
                    <ul class="mega-menu row-magic">
                        
                        <li class="span">
                            <h3 class="mega-menu_heading heading">Homepages</h3>
                            <ul class="list-overflow-arrow" data-list-height="6">
                                <li><a href="<?php pageLink('homepages/homepage-1.php') ?>">Homepage 1</a></li>
                                <li><a href="<?php pageLink('homepages/homepage-2.php') ?>">Homepage 2</a></li>
                                <li><a href="<?php pageLink('homepages/homepage-3.php') ?>">Homepage 3</a></li>
                                <li><a href="<?php pageLink('homepages/homepage-4.php') ?>">Homepage 4</a></li>
                                <li><a href="<?php pageLink('homepages/homepage-5.php') ?>">Homepage 5</a></li>
                                <li><a href="<?php pageLink('homepages/homepage-6.php') ?>">Homepage 6</a></li>
                            </ul>
                        </li>
                        
                        <li class="span">
                            <h3 class="mega-menu_heading heading">Portfolio</h3>
                            <ul class="list-overflow-group" data-list-height="6">
                                <li>
                                    <h3 class="mega-menu_title heading-uppercase-size-2">Classic</h3>
                                    <ul class="list-arrow">
                                        <li><a href="<?php pageLink('portfolio/classic/2-cols-carousel.php') ?>">2 Columns Carousel</a></li>
                                        <li><a href="<?php pageLink('portfolio/classic/3-cols-carousel.php') ?>">3 Columns Carousel</a></li>
                                        <li><a href="<?php pageLink('portfolio/classic/3-cols-filterable.php') ?>">3 Columns Filterable</a></li>
                                        <li><a href="<?php pageLink('portfolio/classic/3-cols-infinite-scroll.php') ?>">3 Columns Infinite Scroll</a></li>
                                        <li><a href="<?php pageLink('portfolio/classic/4-cols-carousel.php') ?>">4 Columns Carousel</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h3 class="mega-menu_title heading-uppercase-size-2">Masonry</h3>
                                    <ul class="list-arrow">
                                        <li><a href="<?php pageLink('portfolio/masonry/3-cols.php') ?>">3 Columns</a></li>
                                        <li><a href="<?php pageLink('portfolio/masonry/3-cols-filterable.php') ?>">3 Columns Filterable</a></li>
                                        <li><a href="<?php pageLink('portfolio/masonry/3-cols-infinite-scroll.php') ?>">3 Columns Infinite Scroll</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h3 class="mega-menu_title heading-uppercase-size-2">Matrix</h3>
                                    <ul class="list-arrow">
                                        <li><a href="<?php pageLink('portfolio/matrix/2-cols-carousel.php') ?>">2 Columns Carousel</a></li>
                                        <li><a href="<?php pageLink('portfolio/matrix/3-cols-carousel.php') ?>">3 Columns Carousel</a></li>
                                        <li><a href="<?php pageLink('portfolio/matrix/3-cols-filterable.php') ?>">3 Columns Filterable</a></li>
                                        <li><a href="<?php pageLink('portfolio/matrix/3-cols-fullscreen-carousel.php') ?>">3 Columns Fullscreen Carousel</a></li>
                                        <li><a href="<?php pageLink('portfolio/matrix/3-cols-fullscreen-filterable.php') ?>">3 Columns Fullscreen Filterable</a></li>
                                        <li><a href="<?php pageLink('portfolio/matrix/3-cols-infinite-scroll.php') ?>">3 Columns Infinite Scroll</a></li>
                                        <li><a href="<?php pageLink('portfolio/matrix/4-cols-carousel.php') ?>">4 Columns Carousel</a></li>
                                        <li><a href="<?php pageLink('portfolio/matrix/4-cols-fullscreen-carousel.php') ?>">4 Columns Fullscreen Carousel</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h3 class="mega-menu_title heading-uppercase-size-2">Article</h3>
                                    <ul class="list-arrow">
                                        <li><a href="<?php pageLink('portfolio/article/full-width.php') ?>">Full Width</a></li>
                                        <li><a href="<?php pageLink('portfolio/article/full-width-infinite-scroll.php') ?>">Full Width Infinite Scroll</a></li>
                                        <li><a href="<?php pageLink('portfolio/article/full-width-sidebar.php') ?>">Full Width Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h3 class="mega-menu_title heading-uppercase-size-2">Single</h3>
                                    <ul class="list-arrow">
                                        <li><a href="<?php pageLink('portfolio/single.php') ?>">Single</a></li>
                                        <li><a href="<?php pageLink('portfolio/single-sidebar.php') ?>">Single Sidebar</a></li>
                                        <li><a href="<?php pageLink('portfolio/single-video.php') ?>">Single Video</a></li>
                                        <li><a href="<?php pageLink('portfolio/single-video-bg.php') ?>">Single Video-BG</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="span">
                            <h3 class="mega-menu_heading heading">Blog</h3>
                            <ul class="list-overflow-group" data-list-height="6">
                                <li>
                                    <h3 class="mega-menu_title heading-uppercase-size-2">Classic</h3>
                                    <ul class="list-arrow">
                                        <li><a href="<?php pageLink('blog/classic/2-cols.php') ?>">2 Columns</a></li>
                                        <li><a href="<?php pageLink('blog/classic/3-cols.php') ?>">3 Columns</a></li>
                                        <li><a href="<?php pageLink('blog/classic/3-cols-filterable.php') ?>">3 Columns Filterable</a></li>
                                        <li><a href="<?php pageLink('blog/classic/3-cols-infinite-scroll.php') ?>">3 Columns Infinite Scroll</a></li>
                                        <li><a href="<?php pageLink('blog/classic/4-cols.php') ?>">4 Columns</a></li>
                                        <li><a href="<?php pageLink('blog/classic/full-width.php') ?>">Full Width</a></li>
                                        <li><a href="<?php pageLink('blog/classic/full-width-sidebar.php') ?>">Full Width Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h3 class="mega-menu_title heading-uppercase-size-2">Masonry</h3>
                                    <ul class="list-arrow">
                                        <li><a href="<?php pageLink('blog/masonry/3-cols.php') ?>">3 Columns</a></li>
                                        <li><a href="<?php pageLink('blog/classic/3-cols-filterable.php') ?>">3 Columns Filterable</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h3 class="mega-menu_title heading-uppercase-size-2">Single</h3>
                                    <ul class="list-arrow">
                                        <li><a href="<?php pageLink('blog/single.php') ?>">Single</a></li>
                                        <li><a href="<?php pageLink('blog/single-sidebar.php') ?>">Single Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="span">
                            <h3 class="mega-menu_heading heading">Further Pages</h3>
                            <ul class="list-overflow-arrow" data-list-height="6">
                                <li><a href="<?php pageLink('further/about-us.php') ?>">About Us</a></li>
                                <li><a href="<?php pageLink('further/about-us-2.php') ?>">About Us 2</a></li>
                                <li><a href="<?php pageLink('further/contact-us.php') ?>">Contact Us</a></li>
                                <li><a href="<?php pageLink('further/contact-us-2.php') ?>">Contact Us 2</a></li>
                                <li><a href="<?php pageLink('further/services.php') ?>">Services</a></li>
                                <li><a href="<?php pageLink('further/services-2.php') ?>">Services 2</a></li>
                                <li><a href="<?php pageLink('further/services-3.php') ?>">Services 3</a></li>
                                <li><a href="<?php pageLink('further/shop.php') ?>">Shop</a></li>
                                <li><a href="<?php pageLink('further/shop-category.php') ?>">Shop Category</a></li>
                                <li><a href="<?php pageLink('further/shop-category-sidebar.php') ?>">Shop Category Sidebar</a></li>
                                <li><a href="<?php pageLink('further/shop-single.php') ?>">Shop Single</a></li>
                                <li><a href="<?php pageLink('further/shop-single-sidebar.php') ?>">Shop Single Sidebar</a></li>
                                <li><a href="<?php pageLink('further/404.php') ?>">404</a></li>
                                <li><a href="<?php pageLink('further/login-register.php') ?>">Login/Register</a></li>
                                <li><a href="<?php pageLink('further/coming-soon.php') ?>">Coming Soon</a></li>
                                <li><a href="<?php pageLink('further/faq.php') ?>">FAQ</a></li>
                                <li><a href="<?php pageLink('further/faq-2.php') ?>">FAQ 2</a></li>
                                <li><a href="<?php pageLink('further/news.php') ?>">News</a></li>
                                <li><a href="<?php pageLink('further/search-results.php') ?>">Search Results</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                
                <li>
                    <a href="<?php pageLink('modules.php') ?>"><i class="navigation_icon fa fa-cubes"></i> Modules</a>
                    <ul class="mega-menu row">
                        <li class="span-6">
                            
                            <h3 class="mega-menu_heading heading">Elements</h3>
                            
                            <div class="widget_group row-magic text-center">
                                
                                <a class="widget-block-small-borderTop span" href="<?php pageLink('modules/elements/buttons.php') ?>">
                                    <div class="widget_icon button-icon-plain-size-6">
                                        <i class="fa fa-keyboard-o"></i>
                                    </div>
                                    <div class="widget_header heading_group">
                                        <h4 class="heading-light-uppercase-brand-1-size-1">Buttons</h4>
                                    </div>
                                </a>
                                
                                <a class="widget-block-small-borderTop span" href="<?php pageLink('modules/elements/carousels.php') ?>">
                                    <div class="widget_icon button-icon-plain-size-6">
                                        <i class="fa fa-arrows-h"></i>
                                    </div>
                                    <div class="widget_header heading_group">
                                        <h4 class="heading-light-uppercase-brand-1-size-1">Carousels</h4>
                                    </div>
                                </a>
                                
                                <a class="widget-block-small-borderTop span" href="<?php pageLink('modules/elements/modals.php') ?>">
                                    <div class="widget_icon button-icon-plain-size-6">
                                        <i class="fa fa-times-circle"></i>
                                    </div>
                                    <div class="widget_header heading_group">
                                        <h4 class="heading-light-uppercase-brand-1-size-1">Modals</h4>
                                    </div>
                                </a>
                                
                                <a class="widget-block-small-borderTop span" href="<?php pageLink('modules/elements/progress-bars.php') ?>">
                                    <div class="widget_icon button-icon-plain-size-6">
                                        <i class="fa fa-battery-3"></i>
                                    </div>
                                    <div class="widget_header heading_group">
                                        <h4 class="heading-light-uppercase-brand-1-size-1">Progress Bars</h4>
                                    </div>
                                </a>
                                
                            </div>
                            
                            <p>More... <small>(<a href="<?php pageLink('modules.php') ?>#kayzenElements" class="link">View All</a>)</small></p>
                            
                            <div class="row">
                                <div class="span-4">
                                    <ul class="list-arrow">
                                        <li><a href="<?php pageLink('modules/elements/accordions.php') ?>">Accordions</a></li>	
                                        <li><a href="<?php pageLink('modules/elements/alert-bars.php') ?>">Alert Bars</a></li>
                                        <li><a href="<?php pageLink('modules/elements/blockquotes.php') ?>">Blockquotes</a></li>	
                                    </ul>
                                </div>
                                <div class="span-4">
                                    <ul class="list-arrow">
                                        <li><a href="<?php pageLink('modules/elements/corner-ribbons.php') ?>">Corner Ribbons</a></li>
                                        <li><a href="<?php pageLink('modules/elements/forms.php') ?>">Forms</a></li>
                                        <li><a href="<?php pageLink('modules/elements/headings.php') ?>">Headings</a></li>	
                                    </ul>
                                </div>
                                <div class="span-4">
                                    <ul class="list-arrow">	
                                        <li><a href="<?php pageLink('modules/elements/images.php') ?>">Images</a></li>
                                        <li><a href="<?php pageLink('modules/elements/lists.php') ?>">lists</a></li>		
                                        <li><a href="<?php pageLink('modules/elements/price-charts.php') ?>">Price Charts</a></li>			
                                    </ul>
                                </div>
                            </div>
                            
                        </li>
                        
                        <li class="span-6">
                            
                            <h3 class="mega-menu_heading heading">Objects</h3>
                                    
                            <div class="widget_group row-flow text-center">
                                
                                <a class="widget-block-borderTop-highlight span-6 text-left" href="<?php pageLink('modules/objects/header.php') ?>">
                                    <div class="widget_icon-inline button-icon-plain-size-6">
                                        <i class="fa fa-file-o"></i>
                                    </div>
                                    <div class="widget_header-inline heading_group">
                                        <h3 class="heading">Customizable Header</h3>
                                        <h4 class="heading-light-uppercase-brand-1-size-1">Infinite Header Styles</h4>
                                    </div>
                                </a>
                                
                                <a class="widget-block-fill-small-borderTop span-3" href="<?php pageLink('modules/objects/mega-menu.php') ?>">
                                    <div class="widget_icon button-icon-plain-size-6">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                    <div class="widget_header heading_group">
                                        <h4 class="heading-light-uppercase-brand-1-size-1">Mega Menu</h4>
                                    </div>
                                </a>
                                
                                <a class="widget-block-fill-small-borderTop-greyscale span-3" href="<?php pageLink('modules/objects/twitter-feed.php') ?>">
                                    <div class="widget_icon button-icon-plain-size-6">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <div class="widget_header heading_group">
                                        <h4 class="heading-light-uppercase-brand-1-size-1">Twitter Feed</h4>
                                    </div>
                                </a>
                                
                            </div><!-- widget_group -->
                            
                            <div class="widget_group row-flow text-center">
                                
                                <a class="widget-block-small-borderTop span-3" href="<?php pageLink('modules/objects/footer.php') ?>">
                                    <div class="widget_icon button-icon-plain-size-6">
                                        <i class="fa fa-file-text"></i>
                                    </div>
                                    <div class="widget_header heading_group">
                                        <h4 class="heading-light-uppercase-brand-1-size-1">Footer</h4>
                                    </div>
                                </a>
                                
                                <a class="widget-block-small-borderTop span-3" href="<?php pageLink('modules/objects/billboard.php') ?>">
                                    <div class="widget_icon button-icon-plain-size-6">
                                        <i class="fa fa-tv"></i>
                                    </div>
                                    <div class="widget_header heading_group">
                                        <h4 class="heading-light-uppercase-brand-1-size-1">Billboard</h4>
                                    </div>
                                </a>
                                
                                <div class="span-6 text-left">					
                                    <p>More... <small>(<a href="<?php pageLink('modules.php') ?>#kayzenObjects" class="link">View All</a>)</small></p>
                                    <div class="row">
                                        <div class="span-6">
                                            <ul class="list-arrow">
                                                <li><a href="<?php pageLink('modules/objects/breadcrumb.php') ?>">Breadcrumb</a></li>
                                                <li><a href="<?php pageLink('modules/objects/countdown.php') ?>">Countdown</a></li>	
                                                <li><a href="<?php pageLink('modules/objects/dropdown.php') ?>">Dropdown</a></li>	
                                            </ul>
                                        </div>
                                        <div class="span-6">
                                            <ul class="list-arrow">
                                                <li><a href="<?php pageLink('modules/objects/earth-slider.php') ?>">Earth Slider</a></li>
                                                <li><a href="<?php pageLink('modules/objects/flyout-navigation.php') ?>">Flyout Navigation</a></li>	
                                                <li><a href="<?php pageLink('modules/objects/google-map.php') ?>">Google Map</a></li>	
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div><!-- widget_group -->
                            
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php pageLink('features.php') ?>"><i class="navigation_icon fa fa-star"></i> Features</a>
                    <ul>
                        <li><a href="<?php pageLink('features.php') ?>#modular-ui">100% Modular UI</a></li>
                        <li><a href="<?php pageLink('features.php') ?>#page-builder">Drag & Drop Page Builder</a></li>
                        <li><a href="<?php pageLink('features.php') ?>#unique-configuration">Unique Configuration</a></li>
                        <li><a href="<?php pageLink('features.php') ?>#custom-grid-system">Custom Grid System</a></li>
                        <li><a href="<?php pageLink('features.php') ?>#intelligent-theming">Intelligent Theming</a></li>
                        <li><a href="<?php pageLink('features.php') ?>#mobile-optimized">Mobile Optimized</a></li>
                    </ul>
                </li>
                <li><!-- @TODO update docs link so not hardcoded -->
                    <a href="http://kayzen.skyux.com/docs" target="blank"><i class="navigation_icon fa fa-file-text-o"></i> Documentation</a>
                    <ul>
                        <li><a href="http://kayzen.skyux.com/docs/#overview" target="blank">Overview</a></li>
                        <li><a href="http://kayzen.skyux.com/docs/#getting-started" target="blank">Getting Started</a></li>
                        <li><a href="http://kayzen.skyux.com/docs/#features--options" target="blank">Features & Options</a></li>
                        <li><a href="http://kayzen.skyux.com/docs/#custom-sections" target="blank">Custom Sections</a></li>
                        <li><a href="http://kayzen.skyux.com/docs/#resources" target="blank">Resources</a></li>
                        <li><a href="http://kayzen.skyux.com/docs/#notes" target="blank">Notes</a></li>
                    </ul>
                </li>
            </ul>
            <?php if ($options['flyout-trigger']) { ?>
                <!-- Flyout Nav Trigger -->
                <ul class="max-break-4">
                    <li>
                        <span class="button-icon-border-white flyout-trigger" id="flyout-nav-trigger">
                            <i class="fa fa-bars"></i>
                        </span>
                    </li>
                </ul>
            <?php } ?>
        </nav>

    <?php } ?>

<?php } ?>