<section class="section-primary">
        
    <div class="container-small">
        
        <div id="portfolio-items">
            
            <?php 
                
                articleItem(array(
                    'type'  => 'portfolio'
                ));
                
                articleItem(array(
                    'media' => 'vimeo',
                    'type'  => 'portfolio'
                ));
                
                articleItem(array(
                    'media' => 'youtube',
                    'type'  => 'portfolio'
                ));
                
                articleItem(array(
                    'media' => 'carousel',
                    'type'  => 'portfolio'
                ));
                
                articleItem(array(
                    'media' => 'masonry',
                    'type'  => 'portfolio'
                ));
                
                articleItem(array(
                    'media' => 'audio',
                    'type'  => 'portfolio'
                ));
                
                articleItem(array(
                    'media' => 'codepen',
                    'type'  => 'portfolio'
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

                $("#portfolio-items").KayenInfiniteScroll({
                    isotopeGrid : false
                }, [articlesCarousel]);
                
            });
        </script>
        
        <ul id="pagination">
            <li class="next"><a href="full-width-infinite-scroll-2.php">2</a></li>
        </ul>
        
    </div><!-- container -->

</section>