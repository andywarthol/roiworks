<?php
/*
Template Name: Approach
*/
?>

<?php get_header(); ?>

<section class="approach">
	<div class="container">
		<div class="row col-lg-10 col-lg-offset-1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-6 col-md-7">
					<br class="hidden-xs">
					<br class="hidden-xs">
					<br class="hidden-xs">
					<header>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>
					<p>Our shop takes a holistic approach to producing value.  We employ many different tools to push the needle, but they are all intertwined.  We also have rules in which we live by:</p>
					<!-- <ul>
						<li>Data is our master.</li>
						<li>We talk to users.</li>
						<li>Hypothesize <i class="glyphicon glyphicon-arrow-right" style="font-size: .75em; top: 0"></i> Test <i class="glyphicon glyphicon-arrow-right" style="font-size: .75em; top: 0"></i> Instrument.</li>
						<li>Instrument <i class="glyphicon glyphicon-arrow-right" style="font-size: .75em; top: 0"></i> Test <i class="glyphicon glyphicon-arrow-right" style="font-size: .75em; top: 0"></i> Iterate.</li>
						<li>Time is money.  Make it load quickly.</li>
						<li>Form without function is useless.</li>
						<li>We hire geniuses.</li>
					</ul> -->
					<a href="#data" class="btn btn-lg btn-primary">Hire us <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
				<div class="col-sm-6 col-md-5">
					<img src="<?php bloginfo('template_directory'); ?>/library/images/services-light.gif" class="img-responsive oversize">
				</div>
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
						<img src="<?php bloginfo('template_directory'); ?>/library/images/data.gif" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h1>Data is our master</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/speed.gif" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h1>Time is money</h1>
						<p>Make it load fast. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/user-testing.gif" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h1>Talk to your users</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/ux.gif" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h1>Hypothesize <i class="glyphicon glyphicon-arrow-right"></i> Test <i class="glyphicon glyphicon-arrow-right"></i> Instrument.</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/strategy.gif" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h1>Strategize</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/bulb.gif" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h1>Form needs function</h1>
						<p>Design should always accomplish something, and not just exist for the sake of </p>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/data.gif" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h1>Data is our master</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
					</div>
				</div>
				<div class="row technique">
					<div class="col-sm-3 text-right">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/data.gif" alt="" class="service">
					</div>
					<div class="col-sm-8">
						<h1>Data is our master</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam incidunt, tenetur modi cupiditate, dignissimos, dolor corrupti ipsam, ipsum veritatis doloribus optio. At expedita nam ipsum iusto eveniet magnam, impedit asperiores.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
