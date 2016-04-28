<section class="section-primary-mini relative text-center min-break-1">	
    <ul class="tabs_nav-pills-center" id="portfolio-categories">
        <li class="tabs_nav_item active" data-filter="*">View All</li>
        <li class="tabs_nav_item" data-filter="[data-HTML-theme]">HTML Themes</li>
        <li class="tabs_nav_item" data-filter="[data-photography]">Photography</li>
        <li class="tabs_nav_item" data-filter="[data-logo]">Logos</li>
    </ul>
</section>

<section class="section relative">
    
    <div id="portfolio-items" class="row-no-gutter row-filterable fixed-table">

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
                'class'  => 'break-3-half break-2-full min-break-3'
            ));
            
        ?>
                    
    </div><!-- portfolio-items -->
    
    <script>
        $(document).ready(function() {
            
            $('#portfolio-categories').KayzenClickHelper();
            
            $('#portfolio-items').isotope();
            
            $('#portfolio-categories').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $('#portfolio-items').isotope({ 
                    filter: filterValue 
                });
            });
            
        });
    </script>            
    
</section>

<?php promoBanner() ?>