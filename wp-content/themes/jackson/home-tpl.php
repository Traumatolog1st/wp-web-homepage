<?php
	// Template Name: Home Page
	global $jackson;
	global $post;
	$page_meta = jackson_prepare_meta( get_post_meta( $post->ID ) );
?>

<?php get_header(); ?>

<section class="advantages">
	<div class="container">
		<div class="entry-header">
			<h1><?php echo $page_meta['adv_title']; ?></h1>
			<p><?php echo $page_meta['adv_desc']; ?></p>
			<div class="bglogo"></div>
		</div>
		<div class="our-prod">
			<h1><?php echo $page_meta['our_prod']; ?></h1>
			<p><?php echo $page_meta['our_desc']; ?></p>
			<div class="video"></div>
		</div>
	</div>
</section>

<section class="supply-partners">
	<div class="commercial">
		<h1>Maintenance Supply</h1>
		<div class="supply">
			<img src="<?php echo get_template_directory_uri(); ?>/img/Layer17.jpg" alt="">
			<a href="#">Chemicals</a>
		</div>
		<div class="supply">
			<img src="<?php echo get_template_directory_uri(); ?>/img/Layer18.jpg" alt="">
			<a href="#">Hardware Maintenance</a>
		</div>
		<div class="supply">
			<img src="<?php echo get_template_directory_uri(); ?>/img/Layer19.jpg" alt="">
			<a href="#">Industrial Supply</a>
		</div>
		<div class="supply">
			<img src="<?php echo get_template_directory_uri(); ?>/img/Layer20.jpg" alt="">
			<a href="#">Tools</a>
		</div>
	</div>
	<div class="our-partners">
		<h1>Our partners</h1>
		<div class="partner"><img src="<?php echo get_template_directory_uri(); ?>/img/Layer24.jpg" alt=""></div>
		<div class="partner"><img src="<?php echo get_template_directory_uri(); ?>/img/Layer23.jpg" alt=""></div>
		<div class="partner"><img src="<?php echo get_template_directory_uri(); ?>/img/Layer22.jpg" alt=""></div>
		<div class="partner"><img src="<?php echo get_template_directory_uri(); ?>/img/Layer25.jpg" alt=""></div>
	</div>
</section>

<?php get_footer(); ?>