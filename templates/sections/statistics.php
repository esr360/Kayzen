<?php function statistics($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option' => 'VALUE'
    ), $custom); ?>
    
    <!-- Statistics -->
    <section class="row-flow row-no-gutter text-center">
        
        <!-- Statistic 1 -->
        <div class="widget-spectrum-quarter span-3 break-3-half break-2-full">
            <div class="widget_icon-light button-icon-plain-size-8">
                <i class="fa fa-code"></i>
            </div>
            <header class="widget_header heading_group">
                <h4 class="heading-size-7"><span id="stat-1" data-val="14266">0</span></h4>
                <h5 class="heading-light">Lines of code</h5>
            </header>
        </div>
        
        <!-- Statistic 2 -->
        <div class="widget-spectrum-quarter span-3 break-3-half break-2-full">
            <div class="widget_icon-light button-icon-plain-size-8">
                <i class="fa fa-desktop"></i>
            </div>
            <header class="widget_header heading_group">
                <h4 class="heading-size-7"><span id="stat-2" data-val="136">0</span></h4>
                <h5 class="heading-light">Completed projects</h5>
            </header>
        </div>
        
        <!-- Statistic 3 -->
        <div class="widget-spectrum-quarter span-3 break-3-half break-2-full">
            <div class="widget_icon-light button-icon-plain-size-8">
                <i class="fa fa-users"></i>
            </div>
            <header class="widget_header heading_group">
                <h4 class="heading-size-7"><span id="stat-4" data-val="28">0</span></h4>
                <h5 class="heading-light">Happy clients</h5>
            </header>
        </div>
        
        <!-- Statistic 4 -->
        <div class="widget-spectrum-quarter span-3 break-3-half break-2-full">
            <div class="widget_icon-light button-icon-plain-size-8">
                <i class="fa fa-desktop"></i>
            </div>
            <header class="widget_header heading_group">
                <h4 class="heading-size-7"><span id="stat-3" data-val="3254">0</span></h4>
                <h5 class="heading-light">Sales</h5>
            </header>
        </div>
        
    </section><!-- Statistics -->

<?php } ?>