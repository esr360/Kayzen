 <?php function testimonials($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option' => 'VALUE'
    ), $custom); ?>

    <section 
        class="section-secondary-overlay-alt"
        style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
    >

        <div class="container-small text-center owl-carousel" id="testimonials-carousel">
            <blockquote class="blockquote">
                <a class="blockquote_avatar-large" href="<?php pageLink('blog/classic/full-width.php') ?>">
                    <img src="/app/images/team/team-2.jpg" alt="">
                </a>
                <div class="blockquote_content">
                    <p class="lede">Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
                </div>
                <div class="blockquote_cite"> 
                    <h4 class="heading-highlight"><b>Brendon Mack - Theme Forest</b></h4>
                </div>
            </blockquote>
            <blockquote class="blockquote">
                <a class="blockquote_avatar-large" href="<?php pageLink('blog/classic/full-width.php') ?>">
                    <img src="/app/images/team/team-2.jpg" alt="">
                </a>
                <div class="blockquote_content">
                    <p class="lede">Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
                </div>
                <div class="blockquote_cite"> 
                    <h4 class="heading-highlight"><b>Brendon Mack - Theme Forest</b></h4>
                </div>
            </blockquote>
        </div>
        
        <nav class="slide-nav">
            <button class="slide-prev button-icon-border-size-3"><i class="fa fa-angle-left"></i></button>
            <button class="slide-next button-icon-border-size-3"><i class="fa fa-angle-right"></i></button>
        </nav>
        
        <script>
            $(document).ready(function() {
                
                var testimonialsCarousel = $("#testimonials-carousel");
                
                testimonialsCarousel.owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 30,
                    dots: false
                })
        
                testimonialsCarousel.find("+ .slide-nav .slide-next").click(function() {
                    testimonialsCarousel.trigger('next.owl.carousel');
                });
                testimonialsCarousel.find("+ .slide-nav .slide-prev").click(function() {
                    testimonialsCarousel.trigger('prev.owl.carousel');
                });
                
            });
        </script>
        
    </section>

<?php } ?>