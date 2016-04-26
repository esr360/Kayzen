<section class="section-primary relative">
        
    <div class="container">
    
        <div id="portfolio-items" class="row-no-gutter">

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
                
                // Redefine the lightbox plugin to pass to infiniteScroll
                function articlesGallery() {
                    $('[rel="lightbox"]').magnificPopup({
                        type : 'image'
                    });
                };

                $("#portfolio-items").KayenInfiniteScroll({
                    isotopeGrid : false
                }, articlesGallery);
                
            });
        </script>
        
        <ul id="pagination">
            <li class="next"><a href="3-cols-infinite-scroll-3.php">3</a></li>
        </ul>   
    
    </div>       
    
</section>