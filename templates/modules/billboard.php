<!-- Billboard -->
<?php if ($for == 'homepage') { ?>
<section class="billboard-full-screen" data-stellar-background-ratio="0.5">
	<div class="billboard_wrapper container-small">
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
<?php } else if ($for == 'videoBg') { ?>
<section class="billboard-videoBg-full-screen">
    <div class="auto-resizable-iframe" data-iframe-height="56.5%">
        <div>
            <iframe src="https://player.vimeo.com/video/87701971?autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div>
</section>
<?php } else { ?>
<section class="billboard" data-stellar-background-ratio="0.5">
	<div class="billboard_wrapper container">
		<header class="heading_group">
			<h2 class="heading-uppercase-light-strikethrough-spaced-size-4"><span>Kayzen</span></h2>
			<h3 class="heading-uppercase-heavy-size-8 font-2"><?php echo $title ?></h3>
			<?php if ( isset($tagLine) and ! is_null($tagLine) ) { ?>
			<h4 class="heading-size-2-light"><i><?php echo $tagLine ?></i></h4>
			<?php } ?>
		</header>
	</div>
</section>
<?php } ?>