<?php function blocksWithQuote($custom = array()) { ?>

    <?php $options = array_merge(array(
    ), $custom); ?>
    
    <section class="section">
        
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
        <div class="row-no-gutter fixed-table text-center" id="featureSection1">
            
            <div class="widget-block-panel-noHover span-3 break-4-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-desktop"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">100% Responsive</h3>
                    <h4 class="heading-light-uppercase-brand-1">Optimized for all devices</h4>
                </header>
                <p>Kayzen has been built from the ground up using our own custom responsive grid system; <a href="https://github.com/esr360/Kayzen-GS" target="blank">Kayzen GS</a>, which was built for this theme.</p>
            </div>
            
            <div class="widget-block-panel-noHover span-3 break-4-half break-2-full">
                <div class="widget_icon button-icon-plain-size-8">
                    <i class="fa fa-clipboard"></i>
                </div>
                <header class="widget_header heading_group">
                    <h3 class="heading-heavy-size-4">Page Builder</h3>
                    <h4 class="heading-light-uppercase-brand-1">HTML Builder Included</h4>
                </header>
                <p>Kayzen comes included with <a href="http://codecanyon.net/item/html-builder-frontend-version/8432859?sso" target="blank">HTML Builder</a> ($21 value), allowing you to easily build pages using a drag &amp; drop interface.</p>
            </div>
            
            <div class="section-secondary span-6 break-4-full va-middle">
                <div class="container-small v-center">
                    <blockquote class="blockquote">
                        <div class="blockquote_content">
                            <h4 class="heading-light-size-6 font-2">We can take your awesome ideas and turn them into an <b class="heading-heavy">exciting reality</b>...</h4>
                        </div>
                    </blockquote>
                </div>
            </div>
            
        </div><!-- Features Row 1 -->
            
        <script>
            $(document).ready(function() {
                $('#featureSection1').equalHeight();
            });
        </script>
        
    </section>
    
<?php } ?>