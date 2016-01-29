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
                
                <p>At this stage, it is not essential to know about JavaScript concatenation. As long as you are comfortable using Sass you will gain most of the benefits Kayzen has to offer.</p>
			
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
                
                <p>You can now control every configurable aspect of your peoject from <code>app/themes/Kayzen/_kayzen.scss</code>. This file is where all the modules which are used by the theme are included, and also where you can pass any custom options to them.</p>
            
				<h2 class="heading-light-size-5" id="build">Build</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ligula vel turpis pellentesque posuere. Vestibulum cursus mi ut nunc ultrices porttitor. Donec imperdiet efficitur hendrerit.</p>
			
				<h2 class="heading-light-size-5" id="deploy">deploy</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ligula vel turpis pellentesque posuere. Vestibulum cursus mi ut nunc ultrices porttitor. Donec imperdiet efficitur hendrerit.</p>
				
			</div>
			
		</section>

		<?php 

            appFooter();
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
</html>