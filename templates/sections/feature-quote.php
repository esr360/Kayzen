<?php function featureQuote($custom = array()) { ?>

    <?php
    
        /**
         * Options 
         * Type: array
         * Usage: $options['VALUE']
         */
    
        $options = array_merge(array(
            
            //'option'   => 'VALUE'
            
        ), $custom);
        
    ?>

    <section class="section-secondary">
        <div class="container-small">
            <blockquote class="blockquote">
                <div class="blockquote_content">
                    <h4 class="heading-light-size-6 font-2">We can take your awesome ideas and turn them into an <b class="heading-heavy">exciting reality</b>...</h4>
                </div>
            </blockquote>
        </div>
    </section>
    
<?php } ?>