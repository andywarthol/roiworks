<?php
/*
Template Name: Culture
*/
?>

<?php get_header(); ?>

<section class="culture hero">
	<div class="container">
		<div class="row col-lg-10 col-lg-offset-1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-6">
					<header>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>
					<p>ROI.works Search Marketing makes it easy for corporations and their advertising agencies to get a steady stream of new customers. </p>
					<a href="#data" class="btn btn-lg btn-primary">Hire us <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
				<div class="col-sm-6 col-md-5 col-lg-4">
					<!-- <img src="<?php bloginfo('template_directory'); ?>/library/images/services-light.gif" class="img-responsive oversize"> -->
					&nbsp;
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="row">
					<div class="col-sm-2">
						<div class="well">
							<h3>About</h3>
							<ul class="">
								<?php wp_list_pages('sort_column=menu_order&exclude=44&title_li=&child_of=12&link_before=<i class="glyphicon glyphicon-chevron-right"></i>'); ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-9">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php /*<div class="row">
							<div class="col-sm-12">
								<header>
									<h1 class="page-title flat"><?php the_title(); ?></h1>
									<p class="intro">Our team believes in a set of values that bring us all together as a team.</p>
								</header>
							</div>
						</div>*/ ?>
						<div class="row block">
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/library/images/work-hard.jpg" class="thumbnail">
							</div>
							<div class="col-sm-8">
								<h2>Work smarter, not harder.</h2>
								<blockquote>"The reason why we work hard is simple.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, facere suscipit ipsa at, quo deleniti qui soluta dignissimos. Exercitationem porro mollitia esse, temporibus odit tenetur explicabo officia unde." <small>George Revutsky, Founder CEO</small></blockquote>
							</div>
						</div>
						<div class="row block">
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/library/images/data-first.jpg" class="thumbnail">
							</div>
							<div class="col-sm-8">
								<h2>Data is your friend.</h2>
								<blockquote>"It's important to know that we are a data first organization.  Opinions about what is best for conversions always vary, but until you have data you really don't have shit.  We base our decisions off of data because the numbers never lie." <small>George Revutsky, Founder CEO</small></blockquote>
							</div>
						</div>
						<div class="row block">
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/library/images/focus-on-client.jpg" class="thumbnail">
							</div>
							<div class="col-sm-8">
								<h2>Focus on the client and all else will follow.</h2>
								<blockquote>"We are a Special Forces team for our clients.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, facere suscipit ipsa at, quo deleniti qui soluta dignissimos. Exercitationem porro mollitia esse, temporibus odit tenetur explicabo officia unde." <small>George Revutsky, Founder CEO</small></blockquote>
							</div>
						</div>
						<div class="row block">
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/library/images/be-healthy.jpg" class="thumbnail">
							</div>
							<div class="col-sm-8">
								<h2>Take care of yourself, damnit.</h2>
								<blockquote>"If you're not taking care of yourself, work output is the first thing to go.  That's why it's so important to be good to your body &mdash; Et, facere suscipit ipsa at, quo deleniti qui soluta dignissimos. Exercitationem porro mollitia esse." <small>Justin Stein, Account Manager</small></blockquote>
							</div>
						</div>
						<div class="row block">
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/library/images/make-friends.jpg" class="thumbnail">
							</div>
							<div class="col-sm-8">
								<h2>Make friends at work.</h2>
								<blockquote>"Runway is a really awesome place with a lot of really awesome people.  One thing I love about it is that there are tons of happy hours and cool events and mingling, which makes it more than just a place of business." <small>Stephen Edmondson, Client Services Manager</small></blockquote>
							</div>
						</div>
						<div class="row block">
							<div class="col-sm-4">
								<img src="<?php bloginfo('template_directory'); ?>/library/images/have-fun.jpg" class="thumbnail">
							</div>
							<div class="col-sm-8">
								<h2>Celebrate success</h2>
								<blockquote>"I remember one day I was just sitting at my desk coding and all of the sudden I heard this loud music.  Turns it it was a marching band coming down the runway.  I love the silliness that happens here.  It's really important to be able to have fun at work." <small>Andrew Van Wart, Designer</small></blockquote>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<?php get_footer(); ?>