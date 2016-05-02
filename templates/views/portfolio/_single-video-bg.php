<?php

    sectionTitle(array(
        'title' => 'Single Project',
        'sub-title' => 'See How We Did It',
        'icon' => 'fa-magic'
    ));
        
    include (ROOT.'/sections/portfolio-thumbs.php');
    
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