<?php 
	include ('../../../app.php');
	// page config
	$title = 'Accordions';
	$tagLine = 'app/modules/elements/accordions';
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
					<li class="plain"><span>_accordions.scss</span></li>
					<li class="plain"><span>accordions.js</span></li>	
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><small><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/accordions" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/accordions</a></small></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>accordion</code></li>
                        <li><b>Components:</b> <code>section</code>, <code>title</code>, <code>content</code></li>
                        <li><b>Modifiers:</b> <code>minimal</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
				
				<div class="accordion">
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
				</div>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="accordion">
	&lt;section class="accordion_section">
		&lt;h4 class="accordion_title">...&lt;/h4>
		&lt;p class="accordion_content">...&lt;/p>
	&lt;/section>
	&lt;section class="accordion_section">
		&lt;h4 class="accordion_title">...&lt;/h4>
		&lt;p class="accordion_content">...&lt;/p>
	&lt;/section>
	&lt;section class="accordion_section">
		&lt;h4 class="accordion_title">...&lt;/h4>
		&lt;p class="accordion_content">...&lt;/p>
	&lt;/section>
&lt;/div>
</pre>

				<h3 class="heading-size-3">Open By Default</h3>

				<div class="accordion">
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="accordion_section active">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
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
				
				<h3 class="heading-size-3">Multiple Open Items <small class="heading-light-size-2">(Hint: click more than one accordion item)</small></h3>
				
				<div class="accordion-keep-open">
					<section class="accordion_section active">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
				</div>
				
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="accordion-keep-open">
	...
&lt;/div>
</pre>
				<h3 class="heading-size-3">Minimal (+ Multiple Open Items)</h3>
                
                <div class="accordion-minimal-keep-open">
					<section class="object active">
                        <header class="heading_group-small">
                            <h4 class="heading-size-4-dotted">Accordion Title</h4>
                        </header>
						<div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p></div>
					</section>
					<section class="object">
                        <header class="heading_group-small">
                            <h4 class="heading-size-4-dotted">Accordion Title</h4>
                        </header>
						<div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p></div>
					</section>
					<section class="object">
                        <header class="heading_group-small">
                            <h4 class="heading-size-4-dotted">Accordion Title</h4>
                        </header>
						<div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p></div>
					</section>
				</div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="accordion-minimal-keep-open">
	&lt;section class="object active">
        &lt;header class="heading_group-small">
            &lt;h4 class="heading-size-4-dotted">Accordion Title&lt;/h4>
        &lt;/header>
    &lt;/section>
    &lt;div>&lt;p>...&lt;/p>&lt;/div>
	&lt;section class="object">
        &lt;header class="heading_group-small">
            &lt;h4 class="heading-size-4-dotted">Accordion Title&lt;/h4>
        &lt;/header>
    &lt;/section>
    &lt;div>&lt;p>...&lt;/p>&lt;/div>
	&lt;section class="object">
        &lt;header class="heading_group-small">
            &lt;h4 class="heading-size-4-dotted">Accordion Title&lt;/h4>
        &lt;/header>
    &lt;/section>
    &lt;div>&lt;p>...&lt;/p>&lt;/div>
&lt;/div>
</pre>
                
				<h3 class="heading-size-3">Styleless</h3>
                
                <p>The only thing required for the accordion functionality is the main `accordion` class on the parent element. As long as the format of your elements is correct, they will be converted into an accordion. This leaves you free to style them how you wish, or allows you to use existing theme styles to create your own accordion (such as the above example).</p>
                
                <p class="alert-bar-info">You probably will want to add some sort of styling, as you can see the naked accodion isn't a pretty sight...</p>
                
                <div class="accordion">
					<div>
						<div>Accordion Title</div>
						<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</div>
					</div>
					<div>
						<div>Accordion Title</div>
						<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</div>
					</div>
					<div>
						<div>Accordion Title</div>
						<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</div>
					</div>
				</div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW" style="display: none;">
&lt;div class="accordion">
    &lt;div>
        &lt;div>Accordion Title&lt;/div>
        &lt;div>...&lt;/div>
    &lt;/div>
    &lt;div>
        &lt;div>Accordion Title&lt;/div>
        &lt;div>...&lt;/div>
    &lt;/div>
    &lt;div>
        &lt;div>Accordion Title&lt;/div>
        &lt;div>...&lt;/div>
    &lt;/div>
&lt;/div>
</pre>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The accordion styles can be customized using the following options:</p>
				
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
							<td><code>icon</code></td>
							<td><code class="value">"\f138"</code></td>
							<td>The content value for any FontAwesome icon to act as the open/close symbol.</td>
						</tr>
						<tr>
							<td><code>icon-color</code></td>
							<td><code class="value">rgba(color(greyscale, grey-3), 0.6)</code></td>
							<td>The color for the open/close icon.</td>
						</tr>
						<tr>
							<td><code>icon-active-color</code></td>
							<td><code class="value">color(greyscale, white)</code></td>
							<td>The color for the open/close icon when the corresponding section is open.</td>
						</tr>
						<tr>
							<td><code>section-margin</code></td>
							<td><code class="value">0</code></td>
							<td>The vertical spacing between each accordion section.</td>
						</tr>
						<tr>
							<td><code>title-bg</code></td>
							<td><code class="value">transparent</code></td>
							<td>The background color for the accordion title (the clickable part).</td>
						</tr>
						<tr>
							<td><code>title-color</code></td>
							<td><code class="value">typograhy(colors, base)</code></td>
							<td>The text color for the accordion title (the clickable part).</td>
						</tr>
						<tr>
							<td><code>title-border</code></td>
							<td><code class="value">1px solid rgba(black, 0.15)</code></td>
							<td>The border for the accordion title (the clickable part).</td>
						</tr>
						<tr>
							<td><code>title-radius</code></td>
							<td><code class="value">0</code></td>
							<td>The border-radius for the accordion title (the clickable part).</td>
						</tr>
						<tr>
							<td><code>title-padding</code></td>
							<td><code class="value">1em</code></td>
							<td>The padding for the accordion title (the clickable part).</td>
						</tr>
						<tr>
							<td><code>title-active-bg</code></td>
							<td><code class="value">color(brand, primary)</code></td>
							<td>The background color for the accordion title when the corresponding section is open.</td>
						</tr>
						<tr>
							<td><code>title-active-color</code></td>
							<td><code class="value">color(greyscale, white)</code></td>
							<td>The text color for the accordion title when the corresponding section is open.</td>
						</tr>
						<tr>
							<td><code>title-active-border</code></td>
							<td><code class="value">transparent</code></td>
							<td>The border for the accordion title when the corresponding section is open.</td>
						</tr>
						<tr>
							<td><code>title-active-radius</code></td>
							<td><code class="value">0</code></td>
							<td>The border-radius for the accordion title when the corresponding section is open.</td>
						</tr>
						<tr>
							<td><code>content-bg</code></td>
							<td><code class="value">color(greyscale, white)</code></td>
							<td>The backgound for the accordion content.</td>
						</tr>
						<tr>
							<td><code>content-color</code></td>
							<td><code class="value">typograhy(colors, base)</code></td>
							<td>The text color for the accordion content.</td>
						</tr>
						<tr>
							<td><code>content-border</code></td>
							<td><code class="value">1px solid rgba(black, 0.15)</code></td>
							<td>The border for the accordion content.</td>
						</tr>
						<tr>
							<td><code>content-radius</code></td>
							<td><code class="value">0</code></td>
							<td>The border-radius for the accordion content.</td>
						</tr>
						<tr>
							<td><code>content-padding</code></td>
							<td><code class="value">1em</code></td>
							<td>The padding for the accordion content.</td>
						</tr>
					</tbody>
				</table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>accordions()</code> mixin in <b>_Kayzen.scss</b> <small>(app/themes/Kayzen/_kayzen.scss)</small>.</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
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
						#accordion-demo .accordion_title {
							background-color: #9B58B5;
							color: #FFFFFF;
						}
						#accordion-demo .accordion_title:after {
							color: rgba(255,255,255, 0.6);
						}
						#accordion-demo .accordion_section:hover .accordion_title:after,
						#accordion-demo .accordion_section.active .accordion_title:after {
							color: #FFFFFF;
						}
						#accordion-demo .accordion_section:hover .accordion_title,
						#accordion-demo .accordion_section.active .accordion_title {
							background-color: #804397;
						}
					</style>
					<section class="active accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
				</div>
				
				<hr class="hrule-line" />

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
						#accordion-demo-2 .accordion_section {
							margin-bottom: 1.4em;
						}
						#accordion-demo-2 .accordion_title {
							border-radius: 0.4em;
							border-bottom: 1px solid rgba(0, 0, 0, 0.15) !important;
						}
						#accordion-demo-2 .accordion_content {
							border-radius: 0 0 0.4em 0.4em;
							border-bottom: 1px solid rgba(0, 0, 0, 0.15) !important;
						}
						#accordion-demo-2 .accordion_section.active .accordion_title {
							border-radius: 0.4em 0.4em 0 0;
						}
					</style>
					<section class="active accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
					<section class="accordion_section">
						<h4 class="accordion_title">Accordion Title</h4>
						<p class="accordion_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices diam massa. Fusce pretium dui vitae elementum hendrerit. Nunc at placerat enim. Sed suscipit eros dolor, ac maximus lacus euismod non.</p>
					</section>
				</div>

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