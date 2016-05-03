<?php 
	include ('../../../app.php');
	// page config
	$title = 'Site Overlay';
	$tagLine = 'assets/modules/objects/site-overlay';
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
					<li class="plain"><span>_site-overlay.scss</span></li>
					<li class="plain"><span>site-overlay.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/site-overlay" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/site-overlay</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>site-overlay</code></li>
                        <li><b>Modifiers:</b> <code>visible</code></li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="site-overlay" id="site-overlay">&lt;/div>
</pre>
                <p>Then to trigger the Site Overlay you can call the plugin like so:</p>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#site-overlay').siteOverlay('show');
</pre>

                <br />
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#site-overlay').siteOverlay('hide');
</pre>

                <p>Calling the plugin without passing <code>show</code> or <code>hide</code> will attempt to correctly deceipher what is most appropriate to use (i.e. it will automatically detect if it is currently visible then hide/show as appropriate):</p>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#site-overlay').siteOverlay();
</pre>

                <h3 class="heading-size-3">Options</h3>     
                
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
							<td><code>selfClose</code></td>
							<td><code class="value">true</code></td>
							<td>If enabled, clicking the overlay will close/hide it.</td>
						</tr>
                    </tbody>
                </table>
                   
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#site-overlay').siteOverlay('show', {
    selfClose : true
});
</pre>

				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Site Overlay module can be customized using the following options:</p>
				
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
							<td><code class="value">rgba(black, 0.4)</code></td>
							<td>This background for the overlay.</td>
						</tr>
						<tr>
							<td><code>z-index</code></td>
							<td><code class="value">6</code></td>
							<td>The z-index for the overlay.</td>
						</tr>
						<tr>
							<td><code>transition</code></td>
							<td><code class="value">base('transition')</code></td>
							<td>The transition time for the show/hide animation.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>site-overlay()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include site-overlay((
    'background' : rgba(black, 0.6),
    'transition' : 0.2s
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