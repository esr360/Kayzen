<section class="section-primary">
        
    <div class="container">
        
        <div class="row">
            
            <div class="span-8">
        
                <div class="thumbnail-article">
                    <img src="<?php echo stockImage('demo/stock-'.rand(1, 7).'.jpg') ?>">
                </div>
        
                <?php demoPost() ?>
                
                <hr class="hrule-stripes-large" />
                
                <?php socialWidgets() ?>
                
                <?php include (ROOT.'/sections/project-author.php'); ?>
                
                <?php comments() ?>
                
                <h2 class="heading-size-6-light-strikethrough-dots text-center"><span>Related Posts</span></h2>

                <div class="row-flow row-waffle-large">
                    
                    <?php  
                    
                        articleItem(array(
                            'size'          => 'small',
                            'title'         => 'Kayzen is Released',
                            'span'          => 4,
                            'class'         => 'break-4-half break-2-full relative',
                            'blurb'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat...'
                        ));
                    
                        articleItem(array(
                            'size'          => 'small',
                            'title'         => 'Kayzen is Released',
                            'span'          => 4,
                            'class'         => 'break-4-half break-2-full relative',
                            'blurb'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat...'
                        ));
                    
                        articleItem(array(
                            'size'          => 'small',
                            'title'         => 'Kayzen is Released',
                            'span'          => 4,
                            'class'         => 'min-break-4 relative',
                            'blurb'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit lectus ex, id feugiat...'
                        ));
                        
                    ?>
            
                </div><!-- row -->

            </div><!-- main content (span-8) -->
        
            <hr class="hrule-stripes-large max-break-3" />
        
            <aside class="sidebar span-4">

                <?php sidebar(); ?>
                
            </aside><!-- sidebar -->
            
        </div><!-- row -->
        
    </div><!-- container -->

</section>