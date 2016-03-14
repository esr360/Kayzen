<?php 
	include ('../../app.php');
	// page config
	$title = 'Asked & Answered';
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
            
        ?>
        
        <section class="section-primary">
            <div class="container-small">
                
                <div class="tabs">
                    
                    <ul class="tabs_nav-pills-large-center min-break-2">
                        <li class="button-pill-grey-1-round active">View All</li>
                        <li class="button-pill-grey-1-round">Pre-purchase</li>
                        <li class="button-pill-grey-1-round">Installation</li>
                        <li class="button-pill-grey-1-round">Downloading</li>
                        <li class="button-pill-grey-1-round">Refunds</li>
                    </ul>
            
                    <section class="tabs_item active">   
                        <div class="accordion-keep-open-minimal">
                            <section class="object active">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Do I get free support?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Are updates free?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Are there any other costs?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Do you offer installation services?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> What are the installation requirements?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Can I install on more than one device?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Am I provided with an instant download link?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Does my download expire?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> How do I download updates?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Do you offer refunds?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Can I exchange my item?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Where do I return items to?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                        </div>
                    </section>
            
                    <section class="tabs_item">   
                        <div class="accordion-keep-open-minimal">
                            <section class="object active">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Do I get free support?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Are updates free?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Are there any other costs?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                        </div>
                    </section>
            
                    <section class="tabs_item">   
                        <div class="accordion-keep-open-minimal">
                            <section class="object active">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Do you offer installation services?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> What are the installation requirements?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Can I install on more than one device?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                        </div>
                    </section>
            
                    <section class="tabs_item">   
                        <div class="accordion-keep-open-minimal">
                            <section class="object active">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Am I provided with an instant download link?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Does my download expire?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> How do I download updates?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                        </div>
                    </section>
            
                    <section class="tabs_item">   
                        <div class="accordion-keep-open-minimal">
                            <section class="object active">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Do you offer refunds?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Can I exchange my item?</h4>
                                </header>
                                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Aliquam erat volutpat. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros.</p></div>
                            </section>
                            <section class="object">
                                <header class="heading_group-small">
                                    <h4 class="heading-size-4-border"><strong>Q.</strong> Where do I return items to?</h4>
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

    <?php scripts() ?>

</body>