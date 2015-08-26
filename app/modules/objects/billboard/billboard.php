<!-- Billboard -->
<?php if ($type == 'fullscreen') { ?>
<section class="billboard-full-screen">
	<div class="billboard_wrapper container">
		<header class="heading_group">
			<h2 class="heading-uppercase-light-strikethrough-spaced-size-5"><span>Kayzen</span></h2>
			<h3 class="heading-uppercase-heavy-size-9 font-2">What's your theme?</h3>
		</header>
		<p class="lede">Kayzen is a powerful themeing framework for architecting CSS for large, modular & scalable web applications. Built using only Sass (SCSS), Kayzen has the customizing power of a complete CMS theme.</p>
		<p class="button_group">
			<a class="button-size-4-border-white" href="#ALAN">Explore The Potential</a>
		</p>
	</div>
	<nav class="slide-nav">
		<button class="slide-prev icon-border-size-4-white"><i class="fa fa-angle-left"></i></button>
		<button class="slide-next icon-border-size-4-white"><i class="fa fa-angle-right"></i></button>
	</nav>
	<a href="#key-features" class="scroll-wheel"></a>
</section>
<?php } else { ?>
<section class="billboard">
	<div class="billboard_wrapper container">
		<header class="heading_group">
			<h2 class="heading-uppercase-light-strikethrough-spaced-size-4"><span>Kayzen</span></h2>
			<h3 class="heading-uppercase-heavy-size-8 font-2"><?php echo $title ?></h3>
		</header>
	</div>
</section>
<?php } ?>