  <?php function options($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            
            //'option' => 'VALUE'
            
        ), $custom);
        
    ?>
 
    <!-- Options -->
    <section class="section-primary">
        
        <!-- Options Header -->
        <header class="heading_group-large has-icon text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Options</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Change Anything</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-cogs"></i>
                </div>
                <p class="lede">All of the provided demos are created by simply changing the options within the WordPress backend. Virtually any look can be achieved thanks to our intuitive options.</p>
            </div>
        </header>
        
        <div class="container">
            
            <div class="row">
                
                <!-- Options Graphic -->
                <div class="span-6 va-middle text-center">
                    <div class="span-10">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt=""/ >
                            <div style="background-image: url('<?php echo appDir ?>/images/stock-1.jpg')"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Options Content -->
                <div class="span-6 va-middle">
                    <header class="heading_group">
                        <h2 class="heading-heavy-size-5 font-2">Theming Done Properly</h2>
                        <h3 class="heading-light-brand-1-size-4">Theme Customizing Has Never Been Easier</h3>
                    </header>
                    <p>Kayzen has been built to do everything you need from the very beginning, meaning your theme customizing experience has never smoother.</p>
                    <div class="accordion">
                        <section class="active">
                            <h4 class="heading">Native Wordpress Editor</h4>
                            <p>Kayzen uses the native WordPress theme cuztomizer, making it future proof and allowing you to visually see any changes as you make them.</p>
                        </section>
                        <section>
                            <h4 class="heading">Visual Composer</h4>
                            <p>Kayzen comes with the famous <a href="http://vc.wpbakery.com/">Visual Composer</a> drag-and-drop page builder plugin, allowing you to use our custom widgets anywhere on your website.</p>
                        </section>
                        <section>
                            <h4 class="heading">Our Own Custom Framework</h4>
                            <p>We have developed our own custom framework specifically for this theme - no Bootstrap nonsense, our framework has been created with theming and WordPress in mind, making it the most flexible theme framework there is.</p>
                        </section>
                    </div>
                </div>
                
            </div><!-- Row -->
            
        </div><!-- Container -->
        
    </section><!-- Options -->
    
<?php } ?>