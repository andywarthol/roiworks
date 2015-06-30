<?php
/*
Template Name: Results
*/
?>

<?php get_header(); ?>

<section class="hero">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
		$url = $thumb['0'];
	?>
	<header style="background-image: url(<?=$url?>)">
		<div class="overlay">
			<h1 class="page-title text-center">Results</h1>
		</div>
	</header>
	<?php endwhile; endif; ?>
</section>
<section class="results grey">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-12">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div id="filters" class="filters hidden-xs">
							<span class="hidden-xs">Filter by service: </span>
							<button type="button" class="btn btn-default" data-filter=".category-sem">PPC</button>
							<button type="button" class="btn btn-default" data-filter=".category-conversion">Conversion</button>
							<button type="button" class="btn btn-default" data-filter=".category-seo">SEO</button>
							<button type="button" class="btn btn-default" data-filter=".category-analytics">Analytics</button>
							<button type="button" class="btn btn-default" data-filter=".category-facebook">Facebook</button>
							<!-- <button type="button" class="btn btn-default" data-filter=".category-design">Design</button>-->
							<!-- <button type="button" class="btn btn-default" data-filter=".category-holistic">Holistic</button> -->
							<button type="button" class="btn btn-default" data-filter="*">Show all</button>
						</div>

							<?php /*$categories = wp_list_categories(array('child_of' => 4, 'title_li' => '' )); */ ?> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container result-cards">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-sm-12">
				<div class="row">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 99, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'rand' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :  setup_postdata($post);
					?>
					<div <?php post_class( 'item col-xs-6 col-sm-4 col-md-3 col-lg-3' ); ?>>
						<article id="post-<?php the_ID(); ?>" class="card slim" role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
							<h1><?php the_title(); ?></h1>
							<em><?php the_field('the_figure'); ?></em>
							<span class="metric"><?php the_field('performance_metric'); ?></span> <span class="timeframe"><?php the_field('time_frame'); ?></span>
						</article> <!-- end article -->
					</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div><!-- col-md-10 -->
		</div>
	</div>
	<div class="container mobile-results visible-xs">
		<div class="row">
			<?php
				global $post;
				$args = array( 'posts_per_page' => 60, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'rand' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :  setup_postdata($post);
			?>
			<div <?php post_class( 'item col-xs-6' ); ?>>
				<article id="post-<?php the_ID(); ?>" class="card slim post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
					<h1><?php the_title(); ?></h1>
					<em><?php the_field('the_figure'); ?></em>
					<?php the_field('performance_metric'); ?> <?php the_field('time_frame'); ?>
				</article> <!-- end article -->
			</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<script src="<?php bloginfo('template_directory'); ?>/library/js/isotope2.min.js"></script>
<script>
	jQuery(document).ready(function($){

		// Fade hero functionality
		$('.hero').addClass('active');

		setTimeout(function(){
			$('.hero .page-title').addClass('active');
		}, 600);

		// Active Filter
		$('button').click(function(){
			$('button').removeClass('active')
			$(this).addClass('active');
		});

		// Initialize Isotope
		$('.result-cards').isotope({
			itemSelector: '.col-lg-3',
			layoutMode: 'masonry',
			gutter: 0
		});

		// Filter Functionality
		$('#filters').on( 'click', 'button', function() {
			var filterValue = $(this).attr('data-filter');
			$('.result-cards').isotope({ filter: filterValue });
		});

		// Fade in the cards
		$('.results').addClass('active');
	});
</script>

<?php get_footer(); ?>
