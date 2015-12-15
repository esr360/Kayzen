<?php 
	include ('../../../app.php');
	// page config
	$title = 'Images';
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
                
                <h3 class="heading-size-3"><code>desktop-graphic()</code> module</h3>
                
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
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="accordion">

<div class="desktop-graphic span-5">
    <img src="/images/demo-screen.png" alt="" />
    <div class="desktop-graphic_image" style="background-image: url('/images/stock-1.jpg')"></div>
</div>  
<div class="desktop-graphic-scroll span-5">
    <img src="/images/demo-screen.png" alt="" />
    <div class="desktop-graphic_image" style="background-image: url('/images/stock-2.jpg')"></div>
</div> 
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