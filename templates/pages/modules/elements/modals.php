<?php 
	include ('../../../app.php');
	// page config
	$title = 'Modals/Popups';
	$tagLine = 'app/modules/elements/modals';
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
					<li class="plain"><span>_modals.scss</span></li>
					<li class="plain"><span>modals.js</span></li>	
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/modals" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/modals</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>modal</code></li>
                        <li><b>Components:</b> <code>content</code>, <code>close</code></li>
                        <li><b>Modifiers:</b> <code>visible</code>, <code>animate[top, bottom, left, right, zoom, spin]</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="well object">
                    <a href="#modal-demo-1">Click Me</a>
                    <div class="modal" id="modal-demo-1">
                        <div class="modal_close"><i class="fa fa-times"></i></div>
                        <div class="modal_content">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#modal-demo-1">Click Me&lt;/a>

&lt;div class="modal" id="modal-demo-1">
    &lt;div class="modal_close">&lt;i class="fa fa-times">&lt;/i>&lt;/div>
    &lt;div class="modal_content">
        &lt;p>Lorem ipsum dolor sit amet.&lt;/p>
    &lt;/div>
&lt;/div>
</pre>
                <h3 class="heading-size-3">Animations</h3>
                
                <h4 class="heading-size-2-uppercase">Animate - Left</h4>
                
                <div class="well object">
                    <a href="#modal-demo-2">Click Me</a>
                    <div class="modal-animate-left" id="modal-demo-2">
                        <div class="modal_close"><i class="fa fa-times"></i></div>
                        <div class="modal_content">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#modal-demo-2">Click Me&lt;/a>

&lt;div class="modal-animate-left" id="modal-demo-2">
    ...
&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Animate - Right</h4>
                
                <div class="well object">
                    <a href="#modal-demo-3">Click Me</a>
                    <div class="modal-animate-right" id="modal-demo-3">
                        <div class="modal_close"><i class="fa fa-times"></i></div>
                        <div class="modal_content">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#modal-demo-3">Click Me&lt;/a>

&lt;div class="modal-animate-right" id="modal-demo-3">
    ...
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Animate - Top</h4>
                
                <div class="well object">
                    <a href="#modal-demo-4">Click Me</a>
                    <div class="modal-animate-top" id="modal-demo-4">
                        <div class="modal_close"><i class="fa fa-times"></i></div>
                        <div class="modal_content">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#modal-demo-4">Click Me&lt;/a>

&lt;div class="modal-animate-top" id="modal-demo-4">
    ...
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Animate - Bottom</h4>
                
                <div class="well object">
                    <a href="#modal-demo-5">Click Me</a>
                    <div class="modal-animate-bottom" id="modal-demo-5">
                        <div class="modal_close"><i class="fa fa-times"></i></div>
                        <div class="modal_content">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#modal-demo-5">Click Me&lt;/a>

&lt;div class="modal-animate-bottom" id="modal-demo-5">
    ...
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Animate - Zoom</h4>
                
                <div class="well object">
                    <a href="#modal-demo-6">Click Me</a>
                    <div class="modal-animate-zoom" id="modal-demo-6">
                        <div class="modal_close"><i class="fa fa-times"></i></div>
                        <div class="modal_content">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#modal-demo-6">Click Me&lt;/a>

&lt;div class="modal-animate-zoom" id="modal-demo-6">
    ...
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Animate - Spin</h4>
                
                <div class="well object">
                    <a href="#modal-demo-7">Click Me</a>
                    <div class="modal-animate-spin" id="modal-demo-7">
                        <div class="modal_close"><i class="fa fa-times"></i></div>
                        <div class="modal_content">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#modal-demo-7">Click Me&lt;/a>

&lt;div class="modal-animate-spin" id="modal-demo-7">
    ...
&lt;/div>
</pre>
            
                <h4 class="heading-size-2-uppercase">Animate - Spin & Zoom</h4>
                
                <div class="well object">
                    <a href="#modal-demo-8">Click Me</a>
                    <div class="modal-animate-spin-zoom" id="modal-demo-8">
                        <div class="modal_close"><i class="fa fa-times"></i></div>
                        <div class="modal_content">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#modal-demo-8">Click Me&lt;/a>

&lt;div class="modal-animate-spin-zoom" id="modal-demo-8">
    ...
&lt;/div>
</pre>
                                
                <h3 class="heading-size-3">Using Data Attributes</h3>
                
                
                <div class="well object">
                    <a href="#modal-demo-9" data-modal data-modal-content="Lorem ipsum dolor sit amet.">Click Me</a>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#modal-demo-9" data-modal data-modal-content="Lorem ipsum dolor sit amet.">Click Me&lt;/a>
</pre>
                
                <h4 class="heading-size-2-uppercase">Custom Animation Style</h4>
                
                <div class="well object">
                    <a href="#modal-demo-10" data-modal data-modal-content="Lorem ipsum dolor sit amet." data-modal-style="zoom">Click Me</a>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;a href="#modal-demo-10" data-modal data-modal-content="Lorem ipsum dolor sit amet." data-modal-style="zoom">Click Me&lt;/a>
</pre>
                

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The modals can be customized using the following options:</p>
                
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
							<td><code>default-animation</code></td>
							<td><code class="value">left</code></td>
							<td>The default animation style modals should use (top, bottom, left, right, spin, zoom).</td>
						</tr>
						<tr>
							<td><code>background-color</code></td>
							<td><code class="value">color(greyscale, grey-1)</code></td>
							<td>The background color of modal boxes.</td>
						</tr>
						<tr>
							<td><code>text-color</code></td>
							<td><code class="value">base(text-color)</code></td>
							<td>The text color of modal boxes.</td>
						</tr>
						<tr>
							<td><code>radius</code></td>
							<td><code class="value">0</code></td>
							<td>The border radius of modal boxes.</td>
						</tr>
						<tr>
							<td><code>z-index</code></td>
							<td><code class="value">9</code></td>
							<td>The z-index for modal boxes.</td>
						</tr>
						<tr>
							<td><code>content-padding</code></td>
							<td><code class="value">2em</code></td>
							<td>The padding for the modal content.</td>
						</tr>
						<tr>
							<td><code>close-icon-size</code></td>
							<td><code class="value">font-size('size-3')</code></td>
							<td>The font-size for the close icon.</td>
						</tr>
						<tr>
							<td><code>close-icon-color</code></td>
							<td><code class="value">color(greyscale, grey-3)</code></td>
							<td>The color for the close icon.</td>
						</tr>
						<tr>
							<td><code>close-icon-hover-color</code></td>
							<td><code class="value">color(brand, primary)</code></td>
							<td>The hover color for the close icon.</td>
						</tr>
						<tr>
							<td><code>close-icon-position</code></td>
							<td><code class="value">(1rem, 1rem)</code></td>
							<td>The (top, right) position for the close icon.</td>
						</tr>
                    </tbody>
                </table>

				<p>To change one of the above values, pass your new value(s) to the <code>modals()</code> mixin in your theme file (e.g. app/themes/Kayzen/_kayzen.scss).</p>   
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include modals((
	'background-color'  : rgba(white, 0.8),
    'radius'            : 0.4em,
	'close-icon-size'   : 2em
));
</pre>

                <style>
                    #modal-demo-11 {
                        background-color: rgba(255, 255, 255, 0.8);
                        border-radius: 0.4em;
                    }
                    #modal-demo-11 .modal_close {
                        font-size: 2em;
                    }
                </style>
                <div class="well object">
                    <a href="#modal-demo-11">Click Me</a>
                    <div class="modal" id="modal-demo-11">
                        <div class="modal_close"><i class="fa fa-times"></i></div>
                        <div class="modal_content">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
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