<?php 
	include ('../../../app.php');
	// page config
	$title = 'Core';
	$tagLine = 'assets/modules/utilities/core';
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
					<li class="plain"><span>_core.scss</span></li>
					<li class="plain"><span>core.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/core" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/core</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>This module provides the utmost basic CSS for a webpage as well as all core JavaScripts which do not apply to other modules.</p>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The core module can be customized using the following options:</p>
				
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
							<td><code>background</code></td>
							<td><code class="value">color('greyscale', 'grey-1')</code></td>
							<td>The background to be applied to the main <code>body</code> element.</td>
						</tr>
						<tr>
							<td><code>font-family</code></td>
							<td><code class="value">typography('typefaces', 'primary')</code></td>
							<td>The font family to be applied to the main <code>body</code> element.</td>
						</tr>
						<tr>
							<td><code>text-color</code></td>
							<td><code class="value">typography('colors', 'base')</code></td>
							<td>The text color to be applied to the main <code>body</code> element.</td>
						</tr>
						<tr>
							<td><code>font-size</code></td>
							<td><code class="value">typography('sizes', 'base')</code></td>
							<td>The font size to be applied to the main <code>body</code> element.</td>
						</tr>
						<tr>
							<td><code>line-height</code></td>
							<td><code class="value">1.4</code></td>
							<td>The line height to be applied to the main <code>body</code> element.</td>
						</tr>
						<tr>
							<td><code>margin</code></td>
							<td><code class="value">2rem</code></td>
							<td>The base margin width for your project.</td>
						</tr>
						<tr>
							<td><code>radius</code></td>
							<td><code class="value">0.4em</code></td>
							<td>The base radius for your project.</td>
						</tr>
						<tr>
							<td><code>oval-radius</code></td>
							<td><code class="value">1.5em</code></td>
							<td>The global radius to use for oval elements.</td>
						</tr>
						<tr>
							<td><code>transition</code></td>
							<td><code class="value">0.4s</code></td>
							<td>The base transition duration to use for your project.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>base()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include base((
    'margin'     : 1em,
    'transition' : 0.6s
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