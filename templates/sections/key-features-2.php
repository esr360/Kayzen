<?php function keyFeatures2($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option'   => 'VALUE'
    ), $custom); ?>
    
    <!-- Key Features -->
    <section class="section-primary">
        
        <!-- Key Features Header -->
        <header class="heading_group-large has-icon text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Key Features</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Build Pro Websites</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
        </header>
        
        <div class="container">
            
            <!-- Features Row -->
            <div class="widget_group row-flow row-waffle stack-break-2 text-center">
                
                <!-- Feature 1 -->
                <div class="widget-borderTop-highlight-block-scale span-3 break-4-half break-2-full">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">100% Responsive</h3>
                        <h4 class="heading-light-uppercase-brand-1">Optimized for all devices</h4>
                    </header>
                    <p>Kayzen has been built from the ground up using our own custom grid system; <a href="https://github.com/esr360/Kayzen-GS" target="blank">Kayzen GS</a>.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="widget-borderTop-highlight-block-scale span-3 break-4-half break-2-full">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-clipboard"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">Retina Ready</h3>
                        <h4 class="heading-light-uppercase-brand-1">Crystal clear display</h4>
                    </header>
                    <p>Kayzen is optimised for devices with retina displays, offering a crystal clear experience.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="widget-borderTop-highlight-block-scale span-3 break-4-half break-2-full">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-photo"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">Premade Demos</h3>
                        <h4 class="heading-light-uppercase-brand-1">Get Setup Instantly</h4>
                    </header>
                    <p>Kayzen comes with a bunch of premade demos which are built using the provided templates.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="widget-borderTop-highlight-block-scale span-3 break-4-half break-2-full">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-eyedropper"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">Unlimited Colors</h3>
                        <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                    </header>
                    <p>Change the entire color scheme of your theme by changing just one variable in the configuration.</p>
                </div>
                
            </div><!-- Features Row -->
            
        </div><!-- container -->
        
    </section><!-- Key Features -->

<?php } ?>