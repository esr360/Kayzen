<?php 
    include ('../../app.php');
    // page config
    $theme = 'Lily';
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
                    'Shop' => themeLink($theme, '/shop-category.php'),
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
        
                <div id="shop-items" class="row-flow row-waffle-large fixed-table">
                        
                    <?php
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'ribbon'   => array('green', 'New'),
                            'size'     => 'small',
                            'height'   => 'tall',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'height'   => 'tall',
                            'media'    => 'carousel',
                            'size'     => 'small',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'ribbon'   => array('pink', 'Sale'),
                            'height'   => 'tall',
                            'price'    => array('$24.99', '$19.99'),
                            'size'     => 'small',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'height'   => 'tall',
                            'size'     => 'small',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'ribbon'   => array('green-disabled', 'Out of Stock'),
                            'height'   => 'tall',
                            'size'     => 'small',
                            'disabled' => true,
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'ribbon'   => array('blue', 'Last One!'),
                            'size'     => 'small',
                            'height'   => 'tall',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'height'   => 'tall',
                            'media'    => 'carousel',
                            'size'     => 'small',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'ribbon'   => array('pink', 'Sale'),
                            'height'   => 'tall',
                            'media'    => 'carousel',
                            'price'    => array('$24.99', '$19.99'),
                            'size'     => 'small',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'height'   => 'tall',
                            'media'    => 'carousel',
                            'size'     => 'small',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'ribbon'   => array('pink', 'Half Price!'),
                            'size'     => 'small',
                            'price'    => array('$24.99', '$12.49'),
                            'height'   => 'tall',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'height'   => 'tall',
                            'size'     => 'small',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                        articleItem(array(
                            'type'     => 'shop',
                            'title'    => 'Lorem Ipsum',
                            'disabled' => true,
                            'ribbon'   => array('green', 'Out of Stock'),
                            'height'   => 'tall',
                            'media'    => 'carousel',
                            'price'    => array('$24.99', '$12.99'),
                            'size'     => 'small',
                            'span'     => 3,
                            'class'    => 'break-3-half break-2-full',
                            'link'     => themeLink($theme, '/shop-single.php'),
                            'root'     => themeLink($theme, '/shop-category.php')
                        ));
                        
                    ?>
                    
                </div>  
                
                <ul class="pagination tabs_nav-pills-center">
                    <li class="tabs_nav_item"><i class="fa fa-angle-left"></i></li>
                    <li class="tabs_nav_item">1</li>
                    <li class="tabs_nav_item active">2</li>
                    <li class="tabs_nav_item">3</li>
                    <li class="tabs_nav_item">...</li>
                    <li class="tabs_nav_item">10</li>
                    <li class="tabs_nav_item"><i class="fa fa-angle-right"></i></li>
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

    <?php scripts($theme) ?>

</body>
</html>