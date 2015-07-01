<?php
/*
Template Name: Leadership 2
*/
?>

<?php get_header(); ?>

<section class="hero terse">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
		$url = $thumb['0'];
	?>
	<header style="background-image: url(<?=$url?>)">
		<div class="overlay">
			<h1 class="page-title text-center"><?php the_title(); ?></h1>
		</div>
	</header>
	<?php endwhile; endif; ?>
</section>
<section class="about leadership">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="row">
					<div class="col-sm-3 hidden-xs">
						<div class="well">
							<h3>Our Company</h3>
							<ul>
								<?php wp_list_pages('title_li=&child_of=12&link_before=<i class="glyphicon glyphicon-chevron-right"></i>'); ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-9">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php if( have_rows('team_member') ): while ( have_rows('team_member') ) : the_row(); ?>
							<article class="row" id="<?php the_sub_field('short_name'); ?>">
								<div class="col-sm-12">
									<div class="headshot-wrapper">
										<img src="<?php the_sub_field('team_member_headshot'); ?>" class="img-responsive headshot">	
									</div>
									<div class="bio">
										<h2><?php the_sub_field('team_member_name'); ?><small><?php the_sub_field('team_member_title'); ?></small></h2>
										<?php the_sub_field('team_member_bio'); ?>
										<p class="linkedin">
											<a class="btn btn-default" href="<?php the_sub_field('linkedin_url'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> <?php the_sub_field('team_member_name'); ?> on LinkedIn</a></p>
										</p>
									</div>
								</div>
							</article>
						<?php endwhile; else : endif;  ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
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
