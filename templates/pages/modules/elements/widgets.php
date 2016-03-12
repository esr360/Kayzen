<?php 
	include ('../../../app.php');
	// page config
	$title = 'Widgets/Cards';
	$tagLine = 'assets/modules/elements/widgets';
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
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/widgets" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/widgets</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>Unlike most other elements, widgets are used heavily throughout this theme to help style and structure many of its visual aspets. Whilst there is a large number of components and modifiers for this module, only certain combinations of these are used, as seen in the below examples.
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>widget</code></li>
                        <li><b>Components:</b> <code>lid</code>, <code>sticker</code>, <code>group</code>, <code>icon</code>, <code>header</code>, <code>controls</code></li>
                        <li><b>Modifiers:</b> <code>block[small, fill, noHover]</code>, <code>panel[small]</code>, <code>borderTop[highlight]</code>, <code>borderLeft[highlight]</code>, <code>card</code>, <code>stacked</code>, <code>scale</code>, <code>zoom</code>, <code>media</code>, <code>spectrumQuarter[1, 2, 3, 4]</code>, <code>feature</code>, <code>greyscale</code>, <code>article</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>

                <div class="well-deep object">
                    <!-- Features Row -->
                    <div class="widget_group row text-center">
                        
                        <!-- Feature 1 -->
                        <div class="widget span-4">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h3 class="heading-heavy-size-3">100% Responsive</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur elit. Integer eu tincidunt quam. Fusce at quam eget ornare tincidunt.</p>
                        </div>
                        
                        <!-- Feature 2 -->
                        <div class="widget span-4">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-clipboard"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h3 class="heading-heavy-size-3">Simple Page Builder</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur elit. Integer eu tincidunt quam. Fusce at quam eget ornare tincidunt.</p>
                        </div>
                        
                        <!-- Feature 3 -->
                        <div class="widget span-4">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-photo"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h3 class="heading-heavy-size-3">Retina Ready</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur elit. Integer eu tincidunt quam. Fusce at quam eget ornare tincidunt.</p>
                        </div>
                        
                    </div><!-- Features Row -->
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="widget_group row text-center">
    
    &lt;div class="widget span-4">
        &lt;div class="widget_icon button-icon-plain-size-8">
            &lt;i class="fa fa-desktop">&lt;/i>
        &lt;/div>
        &lt;header class="widget_header heading_group">
            &lt;h3 class="heading-heavy-size-4">100% Responsive&lt;/h3>
            &lt;h4 class="heading-light-uppercase-brand-1">Donec finibus fringer&lt;/h4>
        &lt;/header>
        &lt;p>...&lt;/p>
    &lt;/div>
    
    ...
    
&lt;/div>
</pre>
                
                <hr class="hrule-stripes" />
                
                <div class="well-deep object">
                        
                    <div class="widget_group-grid row-flow">
                        
                        <!-- Feature 1 -->
                        <div class="widget span-4">                     
                            <div class="widget_icon-inline button-icon-plain-size-6">
                                <i class="fa fa-cogs"></i>
                            </div>  
                            <header class="widget_header-inline heading_group">
                                <h3 class="heading-heavy-uppercase">Fast Performance</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                            </header>     
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                        </div>
                        
                        <!-- Feature 2 -->
                        <div class="widget span-4">                     
                            <div class="widget_icon-inline button-icon-plain-size-6">
                                <i class="fa fa-star"></i>
                            </div>  
                            <header class="widget_header-inline heading_group">
                                <h3 class="heading-heavy-uppercase">Fast Performance</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                            </header>     
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                        </div>
                        
                        <!-- Feature 3 -->
                        <div class="widget span-4">                     
                            <div class="widget_icon-inline button-icon-plain-size-6">
                                <i class="fa fa-eye"></i>
                            </div>  
                            <header class="widget_header-inline heading_group">
                                <h3 class="heading-heavy-uppercase">Fast Performance</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                            </header>     
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                        </div>
                        
                    </div><!-- Row -->
                    
                </div>
                    
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="row text-center">

    &lt;div class="widget span-4">                     
        &lt;div class="widget_icon-inline button-icon-plain-size-6">
            &lt;i class="fa fa-star">&lt;/i>
        &lt;/div>  
        &lt;header class="widget_header-inline heading_group">
            &lt;h3 class="heading-heavy-uppercase">Fast Performance&lt;/h3>
            &lt;h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer&lt;/h4>
        &lt;/header>     
        &lt;p>...&lt;/p>
    &lt;/div>
    
    ...
    
&lt;/div>
</pre>

                <hr class="hrule-stripes" />
                
                <div class="row object">
                        
                    <div class="well span-6">
                        <div class="widget_group span-9">
                            <div class="widget-stacked">                        
                                <div class="widget_icon-inline button-icon-plain-size-7">
                                    <i class="fa fa-bar-chart"></i>
                                </div>   
                                <header class="widget_header-inline heading_group">
                                    <h3 class="heading-heavy-size-4">Fast Performance</h3>
                                    <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                                </header> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                            </div>
                            <div class="widget-stacked">                      
                                <div class="widget_icon-inline button-icon-plain-size-7">
                                    <i class="fa fa-refresh"></i>
                                </div>
                                <header class="widget_header-inline heading_group">
                                    <h3 class="heading-heavy-size-4">Lazy Loading</h3>
                                    <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                                </header> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                            </div>
                            <div class="widget-stacked">                       
                                <div class="widget_icon-inline button-icon-plain-size-7">
                                    <i class="fa fa-eye"></i>
                                </div> 
                                <header class="widget_header-inline heading_group">
                                    <h3 class="heading-heavy-size-4">Retina Ready</h3>
                                    <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                                </header> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="well span-6 text-right">
                        <div class="widget_group span-9">
                            <div class="widget-stacked">   
                                <header class="widget_header-inline heading_group">
                                    <h3 class="heading-heavy-size-4">Fast Performance</h3>
                                    <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                                </header>                        
                                <div class="widget_icon-inline button-icon-plain-size-7">
                                    <i class="fa fa-bar-chart"></i>
                                </div> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                            </div>
                            <div class="widget-stacked">
                                <header class="widget_header-inline heading_group">
                                    <h3 class="heading-heavy-size-4">Lazy Loading</h3>
                                    <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                                </header>                       
                                <div class="widget_icon-inline button-icon-plain-size-7">
                                    <i class="fa fa-refresh"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                            </div>
                            <div class="widget-stacked">
                                <header class="widget_header-inline heading_group">
                                    <h3 class="heading-heavy-size-4">Retina Ready</h3>
                                    <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                                </header>                        
                                <div class="widget_icon-inline button-icon-plain-size-7">
                                    <i class="fa fa-eye"></i>
                                </div> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere consectetur adipiscing suscipit.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="widget_group">
    
    &lt;div class="widget-stacked">                         
        &lt;div class="widget_icon-inline button-icon-plain-size-7">
            &lt;i class="fa fa-bar-chart">&lt;/i>
        &lt;/div> 
        &lt;header class="widget_header-inline heading_group">
            &lt;h3 class="heading-heavy-size-4">Fast Performance&lt;/h3>
            &lt;h4 class="heading-light-uppercase-brand-1">Donec finibus fringer&lt;/h4>
        &lt;/header>  
        &lt;p>...&lt;/p>
    &lt;/div>
    
    ...
    
&lt;/div>
</pre>
                
                <hr class="hrule-stripes" />
                
                <div class="object">
                        
                    <div class="widget_group-grid row-flow">
                        
                        <!-- Feature 1 -->
                        <a class="widget-block-borderLeft span-4" href="#modular-ui">
                            <div class="widget_icon-inline button-icon-plain-size-6">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <header class="widget_header-inline heading_group">
                                <h3 class="heading">100% Modular UI</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-1">Take complete control</h4>
                            </header>
                        </a>
                        
                        <!-- Feature 2 -->
                        <a class="widget-block-borderLeft span-4" href="#page-builder">
                            <div class="widget_icon-inline button-icon-plain-size-6">
                                <i class="fa fa-arrows"></i>
                            </div>
                            <header class="widget_header-inline heading_group">
                                <h3 class="heading">Page Builder</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-1">Drag & Drop Page Builder</h4>
                            </header>
                        </a>
                        
                        <!-- Feature 3 -->
                        <a class="widget-block-borderLeft span-4" href="#unique-configuration">
                            <div class="widget_icon-inline button-icon-plain-size-6">
                                <i class="fa fa-cog"></i>
                            </div>
                            <header class="widget_header-inline heading_group">
                                <h3 class="heading">Unique Configuration</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-1">Sass Powered Configuration</h4>
                            </header>
                        </a>
                        
                        <!-- Feature 4 -->
                        <a class="widget-block-borderLeft span-4" href="#custom-grid-system">
                            <div class="widget_icon-inline button-icon-plain-size-6">
                                <i class="fa fa-th-large"></i>
                            </div>
                            <header class="widget_header-inline heading_group">
                                <h3 class="heading">Custom Grid System</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-1">Our Own Powerful Grid</h4>
                            </header>
                        </a>
                        
                        <!-- Feature 5 -->
                        <a class="widget-block-borderLeft span-4" href="#intelligent-theming">
                            <div class="widget_icon-inline button-icon-plain-size-6">
                                <i class="fa fa-eyedropper"></i>
                            </div>
                            <header class="widget_header-inline heading_group">
                                <h3 class="heading">Intelligent Theming</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-1">Theming Like Never Before</h4>
                            </header>
                        </a>
                        
                        <!-- Feature 6 -->
                        <a class="widget-block-borderLeft span-4" href="#mobile-optimized">
                            <div class="widget_icon-inline button-icon-plain-size-6">
                                <i class="fa fa-tablet"></i>
                            </div>
                            <header class="widget_header-inline heading_group">
                                <h3 class="heading">Mobile Optimized</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-1">Perfect On Any Device</h4>
                            </header>
                        </a>
                        
                    </div>
                
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="widget_group-grid row-flow">
    
    &lt;a class="widget-block-borderLeft span-4" href="#">
        &lt;div class="widget_icon-inline button-icon-plain-size-6">
            &lt;i class="fa fa-tablet">&lt;/i>
        &lt;/div>
        &lt;header class="widget_header-inline heading_group">
            &lt;h3 class="heading">Mobile Optimized&lt;/h3>
            &lt;h4 class="heading-light-uppercase-brand-1-size-1">Perfect On Any Device&lt;/h4>
        &lt;/header>
    &lt;/a>
    
    ...
    
&lt;/div>
</pre>

                <hr class="hrule-stripes" />
                
                <div class="object">
                        
                    <div class="widget_group row-magic text-center">
                        
                        <!-- Feature 1 -->
                        <a class="widget-block-borderTop-scale span" href="#getting-started">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-power-off"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h4 class="heading-light-uppercase-brand-1">Getting started</h4>
                            </header>
                        </a>
                        
                        <!-- Feature 2 -->
                        <a class="widget-block-borderTop-scale span" href="#configure">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-cog"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h4 class="heading-light-uppercase-brand-1">Configure</h4>
                            </header>
                        </a>
                        
                        <!-- Feature 3 -->
                        <a class="widget-block-borderTop-scale span" href="#build">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-wrench"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h4 class="heading-light-uppercase-brand-1">Build</h4>
                            </header>
                        </a>
                        
                        <!-- Feature 4 -->
                        <a class="widget-block-borderTop-scale span" href="#deploy">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h4 class="heading-light-uppercase-brand-1">Deploy</h4>
                            </header>
                        </a>
                        
                    </div>
                    
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="widget_group row text-center">
    
    &lt;a class="widget-block-borderTop-scale span-3" href="#">
        &lt;div class="widget_icon button-icon-plain-size-8">
            &lt;i class="fa fa-rocket">&lt;/i>
        &lt;/div>
        &lt;header class="widget_header heading_group">
            &lt;h4 class="heading-light-uppercase-brand-1">Deploy&lt;/h4>
        &lt;/header>
    &lt;/a>
    
    ...
    
&lt;/div>
</pre>
                
                <hr class="hrule-stripes" />
                
                <div class="object">
                        
                    <div class="widget_group row-magic text-center">
                    
                        <!-- Feature 1 -->
                        <div class="widget-borderTop-highlight-block-scale span">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h3 class="heading-heavy-size-4">100% Responsive</h3>
                                <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
                        </div>
                        
                        <!-- Feature 2 -->
                        <div class="widget-borderTop-highlight-block-scale span">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-clipboard"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h3 class="heading-heavy-size-4">Simple Page Builder</h3>
                                <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
                        </div>
                        
                        <!-- Feature 3 -->
                        <div class="widget-borderTop-highlight-block-scale span">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-photo"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h3 class="heading-heavy-size-4">Retina Ready</h3>
                                <h4 class="heading-light-uppercase-brand-1">Donec finibus fringer</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit.</p>
                        </div>
                        
                    </div><!-- Features Row -->
                    
                </div>
                    
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="widget_group row text-center">
 
    &lt;div class="widget-borderTop-highlight-block-scale span-4">
        &lt;div class="widget_icon button-icon-plain-size-8">
            &lt;i class="fa fa-photo">&lt;/i>
        &lt;/div>
        &lt;header class="widget_header heading_group">
            &lt;h3 class="heading-heavy-size-4">Retina Ready&lt;/h3>
            &lt;h4 class="heading-light-uppercase-brand-1">Donec finibus fringer&lt;/h4>
        &lt;/header>
        &lt;p>...&lt;/p>
    &lt;/div>
    
    ...
    
&lt;/div>
</pre>
                        
                <hr class="hrule-stripes" />
                
                <div class="object">
                    
                    <div class="row text-center">
                        
                        <div class="widget-card span-4">
                            <div class="thumbnail">
                                <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg">
                            </div>
                            <div class="widget_content">
                                <header class="heading_group">
                                    <h3 class="heading-heavy-size-3">Leather Jackets</h3>
                                    <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                                </header>
                            </div>
                        </div>
                        
                        <div class="widget-card span-4">
                            <div class="thumbnail">
                                <img src="<?php echo appDir ?>/images/wallpapers/bg-3.jpg">
                            </div>
                            <div class="widget_content">
                                <header class="heading_group">
                                    <h3 class="heading-heavy-size-3">Summer Collection</h3>
                                    <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                                </header>
                            </div>
                        </div>
                        
                        <div class="widget-card span-4">
                            <div class="thumbnail">
                                <img src="<?php echo appDir ?>/images/wallpapers/bg-6.jpg">
                            </div>
                            <div class="widget_content">
                                <header class="heading_group">
                                    <h3 class="heading-heavy-size-3">TV Advert</h3>
                                    <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                                </header>
                            </div>
                        </div>
                        
                    </div>
                
                </div>
                    
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="row text-center">

    &lt;div class="widget-card span-4">
        &lt;div class="thumbnail">
            &lt;img src="/images/wallpapers/bg-7.jpg">
        &lt;/div>
        &lt;div class="widget_content">
            &lt;header class="heading_group">
                &lt;h3 class="heading-heavy-size-3">Leather Jackets&lt;/h3>
                &lt;h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer&lt;/h4>
            &lt;/header>
        &lt;/div>
    &lt;/div>
    
    ...
    
&lt;/div>
</pre>
            
                <hr class="hrule-stripes" />

                <div class="object">
                        
                    <div class="row-flow">
                        
                        <article class="widget-article span-4">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls icon_group-small">
                                        <a href="<?php echo appDir ?>/images/wallpapers/bg-5.jpg" class="button-icon-border-circle" rel="lightbox">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="/app/images/wallpapers/bg-5.jpg">
                            </div>
                            <header class="heading_group">
                                <div class="heading_date">
                                    <div>Sep</div>
                                    <div>23</div>
                                </div>
                                <h2 class="heading-heavy-size-4 font-2">Lorem ipsum dolor</h2>
                                <h3 class="heading-light-size-2">Posted in <a href="#">HTML Themes</a></h3>
                            </header>
                            <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id...</p>
                            <small>
                                <div class="row-block">
                                    <div class="span va-middle">
                                        <ul class="list-reset-inline">
                                            <li><i class="fa fa-user"></i> <a href="#">John Doe</a></li>
                                        </ul>
                                    </div>
                                    <div class="span va-middle text-right">
                                        <a href="#" class="button-primary">Read More</a>
                                    </div>
                                </div>
                            </small>    
                        </article>
                        
                        <article class="widget-article span-4">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls icon_group-small">
                                        <a href="<?php echo appDir ?>/images/wallpapers/bg-6.jpg" class="button-icon-border-circle" rel="lightbox">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="/app/images/wallpapers/bg-6.jpg">
                            </div>
                            <header class="heading_group">
                                <div class="heading_date">
                                    <div>Sep</div>
                                    <div>23</div>
                                </div>
                                <h2 class="heading-heavy-size-4 font-2">Lorem ipsum dolor</h2>
                                <h3 class="heading-light-size-2">Posted in <a href="#">HTML Themes</a></h3>
                            </header>
                            <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id...</p>
                            <small>
                                <div class="row-block">
                                    <div class="span va-middle">
                                        <ul class="list-reset-inline">
                                            <li><i class="fa fa-user"></i> <a href="#">John Doe</a></li>
                                        </ul>
                                    </div>
                                    <div class="span va-middle text-right">
                                        <a href="#" class="button-primary">Read More</a>
                                    </div>
                                </div>
                            </small>    
                        </article>
                        
                        <article class="widget-article span-4">
                            <div class="thumbnail">
                                <div class="thumbnail_mask">
                                    <div class="thumbnail_controls icon_group-small">
                                        <a href="<?php echo appDir ?>/images/wallpapers/bg-7.jpg" class="button-icon-border-circle" rel="lightbox">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="#" class="button-icon-border-circle">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <img src="/app/images/wallpapers/bg-7.jpg">
                            </div>
                            <header class="heading_group">
                                <div class="heading_date">
                                    <div>Sep</div>
                                    <div>23</div>
                                </div>
                                <h2 class="heading-heavy-size-4 font-2">Lorem ipsum dolor</h2>
                                <h3 class="heading-light-size-2">Posted in <a href="#">HTML Themes</a></h3>
                            </header>
                            <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat felis consequat id...</p>
                            <small>
                                <div class="row-block">
                                    <div class="span va-middle">
                                        <ul class="list-reset-inline">
                                            <li><i class="fa fa-user"></i> <a href="#">John Doe</a></li>
                                        </ul>
                                    </div>
                                    <div class="span va-middle text-right">
                                        <a href="#" class="button-primary">Read More</a>
                                    </div>
                                </div>
                            </small>    
                        </article>
        
                    </div>
                    
                </div>
                    
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="row-flow">

    &lt;article class="widget-article span-4">
        &lt;div class="thumbnail">
            &lt;div class="thumbnail_mask">
                &lt;div class="thumbnail_controls icon_group-small">
                    &lt;a href="/images/wallpapers/bg-7.jpg" class="button-icon-border-circle" rel="lightbox">
                        &lt;i class="fa fa-search">&lt;/i>
                    &lt;/a>
                    &lt;a href="#" class="button-icon-border-circle">
                        &lt;i class="fa fa-link">&lt;/i>
                    &lt;/a>
                &lt;/div>
            &lt;/div>
            &lt;img src="/app/images/wallpapers/bg-7.jpg">
        &lt;/div>
        &lt;header class="heading_group">
            &lt;div class="heading_date">
                &lt;div>Sep&lt;/div>
                &lt;div>23&lt;/div>
            &lt;/div>
            &lt;h2 class="heading-heavy-size-4 font-2">Lorem ipsum dolor&lt;/h2>
            &lt;h3 class="heading-light-size-2">Posted in &lt;a href="#">HTML Themes&lt;/a>&lt;/h3>
        &lt;/header>
        &lt;p class="blurb">...&lt;/p>
        &lt;small>
            &lt;div class="row-block">
                &lt;div class="span va-middle">
                    &lt;ul class="list-reset-inline">
                        &lt;li>&lt;i class="fa fa-user">&lt;/i> &lt;a href="#">John Doe&lt;/a>&lt;/li>
                    &lt;/ul>
                &lt;/div>
                &lt;div class="span va-middle text-right">
                    &lt;a href="#" class="button-primary">Read More&lt;/a>
                &lt;/div>
            &lt;/div>
        &lt;/small>    
    &lt;/article>
    
    ...
    
&lt;/div>
</pre>
                
                <hr class="hrule-stripes" />
                
                <div class="object">
                
				    <?php socialWidgets() ?>
                    
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="row-block text-center">

    &lt;a class="widget-tub span bg-facebook" href="#">
        &lt;div class="widget_lid">
            &lt;div class="widget_sticker button-icon-plain-size-6">
                &lt;i class="fa fa-facebook">&lt;/i>
            &lt;/div>
        &lt;/div>
        &lt;div class="widget_content">
            &lt;header class="heading_group">
                &lt;h3 class="heading-size-5">18.2k&lt;/h3>
                &lt;h3 class="heading-size-2-light-uppercase">Likes&lt;/h3>
            &lt;/header>
        &lt;/div>
        &lt;div class="button-block relative font-2">Facebook&lt;/div>
    &lt;/a>
    
    ...
    
&lt;/div>
</pre>
                
                <hr class="hrule-stripes" />
                
                <div class="relative object">
                    <div class="row-no-gutter">
                        <a
                            href="#" 
                            class="widget-feature-zoom span-4"
                            data-bg="<?php echo appDir ?>/images/wallpapers/bg-6.jpg"
                        >
                            <div class="corner-ribbon-pink" data-ribbon="Hot"></div>
                            <header class="widget_header heading_group">
                                <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                                <h5 class="heading-light">Dolor Sit Amet</h4>
                            </header>
                        </a>
                        <a 
                            href="#" 
                            class="widget-feature-zoom span-4"
                            data-bg="<?php echo appDir ?>/images/wallpapers/bg-3.jpg"
                        >
                            <div class="corner-ribbon-green" data-ribbon="New"></div>
                            <header class="widget_header heading_group">
                                <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                                <h5 class="heading-light">Dolor Sit Amet</h4>
                            </header>
                        </a>
                        <a
                            href="#"  
                            class="widget-feature-zoom span-4 col-full"
                            data-bg="<?php echo appDir ?>/images/wallpapers/bg-4.jpg"
                        >
                            <header class="widget_header heading_group">
                                <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                                <h5 class="heading-light">Dolor Sit Amet</h4>
                            </header>
                        </a>
                    </div>
                    <div class="row-no-gutter">
                        <a 
                            href="#" 
                            class="widget-feature-zoom span-8"
                            data-bg="<?php echo appDir ?>/images/wallpapers/bg-5.jpg"
                        >
                            <header class="widget_header heading_group">
                                <h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum</h4>
                                <h5 class="heading-light">Dolor Sit Amet</h4>
                            </header>
                        </a>
                    </div>
                </div>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="relative">
    &lt;div class="row-no-gutter">
        &lt;a
            href="#" 
            class="widget-feature-zoom span-4"
            data-bg="/images/wallpapers/bg-6.jpg"
        >
            &lt;div class="corner-ribbon-pink" data-ribbon="Hot">&lt;/div>
            &lt;header class="widget_header heading_group">
                &lt;h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum&lt;/h4>
                &lt;h5 class="heading-light">Dolor Sit Amet&lt;/h4>
            &lt;/header>
        &lt;/a>
        &lt;a 
            href="#" 
            class="widget-feature-zoom span-4"
            data-bg="/images/wallpapers/bg-3.jpg"
        >
            &lt;div class="corner-ribbon-green" data-ribbon="New">&lt;/div>
            &lt;header class="widget_header heading_group">
                &lt;h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum&lt;/h4>
                &lt;h5 class="heading-light">Dolor Sit Amet&lt;/h4>
            &lt;/header>
        &lt;/a>
        &lt;a
            href="#"  
            class="widget-feature-zoom span-4 col-full"
            data-bg="/images/wallpapers/bg-4.jpg"
        >
            &lt;header class="widget_header heading_group">
                &lt;h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum&lt;/h4>
                &lt;h5 class="heading-light">Dolor Sit Amet&lt;/h4>
            &lt;/header>
        &lt;/a>
    &lt;/div>
    &lt;div class="row-no-gutter">
        &lt;a 
            href="#" 
            class="widget-feature-zoom span-8"
            data-bg="/images/wallpapers/bg-5.jpg"
        >
            &lt;header class="widget_header heading_group">
                &lt;h4 class="heading-heavy-uppercase-size-4 font-2">Lorem Ipsum&lt;/h4>
                &lt;h5 class="heading-light">Dolor Sit Amet&lt;/h4>
            &lt;/header>
        &lt;/a>
    &lt;/div>
&lt;/div>
</pre>
                
			</div><!-- container-small -->
			
		</section>
        
        <div class="container-small">
            <h2 class="heading-light-size-5">Full-Screen Examples</h2>
        </div>
 
        <section class="section-primary-mini">
                
            <div class="widget_group-panels row-block text-center">
                
                <!-- Feature 1 -->
                <div class="widget-block-panel span">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">100% Responsive</h3>
                        <h4 class="heading-light-uppercase-brand-1">Optimized for all devices</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="widget-block-panel span">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-clipboard"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">Simple Page Builder</h3>
                        <h4 class="heading-light-uppercase-brand-1">Visual composer included</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="widget-block-panel span">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-photo"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">Retina Ready</h3>
                        <h4 class="heading-light-uppercase-brand-1">Crystal clear display</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="widget-block-panel span">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-eyedropper"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-heavy-size-4">Unlimited Colors</h3>
                        <h4 class="heading-light-uppercase-brand-1">Have any color you want</h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et erat posuere suscipit. Phasellus congue scelerisque lacus.</p>
                </div>
                
            </div><!-- Features Row 1 -->
        
        </section>
            
        <div class="container-small">
             
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="widget_group row-block text-center">

    &lt;div class="widget-block-panel span">
        &lt;div class="widget_icon button-icon-plain-size-8">
            &lt;i class="fa fa-eyedropper">&lt;/i>
        &lt;/div>
        &lt;header class="widget_header heading_group">
            &lt;h3 class="heading-heavy-size-4">Unlimited Colors&lt;/h3>
            &lt;h4 class="heading-light-uppercase-brand-1">Have any color you want&lt;/h4>
        &lt;/header>
        &lt;p>...&lt;/p>
    &lt;/div>
    
    ...
    
&lt;/div>
</pre>

        </div>
 
        <section class="section-primary-mini">
                
            <div class="widget_group-center-panels row-no-gutter">
                
                <a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-television"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-light-uppercase-brand-1">Billboard</h3>
                    </header>
                </a>
                
                <a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-light-uppercase-brand-1">Breadcrumb</h3>
                    </header>
                </a>
                
                <a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-th"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-light-uppercase-brand-1">Mega Menu</h3>
                    </header>
                </a>
        
                <a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-chevron-circle-down"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-light-uppercase-brand-1">Dropdown</h3>
                    </header>
                </a>
                
                <a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-globe"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-light-uppercase-brand-1">Earth Slider</h3>
                    </header>
                </a>
                
                <a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-th-list"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h3 class="heading-light-uppercase-brand-1">Flyout Navigation</h3>
                    </header>
                </a>
                
            </div>
            
        </section>
            
        <div class="container-small">
             
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="widget_group-center row-no-gutter">

    &lt;a class="widget-block-panel-small span-2" href="#">
        &lt;div class="widget_icon button-icon-plain-size-8">
            &lt;i class="fa fa-th-list">&lt;/i>
        &lt;/div>
        &lt;header class="widget_header heading_group">
            &lt;h3 class="heading-light-uppercase-brand-1">Flyout Navigation&lt;/h3>
        &lt;/header>
    &lt;/a>
    
    ...
    
&lt;/div>
</pre>

        </div>
 
        <section class="section-primary-mini">
            
            <div class="row-block text-center">
                
                <div class="widget-spectrum-quarter span-3">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-code"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h4 class="heading-size-7"><span>14266</span></h4>
                        <h5 class="heading-light">Lines of code</h5>
                    </header>
                </div>
                
                <div class="widget-spectrum-quarter span-3">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h4 class="heading-size-7"><span>136</span></h4>
                        <h5 class="heading-light">Completed projects</h5>
                    </header>
                </div>
                
                <div class="widget-spectrum-quarter span-3">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-users"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h4 class="heading-size-7"><span>28</span></h4>
                        <h5 class="heading-light">Happy clients</h5>
                    </header>
                </div>
                
                <div class="widget-spectrum-quarter span-3">
                    <div class="widget_icon button-icon-plain-size-8">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <header class="widget_header heading_group">
                        <h4 class="heading-size-7"><span>3254</span></h4>
                        <h5 class="heading-light">Sales</h5>
                    </header>
                </div>
                
            </div>
            
        </section>
            
        <div class="container-small">
             
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="row-block text-center">
    
    &lt;div class="widget-spectrumQuarter span-3">
        &lt;div class="widget_icon button-icon-plain-size-8">
            &lt;i class="fa fa-desktop">&lt;/i>
        &lt;/div>
        &lt;header class="widget_header heading_group">
            &lt;h4 class="heading-size-7">&lt;span>3254&lt;/span>&lt;/h4>
            &lt;h5 class="heading-light">>Sales&lt;/h5>
        &lt;/header>
    &lt;/div>
    
    ...
    
&lt;/div>
</pre>

        </div>

        <section class="section-primary-mini">
            
            <div class="container-small">
                
                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>Widgets can be customized using the following options:</p>
                
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
                            <td><code>block-background</code></td>
                            <td><code class="value">color('greyscale', 'white')</code></td>
                            <td>The background for a widget with the <code>block</code> modifier.</td>
                        </tr>
                        <tr>
                            <td><code>block-padding</code></td>
                            <td><code class="value">2.5em 1em</code></td>
                            <td>The padding for a widget with the <code>block</code> modifier.</td>
                        </tr>
                        <tr>
                            <td><code>block-small-padding</code></td>
                            <td><code class="value">1.5em 1em</code></td>
                            <td>The padding for a widget with <code>block</code> and <code>small</code> modifiers.</td>
                        </tr>
                        <tr>
                            <td><code>block-fill-background</code></td>
                            <td><code class="value">color('brand', 'primary')</code></td>
                            <td>The background for a widget with  <code>block</code> and <code>fill</code> modifiers.</td>
                        </tr>
                        <tr>
                            <td><code>block-fill-color</code></td>
                            <td><code class="value">color('greyscale', 'white')</code></td>
                            <td>The text color for a widget with  <code>block</code> and <code>fill</code> modifiers.</td>
                        </tr>
                        <tr>
                            <td><code>block-hover-background</code></td>
                            <td><code class="value">color('brand', 'primary')</code></td>
                            <td>The background for a widget with the <code>block</code> modifier when hovered.</td>
                        </tr>
                        <tr>
                            <td><code>block-hover-color</code></td>
                            <td><code class="value">color('greyscale', 'white')</code></td>
                            <td>The text color for a widget with the <code>block</code> modifier when hovered.</td>
                        </tr>
                        <tr>
                            <td><code>block-hover-fill-background</code></td>
                            <td><code class="value">darken(color('brand', 'primary'), 10%)</code></td>
                            <td>The background for a widget with <code>block</code> and <code>fill</code> modifiers when hovered.</td>
                        </tr>
                        <tr>
                            <td><code>block-hover-panel-border-color</code></td>
                            <td><code class="value">color('brand', 'primary')</code></td>
                            <td>The border-color for a widget with <code>block</code> and <code>panel</code> modifiers when hovered.</td>
                        </tr>
                        <tr>
                            <td><code>panel-padding</code></td>
                            <td><code class="value">4%</code></td>
                            <td>The padding for a widget with the <code>panel</code> modifier.</td>
                        </tr>
                        <tr>
                            <td><code>panel-border</code></td>
                            <td><code class="value">1px solid color('greyscale', 'grey-2')</code></td>
                            <td>The border for a widget with the <code>panel</code> modifier.</td>
                        </tr>
                        <tr>
                            <td><code>panel-small-padding</code></td>
                            <td><code class="value">4% 2%</code></td>
                            <td>The padding for a widget with <code>panel</code> and <code>small</code> modifiers.</td>
                        </tr>
                        <tr>
                            <td><code>border</code></td>
                            <td><code class="value">0.6em solid rgba(black, 0.15)</code></td>
                            <td>The border for a widget using either the <code>borderTop</code> or <code>borderLeft</code> modifiers.</td>
                        </tr>
                        <tr>
                            <td><code>border-highlight-color</code></td>
                            <td><code class="value">color('brand', 'primary')</code></td>
                            <td>The border color for a widget using either the <code>borderTop</code> or <code>borderLeft</code> and <code>highlight</code> modifiers.</td>
                        </tr>
                        <tr>
                            <td><code>border-highlight-hover-color</code></td>
                            <td><code class="value">rgba(black, 0.15)</code></td>
                            <td>The border color for a widget using either the <code>borderTop</code> or <code>borderLeft</code> and <code>highlight</code> modifiers when hovered.</td>
                        </tr>
                        <tr>
                            <td><code>scale</code></td>
                            <td><code class="value">1.1</code></td>
                            <td>The size which a widget using the <code>scale</code> modifier should scale to when hovered.</td>
                        </tr>
                        <tr>
                            <td><code>zoom-bg-scale</code></td>
                            <td><code class="value">1.3</code></td>
                            <td>The size which the background image in a widget using the <code>zoom</code> modifier should scale to when hovered.</td>
                        </tr>
                        <tr>
                            <td><code>spectrum-quarter-padding</code></td>
                            <td><code class="value">2.5em 1em</code></td>
                            <td>The padding for widgets using the <code>spectrumQuarter</code> modifier.</td>
                        </tr>
                        <tr>
                            <td><code>spectrum-quarter-large-padding</code></td>
                            <td><code class="value">4%</code></td>
                            <td>The padding for widgets using <code>spectrumQuarter</code> and <code>large</code> modifiers.</td>
                        </tr>
                        <tr>
                            <td><code>tub-color</code></td>
                            <td><code class="value">color('greyscale', 'white')</code></td>
                            <td>The text color for the <code>tub</code> component.</td>
                        </tr>
                        <tr>
                            <td><code>tub-background</code></td>
                            <td><code class="value">rgba(black, 0.4)</code></td>
                            <td>The background for the widget <code>tub</code> component.</td>
                        </tr>
                        <tr>
                            <td><code>feature-padding</code></td>
                            <td><code class="value">15% 2em 2em</code></td>
                            <td>The padding for widgets using the <code>feature</code> modifier.</td>
                        </tr>
                        <tr>
                            <td><code>icon-color</code></td>
                            <td><code class="value">color('greyscale', 'grey-3')</code></td>
                            <td>The color for the widget <code>icon</code> component.</td>
                        </tr>
                    </tbody>
                </table>

				<p>To change one of the above values, pass your new value(s) to the <code>widgets()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>   
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include widgets((
    'block-padding' : 2em,
    'zoom-bg-scale' : 1.5
));
</pre>  
            
            </div>
                
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