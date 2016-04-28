<section class="section-primary">
    
    <div class="container">
        
        <div class="row fixed-table">
            
            <div class="span-8">
    
                <section class="section-primary-flush-mini">
                        
                    <header class="heading_group-large text-center">
                        <div class="container-small">
                            <h4 class="heading-uppercase-light-brand-1-spaced-size-3"><span>Single Project</span></h4>
                            <h2 class="heading-uppercase-heavy-size-6 font-2"><span>See How We Did It</span></h2>
                            <div class="heading_icon">
                                <i class="fa fa-magic"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit turpis imperdiet tempus. Etiam venenatis maximus luctus.</p>
                        </div>
                    </header>
                    
                </section>
            
                <section class="section-mini-flush relative text-center">
                        
                    <div class="span-8">
                        <div class="desktop-graphic">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <span class="desktop-graphic_image owl-carousel" id="portfolio-thumbs">
                                <div class="bg-cover" style="background-image: url('<?php echo stockImage('demo/stock-1.jpg')?>')"></div>
                                <div class="bg-cover" style="background-image: url('<?php echo stockImage('demo/stock-2.jpg')?>')"></div>
                                <div class="bg-cover" style="background-image: url('<?php echo stockImage('demo/stock-3.jpg')?>')"></div>
                                <div class="bg-cover" style="background-image: url('<?php echo stockImage('demo/stock-4.jpg')?>')"></div>
                            </span>
                        </div>
                        <nav class="slide-nav" id="desktop-graphic_nav">
                            <button class="slide-prev button-icon-border-size-3-grey-3"><i class="fa fa-angle-left"></i></button>
                            <button class="slide-next button-icon-border-size-3-grey-3"><i class="fa fa-angle-right"></i></button>
                        </nav>
                    </div>
                                
                    <script>
                        $(document).ready(function() {
                            
                            var thumbsCarousel = $("#portfolio-thumbs");
                            
                            thumbsCarousel.owlCarousel({
                                items : 1,
                                loop  : true,
                                dots  : false
                            });
                            
                            $("#desktop-graphic_nav .slide-next").click(function() {
                                thumbsCarousel.trigger('next.owl.carousel');
                            });
                            $("#desktop-graphic_nav .slide-prev").click(function() {
                                thumbsCarousel.trigger('prev.owl.carousel');
                            });
                            
                        });
                    </script>
                    
                </section>
    
                <section class="section-mini-flush">
                    <div class="container-small text-center">
                        <p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Vestibulum euismod nisi tincidunt mollis sagittis. Sed rutrum quam non tortor ornare, ut semper lorem pellentesque. <a href="#">Mauris bibendum</a> velit mi, in elementum ex consequat id..</p>
                    </div>
                </section>
                
                <section class="section-mini-flush">
                        
                    <header class="heading_group-large">
                        <h2 class="heading-size-6-light-strikethrough-dots text-center"><span>What We Did</span></h2>
                    </header>
                    
                    <div class="widget_group row-waffle row-magic text-center stack-break-2">
                        
                        <!-- Feature 1 -->
                        <div class="widget-borderTop-highlight-block-scale span">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h3 class="heading-heavy-size-3">100% Responsive</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet adipiscing elit. Nunc et erat posuere suscipit.</p>
                        </div>
                        
                        <!-- Feature 2 -->
                        <div class="widget-borderTop-highlight-block-scale span">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-clipboard"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h3 class="heading-heavy-size-3">Simple Page Builder</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet adipiscing elit. Nunc et erat posuere suscipit.</p>
                        </div>
                        
                        <!-- Feature 3 -->
                        <div class="widget-borderTop-highlight-block-scale span">
                            <div class="widget_icon button-icon-plain-size-8">
                                <i class="fa fa-photo"></i>
                            </div>
                            <header class="widget_header heading_group">
                                <h3 class="heading-heavy-size-3">Retina Ready</h3>
                                <h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
                            </header>
                            <p>Lorem ipsum dolor sit amet adipiscing elit. Nunc et erat posuere suscipit.</p>
                        </div>
                        
                    </div><!-- Features Row -->
                        
                </section><!-- section -->
                        
                <section class="section-primary-mini-flush">
                    
                    <header class="heading_group">
                        <h2 class="heading-heavy-size-5 font-2">Digital Agency</h2>
                        <h3 class="heading-light-brand-1-size-4">A Modern Template for Creative Blogs</h3>
                    </header>
                    <p>Create multiple themes for your project and swap them at the change of a variable. Kayzen's unique theming system allows you to rapidly build multiple themes without altering any of the source code. The code for your theme is automatically generated based on the settings you pass in the configuration file.</p>
                    <div class="row">
                        <div class="span-6">
                            <ul class="list-arrow">
                                <li>Lorem ipsum dolor sit amet consectetur</li>
                                <li>Donec malesuada metus non massa sodales auctor</li>
                                <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                                <li>Etiam dapibus, nulla placerat</li>
                            </ul>
                        </div>
                        <div class="span-6">
                            <ul class="list-arrow">
                                <li>Lorem ipsum dolor sit amet consectetur</li>
                                <li>Donec malesuada metus non massa sodales auctor</li>
                                <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                                <li>Etiam dapibus, nulla placerat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="button_group object">
                        <a class="button-primary-size-2" href="#">View Modules</a>
                        <a class="button-size-2" href="#">Learn More</a>
                    </div>
                        
                </section><!-- section -->
                
                <section class="section-mini-flush"> 
        
                    <?php socialWidgets() ?>
                    
                </section>   
                                        
                <section 
                    class="section-secondary-mini-overlay-alt"
                    style="background-image: url('<?php echo appDir ?>/images/polygon-bg-blue.jpg')"
                >
                
                    <div class="container text-center force-dots">
                        
                        <blockquote class="blockquote">
                            <a class="blockquote_avatar-large" href="#">
                                <img src="<?php echo stockImage('team/team-2.jpg')?>" alt="">
                            </a>
                            <div class="blockquote_content">
                                <p>Suspendisse tempus sodales neque, eget eleifend <b>turpis tristique</b> eu. Nullam a nisl maximus, <b>ultrices est</b> ut blandit nislr, elit in lobortis mattis.</p>
                            </div>
                            <div class="blockquote_cite"> 
                                <h4 class="heading-highlight-light"><b>Brendon Mack - Theme Forest</b></h4>
                            </div>
                        </blockquote>
                    
                </section>    

                <section class="section-mini-sink">
                    
                    <header class="heading_group-large text-center">
                        <div class="container-small">
                            <h4 class="heading-uppercase-light-brand-1-spaced-size-3"><span>Our Portfolio</span></h4>
                            <h2 class="heading-uppercase-heavy-size-6 font-2"><span>Some Recent Work</span></h2>
                            <div class="heading_icon">
                                <i class="fa fa-magic"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
                        </div>
                    </header>
                        
                    <div class="row-no-gutter">
                        
                        <?php
                            
                            articleItem(array(
                                'type'      => 'portfolio',
                                'size'      => 'small',
                                'matrix'    => true,
                                'maskTitle' => false,
                                'span'      => 4,
                                'class'     => 'break-3-half break-2-full'
                            ));
                            
                            articleItem(array(
                                'type'      => 'portfolio',
                                'size'      => 'small',
                                'matrix'    => true,
                                'maskTitle' => false,
                                'span'      => 4,
                                'class'     => 'break-3-half break-2-full'
                            ));
                            
                            articleItem(array(
                                'type'      => 'portfolio',
                                'size'      => 'small',
                                'matrix'    => true,
                                'maskTitle' => false,
                                'span'      => 4,
                                'class'     => 'break-3-half break-2-full'
                            ));
                            
                            articleItem(array(
                                'type'      => 'portfolio',
                                'size'      => 'small',
                                'matrix'    => true,
                                'maskTitle' => false,
                                'span'      => 4,
                                'class'     => 'break-3-half break-2-full max-break-3'
                            ));
                            
                        ?>
                        
                    </div><!-- row -->
                    
                </section><!-- section -->
                
            </div><!-- main content (span-8) -->
            
            <hr class="hrule-stripes-large max-break-3" />
            
            <aside class="sidebar span-4">

                <?php sidebar(); ?>
                
            </aside><!-- sidebar -->
            
        </div><!-- row -->
        
    </div><!-- container -->
    
</section><!-- section -->