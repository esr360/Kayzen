<article class="widget-article">
    <?php if ($type === 'image') { ?>
        <div class="thumbnail-article">
            <div class="thumbnail_mask">
                <div class="thumbnail_controls icon_group-small">
                    <a href="#" class="icon-border-circle-size-3">
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
        <div class="auto-resizable-iframe object" data-iframe-height="56.5%">
            <div>
                <iframe src="https://player.vimeo.com/video/87701971" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    <?php } else if ($type === 'carousel') { ?>
        <div class="article-thumbnail-carousel owl-carousel">
            <img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg">
            <img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg">
            <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg">
        </div>
    <?php } ?>
    <header class="heading_group">
        <div class="heading_date">
            <div>Sep</div>
            <div>23</div>
        </div>
        <h2 class="heading-heavy-size-5 font-2">Lorem ipsum dolor sit amet</h2>
        <h3 class="heading-light">Posted in <a href="#">HTML Themes</a></h3>
    </header>
    <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id. Nunc vel quam luctus, maximus justo eget, laoreet massa. Maecenas congue sit amet ex quis egestas. Aliquam sapien sapien, dignissim ut tellus in, dignissim bibendum erat...</p>
    <small>
        <div class="row-block">
            <div class="span va-middle">
                <ul class="list-tags">
                    <li class="title">Tags:</li>
                    <li class="plain"><a href="#">Web Design</a></li>
                    <li class="plain"><a href="#">HTML</a></li>
                    <li class="plain"><a href="#">CSS</a></li>
                </ul>
            </div>
            <div class="span va-middle text-right">
                <a href="#" class="button-primary">Read More</a>
            </div>
        </div>
    </small>
</article>