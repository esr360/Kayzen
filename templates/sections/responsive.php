 <?php function responsive($custom = array()) { ?>

    <?php $options = array_merge(array(
        'iphone-colors' => array(
            'white', 'purple', 'blue'
        ),
        'greyscale' => false
    ), $custom); ?>
 
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
            
            <div class="row-flow">
                
                <!-- Responsive Features -->
                <div class="widget_group span-3 break-3-half break-2-full va-middle text-right">
                    <div class="widget-stacked">   
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Fast Performance</h3>
                            <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                        </header>                        
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-bar-chart"></i>
                        </div> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                    </div>
                    <div class="widget-stacked">
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Lazy Loading</h3>
                            <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                        </header>                       
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-refresh"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                    </div>
                    <div class="widget-stacked">
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Retina Ready</h3>
                            <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                        </header>                        
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-eye"></i>
                        </div> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                    </div>
                </div>
                
                <!-- Responsive Graphics -->
                <div class="span-6 va-middle text-center min-break-3">
                    <div class="center-xy span-6<?php if ($options['greyscale']) echo ' greyscale' ?>">
                        <img 
                            class="mobile-graphic-<?php echo $options['iphone-colors'][0] ?>" 
                            src="<?php echo appDir ?>/images/mobile-screen.png" 
                            data-trigger="transform: translate(-45%, -50%) translateZ(0) scale(0.85)"
                            data-hover="left: -25%"
                            alt=""
                        / >
                        <img 
                            class="mobile-graphic-<?php echo $options['iphone-colors'][1] ?>" 
                            src="<?php echo appDir ?>/images/mobile-screen.png" 
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
                
                <hr class="hrule-stripes-large max-break-2" />
                
                <!-- Responsive Features -->
                <div class="widget_group span-3 break-3-half break-2-full va-middle">
                    <div class="widget-stacked">                  
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-user"></i>
                        </div> 
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">User Experience</h3>
                            <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                        </header>   
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                    </div>
                    <div class="widget-stacked">               
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-tablet"></i>
                        </div> 
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">Mobile Menu</h3>
                            <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                        </header>      
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                    </div>
                    <div class="widget-stacked">                  
                        <div class="widget_icon-inline button-icon-plain-size-7">
                            <i class="fa fa-th-large"></i>
                        </div> 
                        <header class="widget_header-inline heading_group">
                            <h3 class="heading-heavy-size-4">User Panel</h3>
                            <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                        </header>   
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                    </div>
                </div>
                
            </div><!-- Row -->
            
        </div><!-- Container -->
        
    </section><!-- Responsive -->
    
<?php } ?>