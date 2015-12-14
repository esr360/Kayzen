<?php 
	include ('../../../app.php');
	// page config
	$title = 'Buttons';
	$tagLine = 'app/modules/elements/buttons';
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
					<li class="plain"><span>_buttons.scss</span></li>	
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/buttons" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/buttons</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>button</code></li>
                        <li><b>Components:</b> <code>group</code></li>
                        <li>
                            <b>Modifiers:</b> 
                            <code>[colors]</code>, 
                            <code>[sizes]</code>, 
                            <code>block</code>, 
                            <code>border</code>, 
                            <code>pill</code>, 
                            <code>disabled</code>, 
                            <code>round</code>, 
                            <code>oval</code>, 
                            <code>fat</code>, 
                            <code>thin</code>,
                            <code>icon</code>
                        </li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <h3 class="heading-size-3">Styles</h3>
                
                <div class="well object">
                    <a class="button" href="#">Button</a>
               </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Button - Block</h4>
                
                <div class="well object">
                    <a class="button-block" href="#">Button</a>
               </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-block" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Button - Border</h4>

                <div class="well object">
                    <a class="button-border" href="#">Button</a>
               </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-border" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Button - Pill</h4>
               
                <div class="well object">
                    <a class="button-pill" href="#">Button</a>
                    <a class="button-pill" href="#">Button</a>
                    <a class="button-pill" href="#">Button</a>
               </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-pill" href="#">Button&lt;/a>
&lt;a class="button-pill" href="#">Button&lt;/a>
&lt;a class="button-pill" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Button - Disabled</h4>
                
                <div class="well object">
                    <a class="button-disabled" href="#">Button</a>
               </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-disabled" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Button - Round</h4>
                
                <div class="well object">
                    <a class="button-round" href="#">Button</a>
               </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-round" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Button - Oval</h4>
               
                <div class="well object">
                    <a class="button-oval" href="#">Button</a>
               </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-oval" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Button - Fat</h4>
               
                <div class="well object">
                    <a class="button-fat" href="#">Button</a>
               </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a class="button-fat" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Button - Thin</h4>
               
                <div class="well object">
                    <a class="button-thin" href="#">Button</a>
               </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a class="button-thin" href="#">Button&lt;/a>
</pre>
               
                <h3 class="heading-size-3">Icon Buttons</h3>
                
                <div class="well object">
                    <a class="button-icon" href="#">
                        <i class="fa fa-apple"></i>
                    </a>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a class="button-icon" href="#">
    &lt;i class="fa fa-apple">&lt;/i>
&lt;/a>
</pre>
                
                <h3 class="heading-size-3">Colors</h3>
                
                <p>The colors for the buttons are generated from the <a href="#">color-palette</a> module. Below shows the default colors for these palettes; if you modify the colors in the color-palette module, either by adding, removing or modifying existing values, these will be reflected in your buttons.</p>

                <h4 class="heading-size-2-uppercase">Palette - Brand</h4>
               
                <div class="well object">
                    <a class="button-primary" href="#">Button</a>
                    <a class="button-secondary" href="#">Button</a>
                    <a class="button-brand-3" href="#">Button</a>
                </div>
                                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-primary" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Palette - Greyscale</h4>
               
                <div class="well object">
                    <a class="button-white" href="#">Button</a>
                    <a class="button-grey-1" href="#">Button</a>
                    <a class="button-grey-2" href="#">Button</a>
                    <a class="button-grey-3" href="#">Button</a>
                    <a class="button-grey-4" href="#">Button</a>
                    <a class="button-grey-5" href="#">Button</a>
                    <a class="button-black" href="#">Button</a>
                </div>
                                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-grey-3" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Palette - Alerts</h4>
               
                <div class="well object">
                    <a class="button-error" href="#">Button</a>
                    <a class="button-help" href="#">Button</a>
                    <a class="button-info" href="#">Button</a>
                    <a class="button-success" href="#">Button</a>
                </div>
                                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-error" href="#">Button&lt;/a>
</pre>

                <h4 class="heading-size-2-uppercase">Palette - Social</h4>
               
                <div class="well object">
                    <a class="button-facebook" href="#">Button</a>
                    <a class="button-twitter" href="#">Button</a>
                    <a class="button-google-plus" href="#">Button</a>
                </div>
                                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-facebook" href="#">Button&lt;/a>
</pre>
               
                <h3 class="heading-size-3">Sizes</h3>
                
                <p>For each size in the <a href="#">typography</a> module, a modifier for the buttons is generated for that size.</p>
                
                <div class="well object">
                    <a class="button-size-1" href="#">Button</a>
                    <a class="button-size-2" href="#">Button</a>
                    <a class="button" href="#">Button</a>
                    <a class="button-size-3" href="#">Button</a>
                    <a class="button-size-4" href="#">Button</a>
                    <a class="button-size-5" href="#">Button</a>
                    <a class="button-size-6" href="#">Button</a>
                    <a class="button-size-7" href="#">Button</a>
                </div>
                                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-size-4" href="#">Button&lt;/a>
</pre>
                
                <h3 class="heading-size-3">Mixing & Matching</h3>
                
                <p>You can of course mix and match any and all of the above combinations. This equates to  <b>1,500+</b> different button combinations.</p>
                
                <div class="well object">
                    <a class="button-block-border-size-3-secondary-oval" href="#">Button</a>
                </div>
                                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-block-border-size-3-secondary-oval">Button&lt;/a>
</pre>

                <div class="well object">
                    <a class="button-icon-size-2-twitter-oval" href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="button-icon-google-plus-round" href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="button-icon-size-3-facebook" href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a class="button-icon-size-2-twitter-oval" href="#">
    &lt;i class="fa fa-twitter">&lt;/i>
&lt;/a>
</pre>

                <h3 class="heading-size-3">Combining Styles</h3>
                
                <h3 class="heading-size-3">Button Group</h3>
                
                <p>To group more than one button together you can use the <code>button_group</code> class.</p>
                
                <div class="well object">
                    <div class="button_group">
                        <a class="button" href="#">Button</a>
                        <a class="button" href="#">Button</a>
                        <a class="button" href="#">Button</a>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="button_group">
    &lt;a class="button">Button&lt;/a>
    &lt;a class="button">Button&lt;/a>
    &lt;a class="button">Button&lt;/a>
&lt;/div>
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The blockquotes can be customized using the following options:</p>
                
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
							<td><code>background</code></td>
							<td><code class="value">color(greyscale, grey-4)</code></td>
							<td>The default background color for regular buttons.</td>
						</tr>
						<tr>
							<td><code>color</code></td>
							<td><code class="value">white</code></td>
							<td>The default text color for regular buttons.</td>
						</tr>
						<tr>
							<td><code>side-padding</code></td>
							<td><code class="value">1em</code></td>
							<td>The left/right padding for all buttons (recommended to use em's for scaling).</td>
						</tr>
						<tr>
							<td><code>line-height</code></td>
							<td><code class="value">2.4</code></td>
							<td>The line height for regular buttons.</td>
						</tr>
						<tr>
							<td><code>weight</code></td>
							<td><code class="value">lighter</code></td>
							<td>The font-family for regular buttons.</td>
						</tr>
						<tr>
							<td><code>border-width</code></td>
							<td><code class="value">1px</code></td>
							<td>The width of the border for the 'border' modifier.</td>
						</tr>
						<tr>
							<td><code>pill-radius</code></td>
							<td><code class="value">0.4em</code></td>
							<td>The radius of first/last pill buttons.</td>
						</tr>
						<tr>
							<td><code>disabled-opacity</code></td>
							<td><code class="value">0.6</code></td>
							<td>The opacity for disabled buttons.</td>
						</tr>
						<tr>
							<td><code>round-radius</code></td>
							<td><code class="value">0.4em</code></td>
							<td>The radius for round buttons.</td>
						</tr>
						<tr>
							<td><code>fat-height</code></td>
							<td><code class="value">2.8</code></td>
							<td>The line-height for fat buttons.</td>
						</tr>
						<tr>
							<td><code>thin-height</code></td>
							<td><code class="value">2</code></td>
							<td>The line-height for thin buttons.</td>
						</tr>
						<tr>
							<td><code>group-spacing</code></td>
							<td><code class="value">0.5em</code></td>
							<td>The spacing between each button in a button group.</td>
						</tr>
						<tr>
							<td><code>group-stack</code></td>
							<td><code class="value">'break-1'</code></td>
							<td>The value at which buttons in a group should become stacked for mobile devices.</td>
						</tr>
                    </tbody>
                </table>
                        
				<p>To change one of the above values, pass your new value(s) to the <code>buttons()</code> mixin in your theme file (e.g. app/themes/Kayzen/_kayzen.scss).</p>
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include buttons((
    'weight'       : 'bold',
	'border-width' : 3px,
	'round-radius' : 0.6em
));
</pre>	

                <div class="well object">
                    <style>
                        #button-demo {
                            font-weight: bold;
                            border-width: 3px;
                            border-radius: 0.6em;
                        }
                    </style>
                    <a  id="button-demo" class="button-border-secondary" href="#">Button</a>
                </div>
     
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;a class="button-border-secondary">Button&lt;/a>
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