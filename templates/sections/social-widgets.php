<?php function socialWidgets($custom = array()) { ?>

    <?php $options = array_merge(array( 
        'url'         => '"http://themeforest.net"',   
        'facebook'    => true, 
        'twitter'     => true, 
        'google-plus' => true, 
        'linkedin'    => true, 
        'stumbleupon' => true, 
        'pinterest'   => false, 
        'reddit'      => false,
        'section'     => null,
        'container'   => false
    ), $custom); ?>
    
    <?php if ($options['section']) echo '<section class="'.$options['section'].'">' ?>

        <div class="row-block text-center stack-break-0">
                    
            <!-- Facebook Shares Widget -->
            <?php if ($options['facebook']) { ?>
                <a href="#" class="widget-tub span bg-facebook">
                    <div class="widget_lid">
                        <div class="widget_sticker-small button-icon-plain-size-6">
                            <i class="fa fa-facebook"></i>
                        </div>
                    </div>
                    <div class="widget_content">
                        <header class="heading_group share-amount">
                            <h3 id="facebookShareCount" class="heading-size-5">0</h3>
                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                        </header>
                    </div>
                    <div class="button-block-acute relative font-2">Facebook</div>
                </a>
            <?php } ?>
            
            <!-- Twitter Shares Widget -->
            <?php if ($options['twitter']) { ?>
                <a href="#" class="widget-tub span bg-twitter">
                    <div class="widget_lid">
                        <div class="widget_sticker-small button-icon-plain-size-6">
                            <i class="fa fa-twitter"></i>
                        </div>
                    </div>
                    <div class="widget_content">
                        <header class="heading_group share-amount">
                            <h3 id="twitterShareCount" class="heading-size-5">0</h3>
                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                        </header>
                    </div>
                    <div class="button-block-acute relative font-2">Twitter</div>
                </a>
            <?php } ?>
            
            <!-- Google Plus Shares Widget -->
            <?php if ($options['google-plus']) { ?>
                <a href="#" class="widget-tub span bg-google-plus">
                    <div class="widget_lid">
                        <div class="widget_sticker-small button-icon-plain-size-6">
                            <i class="fa fa-google-plus"></i>
                        </div>
                    </div>
                    <div class="widget_content">
                        <header class="heading_group share-amount">
                            <h3 id="googlePlusShareCount" class="heading-size-5">0</h3>
                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                        </header>
                    </div>
                    <div class="button-block-acute relative font-2">Google Plus</div>
                </a>
            <?php } ?>
            
            <!-- LinkedIn Shares Widget -->
            <?php if ($options['linkedin']) { ?>
                <a href="#" class="widget-tub span bg-linkedin">
                    <div class="widget_lid">
                        <div class="widget_sticker-small button-icon-plain-size-6">
                            <i class="fa fa-linkedin"></i>
                        </div>
                    </div>
                    <div class="widget_content">
                        <header class="heading_group share-amount">
                            <h3 id="linkedInShareCount" class="heading-size-5">0</h3>
                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                        </header>
                    </div>
                    <div class="button-block-acute relative font-2">LinkedIn</div>
                </a>
            <?php } ?>
            
            <!-- StumbleUpon Shares Widget -->
            <?php if ($options['stumbleupon']) { ?>
                <a href="#" class="widget-tub span bg-stumbleupon">
                    <div class="widget_lid">
                        <div class="widget_sticker-small button-icon-plain-size-6">
                            <i class="fa fa-stumbleupon"></i>
                        </div>
                    </div>
                    <div class="widget_content">
                        <header class="heading_group share-amount">
                            <h3 id="stumbleUponShareCount" class="heading-size-5">0</h3>
                            <h3 class="heading-size-2-light-uppercase">Views</h3>
                        </header>
                    </div>
                    <div class="button-block-acute relative font-2">StumbleUpon</div>
                </a>
            <?php } ?>
            
            <!-- Pinterest Shares Widget -->
            <?php if ($options['pinterest']) { ?>
                <a href="#" class="widget-tub span bg-pinterest">
                    <div class="widget_lid">
                        <div class="widget_sticker-small button-icon-plain-size-6">
                            <i class="fa fa-pinterest"></i>
                        </div>
                    </div>
                    <div class="widget_content">
                        <header class="heading_group share-amount">
                            <h3 id="pinterestShareCount" class="heading-size-5">0</h3>
                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                        </header>
                    </div>
                    <div class="button-block-acute relative font-2">Pinterest</div>
                </a>
            <?php } ?>
            
            <!-- Reddit Shares Widget -->
            <?php if ($options['reddit']) { ?>
                <a href="#" class="widget-tub span bg-reddit">
                    <div class="widget_lid">
                        <div class="widget_sticker-small button-icon-plain-size-6">
                            <i class="fa fa-reddit"></i>
                        </div>
                    </div>
                    <div class="widget_content">
                        <header class="heading_group share-amount">
                            <h3 id="redditShareCount" class="heading-size-5">0</h3>
                            <h3 class="heading-size-2-light-uppercase">Shares</h3>
                        </header>
                    </div>
                    <div class="button-block-acute relative font-2">Reddit</div>
                </a>
            <?php } ?>
            
        </div>
    
    <?php if ($options['section']) echo '</section>' ?>
            
    <script id="pageScripts">
        
        $(document).ready(pageScripts);
            
        function pageScripts() {
            $.fn.KayzenSocialShareCount(<?php if (realm == 'demo') { ?>{
                url : <?php echo $options['url'] ?>
            }<?php } ?>);
        }
        
    </script>    
    
<?php } ?>