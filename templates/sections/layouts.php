 <?php function layouts($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option' => 'VALUE'
    ), $custom); ?>
 
    <!-- Layouts -->
    <section class="section-primary">
        
        <!-- Layouts Header -->
        <header class="heading_group-large has-icon text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Layouts</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Infinite Styles</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-cubes"></i>
                </div>
                <p class="lede">Thanks to the flexibility of Kayzen's options, there is no limit to the layouts you can achieve. Below is just a small sample of common styles and layouts that can easily be achieved with Kayzen.</p>
            </div>
        </header>
    
        <div class="container-full wrapper">
            
            <!-- Layouts Row 1 -->
            <div class="row-flow row-waffle">
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-header-top.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-header-alt-topbar.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-right-sidebar.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-left-header.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-right-header-topbar.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-topbar.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-header-alt.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-header-no-bar-topbar.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-left-sidebar.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-right-header.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-menu-alt.png" alt="" />
                </div>
                <div class="span-3 break-3-half break-1-full">
                    <img src="<?php echo appDir ?>/images/layouts/layout-left-header-topbar.png" alt="" />
                </div>
            </div>
            
        </div><!-- Container -->
        
    </section><!-- Layouts -->
    
<?php } ?>