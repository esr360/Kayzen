<?php 
	include ('../../app.php');
	// page config
	$title = 'Our Services';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
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
            
            whyChooseUs();
    
            featureQuote();
            
            pricing();
            
            testimonials();
            
            options();
            
        ?>

        <section class="row-block">
            
            <div class="widget-spectrum-quarter-large span-3">
                <header class="widget_header heading_group">
                    <h4 class="heading-uppercase-size-3">Lorem Ipsim</h4>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a nunc aliquam, pretium ligula sed, suscipit felis. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                <a href="#" class="button-border-white">Learn More</a>
            </div>
            
            <div class="widget-spectrum-quarter-large span-3">
                <header class="widget_header heading_group">
                    <h4 class="heading-uppercase-size-3">Lorem Ipsim</h4>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a nunc aliquam, pretium ligula sed, suscipit felis. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                <a href="#" class="button-border-white">Learn More</a>
            </div>
            
            <div class="widget-spectrum-quarter-large span-3">
                <header class="widget_header heading_group">
                    <h4 class="heading-uppercase-size-3">Lorem Ipsim</h4>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a nunc aliquam, pretium ligula sed, suscipit felis. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                <a href="#" class="button-border-white">Learn More</a>
            </div>
            
        </section>
    
        <?php
            
            recentWork();
            
            promoBanner();
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>
		