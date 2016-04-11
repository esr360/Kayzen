<?php 
	include ('../../app.php');
	// page config
    $theme = 'Gaucho';
	$title = 'Our Company';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader($style = 'pacman') ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink($theme, '/index.php'),
                    'About' => themeLink($theme, '/about.php'),
                    'Blog' => themeLink($theme, '/blog.php'),
                    'Contact' => themeLink($theme, '/contact.php')
                )
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));

		?>
		
		<section class="section-primary">
				
			<div class="container">
                
                <div class="row stack-break-5">
					
					<div class="span-8">
                
                        <div class="thumbnail-article">
                            <img src="<?php stockImage('demo/stock-'.rand(1, 7).'.jpg') ?>">
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
    
                        <?php sidebar(array(
                            'category' => themeLink($theme, '/blog.php')
                        )); ?>
						
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

    <?php scripts($theme) ?>

</body>
</html>