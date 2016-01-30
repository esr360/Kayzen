<?php 
	include ('../../../app.php');
	// page config
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
?>

<!DOCTYPE html>
<html>

<?php include (ROOT.'/includes/head.php'); ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-dark-sticky'
            ));
            
            billboard();

		?>
		
		<section class="section-primary-mini relative text-center">	
			<ul class="tabs_nav-pills-center" id="portfolio-categories">
				<li class="button-pill-grey-1-round active" data-filter="*">View All</li>
				<li class="button-pill-grey-1-round" data-filter="[data-HTML-theme]">HTML Themes</li>
				<li class="button-pill-grey-1-round" data-filter="[data-photography]">Photography</li>
				<li class="button-pill-grey-1-round" data-filter="[data-logo]">Logos</li>
			</ul>
		</section>
		
		<section class="section relative">
			
			<div id="portfolio-items" class="row-no-gutter row-filterable">

                <?php
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                    ));
                    
                ?>
							
			</div><!-- portfolio-items -->
            
            <script>
                $(document).ready(function() {
                    
                    $('#portfolio-categories').KayzenClickHelper();
                    
                    $('#portfolio-items').isotope();
                    
                    $('#portfolio-categories').on('click', 'li', function() {
                        var filterValue = $(this).attr('data-filter');
                        $('#portfolio-items').isotope({ 
                            filter: filterValue 
                        });
                    });
                    
                });
            </script>            
			
		</section>
		
		<?php
        
            promoBanner();
            
            appFooter(); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>
    
    <?php devAsset(array('path' => 'isotope.pkgd.js')); ?>

</body>