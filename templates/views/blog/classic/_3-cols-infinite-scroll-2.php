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
    
        <script>
            $(document).ready(function() {
                
                function articlesCarousel() {
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
                } articlesCarousel();

                $("#blog-items").KayenInfiniteScroll({
                    isotopeGrid : false
                }, articlesCarousel);
                
            });
        </script>
        
        <ul id="pagination">
            <li class="next"><a href="3-cols-infinite-scroll-3.php">3</a></li>
        </ul>
        
    </div><!-- container -->

</section>