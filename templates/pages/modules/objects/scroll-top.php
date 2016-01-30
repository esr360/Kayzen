<?php 
	include ('../../../app.php');
	// page config
	$title = 'Scroll-Top';
	$tagLine = 'assets/modules/objects/scroll-top';
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
					<li class="plain"><span>_scroll-top.scss</span></li>
					<li class="plain"><span>scroll-top.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/scroll-top" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/scroll-top</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>scroll-top</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a class="button-icon-border scroll-top" href="#site-content">
    &lt;i class="fa fa-angle-up">&lt;/i>
&lt;/a>
</pre>

                <div class="well object">
                    <a class="button-icon-border" href="#site-content">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>

                <p>By default the icon is hidden until the user has scrolled a certain amount down the page. This value can be controlled when calling the plugin in your theme's JS file (e.g. assets/themes/Kayzen/kayzen.js).</p>
                               
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('.scroll-top').scrollToTop({
    activePosition : 350
});
</pre>

				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Scroll-Top module can be customized using the following options:</p>
				
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
							<td><code>position</code></td>
							<td><code class="value">(auto, 2rem, 2rem, auto)</code></td>
							<td>The position on the screen for the scroll-top icon (top, right, bottom, left).</td>
						</tr>
						<tr>
							<td><code>hide-below</code></td>
							<td><code class="value">breakpoint('break-5')</code></td>
							<td>The width at which the icon should be hidden.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>scroll-top()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include scroll-top((
    'position'   : (auto, auto, 1rem, 1rem),
    'hide-below' : 500px
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