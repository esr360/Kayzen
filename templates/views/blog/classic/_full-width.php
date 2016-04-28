<section class="section-primary">
        
    <div class="container-small">
            
        <div id="blog-items">
                
            <?php
                
                articleItem();
                
                articleItem(array(
                    'media' => 'vimeo'
                ));
                
                articleItem(array(
                    'media' => 'youtube'
                ));
                
                articleItem(array(
                    'media' => 'carousel'
                ));
                
                articleItem(array(
                    'media' => 'masonry'
                ));
                
                articleItem(array(
                    'media' => 'audio'
                ));
                
                articleItem(array(
                    'media' => 'codepen'
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
        
<?php promoBanner() ?>