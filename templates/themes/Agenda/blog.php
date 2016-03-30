<?php 
	include ('../../app.php');
	// page config
    $theme = 'Agenda';
	$title = 'Our Blog';
	$tagLine = 'Read about all the great work we do';
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
                  
                <div id="blog-items">
                        
                    <?php
                        
                        articleItem(array(
                            'cta-modifiers' => '-oval',
                            'link'          => themeLink($theme, '/blog-single.php'),
                            'root'          => themeLink($theme, '/blog.php')
                        ));
                        
                        articleItem(array(
                            'media'         => 'vimeo',
                            'link'          => themeLink($theme, '/blog-single.php'),
                            'root'          => themeLink($theme, '/blog.php'),
                            'cta-modifiers' => '-oval'
                        ));
                        
                        articleItem(array(
                            'media' => 'youtube',
                            'link'          => themeLink($theme, '/blog-single.php'),
                            'root'          => themeLink($theme, '/blog.php'),
                            'cta-modifiers' => '-oval'
                        ));
                        
                        articleItem(array(
                            'media' => 'carousel',
                            'link'          => themeLink($theme, '/blog-single.php'),
                            'root'          => themeLink($theme, '/blog.php'),
                            'cta-modifiers' => '-oval'
                        ));
                        
                        articleItem(array(
                            'media' => 'masonry',
                            'link'          => themeLink($theme, '/blog-single.php'),
                            'root'          => themeLink($theme, '/blog.php'),
                            'cta-modifiers' => '-oval'
                        ));
                        
                        articleItem(array(
                            'media' => 'audio',
                            'link'          => themeLink($theme, '/blog-single.php'),
                            'root'          => themeLink($theme, '/blog.php'),
                            'cta-modifiers' => '-oval'
                        ));
                        
                        articleItem(array(
                            'media' => 'codepen',
                            'link'          => themeLink($theme, '/blog-single.php'),
                            'root'          => themeLink($theme, '/blog.php'),
                            'cta-modifiers' => '-oval'
                        ));
                        
                    ?> 
                
                </div>
                
                <ul class="pagination tabs_nav-pills-center">
                    <li class="button-pill-grey-1-round"><i class="fa fa-angle-left"></i></li>
                    <li class="button-pill-grey-1-round">1</li>
                    <li class="button-pill-grey-1-round active">2</li>
                    <li class="button-pill-grey-1-round">3</li>
                    <li class="button-pill-grey-1-round">...</li>
                    <li class="button-pill-grey-1-round">10</li>
                    <li class="button-pill-grey-1-round"><i class="fa fa-angle-right"></i></li>
                </ul>
            
                <script>
                    $(document).ready(function() {
                        $('.article-thumbnails-carousel').each(function() {
                            $(this).owlCarousel({
                                items : 1,
                                nav : true,
                                navText : [
                                    '<i class="fa fa-angle-left fa-3x"></i>',
                                    '<i class="fa fa-angle-right fa-3x"></i>'
                                ],
                                loop : true
                            })
                        })
                    });
                </script>
				
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