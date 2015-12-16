<?php 
	include ('../../../app.php');
	// page config
	$title = 'Images & Graphics';
	$tagLine = 'app/modules/elements/images';
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
					<li class="plain"><span>_images.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/images" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/images</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p class="alert-bar-help">The 'images()' mixin contains several modules which are outlined below.</p>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>image</code></li>
                        <li><b>Components:</b> n/a</li>
                        <li><b>Modifiers:</b> n/a</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <h3 class="heading-size-3">Desktop Graphic Module</h3>
                
                <div class="well object">
                    <div class="desktop-graphic span-5">
                        <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                        <div class="desktop-graphic_image" style="background-image: url('<?php echo appDir ?>/images/stock-1.jpg')"></div>
                    </div>  
                    <div class="desktop-graphic-scroll span-5">
                        <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                        <div class="desktop-graphic_image" style="background-image: url('<?php echo appDir ?>/images/stock-2.jpg')"></div>
                    </div>                    
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="desktop-graphic">
    &lt;img src="/images/demo-screen.png" alt="" />
    &lt;div class="desktop-graphic_image" style="background-image: url('/images/stock-1.jpg')">&lt;/div>
&lt;/div>  
</pre>

                <h4 class="heading-size-2-uppercase">Scroll On Hover</h4>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="desktop-graphic-scroll">
    &lt;img src="/images/demo-screen.png" alt="" />
    &lt;div class="desktop-graphic_image" style="background-image: url('/images/stock-2.jpg')">&lt;/div>
&lt;/div> 
</pre>
                
                <h3 class="heading-size-3">Mobile Graphic Module</h3>
                
                <div class="well object">
                    <div class="span-3">
                        <img class="mobile-graphic" src="<?php echo appDir ?>/images/mobile-screen.png" />
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;img class="mobile-graphic" src="/images/mobile-screen.png" />
</pre>
                
                <h4 class="heading-size-2-uppercase">Color Options</h4>
                
                <div class="well object">
                    <div class="row">
                        <div class="span-2">
                            <img class="mobile-graphic-blue" src="<?php echo appDir ?>/images/mobile-screen.png" />
                        </div>
                        <div class="span-2">
                            <img class="mobile-graphic-green" src="<?php echo appDir ?>/images/mobile-screen.png" />
                        </div>
                        <div class="span-2">
                            <img class="mobile-graphic-purple" src="<?php echo appDir ?>/images/mobile-screen.png" />
                        </div>
                        <div class="span-2">
                            <img class="mobile-graphic-red" src="<?php echo appDir ?>/images/mobile-screen.png" />
                        </div>
                        <div class="span-2">
                            <img class="mobile-graphic-yellow" src="<?php echo appDir ?>/images/mobile-screen.png" />
                        </div>
                        <div class="span-2">
                            <img class="mobile-graphic-white" src="<?php echo appDir ?>/images/mobile-screen.png" />
                        </div>
                    </div>
                </div>

                <p><strong>Available colors:</strong></p>
                
                <ul class="list-clear">
                    <li>blue</li>
                    <li>green</li>
                    <li>purple</li>
                    <li>red</li>
                    <li>yellow</li>
                    <li>white</li>
                </ul>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;img class="mobile-graphic-purple" src="/images/mobile-screen.png" />
</pre>
                
                <h3 class="heading-size-3">Horizontal/Vertical Centering</h3>
                
                <p>The class <code>center-xy</code> will horizontally and vertically center an image in a container. Alone this doesn't have much practical use, but can be used in different creative ways.</p>
                
                <div class="well object">
                    <div class="center-xy hide-overflow" style="height: 88px; width: 180px;">
                        <img src="<?php echo appDir ?>/images/team/team-1.jpg">
                    </div>
                </div>    
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="center-xy hide-overflow" style="height: 88px; width: 180px;">
    &lt;img src="/images/team/team-1.jpg">
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