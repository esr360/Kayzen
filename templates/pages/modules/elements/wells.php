<?php 
	include ('../../../app.php');
	// page config
	$title = 'Wells/Boxes';
	$tagLine = 'assets/modules/elements/wells';
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
					<li class="plain"><span>_wells.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/wells" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/wells</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>well</code></li>
                        <li><b>Components:</b> <code>content</code></li>
                        <li><b>Modifiers:</b> <code>dark</code>, <code>deep</code>, <code>comment</code>, <code>thumb</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="well object">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque efficitur sem et porta. </p>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="well">
    &lt;p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque efficitur sem et porta.&lt;/p>
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Well - Dark</h4>

                <div class="well-dark object">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque efficitur sem et porta. </p>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="well-dark">
    &lt;p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque efficitur sem et porta.&lt;/p>
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Well - Deep</h4>

                <div class="well-deep object">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque efficitur sem et porta. </p>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="well-deep">
    &lt;p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque efficitur sem et porta.&lt;/p>
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Well - Comment</h4>
                
                <div class="well-comment object">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque efficitur sem et porta. </p>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="well-comment">
    &lt;p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque efficitur sem et porta.&lt;/p>
&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Well - Thumb</h4>

                <div class="well object">
                    <div class="span-3">
                        <div class="well-thumb">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-1.png">
                        </div>
                    </div>
                    <div class="span-3">
                        <div class="well-dark-thumb">
                            <img class="well_content" src="<?php echo appDir ?>/images/envato/envato-1.png">
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="span-3">
    &lt;div class="well-thumb">
        &lt;img class="well_content" src="/images/envato/envato-1.png">
    &lt;/div>
&lt;/div>
&lt;div class="span-3">
    &lt;div class="well-dark-thumb">
        &lt;img class="well_content" src="/images/envato/envato-1.png">
    &lt;/div>
&lt;/div>
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The wells can be customized using the following options:</p>
                
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
							<td><code>background</code></td>
							<td><code class="value">white</code></td>
							<td>The background color for wells.</td>
						</tr>
						<tr>
							<td><code>border</code></td>
							<td><code class="value">1px solid rgba(black, 0.15)</code></td>
							<td>The well border.</td>
						</tr>
						<tr>
							<td><code>radius</code></td>
							<td><code class="value">0.4em</code></td>
							<td>The radius for the wells' corners.</td>
						</tr>
						<tr>
							<td><code>padding</code></td>
							<td><code class="value">1em</code></td>
							<td>The well padding.</td>
						</tr>
						<tr>
							<td><code>color</code></td>
							<td><code class="value">typography('colors', 'base')</code></td>
							<td>The text color for wells.</td>
						</tr>
						<tr>
							<td><code>dark-background</code></td>
							<td><code class="value">rgba(black, 0.4)</code></td>
							<td>The background for wells when using the <code>dark</code> modifier.</td>
						</tr>
						<tr>
							<td><code>dark-border</code></td>
							<td><code class="value">none</code></td>
							<td>The border for wells when using the <code>dark</code> modifier.</td>
						</tr>
						<tr>
							<td><code>dark-color</code></td>
							<td><code class="value">white</code></td>
							<td>The text color for wells when using the <code>dark</code> modifier.</td>
						</tr>
						<tr>
							<td><code>deep-padding</code></td>
							<td><code class="value">1.5em 2em</code></td>
							<td>The padding for wells when using the <code>deep</code> modifier.</td>
						</tr>
						<tr>
							<td><code>comment-padding</code></td>
							<td><code class="value">1.5em</code></td>
							<td>The padding for wells when using the <code>comment</code> modifier.</td>
						</tr>
						<tr>
							<td><code>thumb-height</code></td>
							<td><code class="value">76px</code></td>
							<td>The height for wells when using the <code>thumb</code> modifier.</td>
						</tr>
						<tr>
							<td><code>hover-background</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The background for wells when hovered when using the <code>dark</code> modifier.</td>
						</tr>
						<tr>
							<td><code>hover-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The text-color for wells when hovered when using the <code>dark</code> modifier.</td>
						</tr>
                    </tbody>
                </table>

				<p>To change one of the above values, pass your new value(s) to the <code>wells()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>   
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include wells((
    'background' : #9B58B5,
    'border'     : none,
    'radius'     : 0,
    'color'      : white
));
</pre>  

                <style>
                    #well-demo {
                        background: #9B58B5;
                        border: none;
                        border-radius: 0;
                        color: white;
                    }
                </style>
                <div id="well-demo" class="well object">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque efficitur sem et porta. </p>
                </div>
                
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