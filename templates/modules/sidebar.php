 <?php function sidebar($custom = array()) { ?>

    <?php $options = array_merge(array(
        'type' => 'blog',
        'category' => pageLink('blog/classic/3-cols-filterable.php', 'pages', false),
        'tabs_nav-modifiers' => ''
    ), $custom); ?>
    
    <div class="tabs">
    
        <ul class="tabs_nav<?php echo $options['tabs_nav-modifiers'] ?>">
            <li class="tabs_nav_item active">Latest</li>
            <li class="tabs_nav_item">Popular</li>
            <li class="tabs_nav_item">Comments</li>
        </ul>
        
        <section class="tabs_content-block-glue active">
            
            <div class="tabs_item active">
                
                <article class="row stack-0">
                    <div class="span-2">
                        <div class="thumbnail-profile-fill<?php if ($option['type'] == 'blog') echo '-round' ?>">
                            <img src="<?php stockImage('team/team-1.jpg')?>" alt="">
                        </div>
                    </div>
                    <div class="span-10">
                        <header class="heading_group">
                            <?php if ($options['type'] == 'blog') { ?>
                                <div class="heading_date">
                                    <div>Sep</div>
                                    <div>23</div>
                                </div>
                            <?php } ?>
                            <div>
                                <h3 class="heading">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-1">Category: <a href="<?php echo $options['category'] ?>">Themes</a></h4>
                                <?php if ($options['type'] == 'blog') { ?>
                                    <ul class="list-tags-small">
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">CSS</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">HTML</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">JS</a></li>	
                                    </ul>
                                <?php } else if ($options['type'] == 'shop') { ?>
                                    <div class="row-block">
                                        <small class="span">$24.99</small>
                                        <small class="rating span text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </small>
                                    </div>
                                <?php } ?>
                            </span>
                        </header>
                    </div>
                </article>
                
                <hr class="hrule-line-small" />
                
                <article class="row stack-0">
                    <div class="span-2">
                        <div class="thumbnail-profile-fill<?php if ($option['type'] == 'blog') echo '-round' ?>">
                            <img src="<?php stockImage('team/team-2.jpg')?>" alt="">
                        </div>
                    </div>
                    <div class="span-10">
                        <header class="heading_group">
                            <?php if ($options['type'] == 'blog') { ?>
                                <div class="heading_date">
                                    <div>Sep</div>
                                    <div>23</div>
                                </div>
                            <?php } ?>
                            <span>
                                <h3 class="heading">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-1">Category: <a href="<?php echo $options['category'] ?>">Themes</a></h4>
                                <?php if ($options['type'] == 'blog') { ?>
                                    <ul class="list-tags-small">
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">CSS</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">HTML</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">JS</a></li>	
                                    </ul>
                                <?php } else if ($options['type'] == 'shop') { ?>
                                    <div class="row-block">
                                        <small class="span">$24.99</small>
                                        <small class="rating span text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </small>
                                    </div>
                                <?php } ?>
                            </span>
                        </header>
                    </div>
                </article>
                
                <hr class="hrule-line-small" />
                
                <article class="row stack-0">
                    <div class="span-2">
                        <div class="thumbnail-profile-fill<?php if ($option['type'] == 'blog') echo '-round' ?>">
                            <img src="<?php stockImage('team/team-3.jpg')?>" alt="">
                        </div>
                    </div>
                    <div class="span-10">
                        <header class="heading_group">
                            <?php if ($options['type'] == 'blog') { ?>
                                <div class="heading_date">
                                    <div>Sep</div>
                                    <div>23</div>
                                </div>
                            <?php } ?>
                            <span>
                                <h3 class="heading">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-1">Category: <a href="<?php echo $options['category'] ?>">Themes</a></h4>
                                <?php if ($options['type'] == 'blog') { ?>
                                    <ul class="list-tags-small">
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">CSS</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">HTML</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">JS</a></li>	
                                    </ul>
                                <?php } else if ($options['type'] == 'shop') { ?>
                                    <div class="row-block">
                                        <small class="span">$24.99</small>
                                        <small class="rating span text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </small>
                                    </div>
                                <?php } ?>
                            </span>
                        </header>
                    </div>
                </article>
                
            </div>
            
            <div class="tabs_item">
                
                <article class="row stack-0">
                    <div class="span-2">
                        <div class="thumbnail-profile-fill<?php if ($option['type'] == 'blog') echo '-round' ?>">
                            <img src="<?php stockImage('team/team-1.jpg')?>" alt="">
                        </div>
                    </div>
                    <div class="span-10">
                        <header class="heading_group">
                            <?php if ($options['type'] == 'blog') { ?>
                                <div class="heading_date">
                                    <div>Oct</div>
                                    <div>16</div>
                                </div>
                            <?php } ?>
                            <div>
                                <h3 class="heading">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-1">Category: <a href="<?php echo $options['category'] ?>">Themes</a></h4>
                                <?php if ($options['type'] == 'blog') { ?>
                                    <ul class="list-tags-small">
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">CSS</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">HTML</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">JS</a></li>	
                                    </ul>
                                <?php } else if ($options['type'] == 'shop') { ?>
                                    <div class="row-block">
                                        <small class="span">$24.99</small>
                                        <small class="rating span text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </small>
                                    </div>
                                <?php } ?>
                            </span>
                        </header>
                    </div>
                </article>
                
                <hr class="hrule-line-small" />
                
                <article class="row stack-0">
                    <div class="span-2">
                        <div class="thumbnail-profile-fill<?php if ($option['type'] == 'blog') echo '-round' ?>">
                            <img src="<?php stockImage('team/team-1.jpg')?>" alt="">
                        </div>
                    </div>
                    <div class="span-10">
                        <header class="heading_group">
                            <?php if ($options['type'] == 'blog') { ?>
                                <div class="heading_date">
                                    <div>Oct</div>
                                    <div>20</div>
                                </div>
                            <?php } ?>
                            <span>
                                <h3 class="heading">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-1">Category: <a href="<?php echo $options['category'] ?>">Themes</a></h4>
                                <?php if ($options['type'] == 'blog') { ?>
                                    <ul class="list-tags-small">
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">CSS</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">HTML</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">JS</a></li>	
                                    </ul>
                                <?php } else if ($options['type'] == 'shop') { ?>
                                    <div class="row-block">
                                        <small class="span">$24.99</small>
                                        <small class="rating span text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </small>
                                    </div>
                                <?php } ?>
                            </span>
                        </header>
                    </div>
                </article>
                
                <hr class="hrule-line-small" />
                
                <article class="row stack-0">
                    <div class="span-2">
                        <div class="thumbnail-profile-fill<?php if ($option['type'] == 'blog') echo '-round' ?>">
                            <img src="<?php stockImage('team/team-1.jpg')?>" alt="">
                        </div>
                    </div>
                    <div class="span-10">
                        <header class="heading_group">
                            <?php if ($options['type'] == 'blog') { ?>
                                <div class="heading_date">
                                    <div>Oct</div>
                                    <div>27</div>
                                </div>
                            <?php } ?>
                            <span>
                                <h3 class="heading">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-1">Category: <a href="<?php echo $options['category'] ?>">Themes</a></h4>
                                <?php if ($options['type'] == 'blog') { ?>
                                    <ul class="list-tags-small">
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">CSS</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">HTML</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">JS</a></li>	
                                    </ul>
                                <?php } else if ($options['type'] == 'shop') { ?>
                                    <div class="row-block">
                                        <small class="span">$24.99</small>
                                        <small class="rating span text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </small>
                                    </div>
                                <?php } ?>
                            </span>
                        </header>
                    </div>
                </article>
                
            </div>
            
            <div class="tabs_item">
                
                <article class="row stack-0">
                    <div class="span-2">
                        <div class="thumbnail-profile-fill<?php if ($option['type'] == 'blog') echo '-round' ?>">
                            <img src="<?php stockImage('team/team-1.jpg')?>" alt="">
                        </div>
                    </div>
                    <div class="span-10">
                        <header class="heading_group">
                            <?php if ($options['type'] == 'blog') { ?>
                                <div class="heading_date">
                                    <div>Feb</div>
                                    <div>3</div>
                                </div>
                            <?php } ?>
                            <div>
                                <h3 class="heading">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-1">Category: <a href="<?php echo $options['category'] ?>">Themes</a></h4>
                                <?php if ($options['type'] == 'blog') { ?>
                                    <ul class="list-tags-small">
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">CSS</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">HTML</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">JS</a></li>	
                                    </ul>
                                <?php } else if ($options['type'] == 'shop') { ?>
                                    <div class="row-block">
                                        <small class="span">$24.99</small>
                                        <small class="rating span text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </small>
                                    </div>
                                <?php } ?>
                            </span>
                        </header>
                    </div>
                </article>
                
                <hr class="hrule-line-small" />
                
                <article class="row stack-0">
                    <div class="span-2">
                        <div class="thumbnail-profile-fill<?php if ($option['type'] == 'blog') echo '-round' ?>">
                            <img src="<?php stockImage('team/team-1.jpg')?>" alt="">
                        </div>
                    </div>
                    <div class="span-10">
                        <header class="heading_group">
                            <?php if ($options['type'] == 'blog') { ?>
                                <div class="heading_date">
                                    <div>Feb</div>
                                    <div>10</div>
                                </div>
                            <?php } ?>
                            <span>
                                <h3 class="heading">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-1">Category: <a href="<?php echo $options['category'] ?>">Themes</a></h4>
                                <?php if ($options['type'] == 'blog') { ?>
                                    <ul class="list-tags-small">
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">CSS</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">HTML</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">JS</a></li>	
                                    </ul>
                                <?php } else if ($options['type'] == 'shop') { ?>
                                    <div class="row-block">
                                        <small class="span">$24.99</small>
                                        <small class="rating span text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </small>
                                    </div>
                                <?php } ?>
                            </span>
                        </header>
                    </div>
                </article>
                
                <hr class="hrule-line-small" />
                
                <article class="row stack-0">
                    <div class="span-2">
                        <div class="thumbnail-profile-fill<?php if ($option['type'] == 'blog') echo '-round' ?>">
                            <img src="<?php stockImage('team/team-1.jpg')?>" alt="">
                        </div>
                    </div>
                    <div class="span-10">
                        <header class="heading_group">
                            <?php if ($options['type'] == 'blog') { ?>
                                <div class="heading_date">
                                    <div>Feb</div>
                                    <div>14</div>
                                </div>
                            <?php } ?>
                            <span>
                                <h3 class="heading">Lorem Ipsum Dolor</h3>
                                <h4 class="heading-light-uppercase-size-1">Category: <a href="<?php echo $options['category'] ?>">Themes</a></h4>
                                <?php if ($options['type'] == 'blog') { ?>
                                    <ul class="list-tags-small">
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">CSS</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">HTML</a></li>	
                                        <li class="plain"><a href="<?php echo $options['category'] ?>">JS</a></li>	
                                    </ul>
                                <?php } else if ($options['type'] == 'shop') { ?>
                                    <div class="row-block">
                                        <small class="span">$24.99</small>
                                        <small class="rating span text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </small>
                                    </div>
                                <?php } ?>
                            </span>
                        </header>
                    </div>
                </article>
                
            </div>
                                    
        </section>
    
    </div>
    
    <hr class="hrule-stripes" />
    
    <!-- Categories -->
    
    <header class="heading_group-small">
        <h4 class="heading-uppercase-size-3">Categories</h4>
    </header>
    
    <ul class="list-arrow">
        <li><a href="<?php echo $options['category'] ?>">HTML Templates</a></li>
        <li><a href="<?php echo $options['category'] ?>">Wordpress Themes</a></li>
        <li><a href="<?php echo $options['category'] ?>">jQuery Plugins</a></li>
        <li><a href="<?php echo $options['category'] ?>">Tutorials</a></li>
        <li><a href="<?php echo $options['category'] ?>">Photoshop/Design</a></li>
    </ul>
    
    <hr class="hrule-stripes" />
    
    <!-- Facebook Like Box -->
    
    <div 
        class="fb-page" 
        data-href="https://www.facebook.com/envato" 
        data-width="500" 
        data-height="400" 
        data-small-header="false" 
        data-adapt-container-width="true" 
        data-hide-cover="false" 
        data-show-facepile="true" 
        data-show-posts="true"
    >
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/envato">
                <a href="https://www.facebook.com/envato">Envato</a>
            </blockquote>
        </div>
    </div>
    
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=332439048287";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <hr class="hrule-stripes" />
    
    <!-- Twitter Feed -->
    
    <a 
        class="twitter-timeline" 
        href="https://twitter.com/envato" 
        data-widget-id="650783016462123008"
    >
        Tweets by @envato
    </a>
    
    <script>
        !function(d,s,id){
            var js,fjs=d.getElementsByTagName(s)[0],
                p=/^http:/.test(d.location)?'http':'https';
            if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;
                js.src=p+"://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);
            }
        }(document,"script","twitter-wjs");
    </script>
    
    <hr class="hrule-stripes" />
    
    <!-- YouTube Video -->
    
    <div class="auto-resizable-iframe">
        <div>
            <iframe allowfullscreen="" src="http://www.youtube.com/embed/Q3oItpVa9fs?theme=light"></iframe>
        </div>
    </div>
    
    <hr class="hrule-stripes" />
    
    <!-- Accordion -->
    
    <div class="accordion">
        <section class="accordion_section active">
            <h4 class="accordion_title heading">Native Wordpress Editor</h4>
            <p class="accordion_content">Kayzen uses the native WordPress theme cuztomizer, making it future proof and allowing you to visually see any changes as you make them.</p>
        </section>
        <section class="accordion_section">
            <h4 class="accordion_title heading">Visual Composer</h4>
            <p class="accordion_content">Kayzen comes with the famous <a href="http://vc.wpbakery.com/">Visual Composer</a> drag-and-drop page builder plugin, allowing you to use our custom widgets anywhere on your website.</p>
        </section>
        <section class="accordion_section">
            <h4 class="accordion_title heading">Our Own Custom Framework</h4>
            <p class="accordion_content">We have developed our own custom framework specifically for this theme - no Bootstrap nonsense, our framework has been created with theming and WordPress in mind, making it the most flexible theme framework there is.</p>
        </section>
    </div>
    
<?php } ?>