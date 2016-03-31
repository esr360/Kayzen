 <?php function inStore($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option' => 'VALUE'
    ), $custom); ?>
        
    <section 
        class="section-primary hide-overflow"
        style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
    >

        <header class="heading_group-large text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>In Store</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Shop Til You Drop</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
            </div>
        </header>	
        
        <div class="container">
        
            <div class="tabs">
                
                <ul class="tabs_nav-pills-large-center">
                    <li class="tabs_nav_item active">New Arrivals</li>
                    <li class="tabs_nav_item">Best Sellers</li>
                    <li class="tabs_nav_item">On Offer</li>
                </ul>
                
                <section class="tabs_item active">    
                                
                    <div class="row-flow row-waffle-large">
                        
                        <div class="span-3 break-3-half break-2-full">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a 
                                            href="<?php stockImage('demo/product-1.jpg') ?>" 
                                            class="button-icon-border-circle tooltip-top" 
                                            data-tooltip="Quick Look" 
                                            rel="lightbox"
                                        >
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <span>$24.99</span>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                        <div class="span-3 break-3-half break-2-full">
                            <div class="thumbnail">
                                <div class="corner-ribbon-pink" data-ribbon="Sale"></div>
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a 
                                            href="<?php stockImage('demo/product-1.jpg') ?>" 
                                            class="button-icon-border-circle tooltip-top" 
                                            data-tooltip="Quick Look" 
                                            rel="lightbox"
                                        >
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <del>$24.99</del>
                                <ins>$12.49</ins>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                        <div class="span-3 break-3-half break-2-full">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a 
                                            href="<?php stockImage('demo/product-1.jpg') ?>" 
                                            class="button-icon-border-circle tooltip-top" 
                                            data-tooltip="Quick Look" 
                                            rel="lightbox"
                                        >
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <span>$24.99</span>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                        <div class="span-3 break-3-half break-2-full">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a 
                                            href="<?php stockImage('demo/product-1.jpg') ?>" 
                                            class="button-icon-border-circle tooltip-top" 
                                            data-tooltip="Quick Look" 
                                            rel="lightbox"
                                        >
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <span>$12.49</span>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                    </div>
                    
                </section>
                
                <section class="tabs_item">    
                                
                    <div class="row-flow row-waffle-large">
                        
                        <div class="span-3 break-3-half break-2-full">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Quick Look">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <span>$24.99</span>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                        <div class="span-3 break-3-half break-2-full">
                            <div class="thumbnail">
                                <div class="corner-ribbon-pink" data-ribbon="Sale"></div>
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Quick Look">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <del>$24.99</del>
                                <ins>$12.49</ins>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                        <div class="span-3 break-3-half break-2-full">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Quick Look">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <span>$24.99</span>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                        <div class="span-3 break-3-half break-2-full">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Quick Look">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <span>$12.49</span>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                    </div>
                    
                </section>
                
                <section class="tabs_item">    
                                
                    <div class="row-flow row-waffle-large">
                        
                        <div class="span-3 break-3-half break-2-full">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Quick Look">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <span>$24.99</span>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                        <div class="span-3">
                            <div class="thumbnail">
                                <div class="corner-ribbon-pink" data-ribbon="Sale"></div>
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Quick Look">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <del>$24.99</del>
                                <ins>$12.49</ins>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                        <div class="span-3 break-3-half break-2-full">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Quick Look">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <span>$24.99</span>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                        <div class="span-3">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls button_group-small">
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Quick Look">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle tooltip-top" data-tooltip="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="<?php stockImage('demo/product-1.jpg') ?>">
                            </div>
                            <header class="heading_group-small">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-2">Category: <a href="#">Dresses</a></h4>
                            </header>
                            <div class="heading_group-small">
                                <span>$12.49</span>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                        
                    </div>
                    
                </section>
                
            </div>
        
        </div>
            
    </section>
    
<?php } ?>