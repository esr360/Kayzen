<!-- Promo Section -->
<?php if ($style == 'light') { ?>
<section 
	class="section-primary"
	data-stellar-background-ratio="0.5"
	style="background-image: url('<?php echo appDir ?>/images/billboard-2.jpg')"
>
	<div class="container">
		<div class="row">
			<div class="span-6 info-video">
				<div class="auto-resizable-iframe">
					<div>
						<iframe allowfullscreen="" src="http://www.youtube.com/embed/Q3oItpVa9fs"></iframe>
					</div>
				</div>
			</div>
			<div class="span-6">
				<header class="heading_group">
					<h2 class="heading-heavy-size-5-uppercase font-2">Kayzen is the Best</h2>
					<h3 class="heading-light-brand-1-light-size-4">A Modern Template For Any Project</h3>
				</header>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
				<ul class="list-arrow min-break-2">
					<li>Lorem ipsum dolor sit amet consectetur</li>
					<li>Donec malesuada metus non massa sodales auctor</li>
					<li>Sed sed iaculis arcu, eu pharetra nulla</li>
					<li>Etiam dapibus, nulla placerat</li>
				</ul>
				<p class="button_group">
					<a href="#" target="blank" class="button">View Demo</a>
					<a href="#" class="button-primary">Purchase Theme</a>
				</p>
			</div>
		</div>
	</div>
</section>
<?php } else if ($style == 'dark') { ?>
<section class="section-secondary-overlay-alt">
	<div class="container">
		<div class="row">
			<div class="span-6 info-video">
				<div class="auto-resizable-iframe">
					<div>
						<iframe allowfullscreen="" src="http://www.youtube.com/embed/Q3oItpVa9fs?theme=light"></iframe>
					</div>
				</div>
			</div>
			<div class="span-6">
				<header class="heading_group">
					<h2 class="heading-heavy-size-5-uppercase font-2">Kayzen is the Best</h2>
					<h3 class="heading-light-brand-1-light-size-4">A Modern Template For Any Project</h3>
				</header>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget porta eros. Suspendisse vehicula massa in erat mattis.</p>
				<ul class="list-arrow min-break-2">
					<li>Lorem ipsum dolor sit amet consectetur</li>
					<li>Donec malesuada metus non massa sodales auctor</li>
					<li>Sed sed iaculis arcu, eu pharetra nulla</li>
					<li>Etiam dapibus, nulla placerat</li>
				</ul>
				<p class="button_group">
					<a href="#" target="blank" class="button-border-white">View Demo</a>
					<a href="#" class="button-primary">Purchase Theme</a>
				</p>
			</div>
		</div>
	</div>
</section>
<?php } ?>