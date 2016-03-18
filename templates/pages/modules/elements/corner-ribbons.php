<?php 
	include ('../../../app.php');
	// page config
	$title = 'Corner Ribbons';
	$tagLine = 'assets/modules/elements/corner-ribbons';
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
					<li class="plain"><span>_corner-ribbons.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><small><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/corner-ribbons" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/corner-ribbons</a></small></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>corner-ribbon</code></li>
                        <li><b>Components:</b> null</li>
                        <li><b>Modifiers:</b> <code>[colors]</code>, <code>[sizes]</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="well object" style="height: 150px;">
                    <div class="corner-ribbon" data-ribbon="Sale"></div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="corner-ribbon" data-ribbon="Sale">&lt;/div>
</pre>

                <h3 class="heading-size-3">Colors</h3>
                
                <p class="alert-bar-help">You can choose which colors to create a ribbon for in the module's <a href="#section-customizing">configuration</a>.</p>
                
                <div class="well object" style="height: 150px;">
                    <div class="corner-ribbon-green" data-ribbon="Green"></div>
                </div>
                <div class="well object" style="height: 150px;">
                    <div class="corner-ribbon-pink" data-ribbon="Pink"></div>
                </div>
                <div class="well object" style="height: 150px;">
                    <div class="corner-ribbon-purple" data-ribbon="Purple"></div>
                </div>
                <div class="well object" style="height: 150px;">
                    <div class="corner-ribbon-blue" data-ribbon="Blue"></div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="corner-ribbon-pink" data-ribbon="Pink">&lt;/div>
</pre>

                <h3 class="heading-size-3">Sizes</h3>
                
                <p class="alert-bar-help">You can choose which sizes to create a ribbon for in the module's <a href="#section-customizing">configuration</a>.</p>
                
                <div class="well object" style="height: 100px;">
                    <div class="corner-ribbon-small" data-ribbon="Small"></div>
                </div>
                <div class="well object" style="height: 150px;">
                    <div class="corner-ribbon" data-ribbon="Default"></div>
                </div>
                <div class="well object" style="height: 175px;">
                    <div class="corner-ribbon-large" data-ribbon="Large"></div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="corner-ribbon-large" data-ribbon="Large">&lt;/div>
</pre>

                <h2 class="heading-light-size-5" id="section-customizing">Customizing</h2>
                
                <p>The corner-ribbons can be customized using the following options:</p>
                
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
							<td><code>text-color</code></td>
							<td><code class="value">white</code></td>
							<td>The color of the corner-ribbon text.</td>
						</tr>
						<tr>
							<td><code>colors</code></td>
							<td><code class="value">[green, pink, purple, blue]</code></td>
							<td>The different colors that should be created.</td>
						</tr>
						<tr>
							<td><code>sizes</code></td>
							<td><code class="value">[default, small, large]</code></td>
							<td>The different sizes that should be created.</td>
						</tr>
                    </tbody>
                </table>
                
				<p>To change one of the above values, pass your new value(s) to the <code>corner-ribbons()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
                
                <p class="alert-bar-info">The options are recursive, so you always have access to the default options which you don't overwrite. <a href="https://github.com/esr360/Modular#module-configuration-1" target="blank">Learn more</a>.</p>
         
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include corner-ribbons((
    'colors' : (
        'orange' : #ff6600
    ),
    'sizes' (
        'small' : 0.85em
    )
));
</pre>	

                <div class="well object" style="height: 100px;">
                    <style>
                        #corner-ribbon-demo {
                            font-size: 0.85em;
                        }
                        #corner-ribbon-demo:before {
                            background-color: #ff6600;
                        }
                    </style>
                    <div id="corner-ribbon-demo" class="corner-ribbon-small" data-ribbon="Orange"></div>
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