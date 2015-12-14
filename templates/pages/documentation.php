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
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ligula vel turpis pellentesque posuere. Vestibulum cursus mi ut nunc ultrices porttitor. Donec imperdiet efficitur hendrerit.</p>
			
				<h2 class="heading-light-size-5" id="configure">Configure</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu ligula vel turpis pellentesque posuere. Vestibulum cursus mi ut nunc ultrices porttitor. Donec imperdiet efficitur hendrerit.</p>
			
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