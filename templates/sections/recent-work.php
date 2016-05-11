 <?php function recentWork($custom = []) {

    $options = array_merge([
        'items' => 3,
        'id' => null,
        'title' => [
            'content' => 'Our Portfolio',
            'modifiers' => 'heading-uppercase-light-brand-1-spaced-size-4',
            'highlight' => false
        ],
        'sub-title' => [
            'content' => 'Some Recent Work',
            'modifiers' => 'heading-uppercase-heavy-size-7 font-2',
            'highlight' => false
        ]
    ], $custom); ?>

    <section class="section-primary" <?php if ($options['id']) echo 'id="'.$options['id'].'"' ?>>
    
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
            
            <div class="row-no-gutter">
                            
                <?php for ($i = 0; $i < $options['items']; $i++) {   
                    
                    // last item
                    if ($i == $options['items'] - 1) {
                        articleItem([
                            'type'      => 'portfolio',
                            'matrix'    => true,
                            'span'      => 4,
                            'class'     => 'break-3-half break-2-full min-break-2'
                        ]);
                    } 
                    
                    // all other items
                    else {
                        articleItem([
                            'type'      => 'portfolio',
                            'matrix'    => true,
                            'span'      => 4,
                            'class'     => 'break-3-half break-2-full'
                        ]);
                    }
                    
                } ?>
                
            </div><!-- row -->
            
        </div><!-- container -->
        
    </section><!-- section -->
    
<?php } ?>