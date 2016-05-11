 <?php function recentArticles($custom = array()) {
     
    if ($GLOBALS['theme'] == 'Kayzen') {
        $itemLink = pageLink('blog/single.php', 'pages', false);
        $itemRoot = pageLink('blog.php', 'pages', false);
    } else {
        $itemLink = themeLink($GLOBALS['theme'], '/blog-single.php');
        $itemRoot = themeLink($GLOBALS['theme'], '/blog.php');
    } 

    $options = array_replace_recursive([
        'item-link' => $itemLink,
        'item-root' => $itemRoot,
        'id' => null,
        'title' => [
            'content' => 'Our Blog',
            'modifiers' => 'heading-uppercase-light-brand-1-spaced-size-4',
            'highlight' => false
        ],
        'sub-title' => [
            'content' => 'Keep Up To Date',
            'modifiers' => 'heading-uppercase-heavy-size-7 font-2',
            'highlight' => false
        ]
    ], $custom) ?>

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
            <div class="row row-flow row-waffle-large">	
            
                <?php  
                
                    articleItem(array(
                        'title'         => 'Kayzen is Released',
                        'span'          => 4,
                        'author-thumb'  => 'team/team-1.jpg',
                        'widget'        => false,
                        'link'          => $options['item-link'],
                        'root'          => $options['item-root'],
                        'class'         => 'break-3-half break-2-full relative'
                    ));
                
                    articleItem(array(
                        'title'         => 'Kayzen is Released',
                        'span'          => 4,
                        'author-thumb'  => 'team/team-2.jpg',
                        'widget'        => false,
                        'link'          => $options['item-link'],
                        'root'          => $options['item-root'],
                        'class'         => 'break-3-half break-2-full relative'
                    ));
                
                    articleItem(array(
                        'title'         => 'Kayzen is Released',
                        'span'          => 4,
                        'author-thumb'  => 'team/team-3.jpg',
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