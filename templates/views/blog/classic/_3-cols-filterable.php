<section class="section-primary-mini relative">	
    <ul class="tabs_nav-pills-center" id="blog-types">
        <li class="tabs_nav_item active" data-filter="*">View All</li>
        <li class="tabs_nav_item" data-filter="[data-image]">Image</li>
        <li class="tabs_nav_item" data-filter="[data-carousel]">Carousel</li>
        <li class="tabs_nav_item" data-filter="[data-vimeo], [data-youtube]">Video</li>
    </ul>
</section>

<section class="section-primary-flush">
        
    <div class="container">
        
        <div id="blog-items" class="row-flow row-waffle-large-filterable fixed-table">
            
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
    
        <script>
            $(document).ready(function() {
                
                $('#blog-types').KayzenClickHelper();
                
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
                
                $(window).load(function() {
                    $('#blog-items').isotope();
                    $('#blog-types').on('click', 'li', function() {
                        var filterValue = $(this).attr('data-filter');
                        $('#blog-items').isotope({ 
                            filter: filterValue 
                        });
                    });
                });
                
            });
        </script>
        
    </div><!-- container -->

</section>