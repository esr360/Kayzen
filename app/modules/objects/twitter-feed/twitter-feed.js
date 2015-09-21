//=================================================================
// Twitter Feed
//=================================================================

var tweetCount = 8;

$('#twitter-feed')
    .tweecool({
        username     : 'esr360', 
        limit        : tweetCount,
        show_actions : true,
        action_reply_icon : '<i class="fa fa-reply"></i>',
        action_retweet_icon : '<i class="fa fa-retweet"></i>',
        action_favorite_icon : '<i class="fa fa-star"></i>'
    })
    .find('.tweets')
    .addClass('owl-carousel');

$('body').on('DOMNodeInserted', '.tweet:nth-child(' + tweetCount + ')', function () {
    
    $(document).ready(function() { 
        
        $('.loading-tweets').hide();
        $('.tweets-nav').show();
        
        var tweetCarousel = $('#twitter-feed .tweets');
        
        tweetCarousel.owlCarousel({
            items: 1,
            loop: true
        });
        
        $('.tweet-prev').click(function() {
            tweetCarousel.trigger('prev.owl.carousel');
        });
        
        $('.tweet-next').click(function() {
            tweetCarousel.trigger('next.owl.carousel');
        });
        
    });
    
});