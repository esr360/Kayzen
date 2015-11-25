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
            <div class="container-small">
                
                <div class="tabs">
                    <div class="text-center">
                        <ul class="tabs_nav-pills-large">
                            <li class="button-pill-grey-1-thin active">View All</li>
                            <li class="button-pill-grey-1-thin">Pre-purchase</li>
                            <li class="button-pill-grey-1-thin">Installation</li>
                            <li class="button-pill-grey-1-thin">Downloading</li>
                            <li class="button-pill-grey-1-thin">Refunds</li>
                        </ul>
                    </div>
            
                    <section class="tabs_content active">   
                        <div class="accordion-keep-open-minimal">
                            <section class="object active">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Do I get free support?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Are updates free?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Are there any other costs?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Do you offer installation services?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> What are the installation requirements?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Can I install on more than one device?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Am I provided with an instant download link?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Does my download expire?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> How do download updates?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Do you offer refunds?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Can I exchange my item?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Where do I return items to?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                        </div>
                    </section>
            
                    <section class="tabs_content">   
                        <div class="accordion-keep-open-minimal">
                            <section class="object active">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Do I get free support?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Are updates free?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Are there any other costs?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                        </div>
                    </section>
            
                    <section class="tabs_content">   
                        <div class="accordion-keep-open-minimal">
                            <section class="object active">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Do you offer installation services?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> What are the installation requirements?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Can I install on more than one device?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                        </div>
                    </section>
            
                    <section class="tabs_content">   
                        <div class="accordion-keep-open-minimal">
                            <section class="object active">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Am I provided with an instant download link?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Does my download expire?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> How do download updates?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                        </div>
                    </section>
            
                    <section class="tabs_content">   
                        <div class="accordion-keep-open-minimal">
                            <section class="object active">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Do you offer refunds?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Can I exchange my item?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-dotted"><strong>Q.</strong> Where do I return items to?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                        </div>
                    </section>
                    
                </div>
                
            </div>
        </section>
        
        <?php
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>