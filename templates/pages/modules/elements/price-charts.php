<?php 
	include ('../../../app.php');
	// page config
	$title = 'Price Charts';
	$tagLine = 'assets/modules/elements/price-charts';
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
					<li class="plain"><span>_price-charts.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/price-charts" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/price-charts</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>price-chart</code></li>
                        <li><b>Components:</b> <code>price</code></li>
                        <li><b>Modifiers:</b> <code>free</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="well object">
                    <div class="span-5 price-chart_wrapper">
                        <div class="price-chart">
                            <header class="heading_group">
                                <h4 class="heading-heavy-size-6-flush">Gold</h4>
                                <h5 class="heading-light-size-3">Our premium package</h5>
                            </header>
                            <div class="price-chart_price">
                                <small>$</small><span>20</span>/mo
                            </div>
                            <ul>
                                <li><span><i class="fa fa-database"></i> Diskspace</span><strong>1GB</strong></li>
                                <li><span><i class="fa fa-group"></i> Bandwidth</span><strong>10GB</strong></li>
                                <li><span><i class="fa fa-desktop"></i> Sub-domains</span><strong>1</strong></li>
                                <li><span><i class="fa fa-envelope"></i> Emails</span><strong>5</strong></li>
                                <li><span><i class="fa fa-support"></i> Support</span><strong>None</strong></li>
                            </ul>
                            <div class="buy-now">
                                <a href="#" class="button-primary-block-size-3"><i class="fa fa-shopping-cart"></i> Get For Free</a>
                            </div>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="price-chart">
    &lt;header class="heading_group">
        &lt;h4 class="heading-heavy-size-6-flush">Gold&lt;/h4>
        &lt;h5 class="heading-light-size-3">Our premium package&lt;/h5>
    &lt;/header>
    &lt;div class="price-chart_price">
        &lt;small>$&lt;/small>&lt;span>20&lt;/span>/mo
    &lt;/div>
    &lt;ul>
        &lt;li>&lt;span>&lt;i class="fa fa-database">&lt;/i> Diskspace&lt;/span>&lt;strong>1GB&lt;/strong>&lt;/li>
        &lt;li>&lt;span>&lt;i class="fa fa-group">&lt;/i> Bandwidth&lt;/span>&lt;strong>10GB&lt;/strong>&lt;/li>
        &lt;li>&lt;span>&lt;i class="fa fa-desktop">&lt;/i> Sub-domains&lt;/span>&lt;strong>1&lt;/strong>&lt;/li>
        &lt;li>&lt;span>&lt;i class="fa fa-envelope">&lt;/i> Emails&lt;/span>&lt;strong>5&lt;/strong>&lt;/li>
        &lt;li>&lt;span><&lt;i class="fa fa-support">&lt;/i> Support&lt;/span>&lt;strong>None&lt;/strong>&lt;/li>
    &lt;/ul>
    &lt;div class="buy-now">
        &lt;a href="#" class="button-primary-block-size-3">&lt;i class="fa fa-shopping-cart">&lt;/i> Get For Free&lt;/a>
    &lt;/div>
&lt;/div>
</pre>

                <h3 class="heading-size-3">Free/Greyscale</h3>
                
                <div class="well object">
                    <div class="span-5 price-chart_wrapper">
                        <div class="price-chart-free">
                            <header class="heading_group">
                                <h4 class="heading-heavy-size-6-flush">Free</h4>
                                <h5 class="heading-light-size-3">Our free package</h5>
                            </header>
                            <div class="price-chart_price">
                                <small>$</small><span>0</span>/mo
                            </div>
                            <ul>
                                <li><span><i class="fa fa-database"></i> Diskspace</span><strong>1GB</strong></li>
                                <li><span><i class="fa fa-group"></i> Bandwidth</span><strong>10GB</strong></li>
                                <li><span><i class="fa fa-desktop"></i> Sub-domains</span><strong>1</strong></li>
                                <li><span><i class="fa fa-envelope"></i> Emails</span><strong>5</strong></li>
                                <li><span><i class="fa fa-support"></i> Support</span><strong>None</strong></li>
                            </ul>
                            <div class="buy-now">
                                <a href="#" class="button-block-size-3"><i class="fa fa-shopping-cart"></i> Get For Free</a>
                            </div>
                        </div>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="price-chart-free">
    ...
&lt;/div>
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