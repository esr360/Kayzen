<?php function keyFeatures($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option' => 'VALUE'
    ), $custom); ?>

    <!-- Key Features -->
    <section class="section" id="key-features">
        
        <!-- Key Features Header -->
        <header class="heading_group-block has-icon text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Key Features</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Build Pro Websites</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
        </header>
        
        <!-- Features Row 1 -->
        <div class="widget_group row-flow row-no-gutter text-center">
            
            <!-- Feature 1 -->
            <div class="widget-block-panel span-3 break-4-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-tablet"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">100% Responsive</h3>
                    <h4 class="heading-light-uppercase-brand-1">Optimized for all devices</h4>
                </header>
                <p>Kayzen has been built from the ground up using our own custom responsive grid system; <a href="https://github.com/esr360/Kayzen-GS" target="blank">Kayzen GS</a>, which was built for this theme.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="widget-block-panel span-3 break-4-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-clipboard"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">Page Builder</h3>
                    <h4 class="heading-light-uppercase-brand-1">HTML Builder Included</h4>
                </header>
                <p>Kayzen comes included with <a href="http://codecanyon.net/item/html-builder-frontend-version/8432859?sso" target="blank">HTML Builder</a> ($21 value), allowing you to easily build pages using a drag & drop interface.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="widget-block-panel span-3 break-4-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-eye"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">Retina Ready</h3>
                    <h4 class="heading-light-uppercase-brand-1">Crystal clear display</h4>
                </header>
                <p>Kayzen is optimised for devices with retina displays, offering a crystal clear experience thanks to the use of SVG icons and images.</p>
            </div>
            
            <!-- Feature 4 -->
            <div class="widget-block-panel span-3 break-4-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-eyedropper"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">Unlimited Colors</h3>
                    <h4 class="heading-light-uppercase-brand-1">Have any color you want</h4>
                </header>
                <p>Thanks to the use of Sass, you can change the entire color scheme of your theme by changing just one variable in the configuration.</p>
            </div>
            
            <!-- Feature 5 -->
            <div class="widget-block-panel span-3 break-4-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-desktop"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">Premade Demos</h3>
                    <h4 class="heading-light-uppercase-brand-1">Get Setup Instantly</h4>
                </header>
                <p>Kayzen comes with a bunch of premade demos which are built using the provided templates combined with custom Sass configuration.</p>
            </div>
            
            <!-- Feature 6 -->
            <div class="widget-block-panel span-3 break-4-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-cubes"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">Modular Structure</h3>
                    <h4 class="heading-light-uppercase-brand-1">Using Our Custom Framework</h4>
                </header>
                <p>Kayzen is built using our own custom framework; <a href="https://github.com/esr360/Synergy" target="blank">Synergy</a>, a revolutionary way to build modular themes.</p>
            </div>
            
            <!-- Feature 7 -->
            <div class="widget-block-panel span-3 break-4-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-cog"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">Unique Configuration</h3>
                    <h4 class="heading-light-uppercase-brand-1">Easily Change Options</h4>
                </header>
                <p>Completely change the look and feel of your website without touching any HTML thanks to Kayzen's unique way of handling options.</p>
            </div>
            
            <!-- Feature 8 -->
            <div class="widget-block-panel span-3 break-4-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-google"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">SEO Friendly</h3>
                    <h4 class="heading-light-uppercase-brand-1">Coded for search engines</h4>
                </header>
                <p>Kayzen's 100% validated HTML5 code means your website will be SEO friendly out the box, making it easy for search engine bots to read.</p>
            </div>
            
        </div><!-- Features Row 2 -->
                
        <script>
            $(document).ready(function() {
                $('#key-features .widget_group').equalHeight();
             });
        </script>
        
    </section><!-- Key Features -->
    
<?php } ?>