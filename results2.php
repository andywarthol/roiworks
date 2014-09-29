<?php
/*
Template Name: Results 2
*/
?>

<?php get_header(); ?>

<section class="results grey">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="col-sm-12">
						<header>
							<h1 class="page-title"><?php the_title(); ?></h1>
							<p class="intro">Our data-driven decisions allow us to move the needle significantly.  Check out some of our results.</p>
						</header>
					</div>
				</div>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 4, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'date' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-3 slim">
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'card dem' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
			        <h1><?php the_title(); ?></h1>
							<em><?php the_field('the_figure'); ?></em>
							<?php the_field('performance_metric'); ?> <span><?php the_field('time_frame'); ?></span>
			        <!-- <p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>-->
						</article> <!-- end article -->
					</div>
					<!-- Close the loop -->
					<?php endforeach; ?>
		      <?php wp_reset_postdata(); ?>
				</div>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 4, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'date', 'offset' => '4' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-3 slim">
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'card dem' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
			        <h1><?php the_title(); ?></h1>
							<em><?php the_field('the_figure'); ?></em>
							<?php the_field('performance_metric'); ?> <span><?php the_field('time_frame'); ?></span>
			        <!-- <p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>-->
						</article> <!-- end article -->
					</div>
					<!-- Close the loop -->
					<?php endforeach; ?>
		      <?php wp_reset_postdata(); ?>
				</div>
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 4, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'date', 'offset' => '8' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div class="col-sm-3 slim">
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'card dem' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
			        <h1><?php the_title(); ?></h1>
							<em><?php the_field('the_figure'); ?></em>
							<?php the_field('performance_metric'); ?> <span><?php the_field('time_frame'); ?></span>
			        <!-- <p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>-->
						</article> <!-- end article -->
					</div>
					<!-- Close the loop -->
					<?php endforeach; ?>
		      <?php wp_reset_postdata(); ?>
				</div>
				<?php endwhile; endif; ?>
			</div><!-- col-md-10 -->
		</div>
	</div>
</section>

<?php get_footer(); ?>
