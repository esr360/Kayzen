<?php 
	include ('../app.php');
	// start the ouput buffer
	ob_start(); 
	// page config
	$title = 'Accordions';
	$modulePath = 'app/modules/elements/accordions';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php include ('../modules/objects/header/header.php'); ?>

		<?php include ('../modules/objects/billboard/billboard.php'); ?>
		
		<section class="section-primary">
			
			<div class="container-small">
				
				<h2 class="heading-light-size-5">Files</h2>
				
				<ul class="list-tags">
					<li class="scss">_accordions.scss</li>
					<li class="js">accordions.js</li>	
					<li>README.md</li>	
				</ul>
				
				<h2 class="heading-light-size-5">Examples</h2>
				
				<div class="accordion">
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
				</div>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="accordion">
	&lt;section>
		&lt;h4>&lt;!-- accordion title -->&lt;/h4>
		&lt;p>&lt;!-- accordion content -->&lt;/p>
	&lt;/section>
	&lt;section>
		&lt;h4>&lt;!-- accordion title -->&lt;/h4>
		&lt;p>&lt;!-- accordion content -->&lt;/p>
	&lt;/section>
	&lt;section>
		&lt;h4>&lt;!-- accordion title -->&lt;/h4>
		&lt;p>&lt;!-- accordion content -->&lt;/p>
	&lt;/section>
&lt;/div>
</pre>
				<p>The markup for an accordion is flexible; so long as the elements are arranged in the correct format (shown below), you can use any HTML tags you desire. All that is required is the <code>accordion</code> class on the wrapper.</p>
				
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="accordion">
	&lt;div>
		&lt;div>&lt;!-- accordion title -->&lt;/div>
		&lt;div>&lt;!-- accordion content -->&lt;/div>
	&lt;/div>
	&lt;div>
		&lt;div>&lt;!-- accordion title -->&lt;/div>
		&lt;div>&lt;!-- accordion content -->&lt;/div>
	&lt;/div>
	&lt;div>
		&lt;div>&lt;!-- accordion title -->&lt;/div>
		&lt;div>&lt;!-- accordion content -->&lt;/div>
	&lt;/div>
&lt;/div>
</pre>

				<h3 class="heading-size-3 font-2">Open By Default</h3>

				<div class="accordion">
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="active">
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
				</div>
				
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="accordion">
	&lt;section>
		...
	&lt;/section>
	&lt;section class="active">
		...
	&lt;/section>
	&lt;section>
		...
	&lt;/section>
&lt;/div>
</pre>
				
				<h3 class="heading-size-3 font-2">Multiple Open Items <small class="heading-light-size-2">(Hint: click more than one accordion item)</small></h3>
				
				<div class="accordion-keep-open">
					<section class="active">
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
				</div>
				
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="accordion-keep-open">
	...
&lt;/div>
</pre>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The accordion styles can be customized using the following values:</p>
				
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
							<td>icon</td>
							<td>"\f138"</td>
							<td>The content value for any FontAwesome icon to act as the open/close symbol.</td>
						</tr>
						<tr>
							<td>icon-color</td>
							<td>rgba(color(greyscale, grey-3), 0.6)</td>
							<td>The color for the open/close icon.</td>
						</tr>
						<tr>
							<td>icon-active-color</td>
							<td>color(greyscale, white)</td>
							<td>The color for the open/close icon when the corresponding section is open.</td>
						</tr>
						<tr>
							<td>section-margin</td>
							<td>0</td>
							<td>The vertical spacing between each accordion section.</td>
						</tr>
						<tr>
							<td>title-bg</td>
							<td>transparent</td>
							<td>The background color for the accordion title (the clickable part).</td>
						</tr>
						<tr>
							<td>title-color</td>
							<td>typograhy(colors, base)</td>
							<td>The text color for the accordion title (the clickable part).</td>
						</tr>
						<tr>
							<td>title-border</td>
							<td>1px solid rgba(black, 0.15)</td>
							<td>The border for the accordion title (the clickable part).</td>
						</tr>
						<tr>
							<td>title-radius</td>
							<td>0</td>
							<td>The border-radius for the accordion title (the clickable part).</td>
						</tr>
						<tr>
							<td>title-padding</td>
							<td>1em</td>
							<td>The padding for the accordion title (the clickable part).</td>
						</tr>
						<tr>
							<td>title-active-bg</td>
							<td>color(brand, primary)</td>
							<td>The background color for the accordion title when the corresponding section is open.</td>
						</tr>
						<tr>
							<td>title-active-color</td>
							<td>color(greyscale, white)</td>
							<td>The text color for the accordion title when the corresponding section is open.</td>
						</tr>
						<tr>
							<td>title-active-border</td>
							<td>transparent</td>
							<td>The border for the accordion title when the corresponding section is open.</td>
						</tr>
						<tr>
							<td>title-active-radius</td>
							<td>0</td>
							<td>The border-radius for the accordion title when the corresponding section is open.</td>
						</tr>
						<tr>
							<td>content-bg</td>
							<td>color(greyscale, white)</td>
							<td>The backgound for the accordion content.</td>
						</tr>
						<tr>
							<td>content-color</td>
							<td>typograhy(colors, base)</td>
							<td>The text color for the accordion content.</td>
						</tr>
						<tr>
							<td>content-border</td>
							<td>1px solid rgba(black, 0.15)</td>
							<td>The border for the accordion content.</td>
						</tr>
						<tr>
							<td>content-radius</td>
							<td>0</td>
							<td>The border-radius for the accordion content.</td>
						</tr>
						<tr>
							<td>content-padding</td>
							<td>1em</td>
							<td>The padding for the accordion content.</td>
						</tr>
					</tbody>
				</table>
				
				<p>To change one of the above values, pass your new value to the <code>accordions</code> function in <b>_Kayzen.scss</b> <small>(app/themes/Kayzen/_kayzen.scss)</small>.</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW" style="display: none;">
@include accordions((
	icon-color      : rgba(white, 0.6),
	title-bg        : color(brand, primary),
	title-color     : white,
	title-active-bg : darken(color(brand, primary), 10%)
));
</pre>				

				<br />

				<div class="accordion" id="accordion-demo">
					<style>
						#accordion-demo h4 {
							background-color: #9B58B5;
							color: #FFFFFF;
						}
						#accordion-demo h4:after {
							color: rgba(255,255,255, 0.6);
						}
						#accordion-demo section:hover h4:after,
						#accordion-demo section.active h4:after {
							color: #FFFFFF;
						}
						#accordion-demo section:hover h4,
						#accordion-demo section.active h4 {
							background-color: #804397;
						}
					</style>
					<section class="active">
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
				</div>
				
				<hr class="line" />

<pre data-enlighter-language="css" class="EnlighterJSRAW" style="display: none;">
@include accordions((
	section-margin      : 1.4em,
	title-radius        : 0.4em,
	title-active-radius : 0.4em 0.4em 0 0,
	content-radius      : 0 0 0.4em 0.4em
));
</pre>				

				<br />

				<div class="accordion" id="accordion-demo-2">
					<style>
						#accordion-demo-2 section {
							margin-bottom: 1.4em;
						}
						#accordion-demo-2 h4 {
							border-radius: 0.4em;
							border-bottom: 1px solid rgba(0, 0, 0, 0.15) !important;
						}
						#accordion-demo-2 p {
							border-radius: 0 0 0.4em 0.4em;
							border-bottom: 1px solid rgba(0, 0, 0, 0.15) !important;
						}
						#accordion-demo-2 section.active h4 {
							border-radius: 0.4em 0.4em 0 0;
						}
					</style>
					<section class="active">
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section>
						<h4>Accordion Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
				</div>

			</div><!-- container-small -->
			
		</section>

		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>
		
    <?php include ('../includes/syntax-highlighter.php'); ?>

</body>
</html>

<?php
$cachefile = "../../accordions.html";
$fp = fopen($cachefile, 'w'); 
// save the contents of output buffer to the file
fwrite($fp, ob_get_contents()); 
// close the file
fclose($fp); 
// Send the output to the browser
ob_end_flush(); 
?>