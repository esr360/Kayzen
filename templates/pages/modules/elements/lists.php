<?php 
	include ('../../../app.php');
	// page config
	$title = 'Lists & Tags';
	$tagLine = 'app/modules/elements/lists';
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
					<li class="plain"><span>_lists.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/lists" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/lists</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>list</code></li>
                        <li><b>Components:</b> null</li>
                        <li><b>Modifiers:</b> <code>clear</code>, <code>reset</code>, <code>small</code>, <code>inline</code>, <code>divider</code>, <code>arrow</code>, <code>tags</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="well object">
                    <ul class="list">
                        <li>Vivamus vitae sem tincidunt tincidunt</li>
                        <li>Lorem ipsum dolor nunc eu</li>
                        <li>In erat magna, gravida non nisl</li>
                    </ul>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;ul class="list">
   &lt;li>Lorem ipsum dolor nunc eu&lt;/li>
&lt;/ul>
</pre>
                
                <h4 class="heading-size-2-uppercase">List - Clear</h4>
                
                <div class="well object">
                    <ul class="list-clear">
                        <li>Vivamus vitae sem tincidunt tincidunt</li>
                        <li>Lorem ipsum dolor nunc eu</li>
                        <li>In erat magna, gravida non nisl</li>
                    </ul>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;ul class="list-clear">
   &lt;li>Lorem ipsum dolor nunc eu&lt;/li>
&lt;/ul>
</pre>
                
                <h4 class="heading-size-2-uppercase">List - Reset</h4>
                
                <div class="well object">
                    <ul class="list-reset">
                        <li>Vivamus vitae sem tincidunt tincidunt</li>
                        <li>Lorem ipsum dolor nunc eu</li>
                        <li>In erat magna, gravida non nisl</li>
                    </ul>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;ul class="list-reset">
   &lt;li>Lorem ipsum dolor nunc eu&lt;/li>
&lt;/ul>
</pre>
                
                <h4 class="heading-size-2-uppercase">List - Small</h4>
                
                <div class="well object">
                    <ul class="list-small">
                        <li>Vivamus vitae sem tincidunt tincidunt</li>
                        <li>Lorem ipsum dolor nunc eu</li>
                        <li>In erat magna, gravida non nisl</li>
                    </ul>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;ul class="list-small">
   &lt;li>Lorem ipsum dolor nunc eu&lt;/li>
&lt;/ul>
</pre>
                
                <h4 class="heading-size-2-uppercase">List - Inline <span class="heading-light">(with reset)</span></h4>
                
                <div class="well object">
                    <ul class="list-inline-reset">
                        <li>Vivamus vitae sem tincidunt tincidunt</li>
                        <li>Lorem ipsum dolor nunc eu</li>
                        <li>In erat magna, gravida non nisl</li>
                    </ul>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;ul class="list-inline-reset">
   &lt;li>Lorem ipsum dolor nunc eu&lt;/li>
&lt;/ul>
</pre>
                
                <h4 class="heading-size-2-uppercase">List - Divider <span class="heading-light">(with reset)</span></h4>
                
                <div class="well object">
                    <ul class="list-divider-reset">
                        <li>Vivamus vitae sem tincidunt tincidunt</li>
                        <li>Lorem ipsum dolor nunc eu</li>
                        <li>In erat magna, gravida non nisl</li>
                    </ul>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;ul class="list-divider-reset">
   &lt;li>Lorem ipsum dolor nunc eu&lt;/li>
&lt;/ul>
</pre>
                
                <h4 class="heading-size-2-uppercase">List - Arrow</h4>
                
                <div class="well object">
                    <ul class="list-arrow">
                        <li>Vivamus vitae sem tincidunt tincidunt</li>
                        <li>Lorem ipsum dolor nunc eu</li>
                        <li>In erat magna, gravida non nisl</li>
                    </ul>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;ul class="list-arrow">
   &lt;li>Lorem ipsum dolor nunc eu&lt;/li>
&lt;/ul>
</pre>
                
                <h4 class="heading-size-2-uppercase">List - Tags</h4>
                
                <div class="well object">
                    <ul class="list-tags">
                        <li><span>Vivamus</span></li>
                        <li><span>Lorem</span></li>
                        <li><a href="#">Magna</a></li>
                    </ul>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;ul class="list-tags">
   &lt;li>&lt;span>Lorem&lt;/span>&lt;/li>
&lt;/ul>
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The lists can be customized using the following options:</p>
                
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
							<td><code>small-size</code></td>
							<td><code class="value">font-size('size-1')</code></td>
							<td>The font-size for lists when using the <code>small</code> modifier.</td>
						</tr>
						<tr>
							<td><code>inline-spacing</code></td>
							<td><code class="value">1em</code></td>
							<td>The distance between each item when using the <code>inline</code> modifier.</td>
						</tr>
						<tr>
							<td><code>arrow-icon</code></td>
							<td><code class="value">"\f138"</code></td>
							<td>The content value for any Font Awesome icon to act as the bullet point when using the <code>arrow</code> modifier.</td>
						</tr>
						<tr>
							<td><code>arrow-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The color of the arrow bullet point.</td>
						</tr>
						<tr>
							<td><code>tag-bg-color</code></td>
							<td><code class="value">color('greyscale', 'grey-4')</code></td>
							<td>The background color of list items when using the <code>tags</code> modifier.</td>
						</tr>
						<tr>
							<td><code>tag-border-color</code></td>
							<td><code class="value">color('greyscale', 'grey-4')</code></td>
							<td>The border color of tags.</td>
						</tr>
						<tr>
							<td><code>tag-color</code></td>
							<td><code class="value">white</code></td>
							<td>The text color of tags.</td>
						</tr>
						<tr>
							<td><code>tag-radius</code></td>
							<td><code class="value">0</code></td>
							<td>The border radius of tags.</td>
						</tr>
						<tr>
							<td><code>tag-hover-bg-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The background color of tags when hovered.</td>
						</tr>
						<tr>
							<td><code>tag-hover-color</code></td>
							<td><code class="value">white</code></td>
							<td>The text color of tags when hovered.</td>
						</tr>
                    </tbody>
                </table>

				<p>To change one of the above values, pass your new value(s) to the <code>lists()</code> mixin in your theme file (e.g. app/themes/Kayzen/_kayzen.scss).</p>   
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include lists((
    'arrow-icon'  : "\f0a4",
    'arrow-color' : #2cd68f
));
</pre>
                
                <style>
                    #list-demo > li:before {
                        content: "\f0a4";
                        color: #2cd68f;
                    }
                </style>
                <div class="well object">
                    <ul id="list-demo" class="list-arrow">
                        <li>Vivamus vitae sem tincidunt tincidunt</li>
                        <li>Lorem ipsum dolor nunc eu</li>
                        <li>In erat magna, gravida non nisl</li>
                    </ul>
                </div>
                  
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include lists((
    'tag-bg-color'     : transparent,
    'tag-border-color' : #9B58B5,
    'tag-color'        : #9B58B5,
    'tag-radius'       : 0.3em
));
</pre>

                <style>
                    #list-demo-2 span,
                    #list-demo-2 a {
                        background: transparent;
                        border-radius: 0.3em;
                        color: #9B58B5;
                        border: 1px solid #9B58B5; 
                    }
                    #list-demo-2 a:hover {
                        color:white;
                        border: 1px solid #9B58B5; 
                        background: #9B58B5; 
                    }
                </style>
                <div class="well object">
                    <ul id="list-demo-2" class="list-tags">
                        <li><span>Vivamus</span></li>
                        <li><span>Lorem</span></li>
                        <li><a href="#">Magna</a></li>
                    </ul>
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