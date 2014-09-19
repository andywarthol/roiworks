<?php
/*
Template Name: Team
*/
?>

<?php get_header(); ?>

<section class="team">
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
			<?php if( have_rows('team_member') ): while ( have_rows('team_member') ) : the_row(); ?>
			<div class="row">
				<div class="col-sm-4">
					<img src="<?php the_sub_field('team_member_headshot'); ?>" class="thumbnail img-responsive">
				</div>
				<div class="col-sm-8">
					<h2><?php the_sub_field('team_member_name'); ?><small><?php the_sub_field('team_member_title'); ?></small></h2>
					<p><?php the_sub_field('team_member_bio'); ?></p>
				</div>
			</div>
			<?php endwhile; else : endif;  ?>
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
