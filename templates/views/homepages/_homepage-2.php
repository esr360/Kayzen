<section class="billboard-full-screen-overlay">
    <div class="billboard_wrapper container text-left">
        <div class="short" id="billboard-fade-parallax">
            <header class="heading_group">
                <h3 class="heading-uppercase-heavy-size-8 font-2">Welcome to Kayzen</h3>
                <h2 class="heading-light-size-6"><span>A Unique & Modern Theme Framework</span></h2>
            </header>
            <p class="lede">Welcome to Kayzen; the next generation of website & app theming. Kayzen is more than just a theme, it's a theme framework, custom built from the ground up to help make theming great again.</p>
            <div class="button_group">
                <a class="button-oval-size-4-white" href="#">Purchase Now</a>
                <a class="button-oval-size-4-border-white" href="#">Explore The Potential</a>
            </div>
        </div>
    </div>
    <nav class="slide-nav">
        <button class="slide-prev button-icon-border-size-3-white"><i class="fa fa-angle-left"></i></button>
        <button class="slide-next button-icon-border-size-3-white"><i class="fa fa-angle-right"></i></button>
    </nav>
    <a href="#s-welcome" class="scroll-wheel"></a>
</section>

<?php 

    earthSlider(); 
    
    skills(array(
        'cta-modifiers' => '-oval'
    ));

    whyChooseUs();

    promoBanner(array(
        'cta-modifiers' => '-oval'
    ));

    ourTeam();
    
    promoSection(array(
        'cta-modifiers' => '-oval'
    ));
    
    services();
    
    statistics();
    
    keyFeatures2();
    
    clients();
    
    pricing();
    
    featureQuote();
    
    recentWork(array(
        'items' => 6
    ));
    
    testimonials();
    
    recentArticles();

    promoBanner(array(
        'cta-modifiers' => '-oval'
    ));
    
    contactUs();
    
    googleMap();
    
?>