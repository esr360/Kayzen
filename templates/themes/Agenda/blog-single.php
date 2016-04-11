<?php 
    include ('../../app.php');
    // page config
    $theme = 'Agenda';
    $title = 'Single Post Title';
    $tagLine = 'Aenean lobortis ante nunc, curabitur at enim ac nisi lacinia.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink($theme, '/index.php'),
                    'About' => themeLink($theme, '/index.php').'#s-about',
                    'Services' => themeLink($theme, '/index.php').'#s-services',
                    'Portfolio' => themeLink($theme, '/index.php').'#s-portfolio',
                    'Blog' => themeLink($theme, '/index.php').'#s-blog',
                    'Contact' => themeLink($theme, '/index.php').'#s-contact'
                )
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));

		?>
		
		<section class="section-primary">
				
			<div class="container-small">
                
                <div class="thumbnail-article">
                    <img src="<?php stockImage('demo/stock-'.rand(1, 7).'.jpg') ?>">
                </div>
                
                <?php demoPost() ?>
                
                <hr class="hrule-stripes-large" />
                
				<?php socialWidgets() ?>
                
                <?php include (ROOT.'/sections/project-author.php'); ?>
                
                <?php comments() ?>
                
                <div class="heading_group-large">
                    <h2 class="heading-size-6-light-strikethrough-dots text-center"><span>Related Posts</span></h2>
                </div>

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
		
            </div><!-- container -->
            
        </section>
		
		<?php
        
            promoBanner(array(
                'cta-modifiers' => '-oval'
            ));
            
            appFooter(array(
                'columns' => false
            )); 
            
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>