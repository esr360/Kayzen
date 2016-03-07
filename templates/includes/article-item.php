<?php function articleItem($custom = array()) { ?>

    <?php
    
        $options = array_merge(array(
            
            'type'       => 'blog',
            'media'      => 'image',
            'matrix'     => false,
            'class'      => null,
            'size'       => null,
            'height'     => null,
            'span'       => null,
            'disabled'   => false,
            'ribbon'     => null,
            'thumb'      => rand(1, 7),
            'thumbs'     => array(
                rand(1, 7),
                rand(1, 7),
                rand(1, 7),
            ),
            'maskTitle'  => true,
            'title'      => 'Lorem ipsum dolor sit amet',
            'date'       => array('Sep', 23),
            'category'   => 'HTML Themes',
            'categories' => array(
                'HTML-theme',
                'photography',
                'logo'
            ),
            'videoSrc'   => 'https://player.vimeo.com/video/87701971',
            'audioSrc'   => 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/205050090&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true',
            'price'      => '$24.99',
            'rating'     => '4'
            
        ), $custom);
        
        /**
         * Act as article?
         */
         
         $isArticle = $options['type'] === 'blog' || ($options['type'] === 'portfolio' && empty($options['span']));
         
        
        /**
         * Generate main class
         */
         
        $class = 'widget';
        if ($isArticle) {
            $class = $class.'-article';
        } else {
            $class = $class.'-card';
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
        }
        
    ?>

    <article class="<?php echo $class.' '.$options['class'] ?>" <?php echo $data ?>>

        <?php if ($options['ribbon']) { ?>
            <div class="corner-ribbon-<?php echo $options['ribbon'][0] ?>" data-ribbon="<?php echo $options['ribbon'][1] ?>"></div>
        <?php } ?>
        
        <? // Standard Image Article ?>
        <?php if ($options['media'] === 'image') { ?>
        
            <div class="thumbnail">
                <div class="thumbnail_mask">
                    <div class="thumbnail_controls<?php if($options['matrix'] && $options['maskTitle']) echo '-corner' ?> icon_group-small">
                        <a 
                            href="<?php stockImage('demo/hero-'.$options['thumb'].'.jpg') ?>"
                            class="button-icon-border-circle"
                            rel="lightbox"
                        >
                            <i class="fa fa-search"></i>
                        </a>
                        <a href="<?php pageLink('blog/single.php') ?>" class="button-icon-border-circle">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                    <?php if($options['matrix'] && $options['maskTitle']) { ?>
                        <header class="thumbnail_title heading_group">
                            <?php if ($options['size'] === 'small') { ?>
                                <h4 class="heading">Lorem Ipsum</h4>
                            <?php } else { ?>
                                <h4 class="heading-heavy-size-4 font-2">Lorem Ipsum</h4>
                                <h5 class="heading-light">Cras dictum erat id tortor ornare.</h5>
                            <?php } ?>
                        </header>
                    <?php } ?>
                </div>
                <?php if ($options['height'] === 'tall') { ?>
                        <img src="<?php stockImage('demo/tall/hero-'.$options['thumb'].'.jpg') ?>">
                <?php } else { ?>
                    <img src="<?php stockImage('demo/small/hero-'.$options['thumb'].'.jpg') ?>">
                <?php } ?>
            </div>
            
        <? // Vimeo Article ?>
        <?php } else if ($options['media'] === 'vimeo') { ?>
        
            <div
                class="auto-resizable-iframe<?php if ($isArticle) echo ' object'?>" 
                data-iframe-height="<?php if ($options['height'] ==='tall') { echo '100%'; } else { echo '66.5%'; } ?>"
            >
                <div>
                    <iframe src="<?php echo $options['videoSrc'] ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            
        <? // Youtube Article ?>
        <?php } else if ($options['media'] === 'youtube') { ?>
        
            <div 
                class="auto-resizable-iframe<?php if ($isArticle) echo ' object'?>"
                data-iframe-height="<?php if ($options['height'] ==='tall') { echo '100%'; } else { echo '66.5%'; } ?>">
                <div>
                    <iframe allowfullscreen="" src="http://www.youtube.com/embed/Q3oItpVa9fs?theme=light"></iframe>
                </div>
            </div>
            
        <? // Carousel Article ?>
        <?php } else if ($options['media'] === 'carousel') { ?>
        
            <div class="article-thumbnails-carousel carousel-cornerDots-revealNav owl-carousel">
                <?php foreach ($options['thumbs'] as $item) { ?>
                    <?php if ($options['height'] === 'tall') { ?>
                        <img src="<?php stockImage('demo/tall/hero-'.$options['thumb'].'.jpg') ?>">
                    <?php } else { ?>
                        <img src="<?php stockImage('demo/small/hero-'.$options['thumb'].'.jpg') ?>">
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
                            data-bg="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                            href="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                        ></a>
                    </div>
                    <div class="tile tile-rec">
                        <div class="tile tile-box">
                            <div class="tile tile-rec">
                                <a 
                                    class="tile-img" 
                                    data-bg="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                                    href="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                                ></a>
                            </div>
                            <div class="tile tile-rec">
                                <div class="tile tile-box">
                                    <a 
                                        class="tile-img" 
                                        data-bg="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                                        href="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                                    ></a>
                                </div>
                                <div class="tile tile-box">
                                    <a 
                                        class="tile-img" 
                                        data-bg="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                                        href="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="tile tile-box">
                            <a 
                                class="tile-img" 
                                data-bg="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                                href="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>" 
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="tile tile-box">
                    <a 
                        class="tile-img" 
                        data-bg="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                        href="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>"
                    ></a>
                </div>
            </div>
        
        <? // Audio Article ?>
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
            
        <? // Codepen Article ?>
        <?php } else if ($options['media'] === 'codepen') { ?>
        
            <div class="object">
                <p data-height="268" data-theme-id="20768" data-slug-hash="bIyAr" data-default-tab="result" data-user="jlalovi" class='codepen'>See the Pen <a href='http://codepen.io/jlalovi/pen/bIyAr/'>Freebie Interactive Flat Design UI / Only HTML5 & CSS3</a> by Javier Latorre López-Villalta (<a href='http://codepen.io/jlalovi'>@jlalovi</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </div>
        
        <?php } ?>
        
        <? // Article Title (Portfolio) ?>
        <?php if ($options['type'] === 'portfolio' && !$options['matrix'] && !empty($options['span'])) { ?>
        
            <div class="widget_content text-center">
                <header class="heading_group">
                    <h3 class="heading-heavy-size-3"><?php echo $options['title'] ?></h3>
                    <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                </header>
            </div>
            
        <?php } ?>
        
        <?php if ($isArticle) { ?>
        
            <? // Article Title (Blog) ?>
            <header class="heading_group">
                <div class="heading_date">
                    <div><?php echo $options['date'][0] ?></div>
                    <div><?php echo $options['date'][1] ?></div>
                </div>
                <?php if ($options['size'] === 'small') { ?>
                    <h2 class="heading-heavy-size-4 font-2"><?php echo $options['title'] ?></h2>
                    <h3 class="heading-light-size-2">
                        Posted in <a href="<?php pageLink('blog/single.php') ?>"><?php echo $options['category'] ?></a>
                    </h3>
                <?php } else { ?>
                    <h2 class="heading-heavy-size-5 font-2"><?php echo $options['title'] ?></h2>
                    <h3 class="heading-light">
                        Posted in <a href="<?php pageLink('blog/single.php') ?>"><?php echo $options['category'] ?></a>
                    </h3>
                <?php } ?>
            </header>
        
            <? // Article Blurb ?>
            <?php if ($options['size'] === 'small') { ?>
                <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id. Nunc vel quam luctus, maximus justo eget...</p>
            <?php } else { ?>
                <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id. Nunc vel quam luctus, maximus justo eget, laoreet massa. Maecenas congue sit amet ex quis egestas. Aliquam sapien sapien, dignissim ut tellus in...</p>
            <?php } ?>
                
        <?php } ?>
        
        <? // Article Meta ?>
        <?php if ($isArticle) { ?>
            <small>
                <div class="row-block">
                    <div class="span va-middle">
                        <ul class="list-reset-inline">
                            <?php if ($options['type'] === 'blog') { ?>
                                <li><i class="fa fa-user"></i> <a href="<?php pageLink('blog/classic/full-width.php')?>">John Doe</a></li>
                            <?php } ?>
                            <?php if (!$options['size'] == 'small') { ?>
                                <li><i class="fa fa-comment-o"></i> <a href="<?php pageLink('blog/single.php#comments') ?>">3 Comments</a></li>
                                <li>
                                    <ul class="list-tags">
                                        <li class="title">Tags:</li>
                                        <li class="plain"><a href="<?php pageLink('blog/classic/full-width.php')?>">Web Design</a></li>
                                        <li class="plain"><a href="<?php pageLink('blog/classic/full-width.php')?>">HTML</a></li>
                                        <li class="plain"><a href="<?php pageLink('blog/classic/full-width.php')?>">CSS</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="span va-middle text-right">
                        <a href="<?php pageLink('blog/single.php') ?>" class="button-primary">Read More</a>
                    </div>
                </div>
            </small>
        <?php } ?>
        
        <? // Shop Product ?>
        <?php if ($options['type'] == 'shop') { ?>
        
            <header class="heading_group-small">
                <h3 class="heading-heavy-size-4"><?php echo $options['title'] ?></h3>
                <h4 class="heading-light-uppercase-size-2">
                    Category: <a href="<?php pageLink('further/shop-category.php') ?>"><?php echo $options['category'] ?></a>
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