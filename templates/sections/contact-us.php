 <?php function contactUs($custom = array()) { ?>

    <?php $options = array_merge(array(
        //'option' => 'VALUE'
    ), $custom); ?>
    
    <!-- Contact Us -->
    <section class="section-primary">
    
        <!-- Contact Us Header -->
        <header class="heading_group-large has-icon text-center">
            <div class="container-small">
                <h4 class="heading-uppercase-light-spaced-brand-1-size-4"><span>Contact Us</span></h4>
                <h2 class="heading-uppercase-heavy-size-7 font-2"><span>Get in Touch</span></h2>
                <div class="heading_icon">
                    <i class="fa fa-globe"></i>
                </div>
                <p class="lede">Thanks to the flexibility of Kayzen's options, there is no limit to the layouts you can achieve. Below is just a small sample of common styles and layouts that can easily be achieved with Kayzen.</p>
            </div>
        </header>
        
        <!-- Contact Form -->
        <form class="form-fauxPlaceholders-html5">
            <div class="container-small">
                <div class="row-flow">
                    <div class="form_group span-6">
                        <input type="text" class="form_input" id="firstName" placeholder="Ex: John" required="">
                        <label for="firstName">First Name</label>
                    </div>
                    <div class="form_group span-6">
                        <input type="text" class="form_input" id="lastName" placeholder="Ex: Doe">
                        <label for="lastName">Last Name</label>
                    </div>
                    <div class="form_group span-6">
                        <input type="tel" class="form_input" id="phoneNumber" placeholder="Ex: (123) 456-7890 ">
                        <label for="phoneNumber">Phone Number</label>
                    </div>
                    <div class="form_group span-6">
                        <input type="email" class="form_input" id="emailAddress" placeholder="john@doe.com" required="">
                        <label for="emailAddress">Email Address</label>
                    </div>
                </div>
                <div class="form_group">
                    <textarea class="form_input" placeholder="We aim to respond to all messages within 24 hours." id="yourMessage" rows="8" required=""></textarea>
                    <label for="yourMessage">Your Message</label>
                </div>
                <button type="submit" class="button-block-primary-size-3">Submit Message</button>
            </div>
        </form>
        
    </section><!-- Contact Us -->
    
<?php } ?>