<?php
/*
Template Name: Approach
*/
?>

<?php get_header(); ?>

<section class="approach hero">
	<div class="container">
		<div class="row col-lg-10 col-lg-offset-1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-6 col-md-7">
					<header>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>
					<p>Our shop takes a holistic approach to producing value.  We employ many different tools to push the needle, but they are all intertwined.  We also have rules in which we live by:</p>
					<a href="#data" class="btn btn-lg btn-primary">Hire us <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
				<!-- <div class="col-sm-6 col-md-5">
					<img src="<?php bloginfo('template_directory'); ?>/library/images/services-light-icon-grey.png" class="img-responsive oversize">
					&nbsp;
				</div>-->
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<section id="data" class="approach white">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/analytics-icon-grey.png" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h2>Analytics</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
						<i class="glyphicon glyphicon-arrow-down"></i>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/ux-icon-grey.png" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h2>UX Research &amp; Customer Development</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
						<i class="glyphicon glyphicon-arrow-down"></i>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/ab-testing-icon-grey.png" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h2>A/B Testing &amp; Conversion Rate Optimization (CRO)</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
						<i class="glyphicon glyphicon-arrow-down"></i>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/acquisition-icon-grey.png" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h2>Acquisition, Testing Channels &amp; Target Audience</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
						<i class="glyphicon glyphicon-arrow-down"></i>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/activation-icon-grey.png" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h2>Activation</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
						<i class="glyphicon glyphicon-arrow-down"></i>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/revenue-icon-grey.png" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h2>Revenue &amp; Price Testing</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
						<i class="glyphicon glyphicon-arrow-down"></i>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/email-icon-grey.png" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h2>Retention, Remarketing &amp; Email</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
						<i class="glyphicon glyphicon-arrow-down"></i>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/referral-icon-grey.png" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h2>Referral Programs</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
