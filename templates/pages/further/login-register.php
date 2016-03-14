<?php 
	include ('../../app.php');
	// page config
	$title = 'Login/Sign Up';
	$tagLine = 'Aenean lobortis ante nunc urabitur at enim nisi.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head() ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-dark-sticky'
            ));

            billboard(array(
                'title'    => $title,
                'tag-line' => $tagLine
            ));
            
        ?>
        
        <section class="section-primary">
            
            <div class="container-small">
                
                <div class="row-block row-waffle-large">
                    
                    <div class="span-5">
                        <header class="heading_group">
                            <h3 class="heading-size-5-light">Create an Account</h3>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel consectetur erat, eget vehicula justo. Nam dui erat, malesuada eget scelerisque et, accumsan non elit.</p>
                        <form class="form-fauxPlaceholders-html5">
                            <div class="form_group-compound-has-icon">
                                <input type="text" class="form_input" id="fullName" placeholder="Ex: John Doe" required="">
                                <i class="form_icon fa fa-pencil"></i>
                                <label for="fullName">Full Name</label>
                            </div>
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
                        <header class="heading_group">
                            <h3 class="heading-size-5-light">Already have an account?</h3>
                        </header>
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
                            <div class="row stack-0">
                                <div class="span-8 va-middle">
                                    <input id="rememberMe" type="checkbox"> 
                                    <label for="rememberMe">Remember Me?</label>
                                </div>
                                <div class="span-4 va-middle">
                                    <button type="submit" class="button-block-primary">Login</button>
                                </div>
                            </div>
                        </form>
                        <div>
                            <h3 class="heading">Login using...</h3>
                            <a href="#" class="button-block-facebook">Facebook</a>
                            <a href="#" class="button-block-twitter">Twitter</a>
                            <a href="#" class="button-block-google-plus">Google Plus</a>
                            <p><small>Forgot your password? <a href="#">Click Here</a></small></p>
                        </div>
                    </div>
                    
                </div>
                
            </div><!-- container -->
            
        </section>
        
        <?php
            
            promoBanner();
            
            appFooter(); 
        
        ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>

</body>