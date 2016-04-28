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

            appHeader(array(
                'nav-links'  => array(
                    'About' => '#s-about',
                    'Services' => '#s-services',
                    'Portfolio' => '#s-portfolio',
                    'Blog' => '#s-blog',
                    'Contact' => '#s-contact'
                )
            ));
            
			include (ROOT.'/views/homepages/_homepage-2.php');
            
            appFooter(array(
                'columns' => false
            )); 
                    
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