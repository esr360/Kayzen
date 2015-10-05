<?php
$totalCols = 12;
?>

<?php for($row = 0 ; $row < $rows; $row++) { ?>
<div class="<?php echo
	'row-flow'. 
	($noGutter ? '-no-gutter' : '').
	($waffle ? '-waffle' : '')
?>">
	
	<?php 
		//$span = ($totalCols / $columns); 
		for($column = 0 ; $column < $columns; $column++) { 
	?>
	<div class="thumbnail span-<?php echo $colSpan ?>">
		<div class="thumbnail_mask">
			<div class="icon_group-small">
				<a href="#" class="icon-border-circle-size-3">
					<i class="fa fa-search"></i>
				</a>
				<a href="#" class="icon-border-circle-size-3">
					<i class="fa fa-link"></i>
				</a>
			</div>
		</div>
		<img src="<?php echo appDir ?>/images/wallpapers/bg-<?php echo rand(1, 7) ?>.jpg">
	</div>
	<?php } ?>
	
</div>
<?php } ?>