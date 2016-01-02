<?php 
	include ('../../../app.php');
	// page config
	$title = 'Alert Bars';
	$tagLine = 'app/modules/elements/alert-bars';
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
					<li class="plain"><span>_alert-bars.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/alert-bars" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/alert-bars</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>alert-bar</code></li>
                        <li><b>Components:</b> null</li>
                        <li><b>Modifiers:</b> <code>error</code>, <code>help</code>, <code>info</code>, <code>success</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <p class="alert-bar">This is an alert bar.</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;p class="alert-bar">This is an alert bar.&lt;/p>
</pre>

                <h3 class="heading-size-3">Error Bar</h3>
                
                <p class="alert-bar-error">This is an error alert bar.</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;p class="alert-bar-error">This is an error alert bar.&lt;/p>
</pre>
</pre>

                <h3 class="heading-size-3">Help Bar</h3>
                
                <p class="alert-bar-help">This is a help alert bar.</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;p class="alert-bar-help">This is a help alert bar.&lt;/p>
</pre>

                <h3 class="heading-size-3">Info Bar</h3>
                
                <p class="alert-bar-info">This is an info alert bar.</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;p class="alert-bar-info">This is an info alert bar.&lt;/p>
</pre>

                <h3 class="heading-size-3">Success Bar</h3>
                
                <p class="alert-bar-success">This is a success alert bar.</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;p class="alert-bar-success">This is a success alert bar.&lt;/p>
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The colors for the alert bars are defined (and hence can be changed from) within the <a href="#">color-palette</a> module.</p>
                
                <p>The alert bars can be customized using the following options:</p>
                
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
							<td><code>border-radius</code></td>
							<td><code class="value">0.25em</code></td>
							<td>The radius of the alert bar's corners.</td>
						</tr>
						<tr>
							<td><code>border-width</code></td>
							<td><code class="value">1px</code></td>
							<td>The width of the alert bar's border.</td>
						</tr>
						<tr>
							<td><code>padding</code></td>
							<td><code class="value">0.85em</code></td>
							<td>The inner padding of the alert bar.</td>
						</tr>
						<tr>
							<td><code>font-size</code></td>
							<td><code class="value">0.9em</code></td>
							<td>The alert bar's font size.</td>
						</tr>
						<tr>
							<td><code>font-weight</code></td>
							<td><code class="value">lighter</code></td>
							<td>The alert bar's font weight.</td>
						</tr>
                    </tbody>
                </table>
                
				<p>To change one of the above values, pass your new value(s) to the <code>alert-bars()</code> mixin in your theme file (e.g. app/themes/Kayzen/_kayzen.scss).</p>

<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include alert-bars((
    'border-radius' : 0,
    'border-width'  : 3px,
    'padding'       : 1em,
    'font-size'     : 1em,
    'font-weight'   : normal
));
</pre>	

				<br />
                
                <style>
                    #alert-demo {
                        border-radius: 0;
                        border-width: 3px;
                        padding: 1em;
                        font-size: 1em;
                        font-weight: normal;
                    }
                </style>
                <p class="alert-bar-error" id="alert-demo">This is a customized alert bar.</p>
                
                <p class="alert-bar-success" id="alert-demo">This is a customized alert bar.</p>
                
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