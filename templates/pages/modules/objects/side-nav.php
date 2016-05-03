<?php 
	include ('../../../app.php');
	// page config
	$title = 'Side Nav';
	$tagLine = 'assets/modules/objects/side-nav';
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
					<li class="plain"><span>_side-nav.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/side-nav" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/side-nav</a></p>
				
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
    &lt;nav>
        &lt;ul>
            &lt;li>&lt;a href="/link">Link 1&lt;/a>&lt;/li>
            ...
        &lt;/ul>
    &lt;/nav>
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
						<tr>
							<td><code>width</code></td>
							<td><code class="value">300px</code></td>
							<td>The width for the side navigation.</td>
						</tr>
						<tr>
							<td><code>background</code></td>
							<td><code class="value">color('greyscale', 'grey-5')</code></td>
							<td>The main background of the side navigation.</td>
						</tr>
						<tr>
							<td><code>font-size</code></td>
							<td><code class="value">font-size('size-2')</code></td>
							<td>The base font size for the module.</td>
						</tr>
						<tr>
							<td><code>transition</code></td>
							<td><code class="value">base('transition')</code></td>
							<td>The transition time for the side navigation to slide in.</td>
						</tr>
						<tr>
							<td><code>z-index</code></td>
							<td><code class="value">15</code></td>
							<td>The z-index for the side-nav module.</td>
						</tr>
						<tr>
							<td><code>parent-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The text color for top level menu items.</td>
						</tr>
						<tr>
							<td><code>parent-background</code></td>
							<td><code class="value">rgba(black, 0.15)</code></td>
							<td>This background for top level menu items.</td>
						</tr>
						<tr>
							<td><code>parent-left-border</code></td>
							<td><code class="value">5px solid color('brand', 'primary')</code></td>
							<td>The left border for the top level menu items.</td>
						</tr>
						<tr>
							<td><code>parent-hover-background</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>This hovered background for top level menu items.</td>
						</tr>
						<tr>
							<td><code>item-padding</code></td>
							<td><code class="value">1.2em</code></td>
							<td>The padding for menu items.</td>
						</tr>
						<tr>
							<td><code>item-color</code></td>
							<td><code class="value">color('greyscale', 'grey-3')</code></td>
							<td>This text color for menu items.</td>
						</tr>
						<tr>
							<td><code>item-bg</code></td>
							<td><code class="value">transparent</code></td>
							<td>This background for menu items.</td>
						</tr>
						<tr>
							<td><code>item-top-border</code></td>
							<td><code class="value">1px solid rgba(white, 0.05)</code></td>
							<td>This top border for menu items.</td>
						</tr>
						<tr>
							<td><code>item-bottom-border</code></td>
							<td><code class="value">1px solid rgba(black), 0.1)</code></td>
							<td>This bottom border for menu items.</td>
						</tr>
						<tr>
							<td><code>item-left-border</code></td>
							<td><code class="value">5px solid rgba(black, 0.3)</code></td>
							<td>The left border for menu items.</td>
						</tr>
						<tr>
							<td><code>item-right-border</code></td>
							<td><code class="value">none</code></td>
							<td>The right border for menu items.</td>
						</tr>
						<tr>
							<td><code>item-hover-left-border</code></td>
							<td><code class="value">5px solid color('brand', 'primary')</code></td>
							<td>This left border for menu items when hovered.</td>
						</tr>
						<tr>
							<td><code>collapside:enabled</code></td>
							<td><code class="value">true</code></td>
							<td>If enabled, child menus will be collapsible.</td>
						</tr>
						<tr>
							<td><code>collapsible:open-by-default</code></td>
							<td><code class="value">true</code></td>
							<td>If enabled collapsible items will be open by default.</td>
						</tr>
						<tr>
							<td><code>collapsible:icon</code></td>
							<td><code class="value">'fa-chevron-circle-down</code></td>
							<td>The Font Awesome icon name for the open/close icon.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>side-nav()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include side-nav((
    'width'       : 400px,
    'background'  : white,
    'collapsible' : (
        'enabled' : false
    )
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