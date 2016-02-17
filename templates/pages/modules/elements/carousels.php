<?php 
	include ('../../../app.php');
	// page config
	$title = 'Sliders/Carousels';
	$tagLine = 'assets/modules/elements/carousels';
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
                
                <p class="alert-bar-success">The 'carousels' module makes use of the <a href="http://www.owlcarousel.owlgraphic.com/" target="blank">owl-carousel</a> plugin which is built into <a href="<?php pageLink('documentation.php#building-kayzen') ?>"><b>app.js</b></a>.</p>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/carousels" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/carousels</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>carousel</code></li>
                        <li><b>Components:</b> null</li>
                        <li><b>Modifiers:</b> <code>scale[1, 2, 3]</code>, <code>stageBg</code>, <code>cornerDots</code>,  <code>revealNav</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="object">
                    
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

                <h3 class="heading-size-3">Manual Init</h3>
                
                <div class="object">
                    
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
                
                <p class="alert-bar-help">It is a requirement of Owl-Carousel to have the class 'owl-carousel' on the element on which you are calling the owlCarousel() function.</p>
                
                <h3 class="heading-size-3">Carousel With Corner Dots</h3>
                
                <div class="object">
                    
                    <div class="carousel-cornerDots owl-carousel span-5" id="demo-carousel-2">
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg" />
                    </div>
            
                    <script>
                        $(document).ready(function() {
                            $("#demo-carousel-2").owlCarousel({
                                items: 1
                            });
                        });
                    </script>
                    
                </div>

<pre data-enlighter-language="html" class="EnlighterJSRAW">

&lt;div class="carousel-cornerDots owl-carousel" id="demo-carousel-2">
    &lt;img src="/images/wallpapers/bg-4.jpg" />
    &lt;img src="/images/wallpapers/bg-5.jpg" />
    &lt;img src="/images/wallpapers/bg-6.jpg" />
    &lt;img src="/images/wallpapers/bg-7.jpg" />
&lt;/div>

&lt;script>
    $(document).ready(function() {
        $("#demo-carousel-2").owlCarousel({
            items : 1
        });
    });
&lt;/script>

</pre>

                <p>Manually create a carousel as shown previously, except this time your element needs to use the <code>carousel</code> module with the <code>cornerDots</code> modifier: <code>carousel-cornerDots</code></p>
                
                <h3 class="heading-size-3">Carousel With Revealing Next/Prev Arrows <small class="heading-light">(Hint: hover the carousel)</small></h3>
                
                <div class="object">
                    
                    <div class="carousel-revealNav owl-carousel span-5" id="demo-carousel-3">
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg" />
                    </div>
            
                    <script>
                        $(document).ready(function() {
                            $("#demo-carousel-3").owlCarousel({
                                items : 1,
                                nav : true,
                                navText : [
                                    '<i class="fa fa-angle-left fa-3x"></i>',
                                    '<i class="fa fa-angle-right fa-3x"></i>'
                                ]
                            });
                        });
                    </script>
                    
                </div>

<pre data-enlighter-language="html" class="EnlighterJSRAW">

&lt;div class="carousel-revealNav owl-carousel" id="demo-carousel-3">
    &lt;img src="/images/wallpapers/bg-4.jpg" />
    &lt;img src="/images/wallpapers/bg-5.jpg" />
    &lt;img src="/images/wallpapers/bg-6.jpg" />
    &lt;img src="/images/wallpapers/bg-7.jpg" />
&lt;/div>

&lt;script>
    $(document).ready(function() {
        $("#demo-carousel-3").owlCarousel({
            items : 1,
            nav : true,
            navText : [
                '&lt;i class="fa fa-angle-left fa-3x">&lt;/i>',
                '&lt;i class="fa fa-angle-right fa-3x">&lt;/i>'
            ],
        });
    });
&lt;/script>

</pre>

                <p>Where possilbe, Kayzen makes use of native plugin features to minimize the load of local resources. The above jQuery code is straight from the <a href="http://www.owlcarousel.owlgraphic.com/docs/api-options.html" target="blank">Owl-Carousel documentation</a>, using <a href="https://fortawesome.github.io/Font-Awesome/" target="blank">FontAwesome</a> icons for the previous and next arrows.</p>
                
                <h3 class="heading-size-3">Carousel With Corner Dots & Revealing Next/Prev Arrows</h3>
                
                <div class="object">
                    
                    <div class="carousel-cornerDots-revealNav owl-carousel span-5" id="demo-carousel-4">
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg" />
                    </div>
            
                    <script>
                        $(document).ready(function() {
                            $("#demo-carousel-4").owlCarousel({
                                items : 1,
                                nav : true,
                                navText : [
                                    '<i class="fa fa-angle-left fa-3x"></i>',
                                    '<i class="fa fa-angle-right fa-3x"></i>'
                                ]
                            });
                        });
                    </script>
                    
                </div>

<pre data-enlighter-language="html" class="EnlighterJSRAW">

&lt;div class="carousel-cornerDots-revealNav owl-carousel" id="demo-carousel-4">
    &lt;img src="/images/wallpapers/bg-4.jpg" />
    &lt;img src="/images/wallpapers/bg-5.jpg" />
    &lt;img src="/images/wallpapers/bg-6.jpg" />
    &lt;img src="/images/wallpapers/bg-7.jpg" />
&lt;/div>

&lt;script>
    $(document).ready(function() {
        $("#demo-carousel-4").owlCarousel({
            items : 1,
            nav : true,
            navText : [
                '&lt;i class="fa fa-angle-left fa-3x">&lt;/i>',
                '&lt;i class="fa fa-angle-right fa-3x">&lt;/i>'
            ],
        });
    });
&lt;/script>

</pre>

                <p>The same as the previous exaple except this time the <code>carousel</code> module has both the <code>cornerDots</code> and <code>revealNav</code> modifiers, resulting in the class <code>carousel-cornerDots-revealNav</code>. You can easily change the HTML for the next/previous arrows by editing the <code>navText</code> option in the above code.</p>
                
                <h3 class="heading-size-3">Carousel With Colored Stage</h3>
                
                <div class="object">
                    
                    <div class="carousel-stageBg owl-carousel" id="demo-carousel-5">
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg" />
                    </div>
            
                    <script>
                        $(document).ready(function() {
                            $("#demo-carousel-5").owlCarousel();
                        });
                    </script>
                    
                </div>

<pre data-enlighter-language="html" class="EnlighterJSRAW">

&lt;div class="carousel-stageBg owl-carousel" id="demo-carousel-5">
    &lt;img src="/images/wallpapers/bg-4.jpg" />
    &lt;img src="/images/wallpapers/bg-5.jpg" />
    &lt;img src="/images/wallpapers/bg-6.jpg" />
    &lt;img src="/images/wallpapers/bg-7.jpg" />
&lt;/div>

&lt;script>
    $(document).ready(function() {
        $("#demo-carousel-5").owlCarousel();
    });
&lt;/script>

</pre>

                <p>This is useful for visually seperating the carousel from other content when the carousel has less slides than it's suited for, as in the above example. Use the <code>stageBg</code> modifier on the <code>carousel</code> module: <code>carousel-stageBg</code>.</p>
                
                <h3 class="heading-size-3">Scaled Centered Slide</h3>
                
                <div class="object hide-overflow">
                    
                    <div class="carousel-scale-2 owl-carousel" id="demo-carousel-6">
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-4.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg" />
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg" />
                    </div>
                    
                    <script>
                        $(document).ready(function() {
                            
                            var $scaleCarousel = $("#demo-carousel-6");
                            
                            $scaleCarousel.owlCarousel({
                                center: true,
                                loop: true
                            }).on('click', '.owl-item', function(e) {
                                var carousel = $scaleCarousel.data('owl.carousel');
                                e.preventDefault();
                                carousel.to(carousel.relative($(this).index()));
                            });
                            
                        });
                    </script>
                    
                </div>
                

<pre data-enlighter-language="html" class="EnlighterJSRAW">

&lt;div class="carousel-scale-2 owl-carousel" id="demo-carousel-6">
    &lt;img src="/images/wallpapers/bg-4.jpg" />
    &lt;img src="/images/wallpapers/bg-5.jpg" />
    &lt;img src="/images/wallpapers/bg-6.jpg" />
    &lt;img src="/images/wallpapers/bg-7.jpg" />
&lt;/div>
    
&lt;script>
    ...
&lt;/script>
</pre>

                <p>To create a carousel with a scaled centered slide, the <code>scale-X</code> modifier is used, where <code>X</code> is an integer between 1 and 3, with each one offering a different size (with 1 being the smallest): <code>carousel-scale-2</code></p>
            
                <p>The jQuery for this carousel is slightly more compilcated than the previous examples, but it's still nothing you can't simply copy/paste:</p>

<pre data-enlighter-language="javascript" class="EnlighterJSRAW">

$(document).ready(function() {

    var $scaleCarousel = $("#demo-carousel-6");
    
    $scaleCarousel.owlCarousel({
        center: true,
        loop: true
    }).on('click', '.owl-item', function(e) {
        var carousel = $scaleCarousel.data('owl.carousel');
        e.preventDefault();
        carousel.to(carousel.relative($(this).index()));
    });

});

</pre>
            
                <h2 class="heading-light-size-5">Customizing</h2>
            
                <p>The carousels can be customized using the following options:</p>
            
                <p class="alert-bar-help">Read the <a href="configuration.html">Configuration</a> page to learn more about a module's configuration.</p>
                            
                <table class="table-style-1-small">
					<thead>
						<tr>
							<th>Property Name</th>
							<th>Default Value</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><code>scale-1-size</code></td>
							<td><code class="value">1.1</code></td>
							<td>The scale of the centered item when using the <code>scale-1</code> modifer.</td>
						</tr>
						<tr>
							<td><code>scale-2-size</code></td>
							<td><code class="value">1.25</code></td>
							<td>The scale of the centered item when using the <code>scale-2</code> modifer.</td>
						</tr>
						<tr>
							<td><code>scale-3-size</code></td>
							<td><code class="value">1.4</code></td>
							<td>The scale of the centered item when using the <code>scale-3</code> modifer.</td>
						</tr>
						<tr>
							<td><code>stage-background</code></td>
							<td><code class="value">color('greyscale', 'grey-3')</code></td>
							<td>The background color of the carousel stage when using the <code>stageBg</code> modifier.</td>
						</tr>
                    </tbody>
                </table>
                
				<p>To change one of the above values, pass your new value(s) to the <code>carousels()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
         
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include carousels((
    'scale-1-size' : 1.2,
    'scale-2-size' : 1.4,
    'scale-3-size' : 1.6
));
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