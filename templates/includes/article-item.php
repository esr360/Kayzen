<?php function articleItem($custom = array()) {
          
    // Dynamically set correct blog/portfolio page links
    if ($GLOBALS['theme'] == 'Kayzen') {
        $itemLink = pageLink('blog/single.php', 'pages', false);
        $itemRoot = pageLink('blog/classic/3-cols.php', 'pages', false);
    } else {
        $itemLink = themeLink($GLOBALS['theme'], '/blog-single.php');
        $itemRoot = themeLink($GLOBALS['theme'], '/blog.php');
    }

    $options = array_merge(array(
        'type'          => 'blog', // blog | portfolio
        'media'         => 'image', // image | vimeo | youtube | carousel | audio | masonry | codepen
        'blurb'         => null,
        'link'          => $itemLink,
        'root'          => $itemRoot,
        'widget'        => true,
        'matrix'        => false,
        'class'         => null,
        'size'          => null,
        'height'        => null,
        'span'          => null,
        'disabled'      => false,
        'ribbon'        => null,
        'author-thumb'  => false,
        'thumb'         => rand(1,25),
        'thumbs'        => [
            rand(1, 25),
            rand(1, 25),
            rand(1, 25),
        ],
        'maskTitle'     => true,
        'title'         => 'Lorem ipsum dolor sit amet',
        'date'          => ['Sep', 23],
        'category'      => 'HTML Themes',
        'categories'    => [
            'HTML-theme',
            'photography',
            'logo'
        ],
        'videoSrc'      => 'https://player.vimeo.com/video/87701971',
        'audioSrc'      => 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/205050090&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true',
        'price'         => '$24.99',
        'rating'        => '4'    
    ), $custom);
        
    /**
     * Update the default link if type if 'portfolio'
     */
    if ($options['link'] === $itemLink && $options['type'] === 'portfolio') {
        if ($GLOBALS['theme'] == 'Kayzen') {
            $options['link'] = pageLink('portfolio/single.php', 'pages', false);
        } else {
            $options['link'] = themeLink($GLOBALS['theme'], '/portfolio-single.php');
        } 
    }
    
    /**
     * Update the default root link if type if 'portfolio'
     */
    if ($options['root'] === $itemRoot && $options['type'] === 'portfolio') {
        if ($GLOBALS['theme'] == 'Kayzen') {
            $options['root'] = pageLink('portfolio/classic/3-cols-filterable.php', 'pages', false);
        } else {
            $options['root'] = themeLink($GLOBALS['theme'], '/portfolio.php');
        } 
    }
    
    /**
     * Act as article?
     */
    $isArticle = $options['type'] === 'blog' || ($options['type'] === 'portfolio' && empty($options['span']));
    
    /**
     * Generate main class
     */
    $class = '';
    

    if ($options['widget']) {
        $class = 'widget';
        if ($isArticle) {
            $class = $class.'-article';
        } else {
            $class = $class.'-card';
        }
        if ($options['media'] === 'image' && $options['type'] === 'portfolio') {
            $class = $class.' thumbnail';
            if ($isArticle && empty($options['span'])) {
                $class = $class.'-article';
            }
        }
    }
    if (!empty($options['span'])) {
        $class = $class.' span-'.$options['span'];
    }
    if ($options['disabled']) {
        $class = $class.' disabled';
    }
    
    /**
     * Generate item data-attribute
     */
        
    $data = 'data-';
    if ($options['type'] === 'blog') {
        $data = $data.$options['media'];
    } else if ($options['type'] === 'portfolio') {
        $data = $data.$options['categories'][array_rand($options['categories'])];
    } ?>

    <article class="<?php echo $class.' '.$options['class'] ?>" <?php echo $data ?>>

        <?php if ($options['ribbon']) { ?>
            <div class="corner-ribbon-<?php echo $options['ribbon'][0] ?>" data-ribbon="<?php echo $options['ribbon'][1] ?>"></div>
        <?php } ?>
        
        <?php // Standard Image Article ?>
        <?php if ($options['media'] === 'image') { ?>
        
            <?php if ($options['type'] == 'blog') { ?>
                <div class="thumbnail<?php if ($isArticle && empty($options['span'])) echo '-article' ?>">
            <?php } ?>
              
                <div class="thumbnail_mask">
                    <div class="thumbnail_controls<?php if($options['matrix'] && $options['maskTitle']) echo '-corner' ?> button_group-small">
                        <a 
                            href="<?php echo stockImage('demo/stock-'.$options['thumb'].'.jpg') ?>"
                            class="button-icon-border-circle"
                            rel="lightbox"
                        >
                            <i class="fa fa-search"></i>
                        </a>
                        <a href="<?php echo $options['link'] ?>" class="button-icon-border-circle">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                    <?php if($options['matrix'] && $options['maskTitle']) { ?>
                        <header class="thumbnail_title heading_group">
                            <?php if ($options['size'] === 'small') { ?>
                                <h4 class="heading"><a href="<?php echo $options['link'] ?>">Lorem Ipsum</a></h4>
                            <?php } else { ?>
                                <h4 class="heading-heavy-size-4 font-2">
                                    <a href="<?php echo $options['link'] ?>">Lorem Ipsum</a>
                                </h4>
                                <h5 class="heading-light">Cras dictum erat id tortor ornare.</h5>
                            <?php } ?>
                        </header>
                    <?php } ?>
                </div>
                <?php if ($options['height'] === 'tall') { ?>
                        <img src="<?php echo stockImage('demo/tall/stock-'.$options['thumb'].'.jpg') ?>" alt="">
                <?php } else { ?>
                    <img src="<?php echo stockImage('demo/small/stock-'.$options['thumb'].'.jpg') ?>" alt="">
                <?php } ?>
                
            <?php if ($options['type'] == 'blog') { ?>
                </div>
            <?php } ?>
            
            <?php if ($options['author-thumb']) { ?>
                <div class="thumbnail-profile-round-badge">
                    <img src="<?php echo stockImage($options['author-thumb']) ?>" alt="">
                </div>
            <?php } ?>
            
        <?php // Vimeo Article ?>
        <?php } else if ($options['media'] === 'vimeo') { ?>
        
            <div
                class="auto-resizable-iframe<?php if ($isArticle) echo ' object'?>" 
                data-iframe-height="<?php if ($options['height'] ==='tall') { echo '100%'; } else { echo '66.5%'; } ?>"
            >
                <div>
                    <iframe src="<?php echo $options['videoSrc'] ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            
        <?php // Youtube Article ?>
        <?php } else if ($options['media'] === 'youtube') { ?>
        
            <div 
                class="auto-resizable-iframe<?php if ($isArticle) echo ' object'?>"
                data-iframe-height="<?php if ($options['height'] ==='tall') { echo '100%'; } else { echo '66.5%'; } ?>">
                <div>
                    <iframe allowfullscreen="" src="http://www.youtube.com/embed/Q3oItpVa9fs?theme=light"></iframe>
                </div>
            </div>
            
        <?php // Carousel Article ?>
        <?php } else if ($options['media'] === 'carousel') { ?>
        
            <div class="article-thumbnails-carousel carousel-cornerDots-revealNav owl-carousel">
                <?php foreach ($options['thumbs'] as $item) { ?>
                    <?php if ($options['height'] === 'tall') { ?>
                        <img src="<?php echo stockImage('demo/tall/stock-'.$item.'.jpg') ?>" alt="">
                    <?php } else { ?>
                        <img src="<?php echo stockImage('demo/small/stock-'.$item.'.jpg') ?>" alt="">
                    <?php } ?>
                <?php } ?>
            </div>
            
        <!-- Masonry Article -->
        <?php } else if ($options['media'] === 'masonry') { ?>
        
            <div class="tiles lightbox-gallery">  
                <div class="tile tile-box">
                    <div class="tile tile-rec">
                        <a 
                            class="tile-img" 
                            data-bg="<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg') ?>"
                            href="#"
                        ></a>
                    </div>
                    <div class="tile tile-rec">
                        <div class="tile tile-box">
                            <div class="tile tile-rec">
                                <a 
                                    class="tile-img" 
                                    data-bg="<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg') ?>"
                                    href="#"
                                ></a>
                            </div>
                            <div class="tile tile-rec">
                                <div class="tile tile-box tile-last">
                                    <a 
                                        class="tile-img" 
                                        data-bg="<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg') ?>"
                                        href="#"
                                    ></a>
                                </div>
                                <div class="tile tile-box tile-last">
                                    <a 
                                        class="tile-img" 
                                        data-bg="<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg') ?>"
                                        href="#"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="tile tile-box tile-last">
                            <a 
                                class="tile-img" 
                                data-bg="<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg') ?>"
                                href="#" 
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="tile tile-box tile-last">
                    <a 
                        class="tile-img" 
                        data-bg="<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg') ?>"
                        href="#"
                    ></a>
                </div>
            </div>
        
        <?php // Audio Article ?>
        <?php } else if ($options['media'] === 'audio') { ?>
        
            <iframe 
                width="100%"
                scrolling="no" 
                frameborder="no"
                src="<?php echo $options['audioSrc'] ?>"
                <?php if ($options['type'] === 'blog') { ?>
                    class="object"
                <?php } if ($options['height'] === 'tall') { ?>
                    height="350px"
                <?php } ?>
            ></iframe>
            
        <?php // Codepen Article ?>
        <?php } else if ($options['media'] === 'codepen') { ?>
        
            <div class="object">
                <p data-height="268" data-theme-id="20768" data-slug-hash="bIyAr" data-default-tab="result" data-user="jlalovi" class='codepen'>See the Pen <a href='http://codepen.io/jlalovi/pen/bIyAr/'>Freebie Interactive Flat Design UI / Only HTML5 & CSS3</a> by Javier Latorre López-Villalta (<a href='http://codepen.io/jlalovi'>@jlalovi</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </div>
        
        <?php } ?>
        
        <?php // Article Title (Portfolio) ?>
        <?php if ($options['type'] === 'portfolio' && !$options['matrix'] && !empty($options['span'])) { ?>
        
            <a href="<?php echo $options['link'] ?>" class="widget_content text-center">
                <header class="heading_group">
                    <h3 class="heading-heavy-size-3"><?php echo $options['title'] ?></h3>
                    <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                </header>
            </a>
            
        <?php } ?>
        
        <?php if ($isArticle) { ?>
        
            <?php // Article Title (Blog) ?>
            <header class="heading_group">
                <div class="heading_date">
                    <div><?php echo $options['date'][0] ?></div>
                    <div><?php echo $options['date'][1] ?></div>
                </div>
                <?php if ($options['size'] === 'small') { ?>
                    <h2 class="heading-heavy-size-4 font-2"><?php echo $options['title'] ?></h2>
                    <h3 class="heading-light-size-2">
                        Posted in <a href="<?php echo $options['root'] ?>"><?php echo $options['category'] ?></a>
                    </h3>
                <?php } else { ?>
                    <h2 class="heading-heavy-size-5 font-2"><?php echo $options['title'] ?></h2>
                    <h3 class="heading-light">
                        Posted in <a href="<?php echo $options['root'] ?>"><?php echo $options['category'] ?></a>
                    </h3>
                <?php } ?>
            </header>
        
            <?php // Article Blurb ?>
            <?php if ($options['blurb']) { ?>
                <p class="blurb"><?php echo $options['blurb'] ?></p>
            <?php } else { ?>
                <?php if (!empty($options['span'])) { ?>
                    <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id. Nunc vel quam luctus, maximus justo eget...</p>
                <?php } else { ?>
                    <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id. Nunc vel quam luctus, maximus justo eget, laoreet massa. Maecenas congue sit amet ex quis egestas. Aliquam sapien sapien, dignissim ut tellus in...</p>
                <?php } ?>
            <?php } ?>
                
        <?php } ?>
        
        <?php // Article Meta ?>
        <?php if ($isArticle) { ?>
            <div class="row-block <?php echo (empty($options['span'])) ? '' : 'stack-break-0' ?>">
                <div class="span va-middle object">
                    <ul class="list-reset-inline">
                        <?php if ($options['type'] === 'blog') { ?>
                            <li><i class="fa fa-user"></i> <a href="<?php echo $options['root'] ?>">John Doe</a></li>
                        <?php } if (empty($options['span'])) { ?>
                            <li class="min-break-1"><i class="fa fa-comment-o"></i> <a href="<?php echo $options['link'] ?>#comments">3 Comments</a></li>
                            <li>
                                <ul class="list-tags">
                                    <li class="title">Tags:</li>
                                    <li class="plain"><a href="<?php echo $options['root'] ?>">Web Design</a></li>
                                    <li class="plain"><a href="<?php echo $options['root'] ?>">HTML</a></li>
                                    <li class="plain"><a href="<?php echo $options['root'] ?>">CSS</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="span va-middle <?php echo (empty($options['span'])) ? 'text-right-desktop' : 'text-right' ?>">
                    <a 
                        href="<?php echo $options['link'] ?>" 
                        class="button-primary<?php if ($options['size'] === 'small') echo '-size-2' ?>"
                    >
                        Read More
                    </a>
                </div>
            </div>
        <?php } ?>
        
        <?php // Shop Product ?>
        <?php if ($options['type'] == 'shop') { ?>
        
            <header class="heading_group-small">
                <h3 class="heading-heavy-size-4">
                    <a class="widget_titleLink" href="<?php echo $options['link'] ?>"><?php echo $options['title'] ?></a>
                </h3>
                <h4 class="heading-light-uppercase-size-2">
                    Category: <a href="<?php echo $options['root'] ?>"><?php echo $options['category'] ?></a>
                </h4>
            </header>
            <div class="heading_group-small">
                <?php if (is_array($options['price'])) { ?>
                    <del><?php echo $options['price'][0] ?></del>
                    <ins><?php echo $options['price'][1] ?></ins>
                <?php } else { ?> 
                    <span><?php echo $options['price'] ?></span>
                <?php } ?>
            </div>
            <div class="rating">
                <?php for ($i = 0; $i < $options['rating']; $i++) { ?>
                    <i class="fa fa-star"></i>
                <?php } for ($i = 0; $i < (5 - $options['rating']); $i++) {  ?>
                    <i class="fa fa-star-o"></i>
                <?php } ?>
            </div>
       
        <?php } ?>
        
    </article>

<?php } ?>