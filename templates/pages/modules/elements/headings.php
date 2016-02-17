<?php 
	include ('../../../app.php');
	// page config
	$title = 'Headings';
	$tagLine = 'assets/modules/elements/headings';
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
					<li class="plain"><span>_headings.scss</span></li>	
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/headings" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/headings</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>heading</code></li>
                        <li><b>Components:</b> <code>group[dots, block, small, large]</code>, <code>icon</code>, <code>date</code></li>
                        <li><b>Modifiers:</b> <code>heavy</code>, <code>light</code>, <code>uppercase</code>, <code>brand1</code>, <code>highlight</code>, <code>strikethrough</code>, <code>spaced</code>, <code>dotted</code>, <code>flush</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <h3 class="heading-size-3">Styles</h3>
                
                <div class="well object">
                    <h3 class="heading">Lorem Ipsum Dolor</h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading">Lorem Ipsum Dolor&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Heading - Heavy</h4>
                
                <div class="well object">
                    <h3 class="heading-heavy">Lorem Ipsum Dolor</h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-heavy">Lorem Ipsum Dolor&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Heading - Light</h4>
                
                <div class="well object">
                    <h3 class="heading-light">Lorem Ipsum Dolor</h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-light">Lorem Ipsum Dolor&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Heading - Uppercase</h4>
                
                <div class="well object">
                    <h3 class="heading-uppercase">Lorem Ipsum Dolor</h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-uppercasw">Lorem Ipsum Dolor&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Heading - Brand 1</h4>
                
                <div class="well object">
                    <h3 class="heading-brand-1">Lorem Ipsum Dolor</h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-brand1">Lorem Ipsum Dolor&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Heading - Highlight</h4>
                
                <div class="well object">
                    <h3 class="heading-highlight"><b>Lorem Ipsum Dolor</b></h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-highlight">&lt;b>Lorem Ipsum Dolor&lt;/b>&lt;/div>
</pre>

                <div class="well object">
                    <h3 class="heading-highlight-dark"><b>Lorem Ipsum Dolor</b></h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-highlight-dark">&lt;b>Lorem Ipsum Dolor&lt;/b>&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Heading - Strikethrough</h4>
                
                <div class="well object text-center">
                    <h3 class="heading-strikethrough"><span>Lorem Ipsum Dolor</span></h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-strikethrough">&lt;span>Lorem Ipsum Dolor&lt;/span>&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Heading - Spaced</h4>
                
                <div class="well object">
                    <h3 class="heading-spaced"><span>Lorem Ipsum Dolor</span></h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-spaced">Lorem Ipsum Dolor&lt&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Heading - Dotted</h4>
                
                <div class="well object">
                    <h3 class="heading-dotted">Lorem Ipsum Dolor</h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-dotted">Lorem Ipsum Dolor&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Heading - Flush</h4>
                
                <div class="well object">
                    <h3 class="heading-flush">Flushed Heading</h3>
                    <span>Flushed headings have no margin, so it sits flush with this span.</span>
                    <h3 class="heading">Regular Heading</h3>
                    <span>Regular headings have default top/bottom margin applied as appropriate.</span>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-flush">Lorem Ipsum Dolor&lt;/div>
</pre>

                <h3 class="heading-size-3">Sizes</h3>
                
                <p>For each size in the <a href="<?php pageLink('modules/utilities/typography.php') ?>">typography</a> module, a modifier for the headings is generated for that size.</p>
                
                <div class="well object">
                    <h3 class="heading-size-1">Lorem Ipsum Dolor</h3>
                    <h3 class="heading-size-2">Lorem Ipsum Dolor</h3>
                    <h3 class="heading">Lorem Ipsum Dolor</h3>
                    <h3 class="heading-size-3">Lorem Ipsum Dolor</h3>
                    <h3 class="heading-size-4">Lorem Ipsum Dolor</h3>
                    <h3 class="heading-size-5">Lorem Ipsum Dolor</h3>
                    <h3 class="heading-size-6">Lorem Ipsum Dolor</h3>
                    <h3 class="heading-size-7">Lorem Ipsum Dolor</h3>
                    <h3 class="heading-size-8">Lorem Ipsum Dolor</h3>
                    <h3 class="heading-size-9">Lorem Ipsum Dolor</h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-size-4">Lorem Ipsum Dolor&lt;/div>
</pre>

                <h3 class="heading-size-3">Mixing & Matching</h3>
                
                <p>You can of course mix and match any and all of the above combinations.</p>
                
                <div class="well object">
                    <h3 class="heading-light-uppercase-size-4-brand-1-dotted">Lorem Ipsum Dolor</h3>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;h3 class="heading-light-uppercase-size-4-brand-1-dotted">Lorem Ipsum Dolor&lt;/div>
</pre>

                <h3 class="heading-size-3">Heading Group</h3>
                
                <div class="well object">
                    <header class="heading_group">
                        <h3 class="heading-size-3">Primary Heading</h3>
                        <h4 class="heading-light">Secondary Heading</h4>
                    </header>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="heading_group">
    &lt;h3 class="heading-size-3">Primary Heading&lt;/h3>
    &lt;h4 class="heading-light">Secondary Heading&lt;/h4>
&lt;/header>
</pre>

                <h4 class="heading-size-2-uppercase">Heading Group - Dots</h4>
                
                <div class="well-deep object">
                    <header class="heading_group-dots text-center">
                        <h4 class="heading-uppercase-light-brand-1-spaced-size-3"><span>Our Portfolio</span></h4>
                        <h2 class="heading-uppercase-heavy-size-6 font-2"><span>Some Recent Work</span></h2>
                    </header>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="heading_group-dots text-center">
    &lt;h4 class="heading-uppercase-light-brand-1-spaced-size-3">Our Portfolio&lt;/h4>
    &lt;h2 class="heading-uppercase-heavy-size-6 font-2">Some Recent Work&lt;/h2>
&lt;/header>
</pre>

                <h4 class="heading-size-2-uppercase">Heading Group - Block</h4>
                
                <div class="well-deep object">
                    <header class="heading_group-block text-center">
                        <h4 class="heading-uppercase-light-brand-1-spaced-size-3">Our Portfolio</h4>
                        <h2 class="heading-uppercase-heavy-size-6 font-2">Some Recent Work</h2>
                    </header>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="heading_group-block text-center">
    &lt;h4 class="heading-uppercase-light-brand-1-spaced-size-3">Our Portfolio&lt;/h4>
    &lt;h2 class="heading-uppercase-heavy-size-6 font-2">Some Recent Work&lt;/h2>
&lt;/header>
</pre>

                <h4 class="heading-size-2-uppercase">Heading Group - Small</h4>
                
                <div class="well-deep object">
                    <header class="heading_group-small">
                        <h3 class="heading-size-3">Our Portfolio</h3>
                        <h4 class="heading-light">Some Recent Work</h4>
                    </header>
                    <div>A small heading group has a smaller margin to bring the below content slightly closer.</div>
                </div>
                
                <div class="well-deep object">
                    <header class="heading_group">
                        <h3 class="heading-size-3">Our Portfolio</h3>
                        <h4 class="heading-light">Some Recent Work</h4>
                    </header>
                    <div>A normal heading group has a larger bottom margin.</div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="heading_group-small text-center">
    &lt;h3 class="heading-size-3">Our Portfolio&lt;/h3>
    &lt;h4 class="heading-light">Some Recent Work&lt;/h4>
&lt;/heder>
</pre>

                <h4 class="heading-size-2-uppercase">Heading Group - Large</h4>
                
                <div class="well-deep object text-center">
                    <header class="heading_group-large">
                        <h4 class="heading-uppercase-light-brand-1-spaced-size-3">Our Portfolio</h4>
                        <h2 class="heading-uppercase-heavy-size-6 font-2">Some Recent Work</h2>
                    </header>
                    <p class="lede">A large heading group has a larger bottom margin.</p>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="heading_group-large text-center">
    &lt;h4 class="heading-uppercase-light-brand-1-spaced-size-3">Our Portfolio&lt;/h4>
    &lt;h2 class="heading-uppercase-heavy-size-6 font-2">Some Recent Work&lt;/h2>
&lt;/heder>
</pre>

                <h4 class="heading-size-2-uppercase">Heading Group - Special Icon</h4>
                
                <div class="well-deep object">
                    <header class="heading_group text-center">
                        <h4 class="heading-uppercase-light-brand-1-spaced-size-3"><span>Our Portfolio</span></h4>
                        <h2 class="heading-uppercase-heavy-size-6 font-2"><span>Some Recent Work</span></h2>
                        <div class="heading_icon">
                            <i class="fa fa-magic"></i>
                        </div>
                    </header>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="heading_group text-center">
    &lt;h4 class="heading-uppercase-light-brand-1-spaced-size-3">&lt;span>Our Portfolio&lt;/span>&lt;/h4>
    &lt;h2 class="heading-uppercase-heavy-size-6 font-2">&lt;span>Some Recent Work&lt;/span>&lt;/h2>
    &lt;div class="heading_icon">
        &lt;i class="fa fa-magic">&lt;/i>
    &lt;/div>
&lt;/header>
</pre>

                <h4 class="heading-size-2-uppercase">Heading Group - Date</h4>

                <div class="well object">
                    <div class="span-5">
                        <header class="heading_group">
                            <div class="heading_date">
                                <div>Sep</div>
                                <div>23</div>
                            </div>
                            <h2 class="heading-heavy-size-4 font-2">Lorem ipsum dolor sit amet</h2>
                            <h3 class="heading-light-size-2">Posted in <a href="<?php pageLink('blog/masonry/3-cols.php') ?>">HTML Themes</a></h3>
                        </header>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="heading_group">
    &lt;div class="heading_date">
        &lt;div>Sep&lt;/div>
        &lt;div>23&lt;/div>
    &lt;/div>
    &lt;h2 class="heading-heavy-size-4 font-2">Lorem ipsum dolor sit amet&lt;/h2>
    &lt;h3 class="heading-light-size-2">Posted in &lt;a href="/html-themes">HTML Themes&lt;/a>&lt;/h3>
&lt;/header>
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The headings can be customized using the following options:</p>
                
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
							<td><code>highlight-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The background color of text when using the 'highlight' modifier.</td>
						</tr>
						<tr>
							<td><code>highlight-dark-color</code></td>
							<td><code class="value">color('greyscale', 'grey-6')</code></td>
							<td>The background color of text when using the <code>highlight</code> and <code>dark</code> modifiers.</td>
						</tr>
						<tr>
							<td><code>strikethrough-width</code></td>
							<td><code class="value">75px</code></td>
							<td>The width of each side of the strikethrough line.</td>
						</tr>
						<tr>
							<td><code>spaced-spacing</code></td>
							<td><code class="value">0.35em</code></td>
							<td>The letter-spacing of text when using the <code>spaced</code> modifier.</td>
						</tr>
						<tr>
							<td><code>border</code></td>
							<td><code class="value">1px dotted rgba(black, 0.2)</code></td>
							<td>The bottom-border of a heading when using the <code>border</code> modifier.</td>
						</tr>
						<tr>
							<td><code>group-dots-color</code></td>
							<td><code class="value">rgba(black, 0.4)</code></td>
							<td>The color of the dots when using the <code>dots</code> modifier on the <code>group</code> component.</td>
						</tr>
						<tr>
							<td><code>group-dots-size</code></td>
							<td><code class="value">24px</code></td>
							<td>The size of the dots when using the <code>dots</code> modifier on the <code>group</code> component.</td>
						</tr>
						<tr>
							<td><code>group-block-padding</code></td>
							<td><code class="value">6em</code></td>
							<td>The padding of heading groups when using the <code>block</code> modifier.</td>
						</tr>
                    </tbody>
                </table>

				<p>To change one of the above values, pass your new value(s) to the <code>headings()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
                             		
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include headings((
    'group-dots-color' : #9B58B5,
    'group-dots-size'  : 12px
));
</pre>

                <div class="well-deep object">
                    <style>
                        #heading-demo:after {
                            color: #9B58B5;
                            font-size: 12px;
                        }
                    </style>
                    <header id="heading-demo" class="heading_group-dots text-center">
                        <h4 class="heading-uppercase-light-brand-1-spaced-size-3"><span>Our Portfolio</span></h4>
                        <h2 class="heading-uppercase-heavy-size-6 font-2"><span>Some Recent Work</span></h2>
                    </header>
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