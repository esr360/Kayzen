 <?php function appFooter($custom = array()) { ?>

    <?php $options = array_merge(array(
        'columns' => true,
        'blurb' => true
    ), $custom); ?>
    
    <footer class="footer" id="footer">
        
        <?php if ($options['columns']) { ?>
            <div class="footer_wrapper">
                <div class="container">
                    <div class="row-flow row-waffle-large fixed-table">
                        
                        <!-- Meta -->
                        <div class="span-3 break-4-half break-2-full">
                            <div class="logo">
                                <a href="/"><img src="<?php echo appDir ?>/images/logo-white.png" alt="logo" /></a>
                            </div>
                            <?php if ($options['blurb']) { ?>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in hendrerit neque, suscipit congue mauris.</p>
                            <?php } ?>
                            <ul class="list-reset">
                                <li><b><i class="fa fa-fw heading-brand-1 fa-globe"></i> Location:</b> Manchester, Unted Kingdom</li>
                                <li><b><i class="fa fa-fw heading-brand-1 fa-phone-square"></i> Phone:</b> (0161) 123 4567</li>
                                <li><b><i class="fa fa-fw heading-brand-1 fa-envelope"></i> Email:</b> <a href="mailto:support@themeforest.net">support@themeforest.net</a></li>
                            </ul>
                        </div>
                        
                        <hr class="hrule-stripes max-break-2" />
                        
                        <!-- Newsletter -->
                        <div class="span-3 break-4-half break-2-full">
                            
                            <header class="heading_group-small">
                                <h4 class="footer_title heading-heavy-uppercase-size-3 font-2">
                                    Newsletter
                                </h4>
                                <h5 class="heading-light-brand-1">
                                    Signup to our mailing list
                                </h5>
                            </header>
                            
                            <div class="footer_content">
                                
                                <p>Suspendisse tempus sodales neque eget.</p>
                                
                                <form class="form-fauxPlaceholders">
                                    <div class="form_group-small">
                                        <button type="submit" class="button-icon-primary-size-3-acute"><i class="fa fa-thumbs-o-up"></i></button>
                                        <input type="text" class="form_input-plain" id="footer-newsletter" placeholder="Ex: help@kayzen.com" required="">
                                        <label for="footer-newsletter">Email Address</label>
                                    </div>
                                </form>
                                
                                <div class="button_group-small">
                                    <a 
                                        href="https://dribbble.com/esr360/projects/308469-Kayzen" 
                                        taret="blank" 
                                        class="button-icon-size-2 tooltip-top" 
                                        data-tooltip="Dribbble"
                                    >
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                    <a 
                                        href="https://www.facebook.com/SkyUXThemes/" 
                                        taret="blank" 
                                        class="button-icon-size-2 tooltip-top" 
                                        data-tooltip="Facebook"
                                    >
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a 
                                        href="https://twitter.com/ESR360" 
                                        taret="blank" 
                                        class="button-icon-size-2 tooltip-top" 
                                        data-tooltip="Twitter"
                                    >
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a 
                                        href="https://uk.linkedin.com/in/esr360" 
                                        taret="blank" 
                                        class="button-icon-size-2 tooltip-top" 
                                        data-tooltip="LinkedIn"
                                    >
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <a 
                                        href="http://esr360.deviantart.com/" 
                                        taret="blank" 
                                        class="button-icon-size-2 tooltip-top" 
                                        data-tooltip="DeviantArt"
                                    >
                                        <i class="fa fa-deviantart"></i>
                                    </a>
                                    <a 
                                        href="https://www.behance.net/esr360" 
                                        taret="blank" 
                                        class="button-icon-size-2 tooltip-top" 
                                        data-tooltip="Behance"
                                    >
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </div>
                            
                            </div>
                            
                            <hr class="hrule-stripes max-break-2" />
                            
                        </div>
                        
                        <!-- Twitter Feed -->
                        <div class="span-3 break-4-half break-2-full" id="footer-twitter-feed">
                            <header class="heading_group-small">
                                <h4 class="footer_title heading-heavy-uppercase-size-3 font-2">
                                    <i class="fa fa-twitter"></i> Twitter Feed
                                </h4>
                                <h5 class="heading-light-brand-1">
                                    View our latest tweets
                                </h5>
                                <div class="footer_tweets-nav button_group-small">
                                    <div class="tweet-prev button-icon-circle-size-1">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                    <div class="tweet-next button-icon-circle-size-1">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                            </header>
                            <div class="twitter-feed_content"></div>
                            <hr class="hrule-stripes max-break-2" />
                        </div>
                        
                        <!-- Testimonials -->
                        <div class="span-3 break-4-half break-2-full">
                            
                            <header class="heading_group-small">
                                <h4 class="footer_title heading-heavy-uppercase-size-3 font-2">
                                    Testimonials
                                </h4>
                                <h5 class="heading-light-brand-1">
                                    See what our clients say
                                </h5>
                                <div class="footer_testimonials-nav button_group-small">
                                    <div class="tweet-prev button-icon-circle-size-1">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                    <div class="tweet-next button-icon-circle-size-1">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                            </header>
                            
                            <div id="footer-testimonials" class="owl-carousel">
                                
                                <blockquote class="blockquote-testimonial">
                                    <div class="blockquote_bubble">
                                        <div class="blockquote_content">
                                            Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...
                                        </div>
                                    </div>
                                    <footer class="blockquote_footer">
                                        <a class="blockquote_avatar-small" href="">
                                            <img src="<?php echo stockImage('team/team-1.jpg') ?>" alt="">
                                        </a>
                                        <div class="blockquote_cite heading_group">
                                            <h4 class="heading-size-2 font-2">John Dough</h4>
                                            <h5 class="heading-light-brand-1-size-2">Theme Forest</h5>
                                        </div>
                                    </footer>
                                </blockquote>	
                                
                                <blockquote class="blockquote-testimonial">
                                    <div class="blockquote_bubble">
                                        <div class="blockquote_content">
                                            Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...
                                        </div>
                                    </div>
                                    <footer class="blockquote_footer">
                                        <a class="blockquote_avatar-small" href="">
                                            <img src="<?php echo stockImage('team/team-1.jpg') ?>" alt="">
                                        </a>
                                        <div class="blockquote_cite heading_group">
                                            <h4 class="heading-size-2 font-2">John Dough</h4>
                                            <h5 class="heading-light-brand-1-size-2">Theme Forest</h5>
                                        </div>
                                    </footer>
                                </blockquote>
                            
                            </div>
                            
                        </div><!-- Testimonials -->
                        
                    </div>
                </div>
            </div>
        <?php } ?>
        
        <div class="container">
            <div class="footer_bar">
                <!-- Copyright Section -->
                <div class="footer_copyright">
                    <h4>© Your Website 2015</h4>
                </div>
                <!-- Footer Navigation -->
                <nav class="footer_nav">                
                    <ul>
                        <li><a href="#">Footer Link 1</a></li>
                        <li><a href="#">Footer Link 2</a></li>
                        <li><a href="#">Footer Link 3</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
    </footer>

<?php } ?>