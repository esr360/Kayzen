<?php 
	include ('../../app.php');
	// page config
	$title = 'Get in Touch';
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
                'modifiers' => 'bar-brand'
            ));
            
        ?>
        
        <div class="section-primary" style="background-image: url(<?php echo appDir ?>/images/billboard-2.jpg);">
            <div class="container">
                <?php googleMap(array(
                    'size' => 'large'
                )); ?>
            </div>
        </div>
    
        <section class="section">
        
            <!-- Contact Us Header -->
            <header class="heading_group-block has-icon text-center">
                <div class="container-small">
                    <h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Contact Us</span></h4>
                    <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Get in Touch</span></h2>
                    <div class="heading_icon">
                        <i class="fa fa-globe"></i>
                    </div>
                </div>
            </header>
            
        </section>
        
        <section class="section-primary-panel-dot-map">
            
            <!-- Contact Form -->
            <form class="form-fauxPlaceholders-html5">
                <div class="container">
                    <div class="row row-waffle-large">
                        <div class="span-4">
                            <header class="heading_group">
                                <h3 class="heading-heavy-size-4">Lorem Ipsum</h3>
                                <h4 class="heading-light-uppercase-brand-1">Visual composer included</h4>
                            </header>
                            <p>Proin libero nibh, commodo non rutrum in, volutpat vel eros. Vestibulum vestibulum ullamcorper eros, at dapibus elit lacinia nec. Aliquam sem elit, suscipit sed dapibus vel, pretium finibus est.</p>
                            <ul class="list-reset">
                                <li><b><i class="fa fa-fw fa-brand fa-globe"></i> Location:</b> Manchester, Unted Kingdom</li>
                                <li><b><i class="fa fa-fw fa-brand fa-phone-square"></i> Phone:</b> (0161) 123 4567</li>
                                <li><b><i class="fa fa-fw fa-brand fa-envelope"></i> Email:</b> <a href="mailto:support@themeforest.net">support@themeforest.net</a></li>
                            </ul>
                            <div class="button_group-small">
                                <a href="#" class="button-icon-border-size-2 tooltip-top" data-tooltip="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-2 tooltip-top" data-tooltip="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-2 tooltip-top" data-tooltip="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-2 tooltip-top" data-tooltip="LinkedIn">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-2 tooltip-top" data-tooltip="DeviantArt">
                                    <i class="fa fa-deviantart"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-2 tooltip-top" data-tooltip="Behance">
                                    <i class="fa fa-behance"></i>
                                </a>
                            </div>
                        </div>
                        <div class="span-8">
                            <div class="row-flow">
                                <div class="form_group span-6">
                                    <input type="text" class="form_input-bg" id="fullName" placeholder="Ex: John Smith" required="">
                                    <label for="fullName">Full Name</label>
                                </div>
                                <div class="form_group span-6">
                                    <input type="email" class="form_input-bg" id="emailAddress" placeholder="john@smith.com" required="">
                                    <label for="emailAddress">Email Address</label>
                                </div>
                                <div class="form_group span-12">
                                    <textarea class="form_input-bg" placeholder="We aim to respond to all messages within 24 hours." id="yourMessage" rows="8" required=""></textarea>
                                    <label for="yourMessage">Your Message</label>
                                </div>
                            </div>
                            <div class="object">
                                <button type="submit" class="button-block-primary-size-3">Submit Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
        </section><!-- Contact Us -->
    
        <?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>
		