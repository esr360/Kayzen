 <?php function masonryfeatures($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option' => 'VALUE'
    ), $custom); ?>

    <section class="section-primary">
        <div class="container">
            <div class="row-no-gutter">
                <a
                    href="#" 
                    class="widget-feature-zoom span-4"
                    data-bg="<?php stockImage('/demo/hero-6.jpg') ?>"
                >
                    <div class="corner-ribbon-pink" data-ribbon="Hot"></div>
                    <header class="widget_header heading_group">
                        <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                        <h5 class="heading-light">Dolor Sit Amet</h4>
                    </header>
                </a>
                <a 
                    href="#" 
                    class="widget-feature-zoom span-4"
                    data-bg="<?php stockImage('/demo/hero-11.jpg') ?>"
                >
                    <div class="corner-ribbon-green" data-ribbon="New"></div>
                    <header class="widget_header heading_group">
                        <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                        <h5 class="heading-light">Dolor Sit Amet</h4>
                    </header>
                </a>
                <a
                    href="#"  
                    class="widget-feature-zoom span-4 col-full"
                    data-bg="<?php stockImage('/demo/hero-10.jpg') ?>"
                >
                    <header class="widget_header heading_group">
                        <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                        <h5 class="heading-light">Dolor Sit Amet</h4>
                    </header>
                </a>
            </div>
            <div class="row-no-gutter">
                <a 
                    href="#" 
                    class="widget-feature-zoom span-8"
                    data-bg="<?php stockImage('/demo/hero-8.jpg') ?>"
                >
                    <header class="widget_header heading_group">
                        <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                        <h5 class="heading-light">Dolor Sit Amet</h4>
                    </header>
                </a>
            </div>
        </div>
    </section>
    
<?php } ?>