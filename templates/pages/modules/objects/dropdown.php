<?php 
	include ('../../../app.php');
	// page config
	$title = 'Dropdown';
	$tagLine = 'assets/modules/objects/dropdown';
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
					<li class="plain"><span>_dropdown.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/dropdown" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/dropdown</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p class="alert-bar-help">This module is dependent on the <a href="<?php pageLink('modules/objects/navigation.php') ?>">Navigation</a> module.</p>
                
                <p>A dropdown menu is any child menu of the main navigation module. No special markup is required and they are infinitely nestable.</p>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>dropdown</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="navigation">
    &lt;ul>
        &lt;li>
            &lt;a>First Level Item&lt;/a>
            &lt;!-- This is where the dropdown menu begins -->
            &lt;ul>
                &lt;li>
                    &lt;a>2nd Level Item&lt;/a>
                    &lt;ul>
                        &lt;li>
                            &lt;a>3rd Level Item&lt;/a>
                        &lt;/li>
                    &lt;/ul>
                &lt;/li>
            &lt;/ul>
        &lt;/li>
    &lt;/ul>
&lt;/div>
</pre>

                <p class="alert-bar-success">To see a live example, checkout the navigation on this page you're currently on.</p>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The dropdown can be customized using the following options:</p>
				
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
							<td><code>text-align</code></td>
							<td><code class="value">left</code></td>
							<td>The text alignment for dropdown menus.</td>
						</tr>
						<tr>
							<td><code>width</code></td>
							<td><code class="value">175px</code></td>
							<td>The minimum with which dropdown menus should be.</td>
						</tr>
						<tr>
							<td><code>top-position</code></td>
							<td><code class="value">0</code></td>
							<td>The top distance dropdown menus should be from their parent.</td>
						</tr>
						<tr>
							<td><code>dropdown-icon</code></td>
							<td><code class="value">"\f105"</code></td>
							<td>The Font Awesome icon which shows if a menu item has a child menu.</td>
						</tr>
						<tr>
							<td><code>low-level-icon</code></td>
							<td><code class="value">"\f105"</code></td>
							<td>The Font Awesome icon for dropdown menu items which have a child menu.</td>
						</tr>
						<tr>
							<td><code>font-size</code></td>
							<td><code class="value">font-size('size-2', true)</code></td>
							<td>the font size for dropdown menus.</td>
						</tr>
						<tr>
							<td><code>link-color</code></td>
							<td><code class="value">color('greyscale', 'grey-4')</code></td>
							<td>The color for dropdown menu links.</td>
						</tr>
						<tr>
							<td><code>link-bg-color</code></td>
							<td><code class="value">color('greyscale', 'grey-1')</code></td>
							<td>The background color for dropdown links.</td>
						</tr>
						<tr>
							<td><code>link-padding</code></td>
							<td><code class="value">0.6rem</code></td>
							<td>The padding for dropdown menu items.</td>
						</tr>
						<tr>
							<td><code>link-hover-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The text color for dropdown menu items when hovered.</td>
						</tr>
						<tr>
							<td><code>link-hover-bg-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The background color for dropdown menu items when hovered.</td>
						</tr>
						<tr>
							<td><code>link-active-color</code></td>
							<td><code class="value">option($navigation, 'a-has-child-color')</code></td>
							<td>The text color for dropdown menu items when supplied with the <code>active</code> class.</td>
						</tr>
						<tr>
							<td><code>link-active-bg-color</code></td>
							<td><code class="value">option($navigation, 'a-has-child-color')</code></td>
							<td>The background color for dropdown menu items when supplied with the <code>active</code> class.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>dropdown()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include dropdown((
    'width'         : 150px,
    'font-size'    : 12px,
    'link-padding' : 6px 10px
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