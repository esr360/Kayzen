<?php function moreFeatures($custom = array()) {

    $options = array_merge([
        'id' => null
    ], $custom); ?>  
  
    <!-- More Features -->
    <section class="section-primary" <?php if ($options['id']) { ?>id="<?php echo $options['id'] ?>"<?php } ?>>
    
        <!-- More Features Header -->
        <header class="heading_group-large has-icon text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>More Features</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>It Keeps On Going</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-cubes"></i>
                </div>
            </div>
        </header>
        
        <div class="container">
            
            <!-- More Features Row -->
            <div class="row-flow row-waffle-large">
                
                <!-- Feature 1 -->
                <div class="widget span-4 break-3-half break-2-full">                     
                    <div class="widget_icon-inline button-icon-plain-size-6">
                        <i class="fa fa-spinner"></i>
                    </div>  
                    <header class="widget_header-inline heading_group">
                        <h3 class="heading-heavy-uppercase">Infinite Ajax Scroll</h3>
                        <h4 class="heading-light-uppercase-brand-1-size-2">Included free - $12 Value</h4>
                    </header>     
                    <p>Infinite Ajax Scroll is an SEO friendly infinite scroll plugin for jQuery, and comes included free with Kayzen.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="widget span-4 break-3-half break-2-full">                     
                    <div class="widget_icon-inline button-icon-plain-size-6">
                        <i class="fa fa-google"></i>
                    </div>  
                    <header class="widget_header-inline heading_group">
                        <h3 class="heading-heavy-uppercase">Google Fonts</h3>
                        <h4 class="heading-light-uppercase-brand-1-size-2">Access to over 700 fonts</h4>
                    </header>     
                    <p>Kayzen uses Google Fonts, allowing you to easily modify the typography of your theme.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="widget span-4 break-3-half break-2-full">                     
                    <div class="widget_icon-inline button-icon-plain-size-6">
                        <i class="fa fa-magic"></i>
                    </div>  
                    <header class="widget_header-inline heading_group">
                        <h3 class="heading-heavy-uppercase">Isotope Plugin</h3>
                        <h4 class="heading-light-uppercase-brand-1-size-2">Easily Create Masonry Grids</h4>
                    </header>     
                    <p>Commercial license included ($25 value) - easily create filterable and masonry layouts.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="widget span-4 break-3-half break-2-full">                     
                    <div class="widget_icon-inline button-icon-plain-size-6">
                        <i class="fa fa-arrows-h"></i>
                    </div>  
                    <header class="widget_header-inline heading_group">
                        <h3 class="heading-heavy-uppercase">OWl-Carousel 2</h3>
                        <h4 class="heading-light-uppercase-brand-1-size-2">Touch Friendly Carousels</h4>
                    </header>     
                    <p>Create responsive and touch friendly carousels with the utmost of ease thanks to this fantastic plugin.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="widget span-4 break-3-half break-2-full">                     
                    <div class="widget_icon-inline button-icon-plain-size-6">
                        <i class="fa fa-share-square-o"></i>
                    </div>  
                    <header class="widget_header-inline heading_group">
                        <h3 class="heading-heavy-uppercase">Social Share Feed</h3>
                        <h4 class="heading-light-uppercase-brand-1-size-2">Fully Working Share Count</h4>
                    </header>     
                    <p>Get the amount of shares/likes for any given page for various different social media websites.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="widget span-4 break-3-half break-2-full">                     
                    <div class="widget_icon-inline button-icon-plain-size-6">
                        <i class="fa fa-flag"></i>
                    </div>  
                    <header class="widget_header-inline heading_group">
                        <h3 class="heading-heavy-uppercase">Font Awesome Icons</h3>
                        <h4 class="heading-light-uppercase-brand-1-size-2">Retina Ready Font Icons</h4>
                    </header>     
                    <p>Get instant access to over 600 customizable vector icons to use anywhere in your project.</p>
                </div>
                
                <!-- Feature 7 -->
                <div class="widget span-4 break-3-half break-2-full">                     
                    <div class="widget_icon-inline button-icon-plain-size-6">
                        <i class="fa fa-object-ungroup"></i>
                    </div>  
                    <header class="widget_header-inline heading_group">
                        <h3 class="heading-heavy-uppercase">Magnific Popup</h3>
                        <h4 class="heading-light-uppercase-brand-1-size-2">Easily Create Galleries</h4>
                    </header>     
                    <p>Build repsonsive galleries with the popular Magnific Popup lightbox script for jQuery.</p>
                </div>
                
                <!-- Feature 8 -->
                <div class="widget span-4 break-3-half break-2-full">                     
                    <div class="widget_icon-inline button-icon-plain-size-6">
                        <i class="fa fa-twitter"></i>
                    </div>  
                    <header class="widget_header-inline heading_group">
                        <h3 class="heading-heavy-uppercase">Twitter Feed</h3>
                        <h4 class="heading-light-uppercase-brand-1-size-2">Fully Working Feed</h4>
                    </header>     
                    <p>Kayzen comes with a fully functioning and customizable Twitter feed, simply swap in your own username.</p>
                </div>
                
                <!-- Feature 9 -->
                <div class="widget span-4 break-3-half break-2-full min-break-3">                     
                    <div class="widget_icon-inline button-icon-plain-size-6">
                        <i class="fa fa-github-alt"></i>
                    </div>  
                    <header class="widget_header-inline heading_group">
                        <h3 class="heading-heavy-uppercase">Hosted on Github</h3>
                        <h4 class="heading-light-uppercase-brand-1-size-2">Access to Private Github Repo</h4>
                    </header>     
                    <p>Access the private repo hosted on Github, allowing you to integrate the source files into your workflow.</p>
                </div>
                
            </div><!-- Row -->
            
        </div><!-- Container -->
        
    </section><!-- More Features -->
    
<?php } ?>