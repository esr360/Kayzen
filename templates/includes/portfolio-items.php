<?php 

    $filterTypes = array('HTML-theme', 'photography', 'logo');
    
	$totalCols = 12;
	$items = $rows * $columns;
	$span = ($totalCols / $columns); 
    
	for($item = 0 ; $item < $items; $item++) { 
        
?>

<div 
    class="widget-card span-<?php echo $span ?>"
    <?php echo 'data-'.$filterTypes[array_rand($filterTypes)] ?>
>
	<div class="thumbnail">
		<div class="thumbnail_mask">
			<div class="thumbnail_controls<?php if($thumbTitle) echo '-corner' ?> icon_group-small">
				<a href="#" class="icon-border-circle-size-3">
					<i class="fa fa-search"></i>
				</a>
				<a href="#" class="icon-border-circle-size-3">
					<i class="fa fa-link"></i>
				</a>
			</div>
			<header class="thumbnail_title heading_group">
                <?php if ($thumbTitle === 'small') { ?>
                    <h4 class="heading">Lorem Ipsum</h4>
                <?php } else if ($thumbTitle === true) { ?>
                    <h4 class="heading-heavy-size-4 font-2">Lorem Ipsum</h4>
                    <h5 class="heading-light">Cras dictum erat id tortor ornare.</h5>
                <?php } ?>
			</header>
		</div>
		<img src="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg">
	</div>
	<?php if ($widgetTitle) { ?>
	<div class="widget_content text-center">
		<header class="heading_group">
			<h3 class="heading-heavy-size-3">Leather Jackets</h3>
			<h4 class="heading-light-uppercase-brand-1-size-2">Donec finibus fringer</h4>
		</header>
	</div>
	<?php } ?>
</div>

<?php } ?>