<?php
/*
Template Name: Results
*/
?>

<?php get_header(); ?>

<section class="results grey">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="col-sm-12">
						<header>
							<h1 class="page-title"><?php the_title(); ?></h1>
						</header>
					</div>
				</div>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 3, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'title' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-4">
						<div class="bubble"><?php the_field('key_performance_indicator'); ?></div>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background: #fff url('<?php the_field('company_logo'); ?>') center center no-repeat; background-size: 85% auto;">
			        <h1><?php the_field('company_name'); ?></h1>
			        <p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>
						</article> <!-- end article -->
					</div>
					<!-- Close the loop -->
					<?php endforeach; ?>
		      <?php wp_reset_postdata(); ?>
				</div>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 3, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'title', 'offset' => '3' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-4">
						<div class="bubble"><?php the_field('key_performance_indicator'); ?></div>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background: #fff url('<?php the_field('company_logo'); ?>') center 60px no-repeat; background-size: 85% auto;">
			        <h1><?php the_field('company_name'); ?></h1>
			        <p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>
						</article> <!-- end article -->
					</div>
					<!-- Close the loop -->
					<?php endforeach; ?>
		      <?php wp_reset_postdata(); ?>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
