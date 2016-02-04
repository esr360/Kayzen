<?php 
	include ('../../../app.php');
	// page config
	$title = 'Print Styles';
	$tagLine = 'assets/modules/utilities/masonry-grid';
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
					<li class="plain"><span>_print.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/print" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/print</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>At one point, a long time ago, Kayzen was built off the popular <a href="#">HTML5 Boilerplate</a>. There are still some remnants left over which Kayzen utilizes, such as the print styles. The <code>_print.scss</code> file should be used to contain any styles you wish to only be applied when the media type is equal to <code>print</code>.</p>
                
                <h3 class="heading-size-1-uppercase"><a target="blank" href="https://github.com/h5bp/html5-boilerplate/blob/master/dist/doc/css.md#print-styles">From the H5BP docs:</a></h3>
                
                <ul class="list-clear">
                    <li>strip all background colors, change the font color to black, and remove the <code>text-shadow</code> — done in order to <a href="http://www.sanbeiji.com/archives/953">help save printer ink and speed up the  printing process</a></li>
                    <li>underline and expand links to include the URL — done in order to allow users
                    to know where to refer to<br> (exceptions to this are: the links that are <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-href">fragment identifiers</a>, or use the
                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/void#JavaScript_URIs"><code>javascript:</code> pseudo protocol</a>)</li>
                    <li>expand abbreviations to include the full description — done in order to allow
                    users to know what the abbreviations stands for</li>
                    <li>provide instructions on how browsers should break the content into pages and on <a href="https://en.wikipedia.org/wiki/Widows_and_orphans">orphans/widows</a>, namely, we instruct <a href="https://en.wikipedia.org/wiki/Comparison_of_layout_engines_%28Cascading_Style_Sheets%29#Grammar_and_rules">supporting browsers</a> that they should:
                        <ul class="flush">
                            <li>ensure the table header (<code>&lt;thead&gt;</code>) is <a href="http://css-discuss.incutio.com/wiki/Printing_Tables">printed on each page spanned by the
                            table</a></li>
                            <li>prevent block quotations, preformatted text, images and table rows from
                            being split onto two different pages</li>
                            <li>ensure that headings never appear on a different page than the text they
                            are associated with</li>
                            <li>ensure that
                            <a href="https://en.wikipedia.org/wiki/Widows_and_orphans">orphans and widows</a> do
                            <a href="https://css-tricks.com/almanac/properties/o/orphans/">not appear on printed pages</a></li>
                        </ul>
                    </li>
                </ul>
                
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