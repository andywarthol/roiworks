<?php
/*
Template Name: Leadership 2
*/
?>

<?php get_header(); ?>
<section class="leadership hero">
	<div class="container">
		<div class="row col-lg-10 col-lg-offset-1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-6">
					<header>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum velit aut, dolore voluptatem, omnis quod eveniet iste.</p>
					<a href="#data" class="btn btn-lg btn-primary">Hire us <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
				<div class="col-sm-6 col-md-5 col-lg-4">
					<!-- <img src="<?php bloginfo('template_directory'); ?>/library/images/services-light.gif" class="img-responsive oversize"> -->
					&nbsp;
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<section class="about leadership">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="row">
					<div class="col-sm-3">
						<div class="well">
							<h3>About</h3>
							<ul>
								<?php wp_list_pages('title_li=&child_of=12&link_before=<i class="glyphicon glyphicon-chevron-right"></i>'); ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-9">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php if( have_rows('team_member') ): while ( have_rows('team_member') ) : the_row(); ?>
							<article class="row">
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

<?php get_footer(); ?>
