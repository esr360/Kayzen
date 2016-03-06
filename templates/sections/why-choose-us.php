<?php function whyChooseUs($custom = array()) { ?>

    <?php $options = array_merge(array( 
        'cta-modifiers'   => null
    ), $custom); ?>
    
    <section class="section-primary-dot-map" id="why-choose-us">
    
        <header class="heading_group-large text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Why Choose Us</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>We Thrive On Success</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
            
        <div class="container">
            
            <div class="row-flow row-waffle-large">
                
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
                    <img class="globe" src="<?php echo appDir ?>/images/custom-graphic-1.png" alt="" />
                </div>
                
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
        
    </section>

<?php } ?>