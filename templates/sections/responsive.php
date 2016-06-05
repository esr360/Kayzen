 <?php function responsive($custom = array()) {

    $options = array_merge([
        'greyscale' => false
    ], $custom); ?>
 
    <!-- Responsive -->
    <section class="section-primary-dot-map" id="mobile-optimized">
        
        <!-- Responsive Header -->
        <header class="heading_group-large has-icon text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Responsive</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Mobile Optimized</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-mobile"></i>
                </div>
            </div>
        </header>
        
        <div class="container-section">
            
            <div class="row-flow row-waffle-large">
                
                <!-- Responsive Features -->
                <div class="widget_group span-3 break-3-half break-2-full text-right-break-2 va-middle">
                    <div class="widget-stacked">   
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Smooth Performance</h3>
                            <h4 class="heading-light-uppercase-brand-1">CSS3 Animations</h4>
                        </header>                        
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-bar-chart"></i>
                        </div> 
                        <p>All jQuery plugins and CSS elements have been built with mobiles in mind, ensuring any animations run smoothly.</p>
                    </div>
                    <div class="widget-stacked">
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Swipe/Drag Support</h3>
                            <h4 class="heading-light-uppercase-brand-1">Touch Screen Devices</h4>
                        </header>                       
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-arrows-h"></i>
                        </div>
                        <p>Kayzen is touch/swipe ready for mobile touch screen devices for various UI elements such as carousels.</p>
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
                </div>
                
                <!-- Responsive Graphics -->
                <div class="span-6 text-center min-break-3 va-middle">
                    <div class="center-xy span-6<?php if ($options['greyscale']) echo ' greyscale' ?>">
                        <img 
                            class="mobile-graphic-<?php echo $GLOBALS['iphone-colors'][0] ?>" 
                            src="<?php echo appDir ?>/images/mobile-screen-1.jpg" 
                            data-trigger="transform: translate(-45%, -50%) translateZ(0) scale(0.85)"
                            data-hover="left: -25%"
                            alt=""
                        />
                        <img 
                            class="mobile-graphic-<?php echo $GLOBALS['iphone-colors'][1] ?>" 
                            src="<?php echo appDir ?>/images/mobile-screen-5.jpg" 
                            data-trigger="transform: translate(45%, -50%) translateZ(0) scale(0.85)"
                            data-hover="right: -25%"
                            alt=""
                        />
                        <img 
                            class="mobile-graphic-<?php echo $GLOBALS['iphone-colors'][2] ?>" 
                            src="<?php echo appDir ?>/images/mobile-screen.png" 
                            data-hover="transform: scale(1.05) translateY(-47.5%) translateZ(0)"
                            alt=""
                        />
                    </div>
                </div>
                
                <!-- Responsive Features -->
                <div class="widget_group span-3 break-3-half break-2-full va-middle">
                    <div class="widget-stacked">                  
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-mobile"></i>
                        </div> 
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Mobile Visibility</h3>
                            <h4 class="heading-light-uppercase-brand-1">Show/Hide On Mobiles</h4>
                        </header>   
                        <p>Using the custom helper classes you can easily show or hide elements specifically for mobile devices.</p>
                    </div>
                    <div class="widget-stacked">               
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-tablet"></i>
                        </div> 
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Mobile Menu</h3>
                            <h4 class="heading-light-uppercase-brand-1">Touch-Friendly Nav</h4>
                        </header>      
                        <p>Easily navigate pages using the mobile-friendly flyout navigation which offers unlimited nesting.</p>
                    </div>
                    <div class="widget-stacked">                  
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-th"></i>
                        </div> 
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Kayzen GS</h3>
                            <h4 class="heading-light-uppercase-brand-1">Custom Grid System</h4>
                        </header>   
                        <p>Kayzen is built on our own custom grid system: <a href="https://github.com/esr360/Kayzen-GS" target="blank">Kayzen GS</a>, which is based off <code>inline-block</code> columns.</p>
                    </div>
                </div>
                
            </div><!-- Row -->
            
        </div><!-- Container -->
        
    </section><!-- Responsive -->
    
<?php } ?>