<?php
/*
Template Name: Contact
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
<section class="contact">
	<div class="container">
		<!-- <h2>Please enter your contact details and a short message below and we will get back to you as soon as possible.</h2> -->
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-6 form">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php /*the_content();*/ ?>
							<h2 class="hidden-xs">Send Us A Message</h2>
							<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 8, 'title' => false, 'description' => false ) ); ?>
						<?php endwhile; endif; ?>
					</div>
					<div class="col-sm-6">
						<br/>
						<!-- <img src="<?php bloginfo('template_directory'); ?>/library/images/runway-interior.jpg" alt="" class="thumbnail img-responsive"> -->
						<div class="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3153.5674399330833!2d-122.41637150000001!3d37.7767396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMarket+Square%2C+1355+Market+St+suite+488%2C+San+Francisco%2C+CA+94103!5e0!3m2!1sen!2sus!4v1435946713068" width="600" height="450" frameborder="0" style="border:0" allowfullscreen style="margin-top: 30px border:0"></iframe>
						</div>
						<address class="pull-right text-right" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<span class="sub" itemprop="name">ROIworks Digital</span>
							<span class="sub" itemprop="streetAddress">1355 Market St. Suite 488</span>
							<span class="sub"><span itemprop="addressLocality">San Francisco</span>, <span itemprop="addressRegion">CA</span> <span itemprop="postalCode">94103</span></span>
							<span class="sub" itemprop="telephone">(415) 887-7674</span>
						</address>
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
		
		// Dropdown active state
    $('.spend select').change(function(){
    	if( $(this).val() == "" ){
    		$(this).removeClass('active');
    	} else {
    		$(this).addClass('active');
    	}
    });

	});

		
</script>

<?php get_footer(); ?>


