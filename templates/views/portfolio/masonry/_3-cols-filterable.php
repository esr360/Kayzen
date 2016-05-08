<section class="section-primary relative">
    
    <ul class="tabs_nav-pills-center-large min-break-2" id="portfolio-categories">
        <li class="tabs_nav_item active" data-filter="*">View All</li>
        <li class="tabs_nav_item" data-filter="[data-HTML-theme]">HTML Themes</li>
        <li class="tabs_nav_item" data-filter="[data-photography]">Photography</li>
        <li class="tabs_nav_item" data-filter="[data-logo]">Logos</li>
    </ul>
        
    <div class="container">

        <div class="row-flow row-waffle-filterable fixed-table" id="portfolio-items">
            
            <?php
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'size'   => 'small',
                    'height' => 'tall',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'vimeo',
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'carousel',
                    'size'   => 'small',
                    'height' => 'tall',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'audio',
                    'size'   => 'small',
                    'height' => 'tall',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'youtube',
                    'size'   => 'small',
                    'height' => 'tall',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'carousel',
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'carousel',
                    'size'   => 'small',
                    'height' => 'tall',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'audio',
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'vimeo',
                    'size'   => 'small',
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
            
            ?>
            
        </div>
        
        <script>
            $(document).ready(function() {
                
                $('#portfolio-categories').KayzenClickHelper();
                
                $('.article-thumbnails-carousel').each(function() {
                    $(this).owlCarousel({
                        items : 1,
                        nav : true,
                        navText : [
                            '<i class="fa fa-angle-left fa-3x"></i>',
                            '<i class="fa fa-angle-right fa-3x"></i>'
                        ],
                        loop : true
                    });
                });
                
                $(window).load(function() {
                    $('#portfolio-items').isotope().addClass('isotope-container');
                    $('#portfolio-categories').on('click', 'li', function() {
                        var filterValue = $(this).attr('data-filter');
                        $('#portfolio-items').isotope({ 
                            filter: filterValue 
                        });
                    });
                });
                
            });
        </script>
    
    </div><!-- container -->
    
</section>