//=================================================================
// Footer
//=================================================================

//-----------------------------------------------------------------
// Footer Twitter Feed
//-----------------------------------------------------------------

var tweetCount = 8;

$('#footer-twitter-feed')
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

$('body').on('DOMNodeInserted', '#footer-twitter-feed .tweet:nth-child(' + tweetCount + ')', function () {
    
    $(document).ready(function() { 
        
        var tweetCarousel = $('#footer-twitter-feed .tweets');
        
        tweetCarousel.owlCarousel({
            items: 1,
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
    
});

//-----------------------------------------------------------------
// Footer Testimonials
//-----------------------------------------------------------------

$(document).ready(function() { 
        
    var footerTestimonials = $('#footer-testimonials');
    
    footerTestimonials.owlCarousel({
        items: 1,
        loop: true,
        margin: 20
    });
        
    $('.footer_testimonials-nav .tweet-prev').click(function() {
        footerTestimonials.trigger('prev.owl.carousel');
    });
    
    $('.footer_testimonials-nav .tweet-next').click(function() {
        footerTestimonials.trigger('next.owl.carousel');
    });

});