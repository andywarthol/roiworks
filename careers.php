<?php
/*
Template Name: Careers
*/
?>

<?php get_header(); ?>

<section class="hero jobs">
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
									<?php /* the_content(); */ ?>
									<blockquote class="mission">We're maniacally focused on getting results for our clients — as quickly as possible. We work surrounded by smart, humble, experienced, and inter-disciplinary people we enjoy spending time with. So we're also obsessed with helping everyone on the team achieve both their professional and financial goals.</blockquote>
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
										<h3>Results Come First</h3>
										<p>More than anything, focus on getting results for our clients, partners, and team.</p>
									</div>
									<div class="col-sm-6 value">
										<h3>Keep Things Simple</h3>
										<p>Define the desired outcome clearly. Simpler products, communication, and goals are best.</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 value">
										<h3>Learn Every Day</h3>
										<p>Our brains are hungry. We learn from each other, our clients, books, courses, events, and articles.</p>
									</div>
									<div class="col-sm-6 value">
										<h3>The Team is Everything</h3>
										<p>We put people over profit, and will turn away business if working with that individual or brand does not quite fit with us or our values.</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 value">
										<h3>Care About Details</h3>
										<p>We care about execution as much as we do about strategy and creativity. Take pride in your craft and get shit done.</p>
									</div>
									<div class="col-sm-6 value">
										<h3>Have Fun</h3>
										<p>Ever hear the one about the one-eyed UX researcher? Don't take yourself too seriously.</p>
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
								<p>Are you a seasoned online marketer with agency experience?  We're looking for a data-driven strategist to drive strategy for top tier brands and up-and-coming startups. <a href="<?php bloginfo('url'); ?>/apply-for-a-job/#sraccountstrategist">Apply now &raquo;</a></p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 position">
								<h3>Summer Intern</h3>
								<p>Looking to learn valuable marketing skills and earn some extra cash?  We are looking for driven, entry-level marketers.  <a href="<?php bloginfo('url'); ?>/apply-for-a-job/#summerintern">Apply now &raquo;</a></p>
							</div>
						</div>
						<div class="row headroom">
							<div class="col-sm-12">
								<h2 class="flat">Plenty of Perks</h2>
								<p>We greatly value the importance of a well-balanced, healthy work/life balance.  Working at <a href="http://runway.is">Runway</a> has a lot of cool benefits.  Yes it's an amazing space, but there is also a community aspect of life at ROI Works that keeps us happy and well cared for:</p>
							</div>
							<div class="col-sm-6 perk">
								<h3>Healthy Food Downstairs</h3>
								<div class="overlay-box">	
									<img src="<?php bloginfo('template_directory'); ?>/library/images/market.jpg" class="img-responsive">
									<span class="text-content"><span>Brand new marketplace downstairs w/ salad bar, taco bar, sushi bar, oyster bar, pizza bar, bar bar...</span></span>
								</div>
							</div>
							<div class="col-sm-6 perk">
								<h3>On-Site Gym</h3>
								<div class="overlay-box">	
									<img src="<?php bloginfo('template_directory'); ?>/library/images/gym.jpg" class="img-responsive">
									<span class="text-content"><span>We have a brand new gym right in our backyard.  We'll take care of your membership fees, no problem.</span></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 perk">
								<h3>Free Events Every Week</h3>
								<div class="overlay-box">	
									<img src="<?php bloginfo('template_directory'); ?>/library/images/community.jpg" class="img-responsive">
									<span class="text-content"><span>Our office has special events nearly every day with yummy food and drinks.</span></span>
								</div>
							</div>
							<div class="col-sm-6 perk">
								<h3>Dog-Friendly Office</h3>
								<div class="overlay-box">	
									<img src="<?php bloginfo('template_directory'); ?>/library/images/dog.jpg" class="img-responsive">
									<span class="text-content"><span>Treat your bestie to a large, open space to enjoy.  He or she will make lots friends pretty much immediately.</span></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 perk">
								<h3>Bike Parking Aplenty</h3>
								<div class="overlay-box">	
									<img src="<?php bloginfo('template_directory'); ?>/library/images/bicycles.jpg" class="img-responsive">
									<span class="text-content"><span>Bike to work?  No problem, just bring your bike into the office.  We've got lots of room and dedicated bike parking.</span></span>
								</div>
							</div>
							<div class="col-sm-6 perk">
								<h3>Game Night</h3>
								<div class="overlay-box">	
									<img src="<?php bloginfo('template_directory'); ?>/library/images/game-night.jpg" class="img-responsive">
									<span class="text-content"><span>Game Night happens once a week.  We play all kinds of fun games and also supply free pizza and beer.</span></span>
								</div>
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