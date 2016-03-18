<?php 
	include ('../../../app.php');
	// page config
	$title = 'Earth Slider';
	$tagLine = 'assets/modules/objects/earth-slider';
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
					<li class="plain"><span>_earth-slider.scss</span></li>
					<li class="plain"><span>earth-slider.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/earth-slider" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/earth-slider</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>earth-slider</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;section class="section earth-slider">
    &lt;header class="earth-slider_section heading_group-block text-center">
        &lt;div class="container-small">
            ...
        &lt;/div>
    &lt;/header>
    ...
    &lt;div class="earth-wrapper">
        &lt;div class="earth">               
            &lt;img class="globe" src="/assets/images/earth.png" alt="" />
            &lt;div class="pins">
                &lt;div class="pin-wrapper">
                    &lt;div class='pin'>&lt;/div>
                &lt;/div>
                &lt;div class="pin-wrapper">
                    &lt;div class='pin'>&lt;/div>
                &lt;/div>
                &lt;div class="pin-wrapper">
                    &lt;div class='pin'>&lt;/div>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
    &lt;nav class="slide-nav">
        &lt;button class="slide-prev icon-border-size-4">&lt;i class="fa fa-angle-left">&lt;/i>&lt;/button>
        &lt;button class="slide-next icon-border-size-4">&lt;i class="fa fa-angle-right">&lt;/i>&lt;/button>
    &lt;/nav>
&lt;/section>
</pre>
<br />
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('.earth-slider').KayzenEarthSlider();
</pre>

                <p><a href="<?php pageLink('homepages/homepage-2.php#s-welcome') ?>">View Demo</a></p>

                <h3 class="heading-size-3">Custom Starting Section</h3>

<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('.earth-slider').KayzenEarthSlider({
    startingSection : 1
});
</pre>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Earth Slider can be customized using the following options:</p>
				
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
							<td><code>globe-spin-duration</code></td>
							<td><code class="value">35s</code></td>
							<td>The amount of time it should take for the earth image to rotate 360 degrees.</td>
						</tr>
						<tr>
							<td><code>pin-active-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The color for the active pin.</td>
						</tr>
						<tr>
							<td><code>respond-at</code></td>
							<td><code class="value">breakpoint('break-3')</code></td>
							<td>The width at which the earth slider should respond for mobile devices.</td>
						</tr>
						<tr>
							<td><code>pin-size</code></td>
							<td><code class="value">55px</code></td>
							<td>The size of the pins.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>earth-slider()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include earth-slider((
    'globe-spin-duration' : 45s,
    'pin-size'            : 40px
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