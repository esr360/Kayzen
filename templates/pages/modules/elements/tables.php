<?php 
	include ('../../../app.php');
	// page config
	$title = 'Tables';
	$tagLine = 'app/modules/elements/tables';
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
					<li class="plain"><span>_tables.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/tables" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/tables</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>table</code></li>
                        <li><b>Components:</b> null</li>
                        <li><b>Modifiers:</b> <code>fixed</code>, <code>small</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="well object">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Property Name</th>
                                <th>Default Value</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>background-color</code></td>
                                <td><code class="value">rgba(black, 0.15)</code></td>
                                <td>The background color of the un-filled bar.</td>
                            </tr>
                            <tr>
                                <td><code>fill-color</code></td>
                                <td><code class="value">color(brand, primary)</code></td>
                                <td>The fill color of the progress bar.</td>
                            </tr>
                            <tr>
                                <td><code>bar-height</code></td>
                                <td><code class="value">1.5em</code></td>
                                <td>The height of the progress bar.</td>
                            </tr>
                            <tr>
                                <td><code>bar-radius</code></td>
                                <td><code class="value">0.25em</code></td>
                                <td>The border-radius of the progress bar.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;table class="table">
    &lt;thead>
        &lt;tr>
            &lt;th>Property Name&lt;/th>
            &lt;th>Default Value&lt;/th>
            &lt;th>Description&lt;/th>
        &lt;/tr>
    &lt;/thead>
    &lt;tbody>
        &lt;tr>
            &lt;td>&lt;code>background-color&lt;/code>&lt;/td>
            &lt;td>&lt;code class="value">rgba(black, 0.15)&lt;/code>&lt;/td>
            &lt;td>The background color of the un-filled bar.&lt;/td>
        &lt;/tr>
        ...
    &lt;/tbody>
&lt;/table>
</pre>

                <h3 class="heading-size-3">Fixed Width Columns</h3>
                
                <div class="well object">
                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th>Property Name</th>
                                <th>Default Value</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>background-color</code></td>
                                <td><code class="value">rgba(black, 0.15)</code></td>
                                <td>The background color of the un-filled bar.</td>
                            </tr>
                            <tr>
                                <td><code>fill-color</code></td>
                                <td><code class="value">color(brand, primary)</code></td>
                                <td>The fill color of the progress bar.</td>
                            </tr>
                            <tr>
                                <td><code>bar-height</code></td>
                                <td><code class="value">1.5em</code></td>
                                <td>The height of the progress bar.</td>
                            </tr>
                            <tr>
                                <td><code>bar-radius</code></td>
                                <td><code class="value">0.25em</code></td>
                                <td>The border-radius of the progress bar.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;table class="table-fixed">
    ...
&lt;/table>
</pre>

                <h3 class="heading-size-3">Small Table</h3>
                
                <div class="well object">
                    <table class="table-small">
                        <thead>
                            <tr>
                                <th>Property Name</th>
                                <th>Default Value</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>background-color</code></td>
                                <td><code class="value">rgba(black, 0.15)</code></td>
                                <td>The background color of the un-filled bar.</td>
                            </tr>
                            <tr>
                                <td><code>fill-color</code></td>
                                <td><code class="value">color(brand, primary)</code></td>
                                <td>The fill color of the progress bar.</td>
                            </tr>
                            <tr>
                                <td><code>bar-height</code></td>
                                <td><code class="value">1.5em</code></td>
                                <td>The height of the progress bar.</td>
                            </tr>
                            <tr>
                                <td><code>bar-radius</code></td>
                                <td><code class="value">0.25em</code></td>
                                <td>The border-radius of the progress bar.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;table class="table-small">
    ...
&lt;/table>
</pre>
                

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The tables can be customized using the following options:</p>
                
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
							<td><code>weight</code></td>
							<td><code class="value">lighter</code></td>
							<td>The font weight of tables.</td>
						</tr>
						<tr>
							<td><code>cell-padding</code></td>
							<td><code class="value">0.6em</code></td>
							<td>The padding of table cells.</td>
						</tr>
						<tr>
							<td><code>small-font-size</code></td>
							<td><code class="value">0.85em</code></td>
							<td>The font size of tables when using the <code>small</code> modifier.</td>
						</tr>
                    </tbody>
                </table>
               
				<p>To change one of the above values, pass your new value(s) to the <code>tables()</code> mixin in your theme file (e.g. app/themes/Kayzen/_kayzen.scss).</p>   
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include tables((
	'weight'       : bold,
    'cell-padding' : 1em
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