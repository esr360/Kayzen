<?php function topBar($custom = array()) { ?>

    <?php $options = array_merge(array(
        'modifiers' => null
    ), $custom); ?>
    
    <!-- Login Box -->
    <div class="modal" id="modal-login">
        <div class="modal_close"><i class="fa fa-times"></i></div>
        <div class="modal_content">
            <div class="row-block">
                <div class="span-5">
                    <h3 class="heading">Sign in to your account</h3>
                    <form class="form-fauxPlaceholders-html5">
                        <div class="form_group-compound-has-icon">
                            <input type="text" class="form_input" id="loginUsername" placeholder="Ex: SkyUX" required="">
                            <i class="form_icon fa fa-user"></i>
                            <label for="loginUsername">Username</label>
                        </div>
                        <div class="form_group-compound-has-icon">
                            <input type="password" class="form_input" id="loginPassword" placeholder="••••••••" required="">
                            <i class="form_icon fa fa-key"></i>
                            <label for="loginPassword">Password</label>
                        </div>
                        <div class="row">
                            <div class="span-8 va-middle">
                                <input id="rememberMe" type="checkbox"> 
                                <label for="rememberMe">Remember Me?</label>
                            </div>
                            <div class="span-4 va-middle">
                                <button type="submit" class="button-block-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="span-2 v-sep"></div>
                <div class="span-5">
                    <h3 class="heading">Sign in using...</h3>
                    <a href="#" class="button-block-facebook">Facebook</a>
                    <a href="#" class="button-block-twitter">Twitter</a>
                    <a href="#" class="button-block-google-plus">Google Plus</a>
                    <p><small>Don't have an account? <a href="#modal-register">Sign Up</a></small></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Register Box -->
    <div class="modal" id="modal-register">
        <div class="modal_close"><i class="fa fa-times"></i></div>
        <div class="modal_content text-left">
            <div class="row-block">
                <div class="span-5">
                    <h3 class="heading">Create your free account</h3>
                    <form class="form-fauxPlaceholders-html5">
                        <div class="form_group-compound-has-icon">
                            <input type="text" class="form_input" id="registerUsername" placeholder="Ex: SkyUX" required="">
                            <i class="form_icon fa fa-user"></i>
                            <label for="registerUsername">Username</label>
                        </div>
                        <div class="form_group-compound-has-icon">
                            <input type="email" class="form_input" id="registerEmail" placeholder="Ex: hello@skyux.com" required="">
                            <i class="form_icon fa fa-envelope-o"></i>
                            <label for="registerEmail">Email</label>
                        </div>
                        <div class="form_group-compound-has-icon">
                            <input type="password" class="form_input" id="registerPassword" placeholder="••••••••" required="">
                            <i class="form_icon fa fa-key"></i>
                            <label for="registerPassword">Password</label>
                        </div>
                        <button type="submit" class="button-block-primary">Sign Up</button>
                    </form>
                </div>
                <div class="span-2 v-sep"></div>
                <div class="span-5">
                    <h3 class="heading">Sign up using...</h3>
                    <a href="#" class="button-block-facebook">Facebook</a>
                    <a href="#" class="button-block-twitter">Twitter</a>
                    <a href="#" class="button-block-google-plus">Google Plus</a>
                    <p><small>Already have an account? <a href="#modal-login">Login</a></small></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Top Bar -->
    <div class="top-bar<?php echo '-'.$options['modifiers'] ?>">
        <div class="container">
            <div class="row-block stack-0">
                
                <div class="top-bar_nav-left span">
                    <ul>
                        <li class="min-break-2">
                            <div class="button_group-small span">
                                <a href="#" class="button-icon-border-size-1 tooltip-bottom" data-tooltip="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-1 tooltip-bottom" data-tooltip="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-1 tooltip-bottom" data-tooltip="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-1 tooltip-bottom" data-tooltip="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="button-plain-size-2" href="#"><i class="fa fa-envelope-o"></i> <span class="min-break-3">hello@kayzen.com</span></a>
                        </li>
                        <li>
                            <a class="button-plain-size-2" href="#"><i class="fa fa-phone"></i> <span class="min-break-3">(310) 276-2251</span></a>
                        </li>
                    </ul>
                </div>
                
                <div class="span text-right force-align">
                    
                    <div class="button_group span va-middle">
                        <a class="button-size-1" href="#modal-login">
                            <i class="fa fa-user"></i> Login
                        </a>
                        <a class="button-primary-size-1 min-break-1" href="#modal-register">
                            <i class="fa fa-pencil-square-o"></i> Register
                        </a>
                    </div>
                    
                    <div class="top-bar_nav span va-middle">
                        <ul>
                            <li>
                                <a id="search-trigger" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-notification="3">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <ul class="list-cart list-divider">
                                    <li class="title heading-uppercase">Shopping Cart</li>
                                    <li>
                                        <a href="<?php pageLink('further/shop-single.php') ?>" class="widget-media row stack-0">               
                                            <div class="span-3">
                                                <img src="<?php echo appDir ?>/images/demo/theme-1-thumb.jpg" alt="Theme One" />
                                            </div> 
                                            <div class="span-9">
                                                <header class="heading_group">
                                                    <h3 class="heading-heavy-size-2">Nexus</h3>
                                                    <h4 class="heading-light-uppercase-brand-1-size-1">$9.95</h4>
                                                </header>   
                                            </div>   
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php pageLink('further/shop-single.php') ?>" class="widget-media row stack-0">               
                                            <div class="span-3">
                                                <img src="<?php echo appDir ?>/images/demo/theme-1-thumb.jpg" alt="Theme One" />
                                            </div> 
                                            <div class="span-9">
                                                <header class="heading_group">
                                                    <h3 class="heading-heavy-size-2">Nexus</h3>
                                                    <h4 class="heading-light-uppercase-brand-1-size-1">$24.95</h4>
                                                </header>   
                                            </div>   
                                        </a>
                                    </li>
                                    <li class="row stack-0">
                                        <div class="span-6 va-middle">
                                            <h4 class="heading-size-4">$34.90</a>
                                        </div>
                                        <div class="span-6 text-right va-middle">
                                            <a class="button-primary-size-2">View Cart</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <small>USD</small> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="list-interactive-divider-small">
                                    <li><i class="fa fa-gbp"></i> GBP</li>
                                    <li><i class="fa fa-usd"></i> USD</li>
                                    <li><i class="fa fa-eur"></i> EUR</li>
                                    <li><i class="fa fa-jpy"></i> JPY</li>
                                    <li><i class="fa fa-rub"></i> RUB</li>
                                </ul>
                            </li>
                            <li class="min-break-4">
                                <a href="#" id="toggleHeader">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                
            </div><!-- row-block -->
        </div><!-- container -->
    </div><!-- top-bar -->

<?php } ?>