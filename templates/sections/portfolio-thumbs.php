<section class="section-primary-flush relative container text-center">
        
    <div class="span-7">
        <div class="desktop-graphic">
            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
            <div class="desktop-graphic_image owl-carousel" id="portfolio-thumbs">
                <div class="bg-cover" style="background-image: url('<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg')?>')"></div>
                <div class="bg-cover" style="background-image: url('<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg')?>')"></div>
                <div class="bg-cover" style="background-image: url('<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg')?>')"></div>
                <div class="bg-cover" style="background-image: url('<?php echo stockImage('demo/stock-'.rand(1, 25).'.jpg')?>')"></div>
            </div>
        </div>
        <nav class="slide-nav" id="desktop-graphic_nav">
            <button class="slide-prev button-icon-border-size-3-grey-3"><i class="fa fa-angle-left"></i></button>
            <button class="slide-next button-icon-border-size-3-grey-3"><i class="fa fa-angle-right"></i></button>
        </nav>
    </div>
                
    <script>
        $(document).ready(function() {
            
            var thumbsCarousel = $("#portfolio-thumbs");
            
            thumbsCarousel.owlCarousel({
                items : 1,
                loop  : true,
                dots  : false
            });
            
            $("#desktop-graphic_nav .slide-next").click(function() {
                thumbsCarousel.trigger('next.owl.carousel');
            });
            $("#desktop-graphic_nav .slide-prev").click(function() {
                thumbsCarousel.trigger('prev.owl.carousel');
            });
            
        });
    </script>
    
</section>