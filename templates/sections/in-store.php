 <?php function inStore($custom = array()) { ?>

    <?php $options = array_merge(array(
        'link' => pageLink('further/shop-single.php', 'pages', false),
        'root' => pageLink('further/shop-category.php', 'pages', false)
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
                            
                        <?php
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'ribbon'   => array('green', 'New'),
                                'size'     => 'small',
                                'height'   => 'tall',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'height'   => 'tall',
                                'size'     => 'small',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'ribbon'   => array('pink', 'Sale'),
                                'height'   => 'tall',
                                'price'    => array('$24.99', '$19.99'),
                                'size'     => 'small',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'height'   => 'tall',
                                'size'     => 'small',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                        ?>
                        
                    </div>
                    
                </section>
                
                <section class="tabs_item">    
                                
                    <div class="row-flow row-waffle-large">
                            
                        <?php
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'ribbon'   => array('green', 'New'),
                                'size'     => 'small',
                                'height'   => 'tall',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'height'   => 'tall',
                                'size'     => 'small',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'ribbon'   => array('pink', 'Sale'),
                                'height'   => 'tall',
                                'price'    => array('$24.99', '$19.99'),
                                'size'     => 'small',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'height'   => 'tall',
                                'size'     => 'small',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                        ?>
                        
                    </div>
                    
                </section>
                
                <section class="tabs_item">    
                                
                    <div class="row-flow row-waffle-large">
                            
                        <?php
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'ribbon'   => array('green', 'New'),
                                'size'     => 'small',
                                'height'   => 'tall',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'height'   => 'tall',
                                'size'     => 'small',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full'
                            ));
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'ribbon'   => array('pink', 'Sale'),
                                'height'   => 'tall',
                                'price'    => array('$24.99', '$19.99'),
                                'size'     => 'small',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                            articleItem(array(
                                'type'     => 'shop',
                                'title'    => 'Lorem Ipsum',
                                'height'   => 'tall',
                                'size'     => 'small',
                                'span'     => 3,
                                'class'    => 'break-3-half break-2-full',
                                'link'     => $options['link'],
                                'root'     => $options['root']
                            ));
                            
                        ?>
                        
                    </div>
                    
                </section>
                
            </div>
        
        </div>
            
    </section>
    
<?php } ?>