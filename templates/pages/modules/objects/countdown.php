<?php 
	include ('../../../app.php');
	// page config
	$title = 'Countdown';
	$tagLine = 'assets/modules/objects/countdown';
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
					<li class="plain"><span>_countdown.scss</span></li>
					<li class="plain"><span>countdown.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/countdown" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/countdown</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>countdown</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="countdown">
    &lt;div class="countdown_days" data-timeUnit="Days">00&lt;/div>
    &lt;div class="countdown_hours" data-timeUnit="Hours">00&lt;/div>
    &lt;div class="countdown_minutes" data-timeUnit="Minutes">00&lt;/div>
    &lt;div class="countdown_seconds" data-timeUnit="Seconds">00&lt;/div>
&lt;/div>
</pre>

                <br />
							
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$(".countdown").countdown({
    date   : '1 February 2016 09:00:00',
    format : 'on'
});
</pre>

                <p><a href="<?php pageLink('further/coming-soon.php') ?>">View Demo</a></p>

                <h3 class="heading-size-3">Custom Selectors</h3>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="countdown">
    &lt;div class="days" data-timeUnit="Days">00&lt;/div>
    &lt;div class="hours" data-timeUnit="Hours">00&lt;/div>
    &lt;div class="minutes" data-timeUnit="Minutes">00&lt;/div>
    &lt;div class="seconds" data-timeUnit="Seconds">00&lt;/div>
&lt;/div>
</pre>

                <br />
							
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$(".countdown").countdown({
    date            : '1 February 2016 09:00:00',
    format          : 'on',
    daysSelector    : '.days',
    hoursSelector   : '.hours',
    minutesSelector : '.minutes',
    secondsSelector : '.seconds'
});
</pre>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The countdown can be customized using the following options:</p>
				
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
							<td><code>number-size</code></td>
							<td><code class="value">font-size('size-8')</code></td>
							<td>Set whether the billboard should be full-screen without any modifiers.</td>
						</tr>
						<tr>
							<td><code>number-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>Set whether the billboard should be full-screen without any modifiers.</td>
						</tr>
						<tr>
							<td><code>number-weight</code></td>
							<td><code class="value">lighter</code></td>
							<td>Set whether the billboard should be full-screen without any modifiers.</td>
						</tr>
						<tr>
							<td><code>unit-size</code></td>
							<td><code class="value">0.7rem</code></td>
							<td>Set whether the billboard should be full-screen without any modifiers.</td>
						</tr>
						<tr>
							<td><code>unit-color</code></td>
							<td><code class="value">inherit</code></td>
							<td>Set whether the billboard should be full-screen without any modifiers.</td>
						</tr>
						<tr>
							<td><code>unit-weight</code></td>
							<td><code class="value">inherit</code></td>
							<td>Set whether the billboard should be full-screen without any modifiers.</td>
						</tr>
						<tr>
							<td><code>unit-transform</code></td>
							<td><code class="value">uppercase</code></td>
							<td>Set whether the billboard should be full-screen without any modifiers.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>countdown()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include countdown((
    'icon-color' : rgba(white, 0.6),
    'title-bg'   : color('brand', 'primary')
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