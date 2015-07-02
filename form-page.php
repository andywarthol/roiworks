<?php
/*
Template Name: Form Page
*/
?>

<?php get_header(); ?>

<section class="form-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<div class="col-sm-12">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h1 class="page-title text-center">Design / Dev Request Form</h1>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		

	});
</script>

<?php get_footer(); ?>


