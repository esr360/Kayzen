<?php 
	include ('../app.php');
	// page config
	$title = 'Documentation';
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
				
				<div class="widget_group-large row-magic text-center" id="page-overview">
					
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
			
				<h2 class="heading-light-size-5" id="getting-started">Getting Started</h2>
				
				<p>It's great that you've decided to checkout Kayzen! How you go about buildig your next project with it depends on many things such as your prefered workflow, your skill level, amount of time you have etc. This page will cover the basics of all the different ways Kayzen can be adapted to suit any need. It is assumed that you have at least basic HTML, CSS and JavaScript/jQuery understanding.</p>
                
                <p>To start from the bottom up, Kayzen is built using HTML5, CSS3 and jQuery. At the bare minimum, each Kayzen wepage should be served the following JavaScript and CSS assets:</p>
                
                <ul class="list-clear">
                    <li>app/build/scripts/<strong>jquery.js</strong></li>
                    <li>app/build/scripts/<strong>app.js</strong></li>
                    <li>app/build/scripts/<strong>pseudojQuery-start.js</strong></li>
                    <li>app/build/scripts/<strong>pseudojQuery-end.js</strong></li>
                    <li>app/build/styles/<strong>app.css</strong></li>
                </ul>
                
                <p>The only files that would ever need to be modified are <strong>app.js</strong> and <strong>app.css</strong>. The other files (jQuery and pseudojQuery) are JavaScript libraries which can be left untouched. Read more about pseudojQuery <a href="#">here</a>.</p>
                
                <p>Kayzen comes with further JavaScript and CSS files which are only used for certain pages, these will be covered later. If you're desired workflow is to directly work on these files without touching the source files they are generated from (i.e. you are not comfortable with pre-processing and concatening), a lot of this documentation may not apply to you, and you will lose out on many of the fantastic features Kayzen has to offer.</p>
                
                <p>If you are not yet familiar with Sass/SCSS or CSS pre-processing, checkout <a href="http://www.webdesignerdepot.com/2013/11/the-beginners-guide-to-sass/" target="blank">this article</a> to understand the basis about what it is and why it's beneficial. Once you've decided to make the leap, you can read about how to setup your workflow to include Sass by reading <a href="https://medium.com/@ricardozea/sass-for-beginners-the-friendliest-guide-about-how-to-install-use-sass-on-windows-22ff4a32c1f7#.wrryv6w1r" target="blank">this article</a>.</p>
                
                <p>At this stage, it is not essential to know about JavaScript concatenation. As long as you are comfortable using Sass you will gain most of the benefits Kayzen has to offer. Having said that, if you are comfortable combining JavaScript files, then continue reading.</p>
                
				<h3 class="heading-light-size-3-uppercase" id="building-kayzen">Building Kayzen</h2>                
                
                <p class="alert-bar-error">The following section is only relevant if your workflow involves building Kayzen yourself from the source files form Github.</p>
                
                <p>Both the default provided <code>app.js</code> and <code>app.css</code> contain code from several third party libraries and plugins. The files for these libraries and plugins reside in the <b>app/vendor</b> folder, and include the following:</p>
                
                <ul class="list-clear">
                    <li><a href="#">Englighter</a></li>
                    <li><a href="#">Font-Awesome</a></li>
                    <li><a href="#">Infinite-AJAX-Scroll</a></li>
                    <li><a href="#">Isotope</a></li>
                    <li><a href="#">jQuery</a></li>
                    <li><a href="#">jquery-animateNumber</a></li>
                    <li><a href="#">Kayzen-GS</a></li>
                    <li><a href="#">Magnific-Popup</a></li>
                    <li><a href="#">Masonry</a></li>
                    <li><a href="#">Modular</a></li>
                    <li><a href="#">MooTools-Core</a></li>
                    <li><a href="#">normalize-scss</a></li>
                    <li><a href="#">Owl-Carousel</a></li>
                    <li><a href="#">pseudojQuery</a></li>
                    <li><a href="#">SassyJSON</a></li>
                    <li><a href="#">ScrollTrigger</a></li>
                    <li><a href="#">Stellar</a></li>
                    <li><a href="#">TweeCool</a></li>
                </ul>
                
                <p>The <b>app.js</b> file contains the following third party JavaScript files:</p>
                
                <ul class="list-clear">
                    <li>app/vendor/Owl-Carousel/src/js/owl.carousel.js</li>
                    <li>app/vendor/Owl-Carousel/src/js/owl.animate.js</li>
                    <li>app/vendor/Owl-Carousel/src/js/owl.autoheight.js</li>
                    <li>app/vendor/Owl-Carousel/src/js/owl.autoplay.js</li>
                    <li>app/vendor/Owl-Carousel/src/js/owl.compiled.js</li>
                    <li>app/vendor/Owl-Carousel/src/js/owl.hash.js</li>
                    <li>app/vendor/Owl-Carousel/src/js/owl.lazyload.js</li>
                    <li>app/vendor/Owl-Carousel/src/js/owl.navigation.js</li>
                    <li>app/vendor/Owl-Carousel/src/js/owl.video.js</li>
                    <li>app/vendor/Magnific-Popup/src/js/core.js</li>
                    <li>app/vendor/Magnific-Popup/src/js/gallery.js</li>
                    <li>app/vendor/Magnific-Popup/src/js/image.js</li>
                    <li>app/vendor/Magnific-Popup/src/js/retina.js</li>
                    <li>app/vendor/Modular/src/modular.js</li>
                    <li>app/vendor/jquery-animateNumber/jquery.animateNumber.js</li>
                    <li>app/vendor/Kayzen.ScrollSpy/src/Kayzen.ScrollSpy.js</li>
                    <li>app/vendor/ScrollTrigger/src/ScrollTrigger.js</li>
                    <li>app/vendor/Stellar/src/jquery.stellar.js</li>
                    <li>app/vendor/TweeCool/src/tweecool.js</li>
                </ul>
                
                <p>The other files which are includes in <b>app.js</b> are:</p>
                
                <ul class="list-clear">
                    <li>app/modules/utilities/core/core.js</li>
                    <li>app/includes/*.js</li>
                    <li>app/modules/elements/**/*.js</li>
                    <li>app/modules/objects/**/*.js</li>
                    <li>app/themes/YOURTHEME/YOURTHEME.js</li>
                </ul>
                
                <p>You will notice that all of the used third party resources exist on Github, and as such are included as <a href="https://git-scm.com/book/en/v2/Git-Tools-Submodules" target="blank">Git Submodules</a>. If you have purchased a license for Kayzen, you are entitled to access to the private Github repository <a href="https://github.com/esr360/Kayzen" target="blank">located here</a>. If you do not already have access, <a href="#">get in touch with us</a> to gain access.</p>
                
                <p>To clone Kayzen from the official repository and all of its submodules, run the following code on your command line in the directory you wish Kayzen to be cloned into:</p>
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
git clone https://github.com/esr360/Kayzen.git --recursive
</pre>
			
                <p class="alert-bar-info">The <b>--recursive</b> flag is required to install all the git submodules.</p>
                
                <p>If you are using Node, you can run <code>npm install</code> to allow you to use Grunt to build Kayzen from the source files. You can then run <code>grunt</code> to run the default Grunt tasks. If you are using another build tool, here are the key things it should encompass to successfully build Kayzen:</p>
            
				<h2 class="heading-light-size-5" id="configure">Configure</h2>
				
				<p>Kayzen is structured in a modular way, which makes things easier for everyone. As well as global configuration each module can be individually configured, giving you complete control and flexibility when customizing it for your project.</p>
                
                <p>Every module is imported in the main app.scss file:</p>
                
                <ul class="list-clear">
                    <li>app/<strong>app.scss</strong></li>
                </ul>
                
                <p>This is the root file for your project. As well as importing all the Sass modules it is also used to set which theme your project should use (more on this later), the path to your assets, and the option to output all the configuration to JSON to allow it to be accessed in your project's JavaScript (again, more on this later).</p>
                
                <p>In terms of the Kayzen modules that are imported, for the most part importing the file will <b>not</b> output any code, it merely gives your codebase the ability to include it should you so desire. This is to allow you to create different themes which may or may not use all avilable modules. Any modules your theme doesn't use won't get output in the compiled CSS.</p>
                
                <p>Themes are located in the <strong>themes</strong> directory. Each theme comes with a <strong>.scss</strong> file and a <strong>.js</strong> file. Kayzen provides several themes for you to choose from:</p>
                
                <ul class="list-clear">
                    <li>app/themes/<strong>Kayzen</strong>
                </ul>
			
                <p>To set which theme your project should use, set the <code>$theme</code> variable at the top of <b>app.scss</b>. By default this is set to <code>Kayzen</code>.</p>
                
                <p>You can now control every configurable aspect of your project from <code>app/themes/Kayzen/_kayzen.scss</code>. This file is where all the modules which are used by the theme are included, and also where you can pass any custom options to them. There are three types of modules, for a list of all of them and their available options, see the following links:</p>
                
                <ul class="list-clear">
                    <li><a href="#">app/modules/<b>elements</b></a></li>
                    <li><a href="#">app/modules/<b>objects</b></a></li>
                    <li><a href="#">app/modules/<b>utilities</b></a></li>
                </ul>
                
                <p>You can pass a custom option to a module in your theme's file (e.g. app/themes/Kayzen/_kayzen.scss) like so:</p>
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include accordions((
    'section-margin'      : 1.4em,
    'title-radius'        : 0.4em,
    'title-active-radius' : 0.4em 0.4em 0 0,
    'content-radius'      : 0 0 0.4em 0.4em
));
</pre>

                <p>If the module you are editing has nestable options, you would change them like so:</p>

<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include palettes((
    'brand': (
        'primary'   : #61BD6D,
        'secondary' : #00A885
    ),
    'validation': (
        'valid'     : MediumSeaGreen 
    )
));
</pre>

                <p>To get started quickly, some of the most common modules you might want to configure might include:</p>
                
                <ul class="list-clear">
                    <li><strong>Colors:</strong> app/modules/utilities/<a href="#">color-palette</a></li>
                    <li><strong>Breakpoints:</strong> app/modules/utilities/<a href="#">grid</a></li>
                    <li><strong>Fonts:</strong> app/modules/utilities/<a href="#">typography</a></li>
                    <li><strong>Header:</strong> app/modules/objects/<a href="#">header</a></li>
                    <li><strong>Footer:</strong> app/modules/objects/<a href="#">footer</a></li>
                </ul>
            
                <p>Once you have configured all of your desired opions, you can preview all the modules on the <a href="#">Cheatsheet</a> page.</p>
            
				<h2 class="heading-light-size-5" id="build">Build</h2>
				
				<p>Once you have configured all of your modules, you're ready to sart building your pages. Kayzen comes with numerous templates ready-made for you to use for your pages, you can <a href="#">view them here</a>. New templates are added all the time, so be sure to regularly check for updates.</p>
                
                <p>You can either manually build your HTML pages, or you can use the provided <a href="#">page builder</a>. If you are manually building your pages, you may wish to checkout the <a href="#">blank page</a> example to quickly get started with a new page.</p>
			
				<h2 class="heading-light-size-5" id="deploy">Deploy</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ligula vel turpis pellentesque posuere. Vestibulum cursus mi ut nunc ultrices porttitor. Donec imperdiet efficitur hendrerit.</p>
				
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