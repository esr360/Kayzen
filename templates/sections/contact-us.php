 <?php function contactUs($custom = array()) { ?>

    <?php $options = array_merge(array(
        'id' => null,
        'title' => array(
            'content' => 'Contact Us',
            'modifiers' => 'heading-uppercase-light-spaced-brand-1-size-4',
            'highlight' => false
        ),
        'sub-title' => array(
            'content' => 'Get in Touch',
            'modifiers' => 'heading-uppercase-heavy-size-7 font-2',
            'highlight' => false
        )
    ), $custom); ?>
    
    <!-- Contact Us -->
    <section class="section-primary" <?php if ($options['id']) echo 'id="'.$options['id'].'"' ?>>
    
        <!-- Contact Us Header -->
        <header class="heading_group-large has-icon text-center">
            <div class="container-small">
                <h4 class="<?php echo $options['title']['modifiers'] ?>">
                    <?php if ($options['title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        <?php echo $options['title']['content'] ?>
                    <?php if ($options['title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h4>
                <h2 class="<?php echo $options['sub-title']['modifiers'] ?>">
                    <?php if ($options['sub-title']['highlight']) { ?><b><?php } else { ?><span><?php } ?>
                        <?php echo $options['sub-title']['content'] ?>
                    <?php if ($options['sub-title']['highlight']) { ?></b><?php } else { ?></span><?php } ?>
                </h2>
                <div class="heading_icon">
                    <i class="fa fa-globe"></i>
                </div>
                <p class="lede">Enter your details into the form below and we'll get back to you within 24 hours. Note that this is not a functioning form and is just for demo purposes only.</p>
            </div>
        </header>
        
        <!-- Contact Form -->
        <form class="form-fauxPlaceholders-html5" action="https://formspree.io/esr360@live.com" id="contactForm" method="post">
            <input type="hidden" name="_next" value="http://skyux.com/themes/Kayzen/pages/further/thankyou.html" />
            <div class="container-small">
                <div class="row-flow">
                    <div class="form_group span-6">
                        <input type="text" class="form_input" name="firstName" id="firstName" placeholder="Ex: John" required="">
                        <label for="firstName">First Name</label>
                    </div>
                    <div class="form_group span-6">
                        <input type="text" class="form_input" name="lastName" id="lastName" placeholder="Ex: Doe">
                        <label for="lastName">Last Name</label>
                    </div>
                    <div class="form_group span-6">
                        <input type="tel" class="form_input" name="phoneNumber" id="phoneNumber" placeholder="Ex: (123) 456-7890 ">
                        <label for="phoneNumber">Phone Number</label>
                    </div>
                    <div class="form_group span-6">
                        <input type="email" class="form_input" name="emailAddress" id="emailAddress" placeholder="john@doe.com" required="">
                        <label for="emailAddress">Email Address</label>
                    </div>
                    <div class="form_group span-12">
                        <textarea class="form_input" name="yourMessage" placeholder="We aim to respond to all messages within 24 hours." id="yourMessage" rows="8" required=""></textarea>
                        <label for="yourMessage">Your Message</label>
                    </div>
                </div>
                <div class="object">
                    <button type="submit" class="button-block-primary-size-3">Submit Message</button>
                </div>
            </div>
        </form>
        
    </section><!-- Contact Us -->
    
<?php } ?>