<?php 
	include ('../app.php');
	// page config
	$title = 'Documentation';
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
                ]
            ]);
            
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
							<h4 class="heading-light-uppercase-brand-1">Test & Deploy</h4>
						</header>
					</a>
					
				</div>
                
				<h2 class="heading-light-size-6" id="getting-started">Getting Started</h2>
                
                <p class="alert-bar-success"><a href="#build-HTML-templates">Click Here</a> if you just want to get started adding your content to the provided HTML files without touching any other code.</p>
				
				<p>It's great that you've decided to checkout Kayzen! How you go about buildig your next project with it depends on many things such as your prefered workflow, your skill level, amount of time you have etc. This page will cover the basics of all the different ways Kayzen can be adapted to suit any need. It is assumed that you have at least basic HTML, CSS and JavaScript/jQuery understanding.</p>
                
                <p>To start from the bottom up, Kayzen is built using HTML5, CSS3 and jQuery. At the bare minimum, each Kayzen wepage should be served the following JavaScript and CSS assets:</p>
                
                <ul class="list-clear">
                    <li>app/scripts/<strong>jquery.js</strong></li>
                    <li>app/scripts/<strong>app.js</strong></li>
                    <li>app/scripts/<strong>pseudojQuery-start.js</strong></li>
                    <li>app/scripts/<strong>pseudojQuery-end.js</strong></li>
                    <li>app/styles/<strong>app.css</strong></li>
                </ul>
                
                <p>The only files that would ever need to be modified are <strong>app.js</strong> and <strong>app.css</strong>. The other files (jQuery and pseudojQuery) are JavaScript libraries which can be left untouched. Read more about pseudojQuery <a href="https://github.com/esr360/pseudojQuery" target="blank">here</a>.</p>
                
                <p>Kayzen comes with further JavaScript and CSS files which are only used for certain pages, these will be covered later. If you're desired workflow is to directly work on these files without touching the source files they are generated from (i.e. you are not comfortable with pre-processing and concatening), a lot of this documentation may not apply to you, and you will lose out on many of the fantastic features Kayzen has to offer.</p>
                
                <p>If you are not yet familiar with Sass/SCSS or CSS pre-processing, checkout <a href="http://www.webdesignerdepot.com/2013/11/the-beginners-guide-to-sass/" target="blank">this article</a> to understand the basis about what it is and why it's beneficial. Once you've decided to make the leap, you can read about how to setup your workflow to include Sass by reading <a href="https://medium.com/@ricardozea/sass-for-beginners-the-friendliest-guide-about-how-to-install-use-sass-on-windows-22ff4a32c1f7#.wrryv6w1r" target="blank">this article</a>.</p>
                
                <p>At this stage, it is not essential to know about JavaScript concatenation. As long as you are comfortable using Sass you will gain most of the benefits Kayzen has to offer. Having said that, if you are comfortable combining JavaScript files, then continue reading, otherwise head over to the <a href="#configure">configure</a> section</p>
                
				<h3 class="heading-size-5" id="building-kayzen">Building Kayzen</h2>   
                
                <p class="alert-bar-error">The following section is only relevant if your workflow involves building Kayzen yourself from the source files form Github.</p>
                
                <div class="well object"> 
                    <h4 class="heading">Full Requirements</h4>
                    <ul class="list-clear">
                        <li>Minimum Sass 3.4</li>
                        <li>Node</li>
                        <li><a target="blank" href="http://www.graphicsmagick.org/" target="blank">GraphicsMagick*</a></li>
                        <li><a target="blank" href="https://github.com/bezoerb/grunt-php2html#installing-php-cgi">php-cgi*</a></li>
                    </ul>
                    <small>* indicates that the requirement is only for <a href="#enhancedWorkflowFeatures">ehnanced workflow features</a></small>
                </div>
                
                <p>Both the default provided <code>app.js</code> and <code>app.css</code> contain code from several third party libraries and plugins. The files for these libraries and plugins reside in the <b>assets/vendor</b> folder, and include the following:</p>        
                
                <ul class="list-clear">
                    <li><a target="_blank" href="https://github.com/awedoo/aloads">Aloads</a></li>
                    <li><a target="_blank" href="https://github.com/AndiDittrich/EnlighterJS">Englighter</a></li>
                    <li><a target="_blank" href="https://github.com/FortAwesome/Font-Awesome">Font-Awesome</a></li>
                    <li><a target="_blank" href="https://github.com/webcreate/infinite-ajax-scroll">Infinite-AJAX-Scroll</a></li>
                    <li><a target="_blank" href="https://github.com/metafizzy/isotope">Isotope</a></li>
                    <li><a target="_blank" href="https://github.com/jquery/jquery">jQuery</a></li>
                    <li><a target="_blank" href="https://github.com/aishek/jquery-animateNumber">jquery-animateNumber</a></li>
                    <li><a target="_blank" href="https://github.com/esr360/Kayzen-GS">Kayzen-GS</a></li>
                    <li><a target="_blank" href="https://github.com/dimsemenov/Magnific-Popup">Magnific-Popup</a></li>
                    <li><a target="_blank" href="https://github.com/SnapKit/Masonry">Masonry</a></li>
                    <li><a target="_blank" href="https://github.com/esr360/Synergy">Synergy</a></li>
                    <li><a target="_blank" href="https://github.com/mootools/mootools-core">MooTools-Core</a></li>
                    <li><a target="_blank" href="https://github.com/JohnAlbin/normalize-scss">normalize-scss</a></li>
                    <li><a target="_blank" href="https://github.com/smashingboxes/OwlCarousel2">Owl-Carousel</a></li>
                    <li><a target="_blank" href="https://github.com/esr360/pseudojQuery">pseudojQuery</a></li>
                    <li><a target="_blank" href="https://github.com/esr360/SassyJSON">SassyJSON</a></li>
                    <li><a target="_blank" href="https://github.com/esr360/ScrollTrigger">ScrollTrigger</a></li>
                    <li><a target="_blank" href="https://github.com/markdalgleish/stellar.js/">Stellar</a></li>
                    <li><a target="_blank" href="https://github.com/esr360/tweecool-jquery-plugin">TweeCool</a></li>
                </ul>
                
                <p>You will notice that all of the used third party resources exist on Github, and as such are included as <a href="https://git-scm.com/book/en/v2/Git-Tools-Submodules" target="blank">Git Submodules</a>. If you have purchased a license for Kayzen, you are entitled to access to the private Github repository <a href="https://github.com/esr360/Kayzen" target="blank">located here</a>. If you do not already have access, <a href="#">get in touch with us</a> to gain access.</p>
                
                <p>To clone Kayzen from the official repository and all of its submodules, run the following code on your command line in the directory you wish Kayzen to be cloned into:</p>
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
git clone https://github.com/esr360/Kayzen.git --recursive
</pre>
			
                <p class="alert-bar-info">The <b>--recursive</b> flag is required to install all the git submodules.</p>
                
                <p>If you are using Node, you can run <code>npm install</code> to allow you to use Grunt to build Kayzen from the source files. Once installed, you should first run <code>grunt setup</code> to run the initial setup tasks (<a href="#grunt-tasks">learn more</a>). After running <code>npm install</code> you should now have the following Node modules in the <b>node_modules</b> directory:</p> 
                
                <ul class="list-clear">
                    <li><a target="_blank" href="https://github.com/postcss/autoprefixer">autoprefixer</a></li>
                    <li><a target="_blank" href="https://github.com/gruntjs/grunt">grunt</a></li>
                    <li><a target="_blank" href="https://github.com/Manabu-GT/grunt-auto-install">grunt-auto-install</a></li>
                    <li><a target="_blank" href="https://github.com/gruntjs/grunt-contrib-clean">grunt-contrib-clean</a></li>
                    <li><a target="_blank" href="https://github.com/gruntjs/grunt-contrib-concat">grunt-contrib-concat</a></li>
                    <li><a target="_blank" href="https://github.com/gruntjs/grunt-contrib-copy">grunt-contrib-copy</a></li>
                    <li><a target="_blank" href="https://github.com/gruntjs/grunt-contrib-cssmin">grunt-contrib-cssmin</a></li>
                    <li><a target="_blank" href="https://github.com/gruntjs/grunt-contrib-jshint">grunt-contrib-jshint</a></li>
                    <li><a target="_blank" href="https://github.com/gruntjs/grunt-contrib-sass">grunt-contrib-sass</a></li>
                    <li><a target="_blank" href="https://github.com/gruntjs/grunt-contrib-uglify">grunt-contrib-uglify</a></li>
                    <li><a target="_blank" href="https://github.com/gruntjs/grunt-contrib-watch">grunt-contrib-watch</a></li>
                    <li><a target="_blank" href="https://github.com/dylang/grunt-notify">grunt-notify</a></li>
                    <li><a target="_blank" href="https://github.com/pajtai/grunt-php-set-constant">grunt-php-set-constant</a></li>
                    <li><a target="_blank" href="https://github.com/bezoerb/grunt-php2html">grunt-php2html</a></li>
                    <li><a target="_blank" href="https://github.com/nDmitry/grunt-postcss">grunt-postcss</a></li>
                    <li><a target="_blank" href="https://github.com/andismith/grunt-responsive-images">grunt-responsive-images</a></li>
                    <li><a target="_blank" href="https://github.com/Bartvds/grunt-run-grunt">grunt-run-grunt</a></li>
                    <li><a target="_blank" href="https://github.com/ahmednuaman/grunt-scss-lint">grunt-scss-lint</a></li>
                    <li><a target="_blank" href="https://github.com/yoniholmes/grunt-text-replace">grunt-text-replace</a></li>
                    <li><a target="_blank" href="https://github.com/marrone/grunt-tinypng">grunt-tinypng</a></li>
                </ul>
                
                <h4 class="heading-size-4">Ehnanced Workflow Features</h4>
                
                <h5 class="heading-light-uppercase">Installing php-cgi</h5>
                                
                <p>One of the tasks provided in <code>Gruntfile.js</code> generates HTML pages from PHP templates. For this to function, php-cgi must be installed.</p>
                
                <h6 class="heading-size-2">OSX</h5>            
                    
                <p>The <code>php-cgi</code> binary can be installed via Homebrew by tapping the <a href="https://github.com/josegonzalez/homebrew-php">homebrew-php</a> repository:</p>

<pre data-enlighter-language="css" class="EnlighterJSRAW">
brew tap homebrew/dupes
brew tap homebrew/versions
brew tap homebrew/homebrew-php
brew install php56
</pre>

                <h6 class="heading-size-2">Windows</h5>
                
                <p>The <code>php-cgi</code> binary can be installed via <a href="http://www.apachefriends.org/de/xampp-windows.html">XAMPP</a>. Here is how you can add the binary to your PATH: <a href="https://www.monosnap.com/image/psLZ5fpwuSsvJJeZPdklEjxMr">Link</a></p>

                <h6 class="heading-size-2">Ubuntu</h5>

<pre data-enlighter-language="css" class="EnlighterJSRAW">
sudo apt-get install php5-cgi
</pre>          
                
                <h5 class="heading-light-uppercase">Installing GraphicsMagick</h5>
                
                <p>One of the tasks provided in <code>Gruntfile.js</code> creates <code>small</code> and <code>tall</code> variants of some images. For this to function, GraphicsMagick is required.</p>
                
                <p>If you're a Mac user and have <a href="http://brew.sh/" target="blank">Homebrew</a> installed, run:</p>
                
<pre data-enlighter-language="css" class="EnlighterJSRAW">
brew install GraphicsMagick
</pre>

                <p>Otherwise, visit the <a target="blank" href="http://sourceforge.net/projects/graphicsmagick/files/graphicsmagick/">GraphicsMagick downloads page</a>.</p>
                
                <h4 class="heading-size-4">Alternate Build Methods</h4>
                
                <p>If you are using another build tool or want to build Kayzen manually, here are the key things it should encompass to successfully build Kayzen:</p>
                
				<h3 class="heading-uppercase-light-border" id="building-kayzen">JavaScript</h2>  
                
                <p>The app/scripts/<b>app.js</b> file contains the following third party JavaScript files:</p>
                
                <ul class="list-clear">
                    <li>assets/vendor/Owl-Carousel/src/js/owl.carousel.js</li>
                    <li>assets/vendor/Owl-Carousel/src/js/owl.animate.js</li>
                    <li>assets/vendor/Owl-Carousel/src/js/owl.autoheight.js</li>
                    <li>assets/vendor/Owl-Carousel/src/js/owl.autoplay.js</li>
                    <li>assets/vendor/Owl-Carousel/src/js/owl.compiled.js</li>
                    <li>assets/vendor/Owl-Carousel/src/js/owl.hash.js</li>
                    <li>assets/vendor/Owl-Carousel/src/js/owl.lazyload.js</li>
                    <li>assets/vendor/Owl-Carousel/src/js/owl.navigation.js</li>
                    <li>assets/vendor/Owl-Carousel/src/js/owl.video.js</li>
                    <li>assets/vendor/Magnific-Popup/src/js/core.js</li>
                    <li>assets/vendor/Magnific-Popup/src/js/gallery.js</li>
                    <li>assets/vendor/Magnific-Popup/src/js/image.js</li>
                    <li>assets/vendor/Magnific-Popup/src/js/retina.js</li>
                    <li>assets/vendor/Modular/src/modular.js</li>
                    <li>assets/vendor/jquery-animateNumber/jquery.animateNumber.js</li>
                    <li>assets/vendor/Kayzen.ScrollSpy/src/Kayzen.ScrollSpy.js</li>
                    <li>assets/vendor/ScrollTrigger/src/ScrollTrigger.js</li>
                    <li>assets/vendor/Stellar/src/jquery.stellar.js</li>
                    <li>assets/vendor/TweeCool/src/tweecool.js</li>
                </ul>
                
                <p>The other files which are includes in <b>app.js</b> are:</p>
                
                <ul class="list-clear">
                    <li>assets/modules/utilities/core/core.js</li>
                    <li>assets/includes/*.js</li>
                    <li>assets/modules/elements/**/*.js</li>
                    <li>assets/modules/objects/**/*.js</li>
                    <li>assets/themes/YOURTHEME/YOURTHEME.js</li>
                </ul>
                
                <p>Some pages use certain JavaScript files on an opt-in basis, and as such these files are not part of <b>app.js</b> and will need to be copied over into the <b>app</b> directory (app/scripts). These files include:</p>
                
                <ul class="list-clear">
                    <li>assets/vendor/jQuery/dist/jquery.js</li>
                    <li>assets/vendor/pseudojQuery/src/pseudojQuery-start.js</li>
                    <li>assets/vendor/pseudojQuery/src/pseudojQuery-end.js</li>
                    <li>assets/vendor/Masonry/dist/masonry.pkgd.js</li>
                    <li>assets/vendor/Isotope/dist/isotope.pkgd.js</li>
                    <li>assets/vendor/Infinite-AJAX-Scroll/dist/jquery-ias.js</li>
                    <li>assets/vendor/Enlighter/Build/EnlighterJS.js</li>
                    <li>assets/vendor/MooTools-Core/build/mootools-core.js</li>
                </ul>
                
                <p>To reiterate, the above files should be copied (duplicated) into app/<b>scripts</b>.</p>
                
				<h3 class="heading-uppercase-light-border" id="building-kayzen">CSS</h2>
                
                <p>The app/styles/<b>app.css</b> file contains the following third party stylesheet files, which are all impored at the top of assets/<b>app.scss</b> by default:</p>
                
                <ul class="list-clear">
                    <li>assets/vendor/normalize-scss/sass/_normalize.scss</li>
                    <li>assets/vendor/Kayzen-GS/src/kayzen-gs.scss</li>
                    <li>assets/vendor/Magnific-Popup/src/css/main.scss</li>
                    <li>assets/vendor/Owl-Carousel/src/scss/owl.animate.scss</li>
                    <li>assets/vendor/Owl-Carousel/src/scss/owl.autoheight.scss</li>
                    <li>assets/vendor/Owl-Carousel/src/scss/owl.core.scss</li>
                    <li>assets/vendor/Owl-Carousel/src/scss/owl.lazyload.scss</li>
                    <li>assets/vendor/Owl-Carousel/src/scss/owl.video.scss</li>
                    <li>assets/vendor/Font-Awesome/scss/font-awesome.scss</li>
                    <li>assets/vendor/Modular/src/_modular.scss</li>
                    <li>assets/vendor/SassyJSON/stylesheets/_SassyJSON.scss</li>
                </ul>
                
                <p>Some pages use certain CSS files on an opt-in basis, and as such these files are not part of <b>app.css</b> and will need to be copied over into the <b>app</b> directory (app/styles). These files include:</p>
                
                <ul class="list-clear">
                    <li>assets/vendor/Enlighter/Build/EnlighterJS.css</li>
                </ul>
                
                <p>To reiterate, the above files should be copied (duplicated) into app/<b>styles</b>.</p>
                
				<h3 class="heading-uppercase-light-border" id="building-kayzen">PostCSS/AutoPrefixer</h2>
                
                <p>Kayzen uses PostCSS in order to use <a href="https://github.com/postcss/autoprefixer">Autoprefixer</a>. It does not use Compass or any other Sass libraries to handle vendor prefixing, so ensure your build process involves Autoprefixer with the following browser support options:</p>
                
                <ul class="list-clear">
                    <li>last 2 versions</li>
                    <li>ie >= 9</li>
                </ul>
                
				<h3 class="heading-uppercase-light-border" id="building-kayzen">Sass/SCSS</h2>
                
                <p>Kayzen requires a minimum Sass version of <strong>3.4</strong>, so ensure that your Sass compiler is upto date with at least this version.</p>
                
				<h3 class="heading-uppercase-light-border" id="building-kayzen">Images</h2>
                
                <p>The images in the assets directory need to be copied (duplicated) into the <b>app</b> directory (app/images). This allows you to keep your source image files separate from your production ones, which may be compressed during your build process. These are located in the <b>assets</b> directory:</p>
                
                <ul class="list-clear">
                    <li>assets/images/</li>
                </ul>
                
                <p>The default HTML templates will look for <code>small</code> and <code>tall</code> variants of the hero images provided in the <code>demo</code> sub-directory of <code>/images</code>. This point will likely be rendered moot as you add your own images.</p>
                
				<h3 class="heading-uppercase-light-border" id="building-kayzen">FontAwesome</h2>
                
                <p>The FontAwesome font files need to be copied (duplicated) into the <b>app</b> directory (app/fonts). These are located here:</p>
                
                <ul class="list-clear">
                    <li>assets/vendor/Font-Awesome/fonts/</li>
                </ul>
                
				<h3 class="heading-uppercase-light-border" id="building-kayzen">MooTools</h2>
                
                <p class="alert-bar-info">This step is only required if you intend to use the <a href="http://enlighterjs.org/" target="blank">Enlighter</a> syntax highlighter plugin.</p>
                
                <p>The Enlighter plugin which is used by the Kayzen demo pages requires <a href="http://mootools.net/" target="blank">MooTools</a>. MooTools requires you to build the file manually. Details on how to do so can be found on the MooTools repository page. Once you have built the file, it should now be available at assets/vendor/MooTools-Core/build/<b>mootools-core.js</b>. This file should then be copied to Kayzen's <b>app</b> directory (app/scripts).</p>
                
				<h3 class="heading-uppercase-light-border" id="building-kayzen">Caveats</h2>
                
                <p>One particular submodule (<a href="https://github.com/JohnAlbin/normalize-scss" target="blank">normalize-scss</a>) requires the <a href="https://github.com/JohnAlbin/support-for" target="blank">support-for</a> library to be present within its own directory, and does not come by default as a result of installing <b>normalize-scss</b>. To clarify, the file located at assets/vendor/support-for/sass/<b>_support-for.scss</b> must be present within the assets/vendor/normalize-scss/<b>sass/</b> directory when Sass compiles, otherwise it will throw an error. If you maually copy the file over, Git will complain that you have made changes to the <b>normalize-scss</b> submodule, so it is recommended that your build process involves copying the file over before Sass compiles, and then deleting it once the CSS has been compiled.</p>
                
				<h2 class="heading-light-size-6" id="configure">Configure</h2>
				
				<p>Kayzen is structured in a modular way, which makes things easier for everyone. Kayzen is built using the <a href="https://github.com/esr360/Synergy" target="blank">Synergy</a> Sass Framework. As well as global configuration each module can be individually configured, giving you complete control and flexibility when customizing them for your project. This will also make updating your project in the future easier when new modules or module updates for Kayzen come out.</p>
                
                <p>Every module is imported in the main app.scss file:</p>
                
                <ul class="list-clear">
                    <li>assets/<strong>app.scss</strong></li>
                </ul>
                
                <p>This is the root file for your project. As well as importing all the Sass modules it is also used to set which theme your project should use (more on this later), the path to your assets, and the option to output all the configuration to JSON to allow it to be accessed in your project's JavaScript (again, more on this later).</p>
                
                <p>In terms of the Kayzen modules that are imported, for the most part importing the file will <b>not</b> output any code, it merely gives your codebase the ability to include it should you so desire. This is to allow you to create different themes which may or may not use all avilable modules. Any modules your theme doesn't use won't get output in the compiled CSS.</p>
                
                <p>Themes are located in the <strong>themes</strong> directory. Each theme comes with a <strong>.scss</strong> file and a <strong>.js</strong> file. Kayzen provides several themes for you to choose from:</p>
                
                <ul class="list-clear">
                    <li>assets/themes/<strong>Kayzen</strong>
                </ul>
			
                <p>To set which theme your project should use, set the <code>$theme</code> variable at the top of <b>app.scss</b>. By default this is set to <code>Kayzen</code>.</p>
                
                <p>You can now control every configurable aspect of your project from <code>assets/themes/Kayzen/_kayzen.scss</code>. This file is where all the modules which are used by the theme are included, and also where you can pass any custom options to them. There are three types of modules, for a list of all of them and their available options, see the following links:</p>
                
                <ul class="list-clear">
                    <li><a href="<?php pageLink('modules.php#kayzenElements') ?>">assets/modules/<b>elements</b></a></li>
                    <li><a href="<?php pageLink('modules.php#kayzenObjects') ?>">assets/modules/<b>objects</b></a></li>
                    <li><a href="<?php pageLink('modules.php#kayzenUtilities') ?>">assets/modules/<b>utilities</b></a></li>
                </ul>
                
                <p>You can pass a custom option to a module in your theme's file (e.g. assets/themes/Kayzen/_kayzen.scss) like so:</p>
                
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
                    <li><strong>Colors:</strong> assets/modules/utilities/<a href="<?php pageLink('modules/utilities/color-palette.php') ?>">color-palette</a></li>
                    <li><strong>Breakpoints:</strong> assets/modules/utilities/<a href="<?php pageLink('modules/utilities/grid.php') ?>">grid</a></li>
                    <li><strong>Fonts:</strong> assets/modules/utilities/<a href="<?php pageLink('modules/utilities/typography.php') ?>">typography</a></li>
                    <li><strong>Header:</strong> assets/modules/objects/<a href="<?php pageLink('modules/objects/header.php') ?>">header</a></li>
                    <li><strong>Footer:</strong> assets/modules/objects/<a href="<?php pageLink('modules/objects/footer.php') ?>">footer</a></li>
                </ul>
            
                <p>Once you have configured all of your desired opions, you can preview all the modules on the <a href="<?php pageLink('cheatsheet.php') ?>">Cheatsheet</a> page.</p>
            
				<h2 class="heading-light-size-6" id="build">Build</h2>
				
				<p>Once you have configured all of your modules, you're ready to sart building your pages. Kayzen comes with numerous templates ready-made for you to use for your pages, you can <a href="<?php pageLink('templates.php') ?>">view them here</a>. New templates are added all the time, so be sure to regularly check for updates.</p>
                
                <h3 class="heading-size-5" id="build-HTML-templates">HTML Templates</h3>
                
                <p>To edit the various features of the provided HTML templates, see the following sections.</p>
                
                <p class="alert-bar-success">To change the visual appearance of the UI components, see the <a href="<?php pageLink('modules.php') ?>">Modules</a> page.</p>
                
                <h3 class="heading-size-4" id="building-kayzen">Global</h3>
                
                <h4 class="heading-light-uppercase">Sticky Header</h4>
                
                <p>A sticky header will become fixed as it's scroll position reaches the top of the browser window.</p>
                
                <p>Locate <code>app-header</code> module in your HTML file. It should look something like:</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="app-header" id="app-header">
    ...
&lt;/header>
</pre>

                <p>It may have one or more modifiers, and if so will look something like:</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="app-header-bar-absolute" id="app-header">
    ...
&lt;/header>
</pre>

                <p>To achieve a sticky header, add the <code>sticky</code> modifier by adding <code>-sticky</code> to the header's class, like so:</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="app-header-sticky" id="app-header">
    ...
&lt;/header>
</pre>

                <br />
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;header class="app-header-absolute-sticky-bar" id="app-header">
    ...
&lt;/header>
</pre>
                
                <p class="alert-bar-info">Read the <a href="<?php pageLink('modules/objects/header.php') ?>">header module</a> page for more information.</p>

                <h4 class="heading-light-uppercase">Fixed Top Bar</h4>
                
                <p>A fixed top-bar will remain in a fixed position on screen.</p>
                
                <p>Locate <code>top-bar</code> module in your HTML file. It should look something like:</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="top-bar">
    ...
&lt;/div>
</pre>

                <p>To achieve a fixed top-bar, add the <code>fixed</code> modifier by adding <code>-fixed</code> to the top-bar's class, like so:</p>
               
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;div class="top-bar-fixed">
    ...
&lt;/div>
</pre>
                
                <p class="alert-bar-error">Do not use a fixed top-bar in conjunction with a sticky header.</p>
                
                <p class="alert-bar-info">Read the <a href="<?php pageLink('modules/objects/top-bar.php') ?>">top-bar module</a> page for more information.</p>
               
                <h4 class="heading-light-uppercase">Footer Twitter Feed</h4>
                
                <p>In <code>app/scripts/app.js</code> (or <code> app/YOURTHEME/scripts/app.js</code>), locate the following code:</p>
     
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">           
$(_footer).footer();
</pre>

                <p>Reaplce with the following code, replacing your desired Twitter username to show tweets from:</p>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">  
$(_footer).footer({
    twitterFeed   : {
        username  : 'esr360'
    }
});
</pre>          
                
                <p class="alert-bar-info">Read the <a href="<?php pageLink('modules/objects/footer.php') ?>">footer module</a> page for more information.</p>
                
                <h4 class="heading-light-uppercase">Google Map</h4>
                
                <p>To change the google map colors, locate the following code in <code>app/scripts/app.js</code> (or <code> app/YOURTHEME/scripts/app.js</code>):</p>
   
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">           
$('#google-map').googleMap();
</pre>   

                <p>Grab your desired styles array (e.g. <a href="https://snazzymaps.com/style/35/avocado-world" target="blank">https://snazzymaps.com/style/35/avocado-world</a>) and pass it to the <code>styles</code> option:

<pre data-enlighter-language="javascript" class="EnlighterJSRAW">           
$('#google-map').googleMap({
    styles: [...]
});
</pre>
                
                <p class="alert-bar-info">Read the <a href="<?php pageLink('modules/objects/google-map.php') ?>">google-map module</a> page for more information.</p>
             
                <h4 class="heading-light-uppercase">Social Share Widgets</h4>
                
                <p>Any page which uses the social share widgets (widgets which show how many shares a page has) will have the following JavasScript included on the page:</p>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">   
$(document).ready(function() {
    $.fn.KayzenSocialShareCount();
});
</pre>

                <p>By default, the current page that the script is loaded on will be used to get the share information, but should you decide to use a different url, you can pass it as an option like so:</p>
                
<pre data-enlighter-language="javascript" class="EnlighterJSRAW">   
$(document).ready(function() {
    $.fn.KayzenSocialShareCount({
        url : 'http://themeforest.net'
    });
});
</pre>
                
                <h4 class="heading-light-uppercase">Get In Touch Form</h4>
                
                <h3 class="heading-size-4" id="building-kayzen">Homepages</h3>
                
                <h4 class="heading-light-uppercase">Parallax Billboard Background</h4>
                
                <p>To add a parallax effect to the billboard background, you can add the <code>data-stellar-background-ratio</code> data attribute to activate the <a href="http://markdalgleish.com/projects/stellar.js/" target="blank">Stellar</a> jQuery plugin.</p>
                     
<pre data-enlighter-language="html" class="EnlighterJSRAW">             
 &lt;section class="billboard-overlay-full-screen" data-stellar-background-ratio="0.5">
     ...
 &lt;/section>
</pre>
                
                <h4 class="heading-light-uppercase">Parallax Billboard Content</h4>
                
                <p>To add a faded parallax effect to the billboard content (as opposed to the background), structure your billboard's HTML like so:</p>
                                     
<pre data-enlighter-language="html" class="EnlighterJSRAW">             
 &lt;section class="billboard-full-screen">
     &lt;div class="billboard_wrapper container">
        &lt;div class="billboard_content" id="billboard-fade-parallax">
            ...
        &lt;/div>
     &lt;/div>
 &lt;/section>
</pre>

                <p>The key to achieving the effect is the <code>billboard-fade-parallax</code> id on your billboard's content element.</p>

                <h3 class="heading-size-4" id="building-kayzen">Portfolio/Blog Pages</h3>
                
                <h4 class="heading-light-uppercase">Columns</h4>
                
                <p>You can easily change the number of columns for any of the provided portfolio/blog templates by changing the <code>span-x</code> class of the respective items. Kayzen uses a 12 column grid system, so for example, to change a 3 column layout where the items will have a class of <code>span-4</code> to a 4 column layout, you would change the class for each item to <code>span-3</code>.</p>
                
                <h4 class="heading-light-uppercase">Masonry Items</h4>
                
                <p>To create columns with masonry items, you can either use one of the provided <a href="<?php pageLink('templates.php#portfolio') ?>">templates</a>, or you can convert a non-masonry template into one by doing the following:</p>
                
                <h5 class="heading">Load Required Script(s)</h5>
                
                <p>Load app/scripts/<b>isotope.pkgd.js</b> at the bottom of the page right underneath all other scripts:</p>
         
<pre data-enlighter-language="html" class="EnlighterJSRAW">   
...          
&lt;script src="/app/scripts/app.js"></script>        
&lt;script src="/app/scripts/isotope.pkgd.js"></script>
</pre>
                
                <h5 class="heading">Call The Isotope Plugin</h5>
                
                <p>Finally you need to call the loaded plugin on the relevant container, ensuring the code is inside a <code>document.ready</code> function, and <code>window.load</code> function:</p>
                
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">   
&lt;script>
    $(document).ready(function() {
        
        $(window).load(function() {
            $('#blog-items').isotope();
        });
        
    });
&lt;/script>
</pre>
                
                <p>Where <code>#blog-items</code> is the direct container of your portfolio/blog items.</p>
                
                <h4 class="heading-light-uppercase">Filterable Items</h4>
                
                <p>To create a set of filterable items, you can either use one of the provided <a href="<?php pageLink('templates.php#portfolio') ?>">templates</a>, or you can convert a non-filterable template into one by doing the following:</p>
                
                <h5 class="heading">Load Required Script(s)</h5>
                
                <p>Load app/scripts/<b>isotope.pkgd.js</b> at the bottom of the page right underneath all other scripts:</p>
         
<pre data-enlighter-language="html" class="EnlighterJSRAW">   
...          
&lt;script src="/app/scripts/app.js"></script>        
&lt;script src="/app/scripts/isotope.pkgd.js"></script>
</pre>     
                
                <h5 class="headin">Create The Navigation</h5> 
                
                <p>Add the following code wherever you want the filter navigation to appear, changing <code>id="blog-types"</code> to whatever you desire and swapping out the example filter attributes for your own:</p>
           
<pre data-enlighter-language="html" class="EnlighterJSRAW">       
&lt;ul class="tabs_nav-pills" id="blog-types">
    &lt;li class="button-pill-grey-1-thin active" data-filter="*">View All&lt;/li>
    &lt;li class="button-pill-grey-1-thin" data-filter="[data-image]">Image&lt;/li>
    &lt;li class="button-pill-grey-1-thin" data-filter="[data-carousel]">Carousel&lt;/li>
    &lt;li class="button-pill-grey-1-thin" data-filter="[data-vimeo], [data-youtube]">Video&lt;/li>
    &lt;li class="button-pill-grey-1-thin" data-filter="[data-audio]">Audio&lt;/li>
&lt;/ul>  
</pre>   
                
                <h5 class="heading">Call The Isotope Plugin</h5>
                
                <p>Finally you need to call the loaded plugin on the relevant container, ensuring the code is inside a <code>document.ready</code> function, and <code>window.load</code> function:</p>
                
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">   
&lt;script>
    $(document).ready(function() {
        
        $(window).load(function() {
            $('#blog-items').isotope();
            $('#blog-types').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $('#blog-items').isotope({ 
                    filter: filterValue 
                });
            });
        });
        
    });
&lt;/script>
</pre>  

                <p>Where <code>#blog-items</code> is the direct container of your portfolio/blog items, and <code>#blog-items</code> is the container for your filter navigation items.</p>
                
                <h4 class="heading-light-uppercase">Infinite Scroll Items</h4>
                
                <p>To create a set of infinitely-scrollable items, you can either use one of the provided <a href="<?php pageLink('templates.php#portfolio') ?>">templates</a>, or you can convert a non infinite-scroll template into one by doing the following:</p>
                
                <h5 class="heading">Load Required Script(s)</h5>
                
                <p>Load app/scripts/<b>jquery-ias.js</b> at the bottom of the page right underneath all other scripts:</p>
         
<pre data-enlighter-language="html" class="EnlighterJSRAW">   
...          
&lt;script src="/app/scripts/app.js"></script>        
&lt;script src="/app/scripts/jquery-ias.js"></script>
</pre>

                <h5 class="heading">Create The Pagination</h5>
                
                <p>For each set of 'loaded' content, there needs to be a separate HTML file with the content for the infinite scroll page to fetch the next set of items from. You can duplicate the first page and just update the pagination link as appropriate. The plugin will by default look for an element with an id of <code>pagination</code> to get the next page to pull the content from.<p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">   
&lt;ul id="pagination">
    &lt;li class="next">&lt;a href="3-cols-infinite-scroll-2.php">2&lt;/a>&lt;/li>
&lt;/ul>
</pre> 

                <h5 class="heading">Call the Infinite Scroll Plugin</h5>  
                
                <p>You then need to call the loaded plugin on the relevant container, ensuring the code is inside a <code>document.ready</code> function:</p>
                              
<pre data-enlighter-language="html" class="EnlighterJSRAW">   
&lt;script>
    $(document).ready(function() {

        $("#blog-items").KayenInfiniteScroll({
            isotopeGrid : false
        });
        
    });
&lt;/script>
</pre> 
                
                <p>Where <code>#blog-items</code> is the direct container for your portfolio/blog items.</p>
                
                <p>If you are calling other functions on your portfolio items, perhaps a carousel function, you will need to pass it to the infinite-scroll plugin so it can be re-called on the newly loaded items. This can be done like so:</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">   
&lt;script>
    $(document).ready(function() {
         
        function articlesCarousel() {
            ...
        } 
        
        articlesCarousel();
                        
        $("#blog-items").KayenInfiniteScroll({
            isotopeGrid : false
        }, articlesCarousel);
        
    });
&lt;/script>
</pre> 
                
                <h3 class="heading-size-5" id="building-kayzen">PHP Templates</h3>
                
                <p>The Kayzen demo pages are genrated from custom PHP source files. You are completely free to utilise these PHP templates for your own use. Whilst the PHP framework Kayzen is built from is extremely basic, it allows you to rapidly prototype pages using all the various components Kayzen has to offer. All the PHP templates are located in the <b>templates</b> directory.</p>
                
                <p>The core configuration file for the PHP templates can be found at templates/<b>app.php</b>. This is where all configurable templates are imported and all global constants are set, which include the following:</p>
                
				<table class="table-small">
					<thead>
						<tr>
							<th>Constant</th>
							<th>Default Value</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><code>theme</code></td>
							<td><code class="value">'Kayzen'</code></td>
							<td>Set which theme's assets you would like to load.</td>
						</tr>
						<tr>
							<td><code>realm</code></td>
							<td><code class="value">'demo'</code></td>
							<td>Can either be <code>demo</code> or <code>live</code>, currently only used to serve placeholder images instead of stock photos.</td>
						</tr>
						<tr>
							<td><code>env</code></td>
							<td><code class="value">dev</code></td>
							<td>Can be either <code>dev</code> or <code>prod</code>. If <code>prod</code>, the code will look for minified (.min.*) assets.</td>
						</tr>
						<tr>
							<td><code>path</code></td>
							<td><code class="value">'server'</code></td>
							<td>Can either be <code>static</code>,<code>server</code> or <code>explorer</code>, and defines how asset paths should be loaded.</td>
						</tr>
						<tr>
							<td><code>themes</code></td>
							<td><code class="value">false</code></td>
							<td>If enabled, templates will look to assets nested inside a self-named directory, e.g. app/themes/Kayzen/scripts/app.js.</td>
						</tr>
                    </tbody>
                </table>
                
                <h3 class="heading-size-4" id="building-kayzen">Includes</h3>
                
                <p>The below includes can be used on any page which includes the <b>app.php</b> file, and will output some code depending on the options you pass to the function. They are located in the templates/<b>includes</b> directory.</p>
                
                <ul class="list-clear">
                    <li><a href="#">articleItem()</a></li>
                    <li><a href="#">devAsset()</a></li>
                </ul>
                
                <p>You can use any of the above functions in yout PHP/PHTML pages like so:</p>
                                
<pre data-enlighter-language="php" class="EnlighterJSRAW">
articleItem();
</pre>                

                <p>You can pass custom options to the function like so:</p>  
                                        
<pre data-enlighter-language="php" class="EnlighterJSRAW">
articleItem(array(
    'media'  => 'carousel',
    'size'   => 'small',
    'span'   => 4
));
</pre> 
                
                <h3 class="heading-size-4" id="building-kayzen">Modules</h3>
                
                <p>The below modules can be used on any page which includes the <b>app.php</b> file, and will output some code depending on the options you pass to the function. They are located in the templates/<b>modules</b> directory.</p>
                
                <ul class="list-clear">
                    <li><a href="#">appFooter()</a></li>
                    <li><a href="#">appHeader()</a></li>
                    <li><a href="#">billboard()</a></li>
                    <li><a href="#">earthSlider()</a></li>
                    <li><a href="#">googleMap()</a></li>
                    <li><a href="#">sidebar()</a></li>
                    <li><a href="#">topBar()</a></li>
                </ul>
                
                <p>You can use any of the above functions in yout PHP/PHTML pages like so:</p>
                                
<pre data-enlighter-language="php" class="EnlighterJSRAW">
billboard();
</pre>                

                <p>You can pass custom options to the function like so:</p>  
                                        
<pre data-enlighter-language="php" class="EnlighterJSRAW">
billboard([
    'title'    => [
        'text' => 'My Title'
    ],
    'tag-line' => 'My Tagline'
]);
</pre> 
                
                <h3 class="heading-size-4" id="building-kayzen">Sections</h3>
                
                <p>The below sections can be used on any page which includes the <b>app.php</b> file, and will output some code depending on the options you pass to the function. They are located in the templates/<b>sections</b> directory.</p>
                
                <ul class="list-clear">
                    <li><a href="#">clients()</a></li>
                    <li><a href="#">contactUs()</a></li>
                    <li><a href="#">elements()</a></li>
                    <li><a href="#">featureCards()</a></li>
                    <li><a href="#">featureQuote()</a></li>
                    <li><a href="#">inStore()</a></li>
                    <li><a href="#">infoBanner()</a></li>
                    <li><a href="#">keyFeatures()</a></li>
                    <li><a href="#">keyFeatures-2()</a></li>
                    <li><a href="#">layouts()</a></li>
                    <li><a href="#">masonryFeatures()</a></li>
                    <li><a href="#">moreFeatures()</a></li>
                    <li><a href="#">objects()</a></li>
                    <li><a href="#">options()</a></li>
                    <li><a href="#">ourTeam()</a></li>
                    <li><a href="#">pricing()</a></li>
                    <li><a href="#">promoBanner()</a></li>
                    <li><a href="#">promoSection()</a></li>
                    <li><a href="#">recentWork()</a></li>
                    <li><a href="#">recentArticles()</a></li>
                    <li><a href="#">responsive()</a></li>
                    <li><a href="#">services()</a></li>
                    <li><a href="#">shareTheLove()</a></li>
                    <li><a href="#">shortcodes()</a></li>
                    <li><a href="#">showcase()</a></li>
                    <li><a href="#">skill()</a></li>
                    <li><a href="#">statistics()</a></li>
                    <li><a href="#">testimonials()</a></li>
                    <li><a href="#">twitterFeed()</a></li>
                    <li><a href="#">whyChooseUs()</a></li>
                </ul>
                
                <p>You can use any of the above functions in yout PHP/PHTML pages like so:</p>
                                
<pre data-enlighter-language="php" class="EnlighterJSRAW">
clients();
</pre>                

                <p>You can pass custom options to the function like so:</p>  
                                        
<pre data-enlighter-language="php" class="EnlighterJSRAW">
clients(array(
    'title'     => 'Popular Brands',
    'sub-title' => 'Get The Best Deals' 
));
</pre> 
                
                <h3 class="heading-size-4" id="building-kayzen">Basic Template</h3>
                
                <p>Several things are required to create a PHP page using Kayzen. Below shows the minimum requirements to set up a blank page with all global modules and assets:</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;?php 
    include ('../app.php');
    $title = 'Documentation';
    $tagline = 'Lorem Ipsum Dolor Sit Amet';
?>

&lt;!DOCTYPE html>
&lt;html>

    &lt;?php include (ROOT.'/includes/head.php'); ?>

    &lt;body>

        &lt;!-- Site Canvas -->
        &lt;div id="site-content">
        
            &lt;?php&lt;!-- begin php -->
            
                &lt;!-- Topbar Module -->
                topbar();

                &lt;!-- Header Module -->
                appHeader(array(
                    'modifiers' => 'bar-absolute-opaque-sticky'
                ));

                &lt;!-- Billboard Module -->
                billboard([
                    'title'    => [
                        'text' => $title
                    ],
                    'tag-line' => $tagLine
                ]);
            
            ?>&lt;!-- end php -->
                
            &lt;!-- YOUR HTML/PHP CONTENT -->
            ...
                
            &lt;?php appFooter(); ?>

        &lt;/div>&lt;!-- Site Canvas -->

        &lt;?php include (ROOT.'/includes/ui-enhancements.php'); ?>

        &lt;?php include (ROOT.'/includes/scripts.php'); ?>

    &lt;/body>
    
&lt;/html>
</pre>

                <p>If you are using Grunt and the provided Gruntfile.js, you can easily compile and build your app for development and production envrionments generating appropriate HTML files from your source PHP templates - see the below Grunt tasks.</p>

                <h3 class="heading-size-5" id="grunt-tasks">Grunt Tasks</h3>
                
                <h3 class="heading-uppercase-light-border" id="building-kayzen">Executable Tasks</h3>
                
				<table class="table-small">
					<thead>
						<tr>
							<th>Task</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><code>grunt</code></td>
							<td>The default grunt task - runs the below <code>compile</code> task as well as the <code>watch</code> task.</td>
						</tr>
						<tr>
							<td><code>grunt templates</code></td>
							<td>Used to generate HTML pages from your PHP templates (will only look for templates in the '/pages' directory).</td>
						</tr>
						<tr>
							<td><code>grunt compile</code></td>
							<td>This will compile your assets using the default value for the 'env' option.</td>
						</tr>
						<tr>
							<td><code>grunt compile:dev</code></td>
							<td>This will compile your assets for a development environment (assets will be unminified).</td>
						</tr>
						<tr>
							<td><code>grunt compile:prod</code></td>
							<td>This will compile your assets for a production environment (assets will be minified).</td>
						</tr>
						<tr>
							<td><code>grunt compress:images</code></td>
							<td>This will compress all images in the 'demo' directory using the <a target="blank" href="https://tinypng.com/developers">TinyPNG API</a>. Use liberally.</td>
						</tr>
						<tr>
							<td><code>grunt test</code></td>
							<td>This will execute code linters on your .scss and .js files.</td>
						</tr>
						<tr>
							<td><code>grunt setup</code></td>
							<td>This runs <code>npm install</code> and any neccessery Grunt tasks for vendor assets. This only needs to be done once during your initial setup.</td>
						</tr>
                    </tbody>
                </table>
                
                <h3 class="heading-uppercase-light-border" id="building-kayzen">Grunt Options</h3>
                
                <p>Using the <code><a href="http://gruntjs.com/api/grunt.option" target="blank">grunt.option</a></code> API, you can pass several parameters on the command line when running the above tasks:</p>
                
                <p class="alert-bar-info">The below values will also automatically be updated in <b>app.php</b>.</p>
                
				<table class="table-small">
					<thead>
						<tr>
							<th>Variable</th>
							<th>Default Value</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><code>theme</code></td>
							<td><code class="value">'Kayzen'</code></td>
							<td>This is the theme you wish to compile assets from. Theme must be present in the assets/themes directory.</td>
						</tr>
						<tr>
							<td><code>realm</code></td>
							<td><code class="value">'demo'</code></td>
							<td>Can either be <code>demo</code> or <code>live</code>. Currently only used to serve placeholder images instead of stock photos.</td>
						</tr>
						<tr>
							<td><code>env</code></td>
							<td><code class="value">'dev'</code></td>
							<td>Can either be <code>dev</code> or <code>prod</code>. Used to determine whether or not assets should be minified.</td>
						</tr>
						<tr>
							<td><code>host</code></td>
							<td><code class="value">'server'</code></td>
							<td>Can either be <code>static</code> or <code>server</code>, and will define how your asset paths are created.</td>
						</tr>
						<tr>
							<td><code>themes</code></td>
							<td><code class="value">false</code></td>
							<td>If enabled, assets will be compiled into individual theme folders (e.g. app/themes/Kayzen/scripts/app.js).</td>
						</tr>
                    </tbody>
                </table>
                
                <p>The above options would be used when calling the grunt task, like so:</p>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
grunt compile --env=prod
</pre>

                <br />
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
grunt templates --theme=YOURTHEME
</pre>
             
				<h2 class="heading-light-size-6" id="deploy">Test & Deploy</h2>
				
				<p>So you've created all your pages and configured all your modules, the front end for your project is now ready to test and then launch! There are several things you may want to test before you make your website live to ensure your users have the best experience possible. Below is a checklist of recommendations you can do to check your website is working properly and has no errors, as well as improving things like page load times etc.</p>
                
                <h3 class="heading-size-4" id="building-kayzen">Minified Assets</h3>
                
                <p>You should be serving your users with minified versions of your assets (CSS and Javascript), as the file sizes will be smaller and load times faster. If you are using grunt, you can generate minified assets by running <code>grunt compile:prod</code>, otherwise you can use the minified assets provided with your download.</p>
                
                <h3 class="heading-size-4" id="building-kayzen">Code Linting</h3>
                
                <p>If you are using our Gruntfile.js, you can run Javascript and Scss linters on your code. Simply run <code>grunt test</code> to run both linters. To run only Javasctipt linting, run the <code>grunt jshint</code> task, and to run only Scss linting run the <code>grunt scsslint</code> task.</p>
                
                <h3 class="heading-size-4" id="building-kayzen">Console Errors</h3>
                
                <p>Check that you have no Javascript errors and are correctly loading assets by looking at the console. Right click anywhere on the page and click "inspect" (or "inspect element"). On the window that opens click the "console" tab. Any errors will be listed in red.</p>
                
                <h3 class="heading-size-4" id="building-kayzen">Unit Tests</h3>
                
                <p>We are currently writing unit tests for all custom Javascripts. These, along with other such automated tests, will be released in furutre releases of Kayzen, so stay tuned.</p>
                
                <h3 class="heading-size-4" id="building-kayzen">Cross-Browser Tests</h3>
                
                <p>Before you launch your site, check it in different browsers to makse sure it all works. Kayzen supports all modern browsers and degrades grecefully until Internet Explorer 9.</p>
				
                <h3 class="heading-size-4" id="building-kayzen">Mobile/Responsive Tests</h3>
                
                <p>Check your website on multiple mobile devices before you launch to ensure there are no issues. Kayzen is fully responsive and should work and look great on all modern devices.</p>
				
                <h3 class="heading-size-4" id="building-kayzen">Support</h3>
                
                <p>If you encounter any issues which you cannot resolve, you can <a href="#">get in touch</a> with us to receive free support.</p>
                
			</div>
			
		</section>

		<?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>
		
    <?php include (ROOT.'/includes/syntax-highlighter.php'); ?>

</body>
</html>