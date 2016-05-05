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
                'modifiers' => ' side-nav',
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