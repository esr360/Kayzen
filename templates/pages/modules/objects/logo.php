<?php 
	include ('../../../app.php');
	// page config
	$title = 'Logo';
	$tagLine = 'assets/modules/objects/logo';
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
					<li class="plain"><span>_logo.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/logo" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/logo</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>logo</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="logo">
    &lt;a href="/">&lt;img src="/images/logo.png" alt="logo" />&lt;/a>
&lt;/div>
</pre>	

                <br />
    				
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="logo">
    &lt;a href="/">Kayzen&lt;/a>
&lt;/div>
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
							<td><code>text-align</code></td>
							<td><code class="value">left</code></td>
							<td>The text-align value for the logo module.</td>
						</tr>
						<tr>
							<td><code>color</code></td>
							<td><code class="value">white</code></td>
							<td>The text color for the logo module.</td>
						</tr>
						<tr>
							<td><code>size</code></td>
							<td><code class="value">font-size('size-5')</code></td>
							<td>The module's font size.</td>
						</tr>
						<tr>
							<td><code>padding</code></td>
							<td><code class="value">0</code></td>
							<td>The module's padding.</td>
						</tr>
						<tr>
							<td><code>image-height</code></td>
							<td><code class="value">38px</code></td>
							<td>The height of the logo's image element.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>logo()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include logo((
    'color' : black,
    'size'  : 25px
));
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