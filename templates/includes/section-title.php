<?php function sectionTitle($custom = array()) { ?>
    
    <? $options = array_merge(array(
        'title'     => 'This is Kayzen',
        'sub-title' => 'The New Experience',
        'icon'      => 'fa-magic',
        'text'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget       lorem tortor.'
    ), $custom); ?>
    
    <section class="section">
            
        <header class="heading_group-block text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span><?php echo $options['title'] ?></span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span><?php echo $options['sub-title'] ?></span></h2>
                <div class="heading_icon">
                    <i class="fa <?php echo $options['icon'] ?>"></i>
                </div>
                <p class="lede"><?php echo $options['text'] ?></p>
            </div>
        </header>
        
    </section>
    
<?php } ?>