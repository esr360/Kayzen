 <?php function recentArticles($custom = array()) { ?>

    <?php $options = array_merge(array(
        'item-link' => pageLink('blog/single.php', 'pages', false),
        'item-root' => pageLink('blog.php', 'pages', false)
    ), $custom); ?>

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
            <div class="row row-flow row-waffle-large">	
            
                <?php  
                
                    articleItem(array(
                        'title'         => 'Kayzen is Released',
                        'cta-modifiers' => '-oval',
                        'span'          => 4,
                        'author-thumb'  => true,
                        'widget'        => false,
                        'link'          => $options['item-link'],
                        'root'          => $options['item-root'],
                        'class'         => 'break-3-half break-2-full relative'
                    ));
                
                    articleItem(array(
                        'title'         => 'Kayzen is Released',
                        'cta-modifiers' => '-oval',
                        'span'          => 4,
                        'author-thumb'  => true,
                        'widget'        => false,
                        'link'          => $options['item-link'],
                        'root'          => $options['item-root'],
                        'class'         => 'break-3-half break-2-full relative'
                    ));
                
                    articleItem(array(
                        'title'         => 'Kayzen is Released',
                        'cta-modifiers' => '-oval',
                        'span'          => 4,
                        'author-thumb'  => true,
                        'widget'        => false,
                        'link'          => $options['item-link'],
                        'root'          => $options['item-root'],
                        'class'         => 'min-break-3 relative'
                    ));
                    
                ?>
                
            </div>
        </div>
        
    </section>
    
<?php } ?>