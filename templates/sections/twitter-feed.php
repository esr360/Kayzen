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
        <div class="container" id="twitter-feed">
            <div class="tweets-nav icon_group-small">
                <div class="tweet-prev icon-border">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="tweet-next icon-border">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    
<?php } ?>