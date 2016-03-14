<?php 
	include ('../../app.php');
	// page config
    $theme = 'Agenda';
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
?>

<!DOCTYPE html>
<html>

<?php head($theme) ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink($theme, '/index.php'),
                    'About' => themeLink($theme, '/about.php'),
                    'Services' => themeLink($theme, '/services.php'),
                    'Portfolio' => themeLink($theme, '/portfolio.php'),
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
				
			<div class="container-small">
                
                <div id="portfolio-items">
                    
                    <?php 
                        
                        articleItem(array(
                            'type'  => 'portfolio',
                            'link'  => themeLink($theme, '/blog-single.php'),
                            'root'  => themeLink($theme, '/blog.php')
                        ));
                        
                        articleItem(array(
                            'media' => 'vimeo',
                            'type'  => 'portfolio',
                            'link'  => themeLink($theme, '/blog-single.php'),
                            'root'  => themeLink($theme, '/blog.php')
                        ));
                        
                        articleItem(array(
                            'media' => 'youtube',
                            'type'  => 'portfolio',
                            'link'  => themeLink($theme, '/blog-single.php'),
                            'root'  => themeLink($theme, '/blog.php')
                        ));
                        
                        articleItem(array(
                            'media' => 'carousel',
                            'type'  => 'portfolio',
                            'link'  => themeLink($theme, '/blog-single.php'),
                            'root'  => themeLink($theme, '/blog.php')
                        ));
                        
                        articleItem(array(
                            'media' => 'masonry',
                            'type'  => 'portfolio',
                            'link'  => themeLink($theme, '/blog-single.php'),
                            'root'  => themeLink($theme, '/blog.php')
                        ));
                        
                        articleItem(array(
                            'media' => 'audio',
                            'type'  => 'portfolio',
                            'link'  => themeLink($theme, '/blog-single.php'),
                            'root'  => themeLink($theme, '/blog.php')
                        ));
                        
                        articleItem(array(
                            'media' => 'codepen',
                            'type'  => 'portfolio',
                            'link'  => themeLink($theme, '/blog-single.php'),
                            'root'  => themeLink($theme, '/blog.php')
                        ));
                        
                    ?>
                
                </div>
            
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
                
                <ul class="pagination tabs_nav-pills-center">
                    <li class="button-pill-grey-1-round"><i class="fa fa-angle-left"></i></li>
                    <li class="button-pill-grey-1-round">1</li>
                    <li class="button-pill-grey-1-round active">2</li>
                    <li class="button-pill-grey-1-round">3</li>
                    <li class="button-pill-grey-1-round">...</li>
                    <li class="button-pill-grey-1-round">10</li>
                    <li class="button-pill-grey-1-round"><i class="fa fa-angle-right"></i></li>
                </ul>
				
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