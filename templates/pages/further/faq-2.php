<?php 
	include ('../../app.php');
	// page config
	$title = 'Asked & Answered';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

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
                        
                        <header class="heading_group">
                            <h3 class="heading-size-5">What would you like help with?</h3>
                        </header>
                        
                        <div class="well-deep">
                            <ul class="list-arrow">
                                <li><a href="#free-support">Do I get free support?</a></li>
                                <li><a href="#free-updates">Are updates free?</a></li>
                                <li><a href="#other-costs">Are there any other costs?</a></li>
                                <li><a href="#installation-services">Do you offer installation services?</a></li>
                                <li><a href="#installation-requirements">What are the installation requirements?</a></li>
                                <li><a href="#multiple-devices">Can I install on more than one device?</a></li>
                                <li><a href="#instant-download">Am I provided with an instant download link?</a></li>
                                <li><a href="#download-expire">Does my download expire?</a></li>
                                <li><a href="#how-update">How do I download updates?</a></li>
                                <li><a href="#offer-refunds">Do you offer refunds?</a></li>
                                <li><a href="#exchange-item">Can I exchange my item?</a></li>
                                <li><a href="#return-items">Where do I return items to?</a></li>
                            </ul>
                        </div>
                        
                        <section id="free-support" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> Do I get free support?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="free-updates" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> Are updates free?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="other-costs" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> Are there any other costs?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="installation-services" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> Do you offer installation services?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="installation-requirements" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> What are the installation requirements?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="multiple-devices" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> Can I install on more than one device?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="instant-download" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> Am I provided with an instant download link?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="download-expire" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> Does my download expire?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="how-update" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> How do I download updates?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="offer-refunds" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> Do you offer refunds?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="exchange-item" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> Can I exchange my item?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                        <section id="return-items" class="object">
                            <header class="heading_group-small">
                                <h4 class="heading-size-4-border"><strong>Q.</strong> Where do I return items to?</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p>
                        </section>
                        
                    </div>
					
					<aside class="sidebar span-4">
    
                        <?php sidebar(); ?>
						
					</aside><!-- sidebar -->
                    
                </div><!-- row -->
                
            </div><!-- container -->
            
        </section>
        
        
        <?php
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>