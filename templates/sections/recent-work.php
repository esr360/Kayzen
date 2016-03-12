 <?php function recentWork($custom = array()) { ?>

    <?php  $options = array_merge(array(
        'items'     => 3,
        'item-link' => pageLink('blog/single.php', 'pages', false)
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
                    
                    // last item
                    if ($i == $options['items'] - 1) {
                        articleItem(array(
                            'type'      => 'portfolio',
                            'matrix'    => true,
                            'span'      => 4,
                            'class'     => 'break-3-half break-2-full min-break-2',
                            'link'      => $options['item-link']
                        ));
                    } 
                    
                    // all other items
                    else {
                        articleItem(array(
                            'type'      => 'portfolio',
                            'matrix'    => true,
                            'span'      => 4,
                            'class'     => 'break-3-half break-2-full',
                            'link'      => $options['item-link']
                        ));
                    }
                    
                } ?>
                
            </div><!-- row -->
            
        </div><!-- container -->
        
    </section><!-- section -->
    
<?php } ?>