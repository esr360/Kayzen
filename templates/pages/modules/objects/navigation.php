<?php 
	include ('../../../app.php');
	// page config
	$title = 'Navigation';
	$tagLine = 'assets/modules/objects/navigation';
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
					<li class="plain"><span>_navigation.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/navigation" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/navigation</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>The Navigation module appears inside the <a href="<?php pageLink('modules/objects/header.php') ?>">Header</a> ('app-header') module by default, along with the <a href="<?php pageLink('modules/objects/logo.php') ?>">Logo</a> module.</p>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>navigation</code></li>
                        <li><b>Modifiers:</b> <code>noIcons</code></li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
                <p>The Navigation module makes use of the following other modules, which will not be covered in this section:</p>
                
                <ul class="list-clear">
                    <li><a href="<?php pageLink('modules/objects/dropdown.php') ?>">Dropdown</a></li>
                    <li><a href="<?php pageLink('modules/objects/mega-menu.php') ?>">Mega-Menu</a></li>
                </ul>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;nav class="navigation">
    &lt;ul>
        &lt;li>&lt;a>Link 1&lt;/a>&lt;/li>
        &lt;li>&lt;a>Link 2&lt;/a>&lt;/li>
        &lt;li>&lt;a>Link 3&lt;/a>&lt;/li>
    &lt;/ul>
&lt;/nav>
</pre>

                <h4 class="heading-size-2-uppercase">No Icons</h4>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;nav class="navigation-noIcons">
    &lt;ul>
        &lt;li>&lt;a>Link 1&lt;/a>&lt;/li>
        &lt;li>&lt;a>Link 2&lt;/a>&lt;/li>
        &lt;li>&lt;a>Link 3&lt;/a>&lt;/li>
    &lt;/ul>
&lt;/nav>
</pre>

                <p class="alert-bar-info">Alternatively, you can set the <b>no-icons</b> option in the config (see below).</p>

				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Navigation can be customized using the following options:</p>
				
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
							<td><code>text-align</code></td>
							<td><code class="value">right</code></td>
							<td>This is the text alignment of the navigation module.</td>
						</tr>
						<tr>
							<td><code>font-size</code></td>
							<td><code class="value">1em</code></td>
							<td>This id the module's font-size.</td>
						</tr>
						<tr>
							<td><code>dropdown-icon</code></td>
							<td><code class="value">"\f107"</code></td>
							<td>This is the font awesome icon to be used for items that have child menus.</td>
						</tr>
						<tr>
							<td><code>item-gutter</code></td>
							<td><code class="value">0.5em</code></td>
							<td>The spacing between each top level menu item.</td>
						</tr>
						<tr>
							<td><code>item-padding</code></td>
							<td><code class="value">0.5rem 0.75rem</code></td>
							<td>The navigation item padding.</td>
						</tr>
						<tr>
							<td><code>item-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>This navigation item text color.</td>
						</tr>
						<tr>
							<td><code>item-bg</code></td>
							<td><code class="value">transparent</code></td>
							<td>This background color for navigation items.</td>
						</tr>
						<tr>
							<td><code>item-border</code></td>
							<td><code class="value">1px solid transparent</code></td>
							<td>This border for navigation items.</td>
						</tr>
						<tr>
							<td><code>item-radius</code></td>
							<td><code class="value">0</code></td>
							<td>This border radius for top level navigation items.</td>
						</tr>
						<tr>
							<td><code>item-hover-bg</code></td>
							<td><code class="value">transparent</code></td>
							<td>The background for hovered navigation items.</td>
						</tr>
						<tr>
							<td><code>item-hover-border</code></td>
							<td><code class="value">1px solid color('greyscale', 'white')</code></td>
							<td>This border for hovered navigation items.</td>
						</tr>
						<tr>
							<td><code>has-child-hover-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>This color for navigation items with child menus when hovered.</td>
						</tr>
						<tr>
							<td><code>has-child-hover-bg</code></td>
							<td><code class="value">color('greyscale', 'grey-1')</code></td>
							<td>This background for navigation items with child menus when hovered.</td>
						</tr>
						<tr>
							<td><code>has-child-hover-border</code></td>
							<td><code class="value">1px solid transparent</code></td>
							<td>This border for navigation items with child menus when hovered.</td>
						</tr>
						<tr>
							<td><code>no-icons</code></td>
							<td><code class="value">false</code></td>
							<td>If enabled, any navigation icons will not be shown.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>navigation()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include navigation((
    'item-padding' : 1em,
    'no-icons'     : true
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