<?php 
	include ('../../../app.php');
	// page config
	$title = 'Icons';
	$tagLine = 'app/modules/elements/icon';
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
					<li class="plain"><span>_icons.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
                <p class="alert-bar-success">The 'icons' module makes use of the <a href="#">Font Awesome</a> icon font, which is built into <a href="#"><b>app.css</b></a>.</p>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/icons" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/icons</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>icon</code></li>
                        <li><b>Components:</b> <code>group</code></li>
                        <li><b>Modifiers:</b> <code>round</code>, <code>circle</code>, <code>plain</code>, <code>border</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <h3 class="heading-size-3">Styles</h3>
                
                <div class="well object">
                    <div class="icon">
                        <i class="fa fa-facebook"></i>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="icon">
    &lt;i class="fa fa-facebook">&lt;/i>
&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Icon - Round</h4>
                
                <div class="well object">
                    <div class="icon-round">
                        <i class="fa fa-facebook"></i>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="icon-round">
    &lt;i class="fa fa-facebook">&lt;/i>
&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Icon - Circle</h4>
                
                <div class="well object">
                    <div class="icon-circle">
                        <i class="fa fa-facebook"></i>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="icon-circle">
    &lt;i class="fa fa-facebook">&lt;/i>
&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Icon - Border</h4>
                
                <div class="well object">
                    <div class="icon-border">
                        <i class="fa fa-facebook"></i>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="icon-border">
    &lt;i class="fa fa-facebook">&lt;/i>
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Icon - Plain</h4>
                
                <div class="well object">
                    <div class="icon-plain">
                        <i class="fa fa-facebook"></i>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="icon-plain">
    &lt;i class="fa fa-facebook">&lt;/i>
&lt;/div>
</pre>

                <h3 class="heading-size-3">Colors</h3>
                
                <p>The colors for the icons are generated from the <a href="#">color-palette</a> module. Below shows the default colors for these palettes; if you modify the colors in the color-palette module, either by adding, removing or modifying existing values, these will be reflected in your icons.</p>
                
                <h4 class="heading-size-2-uppercase">Palette - Brand</h4>
                
                <div class="well object">
                    <div class="icon-primary">
                        <i class="fa fa-pied-piper"></i>
                    </div>
                    <div class="icon-secondary">
                        <i class="fa fa-pied-piper"></i>
                    </div>
                    <div class="icon-brand-3">
                        <i class="fa fa-pied-piper"></i>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="icon-secondary">
    &lt;i class="fa fa-pied-piper">&lt;/i>
&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Palette - Greyscale</h4>
                
                <div class="well object">
                    <div class="icon-white">
                        <i class="fa fa-github-alt"></i>
                    </div>
                    <div class="icon-grey-1">
                        <i class="fa fa-github-alt"></i>
                    </div>
                    <div class="icon-grey-2">
                        <i class="fa fa-github-alt"></i>
                    </div>
                    <div class="icon-grey-3">
                        <i class="fa fa-github-alt"></i>
                    </div>
                    <div class="icon-grey-4">
                        <i class="fa fa-github-alt"></i>
                    </div>
                    <div class="icon-grey-5">
                        <i class="fa fa-github-alt"></i>
                    </div>
                    <div class="icon-grey-6">
                        <i class="fa fa-github-alt"></i>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="icon-grey-4">
    &lt;i class="fa fa-github-alt">&lt;/i>
&lt;/div>
</pre>
                
                <h3 class="heading-size-3">Sizes</h3>
                
                <p>For each size in the <a href="#">typography</a> module, a modifier for the icons is generated for that size.</p>
                
                <div class="well object">
                    <div class="icon-size-1">
                        <i class="fa fa-chrome"></i>
                    </div>
                    <div class="icon-size-2">
                        <i class="fa fa-chrome"></i>
                    </div>
                    <div class="icon-size-3">
                        <i class="fa fa-chrome"></i>
                    </div>
                    <div class="icon-size-4">
                        <i class="fa fa-chrome"></i>
                    </div>
                    <div class="icon-size-5">
                        <i class="fa fa-chrome"></i>
                    </div>
                    <div class="icon-size-6">
                        <i class="fa fa-chrome"></i>
                    </div>
                    <div class="icon-size-7">
                        <i class="fa fa-chrome"></i>
                    </div>
                    <div class="icon-size-8">
                        <i class="fa fa-chrome"></i>
                    </div>
                    <div class="icon-size-9">
                        <i class="fa fa-chrome"></i>
                    </div>
                </div> 
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="icon-size-4">
    &lt;i class="fa fa-chrome">&lt;/i>
&lt;/div>
</pre>      
                
                <h3 class="heading-size-3">Mixing & Matching</h3>
                
                <p>You can of course mix and match any and all of the above combinations.</p>   
                
                <div class="well object">
                    <div class="icon-circle-border-secondary-size-5">
                        <i class="fa fa-chrome"></i>
                    </div>
                </div>     
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="icon-circle-border-secondary-size-5">
    &lt;i class="fa fa-chrome">&lt;/i>
&lt;/div>
</pre>    
                <h3 class="heading-size-3">Combining Styles</h3>
                
                <h3 class="heading-size-3">Icon Group</h3>
                
                <p>To group more than one icon together you can use the <code>icon_group</code> class.</p>
                
                <div class="well object">
                    <div class="icon_group">
                        <div class="icon">
                            <i class="fa fa-chrome"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-chrome"></i>
                        </div>
                        <div class="icon">
                            <i class="fa fa-chrome"></i>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="icon_group">
    &lt;div class="icon">
        &lt;i class="fa fa-chrome">&lt;/i>
    &lt;/div>
    &lt;div class="icon">
        &lt;i class="fa fa-chrome">&lt;/i>
    &lt;/div>
    &lt;div class="icon">
        &lt;i class="fa fa-chrome">&lt;/i>
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