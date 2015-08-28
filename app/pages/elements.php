<?php 
	include ('../app.php');
	// start the ouput buffer
	ob_start(); 
	// page config
	$title = 'UI Elements';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include ('../includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php include ('../modules/objects/header/header.php'); ?>
	
		<?php include ('../modules/objects/billboard/billboard.php'); ?>
		
		<section class="section">
			
			<!-- Elements Row -->
			<div class="widget_group row-no-gutter text-center">
				
				<!-- Element 1 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-chevron-circle-down"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Accordions</h3>
					</header>
				</a>
				
				<!-- Element 2 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-exclamation-triangle"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Alert Bars</h3>
					</header>
				</a>
				
				<!-- Element 3 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-quote-left"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Blockquotes</h3>
					</header>
				</a>
				
				<!-- Element 4 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-keyboard-o"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Buttons</h3>
					</header>
				</a>
				
				<!-- Element 5 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-arrows-h"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Carousels</h3>
					</header>
				</a>
				
				<!-- Element 6 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-font"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Fonts</h3>
					</header>
				</a>
				
				<!-- Element 7 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-file-text-o"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Forms</h3>
					</header>
				</a>
				
				<!-- Element 8 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-bold"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Headings</h3>
					</header>
				</a>
				
				<!-- Element 9 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-flag"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Icons</h3>
					</header>
				</a>
				
				<!-- Element 10 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-picture-o"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Images</h3>
					</header>
				</a>
				
				<!-- Element 11 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-list"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Lists</h3>
					</header>
				</a>
				
				<!-- Element 12 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-times-circle"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Modals</h3>
					</header>
				</a>
				
				<!-- Element 13 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-battery-3"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Progress Bars</h3>
					</header>
				</a>
				
				<!-- Element 14 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-table"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Tables</h3>
					</header>
				</a>
				
				<!-- Element 15 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-folder-o"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Tabs</h3>
					</header>
				</a>
				
				<!-- Element 16 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-comment"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Tooltips</h3>
					</header>
				</a>
				
				<!-- Element 17 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-square"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Wells</h3>
					</header>
				</a>
				
				<!-- Element 18 -->
				<a class="widget-block-panel-small span-2 break-3-third break-1-half" href="#">
					<div class="widget_icon icon-plain-size-9">
						<i class="fa fa-th-large"></i>
					</div>
					<header class="widget_header heading_group">
						<h3 class="heading-light-uppercase-brand-1">Widgets</h3>
					</header>
				</a>
				
			</div><!-- Elements Row -->
			
		</section>

		<?php include ('../modules/objects/footer/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include ('../includes/ui-enhancements.php'); ?>

    <?php include ('../includes/scripts.php'); ?>

</body>
</html>

<?php
$cachefile = "../../elements.html";
$fp = fopen($cachefile, 'w'); 
// save the contents of output buffer to the file
fwrite($fp, ob_get_contents()); 
// close the file
fclose($fp); 
// Send the output to the browser
ob_end_flush(); 
?>