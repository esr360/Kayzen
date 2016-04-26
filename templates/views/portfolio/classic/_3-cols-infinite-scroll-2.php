<section class="section-primary relative">
        
    <div class="container">

        <div class="row-flow row-waffle fixed-table" id="portfolio-items">

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
                    'media'  => 'carousel',
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
                $("#portfolio-items").KayenInfiniteScroll({
                    isotopeGrid : false
                });
            });
        </script>
        
        <ul id="pagination">
            <li class="next"><a href="3-cols-infinite-scroll-3.php">3</a></li>
        </ul>
    
    </div><!-- container -->
    
</section>