<?php

    sectionTitle(array(
        'title' => 'Single Project',
        'sub-title' => 'See How We Did It',
        'icon' => 'fa-magic'
    ));

?>
        
<section class="section-primary-flush relative container text-center">
        
    <div class="span-7">
        <div class="desktop-graphic">
            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
            <div class="desktop-graphic_image owl-carousel" id="portfolio-thumbs">
                <div class="auto-resizable-iframe" data-iframe-height="56.5%">
                    <div>
                        <iframe allowfullscreen="" src="http://www.youtube.com/embed/Q3oItpVa9fs?theme=light"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<?php

    include (ROOT.'/sections/project-summary.php');
            
    include (ROOT.'/sections/what-we-did.php');
            
    projectSections();
    
    socialWidgets(array(
        'section' => 'section-primary-flush-dot-map container'
    ));

    include (ROOT.'/sections/project-testimonial.php');

    recentWork();

    promoBanner();

?>