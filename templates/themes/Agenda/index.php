<?php 
    include ('../../app.php');
    // page config
    $theme = 'Agenda';
    $title = 'Homepage 2';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head($theme) ?>

<body>
    
    <?php preloader() ?>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 

            appHeader([
                'nav-links'  => [
                    'About' => '#s-about',
                    'Services' => '#s-services',
                    'Portfolio' => '#s-portfolio',
                    'Blog' => '#s-blog',
                    'Contact' => '#s-contact'
                ]
            ]);
            
			_homepage2([
                'billboard' => [
                    'type' => 'homepage',
                    'wrapper-class' => 'container text-left',
                    'headline' => [
                        'heading-uppercase-heavy-size-8 font-2',
                        'Welcome to Kayzen'
                    ],
                    'title' => [
                        'heading-light-size-6',
                        'A Unique & Modern Theme Framework'
                    ],
                    'ctas' => [
                        [
                            'button-size-4-white',
                            '#',
                            'Purchase Now'
                        ],
                        [
                            'button-size-4-border-white',
                            '#s-welcome',
                            'Explore The Potential'
                        ]
                    ],
                    'bg-parallax' => false,
                    'fade-parallax' => true,
                    'wheel-anchor' => '#s-welcome',
                    'slide-nav' => false
                ]
            ]);
            
            appFooter([
                'columns' => false
            ]); 
                    
        ?>
        
        <script>
            $(document).ready(function() {
                $(window).load(function() {
                    $('#app-nav').scrollSpy({
                        itemSelector : 'li'
                    });
                });
            });
        </script>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts($theme) ?>

</body>
</html>