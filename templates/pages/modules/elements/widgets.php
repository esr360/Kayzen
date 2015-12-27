<?php 
	include ('../../../app.php');
	// page config
	$title = 'Widgets/Cards';
	$tagLine = 'app/modules/elements/widgets';
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
					<li class="plain"><span>_widgets.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/widgets" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/widgets</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>widget</code></li>
                        <li><b>Components:</b> <code>section</code>, <code>title</code>, <code>content</code></li>
                        <li><b>Modifiers:</b> <code>minimal</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
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