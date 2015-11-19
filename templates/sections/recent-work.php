 <?php function recentWork($custom = array()) { ?>

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
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Our Portfolio</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Some Recent Work</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
        
        <div class="container">
            
            <div class="row-no-gutter row-waffle">
                            
                <?php
                    
                    articleItem(array(
                        'type'      => 'portfolio',
                        'size'      => 'small',
                        'matrix'    => true,
                        'maskTitle' => false,
                        'span'      => 4
                    ));
                    
                    articleItem(array(
                        'type'      => 'portfolio',
                        'size'      => 'small',
                        'matrix'    => true,
                        'maskTitle' => false,
                        'span'      => 4
                    ));
                    
                    articleItem(array(
                        'type'      => 'portfolio',
                        'size'      => 'small',
                        'matrix'    => true,
                        'maskTitle' => false,
                        'span'      => 4
                    ));
                    
                ?>
                
            </div><!-- row -->
            
        </div><!-- container -->
        
    </section><!-- section -->
    
<?php } ?>