<?php 
	include ('../../../app.php');
	// page config
	$title = 'Breadcrumb';
	$tagLine = 'assets/modules/objects/breadcrumb';
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
					<li class="plain"><span>_breadcrumb.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/breadcrumb" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/breadcrumb</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>breadcrumb</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="well object">
                    <nav class="breadcrumb">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="further-page.html">Further Page</a></li>
                        </ul>
                    </nav>
                </div>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;nav class="breadcrumb">
    &lt;ul>
        &lt;li>&lt;a href="index.html">Home&lt;/a>&lt;/li>
        &lt;li>&lt;a href="further-page.html">Further Page&lt;/a>&lt;/li>
    &lt;/ul>
&lt;/nav>
</pre>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The breadcrumb can be customized using the following options:</p>
				
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
							<td><code>font-size</code></td>
							<td><code class="value">0.9em</code></td>
							<td>The breadcrumb font size.</td>
						</tr>
						<tr>
							<td><code>divider-icon</code></td>
							<td><code class="value">"\f105"</code></td>
							<td>The code for any FontAwesome icon to act as the crumb separator.</td>
						</tr>
						<tr>
							<td><code>icon-color</code></td>
							<td><code class="value">base('text-color')</code></td>
							<td>The color of the divider icon.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>breadcrumb()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include breadcrumb((
    'divider-icon' : "\f138",
    'icon-color'   : rgba(black, 0.25)
));
</pre>
                
                <style>
                    #breadcrumb-demo li:not(:last-child):after {
                        content: "\f138";
                        color: rgba(0,0,0,0.25);
                    }
                </style>
                <div class="well object">
                    <nav id="breadcrumb-demo" class="breadcrumb">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="further-page.html">Further Page</a></li>
                        </ul>
                    </nav>
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