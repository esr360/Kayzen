<?php function shareTheLove($custom = array()) { ?>

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
 
    <section class="section-primary-dot-map">
        
        <header class="heading_group-large text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Share The Love</span></h4>
                <h2 class="heading-uppercase-heavy-size-6 font-2"><span>We Are Social <i class="fa fa-heart fa-brand"></i></span></h2>
                <div class="heading_icon">
                    <i class="fa fa-link"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
        
        <div class="container">
            <div class="icon_group-small text-center">
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