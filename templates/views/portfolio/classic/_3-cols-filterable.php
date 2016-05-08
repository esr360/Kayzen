<section class="section-primary-mini relative">
    <ul class="tabs_nav-pills-center" id="portfolio-categories">
        <li class="tabs_nav_item active" data-filter="*">View All</li>
        <li class="tabs_nav_item" data-filter="[data-HTML-theme]">HTML Themes</li>
        <li class="tabs_nav_item" data-filter="[data-photography]">Photography</li>
        <li class="tabs_nav_item" data-filter="[data-logo]">Logos</li>
    </ul>
</section>

<section class="section-primary-flush relative">
        
    <div class="container">

        <div id="portfolio-items" class="row-flow row-waffle-filterable fixed-table">
                
            <?php
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'carousel',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'youtube',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'vimeo',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'carousel',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'carousel',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'youtube',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'vimeo',
                    'size'   => 'small',
                    'span'   => 4,
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'media'  => 'carousel',
                    'size'   => 'small',
                    'span'   => 4,
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
                    })
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