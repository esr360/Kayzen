<?php 
	include ('../../../app.php');
	// page config
	$title = 'Masonry Grid';
	$tagLine = 'assets/modules/utilities/masonry-grid';
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
					<li class="plain"><span>_masonry-grid.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/masonry-grid" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/masonry-grid</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>Credit to this module goes out to <a href="http://codepen.io/georgehdenning/">George Denning</a> for this CodePen: <a href="http://codepen.io/georgehdenning/pen/dYNWeB">http://codepen.io/georgehdenning/pen/dYNWeB</a> (modified for use with Kayzen).</a>
				
				<h2 class="heading-light-size-5">Example</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="tiles">  
    &lt;div class="tile tile-box">
        &lt;div class="tile tile-rec">
            &lt;div class="tile-img">&lt;/div>
        &lt;/div>
        &lt;div class="tile tile-rec">
            &lt;div class="tile tile-box">
                &lt;div class="tile tile-rec">
                    &lt;div class="tile-img">&lt;/div>
                &lt;/div>
                &lt;div class="tile tile-rec">
                    &lt;div class="tile tile-box">
                        &lt;div class="tile-img">&lt;/div>
                    &lt;/div>
                    &lt;div class="tile tile-box">
                        &lt;div class="tile-img">&lt;/div>
                    &lt;/div>
                &lt;/div>
            &lt;/div>
            &lt;div class="tile tile-box">
                &lt;div class="tile-img">&lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
    &lt;div class="tile tile-box">
        &lt;div class="tile-img">&lt;/div>
    &lt;/div>
&lt;/div>
</pre>
                    
                <div class="tiles">  
                    <div class="tile tile-box">
                        <div class="tile tile-rec">
                            <div class="tile-img"></div>
                        </div>
                        <div class="tile tile-rec">
                            <div class="tile tile-box">
                                <div class="tile tile-rec">
                                    <div class="tile-img"></div>
                                </div>
                                <div class="tile tile-rec">
                                    <div class="tile tile-box">
                                        <div class="tile-img"></div>
                                    </div>
                                    <div class="tile tile-box">
                                        <div class="tile-img"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tile tile-box">
                                <div class="tile-img"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tile tile-box">
                        <div class="tile-img"></div>
                    </div>
                </div>
                
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Masonry Grid can be customized using the following options:</p>
				
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
							<td><code>spacing</code></td>
							<td><code class="value">4px</code></td>
							<td>The spacing between each tile on all sides.</td>
						</tr>
						<tr>
							<td><code>background</code></td>
							<td><code class="value">#eeeeee</code></td>
							<td>The background for individual tiles.</td>
						</tr>
                    </tbody>
                </table>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include masonry-grid((
    'spacing'    : 8px,
    'background' : pink
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