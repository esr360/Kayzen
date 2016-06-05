<?php 
	include ('../../../app.php');
	// page config
	$title = 'Billboard';
	$tagLine = 'assets/modules/objects/billboard';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head() ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-opaque-sticky'
            ));

            billboard([
                'title'    => [
                    'text' => $title
                ],
                'tag-line' => $tagLine
            ]);
            
        ?>
		
		<section class="section-primary">
			
			<div class="container-small">
				
				<h2 class="heading-light-size-5">Files</h2>
				
				<ul class="list-tags">
					<li class="plain"><span>_billboard.scss</span></li>
					<li class="plain"><span>billboard.js</span></li>	
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/billboard" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/billboard</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>The billboard is the top section of the theme which contains the page title, background image and other information about the current page. This may also be known as the 'hero' section.</p>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>billboard</code></li>
                        <li><b>Modifiers:</b> <code>full-screen</code>, <code>videoBg</code>, <code>overlay</code></li>
                        <li><b>Components:</b> <code>wrapper</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="billboard">
    &lt;div class="billboard_wrapper container">
        ...
    &lt;/div>
&lt;/div>
</pre>

                <p><a href="#">View Demo</a></p>

                <h3 class="heading-size-3">Full-Screen</h3>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="billboard-full-screen">
    ...
&lt;/div>
</pre>

                <p><a href="#">View Demo</a></p>

                <h3 class="heading-size-3">Background Overlay</h3>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="billboard-overlay">
    ...
&lt;/div>
</pre>

                <p><a href="#">View Demo</a></p>
                
                <h3 class="heading-size-3">Video Background <span class="heading-light">(+ full-screen)</span></h3>

                <h4 class="heading-size-2-uppercase">Youtube</h4>

<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;section class="billboard-videoBg-full-screen">
    &lt;div class="auto-resizable-iframe" data-iframe-height="56.5%">
        &lt;div>
            &lt;iframe allowfullscreen src="http://www.youtube.com/embed/Q3oItpVa9fs?autoplay=1"></iframe>
        &lt;/div>
    &lt;/div>
&lt;/section>
</pre>

                <p><a href="#">View Demo</a></p>
                
                <h4 class="heading-size-2-uppercase">Vimeo</h4>

<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;section class="billboard-videoBg-full-screen">
    &lt;div class="auto-resizable-iframe" data-iframe-height="56.5%">
        &lt;div>
            &lt;iframe 
            src="https://player.vimeo.com/video/87701971?autoplay=1" 
            frameborder="0" 
            webkitallowfullscreen 
            mozallowfullscreen 
            allowfullscreen>&lt;/iframe>
        &lt;/div>
    &lt;/div>
&lt;/section>
</pre>

                <p><a href="#">View Demo</a></p>
                
                <h3 class="heading-size-3">Parallax Content</h3>
                 
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="billboard-full-screen">
    &lt;div class="billboard_wrapper">
        &lt;div id="billboard-fade-parallax">
            ...
        &lt;/div>
    &lt;/div>
&lt;/div>
</pre>
                <p>Then in your theme's JS file (e.g. assets/themes/Kayzen/kayzen.js), call the <code>billboard()</code> function on the content container:</p>
               
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#billboard-fade-parallax').billboard();
</pre>

                <p><a href="#">View Demo</a></p>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The billboard can be customized using the following options:</p>
				
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
							<td><code>full-screen</code></td>
							<td><code class="value">false</code></td>
							<td>Set whether the billboard should be full-screen without any modifiers.</td>
						</tr>
						<tr>
							<td><code>overlay</code></td>
							<td><code class="value">false</code></td>
							<td>Set whether the billboard should have an overlay without any modifiers.</td>
						</tr>
						<tr>
							<td><code>bg-color</code></td>
							<td><code class="value">color('greyscale', 'grey-5')</code></td>
							<td>The billboard background.</td>
						</tr>
						<tr>
							<td><code>bg-image</code></td>
							<td><code class="value">""</code></td>
							<td>The billboard background image.</td>
						</tr>
						<tr>
							<td><code>overlay-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The color for the billboard overlay (if applicable).</td>
						</tr>
						<tr>
							<td><code>overlay-opacity</code></td>
							<td><code class="value">0.6</code></td>
							<td>The opacity for the billboard overlay (if applicable).</td>
						</tr>
						<tr>
							<td><code>color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The billboard text color.</td>
						</tr>
						<tr>
							<td><code>text-align</code></td>
							<td><code class="value">center</code></td>
							<td>The alignment of the billboard content.</td>
						</tr>
						<tr>
							<td><code>min-height</code></td>
							<td><code class="value">500px</code></td>
							<td>The minimum height the billboard should occupy.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>billboard()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include billboard((
    'icon-color' : rgba(white, 0.6),
    'title-bg'   : color('brand', 'primary')
));
</pre>

			</div><!-- container-small -->
			
		</section>

		<?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>
		
    <?php include (ROOT.'/includes/syntax-highlighter.php'); ?>

</body>
</html>