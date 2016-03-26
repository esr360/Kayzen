<?php function showcase($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option' => 'VALUE'
    ), $custom); ?>
    
    <!-- Showcase -->
    <section class="section hide-overflow">
        
        <!-- Showcase Header -->
        <header class="heading_group-block text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-brand-1-spaced-size-4"><span>Theme Demos</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Choose Your Demo</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-magic"></i>
                </div>
                <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
            </div>
        </header>
        
        <!-- Showcase Thumbnails -->
        <section class="carousel-scale-3-greyscale-stageBg owl-carousel" id="showcase-thumbnails">
            <div class="showcase-thumbnail">
                <img src="<?php stockImage('demo/theme-1-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php stockImage('demo/theme-2-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php stockImage('demo/theme-3-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php stockImage('demo/theme-5-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php stockImage('demo/theme-4-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php stockImage('demo/theme-6-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php stockImage('demo/theme-1-thumb.jpg') ?>">
            </div>
        </section> 
        
        <!-- Showcase Slide Arrows -->
        <div class="wrap-slide-arrows container-full text-center">               
            <nav class="slide-nav twin-nav strikethrough">
                <button class="slide-prev button-icon-border-size-3-white"><i class="fa fa-angle-left"></i></button>
                <button class="slide-next button-icon-border-size-3-white"><i class="fa fa-angle-right"></i></button>
            </nav>
        </div>
        
        <!-- Showcase Slides -->
        <div id="showcase-carousel" class="owl-carousel">
            
            <!-- Showcase Slide 1 -->
            <div class="row-block bg-cover stack-break-4" style="background-image: url('<?php stockImage('demo/small/stock-1.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php stockImage('demo/small/theme-1.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Creative Blog</h2>
                            <h3 class="heading-light-brand-1-size-5">A Modern Template for Creative Blogs</h3>
                        </header>
                        <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Lorem ipsum dolor sit amet consectetur</li>
                            <li>Donec malesuada metus non massa sodales auctor</li>
                            <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                            <li>Etiam dapibus, nulla placerat</li>
                        </ul>
                        <div class="button_group">
                            <a href="#" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 2 -->
            <div class="row-block stack-break-4" style="background-image: url('<?php stockImage('demo/small/stock-1.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php stockImage('demo/small/theme-1.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Mobile App</h2>
                            <h3 class="heading-light-brand-1-size-5">A Modern Template for Creative Blogs</h3>
                        </header>
                        <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Lorem ipsum dolor sit amet consectetur</li>
                            <li>Donec malesuada metus non massa sodales auctor</li>
                            <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                            <li>Etiam dapibus, nulla placerat</li>
                        </ul>
                        <div class="button_group">
                            <a href="#" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 3 -->
            <div class="row-block bg-cover stack-break-4" style="background-image: url('<?php stockImage('demo/small/stock-1.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php stockImage('demo/small/theme-1.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Creative Blog</h2>
                            <h3 class="heading-light-brand-1-size-5">A Modern Template for Creative Blogs</h3>
                        </header>
                        <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Lorem ipsum dolor sit amet consectetur</li>
                            <li>Donec malesuada metus non massa sodales auctor</li>
                            <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                            <li>Etiam dapibus, nulla placerat</li>
                        </ul>
                        <div class="button_group">
                            <a href="#" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 4 -->
            <div class="row-block bg-cover stack-break-4" style="background-image: url('<?php stockImage('demo/stock-17.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php stockImage('demo/small/theme-1.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6">Mobile App</h2>
                            <h3 class="heading-light-brand-1-size-5">A Modern Template for Creative Blogs</h3>
                        </header>
                        <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Lorem ipsum dolor sit amet consectetur</li>
                            <li>Donec malesuada metus non massa sodales auctor</li>
                            <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                            <li>Etiam dapibus, nulla placerat</li>
                        </ul>
                        <div class="button_group">
                            <a href="#" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 5 -->
            <div class="row-block bg-cover stack-break-4" style="background-image: url('<?php stockImage('demo/small/stock-1.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php stockImage('demo/small/theme-1.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Digital Agency</h2>
                            <h3 class="heading-light-brand-1-size-5">A Modern Template for Creative Blogs</h3>
                        </header>
                        <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Lorem ipsum dolor sit amet consectetur</li>
                            <li>Donec malesuada metus non massa sodales auctor</li>
                            <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                            <li>Etiam dapibus, nulla placerat</li>
                        </ul>
                        <div class="button_group">
                            <a href="#" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 6 -->
            <div class="row-block bg-cover stack-break-4" style="background-image: url('<?php stockImage('demo/small/stock-1.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php stockImage('demo/small/theme-1.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Digital Agency</h2>
                            <h3 class="heading-light-brand-1-size-5">A Modern Template for Creative Blogs</h3>
                        </header>
                        <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Lorem ipsum dolor sit amet consectetur</li>
                            <li>Donec malesuada metus non massa sodales auctor</li>
                            <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                            <li>Etiam dapibus, nulla placerat</li>
                        </ul>
                        <div class="button_group">
                            <a href="#" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 7 -->
            <div class="row-block bg-cover stack-break-4" style="background-image: url('<?php stockImage('demo/small/stock-1.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php stockImage('demo/small/theme-1.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Digital Agency</h2>
                            <h3 class="heading-light-brand-1-size-5">A Modern Template for Creative Blogs</h3>
                        </header>
                        <p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Lorem ipsum dolor sit amet consectetur</li>
                            <li>Donec malesuada metus non massa sodales auctor</li>
                            <li>Sed sed iaculis arcu, eu pharetra nulla</li>
                            <li>Etiam dapibus, nulla placerat</li>
                        </ul>
                        <div class="button_group">
                            <a href="#" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div><!-- Showcase Slides -->
        
        <!-- Showcase Carousel -->
        <script>
            
            $(document).ready(function() {
                
                var $sync1 = $("#showcase-carousel"),
                    $sync2 = $("#showcase-thumbnails"),
                    flag = false,
                    duration = 300;
                
                // Showcase Slides
                $sync1.owlCarousel({
                    items: 1
                }).on('changed.owl.carousel', function (e) {
                    if (!flag) {
                        flag = true;
                        $sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
                        flag = false;
                    }
                }).trigger('to.owl.carousel', 2);
                
                // Showcase Thumbs
                $sync2.owlCarousel({
                    center: true,
                    items: 3,
                    stagePadding: 0,
                    responsive: {
                        540: {
                            items:4
                        },
                        720: {
                            items:5
                        },
                        960: {
                            items:6
                        }
                    }
                }).on('click', '.owl-item', function () {
                    $sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
                }).on('changed.owl.carousel', function (e) {
                    if (!flag) {
                        flag = true;		
                        $sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
                        flag = false;
                    }
                }).trigger('to.owl.carousel', 3);
                
                // Slide Arrows
                
                $sync2.find("+ .wrap-slide-arrows .slide-next").click(function() {
                    $sync2.trigger('next.owl.carousel');
                });
                $sync2.find("+ .wrap-slide-arrows .slide-prev").click(function() {
                    $sync2.trigger('prev.owl.carousel');
                });	
                
            }); // document.ready
            
        </script>
        
    </section><!-- Showcase -->
    
<?php } ?>