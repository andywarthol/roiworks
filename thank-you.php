<?php
/*
Template Name: Thank You
*/
?>

<?php get_header(); ?>

<section class="hero">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
		$url = $thumb['0'];
	?>
	<header style="background-image: url(<?=$url?>)">
		<div class="overlay">
			<h1 class="page-title text-center">Thank You!</h1>
		</div>
	</header>
	<?php endwhile; endif; ?>
</section>
<section class="thank-you">
	<div class="container">
		<!-- <h2>Please enter your contact details and a short message below and we will get back to you as soon as possible.</h2> -->
		<div class="row">
			<div class="col-sm-12 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-center">
				<?php the_content(); ?>
				<a class="btn btn-lg btn-default" href="<?php bloginfo('url'); ?>">Continue Browsing <i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		// Fade hero functionality
		$('.hero').addClass('active');

		setTimeout(function(){
			$('.hero .page-title').addClass('active');
		}, 600);
	});
</script>

<?php get_footer(); ?>


