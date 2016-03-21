<?php 
	include ('../../app.php');
	// page config
	$title = 'Single Post Title';
	$tagLine = 'Aenean lobortis ante nunc, curabitur at enim ac nisi lacinia.';
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
				
			<div class="container">
                
                <div class="row">
					
					<div class="span-8">
                
                        <div class="thumbnail-article">
                            <img src="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>">
                        </div>
                
                        <?php demoPost() ?>
                        
                        <hr class="hrule-stripes-large" />
                        
                        <?php socialWidgets() ?>
                        
                        <?php include (ROOT.'/sections/project-author.php'); ?>
                        
                        <?php comments() ?>
                        
                        <h2 class="heading-size-6-light-strikethrough-dots text-center"><span>Related Posts</span></h2>
        
                        <div class="row-flow row-waffle-large">
                            
                            <?php  
                            
                                articleItem(array(
                                    'size'          => 'small',
                                    'title'         => 'Kayzen is Released',
                                    'cta-modifiers' => '-oval',
                                    'span'          => 4,
                                    'link'          => themeLink($theme, '/blog-single.php'),
                                    'root'          => themeLink($theme, '/blog.php'),
                                    'class'         => 'break-4-half break-2-full relative'
                                ));
                            
                                articleItem(array(
                                    'size'          => 'small',
                                    'title'         => 'Kayzen is Released',
                                    'cta-modifiers' => '-oval',
                                    'span'          => 4,
                                    'link'          => themeLink($theme, '/blog-single.php'),
                                    'root'          => themeLink($theme, '/blog.php'),
                                    'class'         => 'break-4-half break-2-full relative'
                                ));
                            
                                articleItem(array(
                                    'size'          => 'small',
                                    'title'         => 'Kayzen is Released',
                                    'cta-modifiers' => '-oval',
                                    'span'          => 4,
                                    'link'          => themeLink($theme, '/blog-single.php'),
                                    'root'          => themeLink($theme, '/blog.php'),
                                    'class'         => 'min-break-4 relative'
                                ));
                                
                            ?>
                    
                        </div><!-- row -->

                    </div><!-- main content (span-8) -->
                
                    <hr class="hrule-stripes-large max-break-3" />
                
					<aside class="sidebar span-4">
    
                        <?php sidebar(); ?>
						
					</aside><!-- sidebar -->
					
				</div><!-- row -->
                
			</div><!-- container -->

		</section>
		
		<?php
        
            promoBanner();
            
            appFooter(); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>