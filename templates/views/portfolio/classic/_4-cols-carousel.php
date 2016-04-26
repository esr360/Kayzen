<section class="section-primary relative">
    
    <div id="portfolio-items" class="owl-carousel owl-full">
        
        <div class="container">

            <div class="row-flow row-waffle-infinite fixed-table">
                
                <?php
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'media'  => 'carousel',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'media'  => 'youtube',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'media'  => 'vimeo',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'media'  => 'carousel',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'media'  => 'carousel',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                ?>
                
            </div>
        
        </div><!-- container -->
        
        <div class="container">

            <div class="row-flow row-waffle fixed-table">
                
                <?php
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'media'  => 'carousel',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'media'  => 'youtube',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'media'  => 'vimeo',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'media'  => 'carousel',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                    articleItem(array(
                        'title'  => 'Lorem Ipsum Dolor',
                        'type'   => 'portfolio',
                        'media'  => 'carousel',
                        'size'   => 'small',
                        'span'   => 3,
                    ));
                    
                ?>
                
            </div>
        
        </div><!-- container -->
                    
    </div><!-- portfolio-items -->
    
    <nav class="slide-nav">
        <button class="slide-prev button-icon-border-size-3"><i class="fa fa-angle-left"></i></button>
        <button class="slide-next button-icon-border-size-3"><i class="fa fa-angle-right"></i></button>
    </nav>
    
    <script>
        $(document).ready(function() {
            
            var portfolioCarousel = $("#portfolio-items");
            
            portfolioCarousel.owlCarousel({
                items: 1,
                loop: true
            });
    
            portfolioCarousel.find("+ .slide-nav .slide-next").click(function() {
                portfolioCarousel.trigger('next.owl.carousel');
            });
            portfolioCarousel.find("+ .slide-nav .slide-prev").click(function() {
                portfolioCarousel.trigger('prev.owl.carousel');
            });
            
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
            
        });
    </script>
    
</section>