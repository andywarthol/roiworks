<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>
<section class="service hero">
	<div class="container">
		<div class="row col-lg-10 col-lg-offset-1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-6 col-md-7">
					<header>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>
					<p>Our shop takes a holistic approach to producing value.  We offer a holistic approach to moving the needle which employs many different services. </p>
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
<section class="service ppc">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h2>SEM / PPC</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7 col-lg-offset-1">
						<p>We target specific keywords to drive you qualified customers.</p>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<p class="flat text-center"><a href="?page_id=175" class="btn btn-lg btn-primary">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a></p>
					</div>
					<div class="col-sm-5 col-lg-4">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/ppc-service.gif" alt="Pay Per Click (PPC) graphic element" class="img-responsive in">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service white social">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h2>Social</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5 col-lg-4 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/social-service.gif" alt="Social media laptop graphic" class="img-responsive">
					</div>
					<div class="col-sm-7 col-lg-7">
						<p>We deploy carefully targeted social campaigns.</p>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<p class="flat text-center"><a href="?page_id=175" class="btn btn-lg btn-primary">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service display">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h2>Display Advertising</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7 col-lg-offset-1">
						<p>Unmatched spend management and clickthrough rates.</p>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<p class="flat text-center"><a href="?page_id=175" class="btn btn-lg btn-primary">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a></p>
					</div>
					<div class="col-sm-5 col-lg-4">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/display-ad.gif" alt="Display ad graphic on devices" class="img-responsive">
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="service white analytics">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h2>Analytics Consulting</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5 col-lg-4 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/analytics.gif" alt="Analytics graphic on devices" class="img-responsive">
					</div>
					<div class="col-sm-7">
						<p>Over 15 years of analytics expertise.</p>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<p class="flat text-center"><a href="?page_id=175" class="btn btn-lg btn-primary">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service cro">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h2>Conversion Rate Optimization</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7 col-lg-offset-1">
						<p>We employ a number of data-driven methods to optimize your conversion rate.</p>
						<ul>
							<li>Increasing your page load speed because time is money.</li>
							<li>Writing copy to reduce confusion and reinforce your value prop.</li>
							<li>Tweaking designs to effectively guide users through your funnel.</li>
						</ul>
						<p class="flat text-center"><a href="?page_id=175" class="btn btn-lg btn-primary">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a></p>
					</div>
					<div class="col-sm-5 col-lg-4">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/conversion-rate-optimization.gif" alt="" class="img-responsive">
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="service white ux">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h2>UX Research, Usability &amp; User Testing</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5 col-lg-4 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/user-testing2.gif" alt="" class="img-responsive">
					</div>
					<div class="col-sm-7">
						<p>Culpa rem accusantium voluptatem qui, odio voluptate fugit. Voluptate aut ipsa cumque aliquid:</p>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<p class="flat text-center"><a href="?page_id=175" class="btn btn-lg btn-primary">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service creative">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h2>Creative Services</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7 col-lg-offset-1">
						<p>Culpa rem accusantium voluptatem qui, odio voluptate fugit. Voluptate aut ipsa cumque aliquid:</p>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<p class="flat text-center"><a href="?page_id=175" class="btn btn-lg btn-primary">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a></p>
					</div>
					<div class="col-sm-5 col-lg-4">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/creative-services.gif" alt="" class="img-responsive">
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="service white website">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h2>Website Design</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5 col-lg-4 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/web-design.gif" alt="" class="img-responsive">
					</div>
					<div class="col-sm-7">
						<p>Culpa rem accusantium voluptatem qui, odio voluptate fugit. Voluptate aut ipsa cumque aliquid:</p>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<p class="flat text-center"><a href="?page_id=175" class="btn btn-lg btn-primary">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service ab">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h2>A/B Testing</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7 col-lg-offset-1">
						<p>Culpa rem accusantium voluptatem qui, odio voluptate fugit. Voluptate aut ipsa cumque aliquid:</p>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<p class="flat text-center"><a href="?page_id=175" class="btn btn-lg btn-primary">Learn more <i class="glyphicon glyphicon-chevron-right"></i></a></p>
					</div>
					<div class="col-sm-5 col-lg-4">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/landing-page-optimization.gif" alt="Graphic of landing page optimization through a/b testing" class="img-responsive">
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.inview.min.js"></script>
<script>
	jQuery(document).ready(function($){
		
    $('.service img').bind('inview', function (event, visible) {
      if (visible == true) {
        // element is now visible in the viewport
       $(this).addClass('in');
          
      } else {
        // element has gone out of viewport
         // $(" img").removeClass('in');
      }
    });
	});
</script>
<?php get_footer(); ?>
