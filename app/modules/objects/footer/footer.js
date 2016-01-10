(function ($) {
    
    /**
     * 
     * KAYZEN
     * @module: 'footer'
     * @dependencies: 'twitter-feed', OwlCarousel, TweeCool
     * @author: @esr360
     * 
     */
 
    $.fn.footer = function(custom) {
        
        // Options
        var options = $.extend({
            
            twitterFeedSelector  : '#footer-twitter-feed',
            twitterFeedCount     : 8,
            twitterFeedUser      : 'esr360',
            testimonialsSelector : '#footer-testimonials'
            
        }, custom);
        
        // Footer Twitter Feed
        function twitterFeed() {
            
            // Call the twitter feed plugin
            $(options.twitterFeedSelector).tweecool({
                username     : options.twitterFeedUser, 
                limit        : options.twitterFeedCount,
                show_actions : true,
                action_reply_icon : '<i class="fa fa-reply"></i>',
                action_retweet_icon : '<i class="fa fa-retweet"></i>',
                action_favorite_icon : '<i class="fa fa-star"></i>'
            });
            
            // Prepare the twitter feed to receive owl-carousel function
            $(options.twitterFeedSelector).find('.tweets').addClass('owl-carousel');
            
            // Get the last loaded tweet
            var lastTweet = options.twitterFeedSelector + ' .tweet:nth-child(' + options.twitterFeedCount + ')';
            
            // When the last tweet item has loaded, call the owl-carousel plugin
            $('body').on('DOMNodeInserted', lastTweet, function () {
                    
                var tweetCarousel = $(options.twitterFeedSelector + ' .tweets');
                
                tweetCarousel.owlCarousel({
                    items: 1,
                    dots: false,
                    loop: true,
                    margin: 20
                });
                
                $('.footer_tweets-nav .tweet-prev').click(function() {
                    tweetCarousel.trigger('prev.owl.carousel');
                });
                
                $('.footer_tweets-nav .tweet-next').click(function() {
                    tweetCarousel.trigger('next.owl.carousel');
                });
                
            });
            
        } // twitterFeed()
        
        // Footer Testimonials
        function testimonials() {
            
            var footerTestimonials = $(options.testimonialsSelector);
            
            footerTestimonials.owlCarousel({
                items: 1,
                dots: false,
                loop: true,
                margin: 20
            });
                
            $('.footer_testimonials-nav .tweet-prev').click(function() {
                footerTestimonials.trigger('prev.owl.carousel');
            });
            
            $('.footer_testimonials-nav .tweet-next').click(function() {
                footerTestimonials.trigger('next.owl.carousel');
            });
            
        } // testimonials()
        
        // Run the code on each occurance of the element
        return this.each(function() {
            
            twitterFeed();
            testimonials();
            
        }); // this.each
 
    }; // footer()
 
}(jQuery));