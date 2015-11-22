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

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
           
       ?>
		
		<section class="section-primary-mini relative text-center">	
			<ul class="tabs_nav-pills" id="portfolio-categories">
				<li class="button-pill-grey-1-thin active" data-filter="*">View All</li>
				<li class="button-pill-grey-1-thin" data-filter="[data-HTML-theme]">HTML Themes</li>
				<li class="button-pill-grey-1-thin" data-filter="[data-photography]">Photography</li>
				<li class="button-pill-grey-1-thin" data-filter="[data-logo]">Logos</li>
			</ul>
		</section>
		
		<section class="section-primary-flush relative">
                
            <div class="container">
			
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
                        
                        $(window).load(function() {
                            $('#portfolio-items').isotope();
                            $('#portfolio-categories').on('click', 'li', function() {
                                var filterValue = $(this).attr('data-filter');
                                $('#portfolio-items').isotope({ 
                                    filter: filterValue 
                                });
                            });
                        });
                        
                    });
                </script>
            
            </div>        
			
		</section>
		
		<?php
        
            promoBanner();
            
            appFooter(); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>
    
    <?php if (env == 'dev') { ?>
        <script src="<?php echo appDir ?>/build/scripts/isotope.pkgd.js"></script>
    <?php } else if (env == 'prod') { ?>
        <script src="<?php echo appDir ?>/build/scripts/isotope.pkgd.min.js"></script>
    <?php } ?>

</body>