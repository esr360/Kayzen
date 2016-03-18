<?php 
	include ('../../../app.php');
	// page config
	$title = 'Search Box';
	$tagLine = 'assets/modules/objects/search';
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
					<li class="plain"><span>_search.scss</span></li>
					<li class="plain"><span>search.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/search" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/search</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>search-box</code></li>
                        <li><b>Modifiers:</b> <code>visible</code></li>
                        <li><b>Components:</b> <code>go</code>, <code>close</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="search-box">
    &lt;form class="container">
        &lt;input required type="search" placeholder="Enter search query..." />
        &lt;div class="button_group-small">
            &lt;button class="search-box_go button-icon-primary" type="submit">
                &lt;i class="fa fa-search">&lt;/i>
            &lt;/button>
            &lt;span class="search-box_close button-icon">
                &lt;i class="fa fa-times">&lt;/i>
            &lt;/span>
        &lt;/div>
    <&lt;form>
&lt;/div>
</pre>

<br />

<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;span id="search-trigger">
    &lt;i class="fa fa-search">&lt;/i>
&lt;/span>
</pre>

                <p>Then in your theme's JS file (e.g. assets/themes/Kayzen/kayzen.js), call the <code>searchBox()</code> function on your desired trigger:</p>
         
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#search-trigger').searchBox();
</pre>

                <h3 class="heading-size-3">Options</h3>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#search-trigger').searchBox({
    container    : '.search-box',
    input        : '[type="search"]',
    closeTrigger : '.search-box_close',
    visibleClass : 'search-box-visible'
});
</pre>

				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Search module can be customized using the following options:</p>
				
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
							<td><code class="value">color('greyscale', 'grey-5')</code></td>
							<td>The background color for the main search module.</td>
						</tr>
						<tr>
							<td><code>height</code></td>
							<td><code class="value">option($top-bar, 'height')</code></td>
							<td>The height of the module.</td>
						</tr>
						<tr>
							<td><code>input-background</code></td>
							<td><code class="value">color('greyscale', 'grey-5')</code></td>
							<td>The background of the input element.</td>
						</tr>
						<tr>
							<td><code>input-color</code></td>
							<td><code class="value">color('greyscale', 'grey-5')</code></td>
							<td>The text color of the input element.</td>
						</tr>
						<tr>
							<td><code>input-weight</code></td>
							<td><code class="value">lighter</code></td>
							<td>The font weight of the input element.</td>
						</tr>
						<tr>
							<td><code>placeholder-color</code></td>
							<td><code class="value">base('text-color')</code></td>
							<td>The color of the input placeholder.</td>
						</tr>
						<tr>
							<td><code>placeholder-weight</code></td>
							<td><code class="value">lighter</code></td>
							<td>The font weight of the input placeholder.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>search-box()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include search-box((
    'background'  : white,
    'input-color' : #222222
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