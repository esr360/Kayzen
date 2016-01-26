<?php 
	include ('../../../app.php');
	// page config
	$title = 'Top Bar';
	$tagLine = 'app/modules/objects/top-bar';
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
					<li class="plain"><span>_top-bar.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/objects/top-bar" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/objects/top-bar</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>top-bar</code></li>
                        <li><b>Modifiers:</b> <code>fixed</code></li>
                        <li><b>Components:</b> <code>item</code>, <code>nav</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="top-bar">
    &lt;div class="container">
        &lt;div class="row-block">
            ...
        &lt;/div>
    &lt;/div>
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Fixed Top Bar</h4>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="top-bar-fixed">
    ...
&lt;/div>
</pre>

                <p>Or...</p>
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include top-bar((
    'fixed' : true
));
</pre>

				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Top Bar module can be customized using the following options:</p>
				
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
							<td><code>output-JSON</code></td>
							<td><code class="value">true</code></td>
							<td>This allows the config to be accessed in the JavaScript.</td>
						</tr>
						<tr>
							<td><code>height</code></td>
							<td><code class="value">60px</code></td>
							<td>The height of the module.</td>
						</tr>
						<tr>
							<td><code>background</code></td>
							<td><code class="value">color('greyscale', 'grey-6')</code></td>
							<td>This module's main background.</td>
						</tr>
						<tr>
							<td><code>padding</code></td>
							<td><code class="value">1em 0</code></td>
							<td>The module's padding.</td>
						</tr>
						<tr>
							<td><code>link-color</code></td>
							<td><code class="value">color('greyscale', 'grey-3')</code></td>
							<td>The color for links when inside the top-bar module.</td>
						</tr>
						<tr>
							<td><code>link-hover-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The color for hovered links that are inside the top-bar module.</td>
						</tr>
						<tr>
							<td><code>z-index</code></td>
							<td><code class="value">6</code></td>
							<td>The z-index for the module.</td>
						</tr>
						<tr>
							<td><code>fixed</code></td>
							<td><code class="value">false</code></td>
							<td>If enabled, the top-bar will remain fixed when scrolling.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>top-bar()</code> mixin in your theme file (e.g. app/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include top-bar((
    'height' : 50px,
    'fixed'  : true
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