<?php 
	include ('../../../app.php');
	// page config
	$title = 'Sidebar';
	$tagLine = 'assets/modules/objects/sidebar';
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
					<li class="plain"><span>_sidebar.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/sidebar" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/sidebar</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>sidebar</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;aside class="sidebar">

    &lt;header class="heading_group-small">
        &lt;h4 class="heading-uppercase-size-3">Categories&lt;/h4>
    &lt;/header>
    
    &lt;ul class="list-arrow">
        &lt;li>&lt;a href="/HTML-Templates">HTML Templates&lt;/a>&lt;/li>
        &lt;li>&lt;a href="/Wordpress-Themes">Wordpress Themes&lt;/a>&lt;/li>
        &lt;li>&lt;a href="/jQuery-Plugins">jQuery Plugins&lt;/a>&lt;/li>
        &lt;li>&lt;a href="/Tutorials">Tutorials&lt;/a>&lt;/li>
        &lt;li>&lt;a href="/Photoshop-Design">Photoshop/Design&lt;/a>&lt;/li>
    &lt;/ul>
    
    ...
    
&lt;/aside>
</pre>

				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Sidebar module can be customized using the following options:</p>
				
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
							<td><code>rating-color</code></td>
							<td><code class="value">color('greyscale', 'grey-4')</code></td>
							<td>The color for any elements with the <code>rating</code> class when inside the sidebar.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>sidebar()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include sidebar((
    'rating-color' : blue
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