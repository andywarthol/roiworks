<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="contact hero">
	<div class="container">
		<div class="row col-lg-10 col-lg-offset-1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-6 col-md-7">
					<header>
						<h1 class="page-title"><?php the_title(); ?> Us</h1>
					</header>
					<p>Yep.  We're ready to hear from you.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde corporis est reiciendis, ipsum.</p>
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
<section class="contact">
	<div class="container">
		<!-- <h2>Please enter your contact details and a short message below and we will get back to you as soon as possible.</h2> -->
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-6 form">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
					<div class="col-sm-6">
						<br/>
						<!-- <img src="<?php bloginfo('template_directory'); ?>/library/images/runway-interior.jpg" alt="" class="thumbnail img-responsive"> -->
						<div class="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.5607255949044!2d-122.41665199999998!3d37.776896999999934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c18e53f13%3A0xffda339b1a219815!2sRunway+Incubator!5e0!3m2!1sen!2sus!4v1410981027774" width="600" height="450" frameborder="0" style="margin-top: 30px border:0"></iframe>
						</div>
						<address class="pull-right text-right">
							<span>1355 Market St. Suite 488</span>
							<span>San Francisco, CA 94103</span>
							<span>(415) 887-7674</span>
						</address>
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


