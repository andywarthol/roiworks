<?php
/*
Template Name: Results
*/
?>

<?php get_header(); ?>
<section class="results hero">
	<div class="container">
		<div class="row col-lg-10 col-lg-offset-1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-6 col-md-7">
					<header>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>
					<p>We have a reputation for moving the needle big time for our clients.  Check out all the different ways we've made a splash.</p>
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
</section>
<section class="results grey">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-12">
				<div class="row">
					<div class="col-sm-12">
						<header>
							<h1 class="page-title">Results</h1>
						</header>
					</div>
				</div>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="col-sm-12 text-center">
						<div id="filters" class="filters">
							Filter by service: 
							<button type="button" class="btn btn-default" data-filter="*">Show all</button>
							<button type="button" class="btn btn-default" data-filter=".category-conversion">Conversion</button>
							<button type="button" class="btn btn-default" data-filter=".category-design">Design</button>
							<button type="button" class="btn btn-default" data-filter=".category-holistic">Holistic</button>
							<button type="button" class="btn btn-default" data-filter=".category-sem">SEM</button>
						</div>

							<?php /*$categories = wp_list_categories(array('child_of' => 4, 'title_li' => '' )); */ ?> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container result-cards" style="margin-left: 30px">
		<div class="col-lg-10 col-lg-offset-1 col-md-12">
			<div class="row">
				<?php
					global $post;
					$args = array( 'posts_per_page' => 4, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'date' );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);
				?>
				<div <?php post_class( 'col-sm-3' ); ?>>
					<article id="post-<?php the_ID(); ?>" class="card slim" role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
		        <h1><?php the_title(); ?></h1>
						<em><?php the_field('the_figure'); ?></em>
						<?php the_field('performance_metric'); ?><br/><?php the_field('time_frame'); ?>
						<!-- <img src="<?php the_field('company_logo'); ?>" alt=""> -->
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
				<div <?php post_class( 'col-sm-3' ); ?>>
					<article id="post-<?php the_ID(); ?>" class="card slim" role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
		        <h1><?php the_title(); ?></h1>
						<em><?php the_field('the_figure'); ?></em>
						<?php the_field('performance_metric'); ?><br/><?php the_field('time_frame'); ?>
						<!-- <img src="<?php the_field('company_logo'); ?>" alt=""> -->
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
				<div <?php post_class( 'col-sm-3' ); ?>>
					<article id="post-<?php the_ID(); ?>" class="card slim" role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
		        <h1><?php the_title(); ?></h1>
						<em><?php the_field('the_figure'); ?></em>
						<?php the_field('performance_metric'); ?><br/><?php the_field('time_frame'); ?>
						<!-- <img src="<?php the_field('company_logo'); ?>" alt=""> -->
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
<script src="<?php bloginfo('template_directory'); ?>/library/js/isotope.min.js"></script>
<script>
	jQuery(document).ready(function($){
		$('.result-cards').isotope({
		  itemSelector: '.col-sm-3',
		  layoutMode: 'masonry'
		});
		$('#filters').on( 'click', 'button', function() {
		  var filterValue = $(this).attr('data-filter');
		  $('.result-cards').isotope({ filter: filterValue });
		});
	});
</script>

<?php get_footer(); ?>
