<?php function twitterFeed($custom = array()) { ?>

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

    <!-- Twitter Feed -->
    <div class="twitter-feed-dark">
        <a class="loading-tweets" href="http://twitter.com/esr360" target="blank">
            <i class="fa fa-twitter"></i>
        </a>
        <div class="twitter-feed_content container">
            <div class="tweets-nav icon_group-small">
                <div class="tweet-prev button-icon-border-size-2">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="tweet-next button-icon-border-size-2">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    
<?php } ?>