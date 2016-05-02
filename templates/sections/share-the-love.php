<?php function shareTheLove($custom = array()) { ?>

    <?php $options = array_replace_recursive(array(
        'title' => array(
            'content' => 'Share The Love',
            'modifiers' => 'heading-uppercase-light-brand-1-spaced-size-4',
            'highlight' => false
        ),
        'sub-title' => array(
            'content' => 'We Are Social <i class="fa fa-heart heading-brand-1"></i>',
            'modifiers' => 'heading-uppercase-heavy-size-6 font-2',
            'highlight' => false
        )
    ), $custom); ?>
 
    <section class="section-primary-dot-map">
        
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
                    <i class="fa fa-link"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
        
        <div class="container">
            <div class="button_group-small text-center">
                <a 
                    href="#"
                    class="tooltip-top button-icon-size-6-border-circle-primary"
                    data-tooltip="Facebook"
                >
                    <i class="fa fa-facebook"></i>
                </a>
                <a 
                    href="#"
                    class="tooltip-top button-icon-size-6-border-circle-primary"
                    data-tooltip="Twitter"
                >
                    <i class="fa fa-twitter"></i>
                </a>
                <a 
                    href="#"
                    class="tooltip-top button-icon-size-6-border-circle-primary"
                    data-tooltip="Github"
                >
                    <i class="fa fa-github-alt"></i>
                </a>
                <a 
                    href="#" 
                    class="tooltip-top button-icon-size-6-border-circle-primary"
                    data-tooltip="Dribbble"
                >
                    <i class="fa fa-dribbble"></i>
                </a>
            </div>
        </div>
        
    </section>
    
<?php } ?>