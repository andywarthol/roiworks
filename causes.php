<?php
/*
Template Name: Causes
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
<section class="about causes">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="row">
					<div class="col-sm-3 hidden-xs">
						<div class="well">
							<h3>Our Company</h3>
							<ul class="">
								<?php wp_list_pages('sort_column=menu_order&title_li=&include=12,307,96,98&depth=-1&link_before=<i class="glyphicon glyphicon-chevron-right"></i>'); ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-9">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-sm-12">
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
									<?php the_content();  ?>

								</article> <!-- end article -->
							</div>
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
		
		// Fade hero functionality
		$('.hero').addClass('active');

		setTimeout(function(){
			$('.hero .page-title').addClass('active');
		}, 600);

		if (window.location.hash == "#vpclientservices") {
			$('#field_oknffn').val('VP Client Services');
		} else if (window.location.hash == "#sraccountmanager") {
			$('#field_oknffn').val('Senior Account Manager');
		}
	});
</script>
<?php get_footer(); ?>