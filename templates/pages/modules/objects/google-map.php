<?php 
	include ('../../../app.php');
	// page config
	$title = 'Google Map';
	$tagLine = 'app/modules/objects/google-map';
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
					<li class="plain"><span>_google-map.scss</span></li>
					<li class="plain"><span>google-map.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/objects/google-map" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/objects/google-map</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>google-map</code></li>
                        <li><b>Modifiers:</b> <code>large</code></li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;!-- Google Map -->
&lt;div class="google-map" id="google-map">&lt;/div>
&lt;script src="https://maps.googleapis.com/maps/api/js?sensor=false">&lt;/script>
</pre>

                <p><a href="#footer">View Demo</a></p>

                <h3 class="heading-size-3">Twitter Feed</h3>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;footer class="footer">
&lt;/footer>&lt;!-- .footer -->
</pre>

                <p>Then in your theme's JS file (e.g. app/themes/Kayzen/kayzen.js), pass any desired options to the <code>footer()</code> function:</p>

<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('.footer').footer({
    twitterFeedSelector : '#footer-twitter-feed',
    twitterFeedCount    : 8,
    twitterFeedUser     : 'esr360'
});
</pre>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Footer can be customized using the following options:</p>
				
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
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>footer()</code> mixin in your theme file (e.g. app/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include footer((
    'wrapper-padding' : 6em 0,
    'logo-height'     : 40px,
    'bar-responsive'  : 720px,
    'bar-font-size'   : 1em
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