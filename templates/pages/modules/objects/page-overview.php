<?php 
	include ('../../../app.php');
	// page config
	$title = 'Page Overview';
	$tagLine = 'assets/modules/objects/page-overview';
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
					<li class="plain"><span>_page-overview.scss</span></li>
					<li class="plain"><span>page-overview.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/page-overview" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/page-overview</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>page-overview</code></li>
                        <li><b>Modifiers:</b> <code>left</code>, <code>right</code>, <code>top</code>, <code>bottom</code></li>
                        <li><b>Components:</b> <code>item</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <p>This module requires a base set of elements to act as the main page overview navigation. The fixed side navigation menu is created dynamically based of these items.</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div id="pageoverview">
    &lt;a href="#anchor1">
        &lt;div class=" button-icon-plain-size-6">
            &lt;i class="fa fa-tablet">&lt;/i>
        &lt;/div>
        &lt;h3 class="heading">Mobile Optimized&lt;/h3>
    &lt;/a>
    &lt;a href="#anchor2">
        &lt;div class=" button-icon-plain-size-6">
            &lt;i class="fa fa-facebook">&lt;/i>
        &lt;/div>
        &lt;h3 class="heading">Social Media&lt;/h3>
    &lt;/a>
&lt;/div>
</pre>

                <p>Then in your theme's JS file (e.g. assets/themes/Kayzen/kayzen.js), call the <code>pageOverview()</code> function on your element wrapper:</p>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#page-overview').pageOverview();
</pre>
                
                <p class="alert-bar-success">The above example is only the bare minimum amount of code to create a fixed page overview menu. For some real examples see the following:</p>
                
                <ul class="list-clear">
                    <li><a href="<?php pageLink('features.php') ?>">Example 1</a></li>
                    <li><a href="<?php pageLink('documentation.php') ?>">Example 2</a></li>
                </ul>

                <p>The parent navigation sections should have a <code>button-icon</code> and some text to act as the tooltip content, generally the item's title. By default, the plugin uses the first <code>heading</code> element of the item for the tooltip. You can change the selectors and the default fixed menu position by passing the appropriate option when calling the plugin:</p>  
                     
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#page-overview').pageOverview({
    position      : 'bottom',
    itemSelector  : '.item',
    titleSelector : '.title'
});
</pre>

                <p class="alert-bar-error">Note that passing a custom <b>position</b> value here will override the below <b>position</b> value in the Sass config.</p>
                
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Page Overview can be customized using the following options:</p>
				
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
							<td><code class="value">left</code></td>
							<td>The default position on the screen the fixed menu should appear.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>page-overview()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include page-overview((
    'position' : 'right'
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