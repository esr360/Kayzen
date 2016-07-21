<?php function articleCarousel($custom = array()) { 
    
    $options = array_merge(array(
    ), $custom); ?>
							
    <div class="relative">
            
        <!-- Latest Articles -->
      
        <div class="owl-carousel" id="latest-articles">
            
            <div class="thumbnail-feature">
                <img src="<?php echo stockImage('demo/stock-1.jpg') ?>" alt="">
                <div class="thumbnail_content">
                    <header class="heading_group-small">
                        <div class="heading_date">
                            <div>Sep</div>
                            <div>23</div>
                        </div>
                        <div>
                            <h3 class="heading-heavy-size-4">Kayzen is Released</h3>
                        </div>
                    </header>
                    <div class="thumbnail_excerpt">Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</div>
                </div>
            </div>
            
            <div class="thumbnail-feature">
                <img src="<?php echo stockImage('demo/stock-12.jpg') ?>" alt="">
                <div class="thumbnail_content">
                    <header class="heading_group-small">
                        <div class="heading_date">
                            <div>Sep</div>
                            <div>23</div>
                        </div>
                        <div>
                            <h3 class="heading-heavy-size-4">Kayzen is Released</h3>
                        </div>
                    </header>
                    <div class="thumbnail_excerpt">Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</div>
                </div>
            </div>
            
            <div class="thumbnail-feature">
                <img src="<?php echo stockImage('demo/stock-11.jpg') ?>" alt="">
                <div class="thumbnail_content">
                    <header class="heading_group-small">
                        <div class="heading_date">
                            <div>Sep</div>
                            <div>23</div>
                        </div>
                        <div>
                            <h3 class="heading-heavy-size-4">Kayzen is Released</h3>
                        </div>
                    </header>
                    <div class="thumbnail_excerpt">Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</div>
                </div>
            </div>
            
            <div class="thumbnail-feature">
                <img src="<?php echo stockImage('demo/stock-10.jpg') ?>" alt="">
                <div class="thumbnail_content">
                    <header class="heading_group-small">
                        <div class="heading_date">
                            <div>Sep</div>
                            <div>23</div>
                        </div>
                        <div>
                            <h3 class="heading-heavy-size-4">Kayzen is Released</h3>
                        </div>
                    </header>
                    <div class="thumbnail_excerpt">Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</div>
                </div>
            </div>
            
            <div class="thumbnail-feature">
                <img src="<?php echo stockImage('demo/stock-9.jpg') ?>" alt="">
                <div class="thumbnail_content">
                    <header class="heading_group-small">
                        <div class="heading_date">
                            <div>Sep</div>
                            <div>23</div>
                        </div>
                        <div>
                            <h3 class="heading-heavy-size-4">Kayzen is Released</h3>
                        </div>
                    </header>
                    <div class="thumbnail_excerpt">Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</div>
                </div>
            </div>
            
        </div>
        
        <nav class="thumbnail_nav slide-nav" id="latest-articles-nav">
            <button class="slide-prev button-icon-size-4"><i class="fa fa-angle-left"></i></button>
            <button class="slide-next button-icon-size-4"><i class="fa fa-angle-right"></i></button>
        </nav>

    </div>

    <div class="thumbnail_grid-fade row-magic stack-0" id="latest-articles-thumbs">
        <img class="span active" src="<?php echo stockImage('demo/stock-1.jpg') ?>" alt="">
        <img class="span" src="<?php echo stockImage('demo/stock-12.jpg') ?>" alt="">
        <img class="span" src="<?php echo stockImage('demo/stock-11.jpg') ?>" alt="">
        <img class="span" src="<?php echo stockImage('demo/stock-10.jpg') ?>" alt="">
        <img class="span" src="<?php echo stockImage('demo/stock-9.jpg') ?>" alt="">
    </div>
            
    <script id="articleCarouselScripts">
        
        $(document).ready(pageScripts);
            
        function pageScripts() {
            $('#latest-articles').kCarousel({
                navId: '#latest-articles-nav',
                pagerId: '#latest-articles-thumbs',
                pagerSelector: 'img'
            });
        }
        
    </script>
    
<?php } ?>