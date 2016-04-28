  <?php function options($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option' => 'VALUE'
    ), $custom); ?>
 
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
                <p class="lede">All of the provided demos are created by simply changing the options within the Sass configuration. Virtually any look can be achieved thanks to the intuitive options.</p>
            </div>
        </header>
        
        <div class="container">
            
            <div class="row">
                
                <!-- Options Graphic -->
                <div class="span-6 va-middle text-center">
                    <div class="span-10">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php echo stockImage('themes/theme-6.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                
                <hr class="hrule-stripes-large max-break-3" />
                
                <!-- Options Content -->
                <div class="span-6 va-middle">
                    <header class="heading_group">
                        <h2 class="heading-heavy-size-5 font-2">Theming Done Properly</h2>
                        <h3 class="heading-light-brand-1-size-4">Theme Customizing Has Never Been Easier</h3>
                    </header>
                    <p>Kayzen has been built to do everything you need from the very beginning, meaning your theme customizing experience has never smoother.</p>
                    <div class="accordion">
                        <section class="accordion_section active">
                            <h4 class="accordion_title heading">Fonts & Typography</h4>
                            <p class="accordion_content">Kayzen uses Google Fonts, allowing you to easily switch your fonts out from a choice of over 700 fonts. You can then change each module's typography settings on an individual basis, such as font-size, colors etc.</p>
                        </section>
                        <section class="accordion_section">
                            <h4 class="accordion_title heading">Colors & Layout</h4>
                            <p class="accordion_content">The entire color scheme of your theme can be changed by changing a single variable in the Sass configuration. Changing other aspects of your theme is also just as easy.</p>
                        </section>
                        <section class="accordion_section">
                            <h4 class="accordion_title heading">Complete Responsive Control</h4>
                            <p class="accordion_content">Kayzen gives you complete control over the responsiveness of your theme, thanks to our own custom grid system and responsive helper classes.</p>
                        </section>
                    </div>
                </div>
                
            </div><!-- Row -->
            
        </div><!-- Container -->
        
    </section><!-- Options -->
    
<?php } ?>