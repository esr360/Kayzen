<?php 
	include ('../../app.php');
	// page config
	$title = 'Online Store';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-dark-sticky'
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
            
        ?>
        
        <section class="section-primary">
            
            <div class="container">
                
                <div class="row fixed-table">
                    
                    <div class="span-8">
                
                        <div class="row row-waffle-large fixed-table">
                            
                            <div class="span-4 lightbox-gallery">
                                <div class="corner-ribbon-pink" data-ribbon="Sale"></div>
                                <a href="<?php stockImage('demo/product-1.jpg') ?>">
                                    <img src="<?php stockImage('demo/tall/hero-1.jpg') ?>" />
                                </a>
                                <div id="product-thumbs" class="row stack-0 object-small">
                                    <a class="span-3 image-square" href="<?php stockImage('demo/product-1.jpg') ?>">
                                        <img src="<?php stockImage('demo/tall/hero-2.jpg') ?>" />
                                    </a>
                                    <a class="span-3 image-square" href="<?php stockImage('demo/product-1.jpg') ?>">
                                        <img src="<?php stockImage('demo/tall/hero-3.jpg') ?>" />
                                    </a>
                                    <a class="span-3 image-square" href="<?php stockImage('demo/product-1.jpg') ?>">
                                        <img src="<?php stockImage('demo/tall/hero-4.jpg') ?>" />
                                    </a>
                                    <a class="span-3 image-square" href="<?php stockImage('demo/product-1.jpg') ?>">
                                        <img src="<?php stockImage('demo/tall/hero-5.jpg') ?>" />
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
                                        <input class="form_input-quantity" type="text" step="1" min="1" name="quantity" value="1" title="quantity">
                                        <input class="button-border-grey-3" type="button" value="+">
                                    </div>
                                    <button class="button-primary" type="subtmi">Add To Cart</button>
                                </form>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel gravida leo. Etiam magna dolor, convallis nec metus sed.</p>
                                <ul class="list-arrow-adjust">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Maecenas vel gravida leo</li>
                                </ul>
                                
                            </div>
                            
                        </div><!-- row -->
                        
                        <section class="object">
                            
                            <div class="row-block stack-0 text-center">
                                    
                                <!-- Facebook Shares Widget -->
                                <a href="#" class="widget-tub span bg-facebook">
                                    <div class="widget_lid">
                                        <div class="widget_sticker button-icon-plain-size-6">
                                            <i class="fa fa-facebook"></i>
                                        </div>
                                    </div>
                                    <div class="widget_content">
                                        <header class="heading_group share-amount">
                                            <h3 id="facebookShareCount" class="heading-size-5">0</h3>
                                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                                        </header>
                                    </div>
                                    <div class="button-block relative font-2">Facebook</div>
                                </a>
                                
                                <!-- Twitter Shares Widget -->
                                <a href="#" class="widget-tub span bg-twitter">
                                    <div class="widget_lid">
                                        <div class="widget_sticker button-icon-plain-size-6">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                    </div>
                                    <div class="widget_content">
                                        <header class="heading_group share-amount">
                                            <h3 id="twitterShareCount" class="heading-size-5">0</h3>
                                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                                        </header>
                                    </div>
                                    <div class="button-block relative font-2">Twitter</div>
                                </a>
                                
                                <!-- Google Plus Shares Widget -->
                                <a href="#" class="widget-tub span bg-google-plus">
                                    <div class="widget_lid">
                                        <div class="widget_sticker button-icon-plain-size-6">
                                            <i class="fa fa-google-plus"></i>
                                        </div>
                                    </div>
                                    <div class="widget_content">
                                        <header class="heading_group share-amount">
                                            <h3 id="googlePlusShareCount" class="heading-size-5">0</h3>
                                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                                        </header>
                                    </div>
                                    <div class="button-block relative font-2">Google Plus</div>
                                </a>
                                
                                <!-- LinkedIn Shares Widget -->
                                <a href="#" class="widget-tub span bg-linkedin">
                                    <div class="widget_lid">
                                        <div class="widget_sticker button-icon-plain-size-6">
                                            <i class="fa fa-linkedin"></i>
                                        </div>
                                    </div>
                                    <div class="widget_content">
                                        <header class="heading_group share-amount">
                                            <h3 id="linkedInShareCount" class="heading-size-5">0</h3>
                                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                                        </header>
                                    </div>
                                    <div class="button-block relative font-2">LinkedIn</div>
                                </a>
                                
                                <!-- StumbleUpon Shares Widget -->
                                <a href="#" class="widget-tub span bg-stumbleupon min-break-4">
                                    <div class="widget_lid">
                                        <div class="widget_sticker button-icon-plain-size-6">
                                            <i class="fa fa-stumbleupon"></i>
                                        </div>
                                    </div>
                                    <div class="widget_content">
                                        <header class="heading_group share-amount">
                                            <h3 id="stumbleUponShareCount" class="heading-size-5">0</h3>
                                            <h3 class="heading-size-2-light-uppercase">Views</h3>
                                        </header>
                                    </div>
                                    <div class="button-block relative font-2">StumbleUpon</div>
                                </a>
                                
                                <!-- Pinterest Shares Widget
                                <a href="#" class="widget-tub span bg-pinterest">
                                    <div class="widget_lid">
                                        <div class="widget_sticker button-icon-plain-size-6">
                                            <i class="fa fa-pinterest"></i>
                                        </div>
                                    </div>
                                    <div class="widget_content">
                                        <header class="heading_group share-amount">
                                            <h3 id="pinterestShareCount" class="heading-size-5">0</h3>
                                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                                        </header>
                                    </div>
                                    <div class="button-block relative font-2">Pinterest</div>
                                </a> -->
                                
                                <!-- Reddit Shares Widget
                                <a href="#" class="widget-tub span bg-reddit">
                                    <div class="widget_lid">
                                        <div class="widget_sticker button-icon-plain-size-6">
                                            <i class="fa fa-reddit"></i>
                                        </div>
                                    </div>
                                    <div class="widget_content">
                                        <header class="heading_group share-amount">
                                            <h3 id="redditShareCount" class="heading-size-5">0</h3>
                                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                                        </header>
                                    </div>
                                    <div class="button-block relative font-2">Reddit</div>
                                </a> -->
                                
                            </div>
                
                            <script>
                                $(document).ready(function() {
                                    $.fn.KayzenSocialShareCount({
                                        url : 'http://themeforest.net'
                                    });
                                });
                            </script>
                                
                        </section>
                
                        <section class="section-primary-mini-flush">
                                
                            <div class="tabs">
                
                                <ul class="tabs_nav">
                                    <li class="button active"><i class="fa fa-comments"></i> Reviews</li>
                                    <li class="button"><i class="fa fa-truck"></i> Delivery</li>
                                    <li class="button"><i class="fa fa-refresh"></i> Returns</li>
                                </ul>
                                
                                <section class="tabs_content-block-deep-glue active">
                                    
                                    <article class="tabs_item active">
                                        <div class="comment object-small">
                                            <div class="object-small">
                                                <div class="thumbnail-profile-round-xlarge-styled-inline sink">
                                                    <img src="<?php stockImage('team/team-1.jpg') ?>" alt="">
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
                                                    <div class="comment_content">
                                                        <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="hrule-line" />
                                        <div class="comment object-small">
                                            <div class="object-small">
                                                <div class="thumbnail-profile-round-xlarge-styled-inline sink">
                                                    <img src="<?php stockImage('team/team-2.jpg') ?>" alt="">
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
                                                    <div class="comment_content">
                                                        <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="hrule-line" />
                                        <div class="comment object-small">
                                            <div class="object-small">
                                                <div class="thumbnail-profile-round-xlarge-styled-inline sink">
                                                    <img src="<?php stockImage('team/team-3.jpg') ?>" alt="">
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
                                                    <div class="comment_content">
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
                                    'span'     => 4,
                                    'class'    => 'break-3-half break-2-full'
                                ));
                                
                                articleItem(array(
                                    'type'     => 'shop',
                                    'title'    => 'Lorem Ipsum',
                                    'height'   => 'tall',
                                    'media'    => 'carousel',
                                    'size'     => 'small',
                                    'span'     => 4,
                                    'class'    => 'break-3-half break-2-full'
                                ));
                                
                                articleItem(array(
                                    'type'     => 'shop',
                                    'title'    => 'Lorem Ipsum',
                                    'ribbon'   => array('pink', 'Sale'),
                                    'height'   => 'tall',
                                    'price'    => array('$24.99', '$19.99'),
                                    'size'     => 'small',
                                    'span'     => 4,
                                    'class'    => 'break-3-half break-2-full'
                                ));
                                
                                articleItem(array(
                                    'type'     => 'shop',
                                    'title'    => 'Lorem Ipsum',
                                    'ribbon'   => array('pink', 'Sale'),
                                    'height'   => 'tall',
                                    'price'    => array('$24.99', '$19.99'),
                                    'size'     => 'small',
                                    'span'     => 4,
                                    'class'    => 'break-3-half break-2-full max-break-3'
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
                        
                    </div>
                    
                    <hr class="hrule-stripes-large max-break-3" />
					
					<aside class="sidebar span-4">
    
                        <?php sidebar(array(
                            'type' => 'shop'
                        )); ?>
						
					</aside><!-- sidebar -->
                    
                </div><!-- row -->
                
            </div><!-- container -->
            
        </section>
        
        <?php
            
            promoBanner();
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>