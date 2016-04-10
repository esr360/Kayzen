 <?php function recentWork($custom = array()) { ?>

    <?php  $options = array_merge(array(
        'title'     => 'Our Portfolio',
        'sub-title' => 'Some Recent Work',
        'items'     => 3,
        'item-link' => pageLink('blog/single.php', 'pages', false),
        'id' => null
    ), $custom); ?>

    <section class="section-primary" <?php if ($options['id']) echo 'id="'.$options['id'].'"' ?>>
    
        <header class="heading_group-large text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span><?php echo $options['title'] ?></span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span><?php echo $options['sub-title'] ?></span></h2>
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