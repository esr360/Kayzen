<?php 
	include ('../../../app.php');
	// page config
	$title = 'Mega Menu';
	$tagLine = 'assets/modules/objects/mega-menu';
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
					<li class="plain"><span>_mega-menu.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/mega-menu" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/mega-menu</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>mega-menu</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> <code>heading</code>, <code>title</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;nav class="navigation">
    &lt;ul>
        &lt;li>&lt;a href="/">Home&lt;/a>&lt;/li>
        &lt;li>&lt;a href="/demos">Demos&lt;/a>
            
            &lt;ul class="mega-menu row">
                &lt;li class="span-4">
                    &lt;h3 class="mega-menu_heading heading">Homepages&lt;/h3>
                    &lt;ul class="list-arrow">
                        &lt;li>&lt;a href="/">Homepage 1&lt;/a>&lt;/li>
                        &lt;li>&lt;a href="/">Homepage 2&lt;/a>&lt;/li>
                        &lt;li>&lt;a href="/">Homepage 3&lt;/a>&lt;/li>
                        ...
                    &lt;/ul>
                &lt;/li>
                &lt;li class="span-4">
                    ...
                &lt;/li>
                &lt;li class="span-4">
                    ...
                &lt;/li>
            &lt;/ul>
            
        &lt;/li>
    &lt;/ul>
&lt;/nav>
</pre>

                <p class="alert-bar-success">To view a demo, hover over one of the appropriate menu items in the navigation on this page.</p>
                
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Mega Menu can be customized using the following options:</p>
				
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
							<td>TThe mega-meni background.</td>
						</tr>
						<tr>
							<td><code>bottom-border</code></td>
							<td><code class="value">0.6em solid color('brand', 'primary')</code></td>
							<td>The mega-menu-s bottom border.</td>
						</tr>
						<tr>
							<td><code>link-hover-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The color for links when hovered.</td>
						</tr>
						<tr>
							<td><code>title-color</code></td>
							<td><code class="value">lighten(color('greyscale', 'grey-4'), 15%)</code></td>
							<td>The text color for the <code>title</code> component.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>mega-menu()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include mega-menu((
    'bottom-border' : none,
    'title-color'   : black
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