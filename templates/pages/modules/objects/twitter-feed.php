<?php 
	include ('../../../app.php');
	// page config
	$title = 'Twitter Feed';
	$tagLine = 'assets/modules/objects/twitter-feed';
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
					<li class="plain"><span>_twitter-feed.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/twitter-feed" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/twitter-feed</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>twitter-feed</code></li>
                        <li><b>Modifiers:</b> <code>dark</code></li>
                        <li><b>Components:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="twitter-feed" id="twitter-feed">
    &lt;a class="loading-tweets" href="http://twitter.com/esr360" target="blank">
        &lt;i class="fa fa-twitter">&lt;/i>
    &lt;/a>
    &lt;div class="twitter-feed_content container">
        &lt;div class="tweets-nav button_group-small">
            &lt;div class="tweet-prev button-icon-border-size-2">
                &lt;i class="fa fa-angle-left">&lt;/i>
            &lt;/div>
            &lt;div class="tweet-next button-icon-border-size-2">
                &lt;i class="fa fa-angle-right">&lt;/i>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div>
</pre>

                <p>Then in your theme's JS file (e.g. assets/themes/Kayzen/kayzen.js), call the <code>twitterFeed()</code> function on your Twitter feed container:</p>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#twitter-feed').twitterFeed();
</pre>

                <h3 class="heading-size-3">Options</h3>   
                    
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('#twitter-feed').twitterFeed({
    username  : 'esr360',
    tweets    : 8,
    container : '.twitter-feed_content'
});
</pre>

                <div class="twitter-feed object">
                    <a class="loading-tweets" href="http://twitter.com/esr360" target="blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <div class="twitter-feed_content container">
                        <div class="tweets-nav button_group-small">
                            <div class="tweet-prev button-icon-border-size-2">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="tweet-next button-icon-border-size-2">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="heading-size-2-uppercase">Dark Twitter Feed</h4>
                
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="twitter-feed-dark" id="twitter-feed">
    ...
&lt;/div>
</pre>

                <p>Or...</p>
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include twitter-feed((
    'dark' : true
));
</pre>

                <div class="twitter-feed-dark object">
                    <a class="loading-tweets" href="http://twitter.com/esr360" target="blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <div class="twitter-feed_content container">
                        <div class="tweets-nav button_group-small">
                            <div class="tweet-prev button-icon-border-size-2">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="tweet-next button-icon-border-size-2">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Twitter Feed can be customized using the following options:</p>
				
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
							<td><code>background</code></td>
							<td><code class="value">darken(color('greyscale', 'grey-1'), 3%)</code></td>
							<td>The background for the Twitter Feed module.</td>
						</tr>
						<tr>
							<td><code>dark</code></td>
							<td><code class="value">false</code></td>
							<td>If enabled the <code>dark</code> modifier styles will be applied without being required in the markup.</td>
						</tr>
						<tr>
							<td><code>dark-background</code></td>
							<td><code class="value">color('greyscale', 'grey-5')</code></td>
							<td>The background for the module when the <code>dark</code> modifier is applied.</td>
						</tr>
						<tr>
							<td><code>dark-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>If text color for the module when the <code>dark</code> modifier is applied.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>twitter-feed()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include twitter-feed((
    'dark'            : true,
    'dark-background' : #000000
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