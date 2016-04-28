<?php masonryFeatures(array(
    'background' => '/images/billboard-2.jpg',
)) ?>

<section class="section-primary">
    
    <div class="container">		
        
        <div class="row fixed-table">
            
            <div class="newsfeed span-8">
                    
                <?php articleCarousel() ?>
                
                <hr class="hrule-stripes-large" />
                        
                <!-- Featured Articles -->
                        
                <div class="row stack-break-2 row-waffle-large">	
                    
                    <?php
        
                        articleItem(array(
                            'title'         => 'Kayzen is Released',
                            'cta-modifiers' => '-oval',
                            'span'          => 6,
                            'author-thumb'  => 'team/team-1.jpg',
                            'widget'        => false,
                            'class'         => 'break-3-half break-2-full relative'
                        ));
                    
                        articleItem(array(
                            'title'         => 'Lorem Ipsum Dolor',
                            'cta-modifiers' => '-oval',
                            'span'          => 6,
                            'author-thumb'  => 'team/team-2.jpg',
                            'widget'        => false,
                            'class'         => 'break-3-half break-2-full relative'
                        ));
                        
                    ?>
                    
                </div><!-- row -->
                
                <hr class="hrule-stripes-large" />
                        
                <!-- Featured Categories -->
                
                <div class="widget_group row-flow row-waffle-large text-center">
                    
                    <div class="widget-borderTop-highlight-block-scale span-4 break-4-half break-2-full">
                        <div class="widget_icon button-icon-plain-size-8">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <header class="widget_header heading_group">
                            <h3 class="heading-heavy-size-4">100% Responsive</h3>
                            <h4 class="heading-light-uppercase-brand-1">Optimized For Mobiles</h4>
                        </header>
                        <p>Kayzen has been built using our own custom responsive grid system; Kayzen GS.</p>
                    </div>
                    
                    <div class="widget-borderTop-highlight-block-scale span-4 break-4-half break-2-full">
                        <div class="widget_icon button-icon-plain-size-8">
                            <i class="fa fa-eyedropper"></i>
                        </div>
                        <header class="widget_header heading_group">
                            <h3 class="heading-heavy-size-4">Unlimited Colors</h3>
                            <h4 class="heading-light-uppercase-brand-1">Any Color You Want</h4>
                        </header>
                        <p>Change the entire color scheme of your theme by changing just one variable.</p>
                    </div>
                    
                    <div class="widget-borderTop-highlight-block-scale span-4 min-break-4">
                        <div class="widget_icon button-icon-plain-size-8">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <header class="widget_header heading_group">
                            <h3 class="heading-heavy-size-4">Premade Demos</h3>
                            <h4 class="heading-light-uppercase-brand-1">Get Setup Instantly</h4>
                        </header>
                        <p>Kayzen comes with a bunch of premade demos which are built using the provided templates.</p>
                    </div>
                    
                </div>
                
                <hr class="hrule-stripes-large" />
                        
                <!-- Featured Comments -->
                
                <section 
                    class="section-secondary-mini-overlay-alt"
                    style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
                >
                
                    <div class="container text-center owl-carousel force-dots" id="testimonials-carousel">
                        
                        <blockquote class="blockquote">
                            <a class="blockquote_avatar-large" href="#">
                                <img src="<?php echo stockImage('team/team-2.jpg') ?>" alt="">
                            </a>
                            <div class="blockquote_content">
                                <p>Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
                            </div>
                            <div class="blockquote_cite"> 
                                <h4 class="heading-highlight-light"><b>Sarah Marshall - Theme Forest</b></h4>
                            </div>
                        </blockquote>
                        
                        <blockquote class="blockquote">
                            <a class="blockquote_avatar-large" href="#">
                                <img src="<?php echo stockImage('team/team-2.jpg') ?>" alt="">
                            </a>
                            <div class="blockquote_content">
                                <p>Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
                            </div>
                            <div class="blockquote_cite"> 
                                <h4 class="heading-highlight-light"><b>Brendon Mack - Theme Forest</b></h4>
                            </div>
                        </blockquote>
                        
                    </div>
                    
                    <script>
                        $(document).ready(function() {
                            
                            var testimonialsCarousel = $("#testimonials-carousel");
                            
                            testimonialsCarousel.owlCarousel({
                                items: 1,
                                margin: 30
                            })
                            
                        });
                    </script>
                    
                </section>
                
                <hr class="hrule-stripes-large" />
                        
                <!-- More Articles -->
                
                <div class="row-flow row-waffle-large">
                    
                    <div class="span-4 break-4-half break-2-full relative">	
                        <div class="thumbnail-zoom">
                            <div class="thumbnail_mask">
                                <div class="thumbnail_controls button_group-small">
                                    <a 
                                        href="<?php echo stockImage('demo/stock-7.jpg') ?>" 
                                        class="button-icon-border-circle" 
                                        rel="lightbox"
                                    >
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#" class="button-icon-border-circle">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="<?php echo stockImage('demo/stock-7.jpg') ?>">
                        </div>
                        <header class="heading_group">
                            <div class="heading_date">
                                <div>Sep</div>
                                <div>23</div>
                            </div>
                            <h3 class="heading-heavy-size-3">Kayzen is Released</h3>
                            <h4 class="heading-light">Posted by <a href="#">Naomi Olson</a></h4>
                        </header>
                        <p>Cum socis natoque penatibus et magnis dis parturient montes...</p>
                        <div class="row-block stack-0">
                            <div class="span va-middle">
                                <a href="#" class="button-oval-primary-size-2">Read More</a>
                            </div>
                            <div class="span va-middle text-right">
                                <small>Posted in <a href="blog.html">Web Design</a></small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="span-4 break-4-half break-2-full relative">	
                        <div class="thumbnail-zoom">
                            <div class="thumbnail_mask">
                                <div class="thumbnail_controls button_group-small">
                                    <a 
                                        href="<?php echo stockImage('demo/stock-5.jpg') ?>" 
                                        class="button-icon-border-circle" 
                                        rel="lightbox"
                                    >
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#" class="button-icon-border-circle">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="<?php echo stockImage('demo/stock-5.jpg') ?>">
                        </div>
                        <header class="heading_group">
                            <div class="heading_date">
                                <div>Sep</div>
                                <div>23</div>
                            </div>
                            <h3 class="heading-heavy-size-3">Lorem Ipsum Dolor</h3>
                            <h4 class="heading-light">Posted by <a href="#">Naomi Olson</a></h4>
                        </header>
                        <p>Cum socis natoque penatibus et magnis dis parturient montes...</p>
                        <div class="row-block stack-0">
                            <div class="span va-middle">
                                <a href="#" class="button-oval-primary-size-2">Read More</a>
                            </div>
                            <div class="span va-middle text-right">
                                <small>Posted in <a href="blog.html">Web Design</a></small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="span-4 relative min-break-4">	
                        <div class="thumbnail-zoom">
                            <div class="thumbnail_mask">
                                <div class="thumbnail_controls button_group-small">
                                    <a 
                                        href="<?php echo stockImage('demo/stock-3.jpg') ?>" 
                                        class="button-icon-border-circle" 
                                        rel="lightbox"
                                    >
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#" class="button-icon-border-circle">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="<?php echo stockImage('demo/stock-3.jpg') ?>">
                        </div>
                        <header class="heading_group">
                            <div class="heading_date">
                                <div>Sep</div>
                                <div>23</div>
                            </div>
                            <h3 class="heading-heavy-size-3">Kayzen is The Best</h3>
                            <h4 class="heading-light">Posted by <a href="#">James Wilson</a></h4>
                        </header>
                        <p>Cum socis natoque penatibus et magnis dis parturient montes...</p>
                        <div class="row-block stack-0">
                            <div class="span va-middle">
                                <a href="#" class="button-oval-primary-size-2">Read More</a>
                            </div>
                            <div class="span va-middle text-right">
                                <small>Posted in <a href="blog.html">News/Updates</a></small>
                            </div>
                        </div>
                    </div>
            
                </div>
                
            </div><!-- newsfeed -->
            
            <hr class="hrule-stripes-large max-break-3" />
            
            <aside class="sidebar span-4">

                <?php sidebar(); ?>
                
            </aside><!-- sidebar -->
            
        </div><!-- row -->
        
    </div><!-- container -->
                
</section>

<?php googleMap() ?>