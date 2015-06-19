<?php
/*
Template Name: Service
*/
?>

<?php get_header(); ?>

<section class="single">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 hidden-xs">
						<div class="well">
							<h3>Our Services</h3>
							<ul class="">
								<?php wp_list_pages('sort_column=menu_order&exclude=44&title_li=&child_of=8&link_before=<i class="glyphicon glyphicon-chevron-right"></i>'); ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-9 col-md-8">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-sm-12">
								<header>
									<h1 class="page-title"><?php the_title(); ?></h1>
								</header>
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
									<?php the_post_thumbnail('medium', array('class' => 'alignright attachment-post-medium')); ?>
									<?php the_content(); ?>
									<p class="text-center">
										Any questions we can answer for you?<br class="hidden-xs"/>
										<a href="?page_id=14" class="btn btn-lg btn-primary">Get in touch with us <i class="glyphicon glyphicon-chevron-right"></i></a>
									</p>
								</article> <!-- end article -->
							</div>
							<!-- <div class="col-sm-3">
								<?php the_post_thumbnail(); ?>
							</div> -->
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		
    $('.service img').addClass('in');
	});
</script>
<?php get_footer(); ?>