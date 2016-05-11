<?php function _homepage4($custom = []) {

    $options = array_replace_recursive([
        'billboard' => [
            'type'          => 'homepage',
            'modifiers'     => '',
            'tag-line'      => '',
            'wrapper-class' => 'container text-left',
            'heading_group' => false,
            'headline'      => '',
            'title'         => [
                'heading-uppercase-heavy-highlight-dark-size-8 font-2',
                '<b>Welcome to Kayzen</b><br /><b>A Unique Theme Framework</b>'
            ],
            'ctas'          => [
                [
                    'button-size-4-grey-6',
                    '#',
                    'Purchase Now'
                ],
                [
                    'button-size-4-primary',
                    '#key-features',
                    'Explore The Potential'
                ]
            ],
            'bg-img'        => stockImage('demo/stock-5.jpg'),
            'bg-parallax'   => false,
            'fade-parallax' => true
        ],
        'blog-link'         => pageLink('blog/single.php', 'pages', false),
        'iphone-colors'     => $GLOBALS['iphone-colors']
    ], $custom);

    billboard($options['billboard']);
    
?>
            
<section class="section" id="key-features">

    <header class="heading_group-block has-icon text-center">
        <div class="container-small">
            <h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Key Features</span></h4>
            <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Build Pro Websites</span></h2>
            <div class="heading_icon">
                <i class="fa fa-star-o"></i>
            </div>
        </div>
    </header>
    
    <div class="row-no-gutter">
        
        <?php
        
            articleItem(array(
                'type'   => 'portfolio',
                'matrix' => true,
                'span'   => 3,
                'class'  => 'break-3-half break-1-full'
            ));
            
            articleItem(array(
                'type'   => 'portfolio',
                'matrix' => true,
                'span'   => 3,
                'class'  => 'break-3-half break-1-full'
            ));
            
            articleItem(array(
                'type'   => 'portfolio',
                'matrix' => true,
                'span'   => 3,
                'class'  => 'break-3-half break-1-full'
            ));
            
            articleItem(array(
                'type'   => 'portfolio',
                'matrix' => true,
                'span'   => 3,
                'class'  => 'break-3-half break-1-full'
            ));
        
            articleItem(array(
                'type'   => 'portfolio',
                'matrix' => true,
                'span'   => 3,
                'class'  => 'break-3-half break-1-full'
            ));
            
            articleItem(array(
                'type'   => 'portfolio',
                'matrix' => true,
                'span'   => 3,
                'class'  => 'break-3-half break-1-full'
            ));
            
            articleItem(array(
                'type'   => 'portfolio',
                'matrix' => true,
                'span'   => 3,
                'class'  => 'break-3-half break-1-full'
            ));
            
            articleItem(array(
                'type'   => 'portfolio',
                'matrix' => true,
                'span'   => 3,
                'class'  => 'break-3-half break-1-full'
            ));
            
            ?>
        
    </div>
    
</section><!-- Key Features -->

<?php
    
    blocksWithQuote();
    
?>

<section 
    class="section-secondary-full-screen-overlay-alt"
    data-stellar-background-ratio="0.8"
    style="background-image: url('<?php echo stockImage('demo/stock-7.jpg') ?>')"
>
    <div class="container v-center text-right">
        <div class="row">
            <div class="span-5 va-middle text-center">
                <div class="center-xy span-6 min-break-3">
                    <img 
                        class="mobile-graphic-<?php echo $options['iphone-colors'][0] ?>" 
                        src="<?php echo appDir ?>/images/mobile-screen-1.jpg" 
                        data-trigger="transform: translate(-45%, -50%) translateZ(0) scale(0.85)"
                        data-hover="left: -25%"
                        alt=""
                    / >
                    <img 
                        class="mobile-graphic-<?php echo $options['iphone-colors'][1] ?>" 
                        src="<?php echo appDir ?>/images/mobile-screen-2.jpg" 
                        data-trigger="transform: translate(45%, -50%) translateZ(0) scale(0.85)"
                        data-hover="right: -25%"
                        alt=""
                    / >
                    <img 
                        class="mobile-graphic-<?php echo $options['iphone-colors'][2] ?>" 
                        src="<?php echo appDir ?>/images/mobile-screen.png" 
                        data-hover="transform: scale(1.05) translateY(-47.5%) translateZ(0)"
                        alt=""
                    / >
                </div>
            </div>
            <div class="span-7 va-middle">
                <h3 class="heading-uppercase-heavy-highlight-dark-size-6 font-2">
                    <b>Seeing things clearly is simple when you look at the bigger picture</b>
                </h3>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque, eros vel scelerisque vestibulum, neque nunc lobortis ex, a venenatis enim nisi sit amet purus. Praesent lacinia et nulla a facilisis. Sed aliquam pharetra ante non efficitur. Sed malesuada mauris quis congue porttitor.</p>
                <div class="button_group">
                    <a class="button-size-4-primary" href="#">Purchase Now</a>
                    <a class="button-size-4-border-white" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    
    <header class="heading_group-block text-center">
        <div class="container-small">
            <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Our Blog</span></h4>
            <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Keep Up To Date</span></h2>
            <div class="heading_icon">
                <i class="fa fa-magic"></i>
            </div>
        </div>
    </header>
    
</section>
    
<div class="row-no-gutter text-center">
            
    <a href="<?php echo $options['blog-link'] ?>" class="widget-spectrum-quarter-tub span-3 break-4-half break-2-full">
        <div class="widget_lid">
            <div class="widget_sticker">
                <div class="widget_icon-light button-icon-plain-size-8">
                    <i class="fa fa-battery-half"></i>
                </div>
                <header class="heading_group">
                    <h4 class="heading-size-3">Kayzen Is Released</h4>
                </header>
            </div>
        </div>
        <div class="widget_content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
        </div>
        <div class="button-block-grey-5-fat relative">Read More</div>
    </a>
    
    <a href="<?php echo $options['blog-link'] ?>" class="widget-spectrum-quarter-tub span-3 break-4-half break-2-full">
        <div class="widget_lid">
            <div class="widget_sticker">
                <div class="widget_icon-light button-icon-plain-size-8">
                    <i class="fa fa-bar-chart"></i>
                </div>
                <header class="heading_group">
                    <h4 class="heading-size-3">Lorem Ipsum</h4>
                </header>
            </div>
        </div>
        <div class="widget_content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
        </div>
        <div class="button-block-grey-5-fat relative">Read More</div>
    </a>
    
    <a href="<?php echo $options['blog-link'] ?>" class="widget-spectrum-quarter-tub span-3 break-4-half break-2-full">
        <div class="widget_lid">
            <div class="widget_sticker">
                <div class="widget_icon-light button-icon-plain-size-8">
                    <i class="fa fa-desktop"></i>
                </div>
                <header class="heading_group">
                    <h4 class="heading-size-3">Dolor Sit Amet</h4>
                </header>
            </div>
        </div>
        <div class="widget_content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
        </div>
        <div class="button-block-grey-5-fat relative">Read More</div>
    </a>
    
    <a href="<?php echo $options['blog-link'] ?>" class="widget-spectrum-quarter-tub span-3 break-4-half break-2-full">
        <div class="widget_lid">
            <div class="widget_sticker">
                <div class="widget_icon-light button-icon-plain-size-8">
                    <i class="fa fa-image"></i>
                </div>
                <header class="heading_group">
                    <h4 class="heading-size-3">Kayzen Is The Best</h4>
                </header>
            </div>
        </div>
        <div class="widget_content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus...</p>
        </div>
        <div class="button-block-grey-5-fat relative">Read More</div>
    </a>
    
</div>

<section 
    class="section-primary hide-overflow center-mobile"
    style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
>

    <div class="container">
        <div class="row">
            <div class="span-8">
                <header class="heading_group">
                    <h3 class="heading-size-6">Mobile Optimized</h3>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper nisi eu metus accumsan aliquet. Mauris a diam ac lectus facilisis faucibus. Sed convallis, ex et viverra suscipit, dui neque accumsan magna, et auctor leo ligula non ipsum. Phasellus ullamcorper interdum nisl et ornare.</p>
                <div class="button_group">
                    <a class="button-border-primary" href="#">Purchase Now</a>
                    <a class="button-border" href="#">Read More</a>
                </div>
            </div>
            <div class="section_graphic span-4 text-center min-break-3">
                <img 
                    class="span-10" 
                    src="<?php echo appDir ?>/images/tablet-base-dark.png"
                    data-trigger-reverse="transform: translateY(50%)"
                    alt=""
                />
            </div>
        </div>
    </div>
    
</section>

<?php 
    
    shareTheLove();
    
} ?>