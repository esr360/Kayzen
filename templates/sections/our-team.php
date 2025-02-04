<?php function ourTeam($custom = array()) { ?>

    <?php $options = array_merge(array(
        'title' => array(
            'content' => 'Our Team',
            'modifiers' => 'heading-uppercase-light-brand-1-spaced-size-4',
            'highlight' => false
        ),
        'sub-title' => array(
            'content' => 'Meet Our Crazy Team',
            'modifiers' => 'heading-uppercase-heavy-size-7 font-2',
            'highlight' => false
        )
    ), $custom); ?>
    
    <section class="section-primary">
    
        <header class="heading_group-large text-center">
            <div class="container-small">
                <h4 class="<?php echo $options['title']['modifiers'] ?>">
                    <?php if ($options['title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        <?php echo $options['title']['content'] ?>
                    <?php if ($options['title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h4>
                <h2 class="<?php echo $options['sub-title']['modifiers'] ?>">
                    <?php if ($options['sub-title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        <?php echo $options['sub-title']['content'] ?>
                    <?php if ($options['sub-title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
        
        <div class="container">
            <div class="row row-waffle-large stack-break-2">
                
                <div class="span-4">
                    <div class="thumbnail">
                        <div class="thumbnail_mask">
                            <div class="thumbnail_controls">
                                <a href="<?php echo stockImage('team/team-1.jpg') ?>" class="button-icon-border-circle" rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo stockImage('team/team-1.jpg') ?>" alt="">
                    </div>
                    <header class="heading_group">
                        <h3 class="heading-heavy-size-4">Alexander	Welch</h3>
                        <h4 class="heading-light-uppercase-brand-1">Chief Executive Officer</h4>
                    </header>
                    <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur maximus ridiculus mus. Donec finibus fringilla ultrices purus.</p>		
                    <div class="object">
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="Dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="LinkedIn">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>	
                </div>
                
                <div class="span-4">
                    <div class="thumbnail">
                        <div class="thumbnail_mask">
                            <div class="thumbnail_controls">
                                <a href="<?php echo stockImage('team/team-2.jpg') ?>" class="button-icon-border-circle" rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo stockImage('team/team-2.jpg') ?>" alt="">
                    </div>
                    <header class="heading_group">
                        <h3 class="heading-heavy-size-4">Naomi Olson</h3>
                        <h4 class="heading-light-uppercase-brand-1">Graphic Designer</h4>
                    </header>
                    <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur maximus ridiculus mus. Donec finibus fringilla ultrices purus.</p>		
                    <div class="object">
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="LinkedIn">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="DeviantArt">
                            <i class="fa fa-deviantart"></i>
                        </a>
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="Behance">
                            <i class="fa fa-behance"></i>
                        </a>
                    </div>	
                </div>
                
                <div class="span-4">
                    <div class="thumbnail">
                        <div class="thumbnail_mask">
                            <div class="thumbnail_controls">
                                <a href="<?php echo stockImage('team/team-3.jpg') ?>" class="button-icon-border-circle" rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo stockImage('team/team-3.jpg') ?>" alt="">
                    </div>
                    <header class="heading_group">
                        <h3 class="heading-heavy-size-4">Brendan Mack</h3>
                        <h4 class="heading-light-uppercase-brand-1">Web Developer</h4>
                    </header>
                    <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur maximus ridiculus mus. Donec finibus fringilla ultrices purus.</p>		
                    <div class="object">
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="Dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="button-icon-primary tooltip-top" data-tooltip="LinkedIn">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>	
                </div>
                
            </div><!-- row -->
        </div><!-- container -->
        
    </section>

<?php } ?>