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
                <p class="lede">Choose from one of the below demos, or <a href="<?php pageLink('demos.php') ?>">view the complete list</a> here. Each demo is built from the provided <a href="<?php pageLink('templates.php') ?>">templates</a> with their own unique configuration.</p>
            </div>
        </header>
        
        <!-- Showcase Thumbnails -->
        <section class="carousel-scale-3-greyscale-stageBg owl-carousel" id="showcase-thumbnails">
            <div class="showcase-thumbnail">
                <img src="<?php echo stockImage('themes/medium/theme-1-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php echo stockImage('themes/medium/theme-7-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php echo stockImage('themes/medium/theme-3-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php echo stockImage('themes/medium/theme-2-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php echo stockImage('themes/medium/theme-5-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php echo stockImage('themes/medium/theme-12-thumb.jpg') ?>">
            </div>
            <div class="showcase-thumbnail">
                <img src="<?php echo stockImage('themes/medium/theme-6-thumb.jpg') ?>">
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
            <div class="row-block bg-cover stack-break-4 fixed-table" style="background-image: url('<?php echo stockImage('billboard-1.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php echo stockImage('themes/theme-1.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Kayzen</h2>
                            <h3 class="heading-light-brand-1-size-5">The Default Kayzen Theme</h3>
                        </header>
                        <p class="lede">This is the default theme used to demonstrate the power and potential of Kayzen, and comes included as a premade demo.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Fixed header</li>
                            <li>Unique one-page design</li>
                            <li>Parallax effects</li>
                            <li>Mega menu</li>
                        </ul>
                        <div class="button_group">
                            <a href="<?php echo pageLink('homepages/homepage-1.php') ?>" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Kayzen</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 2 -->
            <div class="row-block bg-cover stack-break-4 fixed-table" style="background-image: url('<?php echo stockImage('demo/stock-11.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php echo stockImage('themes/theme-7.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Mall</h2>
                            <h3 class="heading-light-brand-1-size-5">A Modern E-Commerce Template</h3>
                        </header>
                        <p class="lede">Mall is vibrant theme suitable for websites with a focus on e-commerce, but can be easily modified to suit any need.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Fixed header</li>
                            <li>Billboard carousel</li>
                            <li>Multi-page</li>
                            <li>Right sidebar on further pages</li>
                        </ul>
                        <div class="button_group">
                            <a href="<?php echo themeLink('Mall', '/index.php') ?>" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Kayzen</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 3 -->
            <div class="row-block bg-cover stack-break-4 fixed-table" style="background-image: url('<?php echo stockImage('demo/stock-8.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php echo stockImage('themes/theme-3.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Agenda</h2>
                            <h3 class="heading-light-brand-1-size-5">A One-Page Theme For Agencies</h3>
                        </header>
                        <p class="lede">Agenda is creative a one-page theme suitable for digital agencies but can also easily be considered a multipurpose theme.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>One-page</li>
                            <li>Side header</li>
                            <li>Parallax effects</li>
                            <li>Minimal footer</li>
                        </ul>
                        <div class="button_group">
                            <a href="<?php echo themeLink('Agenda', '/index.php') ?>" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 4 -->
            <div class="row-block bg-cover stack-break-4 fixed-table" style="background-image: url('<?php echo stockImage('demo/stock-6.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php echo stockImage('themes/theme-2.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Nexus</h2>
                            <h3 class="heading-light-brand-1-size-5">A Modern Theme for Digital Agencies</h3>
                        </header>
                        <p class="lede">Nexus is a multipurpose theme primarily intended to be used for digital agencies or portfolio offering creative services.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Fixed header</li>
                            <li>Featured demo</li>
                            <li>One-page/multi-page</li>
                            <li>Included free - $17 value</li>
                        </ul>
                        <div class="button_group">
                            <a href="<?php echo themeLink('Nexus', '/index.php') ?>" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 5 -->
            <div class="row-block bg-cover stack-break-4 fixed-table" style="background-image: url('<?php echo stockImage('demo/stock-5.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php echo stockImage('themes/theme-5.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6">Tempus</h2>
                            <h3 class="heading-light-brand-1-size-5">A Creative Portfolio Theme</h3>
                        </header>
                        <p class="lede">Tempus is a clean, no-nonsense theme suitable for personal portfolios, blogs and creative agencies.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Parallax effects</li>
                            <li>Multi-page</li>
                            <li>Masonry portfolio/blog pages</li>
                            <li>Scrolling animations</li>
                        </ul>
                        <div class="button_group">
                            <a href="<?php echo themeLink('Tempus', '/index.php') ?>" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 6 -->
            <div class="row-block bg-cover stack-break-4 fixed-table" style="background-image: url('<?php echo stockImage('billboard-1.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php echo stockImage('themes/theme-12.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Gaucho</h2>
                            <h3 class="heading-light-brand-1-size-5">A Modern Newspaper Theme</h3>
                        </header>
                        <p class="lede">Gaucho is modern newspaper theme suitable for blogs and websites with a focus on providing news and information.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Masonry billboard</li>
                            <li>Sidebar</li>
                            <li>Multi-page</li>
                            <li>Perfect for blogs</li>
                        </ul>
                        <div class="button_group">
                            <a href="<?php echo themeLink('Gaucho', '/index.php') ?>" target="blank" class="button-size-3">View Demo</a>
                            <a href="#" class="button-primary-size-3">Purchase Theme</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Showcase Slide 7 -->
            <div class="row-block bg-cover stack-break-4 fixed-table" style="background-image: url('<?php echo stockImage('demo/stock-17.jpg') ?>')">
                <div class="section_block span-6 text-center va-middle">
                    <div class="block-content span-9">
                        <div class="desktop-graphic-scroll">
                            <img src="<?php echo appDir ?>/images/demo-screen.png" alt="" />
                            <div class="desktop-graphic_image" style="background-image: url('<?php echo stockImage('themes/theme-6.jpg') ?>')"></div>
                        </div>
                    </div>
                </div>
                <div class="section_block-opaque span-6 va-middle">
                    <div class="block-content">
                        <header class="heading_group">
                            <h2 class="heading-heavy-size-6 font-2">Dart</h2>
                            <h3 class="heading-light-brand-1-size-5">A Creative Portfolio Theme</h3>
                        </header>
                        <p class="lede">A multi-purpose theme with a focus on portfolio showcasing, suitable for any creative services website.</p>
                        <ul class="list-arrow lede min-break-2">
                            <li>Side header</li>
                            <li>Parallax effects</li>
                            <li>Scrolling animations</li>
                            <li>Multi-page</li>
                        </ul>
                        <div class="button_group">
                            <a href="<?php echo themeLink('Dart', '/index.php') ?>" target="blank" class="button-size-3">View Demo</a>
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
                    $sync1.trigger('to.owl.carousel', [
                        $(this).index(), 
                        duration, 
                        true
                    ]);
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