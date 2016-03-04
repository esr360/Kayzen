<?php function pricing($custom = array()) { ?>

    <?php $options = array_merge(array(    
        //'option'   => 'VALUE'
    ), $custom); ?>

    <section class="section-primary">
        
        <header class="heading_group-large text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Our Pricing</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Our Best Packages</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
        
        <div class="container">
            <div class="row row-waffle-large">
                
                <div class="span-4 price-chart_wrapper">
                    <div class="price-chart-free">
                        <header class="heading_group">
                            <h4 class="heading-heavy-size-6-flush">Free</h4>
                            <h5 class="heading-light-size-3">Our free package</h5>
                        </header>
                        <div class="price-chart_price">
                            <small>$</small><span>0</span>/mo
                        </div>
                        <ul>
                            <li><span><i class="fa fa-database"></i> Diskspace</span><strong>1GB</strong></li>
                            <li><span><i class="fa fa-group"></i> Bandwidth</span><strong>10GB</strong></li>
                            <li><span><i class="fa fa-desktop"></i> Sub-domains</span><strong>1</strong></li>
                            <li><span><i class="fa fa-envelope"></i> Emails</span><strong>5</strong></li>
                            <li><span><i class="fa fa-support"></i> Support</span><strong>None</strong></li>
                        </ul>
                        <div class="buy-now">
                            <a href="<?php pageLink('further/shop-single.php') ?>" class="button-block-size-3"><i class="fa fa-shopping-cart"></i> Get For Free</a>
                        </div>
                    </div>
                </div>
                
                <div class="span-4 price-chart_wrapper">                    
                    <div class="price-chart">
                        <div class="corner-ribbon-large-green" data-ribbon="Great Valule"></div>
                        <header class="heading_group">
                            <h4 class="heading-heavy-size-6-flush">Basic</h4>
                            <h5 class="heading-light-size-3">Our basic package</h5>
                        </header>
                        <div class="price-chart_price">
                            <small>$</small><span>5</span>/mo
                        </div>
                        <ul>
                            <li><span><i class="fa fa-database"></i> Diskspace</span><strong>5GB</strong></li>
                            <li><span><i class="fa fa-group"></i> Bandwidth</span><strong>50GB</strong></li>
                            <li><span><i class="fa fa-desktop"></i> Sub-domains</span><strong>10</strong></li>
                            <li><span><i class="fa fa-envelope"></i> Emails</span><strong>50</strong></li>
                            <li><span><i class="fa fa-support"></i> Support</span><strong>Yes</strong></li>
                        </ul>
                        <div class="buy-now">
                            <a href="<?php pageLink('further/shop-single.php') ?>" class="button-primary-block-size-3"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="span-4 price-chart_wrapper">
                    <div class="price-chart">
                        <header class="heading_group">
                            <h4 class="heading-heavy-size-6-flush">Pro <i class="fa fa-trophy"></i></h4>
                            <h5 class="heading-light-size-3">Our pro package</h5>
                        </header>
                        <div class="price-chart_price">
                            <small>$</small><span>15</span>/mo
                        </div>
                        <ul>
                            <li><span><i class="fa fa-database"></i> Diskspace</span><strong>500GB</strong></li>
                            <li><span><i class="fa fa-group"></i> Bandwidth</span><strong>Unlimited</strong></li>
                            <li><span><i class="fa fa-desktop"></i> Sub-domains</span><strong>500</strong></li>
                            <li><span><i class="fa fa-envelope"></i> Emails</span><strong>Unlimited</strong></li>
                            <li><span><i class="fa fa-support"></i> Support</span><strong>Yes</strong></li>
                        </ul>
                        <div class="buy-now">
                            <a href="<?php pageLink('further/shop-single.php') ?>" class="button-primary-block-size-3"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                        </div>
                    </div>
                </div>
                
            </div><!-- row -->
        </div><!-- container -->
    
    </section>
    
<?php } ?>