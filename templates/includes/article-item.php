<article class="widget-article">
    
    <?php if ($type === 'image') { ?>
    
        <div class="thumbnail">
            <div class="thumbnail_mask">
                <div class="thumbnail_controls icon_group-small">
                    <a 
                        href="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg" 
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
            <img src="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg">
        </div>
        
    <?php } else if ($type === 'video') { ?>
    
        <div class="auto-resizable-iframe object" data-iframe-height="56.25%">
            <div>
                <iframe src="https://player.vimeo.com/video/87701971" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
        
    <?php } else if ($type === 'carousel') { ?>
    
        <div class="article-thumbnails-carousel carousel-cornerDots-revealNav owl-carousel">
            <img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg">
            <img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg">
            <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg">
        </div>
        
    <?php } else if ($type === 'masonry') { ?>
    
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
    
    <?php } else if ($type === 'audio') { ?>
    
        <iframe 
            width="100%"
            scrolling="no" 
            frameborder="no" 
            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/205050090&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"
            class="object"
        ></iframe>
        
    <?php } else if ($type === 'codepen') { ?>
    
        <div class="object">
            <p data-height="268" data-theme-id="20768" data-slug-hash="bIyAr" data-default-tab="result" data-user="jlalovi" class='codepen'>See the Pen <a href='http://codepen.io/jlalovi/pen/bIyAr/'>Freebie Interactive Flat Design UI / Only HTML5 & CSS3</a> by Javier Latorre López-Villalta (<a href='http://codepen.io/jlalovi'>@jlalovi</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
            <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
        </div>
    
    <?php } ?>
    
    <header class="heading_group">
        <div class="heading_date">
            <div>Sep</div>
            <div>23</div>
        </div>
        <?php if ($size === 'small') { ?>
            <h2 class="heading-heavy-size-4 font-2">Lorem ipsum dolor sit amet</h2>
            <h3 class="heading-light-size-2">Posted in <a href="#">HTML Themes</a></h3>
        <?php } else { ?>
            <h2 class="heading-heavy-size-5 font-2">Lorem ipsum dolor sit amet</h2>
            <h3 class="heading-light">Posted in <a href="#">HTML Themes</a></h3>
       <?php } ?>
    </header>
    
    <?php if ($size === 'small') { ?>
        <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id. Nunc vel quam luctus, maximus justo eget...</p>
    <?php } else { ?>
        <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id. Nunc vel quam luctus, maximus justo eget, laoreet massa. Maecenas congue sit amet ex quis egestas. Aliquam sapien sapien, dignissim ut tellus in...</p>
    <?php } ?>
    
    <small>
        <div class="row-block">
            <div class="span va-middle">
                <ul class="list-reset-inline">
                    <li><i class="fa fa-user"></i> <a href="#">John Doe</a></li>
                    <?php if (!$size === 'small') { ?>
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