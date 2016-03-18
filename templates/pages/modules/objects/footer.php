<?php 
	include ('../../../app.php');
	// page config
	$title = 'Footer';
	$tagLine = 'assets/modules/objects/footer';
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
					<li class="plain"><span>_footer.scss</span></li>
					<li class="plain"><span>footer.js</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/footer" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/objects/footer</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>footer</code></li>
                        <li><b>Modifiers:</b> null</li>
                        <li><b>Components:</b> <code>wrapper</code>, <code>bar</code>, <code>nav</code>, <code>copyright</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;footer class="footer">
    &lt;div class="footer_wrapper">
        &lt;div class="container">
            ...
        &lt;/div>
    &lt;/div>
    &lt;div class="container">
        &lt;div class="footer_bar">
            &lt;div class="footer_copyright">
                ...
            &lt;/div>
            &lt;div class="footer_nav">
                ...
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/footer>
</pre>

                <p><a href="#footer">View Demo</a></p>

                <h3 class="heading-size-3">Twitter Feed</h3>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;footer class="footer">

    &lt;div class="footer_wrapper">
    
        &lt;div class="container">
        
            &lt;div class="row">
            
                ...
                
                &lt;!-- Twitter Feed -->
                    
                &lt;div class="span-3" id="footer-twitter-feed">
                
                    &lt;header class="heading_group-small">
                        &lt;h4 class="footer_title heading-heavy-uppercase-size-3 font-2">
                            &lt;i class="fa fa-twitter">&lt;/i> Twitter Feed
                        &lt;/h4>
                        &lt;h5 class="heading-light-brand-1">
                            View our latest tweets
                        &lt/h5>
                        &lt;div class="footer_tweets-nav icon_group-small">
                            &lt;div class="tweet-prev button-icon-circle-size-1">
                                &lt;i class="fa fa-angle-left">&lt;/i>
                            &lt;/div>
                            &lt;div class="tweet-next button-icon-circle-size-1">
                                &lt;i class="fa fa-angle-right">&lt;/i>
                            &lt;/div>
                        &lt;/div>
                    &lt;/header>
                    &lt;div class="twitter-feed_content">&lt;/div>
                    
                &lt;/div>
                
            &lt;/div>&lt;!-- .row -->
            
        &lt;/div>&lt;!-- .container -->
        
    &lt;/div>&lt;!-- .footer_wrapper -->
    
    &lt;div class="container">
        &lt;div class="footer_bar">
            ...
        &lt;/div>
    &lt;/div>
    
&lt;/footer>&lt;!-- .footer -->
</pre>

                <p>Then in your theme's JS file (e.g. assets/themes/Kayzen/kayzen.js), pass any desired options to the <code>footer()</code> function:</p>

<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('.footer').footer({
    twitterFeedSelector : '#footer-twitter-feed',
    twitterFeed   : {
        username  : 'esr360',
        tweets    : 8,
        container : '.twitter-feed_content'
    }
});
</pre>

                <h3 class="heading-size-3">Testimonials</h3>
							
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;footer class="footer">

    &lt;div class="footer_wrapper">
    
        &lt;div class="container">
        
            &lt;div class="row">
                ...
                &lt;div class="span-3">
                
                    &lt;!-- Testimonial Carousel -->
                    
                    &lt;header class="heading_group-small">
                        &lt;h4 class="footer_title heading-heavy-uppercase-size-3 font-2">
                            Testimonials
                        &lt;/h4>
                        &lt;h5 class="heading-light-brand-1">
                            See what our clients say
                        &lt;/h5>
                        &lt;div class="footer_testimonials-nav icon_group-small">
                            &lt;div class="tweet-prev button-icon-circle-size-1">
                                &lt;i class="fa fa-angle-left">&lt;/i>
                            &lt;/div>
                            &lt;div class="tweet-next button-icon-circle-size-1">
                                &lt;i class="fa fa-angle-right">&lt;/i>
                            &lt;/div>
                        &lt;/div>
                    &lt;/header>
                    
                    &lt;div id="footer-testimonials" class="owl-carousel">
                        
                        &lt;blockquote class="blockquote-testimonial">
                            &lt;div class="blockquote_bubble">
                                &lt;div class="blockquote_content">
                                    Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...
                                &lt;/div>
                            &lt;/div>
                            &lt;footer class="blockquote_footer">
                                &lt;a class="blockquote_avatar-small" href="">
                                    &lt;img src="/images/team/team-2.jpg" alt="">
                                &lt;/a>
                                &lt;div class="blockquote_cite heading_group">
                                    &lt;h4 class="heading-size-2 font-2">John Dough&lt;/h4>
                                    &lt;h5 class="heading-light-brand-1-size-2">Theme Forest&lt;/h5>
                                &lt;/div>
                            &lt;/footer>
                        &lt;/blockquote>	
                        
                        ...
                    
                    &lt;/div>
                    
                &lt;/div>
                
            &lt;/div>&lt;!-- .row -->
            
        &lt;/div>&lt;!-- .container -->
        
    &lt;/div>&lt;!-- .footer_wrapper -->
    
    &lt;div class="container">
        &lt;div class="footer_bar">
            ...
        &lt;/div>
    &lt;/div>
    
&lt;/footer>&lt;!-- .footer -->
</pre>

                <p>Then in your theme's JS file (e.g. assets/themes/Kayzen/kayzen.js), pass any desired options to the <code>footer()</code> function:</p>

<pre data-enlighter-language="javascript" class="EnlighterJSRAW">
$('.footer').footer({
    testimonialsSelector : '#footer-testimonials'
});
</pre>
				
				<h2 class="heading-light-size-5">Customizing</h2>
				
				<p>The Footer can be customized using the following options:</p>
				
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
							<td><code class="value">color('greyscale', 'grey-6')</code></td>
							<td>The base background for the whole footer module.</td>
						</tr>
						<tr>
							<td><code>wrapper-padding</code></td>
							<td><code class="value">4em 0</code></td>
							<td>The padding for the <code>wrapper</code> component.</td>
						</tr>
						<tr>
							<td><code>wrapper-font-size</code></td>
							<td><code class="value">0.9em</code></td>
							<td>The font size for the <code>wrapper</code> component.</td>
						</tr>
						<tr>
							<td><code>wrapper-background</code></td>
							<td><code class="value">color('greyscale', 'grey-5')</code></td>
							<td>The background for the <code>wrapper</code> component.</td>
						</tr>
						<tr>
							<td><code>wrapper-color</code></td>
							<td><code class="value">color('greyscale', 'grey-3')</code></td>
							<td>The text color for the <code>wrapper</code> component.</td>
						</tr>
						<tr>
							<td><code>wrapper-strong-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The <b>strong</b> color for the <code>wrapper</code> component.</td>
						</tr>
						<tr>
							<td><code>logo-height</code></td>
							<td><code class="value">34px</code></td>
							<td>The height for the footer logo.</td>
						</tr>
						<tr>
							<td><code>title-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The text color for footer titles.</td>
						</tr>
						<tr>
							<td><code>bar-padding</code></td>
							<td><code class="value">2em 0</code></td>
							<td>The padding for the <code>bar</code> component.</td>
						</tr>
						<tr>
							<td><code>bar-font-size</code></td>
							<td><code class="value">0.9em</code></td>
							<td>The font size for the <code>bar</code> component.</td>
						</tr>
						<tr>
							<td><code>bar-responsive</code></td>
							<td><code class="value">breakpoint('break-2')</code></td>
							<td>The width at which the bar should respond for mobile devices.</td>
						</tr>
						<tr>
							<td><code>nav-link-color</code></td>
							<td><code class="value">color('greyscale', 'grey-3')</code></td>
							<td>The color for links inside the <code>nav</code> component.</td>
						</tr>
						<tr>
							<td><code>nav-link-hover-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The color for links inside the <code>nav</code> component when hovered.</td>
						</tr>
                    </tbody>
                </table>
				
				<p>To change one of the above values, pass your new value(s) to the <code>footer()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
						
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include footer((
    'wrapper-padding' : 6em 0,
    'logo-height'     : 40px,
    'bar-responsive'  : 720px,
    'bar-font-size'   : 1em
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