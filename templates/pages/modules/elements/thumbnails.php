<?php 
	include ('../../../app.php');
	// page config
	$title = 'Thumbnails';
	$tagLine = 'assets/modules/elements/thumbnails';
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
					<li class="plain"><span>_thumbnails.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only): <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/thumbnails" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/thumbnails</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>thumbnail</code></li>
                        <li><b>Components:</b> <code>mask</code>, <code>controls</code>, <code>title</code>, <code>excerpt</code>, <code>nav</code>, <code>grid</code>, <code>aside</code></li>
                        <li><b>Modifiers:</b> <code>mini</code>, <code>feature</code>, <code>profile[fill, badge, round, xlarge, large, small, xsmall]</code>, <code>styled</code>, <code>zoom</code>, <code>inline</code>, <code>article</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <h3 class="heading-size-3">Portfolio/Article Thumbnails</h3>
                
                <div class="well object">
                    <div class="thumbnail span-6">
                        <div class="thumbnail_mask">
                            <div class="thumbnail_controls">
                                <a rel="lightbox" href="<?php echo stockImage('demo/stock-3.jpg') ?>" class="button-icon-border-circle">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo stockImage('demo/stock-3.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail">
    &lt;div class="thumbnail_mask">
        &lt;div class="thumbnail_controls">
            &lt;a rel="lightbox" href="/images/demo/stock-3.jpg" class="button-icon-border-circle">
                &lt;i class="fa fa-search">&lt;/i>
            &lt;/a>
        &lt;/div>
    &lt;/div>
    &lt;img src="/images/demo/stock-3.jpg">
&lt;/div>
</pre>

                <hr class="hrule-stripes" />
                
                <div class="well object">
                    <div class="thumbnail-zoom span-6">
                        <div class="thumbnail_mask">
                            <div class="thumbnail_controls">
                                <a rel="lightbox" href="<?php echo stockImage('demo/stock-6.jpg') ?>" class="button-icon-border-circle">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo stockImage('demo/stock-6.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-zoom">
    &lt;div class="thumbnail_mask">
        ...
    &lt;/div>
    &lt;img src="/images/demo/stock-6.jpg">
&lt;/div>
</pre>

                <hr class="hrule-stripes" />

                <div class="well object">
                    <div class="thumbnail span-6">
                        <div class="thumbnail_mask">
                            <div class="thumbnail_controls-corner button_group-small">
                                <a rel="lightbox" href="<?php echo stockImage('demo/stock-9.jpg') ?>" class="button-icon-border-circle">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="<?php pageLink('pages/blog/single.php') ?>" class="button-icon-border-circle">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <header class="thumbnail_title heading_group">
                                <h4 class="heading-heavy-size-4 font-2">Lorem Ipsum</h4>
                                <h5 class="heading-light">Cras dictum erat id tortor ornare.</h5>
                            </header>
                        </div>
                        <img src="<?php echo stockImage('demo/stock-9.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail">
    &lt;div class="thumbnail_mask">
        &lt;div class="thumbnail_controls-corner button_group-small">
            &lt;a rel="lightbox" href="/images/demo/stock-9.jpg" class="button-icon-border-circle">
                &lt;i class="fa fa-search">&lt;/i>
            &lt;/a>
            &lt;a href="#" class="button-icon-border-circle">
                &lt;i class="fa fa-link">&lt;/i>
            &lt;/a>
        &lt;/div>
        &lt;header class="thumbnail_title heading_group">
            &lt;h4 class="heading-heavy-size-4 font-2">Lorem Ipsum&lt;/h4>
            &lt;h5 class="heading-light">Cras dictum erat id tortor ornare.&lt;/h5>
        &lt;/header>
    &lt;/div>
    &lt;img src="/images/demo/stock-9.jpg">
&lt;/div>
</pre>

                <hr class="hrule-stripes" />
                
                <div class="well object">
                    <div class="thumbnail-feature span-8">
                        <img src="<?php echo stockImage('demo/stock-12.jpg') ?>">
                        <div class="thumbnail_content">
                            <header class="heading_group-small">
                                <div class="heading_date">
                                    <div>Sep</div>
                                    <div>23</div>
                                </div>
                                <h3 class="heading-heavy-size-4">Kayzen is Released</h3>
                            </header>
                            <div class="thumbnail_excerpt">Quisque fermentum nisl metus, vitae aliquam odio efficitur vel. Suspendisse rhoncus felis ac justo bibendum, et egestas purus...</div>
                        </div>
                    </div>
                </div>

<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-feature">
    &lt;img src="/images/demo/stock-12.jpg">
    &lt;div class="thumbnail_content">
        &lt;header class="heading_group-small">
            &lt;div class="heading_date">
                &lt;div>Sep&lt;/div>
                &lt;div>23&lt;/div>
            &lt;/div>
            &lt;h3 class="heading-heavy-size-4">Kayzen is Released&lt;/h3>
        &lt;/header>
        &lt;div class="thumbnail_excerpt">Quisque fermentum nisl metus...&lt;/div>
    &lt;/div>
&lt;/div>
</pre>
                <h4 class="heading-size-2-uppercase">Thumbnail Grid</h4>
                
                <div class="well object">
                    <div class="thumbnail_grid-fade row-magic">
                        <img class="span active" src="<?php echo stockImage('demo/stock-3.jpg') ?>">
                        <img class="span" src="<?php echo stockImage('demo/stock-6.jpg') ?>">
                        <img class="span" src="<?php echo stockImage('demo/stock-9.jpg') ?>">
                        <img class="span" src="<?php echo stockImage('demo/stock-12.jpg') ?>">
                        <img class="span" src="<?php echo stockImage('demo/stock-15.jpg') ?>">
                    </div>    
                </div>

<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail_grid-fade row-magic">
    &lt;img class="span active" src="/images/demo/stock-3.jpg">
    &lt;img class="span" src="/images/demo/stock-6.jpg">
    &lt;img class="span" src="/images/demo/stock-9.jpg">
    &lt;img class="span" src="/images/demo/stock-12.jpg">
    &lt;img class="span" src="/images/demo/stock-15.jpg">
&lt;/div>  
</pre>
                
                <h3 class="heading-size-3">Profile Picture Thumbnails</h3>
                
                <p class="alert-bar-info">Profile picture thumbnails are fixed sizes.</p>
                
                <h4 class="heading-size-2-uppercase">Extra Small</h4>
                
                <div class="well object">
                    <div class="thumbnail-profile-xsmall">
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-profile-xsmall">
    &lt;img src="/images/team/team-2.jpg">
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Small</h4>
                
                <div class="well object">
                    <div class="thumbnail-profile-small">
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-profile-small">
    &lt;img src="/images/team/team-2.jpg">
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Default</h4>
                
                <div class="well object">
                    <div class="thumbnail-profile">
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-profile">
    &lt;img src="/images/team/team-2.jpg">
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Large</h4>
                
                <div class="well object">
                    <div class="thumbnail-profile-large">
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-profile-large">
    &lt;img src="/images/team/team-2.jpg">
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Extra Large</h4>
                
                <div class="well object">
                    <div class="thumbnail-profile-xlarge">
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-profile-xlarge">
    &lt;img src="/images/team/team-2.jpg">
&lt;/div>
</pre>
                
                <h4 class="heading-size-2-uppercase">Round</h4>
                
                <div class="well object">
                    <div class="thumbnail-profile-round">
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-profile-round">
    &lt;img src="/images/team/team-2.jpg">
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Styled</h4>
                
                <div class="well object">
                    <div class="thumbnail-profile-styled">
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-profile-styled">
    &lt;img src="/images/team/team-2.jpg">
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Badge</h4>
                
                <div class="well object">
                    <div class="thumbnail-profile-badge">
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-profile-badge">
    &lt;img src="/images/team/team-2.jpg">
&lt;/div>
</pre>

                <h4 class="heading-size-2-uppercase">Combining</h4>
                
                <div class="well object">
                    <div class="thumbnail-large-round-profile-badge">
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>">
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="thumbnail-large-round-profile-badge">
    &lt;img src="/images/team/team-2.jpg">
&lt;/div>
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The thumbnails can be customized using the following options:</p>
                
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
							<td><code>default-profile-size</code></td>
							<td><code class="value">50px</code></td>
							<td>The default sze for profile picture thumbnails.</td>
						</tr>
						<tr>
							<td><code>xsmall-profile-size</code></td>
							<td><code class="value">24px</code></td>
							<td>The size for <code>xsmall</code> profile thumbnails.</td>
						</tr>
						<tr>
							<td><code>small-profile-size</code></td>
							<td><code class="value">44px</code></td>
							<td>The size for <code>small</code> profile thumbnails.</td>
						</tr>
						<tr>
							<td><code>large-profile-size</code></td>
							<td><code class="value">65px</code></td>
							<td>The size for <code>large</code> profile thumbnails.</td>
						</tr>
						<tr>
							<td><code>xlarge-profile-size</code></td>
							<td><code class="value">95px</code></td>
							<td>The size for <code>xlarge</code> profile thumbnails.</td>
						</tr>
						<tr>
							<td><code>mask-background</code></td>
							<td><code class="value">rgba(black, 0.6)</code></td>
							<td>The background for thumbnail masks.</td>
						</tr>
						<tr>
							<td><code>mask-title-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The title color for thumbnail masks.</td>
						</tr>
						<tr>
							<td><code>mask-border-color</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The color of the inner mask outline.</td>
						</tr>
						<tr>
							<td><code>featureContent-background</code></td>
							<td><code class="value">rgba(black, 0.5)</code></td>
							<td>The background for the content overlay of featured thumbnails.</td>
						</tr>
						<tr>
							<td><code>featureContent-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The text color for the content overlay of featured thumbnails.</td>
						</tr>
						<tr>
							<td><code>featureContent-padding</code></td>
							<td><code class="value">1.5em</code></td>
							<td>The padding for the content overlay of featured thumbnails.</td>
						</tr>
						<tr>
							<td><code>featureContent-heading-color</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The color for the heading of featured thumbnail overlays.</td>
						</tr>
                    </tbody>
                </table>

				<p>To change one of the above values, pass your new value(s) to the <code>thumbnails()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>   
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include thumbnails((
    'xlarge-profile-size'  : 150px,
    'mask-background'      : rgba(#9B58B5, 0.6),
    'mask-border-color'    : white
));
</pre>

                <style>
                    #thumbnail-demo-1 {
                        height: 150px;
                        width: 150px;
                    }
                    #thumbnail-demo-2 .thumbnail_mask {
                        background: rgba(155, 88, 181, 0.6)
                    }
                    #thumbnail-demo-2 .thumbnail_mask:before {
                        border-color: white;
                    }
                </style>

                <div class="well object">
                    <div id="thumbnail-demo-1" class="thumbnail-profile-xlarge">
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>">
                    </div>
                </div>
                
                <div class="well object">
                    <div id="thumbnail-demo-2" class="thumbnail span-6">
                        <div class="thumbnail_mask">
                            <div class="thumbnail_controls">
                                <a rel="lightbox" href="<?php echo stockImage('demo/stock-3.jpg') ?>" class="button-icon-border-white-circle">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo stockImage('demo/stock-3.jpg') ?>">
                    </div>
                </div>
                
			</div><!-- container-small -->
			
		</section>
		
		<?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>
		
    <?php include (ROOT.'/includes/syntax-highlighter.php'); ?>

</body>
</html>