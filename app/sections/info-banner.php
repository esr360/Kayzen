<!-- Info Banner -->
<?php if ($style == 'brand') { ?>
<section 
	class="section-secondary-overlay" 
	style="background-image: url('<?php echo appDir ?>/images/billboard-1.jpg')"
>
	<div class="container">
		<div class="row text-center">
			<div class="span-8">
				<header class="heading_group">
					<h2 class="heading-uppercase-light-strikethrough-spaced-size-4"><span>Kayzen</span></h2>
					<h3 class="heading-uppercase-heavy-size-7 font-2">Wordpress Theme</h3>
				</header>
				<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				<p class="button_group">
					<a href="#" target="blank" class="button-border-white-size-3">View Demo</a>
					<a href="#" class="button-white-size-3">Purchase Theme</a>
				</p>
			</div>
		</div>
	</div>
</section>
<?php } else if ($style == 'light') { ?>
<section 
	class="section-primary" 
	data-stellar-background-ratio="0.5"
	style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
>
	<div class="container">
		<div class="row text-center">
			<div class="span-8">
				<header class="heading_group">
					<h2 class="heading-uppercase-light-brand-1-strikethrough-spaced-size-4"><span>Kayzen</span></h2>
					<h3 class="heading-uppercase-heavy-size-7 font-2">Wordpress Theme</h3>
				</header>
				<p class="lede">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit vel turpis imperdiet tempus. Etiam venenatis maximus luctus. Curabitur eget lorem tortor.</p>
				<p class="button_group">
					<a href="#" target="blank" class="button-size-3">View Demo</a>
					<a href="#" class="button-primary-size-3">Purchase Theme</a>
				</p>
			</div>
		</div>
	</div>
</section>
<?php } ?>