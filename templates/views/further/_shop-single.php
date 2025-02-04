<?php function _shopSingle($custom = []) {

    $options = array_replace_recursive([
        'item-link' => pageLink('further/shop-single.php', 'pages', false),
        'item-root' => pageLink('further/shop-category.php', 'pages', false)
    ], $custom); ?>

    <section class="section-primary">
        
        <div class="container">
            
            <div class="row row-waffle-large">
                
                <div class="span-4 lightbox-gallery">
                    <div class="corner-ribbon-pink" data-ribbon="Sale"></div>
                    <a href="<?php echo stockImage('demo/tall/stock-1.jpg') ?>">
                        <img src="<?php echo stockImage('demo/tall/stock-1.jpg') ?>" alt="">
                    </a>
                    <div id="product-thumbs" class="row stack-0 object-small">
                        <a class="span-3 image-square" href="<?php echo stockImage('demo/tall/stock-2.jpg') ?>">
                            <img src="<?php echo stockImage('demo/tall/stock-2.jpg') ?>" alt="">
                        </a>
                        <a class="span-3 image-square" href="<?php echo stockImage('demo/tall/stock-3.jpg') ?>">
                            <img src="<?php echo stockImage('demo/tall/stock-3.jpg') ?>" alt="">
                        </a>
                        <a class="span-3 image-square" href="<?php echo stockImage('demo/tall/stock-4.jpg') ?>">
                            <img src="<?php echo stockImage('demo/tall/stock-4.jpg') ?>" alt="">
                        </a>
                        <a class="span-3 image-square" href="<?php echo stockImage('demo/tall/stock-5.jpg') ?>">
                            <img src="<?php echo stockImage('demo/tall/stock-5.jpg') ?>" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="span-8">
                    <header class="heading_group-small">
                        <h2 class="heading-heavy-size-5 font-2">Lorem Ipsum Dolor</h2>
                    </header>
                    <div class="heading_group-small">
                        <del class="heading-size-4">$24.99</del>
                        <ins class="heading-size-4">$12.49</ins>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        - <a href="#">3 customer reviews</a>
                    </div>
                    <form class="object">
                        <div class="quantity span">
                            <input class="button-border-grey-3" type="button" value="-">
                            <input class="form_input-quantity" type="text" name="quantity" value="1" title="quantity">
                            <input class="button-border-grey-3" type="button" value="+">
                        </div>
                        <button class="button-primary" type="submit">Add To Cart</button>
                    </form>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis elit dignissim, molestie est tristique, posuere libero. Suspendisse pulvinar porta maximus. Donec nec commodo dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras faucibus odio augue.</p>
                    <ul class="list-arrow">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Maecenas vel gravida leo</li>
                    </ul>
            
                    <?php socialWidgets() ?>
                    
                </div>
                
            </div><!-- row -->

            <section class="section-primary-mini">
                    
                <div class="tabs">

                    <ul class="tabs_nav">
                        <li class="tabs_nav_item active"><i class="fa fa-comments"></i> Reviews</li>
                        <li class="tabs_nav_item"><i class="fa fa-truck"></i> Delivery</li>
                        <li class="tabs_nav_item"><i class="fa fa-refresh"></i> Returns</li>
                    </ul>
                    
                    <section class="tabs_content-block-deep-glue active">
                        
                        <article class="tabs_item active">
                            <div class="comment object-small">
                                <div class="object-small">
                                    <div class="thumbnail-profile-round-xlarge-styled-inline sink">
                                        <img src="<?php echo stockImage('team/team-2.jpg') ?>" alt="">
                                    </div>
                                    <div class="thumbnail_aside">
                                        <div class="row-block">
                                            <div class="span">
                                                <header class="heading_group-small">
                                                    <h4 class="heading font-2">John Doe</h4>
                                                    <h4 class="heading-light-size-2-sub"><b>Posted:</b> Today, 9:16pm</h4>
                                                </header>
                                            </div>
                                            <div class="span text-right">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="object-small comment_content">
                                            <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="hrule-line" />
                            <div class="comment object-small">
                                <div class="object-small">
                                    <div class="thumbnail-profile-round-xlarge-styled-inline sink">
                                        <img src="<?php echo stockImage('team/team-2.jpg') ?>" alt="">
                                    </div>
                                    <div class="thumbnail_aside">
                                        <div class="row-block">
                                            <div class="span">
                                                <header class="heading_group-small">
                                                    <h4 class="heading font-2">John Doe</h4>
                                                    <h4 class="heading-light-size-2-sub"><b>Posted:</b> Today, 9:16pm</h4>
                                                </header>
                                            </div>
                                            <div class="span text-right">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="object-small comment_content">
                                            <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
                        <article class="tabs_item">
                            <p class="alert-bar-help"><b>Free Devliery</b> - Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <table class="table-small">
                                <thead>
                                    <tr>
                                        <th>Option</th>
                                        <th>Delivery Time</th>
                                        <th>Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Standard Delivery</td>
                                        <td>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula.</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td>First Class</td>
                                        <td>Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</td>
                                        <td>$4.99</td>
                                    </tr>
                                    <tr>
                                        <td>Next Day</td>
                                        <td>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
                                        <td>$6.99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </article>
                        
                        <article class="tabs_item">
                            <h3 class="heading-size-4">Returns Policy</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam finibus metus vel pharetra aliquam. Vestibulum libero leo, pretium at cursus ut, suscipit vel ipsum. Ut ante mauris, congue nec lectus ac, iaculis congue risus. Fusce luctus, libero sed accumsan placerat, urna diam pulvinar elit, quis luctus elit sem non nisl. Mauris bibendum condimentum nibh quis dictum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam finibus metus vel pharetra aliquam. Integer sit amet massa tristique, rutrum purus in, vestibulum eros. Sed in vulputate augue, et egestas dui. Mauris at egestas erat. Integer libero lorem, commodo in vulputate at, eleifend et nisi. Etiam vel mi velit. Pellentesque vitae porta dui, et pretium libero.</p>
                        </article>
                                                
                    </section>
                
                </div>
                
            </section>
            
            <header class="heading_group">
                <h3 class="heading-size-4">Related Products</h3>
            </header>

            <div id="shop-items" class="row-flow row-waffle fixed-table">
                    
                <?php
                    
                    articleItem(array(
                        'type'     => 'shop',
                        'title'    => 'Lorem Ipsum',
                        'ribbon'   => array('green', 'New'),
                        'size'     => 'small',
                        'height'   => 'tall',
                        'span'     => 3,
                        'class'    => 'break-3-half break-2-full',
                        'link'     => $options['item-link'],
                        'root'     => $options['item-root']
                    ));
                    
                    articleItem(array(
                        'type'     => 'shop',
                        'title'    => 'Lorem Ipsum',
                        'height'   => 'tall',
                        'media'    => 'carousel',
                        'size'     => 'small',
                        'span'     => 3,
                        'class'    => 'break-3-half break-2-full',
                        'link'     => $options['item-link'],
                        'root'     => $options['item-root']
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
                        'link'     => $options['item-link'],
                        'root'     => $options['item-root']
                    ));
                    
                    articleItem(array(
                        'type'     => 'shop',
                        'title'    => 'Lorem Ipsum',
                        'height'   => 'tall',
                        'size'     => 'small',
                        'span'     => 3,
                        'class'    => 'break-3-half break-2-full',
                        'link'     => $options['item-link'],
                        'root'     => $options['item-root']
                    ));
                    
                ?>
                
            </div>
            
            <script>
                $(document).ready(function() {
                
                    $('.article-thumbnails-carousel').each(function() {
                        $(this).owlCarousel({
                            items : 1,
                            nav : true,
                            navText : [
                                '<i class="fa fa-angle-left fa-3x"></i>',
                                '<i class="fa fa-angle-right fa-3x"></i>'
                            ],
                            loop : true
                        })
                    });
                    
                });
            </script>
            
        </div><!-- container -->
        
    </section>

<?php } ?>