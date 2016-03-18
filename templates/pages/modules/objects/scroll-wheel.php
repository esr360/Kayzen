<?php 
	include ('../../../app.php');
	// page config
	$title = 'Scroll Wheel';
	$tagLine = 'assets/modules/objects/scroll-wheel';
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
					<li class="plain"><span>_scroll-wheel.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/scroll-wheel" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/scroll-wheel</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>scroll-wheel</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a class="scroll-wheel" href="#key-features">&lt;/a>
</pre>

                <p><a href="<?php pageLink('homepages/homepage-1.php') ?>">View Demo</a></p>

				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Scroll Wheel can be customized using the following options:</p>
				
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
							<td><code>size</code></td>
							<td><code class="value">font-size('size-5')</code></td>
							<td>This allows the config to be accessed in the JavaScript.</td>
						</tr>
						<tr>
							<td><code>color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The position on the screen for the scroll-top icon (top, right, bottom, left).</td>
						</tr>
						<tr>
							<td><code>outline-width</code></td>
							<td><code class="value">0.075em</code></td>
							<td>The width at which the icon should be hidden.</td>
						</tr>
						<tr>
							<td><code>animate</code></td>
							<td><code class="value">true</code></td>
							<td>If enabled the Scroll Wheel icon will be animated.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>scroll-wheel()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include scroll-wheel((
    'size'          : 30px,
    'outline-width' : 2px,
    'animate'       : false
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