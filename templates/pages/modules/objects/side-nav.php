<?php 
	include ('../../../app.php');
	// page config
	$title = 'Side Nav';
	$tagLine = 'app/modules/objects/side-nav';
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
					<li class="plain"><span>_side-nav.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/objects/scroll-wheel" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/objects/scroll-wheel</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>The <code>side-nav</code> module is used when the <code>header</code> module has the <code>side</code> option set, and is also used for the <code>flyout-nav</code> module.</p>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>side-nav</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> <code>openClose</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="side-nav">
&lt;/div>
</pre>

				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Side-Nav module can be customized using the following options:</p>
				
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
				
				<p>To change one of the above values, pass your new value(s) to the <code>side-nav()</code> mixin in your theme file (e.g. app/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include side-nav((
    'background'  : white,
    'input-color' : #222222
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