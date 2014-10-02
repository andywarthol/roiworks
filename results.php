<?php
/*
Template Name: Results
*/
?>

<?php get_header(); ?>
<?php /*<section class="results hero">
	<div class="container">
		<div class="row col-lg-10 col-lg-offset-1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-6 col-md-7">
					<header>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>
					<p>Our shop takes a holistic approach to producing value.  We employ many different tools to push the needle, but they are all intertwined.  We also have rules in which we live by:</p>
					<!-- <ul>
						<li>Data is our master.</li>
						<li>We talk to users.</li>
						<li>Hypothesize <i class="glyphicon glyphicon-arrow-right" style="font-size: .75em; top: 0"></i> Test <i class="glyphicon glyphicon-arrow-right" style="font-size: .75em; top: 0"></i> Instrument.</li>
						<li>Instrument <i class="glyphicon glyphicon-arrow-right" style="font-size: .75em; top: 0"></i> Test <i class="glyphicon glyphicon-arrow-right" style="font-size: .75em; top: 0"></i> Iterate.</li>
						<li>Time is money.  Make it load quickly.</li>
						<li>Form without function is useless.</li>
						<li>We hire geniuses.</li>
					</ul> -->
					<a href="#data" class="btn btn-lg btn-primary">Hire us <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
				<div class="col-sm-6 col-md-5">
					<!-- <img src="<?php bloginfo('template_directory'); ?>/library/images/services-light.gif" class="img-responsive oversize"> -->
					&nbsp;
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section> */ ?>
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
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
			        <h1><?php the_title(); ?></h1>
							<em><?php the_field('the_figure'); ?></em>
							<?php the_field('performance_metric'); ?><br/><?php the_field('time_frame'); ?>
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
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
			        <h1><?php the_title(); ?></h1>
							<em><?php the_field('the_figure'); ?></em>
							<?php the_field('performance_metric'); ?><br/><?php the_field('time_frame'); ?>
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
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
			        <h1><?php the_title(); ?></h1>
							<em><?php the_field('the_figure'); ?></em>
							<?php the_field('performance_metric'); ?><br/><?php the_field('time_frame'); ?>
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
