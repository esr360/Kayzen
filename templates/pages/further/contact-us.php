<?php 
	include ('../../app.php');
	// page config
	$title = 'Get in Touch';
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
            
            contactUs();
            
        ?>
        
        <section class="section-primary-flush-dot-map container"> 
            
            <div class="container-small">
                
                <div class="row-block text-center">
                    
                    <!-- Facebook Shares Widget -->
                    <a href="#" class="widget-tub span bg-facebook">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-facebook"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="facebookShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Likes</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">Facebook</div>
                    </a>
                    
                    <!-- Twitter Shares Widget -->
                    <a href="#" class="widget-tub span bg-twitter">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="twitterShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Followers</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">Twitter</div>
                    </a>
                    
                    <!-- Google Plus Shares Widget -->
                    <a href="#" class="widget-tub span bg-google-plus">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-google-plus"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="googlePlusShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Likes</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">Google Plus</div>
                    </a>
                    
                    <!-- LinkedIn Shares Widget -->
                    <a href="#" class="widget-tub span bg-linkedin">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-linkedin"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="linkedInShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Likes</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">LinkedIn</div>
                    </a>
                    
                    <!-- StumbleUpon Shares Widget -->
                    <a href="#" class="widget-tub span bg-stumbleupon">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-stumbleupon"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="stumbleUponShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Views</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">StumbleUpon</div>
                    </a>
                    
                    <!-- Pinterest Shares Widget -->
                    <!--
                    <a href="#" class="widget-tub span bg-pinterest">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-pinterest"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="pinterestShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Likes</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">Pinterest</div>
                    </a>
                    -->
                    
                    <!-- Reddit Shares Widget -->
                    <!--
                    <a href="#" class="widget-tub span bg-reddit">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-reddit"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="redditShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Likes</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">Reddit</div>
                    </a>
                    -->
                    
                </div>

                <script>
                    $(document).ready(function() {
                        $.fn.KayzenSocialShareCount({
                            url : 'http://themeforest.net'
                        });
                    });
                </script>
            
            </div>
            
        </section> 
        
        <?php
            
            googleMap();
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>
		