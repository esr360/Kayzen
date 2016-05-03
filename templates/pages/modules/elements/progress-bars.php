<?php 
	include ('../../../app.php');
	// page config
	$title = 'Progress Bars';
	$tagLine = 'assets/modules/elements/progress-bars';
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
					<li class="plain"><span>_progress-bars.scss</span></li>
					<li class="plain"><span>progress-bars.js</span></li>	
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/progress-bars" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/progress-bars</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>progress-bar</code></li>
                        <li><b>Components:</b> <code>group</code></li>
                        <li><b>Modifiers:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="well object">
                    <progress class="progress-bar" max="100" data-progress="75%">
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                    </progress>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;progress class="progress-bar" max="100" data-progress="75%">
    &lt;div class="progress-bar">
        &lt;div class="progress">&lt;/div>
    &lt;/div>
&lt;/progress>
</pre>

                <h3 class="heading-size-3">Progress Bar Group</h3>
                
                <div class="well object">
                    <div class="span-6 progress-bar_group">
                        <h5 class="heading">HTML5</h5>
                        <progress class="progress-bar" max="100" data-progress="75%">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                        </progress>
                        <h5 class="heading">CSS3/SASS</h5>
                        <progress class="progress-bar" max="100" data-progress="100%">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                        </progress>
                        <h5 class="heading">JavaScript/jQuery</h5>
                        <progress class="progress-bar" max="100" data-progress="80%">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                        </progress>
                        <h5 class="heading">PHP/Wordpress</h5>
                        <progress class="progress-bar" max="100" data-progress="65%">
                            <div class="progress-bar">
                                <div class="progress"></div>
                            </div>
                        </progress>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="span-6 progress-bar_group">
    &lt;h5 class="heading">HTML5&lt;/h5>
    &lt;progress class="progress-bar" max="100" data-progress="75%">
        &lt;div class="progress-bar">
            &lt;div class="progress">&lt;/div>
        &lt;/div>
    &lt;/progress>
    &lt;h5 class="heading">CSS3/SASS&lt;/h5>
    &lt;progress class="progress-bar" max="100" data-progress="100%">
        &lt;div class="progress-bar">
            &lt;div class="progress">&lt;/div>
        &lt;/div>
    &lt;/progress>
    &lt;h5 class="heading">JavaScript/jQuery&lt;/h5>
    &lt;progress class="progress-bar" max="100" data-progress="80%">
        &lt;div class="progress-bar">
            &lt;div class="progress">&lt;/div>
        &lt;/div>
    &lt;/progress>
    &lt;h5 class="heading">PHP/Wordpress&lt;/h5>
    &lt;progress class="progress-bar" max="100" data-progress="65%">
        &lt;div class="progress-bar">
            &lt;div class="progress">&lt;/div>
        &lt;/div>
    &lt;/progress>
&lt;/div>
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The progress bars can be customized using the following options:</p>
                
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
							<td><code>background-color</code></td>
							<td><code class="value">rgba(black, 0.15)</code></td>
							<td>The background color of the un-filled bar.</td>
						</tr>
						<tr>
							<td><code>fill-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
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
						<tr>
							<td><code>value-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The color of the progress value text.</td>
						</tr>
						<tr>
							<td><code>value-size</code></td>
							<td><code class="value">font-size('size-2')</code></td>
							<td>The font size of the progress value text.</td>
						</tr>
						<tr>
							<td><code>group-spacing</code></td>
							<td><code class="value">0.5em</code></td>
							<td>The vertical spacing between each progress bar.</td>
						</tr>
                    </tbody>
                </table>

				<p>To change one of the above values, pass your new value(s) to the <code>progress-bars()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>   
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include progress-bars((
    'background-color'  : #F8F8F8,
    'fill-color'        : #008de5,
    'bar-radius'        : 0
));
</pre>

                <style>
                    #progress-bar-demo {
                        background: #F8F8F8;
                        border-radius: 0;
                    }
                    #progress-bar-demo::-webkit-progress-value {
                        background: #008de5;
                    }
                </style>
                <div class="well object">
                    <progress id="progress-bar-demo" class="progress-bar" max="100" data-progress="75%">
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                    </progress>
                </div>

                
			</div><!-- container-small -->
			
		</section>

		<?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>
		
    <?php include (ROOT.'/includes/syntax-highlighter.php'); ?>

</body>
</html>