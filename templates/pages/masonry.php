<?php 
	include ('../app.php');
	// page config
	$title = 'Our Portfolio';
	$tagLine = 'Some of our most recent and best work';
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
		
		<section class="section-primary relative">
			
			<div id="portfolio-carousel" class="owl-carousel">
				
				<div class="container">
	
                    <div class="tiles">
                        
                        <div class="tiles-tile tile tile-box">
                            
                            <!-- 4 x 2 -->
                            <div class="tiles-tile tile tile-rec">
                                <div class="tile-img"></div>
                            </div>
                            
                            <div class="tiles-tile tile tile-rec">
                                
                                <div class="tiles-tile tile tile-box">
                                    
                                    <!-- 2 x 1 -->
                                    <div class="tiles-tile tile tile-rec">
                                        <div class="tile-img"></div>
                                    </div>
                                    
                                    <div class="tiles-tile tile tile-rec">
                                        
                                        <!-- 1 x 1 -->
                                        <div class="tiles-tile tile tile-box">
                                            <div class="tile-img"></div>
                                        </div>
                                        
                                        <!-- 1 x 1 -->
                                        <div class="tiles-tile tile tile-box">
                                            <div class="tile-img"></div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                 <!-- 2 x 2 -->
                                <div class="tiles-tile tile tile-box">
                                    <div class="tile-img"></div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <!-- 4 x 4 -->
                        <div class="tiles-tile tile tile-box">
                            <div class="tile-img"></div>
                        </div>
                        
                    </div><!-- tiles -->
                    
                    <div class="tiles">
                        
                        <div class="tiles-tile tile tile-box">
                            <div class="tiles-tile tile tile-tall">
                                <div class="tile-img"></div>
                            </div>
                            <div class="tiles-tile tile tile-box">
                                <div class="tile-img"></div>
                            </div>
                            <div class="tiles-tile tile tile-box">
                                <div class="tile-img"></div>
                            </div>
                        </div>
                        
                        <div class="tiles-tile tile tile-box">
                            
                            <!-- 4 x 2 -->
                            <div class="tiles-tile tile tile-rec">
                                <div class="tile-img"></div>
                            </div>
                            
                            <div class="tiles-tile tile tile-rec">
                                
                                <div class="tiles-tile tile tile-box">
                                    
                                    <!-- 2 x 1 -->
                                    <div class="tiles-tile tile tile-rec">
                                        <div class="tile-img"></div>
                                    </div>
                                    
                                    <div class="tiles-tile tile tile-rec">
                                        
                                        <!-- 1 x 1 -->
                                        <div class="tiles-tile tile tile-box">
                                            <div class="tile-img"></div>
                                        </div>
                                        
                                        <!-- 1 x 1 -->
                                        <div class="tiles-tile tile tile-box">
                                            <div class="tile-img"></div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                 <!-- 2 x 2 -->
                                <div class="tiles-tile tile tile-box">
                                    <div class="tile-img"></div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div><!-- tiles -->
                    
				</div><!-- container -->
							
			</div><!-- portfolio-carousel -->
			
		</section>
		
		<?php include (ROOT.'/sections/promo-banner.php'); ?>
		
		<?php include (ROOT.'/modules/footer.php'); ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php include (ROOT.'/includes/scripts.php'); ?>

</body>