<?php function billboard($custom = array()) { ?>

    <?php $options = array_merge(array(
        'type'      => 'default', // 'homepage' / 'videoBg'
        'headline'  => 'Kayzen',
        'modifiers' => null,
        'title'     => null,
        'tag-line'  => null,
        'countdown' => false,
        'search'    => false
    ), $custom); ?>
    
    <?php if ($options['type'] == 'homepage') { ?>
        <section class="billboard-overlay-full-screen" data-stellar-background-ratio="0.5">
            <div class="billboard_wrapper container-small">
                <header class="heading_group">
                    <h2 class="heading-uppercase-light-strikethrough-spaced-size-5"><span><?php echo $options['headline'] ?></span></h2>
                    <h3 class="heading-uppercase-heavy-size-9 font-2">What's your theme?</h3>
                </header>
                <p class="lede">Kayzen is a powerful themeing framework for architecting CSS for large, modular & scalable web applications. Built using only Sass (SCSS), Kayzen has the customizing power of a complete CMS theme.</p>
                <p class="button_group">
                    <a class="button-size-4-border-white" href="#ALAN">Explore The Potential</a>
                </p>
            </div>
            <nav class="slide-nav">
                <button class="slide-prev button-icon-border-size-3-white"><i class="fa fa-angle-left"></i></button>
                <button class="slide-next button-icon-border-size-3-white"><i class="fa fa-angle-right"></i></button>
            </nav>
            <a href="#key-features" class="scroll-wheel"></a>
        </section>
    <?php } else if ($options['type'] == 'videoBg') { ?>
        <section class="billboard-videoBg-full-screen">
            <div class="auto-resizable-iframe" data-iframe-height="56.5%">
                <div>
                    <iframe src="https://player.vimeo.com/video/87701971?autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </section>
    <?php } else if ($options['type'] == 'default') { ?>
        <section class="billboard-overlay<?php echo '-'.$options['modifiers'] ?>" data-stellar-background-ratio="0.5">
            <div class="billboard_wrapper container">
                <header class="heading_group<?php if($options['countdown']) echo '-small' ?>">
                    <h2 class="heading-uppercase-light-strikethrough-spaced-size-4"><span><?php echo $options['headline'] ?></span></h2>
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
                                date : '1 March 2016 09:00:00',
                                format: 'on'
                            });
                        });
                    </script>
                <?php } ?>
            </div>
        </section>
    <?php } ?>

<?php } ?>