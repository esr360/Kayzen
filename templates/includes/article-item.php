<?php function articleItem($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            'media'    => 'image',
            'size'     => null,
            'height'   => null,
            'span'     => null,
            'thumb'    => rand(1, 7),
            'thumbs'   => array(
                rand(1, 7),
                rand(1, 7),
                rand(1, 7),
            ),
            'videoSrc' => 'https://player.vimeo.com/video/87701971',
            'audioSrc' => 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/205050090&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true'
            
        ), $custom);
        
    ?>

    <article class="widget-article <?php if (!empty($options['span'])) echo 'span-'.$options['span'] ?>">
        
        <!-- Standard Image Article -->
        <?php if ($options['media'] === 'image') { ?>
        
            <div class="thumbnail">
                <div class="thumbnail_mask">
                    <div class="thumbnail_controls icon_group-small">
                        <a 
                            href="<?php echo appDir ?>/images/wallpapers/bg-<?php echo $options['thumb'] ?>.jpg" 
                            class="icon-border-circle-size-3"
                            rel="lightbox"
                        >
                            <i class="fa fa-search"></i>
                        </a>
                        <a href="#" class="icon-border-circle-size-3">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                <img src="<?php echo appDir ?>/images/wallpapers/<?php if ($options['height'] === 'tall') echo 'tall/' ?>bg-<?php echo $options['thumb'] ?>.jpg">
            </div>
            
        <!-- Video Article -->
        <?php } else if ($options['media'] === 'video') { ?>
        
            <div class="auto-resizable-iframe object" data-iframe-height="<?php if ($options['height'] ==='tall') { echo '100%'; } else { echo '56.25%'; } ?>">
                <div>
                    <iframe src="<?php echo $options['videoSrc'] ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            
        <!-- Carousel Article -->
        <?php } else if ($options['media'] === 'carousel') { ?>
        
            <div class="article-thumbnails-carousel carousel-cornerDots-revealNav owl-carousel">
                <?php foreach ($options['thumbs'] as $item) { ?>
                    <img src="<?php echo appDir ?>/images/wallpapers/<?php if ($options['height'] === 'tall') echo 'tall/' ?>bg-<?php echo $item ?>.jpg">
                <?php } ?>
            </div>
            
        <!-- Masonry Article -->
        <?php } else if ($options['media'] === 'masonry') { ?>
        
            <div class="tiles lightbox-gallery">  
                <div class="tile tile-box">
                    <div class="tile tile-rec">
                        <a 
                            class="tile-img" 
                            data-bg="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                            href="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                        ></a>
                    </div>
                    <div class="tile tile-rec">
                        <div class="tile tile-box">
                            <div class="tile tile-rec">
                                <a 
                                    class="tile-img" 
                                    data-bg="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                                    href="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                                ></a>
                            </div>
                            <div class="tile tile-rec">
                                <div class="tile tile-box">
                                    <a 
                                        class="tile-img" 
                                        data-bg="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                                        href="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                                    ></a>
                                </div>
                                <div class="tile tile-box">
                                    <a 
                                        class="tile-img" 
                                        data-bg="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                                        href="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                                    ></a>
                                </div>
                            </div>
                        </div>
                        <div class="tile tile-box">
                            <a 
                                class="tile-img" 
                                data-bg="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                                href="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                            ></a>
                        </div>
                    </div>
                </div>
                <div class="tile tile-box">
                    <a 
                        class="tile-img" 
                        data-bg="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                        href="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg"
                    ></a>
                </div>
            </div>
        
        <!-- Audio Article -->
        <?php } else if ($options['media'] === 'audio') { ?>
        
            <iframe 
                width="100%"
                scrolling="no" 
                frameborder="no"
                src="<?php echo $options['audioSrc'] ?>"
                class="object"
                <?php if ($options['height'] === 'tall') { ?>
                    height="350px""
                <?php } ?>
            ></iframe>
            
        <!-- Codepen Article -->
        <?php } else if ($options['media'] === 'codepen') { ?>
        
            <div class="object">
                <p data-height="268" data-theme-id="20768" data-slug-hash="bIyAr" data-default-tab="result" data-user="jlalovi" class='codepen'>See the Pen <a href='http://codepen.io/jlalovi/pen/bIyAr/'>Freebie Interactive Flat Design UI / Only HTML5 & CSS3</a> by Javier Latorre López-Villalta (<a href='http://codepen.io/jlalovi'>@jlalovi</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </div>
        
        <?php } ?>
        
        <!-- Article Title -->
        <header class="heading_group">
            <div class="heading_date">
                <div>Sep</div>
                <div>23</div>
            </div>
            <?php if ($options['size'] === 'small') { ?>
                <h2 class="heading-heavy-size-4 font-2">Lorem ipsum dolor sit amet</h2>
                <h3 class="heading-light-size-2">Posted in <a href="#">HTML Themes</a></h3>
            <?php } else { ?>
                <h2 class="heading-heavy-size-5 font-2">Lorem ipsum dolor sit amet</h2>
                <h3 class="heading-light">Posted in <a href="#">HTML Themes</a></h3>
            <?php } ?>
        </header>
        
        <!-- Article Blurb -->
        <?php if ($options['size'] === 'small') { ?>
            <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id. Nunc vel quam luctus, maximus justo eget...</p>
        <?php } else { ?>
            <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id. Nunc vel quam luctus, maximus justo eget, laoreet massa. Maecenas congue sit amet ex quis egestas. Aliquam sapien sapien, dignissim ut tellus in...</p>
        <?php } ?>
        
        <!-- Article Meta -->
        <small>
            <div class="row-block">
                <div class="span va-middle">
                    <ul class="list-reset-inline">
                        <li><i class="fa fa-user"></i> <a href="#">John Doe</a></li>
                        <?php if (!$options['size'] === 'small') { ?>
                        <li><i class="fa fa-comment-o"></i> <a href="#">3 Comments</a></li>
                        <li>
                            <ul class="list-tags">
                                <li class="title">Tags:</li>
                                <li class="plain"><a href="#">Web Design</a></li>
                                <li class="plain"><a href="#">HTML</a></li>
                                <li class="plain"><a href="#">CSS</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="span va-middle text-right">
                    <a href="#" class="button-primary">Read More</a>
                </div>
            </div>
        </small>
        
    </article>

<?php } ?>