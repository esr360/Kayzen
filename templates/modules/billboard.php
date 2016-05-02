<?php function billboard($custom = []) {

    $options = array_merge([
        'type'          => 'default', // 'default' | 'homepage' | 'videoBg'
        'modifiers'     => '-overlay',
        'wrapper-class' => '',
        'heading_group' => true,
        'headline'      => [
            'heading-uppercase-light-strikethrough-spaced-size-5-responsive',
            'Kayzen'
        ],
        'title'         => [
            'heading-uppercase-heavy-size-8 font-2',
            'Make Theming Great Again'
        ],
        'tag-line'      => null,
        'ctas'          => [
            [
                'button-size-4-border-white',
                '#key-features',
                'Explore The Potential'
            ]
        ],
        'slide-nav'     => true,
        'wheel-anchor'  => '#key-features',
        'bg-img'        => '',
        'bg-parallax'   => 'data-stellar-background-ratio="0.5"',
        'fade-parallax' => false,
        'countdown'     => false,
        'search'        => false 
    ], $custom);
    
    // Update the tag-line if null
    if ($options['tag-line'] === null) {
        $options['tag-line'] = 'Welcome to Kayzen; the next generation of website & app theming. Kayzen is more than just a theme, it\'s a theme framework, custom built from the ground up to help make theming great again.';
    } ?>
    
    <?php if ($options['type'] == 'homepage') { ?>
        <section 
            class="billboard-full-screen<?php echo $options['modifiers'] ?>" <?php echo $options['bg-parallax'] ?>
            <?php if($options['bg-img']) { ?>
                style="background-image: url('<?php echo $options['bg-img'] ?>')"
            <?php } ?>
        >
            <div class="billboard_wrapper container <?php echo $options['wrapper-class'] ?>">
                <div class="billboard_snap" <?php if($options['fade-parallax']) { ?>id="billboard-fade-parallax"<?php } ?>>
                    <?php if($options['heading_group']) { ?><header class="heading_group"><?php } ?>
                        <?php if($options['headline']) {?>
                            <h2 class="<?php echo $options['headline'][0] ?>">
                                <span><?php echo $options['headline'][1] ?></span>
                            </h2>
                        <?php } ?>
                        <h3 class="<?php echo $options['title'][0] ?>"><?php echo $options['title'][1] ?></h3>
                    <?php if($options['heading_group']) { ?></header><?php } ?>
                    <?php if ($options['tag-line']) { ?>
                        <p class="lede"><?php echo $options['tag-line'] ?></p>
                    <?php } ?>
                    <div class="button_group">
                        <?php foreach($options['ctas'] as $cta) { ?>
                            <a class="<?php echo $cta[0] ?>" href="<?php echo $cta[1] ?>"><?php echo $cta[2] ?></a>    
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php if ($options['slide-nav']) { ?>
                <nav class="slide-nav">
                    <button class="slide-prev button-icon-border-size-3-white"><i class="fa fa-angle-left"></i></button>
                    <button class="slide-next button-icon-border-size-3-white"><i class="fa fa-angle-right"></i></button>
                </nav>
            <?php } ?>
            <a href="<?php echo $options['wheel-anchor'] ?>" class="scroll-wheel"></a>
        </section>
    <?php } else if ($options['type'] == 'videoBg') { ?>
        <section class="billboard-videoBg">
            <div class="auto-resizable-iframe">
                <iframe id="billboard_video" src="https://player.vimeo.com/video/87701971?autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </section>
    <?php } else if ($options['type'] == 'default') { ?>
        <section class="billboard-overlay<?php echo '-'.$options['modifiers'] ?>" data-stellar-background-ratio="0.5">
            <div class="billboard_wrapper container">
                <header class="heading_group<?php if($options['countdown']) echo '-small' ?>">
                    <h2 class="heading-uppercase-light-strikethrough-spaced-size-4-responsive"><span><?php echo $options['headline'] ?></span></h2>
                    <h3 class="heading-uppercase-heavy-size-8 font-2"><?php echo $options['title'] ?></h3>
                    <?php if ($options['tag-line']) { ?>
                        <h4 class="heading-size-2-light"><i><?php echo $options['tag-line'] ?></i></h4>
                    <?php } if ($options['search']) { ?>
                        <form class="form">
                            <div class="form_group-small span-4">
                                <button type="submit" class="button-icon-primary-size-3"><i class="fa fa-search"></i></button>
                                <input type="text" class="form_input-plain" id="footer-newsletter" placeholder="Search for a page" required="">
                            </div>
                        </form>
                    <?php } ?>
                </header>
                <?php if ($options['countdown']) { ?>
                    <div class="countdown">
                        <div class="countdown_days" data-timeUnit="Days">00</div>
                        <div class="countdown_hours" data-timeUnit="Hours">00</div>
                        <div class="countdown_minutes" data-timeUnit="Minutes">00</div>
                        <div class="countdown_seconds" data-timeUnit="Seconds">00</div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $(".countdown").countdown({
                                date : '1 May 2016 09:00:00',
                                format : 'on'
                            });
                        });
                    </script>
                <?php } ?>
            </div>
        </section>
    <?php } ?>

<?php } ?>