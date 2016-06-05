<?php function whyChooseUs($custom = array()) {

    $options = array_merge(array(
        'title' => array(
            'content' => 'Why Choose Us',
            'modifiers' => 'heading-uppercase-light-brand-1-spaced-size-4',
            'highlight' => false
        ),
        'sub-title' => array(
            'content' => 'We Thrive On Success',
            'modifiers' => 'heading-uppercase-heavy-size-7 font-2',
            'highlight' => false
        )
    ), $custom); ?>
    
    <section class="section-primary-dot-map" id="why-choose-us">
    
        <header class="heading_group-large text-center">
            <div class="container-small">
                <h4 class="<?php echo $options['title']['modifiers'] ?>">
                    <?php if ($options['title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        <?php echo $options['title']['content'] ?>
                    <?php if ($options['title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h4>
                <h2 class="<?php echo $options['sub-title']['modifiers'] ?>">
                    <?php if ($options['sub-title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        <?php echo $options['sub-title']['content'] ?>
                    <?php if ($options['sub-title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
            
        <div class="container">
            
            <div class="row-flow row-waffle-large">
                
                <!-- Responsive Features -->
                <div class="widget_group span-3 break-3-half break-2-full text-right-break-2 va-middle">
                    <div class="widget-stacked">   
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">100% Responsive</h3>
                            <h4 class="heading-light-uppercase-brand-1">Optimised For Mobiles</h4>
                        </header>                        
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-tablet"></i>
                        </div> 
                        <p>Kayzen has been built using our own custom responsive grid system; Kayzen GS, which was built for this theme.</p>
                    </div>
                    <div class="widget-stacked">
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Retina Ready</h3>
                            <h4 class="heading-light-uppercase-brand-1">Crystal Clear Display</h4>
                        </header>                       
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-eye"></i>
                        </div>
                        <p>Kayzen is optimised for devices with retina displays, offering a crystal clear high-res experience.</p>
                    </div>
                    <div class="widget-stacked">
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Unlimited Colors</h3>
                            <h4 class="heading-light-uppercase-brand-1">Any Color You Want</h4>
                        </header>                        
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-eyedropper"></i>
                        </div> 
                        <p>Change the entire color scheme of your theme by changing just one variable in the configuration.</p>
                    </div>
                </div>
                
                <!-- Responsive Graphics -->
                <div class="span-6 va-middle text-center min-break-3">
                    <img class="<?php if ($GLOBALS['theme'] !== 'Kayzen') echo 'greyscale' ?>" src="<?php echo appDir ?>/images/custom-graphic-1.png" alt="" />
                </div>
                
                <!-- Responsive Features -->
                <div class="widget_group span-3 break-3-half break-2-full va-middle">
                    <div class="widget-stacked">                  
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-desktop"></i>
                        </div> 
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Premade Demos</h3>
                            <h4 class="heading-light-uppercase-brand-1">Get Setup Instantly</h4>
                        </header>   
                        <p>Kayzen comes with a bunch of premade demos which are built using the provided templates.</p>
                    </div>
                    <div class="widget-stacked">               
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-cubes"></i>
                        </div> 
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Modular Structure</h3>
                            <h4 class="heading-light-uppercase-brand-1">Take Control</h4>
                        </header>      
                        <p>Kayzen is built using our own custom framework; <a href="https://github.com/esr360/Synergy" target="blank">Synergy</a>, a revolutionary way to build modular themes.</p>
                    </div>
                    <div class="widget-stacked">                  
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-google"></i>
                        </div> 
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">SEO Friendly</h3>
                            <h4 class="heading-light-uppercase-brand-1">Rank Better</h4>
                        </header>   
                        <p>Kayzen's 100% validated HTML5 code means your website will be SEO friendly out the box.</p>
                    </div>
                </div>
                
            </div><!-- Row -->
            
        </div><!-- Container -->
        
    </section>

<?php } ?>