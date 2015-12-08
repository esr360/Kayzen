<?php 
	include ('../../../app.php');
	// page config
	$title = 'Sliders/Carousels';
	$tagLine = 'app/modules/elements/carousels';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-dark-sticky'
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
            
        ?>
		
		<section class="section-primary">
			
			<div class="container-small">
				
				<h2 class="heading-light-size-5">Files</h2>
				
				<ul class="list-tags">
					<li class="plain"><span>_carousels.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
                <p class="alert-bar-success">The 'carousels' module makes use of the <a href="#">owl-carousel</a> plugin which is built into <a href="#"><b>app.js</b></a>.</p>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/carousels" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/carousels</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>carousel</code></li>
                        <li><b>Components:</b> null</li>
                        <li><b>Modifiers:</b> <code>scale[1, 2, 3]</code>, <code>stage-bg</code>, <code>cornerDots</code>,  <code>revealNav</code>, <code>thumbnails</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="section-primary-mini-flush">
                    
                    <div class="carousel">
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg" />
                    </div>
                    
                </div>

<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="carousel">
    &lt;img src="/images/wallpapers/bg-4.jpg" />
    &lt;img src="/images/wallpapers/bg-5.jpg" />
    &lt;img src="/images/wallpapers/bg-6.jpg" />
    &lt;img src="/images/wallpapers/bg-7.jpg" />
&lt;/div>
</pre>

                <p>Adding the <code>carousel</code> class to a container of elements wil convert them into a carousel with the default Owl-Carousel options.</p>

                <h3 class="heading-size-3">Manual Inint</h3>
                
                <div class="section-primary-mini-flush">
                    
                    <div class="owl-carousel" id="demo-carousel-1">
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg" />
                    </div>
            
                    <script>
                        $(document).ready(function() {
                            $("#demo-carousel-1").owlCarousel();
                        });
                    </script>
                    
                </div>

<pre data-enlighter-language="html" class="EnlighterJSRAW">

&lt;div class="owl-carousel" id="demo-carousel-1">
    &lt;img src="/images/wallpapers/bg-4.jpg" />
    &lt;img src="/images/wallpapers/bg-5.jpg" />
    &lt;img src="/images/wallpapers/bg-6.jpg" />
    &lt;img src="/images/wallpapers/bg-7.jpg" />
&lt;/div>

&lt;script>
    $(document).ready(function() {
        $("#demo-carousel-1").owlCarousel();
    });
&lt;/script>

</pre>

                <p>To create a manual instance of a carousel, perhaps so you can customize the options, call the <code>owlCarousel()</code> function on your element. It is recommended to use a custom ID to target your element. The script can either be placed inline as in the above example (making sure it is inside a document.ready function), or can be placed in an external scrpit.</p>
                
                <h3 class="heading-size-3">Scaled Centered Slide</h3>
                
                <div class="section-primary-mini-flush hide-overflow">
                    
                    <!-- Shortcodes Graphics -->
                    <div class="carousel-scale-2 owl-carousel" id="shortcodes-carousel">
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg" />
                    </div>
            
                    <!-- Shortcodes Carousel -->
                    <script>
                        $(document).ready(function() {
                            
                            var shortcodesCarousel = $("#shortcodes-carousel");
                            
                            shortcodesCarousel.owlCarousel({
                                items: 3,
                                center: true,
                                loop: true
                            })
                            .on('click', '.owl-item', function(e) {
                                var carousel = shortcodesCarousel.data('owl.carousel');
                                e.preventDefault();
                                carousel.to(carousel.relative($(this).index()));
                            });
                            
                        }); // document.ready
                    </script>
                    
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="accordion">
    &lt;div>
        &lt;div>Accordion Title&lt;/div>
        &lt;div>...&lt;/div>
    &lt;/div>
    &lt;div>
        &lt;div>Accordion Title&lt;/div>
        &lt;div>...&lt;/div>
    &lt;/div>
    &lt;div>
        &lt;div>Accordion Title&lt;/div>
        &lt;div>...&lt;/div>
    &lt;/div>
&lt;/div>
</pre>
                
			</div><!-- container-small -->
			
		</section>

		<?php 

            appFooter();
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>
		
    <?php include (ROOT.'/includes/syntax-highlighter.php'); ?>

</body>
</html>