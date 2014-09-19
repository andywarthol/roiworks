<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<section class="about">
	<div class="container">
		<div class="row col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-12">
					<header>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<?php the_content(); ?>
					</article> <!-- end article -->
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>