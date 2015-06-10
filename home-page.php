<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<section class="hero white">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-sm-6 col-md-10">
						<h1>Dramatic Results in <br>Extremely Short Timeframes</h1>
						<p class="intro">Helping companies grow with holistic marketing and data-driven strategies.</p>
						<p class="flat"><a href="?page_id=10" class="btn btn-lg btn-primary">Get a Free Consultation <i class="glyphicon glyphicon-chevron-right"></i></a></p>
					</div>
					<div class="col-sm-6 col-md-5">
						&nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="results grey">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="flat">Awesome Results</h1>
						<p class="intro">We effectively move the needle for our clients with data-driven decisions.</p>
					</div>
				</div>
				<div class="row">
					<!-- Bootstrap Carousel -->
					<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<?php
										global $post;
										$args = array( 'posts_per_page' => 4, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'date' );
										$myposts = get_posts( $args );
										foreach( $myposts as $post ) :  setup_postdata($post);
									?>
									<div class="col-sm-3">
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
											<h1><?php the_title(); ?></h1>
											<em><?php the_field('the_figure'); ?></em>
											<?php the_field('performance_metric'); ?> <?php the_field('time_frame'); ?>
											<!--<p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>-->
										</article> <!-- end article -->
									</div>
									<!-- Close the loop -->
									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<?php
										global $post;
										$args = array( 'posts_per_page' => 4, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'date', 'offset' => '3' );
										$myposts = get_posts( $args );
										foreach( $myposts as $post ) :  setup_postdata($post);
									?>
									<div class="col-sm-3 ">
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
											<h1><?php the_title(); ?></h1>
											<em><?php the_field('the_figure'); ?></em>
											<?php the_field('performance_metric'); ?><br/> <?php the_field('time_frame'); ?>
											<!--<p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>-->
										</article> <!-- end article -->
									</div>
									<!-- Close the loop -->
									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<?php
										global $post;
										$args = array( 'posts_per_page' => 4, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'date', 'offset' => '6' );
										$myposts = get_posts( $args );
										foreach( $myposts as $post ) :  setup_postdata($post);
									?>
									<div class="col-sm-3">
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
											<h1><?php the_title(); ?></h1>
											<em><?php the_field('the_figure'); ?></em>
											<?php the_field('performance_metric'); ?><br/> <?php the_field('time_frame'); ?>
											<!--<p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>-->
										</article> <!-- end article -->
									</div>
									<!-- Close the loop -->
									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>
								</div>
							</div>
						</div>
						<ol class="carousel-indicators">
							<li data-target="#carousel" data-slide-to="0" class="active"></li>
							<li data-target="#carousel" data-slide-to="1" class=""></li>
							<li data-target="#carousel" data-slide-to="2" class=""></li>
						</ol>
						<a class="left carousel-control" href="#carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center"><a href="#" class="btn btn-lg btn-primary">Get a Free Consultation <i class="glyphicon glyphicon-chevron-right"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="how blue">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="flat">Our Services</h1>
				<p class="intro text-center">The foundation of our work is divided into three core departments.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-sm-4 bucket">
						<h2>Measurement &amp; Research</h2>
						<i class="icon analytics"></i>
						<ul>
							<li><a href="ux-research-user-testing">UX Research</a></li>
							<li><a href="analytics">Analytics</a></li>
						</ul>
					</div>
					<div class="col-sm-4 bucket">
						<h2>Digital Marketing</h2>
						<i class="icon ppc"></i>
						<ul>
							<li><a href="sem-ppc">SEM</a></li>
							<li><a href="display-advertising">Display Advertising</a></li>
							<li><a href="social">Social</a></li>
							<li><a href="SEO">SEO</a></li>
							<li><a href="conversion-rate-optimization">Conversion Rate Optimization (CRO)</a></li>
						</ul>
					</div>
					<div class="col-sm-4 bucket">
						<h2>Design &amp; Build</h2>
						<i class="icon rwd"></i>
						<ul>
							<li><a href="responsive-web-design">Responsive Web Design</a></li>
							<li><a href="usability">Usability</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimonials white">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Testimonials</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php if(get_field('testimonials')): ?>
				<div class="row">
					<?php while(has_sub_field('testimonials')): ?>
					<div class="col-sm-4 text-center">
						<img class="thumbnail img-circle" src="<?php the_sub_field('headshot'); ?>" alt="">
						<blockquote>
							<span>“</span><?php the_sub_field('quote'); ?> <small><?php the_sub_field('name'); ?>, <?php the_sub_field('position'); ?></small>
						</blockquote>
						<img src="<?php the_sub_field('logo'); ?>" alt="" class="logo">
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
		  </div>
    </div>
  </div>
</section>
<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-sm-8"><h2>Contact us today to jumpstart your growth.</h2></div>
					<div class="col-sm-4"><a href="" class="btn btn-lg btn-primary">Get Started <i class="glyphicon glyphicon-chevron-right"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="faq grey">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1>Frequently Asked Questions</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-8 col-md-offset-2">
						<?php if(get_field('faq')): ?>
		 
							<div class="panel-group" id="accordion">

							<?php while(has_sub_field('faq')): ?>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('faq_id'); ?>" class="collapsed">
												<i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-down"></i>	<?php the_sub_field('faq_question'); ?>
											</a>
										</h4>
									</div>
									<div id="collapse<?php the_sub_field('faq_id'); ?>" class="panel-collapse collapse">
										<div class="panel-body">
											<?php the_sub_field('faq_answer'); ?>
										</div>
									</div>
								</div>
						
							<?php endwhile; ?>
						
							</div>
						
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.typer.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.inview.min.js"></script>
<script>
	jQuery(document).ready(function($){

		// Accordion
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

		// Type replacement
		$('[data-typer-targets]').typer();

		$.typer.options.highlightSpeed = 30;
		$.typer.options.typeSpeed = 130;
		$.typer.options.clearDelay = 700;
		$.typer.options.typeDelay = 400;
		$.typer.options.typerInterval = 3000;

		$('.hero').bind('inview', function (event, visible) {
      if (visible == true) {
        // element is now visible in the viewport
       $('.navbar-fixed-top').removeClass('dark');
          
      } else {
      	// element is no longer visible in the viewport
        $('.navbar-fixed-top').addClass('dark');
      }
    });

    $('.how').bind('inview', function (event, visible) {
      if (visible == true) {
        // element is now visible in the viewport
       $('.icon').addClass('shown');
          
      } else {
      	// element is no longer visible in the viewport
        $('.icon').removeClass('shown');
      }
    });

	});
</script>

<?php get_footer(); ?>
