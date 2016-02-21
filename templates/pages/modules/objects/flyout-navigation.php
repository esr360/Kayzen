<?php 
	include ('../../../app.php');
	// page config
	$title = 'Flyout Navigation';
	$tagLine = 'assets/modules/objects/flyout-nav';
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
					<li class="plain"><span>_flyout-nav.scss</span></li>
					<li class="plain"><span>_flyout-trigger.scss</span></li>
					<li class="plain"><span>flyout-nav.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/flyout-nav" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/flyout-nav</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>flyout-nav</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>

                <h3 class="heading-size-3">Requirements</h3>
                
                <ul class="list-clear">
                    <li>A pre-existing navigation menu</li>
                    <li>The <a href="<?php pageLink('modules/objects/side-nav.php') ?>">side-nav</a> module</li>
                    <li>[Optional] The <a href="<?php pageLink('modules/objects/site-overlay.php') ?>">site-overlay</a> module</li>
                </ul>
                
				<h2 class="heading-light-size-5">Examples</h2>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;nav id="app-nav">
    &lt;ul>
        ...
    &lt;/ul>
&lt;/nav>

&lt;!-- Flyout Nav Trigger -->
&lt;span class="button-icon-primary flyout-trigger" id="flyout-trigger">
    &lt;i class="fa fa-bars">&lt;/i>
&lt;/span>

&lt;!-- Flyout Nav Container -->
&lt;div id="flyout">&lt;/div>

&lt;!-- Site Overlay -->
&lt;div class="site-overlay" id="site-overlay">&lt;/div>
</pre>

                <p>Then in your theme's JS file (e.g. assets/themes/Kayzen/kayzen.js), call the <code>flyoutNav()</code> function on your flyout-nav container:</p>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#flyout').flyoutNav();
</pre>

                <h3 class="heading-size-3">Options</h3>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#flyout').flyoutNav({
    menu    : '#app-nav > ul',
    trigger : '#flyout-trigger',
    overlay : '#site-overlay'
});
</pre>

                <p><a href="#demoFlyoutTrigger" id="demo-flyout-trigger">View Demo</a></p>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Flyout Navigation can be customized using the following options:</p>
				
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
							<td><code>width</code></td>
							<td><code class="value">option($side-nav, 'width')</code></td>
							<td>This value should be the same width as the side-nav module.</td>
						</tr>
						<tr>
							<td><code>font-size</code></td>
							<td><code class="value">font-size('base')</code></td>
							<td>The font size for the flyout nav.</td>
						</tr>
						<tr>
							<td><code>box-shadow</code></td>
							<td><code class="value">1px 0 25px 0px rgba(black, 0.4)</code></td>
							<td>The flyout nav's box shadow.</td>
						</tr>
						<tr>
							<td><code>collapsible[enabled]</code></td>
							<td><code class="value">true</code></td>
							<td>Set whether child menus should be collapsible.</td>
						</tr>
						<tr>
							<td><code>collapsible[open-by-default]</code></td>
							<td><code class="value">true</code></td>
							<td>Set whether child menus should be open by default (if collapsible is enabled).</td>
						</tr>
						<tr>
							<td><code>show-y-scrollbar</code></td>
							<td><code class="value">false</code></td>
							<td>Force the Y scrollbar to always be visible.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>flyout-nav()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include flyout-nav((
    'collapsible'      : (
        'enabled'      : false
    ),
    'show-y-scrollbar' : true
));
</pre>

                <h3 class="heading-size-3">Flyout Trigger <span class="heading-light">(_flyout-trigger.scss)</span></h3>
				
				<p>The Flyout Trigger can be customized using the following options:</p>
				
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
							<td><code>top</code></td>
							<td><code class="value">0.85rem</code></td>
							<td>The <code>top</code> position of the flyout-trigger.</td>
						</tr>
						<tr>
							<td><code>bottom</code></td>
							<td><code class="value">auto</code></td>
							<td>The <code>bottom</code> position of the flyout-trigger.</td>
						</tr>
						<tr>
							<td><code>left</code></td>
							<td><code class="value">auto</code></td>
							<td>The <code>left</code> position of the flyout-trigger.</td>
						</tr>
						<tr>
							<td><code>right</code></td>
							<td><code class="value">0.85rem</code></td>
							<td>The <code>right</code> position of the flyout-trigger.</td>
						</tr>
						<tr>
							<td><code>z-index</code></td>
							<td><code class="value">14</code></td>
							<td>The <code>z-index</code> of the flyout-trigger.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>flyout-nav()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include flyout-trigger((
    'left'    : 0.85rem,
    'right'   : auto,
    'z-index' : 99
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