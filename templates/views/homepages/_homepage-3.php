<?php function _homepage3($custom = []) {

    $options = array_replace_recursive([
        'billboard' => [
            'type' => 'homepage',
            'wrapper-class' => 'container text-left',
            'headline'      => [
                'text' => 'Welcome to Kayzen'
            ],
            'ctas' => [
                [
                    'button-size-4-white',
                    '#',
                    'Purchase Now'
                ],
                [
                    'button-size-4-border-white',
                    '#s-welcome',
                    'Explore The Potential'
                ]
            ],
            'wheel-anchor' => '#s-welcome'
        ]
    ], $custom);

    billboard($options['billboard']);
    
?>

<section class="section-primary">
    
    <header class="heading_group text-center">
        <div class="container-small">
            <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>What is Kayzen?</span></h4>
            <h2 class="heading-uppercase-heavy-size-6 font-2"><span>Multipurpose Theme</span></h2>
            <div class="heading_icon">
                <i class="fa fa-magic"></i>
            </div>
            <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis dolor ut euismod pellentesque. Vivamus mattis cursus urna, non gravida purus pulvinar ac. Nunc dignissim velit justo, id aliquet neque cursus vitae. Nulla mattis purus sed posuere aliquet. Mauris vel nisl turpis.</p>
        </div>
    </header>
    
</section>

<div class="row-block fixed-table text-center">
    <section 
        class="section-secondary-overlay-deep bg-cover span-6 va-middle"
        style="background-image: url('<?php echo stockImage('demo/stock-12.jpg') ?>')"
    >
        <div class="container-small">
            <h3 class="heading-size-5">Responsive Grid System</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis dolor ut euismod pellentesque. Vivamus mattis cursus urna, non gravida purus pulvinar ac. Nunc dignissim velit justo, id aliquet neque cursus vitae. Nulla mattis purus sed posuere aliquet.</p>
            <div class="button_group">
                <a href="#" class="button-oval-white">View Demo</a>
                <a href="http://themeforest.net/user/skyux/portfolio" target="blank" class="button-oval-border-white">Purchase Theme</a>
            </div>
        </div>
    </section>
    <section 
        class="section-secondary-overlay-alt span-6 va-middle"
        style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
    >
        <div class="container">
            <h3 class="heading-size-5">UI Elements</h3>
            <div id="elements-carousel" class="owl-carousel">
                <a href="<?php pageLink('modules/elements/accordions.php') ?>" class="widget">
                    <div class="button-icon-circle-border-white-size-7">
                        <i class="fa fa-chevron-circle-down"></i>
                    </div>
                    <h3 class="heading-size-3">Accordions</h3>
                </a>
                <a href="<?php pageLink('modules/elements/buttons.php') ?>" class="widget">
                    <div class="button-icon-circle-border-white-size-7">
                        <i class="fa fa-keyboard-o"></i>
                    </div>
                    <h3 class="heading-size-3">Buttons</h3>
                </a>
                <a href="<?php pageLink('modules/elements/carousels.php') ?>" class="widget">
                    <div class="button-icon-circle-border-white-size-7">
                        <i class="fa fa-arrows-h"></i>
                    </div>
                    <h3 class="heading-size-3">Carousels</h3>
                </a>
                <a href="<?php pageLink('modules/elements/modals.php') ?>" class="widget">
                    <div class="button-icon-circle-border-white-size-7">
                        <i class="fa fa-square-o"></i>
                    </div>
                    <h3 class="heading-size-3">Modals</h3>
                </a>
                <a href="<?php pageLink('modules/elements/tabs.php') ?>" class="widget">
                    <div class="button-icon-circle-border-white-size-7">
                        <i class="fa fa-folder-o"></i>
                    </div>
                    <h3 class="heading-size-3">Tabs</h3>
                </a>
            </div>
            <nav class="slide-nav">
                <button class="slide-prev button-icon-border-circle-size-3"><i class="fa fa-angle-left"></i></button>
                <button class="slide-next button-icon-border-circle-size-3"><i class="fa fa-angle-right"></i></button>
            </nav>
        </div>
        <script>
            $(document).ready(function() {
            
                var elementsSelector = $("#elements-carousel");
                
                elementsSelector.owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 30
                });

                elementsSelector.find("+ .slide-nav .slide-next").click(function() {
                    elementsSelector.trigger('next.owl.carousel');
                });
                elementsSelector.find("+ .slide-nav .slide-prev").click(function() {
                    elementsSelector.trigger('prev.owl.carousel');
                });
                
                function delayCarousel(carousel, delay) { 
                    setTimeout(function() {
                        carousel.owlCarousel('invalidate', 'all').owlCarousel('refresh');
                    }, delay); 
                }
                
                $(window).load(function() {
                    delayCarousel(elementsSelector, baseTransition)
                });
                
                $('#toggleHeader').click(function() {
                    delayCarousel(elementsSelector, baseTransition)
                });
                
            });
        </script>
    </section>
</div>

<section class="section-primary">
    
    <header class="heading_group-large text-center">
        <div class="container-small">
            <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Features</span></h4>
            <h2 class="heading-uppercase-heavy-size-6 font-2"><span>Why We're The Best</span></h2>
            <div class="heading_icon">
                <i class="fa fa-magic"></i>
            </div>
            <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
        </div>
    </header>
        
    <div class="container">
        
        <!-- Features Row -->
        <div class="widget_group row-flow row-waffle-large text-center">
            
            <!-- Feature 1 -->
            <div class="widget span-3 break-3-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-desktop"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">100% Responsive</h3>
                    <h4 class="heading-light-uppercase-brand-1">Optimized For All Devices</h4>
                </header>
                <p>Kayzen has been built using our own custom responsive grid system; Kayzen GS, which was built for this theme.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="widget span-3 break-3-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-eyedropper"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">Unlimited Colors</h3>
                    <h4 class="heading-light-uppercase-brand-1">Any Color You Want</h4>
                </header>
                <p>Change the entire color scheme of your theme by changing just one variable in the configuration.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="widget span-3 break-3-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-desktop"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">Premade Demos</h3>
                    <h4 class="heading-light-uppercase-brand-1">Get Setup Instantly</h4>
                </header>
                <p>Kayzen comes with a bunch of premade demos which are built using the provided templates.</p>
            </div>
            
            <!-- Feature 4 -->
            <div class="widget span-3 break-3-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-google"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">SEO Friendly</h3>
                    <h4 class="heading-light-uppercase-brand-1">Coded For Search Engines</h4>
                </header>
                <p>Kayzen's 100% validated HTML5 code means your website will be SEO friendly out the box.</p>
            </div>
            
        </div><!-- Features Row -->
    
    </div>
    
</section>

<section 
    class="section-secondary-overlay-alt" 
    data-stellar-background-ratio="0.8"
    style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
>
    <div class="container">
        <div class="row row-waffle-large">
            <div class="span-6 va-middle">
                <img src="<?php echo appDir ?>/images/device-outline.png">
            </div>
            <div class="span-6 va-middle">
                <header class="heading_group">
                    <h2 class="heading-heavy-size-5-uppercase font-2">Kayzen is the Best</h2>
                    <h3 class="heading-light-brand-1-size-4">A Modern Template For Any Project</h3>
                </header>
                <p>Kayzen has been robustly built using the latest tools & technologies, and will work on any common browser or device giving your users the best experience possible.</p>
                <ul class="list-arrow min-break-2">
                    <li>100% validated HTML5 code</li>
                    <li>Modular Sass architecture</li>
                    <li>Completely responsive & mobile optimized</li>
                </ul>
                <div class="button_group">
                    <a href="#" class="button-oval-primary">View Demo</a>
                    <a href="http://themeforest.net/user/skyux/portfolio" target="blank" class="button-oval-border-white">Purchase Theme</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 

    shareTheLove();
    
    googleMap();
    
} ?>