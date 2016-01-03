<?php 
	include ('../../app.php');
	// page config
	$title = 'Single Post Title';
	$tagLine = 'Aenean lobortis ante nunc, curabitur at enim ac nisi lacinia.';
?>

<!DOCTYPE html>
<html class="no-js">

<?php include (ROOT.'/includes/head.php'); ?>

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
                
                <div class="thumbnail-article">
                    <img src="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg">
                </div>
                
                <div class="post-content lede text-justify">
                    
                    <ul class="list-reset-inline-small text">
                        <li><i class="fa fa-calendar"></i> 5th November 2015</li>
                        <li><i class="fa fa-user"></i> <a href="#">John Doe</a></li>
                        <li><i class="fa fa-folder-o"></i> <a href="#">HTML Themes</a></li>
                        <li><i class="fa fa-comment-o"></i> <a href="#">3 Comments</a></li>
                    </ul>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Inquit, dasne adolescenti veniam?</a> Ergo instituto veterum, quo etiam Stoici utuntur, hinc capiamus exordium. Quarum ambarum rerum cum medicinam pollicetur, luxuriae licentiam pollicetur. Duo Reges: constructio interrete. Docent enim nos, ut scis, dialectici, si ea quae rem aliquam sequantur, falsa sint.</p>
        
                    <p><q class="blockquote-pull-left-top"><span class="blockquote_content">An vero, inquit, quisquam potest probare, quod perceptfum quod.</span></q>Falsam illam ipsam esse, quam sequantur. Universa enim illorum ratione cum tota vestra confligendum puto. Perturbationes autem nulla naturae <b>vi commoventur, omniaque ea sunt opiniones</b> ac iudicia levitatis. <a href="#">Haec dicuntur inconstantissime.</a> Restinguet citius, si ardentem acceperit. Quae sequuntur igitur? Quicquid enim a sapientia proficiscitur, id continuo debet expletum esse omnibus suis partibus; Quod non subducta utilitatis ratione effici solet, sed ipsum a se oritur et sua sponte nascitur. Non enim solum Torquatus dixit quid sentiret, sed etiam cur. </p>
        
                    <p>Nullis enim partitionibus, nullis definitionibus utuntur ipsique dicunt ea se modo probare, quibus natura tacita adsentiatur. Quacumque enim ingredimur, in aliqua historia vestigium ponimus. Quae sunt igitur communia vobis cum antiquis, iis sic utamur quasi concessis. Immo alio genere. </p>
        
                    <p>Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius. Idemne, quod iucunde? Qua ex cognitione facilior facta est investigatio rerum occultissimarum. Paria sunt igitur. <i>Graece donan, Latine voluptatem vocant.</i> <a href="#">Quod equidem non reprehendo;</a> <b>Scrupulum, inquam, abeunti;</b> Sed virtutem ipsam inchoavit, nihil amplius. Similiter sensus, cum accessit ad naturam, tuetur illam quidem, sed etiam se tuetur; </p>
                    
                    <blockquote class="blockquote">
                        <p class="blockquote_content">An vero, inquit, quisquam potest probare, quod perceptfum, quod.</p>
                    </blockquote>
        
                    <p>Quis non odit sordidos, vanos, leves, futtiles? Quid censes eos esse facturos, qui omnino virtutem a bonorum fine segregaverunt, Epicurum, Hieronymum, illos etiam, si qui Carneadeum finem tueri volunt? <b>Virtutibus igitur rectissime</b> mihi videris et ad consuetudinem nostrae orationis vitia posuisse contraria. Ita fit beatae vitae domina fortuna, quam Epicurus ait exiguam intervenire sapienti. <a href="#">Sed ego in hoc resisto;</a> Si longus, levis; Satisne vobis videor pro meo iure in vestris auribus commentatus? <a href="#">Satis est ad hoc responsum</a>. In qua si nihil est praeter rationem, sit in una virtute finis bonorum; Traditur, inquit, ab Epicuro ratio neglegendi doloris. </p>
        
                    <p>Modo etiam paulum ad dexteram de via declinavi, ut ad Pericli sepulcrum accederem. In motu et in statu corporis nihil inest, quod animadvertendum esse ipsa natura iudicet? <a href="#">Ita nemo beato beatior.</a> Mihi autem nihil tam perspicuum videtur, quam has sententias eorum philosophorum re inter se magis quam verbis dissidere; Quacumque enim ingredimur, in aliqua historia vestigium ponimus. Quae sunt igitur communia vobis cum antiquis, iis sic utamur quasi concessis; Quod non faceret, si in voluptate summum bonum poneret. Qua tu etiam inprudens utebare non numquam. </p>
                    
                    <ul class="list-tags">
                        <li class="title">Tags:</li>
                        <li class="plain"><a href="#">Theme</a></li>
                        <li class="plain"><a href="#">HTML</a></li>
                        <li class="plain"><a href="#">CSS</a></li>
                        <li class="plain"><a href="#">JavaScript</a></li>
                    </ul>
                    
                </div>
                
                <hr class="hrule-stripes-large" />
                
				<div class="row-block text-center">
                    
                    <!-- Facebook Shares Widget -->
                    <a href="#" class="widget-tub span bg-facebook">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-facebook"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="facebookShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">Facebook</div>
                    </a>
                    
                    <!-- Twitter Shares Widget -->
                    <a href="#" class="widget-tub span bg-twitter">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="twitterShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">Twitter</div>
                    </a>
                    
                    <!-- Google Plus Shares Widget -->
                    <a href="#" class="widget-tub span bg-google-plus">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-google-plus"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="googlePlusShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">Google Plus</div>
                    </a>
                    
                    <!-- LinkedIn Shares Widget -->
                    <a href="#" class="widget-tub span bg-linkedin">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-linkedin"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="linkedInShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">LinkedIn</div>
                    </a>
                    
                    <!-- StumbleUpon Shares Widget -->
                    <a href="#" class="widget-tub span bg-stumbleupon">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-stumbleupon"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="stumbleUponShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Views</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">StumbleUpon</div>
                    </a>
                    
                    <!-- Pinterest Shares Widget -->
                    <!--
                    <a href="#" class="widget-tub span bg-pinterest">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-pinterest"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="pinterestShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">Pinterest</div>
                    </a>
                    -->
                    
                    <!-- Reddit Shares Widget -->
                    <!--
                    <a href="#" class="widget-tub span bg-reddit">
                        <div class="widget_lid">
                            <div class="widget_sticker button-icon-plain-size-6">
                                <i class="fa fa-reddit"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 id="redditShareCount" class="heading-size-5">0</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <div class="button-block relative font-2">Reddit</div>
                    </a>
                    -->
                    
                </div>
    
                <script>
                    $(document).ready(function() {
                        $.fn.KayzenSocialShareCount({
                            url : 'http://themeforest.net'
                        });
                    });
                </script>
                
                <div class="object-large">
                    
                    <h2 class="heading-size-6-light-strikethrough-dots text-center"><span>The Author</span></h2>
                    
                    <div class="row">
                        <div class="span-2 text-center">
                            <div class="thumbnail-mini-profile-round-xlarge-styled">
                                <img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
                            </div>
                            <div class="icon_group-small">
                                <a href="#" class="button-icon-border-size-1 tooltip-top" data-tooltip="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-1 tooltip-top" data-tooltip="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="button-icon-border-size-1 tooltip-top" data-tooltip="LinkedIn">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                        <div class="span-10">
                            <header class="heading_group">
                                <h3 class="heading-size-4 font-2">Jane Doe</h3>
                                <h3 class="heading-light-size-3-brand-1 font-2">Graphic Designer</h3>
                            </header>
                            <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</p>
                        </div>
                    </div>
                
                </div>
                
                <div class="object-large">
                            
                    <h2 class="heading-size-6-light-strikethrough-dots text-center">
                        <span><span class="heading-brand-1">3</span> Comments</span>
                    </h2>
                    
                    <div class="comments object">
                    
                        <div class="comment object-small">
                            <div class="row object-small">
                                <div class="span-2 va-middle text-center">
                                    <div class="thumbnail-profile-round-xlarge-styled">
                                        <img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
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
                                        <div class="comment_content">
                                            <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button_group text-right">
                                <a class="button-size-1-round"><i class="fa fa-reply"></i> Reply</a>
                                <a class="button-size-1-round-error"><i class="fa fa-exclamation-triangle"></i> Report</a>
                            </div>
                        </div>
                    
                        <div class="comment object-small text-right">
                            <div class="row object-small span-10 text-left">
                                <div class="span-2 va-middle text-center">
                                    <div class="thumbnail-profile-round-large-styled">
                                        <img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
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
                                        <div class="comment_content">
                                            <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button_group text-right">
                                <a class="button-size-1-round"><i class="fa fa-reply"></i> Reply</a>
                                <a class="button-size-1-round-error"><i class="fa fa-exclamation-triangle"></i> Report</a>
                            </div>
                        </div>
                    
                        <div class="comment object">
                            <div class="row object-small">
                                <div class="span-2 va-middle text-center">
                                    <div class="thumbnail-profile-round-xlarge-styled">
                                        <img src="<?php echo appDir ?>/images/team/team-2.jpg" alt="">
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
                                        <div class="comment_content">
                                            <p>Nunc pharetra et massa eu volutpat. Duis at posuere justo. Vivamus lobortis mi at leo pellentesque vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Proin ac augue quam. Etiam sollicitudin magna vitae nunc accumsan cursus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button_group text-right">
                                <a class="button-size-1-round"><i class="fa fa-reply"></i> Reply</a>
                                <a class="button-size-1-round-error"><i class="fa fa-exclamation-triangle"></i> Report</a>
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
                        </div>
                        <div class="form_group">
                            <textarea class="form_input" id="yourMessage" rows="8" required=""></textarea>
                            <label for="yourMessage">Your Message</label>
                        </div>
                        <button type="submit" class="button-block-primary-size-3">Submit Message</button>
                    </form>
                    
                </div>
                
                <h2 class="heading-size-6-light-strikethrough-dots text-center"><span>Related Posts</span></h2>

                <div class="row">
                    
                    <div class="span-4 relative">	
                        <div class="thumbnail-zoom">
                            <div class="thumbnail_mask">
                                <div class="icon_group-small">
                                    <a href="#" class="button-icon-border-circle-size-2">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#" class="button-icon-border-circle-size-2">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="<?php echo appDir ?>/images/wallpapers/bg-7.jpg">
                        </div>
                        <header class="heading_group">
                            <div class="heading_date">
                                <div>Sep</div>
                                <div>23</div>
                            </div>
                            <h3 class="heading-heavy-size-3">Kayzen is Released</h3>
                            <h4 class="heading-light">Posted by <a href="#">Naomi Olson</a></h4>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inquit, dasne adolescenti veniam? Ergo instituto veterum...</p>
                        <div class="row">
                            <div class="span-5 va-middle">
                                <a href="#" class="button-oval-primary-size-2">Read More</a>
                            </div>
                            <div class="span-7 va-middle text-right">
                                <small>Posted in <a href="blog.html">Web Design</a></small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="span-4 relative">	
                        <div class="thumbnail-zoom">
                            <div class="thumbnail_mask">
                                <div class="icon_group-small">
                                    <a href="#" class="button-icon-border-circle-size-2">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#" class="button-icon-border-circle-size-2">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="<?php echo appDir ?>/images/wallpapers/bg-5.jpg">
                        </div>
                        <header class="heading_group">
                            <div class="heading_date">
                                <div>Sep</div>
                                <div>23</div>
                            </div>
                            <h3 class="heading-heavy-size-3">Kayzen is Released</h3>
                            <h4 class="heading-light">Posted by <a href="#">Naomi Olson</a></h4>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inquit, dasne adolescenti veniam? Ergo instituto veterum...</p>
                        <div class="row">
                            <div class="span-5 va-middle">
                                <a href="#" class="button-oval-primary-size-2">Read More</a>
                            </div>
                            <div class="span-7 va-middle text-right">
                                <small>Posted in <a href="blog.html">Web Design</a></small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="span-4 relative">	
                        <div class="thumbnail-zoom">
                            <div class="thumbnail_mask">
                                <div class="icon_group-small">
                                    <a href="#" class="button-icon-border-circle-size-2">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="#" class="button-icon-border-circle-size-2">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <img src="<?php echo appDir ?>/images/wallpapers/bg-3.jpg">
                        </div>
                        <header class="heading_group">
                            <div class="heading_date">
                                <div>Sep</div>
                                <div>23</div>
                            </div>
                            <h3 class="heading-heavy-size-3">Kayzen is Released</h3>
                            <h4 class="heading-light">Posted by <a href="#">Naomi Olson</a></h4>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Inquit, dasne adolescenti veniam? Ergo instituto veterum...</p>
                        <div class="row">
                            <div class="span-5 va-middle">
                                <a href="#" class="button-oval-primary-size-2">Read More</a>
                            </div>
                            <div class="span-7 va-middle text-right">
                                <small>Posted in <a href="blog.html">Web Design</a></small>
                            </div>
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

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>