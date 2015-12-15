 <?php function recentArticles($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            
            //'option' => 'VALUE'
            
        ), $custom);
        
    ?>

    <section class="section-primary">
        
        <header class="heading_group-large text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Our Blog</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Keep Up To Date</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
        
        <div class="container">		
            <div class="row">	
                
                <div class="span-4 relative">	
                    <div class="thumbnail-zoom">
                        <div class="thumbnail_mask">
                            <div class="icon_group-small">
                                <a href="#" class="button-icon-border-circle">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="#" class="button-icon-border-circle">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg">
                    </div>
                    <div class="thumbnail-profile-round-badge">
                        <img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
                    </div>
                    <header class="heading_group">
                        <div class="heading_date">
                            <div>Sep</div>
                            <div>23</div>
                        </div>
                        <h3 class="heading-heavy-size-5">Kayzen is Released</h3>
                        <h4 class="heading-light-size-3">Posted by <a href="#">Naomi Olson</a></h4>
                    </header>
                    <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec finibus fringilla purus. Integer libero justo, mattis et magna eget...</p>
                    <div class="row">
                        <div class="span-6 va-middle">
                            <a href="#" class="button-oval-primary">Read More</a>
                        </div>
                        <div class="span-6 va-middle text-right">
                            <small>Posted in <a href="blog.html">Web Design</a></small>
                        </div>
                    </div>
                </div>
                
                <div class="span-4 relative">	
                    <div class="thumbnail-zoom">
                        <div class="thumbnail_mask">
                            <div class="icon_group-small">
                                <a href="#" class="button-icon-border-circle">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="#" class="button-icon-border-circle">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg">
                    </div>
                    <div class="thumbnail-profile-round-badge">
                        <img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
                    </div>
                    <header class="heading_group">
                        <div class="heading_date">
                            <div>Sep</div>
                            <div>23</div>
                        </div>
                        <h3 class="heading-heavy-size-5">Kayzen is Released</h3>
                        <h4 class="heading-light-size-3">Posted by <a href="#">Naomi Olson</a></h4>
                    </header>
                    <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec finibus fringilla purus. Integer libero justo, mattis et magna eget...</p>
                    <div class="row">
                        <div class="span-6 va-middle">
                            <a href="#" class="button-oval-primary">Read More</a>
                        </div>
                        <div class="span-6 va-middle text-right">
                            <small>Posted in <a href="blog.html">Web Design</a></small>
                        </div>
                    </div>
                </div>
                
                <div class="span-4 relative">	
                    <div class="thumbnail-zoom">
                        <div class="thumbnail_mask">
                            <div class="icon_group-small">
                                <a href="#" class="button-icon-border-circle">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="#" class="button-icon-border-circle">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo appDir ?>/images/wallpapers/bg-3.jpg">
                    </div>
                    <div class="thumbnail-profile-round-badge">
                        <img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
                    </div>
                    <header class="heading_group">
                        <div class="heading_date">
                            <div>Sep</div>
                            <div>23</div>
                        </div>
                        <h3 class="heading-heavy-size-5">Kayzen is Released</h3>
                        <h4 class="heading-light-size-3">Posted by <a href="#">Naomi Olson</a></h4>
                    </header>
                    <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec finibus fringilla purus. Integer libero justo, mattis et magna eget...</p>
                    <div class="row">
                        <div class="span-6 va-middle">
                            <a href="#" class="button-oval-primary">Read More</a>
                        </div>
                        <div class="span-6 va-middle text-right">
                            <small>Posted in <a href="blog.html">Web Design</a></small>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>
    
<?php } ?>