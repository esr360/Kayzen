<?php 
	include ('../../../app.php');
	// page config
	$title = 'Tabs & Pills';
	$tagLine = 'app/modules/elements/tabs';
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
					<li class="plain"><span>_tabs.scss</span></li>
					<li class="plain"><span>tabs.js</span></li>	
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/app/modules/elements/tabs" target="blank">https://github.com/esr360/Kayzen/tree/master/app/modules/elements/tabs</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>tabs</code></li>
                        <li><b>Components:</b> <code>nav[pills[large]]</code>, <code>content[block[glue, deep]]</code>, <code>item</code></li>
                        <li><b>Modifiers:</b> null</li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <div class="well object">
    
                    <div class="tabs">
                    
                        <ul class="tabs_nav">
                            <li class="active">Latest</li>
                            <li>Popular</li>
                            <li>Comments</li>
                        </ul>
                        
                        <div class="tabs_content-block">
                            
                            <section class="tabs_item active">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit risus eget dignissim varius. Vivamus tellus sem, egestas at hendrerit ultrices, pulvinar nec ipsum. </p>
                            </section>
                            
                            <section class="tabs_item">
                                <p>Aenean finibus blandit ex ut pretium. Etiam efficitur sapien nec mauris efficitur ultrices. In eget volutpat turpis. Morbi velit ex, malesuada at tellus vel, lacinia feugiat dolor. Nullam ultrices pharetra laoreet. Nunc ut lectus arcu. Nunc sed faucibus sapien, quis facilisis tellus.</p>
                            </section>
                            
                            <section class="tabs_item">
                                <p>Ut egestas, sapien et porta bibendum, erat tortor rutrum libero, non hendrerit odio mi eu ex. Nulla justo sapien, ultricies nec consectetur id, hendrerit cursus lectus.</p>
                            </section>
                        
                        </div>
                        
                    </div>
            
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="tabs">

    &lt;ul class="tabs_nav">
        &lt;li class="active">Latest&lt;/li>
        &lt;li>Popular&lt;/li>
        &lt;li>Comments&lt;/li>
    &lt;/ul>
    
    &lt;div class="tabs_content-block">
        
        &lt;section class="tabs_item active">
            ...
        &lt;/section>
        
        &lt;section class="tabs_item">
            ...
        &lt;/section>
        
        &lt;section class="tabs_item">
            ...
        &lt;/section>
    
    &lt;/div>
    
&lt;/div>
</pre>

                <h3 class="heading-size-3">Tabs With Glued Content</h3>
                
                <div class="well object">
    
                    <div class="tabs">
                    
                        <ul class="tabs_nav">
                            <li class="active">Latest</li>
                            <li>Popular</li>
                            <li>Comments</li>
                        </ul>
                        
                        <div class="tabs_content-block-glue">
                            
                            <section class="tabs_item active">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit risus eget dignissim varius. Vivamus tellus sem, egestas at hendrerit ultrices, pulvinar nec ipsum. </p>
                            </section>
                            
                            <section class="tabs_item">
                                <p>Aenean finibus blandit ex ut pretium. Etiam efficitur sapien nec mauris efficitur ultrices. In eget volutpat turpis. Morbi velit ex, malesuada at tellus vel, lacinia feugiat dolor. Nullam ultrices pharetra laoreet. Nunc ut lectus arcu. Nunc sed faucibus sapien, quis facilisis tellus.</p>
                            </section>
                            
                            <section class="tabs_item">
                                <p>Ut egestas, sapien et porta bibendum, erat tortor rutrum libero, non hendrerit odio mi eu ex. Nulla justo sapien, ultricies nec consectetur id, hendrerit cursus lectus.</p>
                            </section>
                        
                        </div>
                        
                    </div>
            
                </div>
                 
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="tabs">

    &lt;ul class="tabs_nav">
        ...
    &lt;/ul>
    
    &lt;div class="tabs_content-block-glue">
        ...
    &lt;/div>
    
&lt;/div>
</pre>

                <h3 class="heading-size-3">Tabs With Deep Content Padding</h3>
                
                <div class="well object">
    
                    <div class="tabs">
                    
                        <ul class="tabs_nav">
                            <li class="active">Latest</li>
                            <li>Popular</li>
                            <li>Comments</li>
                        </ul>
                        
                        <div class="tabs_content-block-deep">
                            
                            <section class="tabs_item active">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit risus eget dignissim varius. Vivamus tellus sem, egestas at hendrerit ultrices, pulvinar nec ipsum. </p>
                            </section>
                            
                            <section class="tabs_item">
                                <p>Aenean finibus blandit ex ut pretium. Etiam efficitur sapien nec mauris efficitur ultrices. In eget volutpat turpis. Morbi velit ex, malesuada at tellus vel, lacinia feugiat dolor. Nullam ultrices pharetra laoreet. Nunc ut lectus arcu. Nunc sed faucibus sapien, quis facilisis tellus.</p>
                            </section>
                            
                            <section class="tabs_item">
                                <p>Ut egestas, sapien et porta bibendum, erat tortor rutrum libero, non hendrerit odio mi eu ex. Nulla justo sapien, ultricies nec consectetur id, hendrerit cursus lectus.</p>
                            </section>
                        
                        </div>
                        
                    </div>
            
                </div>
                 
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="tabs">

    &lt;ul class="tabs_nav">
        ...
    &lt;/ul>
    
    &lt;div class="tabs_content-block-deep">
        ...
    &lt;/div>
    
&lt;/div>
</pre>
                
                <h3 class="heading-size-3">Tabs With Pill Navigation</h3>
                
                <div class="well-deep object">
    
                    <div class="tabs">
                    
                        <ul class="tabs_nav-pills object-center">
                            <li class="button-pill-grey-1 active">New Arrivals</li>
                            <li class="button-pill-grey-1">Best Sellers</li>
                            <li class="button-pill-grey-1">On Offer</li>
                        </ul>
                        
                        <div class="tabs_content object">
                            
                            <section class="tabs_item active">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit risus eget dignissim varius. Vivamus tellus sem, egestas at hendrerit ultrices, pulvinar nec ipsum. </p>
                            </section>
                            
                            <section class="tabs_item">
                                <p>Aenean finibus blandit ex ut pretium. Etiam efficitur sapien nec mauris efficitur ultrices. In eget volutpat turpis. Morbi velit ex, malesuada at tellus vel, lacinia feugiat dolor. Nullam ultrices pharetra laoreet. Nunc ut lectus arcu. Nunc sed faucibus sapien, quis facilisis tellus.</p>
                            </section>
                            
                            <section class="tabs_item">
                                <p>Ut egestas, sapien et porta bibendum, erat tortor rutrum libero, non hendrerit odio mi eu ex. Nulla justo sapien, ultricies nec consectetur id, hendrerit cursus lectus.</p>
                            </section>
                        
                        </div>
                        
                    </div>
            
                </div>
                 
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="tabs">

    &lt;ul class="tabs_nav-pills object-center">
        &lt;li class="button-pill-grey-1 active">New Arrivals&lt;/li>
        &lt;li class="button-pill-grey-1">Best Sellers&lt;/li>
        &lt;li class="button-pill-grey-1">On Offer&lt;/li>
    &lt;/ul>
    
    &lt;div class="tabs_content object">
        ...  
    &lt;/div>
    
&lt;/div>
</pre>
                
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The tabs can be customized using the following options:</p>
                
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
							<td><code>navItem-padding</code></td>
							<td><code class="value">0.5em 1em</code></td>
							<td>The padding of the tabs navigation items.</td>
						</tr>
						<tr>
							<td><code>navItem-lineHeight</code></td>
							<td><code class="value">1.4</code></td>
							<td>The line height of the tabs navigation items.</td>
						</tr>
						<tr>
							<td><code>navItem-borderColor</code></td>
							<td><code class="value">rgba(black, 0.15)</code></td>
							<td>The border color of the tabs navigation items.</td>
						</tr>
						<tr>
							<td><code>navItem-active-color</code></td>
							<td><code class="value">color('greyscale', 'grey-3')</code></td>
							<td>The text color of the active tabs navigation item.</td>
						</tr>
						<tr>
							<td><code>navItem-active-borderColor</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The border color of the active tabs navigation item.</td>
						</tr>
						<tr>
							<td><code>navItem-active-background</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The background color of the active tabs navigation item.</td>
						</tr>
						<tr>
							<td><code>contentBlock-background</code></td>
							<td><code class="value">color('greyscale', 'white')</code></td>
							<td>The background color of the content block.</td>
						</tr>
						<tr>
							<td><code>contentBlock-color</code></td>
							<td><code class="value">base('text-color')</code></td>
							<td>The text color of the content block.</td>
						</tr>
						<tr>
							<td><code>contentBlock-borderColor</code></td>
							<td><code class="value">color('greyscale', 'grey-2')</code></td>
							<td>The border color of the content block.</td>
						</tr>
						<tr>
							<td><code>contentBlock-padding</code></td>
							<td><code class="value">1.5em</code></td>
							<td>The padding of the content block.</td>
						</tr>
						<tr>
							<td><code>contentBlock-glueHeight</code></td>
							<td><code class="value">6px</code></td>
							<td>The height of the content block glue.</td>
						</tr>
						<tr>
							<td><code>contentBlock-glueColor</code></td>
							<td><code class="value">color('brand', 'primary')</code></td>
							<td>The color of the content block glue.</td>
						</tr>
						<tr>
							<td><code>contentBlock-deepPadding</code></td>
							<td><code class="value">2.5em</code></td>
							<td>The padding of the content block when using the <code>deep</code> modifier.</td>
						</tr>
                    </tbody>
                </table>

				<p>To change one of the above values, pass your new value(s) to the <code>tabs()</code> mixin in your theme file (e.g. app/themes/Kayzen/_kayzen.scss).</p>   
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include tabs((
    'contentBlock-background'  : #9B58B5,
    'contentBlock-borderColor' : #9B58B5,
    'contentBlock-color'       : white
));
</pre>
                
                <div class="well object">
                    
                    <style>
                        #tabs-demo [class*="tabs_content"] {
                            background: #9B58B5;
                            border-color: #9B58B5;
                            color: white;
                        }
                        #tabs-demo li {
                            border-bottom-color: #9B58B5;
                        }
                    </style>
    
                    <div id="tabs-demo" class="tabs">
                    
                        <ul class="tabs_nav">
                            <li class="active">Latest</li>
                            <li>Popular</li>
                            <li>Comments</li>
                        </ul>
                        
                        <div class="tabs_content-block">
                            
                            <section class="tabs_item active">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit risus eget dignissim varius. Vivamus tellus sem, egestas at hendrerit ultrices, pulvinar nec ipsum. </p>
                            </section>
                            
                            <section class="tabs_item">
                                <p>Aenean finibus blandit ex ut pretium. Etiam efficitur sapien nec mauris efficitur ultrices. In eget volutpat turpis. Morbi velit ex, malesuada at tellus vel, lacinia feugiat dolor. Nullam ultrices pharetra laoreet. Nunc ut lectus arcu. Nunc sed faucibus sapien, quis facilisis tellus.</p>
                            </section>
                            
                            <section class="tabs_item">
                                <p>Ut egestas, sapien et porta bibendum, erat tortor rutrum libero, non hendrerit odio mi eu ex. Nulla justo sapien, ultricies nec consectetur id, hendrerit cursus lectus.</p>
                            </section>
                        
                        </div>
                        
                    </div>
            
                </div>
            
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