<?php function billboard($custom = []) {

    $options = array_replace_recursive([
        'type'          => 'default', // 'default' | 'homepage' | 'videoBg'
        'modifiers'     => '-overlay',
        'wrapper-class' => '',
        'heading_group' => true,
        'headline'      => [
            'class' => 'heading-uppercase-light-strikethrough-spaced-size-4-responsive',
            'text'  => 'Kayzen'
        ],
        'title'         => [
            'class' => 'heading-uppercase-heavy-size-8 font-2',
            'text'  => 'Make Theming Great Again'
        ],
        'tag-line'      => null,
        'ctas'          => [
            [
                'button-size-4-border-white',
                '#key-features',
                'Explore The Potential'
            ]
        ],
        'carousel'      => false,
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
        
            <?php if ($options['carousel']) { ?><div class="billboard_carousel owl-carousel"><?php } ?>
                
                <div class="billboard_wrapper container <?php echo $options['wrapper-class'] ?>">
                    <div class="billboard_snap" <?php if($options['fade-parallax']) { ?>id="billboard-fade-parallax"<?php } ?>>
                        <?php if($options['heading_group']) { ?><header class="heading_group hide-overflow"><?php } ?>
                            <?php if($options['headline']) {?>
                                <h2 class="<?php echo $options['headline']['class'] ?>">
                                    <?php echo $options['headline']['text'] ?>
                                </h2>
                            <?php } ?>
                            <h3 class="<?php echo $options['title']['class'] ?>"><?php echo $options['title']['text'] ?></h3>
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
                
                <?php if ($options['carousel']) { ?>
                    <div class="billboard_wrapper container" data-billboard-bg="<?php echo stockImage('demo/stock-6.jpg') ?>">
                        <div class="row">
                            <div class="span-6 text-center va-middle min-break-3">
                                <div class="span-10">
                                    <div class="desktop-graphic">
                                        <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                                        <div class="desktop-graphic_image" style="background-image: url('<?php echo stockImage('demo/stock-6.jpg') ?>')"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="span-6 va-middle">
                                <header class="heading_group">
                                    <h3 class="heading-size-5-light">Quick Sign-Up Form</h3>
                                </header>
                                <form class="form-fauxPlaceholders">
                                    <div class="form_group-has-icon">
                                        <input type="email" class="form_input-plain" name="billboardEmail" id="billboardEmail" placeholder="Ex: hello@skyux.com" required="">
                                        <i class="form_icon fa fa-envelope"></i>
                                        <label for="billboardEmail">Email</label>
                                    </div>
                                    <div class="form_group-has-icon">
                                        <input type="text" class="form_input-plain" name="billboardUsername" id="billboardUsername" placeholder="Ex: SkyUX" required="">
                                        <i class="form_icon fa fa-user"></i>
                                        <label for="billboardUsername">Username</label>
                                    </div>
                                    <div class="form_group-has-icon">
                                        <input type="password" class="form_input-plain" name="billboardPassword" id="billboardPassword" placeholder="••••••••" required="">
                                        <i class="form_icon fa fa-key"></i>
                                        <label for="billboardPassword">Password</label>
                                    </div>
                                    <div class="object">
                                        <button type="submit" class="button-block-primary">Sign Up</button>
                                    </div>
                                </form>
                                <h3 class="heading min-break-3">Sign-up using...</h3>
                                <div class="row-block text-center stack-break-0">
                                    <a href="#" class="span-4 button-acute-facebook">Facebook</a>
                                    <a href="#" class="span-4 button-acute-twitter">Twitter</a>
                                    <a href="#" class="span-4 button-acute-google-plus">Google Plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="billboard_wrapper container" data-billboard-bg="<?php echo stockImage('demo/stock-3.jpg') ?>">
                        <div class="billboard_snap">
                            <h2 class="heading-size-8-heavy-uppercase-highlight-dark font-2">
                                <b>This is Kayzen<br />A Unique Theme Framework</b>
                            </h2>
                            <div class="button_group">
                                <a href="#" class="button-size-4-grey-5">Learn More</a>
                                <a href="#" class="button-size-4-border-white">Purchase Kayzen</a>
                            </div>
                        </div>
                    </div>
                
                <?php } ?>
                
            <?php if ($options['carousel']) { ?></div><?php } ?>
            
            <?php if ($options['carousel']) { ?>
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
        <section class="billboard<?php if ($options['modifiers']) echo '-'.$options['modifiers'] ?>" <?php echo $options['bg-parallax'] ?>>
            <div class="billboard_wrapper container text-center">
                <div class="billboard_snap">
                    <header class="heading_group<?php if($options['countdown']) echo '-small' ?>">
                        <h2 class="heading-uppercase-light-strikethrough-spaced-size-4-responsive"><span><?php echo $options['headline']['text'] ?></span></h2>
                        <h3 class="heading-uppercase-heavy-size-8 font-2"><?php echo $options['title']['text'] ?></h3>
                        <?php if ($options['tag-line']) { ?>
                            <h4 class="heading-size-2-light"><i><?php echo $options['tag-line'] ?></i></h4>
                        <?php } if ($options['search']) { ?>
                            <form class="form">
                                <div class="form_group-small span-4">
                                    <button type="submit" class="button-icon-primary-size-3"><i class="fa fa-search"></i></button>
                                    <input type="text" class="form_input-plain" placeholder="Search for a page" required="">
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
                                    date : '23 July 2016 09:00:00',
                                    format : 'on'
                                });
                            });
                        </script>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>

<?php } ?>