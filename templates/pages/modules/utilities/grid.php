<?php 
	include ('../../../app.php');
	// page config
	$title = 'Grid System';
	$tagLine = 'assets/modules/utilities/grid';
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
                'modifiers' => 'bar-absolute-opaque-sticky'
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
					<li class="plain"><span>_grid.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/grid" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/grid</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>Kayzen is built using our own custom grid system called <a href="https://github.com/esr360/Kayzen-GS" target="blank">Kayzen-GS</a>. It is an extremely powerful and flexible grid system that can be used to accomplish practically any layout you desire. Be sure to check out the <a href="#">demo page</a> to view examples and see how to use it.</p>
                
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The grid system can be customized using the following options:</p>
				
				<p class="alert-bar-help">Read the <a href="configuration.html">Configuration</a> page to learn more about a module's configuration.</p>
                
				<p class="alert-bar-error">Changing some of the below values may break existing Kayzen HTML templates. Pursue with caution.</p>
				
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
							<td><code>options : columns</code></td>
							<td><code class="value">12</code></td>
							<td>The number of columns your grid system should have.</td>
						</tr>
						<tr>
							<td><code>options : gutter</code></td>
							<td><code class="value">3%</code></td>
							<td>The width of your column gutters.</td>
						</tr>
						<tr>
							<td><code>options : col-break</code></td>
							<td><code class="value">940px</code></td>
							<td>The default width at which columns should become stacked.</td>
						</tr>
						<tr>
							<td><code>options : row-namespace</code></td>
							<td><code class="value">'row'</code></td>
							<td>The namespace for your row elements (e.g. ".row").</td>
						</tr>
						<tr>
							<td><code>options : col-namespace</code></td>
							<td><code class="value">'span'</code></td>
							<td>The namespce for your columns (e.g. ".span-5").</td>
						</tr>
						<tr>
							<td><code>settings : old-ie</code></td>
							<td><code class="value">false</code></td>
							<td>Enable if you are unfortunate enough to have to provide support for IE6/7.</td>
						</tr>
						<tr>
							<td><code>settings : responsive</code></td>
							<td><code class="value">true</code></td>
							<td>If disabled, columns will not become stacked at any resolution.</td>
						</tr>
						<tr>
							<td><code>settings : mobile-first</code></td>
							<td><code class="value">false</code></td>
							<td>Enable to generate mobile-first columns (warning: this will increase your CSS output).</td>
						</tr>
						<tr>
							<td><code>settings : custom-stacking</code></td>
							<td><code class="value">false</code></td>
							<td>Enable to generate <a href="#">custom-stacking columns</a>.</td>
						</tr>
						<tr>
							<td><code>settings : adaptive-columns</code></td>
							<td><code class="value">true</code></td>
							<td>Enable to generate <a href="#">adaptive columns</a>.</td>
						</tr>
						<tr>
							<td><code>settings : flow-columns</code></td>
							<td><code class="value">true</code></td>
							<td>Enable to generate <a href="#">flow columns</a>.</td>
						</tr>
						<tr>
							<td><code>settings : magic-columns</code></td>
							<td><code class="value">true</code></td>
							<td>Enable to generate <a href="#">magic columns</a>.</td>
						</tr>
						<tr>
							<td><code>settings : block-columns</code></td>
							<td><code class="value">true</code></td>
							<td>Enable to generate <a href="#">block columns</a>.</td>
						</tr>
						<tr>
							<td><code>settings : no-gutter-columns</code></td>
							<td><code class="value">true</code></td>
							<td>Enable to generate <a href="#">no-gutter columns</a>.</td>
						</tr>
						<tr>
							<td><code>settings : reverse-columns</code></td>
							<td><code class="value">true</code></td>
							<td>Enable to generate <a href="#">reverse columns</a>.</td>
						</tr>
						<tr>
							<td><code>settings : pull-columns</code></td>
							<td><code class="value">true</code></td>
							<td>Enable to generate <a href="#">pull columns</a>.</td>
						</tr>
						<tr>
							<td><code>settings : push-columns</code></td>
							<td><code class="value">true</code></td>
							<td>Enable to generate <a href="#">push columns</a>.</td>
						</tr>
						<tr>
							<td><code>breakpoints</code></td>
							<td><code class="value">[...]</code></td>
							<td>Set the breakpoint values to be used by the grid system.</td>
						</tr>
						<tr>
							<td><code>fractions</code></td>
							<td><code class="value">[...]</code></td>
							<td>Set the fractions to be used for the grid system.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>grid()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include grid((
    'options' : (
        'columns'           : 12,
        'gutter'            : 3%,
        'col-break'         : 940px,
        'row-namespace'     : 'row',
        'col-namespace'     : 'span',
    ),
    'settings' : (
        'old-ie'            : false,
        'responsive'        : true,
        'mobile-first'      : false,
        'custom-stacking'   : true,
        'adaptive-columns'  : true,
        'flow-columns'      : true,
        'magic-columns'     : true,
        'block-columns'     : true,
        'no-gutter-columns' : true,
        'reverse-columns'   : true,
        'pull-columns'      : true,
        'push-columns'      : true
    ),
    'breakpoints' : (
        'break-0'           : 0px,
        'break-1'           : 460px,
        'break-2'           : 720px,
        'break-3'           : 940px,
        'break-4'           : 1200px
    ),
    'fractions' : (
        'full'              : (1, 1),
        'half'              : (1, 2),
        'third'             : (1, 3),
        'quarter'           : (1, 4),
        'sixth'             : (1, 6)
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