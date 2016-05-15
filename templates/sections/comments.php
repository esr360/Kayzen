<?php function comments($custom = array()) { ?>

    <?php $options = array_merge(array(), $custom); ?>

    <div class="object-large" id="comments">
                
                
        <div class="heading_group-large">
            <h2 class="heading-size-6-light-strikethrough-dots text-center">
                <span><span class="heading-brand-1">3</span> Comments</span>
            </h2>
        </div>
        
        <div class="comments object">
        
            <div class="comment object-small">
                <div class="row stack-break-2 object-small">
                    <div class="span-2 va-middle text-center min-break-2">
                        <div class="thumbnail-profile-round-xlarge-styled">
                            <img src="<?php echo stockImage('team/team-2.jpg') ?>" alt="">
                        </div>
                    </div>
                    <div class="span-10 va-middle">
                        <div class="well-comment">
                            <div class="row-block stack-0">
                                <div class="span">
                                    <header class="heading_group-small">
                                        <h4 class="heading font-2">John Doe</h4>
                                    </header>
                                </div>
                                <div class="span text-right">
                                    <h4 class="heading-light-size-2"><b>Posted:</b> Today, 9:16pm</h4>
                                </div>
                            </div>
                            <div class="object-small comment_content">
                                <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button_group text-right">
                    <a class="button-size-1-round"><i class="fa fa-reply"></i> Reply</a>
                    <a class="button-size-1-round-invalid"><i class="fa fa-exclamation-triangle"></i> Report</a>
                </div>
            </div>
        
            <div class="comment object-small text-right">
                <div class="row object-small span-10 text-left stack-break-2">
                    <div class="span-2 va-middle text-center min-break-2">
                        <div class="thumbnail-profile-round-large-styled">
                            <img src="<?php echo stockImage('team/team-2.jpg') ?>" alt="">
                        </div>
                    </div>
                    <div class="span-10 va-middle">
                        <div class="well-comment">
                            <div class="row-block stack-0">
                                <div class="span">
                                    <header class="heading_group-small">
                                        <h4 class="heading font-2">John Doe</h4>
                                    </header>
                                </div>
                                <div class="span text-right">
                                    <h4 class="heading-light-size-2"><b>Posted:</b> Today, 9:16pm</h4>
                                </div>
                            </div>
                            <div class="object-small comment_content">
                                <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button_group text-right">
                    <a class="button-size-1-round"><i class="fa fa-reply"></i> Reply</a>
                    <a class="button-size-1-round-invalid"><i class="fa fa-exclamation-triangle"></i> Report</a>
                </div>
            </div>
        
            <div class="comment object">
                <div class="row object-small stack-break-2">
                    <div class="span-2 va-middle text-center min-break-2">
                        <div class="thumbnail-profile-round-xlarge-styled">
                            <img src="<?php echo stockImage('team/team-2.jpg') ?>" alt="">
                        </div>
                    </div>
                    <div class="span-10 va-middle">
                        <div class="well-comment">
                            <div class="row-block">
                                <div class="span">
                                    <header class="heading_group-small">
                                        <h4 class="heading font-2">John Doe</h4>
                                    </header>
                                </div>
                                <div class="span text-right">
                                    <h4 class="heading-light-size-2"><b>Posted:</b> Today, 9:16pm</h4>
                                </div>
                            </div>
                            <div class="object-small comment_content">
                                <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button_group text-right">
                    <a class="button-size-1-round"><i class="fa fa-reply"></i> Reply</a>
                    <a class="button-size-1-round-invalid"><i class="fa fa-exclamation-triangle"></i> Report</a>
                </div>
            </div>
        
        </div>
        
        <header class="heading_group">
            <h4 class="heading-size-3">Leave a Comment</h4>
        </header>

        <!-- Contact Form -->
        <form class="form-fauxPlaceholders-html5">
            <div class="row-flow">
                <div class="form_group span-4">
                    <input type="text" class="form_input" id="name" placeholder="Ex: John Doe" required="">
                    <label for="firstName">Name</label>
                </div>
                <div class="form_group span-4">
                    <input type="email" class="form_input" id="emailAddress" placeholder="john@doe.com" required="">
                    <label for="emailAddress">Email Address</label>
                </div>
                <div class="form_group span-4">
                    <input type="url" class="form_input" id="website" placeholder="themeforest.net" required="">
                    <label for="website">Website</label>
                </div>
                <div class="form_group span-12">
                    <textarea class="form_input" id="yourMessage" rows="8" required=""></textarea>
                    <label for="yourMessage">Your Message</label>
                </div>
            </div>
            <div class="object">
                <button type="submit" class="button-block-primary-size-3">Submit Message</button>
            </div>
        </form>
        
    </div>
                
<?php } ?>