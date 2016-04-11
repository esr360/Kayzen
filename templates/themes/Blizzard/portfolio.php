<?php 
    include ('../../app.php');
    // page config
    $theme = 'Blizzard';
    $title = 'Portfolio';
    $tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar(array(
                'social-links' => array(
                    'facebook', 'twitter'
                ),
                'side-header' => true,
                'flyout-trigger' => true
            ));

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink($theme, '/index.php'),
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
		
		<section class="section-primary-mini relative text-center min-break-1">	
			<ul class="tabs_nav-pills-center" id="portfolio-categories">
				<li class="tabs_nav_item active" data-filter="*">View All</li>
				<li class="tabs_nav_item" data-filter="[data-HTML-theme]">HTML Themes</li>
				<li class="tabs_nav_item" data-filter="[data-photography]">Photography</li>
				<li class="tabs_nav_item" data-filter="[data-logo]">Logos</li>
			</ul>
		</section>
		
		<section class="section relative">
			
			<div id="portfolio-items" class="row-no-gutter row-filterable">

                <?php
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                        'class'  => 'break-3-half break-2-full',
                        'link'   => themeLink($theme, '/portfolio-single.php'),
                        'root'   => themeLink($theme, '/portfolio.php')
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                        'class'  => 'break-3-half break-2-full',
                        'link'   => themeLink($theme, '/portfolio-single.php'),
                        'root'   => themeLink($theme, '/portfolio.php')
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                        'class'  => 'break-3-half break-2-full',
                        'link'   => themeLink($theme, '/portfolio-single.php'),
                        'root'   => themeLink($theme, '/portfolio.php')
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                        'class'  => 'break-3-half break-2-full',
                        'link'   => themeLink($theme, '/portfolio-single.php'),
                        'root'   => themeLink($theme, '/portfolio.php')
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                        'class'  => 'break-3-half break-2-full',
                        'link'   => themeLink($theme, '/portfolio-single.php'),
                        'root'   => themeLink($theme, '/portfolio.php')
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                        'class'  => 'break-3-half break-2-full',
                        'link'   => themeLink($theme, '/portfolio-single.php'),
                        'root'   => themeLink($theme, '/portfolio.php')
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                        'class'  => 'break-3-half break-2-full',
                        'link'   => themeLink($theme, '/portfolio-single.php'),
                        'root'   => themeLink($theme, '/portfolio.php')
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                        'class'  => 'break-3-half break-2-full',
                        'link'   => themeLink($theme, '/portfolio-single.php'),
                        'root'   => themeLink($theme, '/portfolio.php')
                    ));
                    
                    articleItem(array(
                        'type'   => 'portfolio',
                        'matrix' => true,
                        'span'   => 4,
                        'class'  => 'break-3-half break-2-full min-break-3',
                        'link'   => themeLink($theme, '/portfolio-single.php'),
                        'root'   => themeLink($theme, '/portfolio.php')
                    ));
                    
                ?>
							
			</div><!-- portfolio-items -->
            
            <script>
                $(document).ready(function() {
                    $('#portfolio-categories').filterGrid({
                        items : '#portfolio-items'
                    });
                });
            </script>            
			
		</section>
		
        <?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>
    
    <?php scripts($theme) ?>
    
    <?php devAsset('', 'isotope.pkgd.js') ?>

</body>
</html>