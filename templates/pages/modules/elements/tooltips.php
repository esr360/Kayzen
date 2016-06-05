<?php 
	include ('../../../app.php');
	// page config
	$title = 'Tooltips/Popovers';
	$tagLine = 'assets/modules/elements/tooltips';
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
					<li class="plain"><span>_tooltips.scss</span></li>
					<li class="plain"><span>tooltips.js</span></li>	
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/tooltips" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/tooltips</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>tooltip</code></li>
                        <li><b>Components:</b> <code>wrapper</code>, <code>content</code></li>
                        <li><b>Modifiers:</b> <code>top</code>, <code>bottom</code>, <code>left</code>, <code>right</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <h3 class="heading-size-3">Positions</h3>
                
                <h4 class="heading-size-2-uppercase">Tooltip - Top</h4>
                
                <div class="well object">
                    <a href="#" class="button-icon tooltip-top" data-tooltip="Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#" class="button-icon tooltip-top" data-tooltip="Facebook">
    &lt;i class="fa fa-facebook">&lt;/i>
&lt;/a>
</pre>
                
                <h4 class="heading-size-2-uppercase">Tooltip - Bottom</h4>
                
                <div class="well object">
                    <a href="#" class="button-icon tooltip-bottom" data-tooltip="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#" class="button-icon tooltip-bottom" data-tooltip="Twitter">
    &lt;i class="fa fa-twitter">&lt;/i>
&lt;/a>
</pre>
                
                <h4 class="heading-size-2-uppercase">Tooltip - Left</h4>
                
                <div class="well object">
                    <a href="#" class="button-icon tooltip-left" data-tooltip="Skype">
                        <i class="fa fa-skype"></i>
                    </a>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#" class="button-icon tooltip-left" data-tooltip="Skype">
    &lt;i class="fa fa-skype">&lt;/i>
&lt;/a>
</pre>
                
                <h4 class="heading-size-2-uppercase">Tooltip - Right</h4>
                
                <div class="well object">
                    <a href="#" class="button-icon tooltip-right" data-tooltip="Dribbble">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#" class="button-icon tooltip-right" data-tooltip="Dribbble">
    &lt;i class="fa fa-dribbble">&lt;/i>
&lt;/a>
</pre>

                <h3 class="heading-size-3">Inline Tooltip</h3>
                
                <div class="well object">
                    <p>Lorem ipsum dolor sit amet, <a href="#" class="tooltip inline-tooltip" data-tooltip="I am tooltip!">consectetur adipiscing</a> elit. Nulla at mi ac sapien lobortis sagittis.</p>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#" class="tooltip inline-tooltip" data-tooltip="I am tooltip!">consectetur adipiscing&lt;/a>
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The thumbnails can be customized using the following options:</p>
                
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
							<td><code>max-width</code></td>
							<td><code class="value">500px</code></td>
							<td>The maximum width for tooltips before text starts to wrap.</td>
						</tr>
						<tr>
							<td><code>padding</code></td>
							<td><code class="value">0.5em 0.75em</code></td>
							<td>The tooltip padding.</td>
						</tr>
						<tr>
							<td><code>distance</code></td>
							<td><code class="value">-1em</code></td>
							<td>The distance the tooltip should be from the parent object.</td>
						</tr>
						<tr>
							<td><code>background</code></td>
							<td><code class="value">rgba(black, 0.75)</code></td>
							<td>The tooltip background.</td>
						</tr>
						<tr>
							<td><code>border-radius</code></td>
							<td><code class="value">0</code></td>
							<td>The radius of the toolitp.</td>
						</tr>
						<tr>
							<td><code>arrow-size</code></td>
							<td><code class="value">0.5em</code></td>
							<td>The size of the tooltip arrow.</td>
						</tr>
						<tr>
							<td><code>arrow-color</code></td>
							<td><code class="value">rgba(black, 0.75)</code></td>
							<td>The tooltip arrow color.</td>
						</tr>
						<tr>
							<td><code>font-size</code></td>
							<td><code class="value">font-size('size-2', $rem: true)</code></td>
							<td>The tooltip font size.</td>
						</tr>
						<tr>
							<td><code>color</code></td>
							<td><code class="value">white</code></td>
							<td>The tooltip text color.</td>
						</tr>
						<tr>
							<td><code>text-transform</code></td>
							<td><code class="value">none</code></td>
							<td>The tooltip text-transform.</td>
						</tr>
						<tr>
							<td><code>font-weight</code></td>
							<td><code class="value">normal</code></td>
							<td>The tooltip font weight.</td>
						</tr>
						<tr>
							<td><code>transition</code></td>
							<td><code class="value">base('transition')</code></td>
							<td>The tooltip fade-in animation transition duration.</td>
						</tr>
						<tr>
							<td><code>z-index</code></td>
							<td><code class="value">9999</code></td>
							<td>The tooltip z-index.</td>
						</tr>
                    </tbody>
                </table>

				<p>To change one of the above values, pass your new value(s) to the <code>tooltips()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>   
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include tooltips((
    'background'       : linear-gradient(to bottom, #9b00d8 0%, #258dc8 100%),
    'arrow-color'      : #9B58B5,
    'border-radius'    : white,
    'text-transform'   : uppercase,
    'padding'          : 0.65em 1.2em
));
</pre>  

                <style>
                    #tooltip-demo .tooltip_content {
                        background: linear-gradient(to bottom, #ca2be2 0%, #9925c6 100%);
                        text-transform: uppercase;
                        padding: 0.65em 1.2em;
                    } 
                    #tooltip-demo .tooltip_content:after {
                        border-top-color: #9925c6;
                    }    
                </style>
                
                <div class="well object">
                    <a id="tooltip-demo" href="#" class="button-icon tooltip-top" data-tooltip="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>                    
                </div>                
                
			</div><!-- container-small -->
			
		</section>

		<?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>
		
    <?php include (ROOT.'/includes/syntax-highlighter.php'); ?>

</body>
</html>