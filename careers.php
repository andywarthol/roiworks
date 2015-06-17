<?php
/*
Template Name: Careers
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
			<h1 class="page-title text-center">Work, learn and play with world-class <br class="hidden-xs"/>marketers, designers &amp; geeks.</h1>
		</div>
	</header>
	<?php endwhile; endif; ?>
</section>
<section class="about careers">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="row">
					<div class="col-sm-3 ">
						<div class="well">
							<h3>Our Company</h3>
							<ul class="">
								<?php wp_list_pages('sort_column=menu_order&exclude=44&title_li=&child_of=12&link_before=<i class="glyphicon glyphicon-chevron-right"></i>'); ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-9">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-sm-12">
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
									<?php /* the_content(); */ ?>
									<blockquote class="mission">No global movement springs from individuals. It takes an entire team united behind something big. Together, we work hard, we laugh a lot, we brainstorm nonstop, we use hundreds of Post-Its a week, and we give the best high-fives in town.</blockquote>
								</article> <!-- end article -->
							</div>
						</div>
						<?php endwhile; endif; ?>
						<div class="row headroom">
							<div class="col-sm-12">
								<h2>Our Values</h2>
							</div>
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6 value">
										<h3>Be a Host</h3>
										<p>Serve others so they feel they belong. We stretch our empathy until our guests feel 100% appreciated. Everyone is a guest.</p>
									</div>
									<div class="col-sm-6 value">
										<h3>Champion the Mission</h3>
										<p>Create a global experience of belonging for anyone, anywhere. Those who work us agree to champion the mission by living it.</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 value">
										<h3>Every Frame Matters</h3>
										<p>Think holistically. Execute with obsession to detail. Success is measured by pride, not credit.</p>
									</div>
									<div class="col-sm-6 value">
										<h3>Be a "Cereal" Entrepreneur</h3>
										<p>Everyone is creative. Think scary big. Volunteer for impossible situations. Get shit done.</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 value">
										<h3>Simplify</h3>
										<p>In every complex or impossible situation, we so clearly define the outcomes that all distractions are eliminated.</p>
									</div>
									<div class="col-sm-6 value">
										<h3>Embrace the Adventure</h3>
										<p>We have fun welcoming uncertainty. We master chaos through flexibility and youthful curiosity.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row positions">
							<div class="col-sm-12">
								<h2>Open Positions</h2>
							</div>
							<div class="col-sm-12 position">
								<h3>Senior Account Strategist</h3>
								<p>Are you a seasoned marketer?  We are looking for an online marketing rockstar to drive strategy for our many active accounts. <a href="#">Learn more &raquo;</a></p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 position">
								<h3>Summer Intern</h3>
								<p>Looking to learn valuable marketing skills and earn some extra cash?  We are looking for driven, entry-level marketers.  <a href="#">Learn more &raquo;</a></p>
							</div>
						</div>
						<div class="row headroom">
							<div class="col-sm-12">
								<h2 class="flat">Plenty of Perks</h2>
								<p>We greatly value the importance of a well-balanced, healthy work/life balance.  Working at <a href="http://runway.is">Runway</a> has a lot of cool benefits.  Yes it's an amazing space, but there is also a community aspect of life at ROI Works that keeps us happy and well cared for:</p>
							</div>
							<div class="col-sm-6 perk">
								<h3>Dog-Friendly Office</h3>
								<img src="<?php bloginfo('template_directory'); ?>/library/images/dog.jpg" class="img-responsive">
							</div>
							<div class="col-sm-6 perk">
								<h3>On-Site Gym</h3>
								<img src="<?php bloginfo('template_directory'); ?>/library/images/gym.jpg" class="img-responsive">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 perk">
								<h3>Free Events Every Week</h3>
								<img src="<?php bloginfo('template_directory'); ?>/library/images/community.jpg" class="img-responsive">
							</div>
							<div class="col-sm-6 perk">
								<h3>Bike Parking Aplenty</h3>
								<img src="<?php bloginfo('template_directory'); ?>/library/images/bicycles.jpg" class="img-responsive">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 perk">
								<h3>Marketplace In Building</h3>
								<img src="<?php bloginfo('template_directory'); ?>/library/images/market.jpg" class="img-responsive">
							</div>
							<div class="col-sm-6 perk">
								<h3>Game Night</h3>
								<img src="<?php bloginfo('template_directory'); ?>/library/images/game-night.jpg" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		if (window.location.hash == "#vpclientservices") {
			$('#field_oknffn').val('VP Client Services');
		} else if (window.location.hash == "#sraccountmanager") {
			$('#field_oknffn').val('Senior Account Manager');
		}
	});
</script>
<?php get_footer(); ?>