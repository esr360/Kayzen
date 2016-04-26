<section class="section-primary">
        
    <div class="container">
        
        <div id="blog-items" class="row-flow row-waffle-large fixed-table">
            
            <?php
                
                articleItem(array(
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
            
                articleItem(array(
                    'media'  => 'carousel',
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
            
                articleItem(array(
                    'media'  => 'carousel',
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
            
                articleItem(array(
                    'media'  => 'vimeo',
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
            
                articleItem(array(
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
            
                articleItem(array(
                    'media'  => 'youtube',
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
            
                articleItem(array(
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
            
                articleItem(array(
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
            
                articleItem(array(
                    'media'  => 'carousel',
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
            
            ?>
            
        </div>
        
        <ul class="pagination tabs_nav-pills-center">
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
                })
            });
        </script>
        
    </div><!-- container -->

</section>