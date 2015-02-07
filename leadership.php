<?php
/*
Template Name: Leadership
*/
?>

<?php get_header(); ?>

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
						<div class="row">
							<div class="col-sm-12">
								<header>
									<h1 class="page-title"><?php the_title(); ?></h1>
								</header>
							</div>
						</div>
						<div class="row">
							<?php if( have_rows('team_member') ): while ( have_rows('team_member') ) : the_row(); ?>
								<div class="col-sm-3">
									<div class="team-member id-<?php the_sub_field('team_member_id'); ?>">
										<a data-toggle="modal" href='#modal-<?php the_sub_field('team_member_id'); ?>'>
											<img src="<?php the_sub_field('team_member_headshot'); ?>" class="img-responsive headshot">
											<div class="caption">
												<h3><?php the_sub_field('team_member_name'); ?><small><?php the_sub_field('team_member_title'); ?></small></h3>
											</div>
										</a>
										<div class="modal" id="modal-<?php the_sub_field('team_member_id'); ?>">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h4 class="modal-title"><?php the_sub_field('team_member_name'); ?> <small><?php the_sub_field('team_member_title'); ?></small></h4>
													</div>
													<div class="modal-body">
														<p><?php the_sub_field('team_member_bio'); ?></p>
													</div>
												</div><!-- /.modal-content -->
											</div><!-- /.modal-dialog -->
										</div><!-- /.modal -->
									</div>
								</div><!-- col-sm-3-->
							<?php endwhile; else : endif;  ?>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>

<?php get_footer(); ?>
