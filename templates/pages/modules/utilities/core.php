<?php 
	include ('../../../app.php');
	// page config
	$title = 'Core';
	$tagLine = 'assets/modules/utilities/core';
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
					<li class="plain"><span>_core.scss</span></li>
					<li class="plain"><span>core.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/core" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/core</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>This module provides the utmost basic CSS for a webpage as well as all core JavaScripts which do not apply to other modules.</p>
                
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The core module styles can be customized using the following options:</p>
				
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
							<td><code class="value">color('greyscale', 'grey-1')</code></td>
							<td>The background to be applied to the main <code>body</code> element.</td>
						</tr>
						<tr>
							<td><code>font-family</code></td>
							<td><code class="value">typography('typefaces', 'primary')</code></td>
							<td>The font family to be applied to the main <code>body</code> element.</td>
						</tr>
						<tr>
							<td><code>text-color</code></td>
							<td><code class="value">typography('colors', 'base')</code></td>
							<td>The text color to be applied to the main <code>body</code> element.</td>
						</tr>
						<tr>
							<td><code>font-size</code></td>
							<td><code class="value">typography('sizes', 'base')</code></td>
							<td>The font size to be applied to the main <code>body</code> element.</td>
						</tr>
						<tr>
							<td><code>line-height</code></td>
							<td><code class="value">1.4</code></td>
							<td>The line height to be applied to the main <code>body</code> element.</td>
						</tr>
						<tr>
							<td><code>margin</code></td>
							<td><code class="value">2rem</code></td>
							<td>The base margin width for your project.</td>
						</tr>
						<tr>
							<td><code>radius</code></td>
							<td><code class="value">0.4em</code></td>
							<td>The base radius for your project.</td>
						</tr>
						<tr>
							<td><code>oval-radius</code></td>
							<td><code class="value">1.5em</code></td>
							<td>The global radius to use for oval elements.</td>
						</tr>
						<tr>
							<td><code>transition</code></td>
							<td><code class="value">0.4s</code></td>
							<td>The base transition duration to use for your project.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>core()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include core((
    'margin'     : 1em,
    'transition' : 0.6s
));
</pre>
				
				<h2 class="heading-light-size-5">JavaScript</h2>
                
                <p>The <code>core.js</code> file contains general JS tools, helpers and plugin initialisations.</p>
                
                <h4 class="heading-size-2-uppercase">Global Transition</h4>
                
                <p>The <a href="#">Modular</a> framework allows you to access any Sass configuration value in your JavaScript. You can use the <code>coreTransition</code> variable anywhere in your JavaScript to use the <code>transition</code> value set in <code>_core.scss</code>. Note that the value is converted from seconds to miliseconds, so a value of <code>0.4s</code> would become <code>400ms</code>. This is made possible from the below line found in <code>core.js</code>:</p>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
window['coreTransition'] = _module['core']['transition'].slice(0,-1) * 1000;
</pre>

                <h4 class="heading-size-2-uppercase">Get Breakpoint Value</h4>
                
                <p>You can use the <code>breakpoint()</code> function anywhere in your Javascript to fetch any breakpoint value from the <a href="#">Grid</a> module:</p>
                           
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
if(breakpoint('min-width', 'break-3')) {
    // do something   
}
</pre>    

                <p>This is made possible using the <a href="#">Modular</a> framework, and the below function found in <code>core.js</code> which uses the <a href="https://developer.mozilla.org/en/docs/Web/API/Window/matchMedia" target="blank"><code>Window.matchMedia()</code></a> web API:</p>
                       
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
function breakpoint(media, value) {
    return window.matchMedia('(' + media + ':' + _module['grid']['breakpoints'][value] + ')').matches;
}
</pre>

                <h4 class="heading-size-2-uppercase">Plugin Inits</h4>
                
                <p>The <code>core.js</code> file also contans general plugin initialisations which do not relate to any other modules, and should only be touched if you know what you're doing (you shouldn't need to edit them). For reference the following files/plugins are called in <code>core.js</code>:</p>
                
                <ul class="list-clear">
                    <li>assets/includes/<b>Kayzen.smoothScroll.js</b></li>
                    <li>assets/includes/<b>Kayzen.iframeHeight.js</b></li>
                    <li>assets/includes/<b>Kayzen.scrollStats.js</b></li>
                    <li>assets/includes/<b>Kayzen.masonryGrid.js</b></li>
                    <li>assets/includes/<b>Kayzen.dataBg.js</b></li>
                    <li>assets/vendor/<b>Stellar</b></li>
                    <li>assets/vendor/<b>Owl-Carousel</b></li>
                    <li>assets/vendor/<b>Magnific-Popup</b></li>
                </ul>
                
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