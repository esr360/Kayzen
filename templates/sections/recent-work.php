 <?php function recentWork($custom = array()) { ?>

    <?php  $options = array_merge(array(
        'items' => 3
    ), $custom); ?>

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
            
            <div class="row-no-gutter">
                            
                <?php for ($i = 0; $i < $options['items']; $i++) {
                    
                    articleItem(array(
                        'type'      => 'portfolio',
                        'matrix'    => true,
                        'span'      => 4
                    ));
                    
                } ?>
                
            </div><!-- row -->
            
        </div><!-- container -->
        
    </section><!-- section -->
    
<?php } ?>