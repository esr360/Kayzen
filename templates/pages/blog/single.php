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
			$topBarModifiers = '';
			include (ROOT.'/modules/top-bar.php'); 
		?>

		<?php 
			$headerModifiers = '-bar-absolute-dark-sticky'; 
			include (ROOT.'/modules/header.php'); 
		?>

		<?php include (ROOT.'/modules/billboard.php'); ?>
		
		<section class="section-primary">
				
			<div class="container-small">
                
                <div class="thumbnail-article">
                    <img src="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg">
                </div>
                
                <div class="post-content object lede text-justify">
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Inquit, dasne adolescenti veniam?</a> Ergo instituto veterum, quo etiam Stoici utuntur, hinc capiamus exordium. Quarum ambarum rerum cum medicinam pollicetur, luxuriae licentiam pollicetur. Duo Reges: constructio interrete. Docent enim nos, ut scis, dialectici, si ea quae rem aliquam sequantur, falsa sint.</p>
        
                    <p><q class="blockquote-pull-left-top"><span class="blockquote_content">An vero, inquit, quisquam potest probare, quod perceptfum, quod.</span></q>Falsam illam ipsam esse, quam sequantur. Universa enim illorum ratione cum tota vestra confligendum puto. Perturbationes autem nulla naturae <b>vi commoventur, omniaque ea sunt opiniones</b> ac iudicia levitatis. <a href="#">Haec dicuntur inconstantissime.</a> Restinguet citius, si ardentem acceperit. Quae sequuntur igitur? Quicquid enim a sapientia proficiscitur, id continuo debet expletum esse omnibus suis partibus; Quod non subducta utilitatis ratione effici solet, sed ipsum a se oritur et sua sponte nascitur. Non enim solum Torquatus dixit quid sentiret, sed etiam cur. </p>
        
                    <p>Nullis enim partitionibus, nullis definitionibus utuntur ipsique dicunt ea se modo probare, quibus natura tacita adsentiatur. Quacumque enim ingredimur, in aliqua historia vestigium ponimus. Quae sunt igitur communia vobis cum antiquis, iis sic utamur quasi concessis. Immo alio genere. </p>
        
                    <p>Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius. Idemne, quod iucunde? Qua ex cognitione facilior facta est investigatio rerum occultissimarum. Paria sunt igitur. <i>Graece donan, Latine voluptatem vocant.</i> <a href="#">Quod equidem non reprehendo;</a> <b>Scrupulum, inquam, abeunti;</b> Sed virtutem ipsam inchoavit, nihil amplius. Similiter sensus, cum accessit ad naturam, tuetur illam quidem, sed etiam se tuetur; </p>
                    
                    <blockquote class="blockquote">
                        <p class="blockquote_content">An vero, inquit, quisquam potest probare, quod perceptfum, quod.</p>
                    </blockquote>
        
                    <p>Quis non odit sordidos, vanos, leves, futtiles? Quid censes eos esse facturos, qui omnino virtutem a bonorum fine segregaverunt, Epicurum, Hieronymum, illos etiam, si qui Carneadeum finem tueri volunt? <b>Virtutibus igitur rectissime</b> mihi videris et ad consuetudinem nostrae orationis vitia posuisse contraria. Ita fit beatae vitae domina fortuna, quam Epicurus ait exiguam intervenire sapienti. <a href="#">Sed ego in hoc resisto;</a> Si longus, levis; Satisne vobis videor pro meo iure in vestris auribus commentatus? <a href="#">Satis est ad hoc responsum</a>. In qua si nihil est praeter rationem, sit in una virtute finis bonorum; Traditur, inquit, ab Epicuro ratio neglegendi doloris. </p>
        
                    <p>Modo etiam paulum ad dexteram de via declinavi, ut ad Pericli sepulcrum accederem. In motu et in statu corporis nihil inest, quod animadvertendum esse ipsa natura iudicet? <a href="#">Ita nemo beato beatior.</a> Mihi autem nihil tam perspicuum videtur, quam has sententias eorum philosophorum re inter se magis quam verbis dissidere; Quacumque enim ingredimur, in aliqua historia vestigium ponimus. Quae sunt igitur communia vobis cum antiquis, iis sic utamur quasi concessis; Quod non faceret, si in voluptate summum bonum poneret. Qua tu etiam inprudens utebare non numquam. </p>
                    
                </div>
                
                <h2 class="heading-size-6-light text-center"><span>The Author</span></h2>
                
				<div class="row-block text-center">
                    
                    <div class="widget-tub span bg-facebook">
                        <div class="widget_lid">
                            <div class="widget_sticker icon-plain-size-7">
                                <i class="fa fa-facebook"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 class="heading-size-5">346</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <a class="button-block relative font-2">Facebook</a>
                    </div>
                    
                    <div class="widget-tub span bg-twitter">
                        <div class="widget_lid">
                            <div class="widget_sticker icon-plain-size-7">
                                <i class="fa fa-twitter"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 class="heading-size-5">346</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <a class="button-block relative font-2">Twitter</a>
                    </div>
                    
                    <div class="widget-tub span bg-google-plus">
                        <div class="widget_lid">
                            <div class="widget_sticker icon-plain-size-7">
                                <i class="fa fa-google-plus"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 class="heading-size-5">346</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <a class="button-block relative font-2">Google Plus</a>
                    </div>
                    
                    <div class="widget-tub span bg-rss">
                        <div class="widget_lid">
                            <div class="widget_sticker icon-plain-size-7">
                                <i class="fa fa-rss"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 class="heading-size-5">346</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <a class="button-block relative font-2">RSS</a>
                    </div>
                    
                    <div class="widget-tub span bg-email">
                        <div class="widget_lid">
                            <div class="widget_sticker icon-plain-size-7">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                        </div>
                        <div class="widget_content">
                            <header class="heading_group share-amount">
                                <h3 class="heading-size-5">346</h3>
                                <h3 class="heading-size-2-light-uppercase">Shares</h3>
                            </header>
                        </div>
                        <a class="button-block relative font-2">Email</a>
                    </div>
                    
                </div>
        
			</div><!-- container -->

		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>