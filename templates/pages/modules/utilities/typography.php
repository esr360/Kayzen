<?php 
	include ('../../../app.php');
	// page config
	$title = 'Typography';
	$tagLine = 'assets/modules/objects/typography';
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
					<li class="plain"><span>_typography.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/typography" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/typography</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>

                <p>Believe it or not the typography module is used to control your project's typography. It is where you can import web fonts (e.g. Google Fonts), set your project's typefaces, font sizes and colors.</p>
                
                <h3 class="heading-size-3">Default Values</h3>

<pre data-enlighter-language="scss" class="EnlighterJSRAW">
'typefaces': (
    'primary'    : 'Lato',
    'secondary'  : 'Raleway'
),
'colors': (
    'base'       : color('greyscale', 'grey-4'),
    'heading'    : color('greyscale', 'grey-5'),
    'heavy'      : color('greyscale', 'grey-5')
),
'sizes': (
    'base'       : 1em,
    'size-1'     : 0.67em,
    'size-2'     : 0.83em,
    'size-3'     : 1.17em,
    'size-4'     : 1.25em,
    'size-5'     : 1.5em,
    'size-6'     : 2em,
    'size-7'     : 2.4em,
    'size-8'     : 3em,
    'size-9'     : 3.4em
)
</pre>

                <h3 class="heading-size-3">Mixins</h3>
                
                <h4 class="heading-size-2">typography($group, $key)</h4>
                
<pre data-enlighter-language="scss" class="EnlighterJSRAW">
.foo {
    font-family: typography('typefaces', 'primary');
    color: typography('colors', 'heading');
    font-size: typography('sizes', 'size-4');
}
</pre>
                
                <h4 class="heading-size-2">font-size($size, $rem: false)</h4>
                
<pre data-enlighter-language="scss" class="EnlighterJSRAW">
.foo {
    font-size: font-size('size-4');
}
.bar {
    font-size: font-size('size-4', $rem: true);
}
</pre>

				<h2 class="heading-light-size-5">Customizing</h2>
                
                <p>If you want to modify any of the above values, pass your new value(s) to the <code>typography()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include typography((
    'typefaces': (
        'primary'    : 'Comic Sans MS',
    ),
    'colors': (
        'heading'    : #000000
    ),
    'sizes': (
        'size-3'     : 17px,
        'size-7'     : 30px
    )
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