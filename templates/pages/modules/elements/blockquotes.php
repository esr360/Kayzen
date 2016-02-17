<?php 
	include ('../../../app.php');
	// page config
	$title = 'Blockquotes';
	$tagLine = 'assets/modules/elements/blockquotes';
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
					<li class="plain"><span>_blockquotes.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/blockquotes" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/blockquotes</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>blockquote</code></li>
                        <li><b>Components:</b> <code>bubble</code>, <code>avatar</code>, <code>cite</code>, <code>content</code>, <code>footer</code></li>
                        <li><b>Modifiers:</b> <code>testimonial</code>, <code>pull-left[top, bottom]</code>, <code>pull-right[top, bottom]</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="object">
                    <blockquote class="blockquote">
                        <p class="blockquote_content">Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius. Idemne, quod iucunde? Qua ex cognitione facilior facta est investigatio rerum occultissimarum. Paria sunt igitur. <i>Graece donan, Latine voluptatem vocant.</i> <a href="#link">Quod equidem non reprehendo;</a> <b>Scrupulum, inquam, abeunti;</b> Sed virtutem ipsam inchoavit, nihil amplius. Similiter sensus, cum accessit ad naturam, tuetur illam quidem, sed etiam se tuetur; </p>
                    </blockquote>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;blockquote class="blockquote">
    &lt;p class="blockquote_content">
        ...
    &lt;/p>
&lt;/blockquote>
</pre>
                <h3 class="heading-size-3">Pull Left</h3>
                
                <p>Aenean condimentum ut ex in ultricies. Duis scelerisque blandit odio at tempor. Integer id turpis pharetra, sodales ipsum nec, accumsan felis. Aenean sodales ultrices tempus. Quisque vitae feugiat eros. Etiam sed elit at elit ultricies faucibus. Integer erat ipsum, sollicitudin sed lacinia eget, scelerisque a magna. <q class="blockquote-pull-left"><span class="blockquote_content">Suspendisse iaculis porta nisl, sed sodales eros sodales in.</span></q> Suspendisse tempus urna vel justo volutpat tempus. Sed ultrices ipsum ut dolor mattis congue. Vivamus efficitur efficitur volutpat. Quisque odio lacus, varius nec erat sed, feugiat porttitor eros. Curabitur efficitur quis urna sit amet dapibus. Vestibulum congue ante ac venenatis lobortis. Pellentesque nulla tortor, sagittis non leo eleifend, lacinia bibendum nunc. Nunc nisl est, vulputate at condimentum ut, imperdiet et metus. Aenean condimentum ut ex in ultricies. Duis scelerisque blandit odio at tempor. Integer id turpis pharetra, sodales ipsum nec, accumsan felis. Aenean sodales ultrices tempus.</p>
                
                <p class="alert-bar-info">Note that for inline quotes the 'q' tag is used instead of 'blockquote', and for the content 'span' is used instead of 'p'.</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;q class="blockquote-pull-left">
    &lt;span class="blockquote_content">
        ...
    &lt;/span>
&lt;/q>
</pre>
                
                <h4 class="heading-size-2-uppercase">Pull Left - Top</h3>
                
                <p><q class="blockquote-pull-left-top"><span class="blockquote_content">Suspendisse iaculis porta nisl, sed sodales eros sodales in.</span></q> Aenean condimentum ut ex in ultricies. Duis scelerisque blandit odio at tempor. Integer id turpis pharetra, sodales ipsum nec, accumsan felis. Aenean sodales ultrices tempus. Quisque vitae feugiat eros. Etiam sed elit at elit ultricies faucibus. Integer erat ipsum, sollicitudin sed lacinia eget, scelerisque a magna. Suspendisse tempus urna vel justo volutpat tempus. Sed ultrices ipsum ut dolor mattis congue. Vivamus efficitur efficitur volutpat. Quisque odio lacus, varius nec erat sed, feugiat porttitor eros. Curabitur efficitur quis urna sit amet dapibus. Vestibulum congue ante ac venenatis lobortis.</p>
                                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;q class="blockquote-pull-left-top">
    &lt;span class="blockquote_content">
        ...
    &lt;/span>
&lt;/q>
</pre>
                <h4 class="heading-size-2-uppercase">Pull Left - Bottom</h3>
                
                <p>Aenean condimentum ut ex in ultricies. Duis scelerisque blandit odio at tempor. Integer id turpis pharetra, sodales ipsum nec, accumsan felis. Aenean sodales ultrices tempus. Quisque vitae feugiat eros. Etiam sed elit at elit ultricies faucibus. Integer erat ipsum, sollicitudin sed lacinia eget, scelerisque a magna. Suspendisse tempus urna vel justo volutpat tempus. Sed ultrices ipsum ut dolor mattis congue.<q class="blockquote-pull-left-bottom"><span class="blockquote_content">Suspendisse iaculis porta nisl, sed sodales eros sodales in.</span></q>  Vivamus efficitur efficitur volutpat. Quisque odio lacus, varius nec erat sed, feugiat porttitor eros. Curabitur efficitur quis urna sit amet dapibus. Vestibulum congue ante ac venenatis lobortis.</p>  
                              
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;q class="blockquote-pull-left-bottom">
    &lt;span class="blockquote_content">
        ...
    &lt;/span>
&lt;/q>
</pre>
                
                <h3 class="heading-size-3">Pull Right</h3>
                
                <p>Aenean condimentum ut ex in ultricies. Duis scelerisque blandit odio at tempor. Integer id turpis pharetra, sodales ipsum nec, accumsan felis. Aenean sodales ultrices tempus. Quisque vitae feugiat eros. Etiam sed elit at elit ultricies faucibus. Integer erat ipsum, sollicitudin sed lacinia eget, scelerisque a magna. <q class="blockquote-pull-right"><span class="blockquote_content">Suspendisse iaculis porta nisl, sed sodales eros sodales in.</span></q> Suspendisse tempus urna vel justo volutpat tempus. Sed ultrices ipsum ut dolor mattis congue. Vivamus efficitur efficitur volutpat. Quisque odio lacus, varius nec erat sed, feugiat porttitor eros. Curabitur efficitur quis urna sit amet dapibus. Vestibulum congue ante ac venenatis lobortis. Pellentesque nulla tortor, sagittis non leo eleifend, lacinia bibendum nunc. Nunc nisl est, vulputate at condimentum ut, imperdiet et metus. Aenean condimentum ut ex in ultricies. Duis scelerisque blandit odio at tempor. Integer id turpis pharetra, sodales ipsum nec, accumsan felis. Aenean sodales ultrices tempus.</p>
                                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;q class="blockquote-pull-right">
    &lt;span class="blockquote_content">
        ...
    &lt;/span>
&lt;/q>
</pre>

                <h4 class="heading-size-2-uppercase">Pull Right - Top</h3>
                
                <p><q class="blockquote-pull-right-top"><span class="blockquote_content">Suspendisse iaculis porta nisl, sed sodales eros sodales in.</span></q> Aenean condimentum ut ex in ultricies. Duis scelerisque blandit odio at tempor. Integer id turpis pharetra, sodales ipsum nec, accumsan felis. Aenean sodales ultrices tempus. Quisque vitae feugiat eros. Etiam sed elit at elit ultricies faucibus. Integer erat ipsum, sollicitudin sed lacinia eget, scelerisque a magna. Suspendisse tempus urna vel justo volutpat tempus. Sed ultrices ipsum ut dolor mattis congue. Vivamus efficitur efficitur volutpat. Quisque odio lacus, varius nec erat sed, feugiat porttitor eros. Curabitur efficitur quis urna sit amet dapibus. Vestibulum congue ante ac venenatis lobortis.</p>
                                    
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;q class="blockquote-pull-right-top">
    &lt;span class="blockquote_content">
        ...
    &lt;/span>
&lt;/q>
</pre>
            
                <h4 class="heading-size-2-uppercase">Pull Right - Bottom</h3>
                
                <p>Aenean condimentum ut ex in ultricies. Duis scelerisque blandit odio at tempor. Integer id turpis pharetra, sodales ipsum nec, accumsan felis. Aenean sodales ultrices tempus. Quisque vitae feugiat eros. Etiam sed elit at elit ultricies faucibus. Integer erat ipsum, sollicitudin sed lacinia eget, scelerisque a magna. Suspendisse tempus urna vel justo volutpat tempus. Sed ultrices ipsum ut dolor mattis congue.<q class="blockquote-pull-right-bottom"><span class="blockquote_content">Suspendisse iaculis porta nisl, sed sodales eros sodales in.</span></q>  Vivamus efficitur efficitur volutpat. Quisque odio lacus, varius nec erat sed, feugiat porttitor eros. Curabitur efficitur quis urna sit amet dapibus. Vestibulum congue ante ac venenatis lobortis.</p>
                                      
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;q class="blockquote-pull-right-bottom">
    &lt;span class="blockquote_content">
        ...
    &lt;/span>
&lt;/q>
</pre>
                
                <h3 class="heading-size-3">Testimonial</h3>
                
                <div class="well object">
                    <blockquote class="blockquote-testimonial span-4">
                        <div class="blockquote_bubble">
                            <div class="blockquote_content">
                                Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...
                            </div>
                        </div>
                        <footer class="blockquote_footer">
                            <a class="blockquote_avatar-small" href="">
                                <img src="/assets/images/team/team-2.jpg" alt="">
                            </a>
                            <div class="blockquote_cite heading_group">
                                <h4 class="heading-size-2 font-2">John Dough</h4>
                                <h5 class="heading-light-brand-1-size-2">Theme Forest</h5>
                            </div>
                        </footer>
                    </blockquote>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;blockquote class="blockquote-testimonial">
    &lt;div class="blockquote_bubble">
        &lt;div class="blockquote_content">
            Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...
        &lt;/div>
    &lt;/div>
    &lt;footer class="blockquote_footer">
        &lt;a class="blockquote_avatar-small" href="/team">
            &lt;img src="/assets/images/team/team-2.jpg" alt="">
        &lt;/a>
        &lt;div class="blockquote_cite heading_group">
            &lt;h4 class="heading-size-2 font-2">John Dough&lt;/h4>
            &lt;h5 class="heading-light-brand-1-size-2">Theme Forest&lt;/h5>
        &lt;/div>
    &lt;/footer>
&lt;/blockquote>
</pre>
                
                <h4 class="heading-size-2-uppercase">Testimonial - Alternative</h4>
                
                <div class="well-deep object text-center">
                    <blockquote class="blockquote span-10">
                        <a class="blockquote_avatar-large" href="<?php pageLink('blog/single.php') ?>">
                            <img src="/assets/images/team/team-2.jpg" alt="">
                        </a>
                        <div class="blockquote_content">
                            <p>Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
                        </div>
                        <div class="blockquote_cite"> 
                            <h4 class="heading-highlight-light"><b>Brendon Mack - Theme Forest</b></h4>
                        </div>
                    </blockquote>
                </div>
                
 <pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;blockquote class="blockquote">
    &lt;a class="blockquote_avatar-large" href="/team">
        &lt;img src="/assets/images/team/team-2.jpg" alt="#">
    &lt;/a>
    &lt;div class="blockquote_content">
        &lt;p>Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...&lt;/p>
    &lt;/div>
    &lt;div class="blockquote_cite">
        &lt;h4 class="heading-highlight-light">&lt;b>Brendon Mack - Theme Forest&lt;/b>&lt;/h4>
    &lt;/div>
&lt;/blockquote>
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The blockquotes can be customized using the following options:</p>
                                
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
							<td><code>font</code></td>
							<td><code class="value">typography('typefaces', 'secondary')</code></td>
							<td>The font-family for blockquotes.</td>
						</tr>
						<tr>
							<td><code>icon-size</code></td>
							<td><code class="value">1.75rem</code></td>
							<td>The size of the open/close quote icons.</td>
						</tr>
						<tr>
							<td><code>pull-width</code></td>
							<td><code class="value">340px</code></td>
							<td>The default width for pull-quotes.</td>
						</tr>
						<tr>
							<td><code>pull-max-width</code></td>
							<td><code class="value">50%</code></td>
							<td>The max-width for pull-quotes.</td>
						</tr>
						<tr>
							<td><code>pull-font-style</code></td>
							<td><code class="value">italic</code></td>
							<td>The font style for pull-quotes.</td>
						</tr>
						<tr>
							<td><code>pull-margin</code></td>
							<td><code class="value">1em</code></td>
							<td>The outer spacing for pull quotes.</td>
						</tr>
						<tr>
							<td><code>bubble-padding</code></td>
							<td><code class="value">1em 3em</code></td>
							<td>The padding for blockquote bubbles.</td>
						</tr>
						<tr>
							<td><code>bubble-bg-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The background color for blockquote bubbles.</td>
						</tr>
						<tr>
							<td><code>bubble-radius</code></td>
							<td><code class="value">0.6em</code></td>
							<td>The border radius for blockquote bubbles.</td>
						</tr>
						<tr>
							<td><code>bubble-color</code></td>
							<td><code class="value">white</code></td>
							<td>The text color for blockquote bubbles.</td>
						</tr>
						<tr>
							<td><code>testimonial-icon-size</code></td>
							<td><code class="value">1.5em</code></td>
							<td>The size forthe testimonial open/close quote icons.</td>
						</tr>
                    </tbody>
                </table>
                
				<p>To change one of the above values, pass your new value(s) to the <code>blockquotes()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
         
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include blockquotes((
    'font'            : 'Times New Roman',
    'bubble-bg-color' : #0bb2ef,
    'bubble-radius'   : 0
));
</pre>	
                
                <div class="well object">
                    <style>
                        #blockquote-demo {
                            font-family: 'Times New Roman';
                        }
                        #blockquote-demo .blockquote_bubble {
                            background-color: #0bb2ef;
                            border-radius: 0;
                        }
                        #blockquote-demo .blockquote_bubble:after {
                            border-top-color: #0bb2ef;
                        }
                    </style>
                    <blockquote id="blockquote-demo" class="blockquote-testimonial span-4">
                        <div class="blockquote_bubble">
                            <div class="blockquote_content">
                                Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...
                            </div>
                        </div>
                    </blockquote>
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