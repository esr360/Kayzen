<section class="section-primary relative">
    
    <ul class="tabs_nav-pills-center-large min-break-2" id="portfolio-categories">
        <li class="tabs_nav_item active" data-filter="*">View All</li>
        <li class="tabs_nav_item" data-filter="[data-HTML-theme]">HTML Themes</li>
        <li class="tabs_nav_item" data-filter="[data-photography]">Photography</li>
        <li class="tabs_nav_item" data-filter="[data-logo]">Logos</li>
    </ul>
        
    <div class="container">
    
        <div id="portfolio-items" class="row-no-gutter row-filterable">

            <?php
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
                articleItem(array(
                    'type'   => 'portfolio',
                    'matrix' => true,
                    'span'   => 4,
                    'class'  => 'break-3-half break-2-full'
                ));
                
            ?>
                        
        </div><!-- portfolio-items -->
    
        <script>
            $(document).ready(function() {
                
                $('#portfolio-categories').KayzenClickHelper();
                
                $(window).load(function() {
                    $('#portfolio-items').isotope();
                    $('#portfolio-categories').on('click', 'li', function() {
                        var filterValue = $(this).attr('data-filter');
                        $('#portfolio-items').isotope({ 
                            filter: filterValue 
                        });
                    });
                });
                
            });
        </script>
    
    </div>        
    
</section>