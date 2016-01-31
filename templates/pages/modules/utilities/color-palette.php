<?php 
	include ('../../../app.php');
	// page config
	$title = 'Color Palette';
	$tagLine = 'assets/modules/utilities/color-palette';
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
					<li class="plain"><span>_color-palette.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/color-palette" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/color-palette</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>This module is where all the colors and palettes for your project are stored. All colors are stored as Sass maps and are accessible via the global <code>$palettes</code> variable.</p>
                
                <h3 class="heading-size-3">Default Values</h3>

<pre data-enlighter-language="scss" class="EnlighterJSRAW">
'greyscale': (
    'white'       : #ffffff,
    'grey-1'      : #f8f8f8,
    'grey-2'      : #dee0e2,
    'grey-3'      : #bfc1c3,
    'grey-4'      : #6f777b,
    'grey-5'      : #232627,
    'grey-6'      : #161819,
    'black'       : #000000
),
'brand': (
    'primary'     : #1795C5,
    'secondary'   : #1CBB9B,
    'brand-3'     : #bb1c4d
),
'alert': (
    'error'       : #FECCCB,
    'help'        : #FDEAAD,
    'info'        : #BFE3F9,
    'success'     : #DEE3AB
),
'validation': (
    'valid'       : #00B16A,
    'invalid'     : #D91E18	
),
'social' : (
    'facebook'    : #507CBD,
    'twitter'     : #63CEF2,
    'linkedin'    : #117BB8,
    'github'      : #1C1C1C,
    'skype'       : #63CEF2,
    'pinterest'   : #C92228,
    'instagram'   : #5280A5,
    'rss'         : #FBA933,
    'youtube'     : #CB312E,
    'flickr'      : #ED1384,
    'vimeo'       : #1EB8EB,
    'dribbble'    : #EB4C89,
    'behance'     : #0595FC,
    'deviantart'  : #B3C434,
    'reddit'      : #0D7CCD,
    'google-plus' : #dd4b39,
    'email'       : #6cb42c,
    'stumbleupon' : #47AD20
)
</pre>

                <h3 class="heading-size-3">Modifying Existing Palettes</h3>
                
                <p>If you want to modify any of the existing colors or palettes, pass your new value(s) to the <code>palettes()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include palettes((
    'brand': (
        'primary'     : #3A99D8,
        'secondary'   : #39CB74
    ),
    'new-palette' : (
        'new-color-1' : red,
        'new-color-2' : #F0C330
    )
));
</pre>

                <p>The <code>$palettes</code> variable would now output the following palettes and values:</p>
                
<pre data-enlighter-language="scss" class="EnlighterJSRAW">
'greyscale': (
    'white'       : #ffffff,
    'grey-1'      : #f8f8f8,
    'grey-2'      : #dee0e2,
    'grey-3'      : #bfc1c3,
    'grey-4'      : #6f777b,
    'grey-5'      : #232627,
    'grey-6'      : #161819,
    'black'       : #000000
),
'brand': (
    'primary'     : #3A99D8,
    'secondary'   : #39CB74,
    'brand-3'     : #bb1c4d
),
'alert': (
    'error'       : #FECCCB,
    'help'        : #FDEAAD,
    'info'        : #BFE3F9,
    'success'     : #DEE3AB
),
'validation': (
    'valid'       : #00B16A,
    'invalid'     : #D91E18	
),
'social' : (
    'facebook'    : #507CBD,
    'twitter'     : #63CEF2,
    'linkedin'    : #117BB8,
    'github'      : #1C1C1C,
    'skype'       : #63CEF2,
    'pinterest'   : #C92228,
    'instagram'   : #5280A5,
    'rss'         : #FBA933,
    'youtube'     : #CB312E,
    'flickr'      : #ED1384,
    'vimeo'       : #1EB8EB,
    'dribbble'    : #EB4C89,
    'behance'     : #0595FC,
    'deviantart'  : #B3C434,
    'reddit'      : #0D7CCD,
    'google-plus' : #dd4b39,
    'email'       : #6cb42c,
    'stumbleupon' : #47AD20
),
'new-palette' : (
    'new-color-1' : red,
    'new-color-2' : #F0C330
)
</pre>
                <h3 class="heading-size-3">Custom Functions</h3>
                
                <p>You can access any color or palette by using the following custom functions:</p>
                
                <h3 class="heading-light">palette()</h3>
                
<pre data-enlighter-language="scss" class="EnlighterJSRAW">
@each $brand, $color in palette('brand') {
    ...
}
</pre>      

                <h3 class="heading-light">color()</h3>
                
<pre data-enlighter-language="scss" class="EnlighterJSRAW">
.foo {
    color: color('brand', 'primary');
}
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