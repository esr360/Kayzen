<?php 
	include ('../../app.php');
	// page config
	$title = 'Search Results';
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
                
                <header class="heading_group-large text-center">
                    <h3 class="heading-size-4">Didn't find what you were looking for?</h3>
                    <form class="form text-center">
                        <div class="form_group span-6">
                            <button type="submit" class="button-icon-primary-size-3"><i class="fa fa-search"></i></button>
                            <input type="text" class="form_input" id="newSearch" placeholder="Search for a page" required>
                        </div>
                    </form>
                </header>
                
                <section id="free-support" class="object-large">
                    <header class="heading_group-small">
                        <h4 class="heading-size-4-dotted"><a href="#">Do I get free support?</a></h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. <mark>Aliquam erat volutpat</mark>. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros...</p>
                </section>
                
                <section id="free-support" class="object-large">
                    <header class="heading_group-small">
                        <h4 class="heading-size-4-dotted"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. <mark>Aliquam erat volutpat</mark>. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros...</p>
                </section>
                
                <section id="free-support" class="object-large">
                    <header class="heading_group-small">
                        <h4 class="heading-size-4-dotted"><a href="#">About Us</a></h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. <mark>Aliquam erat volutpat</mark>. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros...</p>
                </section>
                
                <section id="free-support" class="object-large">
                    <header class="heading_group-small">
                        <h4 class="heading-size-4-dotted"><a href="#">Phasellus Sed Vehicula Ligula</a></h4>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <mark>Aliquam erat volutpat</mark>. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros...</p>
                </section>
                
                <section id="free-support" class="object">
                    <header class="heading_group-small">
                        <h4 class="heading-size-4-dotted"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h4>
                    </header>
                    <p><mark>Aliquam erat volutpat</mark>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed eros congue leo tincidunt mattis. Vivamus bibendum laoreet nibh nec gravida. Phasellus a efficitur est, ac lacinia ipsum. Ut sit amet tellus mauris. Phasellus sed vehicula ligula. Donec ac congue arcu. Morbi metus felis, feugiat facilisis turpis nec, vulputate sollicitudin eros...</p>
                </section>
                
                <ul class="pagination tabs_nav-pills object-center">
                    <li class="button-pill-grey-1-thin"><i class="fa fa-angle-left"></i></li>
                    <li class="button-pill-grey-1-thin">1</li>
                    <li class="button-pill-grey-1-thin active">2</li>
                    <li class="button-pill-grey-1-thin">3</li>
                    <li class="button-pill-grey-1-thin">...</li>
                    <li class="button-pill-grey-1-thin">10</li>
                    <li class="button-pill-grey-1-thin"><i class="fa fa-angle-right"></i></li>
                </ul>
                
            </div><!-- container -->
            
        </section><!-- section -->	
        
        <?php
        
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
		