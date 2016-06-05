<?php 
	include ('../../../app.php');
	// page config
	$title = 'Header';
	$tagLine = 'assets/modules/objects/header';
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
					<li class="plain"><span>_header.scss</span></li>
					<li class="plain"><span>header.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/header" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/header</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>app-header</code></li>
                        <li><b>Modifiers:</b> <code>bar</code>, <code>absolute</code>, <code>side[left, right]</code>, <code>show-y-scrollbar</code>, <code>dark</code>,<code>brand</code></li>
                        <li><b>Components:</b> <code>wrapper</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <p>Within this module you will find the following other modules</p>
                    <ul class="list-clear">
                        <li><a href="<?php pageLink('modules/objects/logo.php') ?>">Logo</a></li>
                        <li><a href="<?php pageLink('modules/objects/navigation.php') ?>">Navigation</a></li>
                    </ul>
                </p>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="app-header" id="app-header">
                
    &lt;div class="container">
        
        &lt;div class="app-header_wrapper">

            &lt;!-- Logo -->
            &lt;div class="logo">
                &lt;a href="/">&lt;img src="/images/logo.png" alt="logo" />&lt;/a>
            &lt;/div>
            
            &lt;!-- Navigation -->
            ...
            
            &lt;/div>&lt;!-- .app-header_wrapper -->
            
        &lt;/div>&lt;!-- .container -->
    
    &lt;/header>&lt;!-- .app-header -->
    
&lt;/header>
</pre>

                <h4 class="heading-size-2-uppercase">Dark Header Bar</h4>
      
<pre data-enlighter-language="html" class="EnlighterJSRAW">          
&lt;header class="app-header-dark-bar" id="app-header">    
    ...
&lt;/header>
</pre>

                <h4 class="heading-size-2-uppercase">Sticky Header Bar</h4>
      
<pre data-enlighter-language="html" class="EnlighterJSRAW">          
&lt;header class="app-header-sticky-bar" id="app-header">    
    ...
&lt;/header>
</pre>

                <h4 class="heading-size-2-uppercase">Side Header</h4>
      
<pre data-enlighter-language="html" class="EnlighterJSRAW">          
&lt;header class="app-header-side-left" id="app-header">    
    ...
&lt;/header>
</pre>

<br />
      
<pre data-enlighter-language="html" class="EnlighterJSRAW">          
&lt;header class="app-header-side-right" id="app-header">    
    ...
&lt;/header>
</pre>
                
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Header can be customized using the following options:</p>
				
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
							<td><code class="value">base('background')</code></td>
							<td>The main background for the header module</td>
						</tr>
						<tr>
							<td><code>height</code></td>
							<td><code class="value">100px</code></td>
							<td>The height for the header module.</td>
						</tr>
						<tr>
							<td><code>font-size</code></td>
							<td><code class="value">1em</code></td>
							<td>The font size for the header module</td>
						</tr>
						<tr>
							<td><code>z-index</code></td>
							<td><code class="value">5</code></td>
							<td>The z-index from the header module</td>
						</tr>
						<tr>
							<td><code>bar</code></td>
							<td><code class="value">false</code></td>
							<td>If true, the module will receive the styles from the <code>bar</code> modifier without having to actually apply it in the markup.</td>
						</tr>
						<tr>
							<td><code>absolute : enabled</code></td>
							<td><code class="value">false</code></td>
							<td>If true, the module will receive the styles from the <code>absolute</code> modifier without having to actually apply it in the markup.</td>
						</tr>
						<tr>
							<td><code>absolute : top-position</code></td>
							<td><code class="value">0</code></td>
							<td>The position the module should be form the top when using the <code>absolute</code> modifier.</td>
						</tr>
						<tr>
							<td><code>dark : enabled</code></td>
							<td><code class="value">false</code></td>
							<td>If true, the module will receive the styles from the <code>dark</code> modifier without having to actually apply it in the markup.</td>
						</tr>
						<tr>
							<td><code>dark : background</code></td>
							<td><code class="value">color('greyscale', 'grey-6')</code></td>
							<td>The background for the module when using the <code>dark</code> modifier.</td>
						</tr>
						<tr>
							<td><code>side : enabled</code></td>
							<td><code class="value">false</code></td>
							<td>This should be <b>left</b> or <b>right</b> to receive the styles from the corresponding <code>side</code> modifier without having to actually apply it in the markup.</td>
						</tr>
						<tr>
							<td><code>side : width</code></td>
							<td><code class="value">350px</code></td>
							<td>The width of the module when using the <code>side</code> modifier.</td>
						</tr>
						<tr>
							<td><code>side : container-width</code></td>
							<td><code class="value">100%</code></td>
							<td>The width of the main module container when using the <code>side</code> modifier.</td>
						</tr>
						<tr>
							<td><code>side : show-y-scrollbar</code></td>
							<td><code class="value">false</code></td>
							<td>If true, the y-scrollbar will always be visible when using the <code>side</code> modifier.</td>
						</tr>
						<tr>
							<td><code>sticky : enabled</code></td>
							<td><code class="value">false</code></td>
							<td>If true, the header will be sticky without having to apply the <code>sticky</code> modifier in the markup.</td>
						</tr>
						<tr>
							<td><code>sticky : background</code></td>
							<td><code class="value">color('greyscale', 'grey-6')</code></td>
							<td>The background for the module when using the <code>sticky</code> modifier</td>
						</tr>
						<tr>
							<td><code>sticky : height</code></td>
							<td><code class="value">70px</code></td>
							<td>The height of the module when using the <code>sticky</code> modifier.</td>
						</tr>
						<tr>
							<td><code>sticky : logo-height</code></td>
							<td><code class="value">28px</code></td>
							<td>The height of the <code>logo</code> module when using the <code>sticky</code> modifier.</td>
						</tr>
						<tr>
							<td><code>sticky:font-size</code></td>
							<td><code class="value">font-size('size-2')</code></td>
							<td>The font size for the module when using the <code>sticky</code> modifier.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>header()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include header((
    'background'     : transparent,
    'font-size'      : 0.9em,
    'dark'           : (
        'background' : rgba(black, 0.3),
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