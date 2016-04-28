<section class="section-primary relative">
        
    <div class="container">
        
        <div class="row">
            
            <div class="span-8">

                <div id="shop-items" class="row-flow row-waffle-large fixed-table">
                        
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
                            'height'   => 'tall',
                            'size'     => 'small',
                            'span'     => 4,
                            'class'    => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'ribbon'   => array('pink-disabled', 'Out of Stock'),
                            'height'   => 'tall',
                            'size'     => 'small',
                            'disabled' => true,
                            'span'     => 4,
                            'class'    => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'ribbon'   => array('blue', 'Last One!'),
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
                            'media'    => 'carousel',
                            'price'    => array('$24.99', '$19.99'),
                            'size'     => 'small',
                            'span'     => 4,
                            'class'    => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'height'   => 'tall',
                            'size'     => 'small',
                            'span'     => 4,
                            'class'    => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'ribbon'   => array('pink', 'Half Price!'),
                            'size'     => 'small',
                            'price'    => array('$24.99', '$12.49'),
                            'height'   => 'tall',
                            'span'     => 4,
                            'class'    => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'height'   => 'tall',
                            'size'     => 'small',
                            'span'     => 4,
                            'class'    => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'disabled' => true,
                            'ribbon'   => array('pink-disabled', 'Out of Stock'),
                            'height'   => 'tall',
                            'media'    => 'carousel',
                            'price'    => array('$24.99', '$12.99'),
                            'size'     => 'small',
                            'span'     => 4,
                            'class'    => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'height'   => 'tall',
                            'size'     => 'small',
                            'media'    => 'carousel',
                            'span'     => 4,
                            'class'    => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'height'   => 'tall',
                            'size'     => 'small',
                            'span'     => 4,
                            'class'    => 'break-3-half break-2-full'
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'height'   => 'tall',
                            'size'     => 'small',
                            'span'     => 4,
                            'class'    => 'min-break-3'
                        ));
                        
                    ?>
                    
                </div>  
        
                <ul class="pagination tabs_nav-pills">
                    <li class="tabs_nav_item"><i class="fa fa-angle-left"></i></li>
                    <li class="tabs_nav_item">1</li>
                    <li class="tabs_nav_item active">2</li>
                    <li class="tabs_nav_item">3</li>
                    <li class="tabs_nav_item">...</li>
                    <li class="tabs_nav_item">10</li>
                    <li class="tabs_nav_item"><i class="fa fa-angle-right"></i></li>
                </ul>   
                
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

<?php promoBanner() ?>