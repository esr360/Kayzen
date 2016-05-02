<section class="section-primary">
        
    <div class="container-small">
        
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
                    'class'         => 'break-4-half break-2-full relative'
                ));
            
                articleItem(array(
                    'size'          => 'small',
                    'title'         => 'Kayzen is Released',
                    'span'          => 4,
                    'class'         => 'break-4-half break-2-full relative'
                ));
            
                articleItem(array(
                    'size'          => 'small',
                    'title'         => 'Kayzen is Released',
                    'span'          => 4,
                    'class'         => 'min-break-4 relative'
                ));
                
            ?>
            
        </div><!-- row -->

    </div><!-- container -->
    
</section>

<?php promoBanner() ?>