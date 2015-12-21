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