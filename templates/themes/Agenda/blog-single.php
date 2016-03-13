<?php 
	include ('../../app.php');
	// page config
	$title = 'Single Post Title';
	$tagLine = 'Aenean lobortis ante nunc, curabitur at enim ac nisi lacinia.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 

            appHeader(array(
                'nav-links'  => array(
                    'Home' => themeLink('/index.php'),
                    'About' => themeLink('/about.php'),
                    'Services' => themeLink('/services.php'),
                    'Portfolio' => themeLink('/portfolio.php'),
                    'Blog' => themeLink('/blog.php'),
                    'Contact' => themeLink('/contact.php')
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
                    <img src="<?php stockImage('demo/hero-'.rand(1, 7).'.jpg') ?>">
                </div>
                
                <?php demoPost() ?>
                
                <hr class="hrule-stripes-large" />
                
				<?php socialWidgets() ?>
                
                <div class="object-large">
                
                    <div class="heading_group">
                        <h2 class="heading-size-6-light-strikethrough-dots text-center"><span>The Author</span></h2>
                    </div>
                    
                    <div class="row row-waffle">
                        <div class="span-2 text-center">
                            <div class="thumbnail-mini-profile-round-xlarge-styled">
                                <img src="<?php stockImage('team/team-2.jpg') ?>" alt="">
                            </div>
                            <div class="icon_group-small">
                                <a href="#" class="button-icon-border-size-1 tooltip-top" data-tooltip="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-1 tooltip-top" data-tooltip="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-1 tooltip-top" data-tooltip="LinkedIn">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                        <div class="span-10">
                            <header class="heading_group">
                                <h3 class="heading-size-4 font-2">Jane Doe</h3>
                                <h3 class="heading-light-size-3-brand-1 font-2">Graphic Designer</h3>
                            </header>
                            <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</p>
                        </div>
                    </div>
                
                </div>
                
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
                            'link'          => themeLink('/blog-single.php'),
                            'root'          => themeLink('/blog.php'),
                            'class'         => 'break-4-half break-2-full relative'
                        ));
                    
                        articleItem(array(
                            'size'          => 'small',
                            'title'         => 'Kayzen is Released',
                            'cta-modifiers' => '-oval',
                            'span'          => 4,
                            'link'          => themeLink('/blog-single.php'),
                            'root'          => themeLink('/blog.php'),
                            'class'         => 'break-4-half break-2-full relative'
                        ));
                    
                        articleItem(array(
                            'size'          => 'small',
                            'title'         => 'Kayzen is Released',
                            'cta-modifiers' => '-oval',
                            'span'          => 4,
                            'link'          => themeLink('/blog-single.php'),
                            'root'          => themeLink('/blog.php'),
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

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>