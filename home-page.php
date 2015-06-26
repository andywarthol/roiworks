<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<section class="results grey">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<div class="col-sm-12 text">
							<h1 class="flat">Dramatic Results. <br class="visible-xs"/>Short Timeframes.</h1>
							<p class="intro">ROI Works is a digital agency specializing in rapid, data-driven growth and marketing.</p>
						</div>
					</div>
					<div class="row">
						<!-- Bootstrap Carousel -->
						<div id="carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<a href="<?php bloginfo('url'); ?>/results" class="more">More results &raquo;</a>
								<div class="item active">
									<div class="row">
										<?php
											global $post;
											$args = array( 'posts_per_page' => 4, 'category_name' => 'slider', 'order' => 'DESC', 'orderby' => 'date' );
											$myposts = get_posts( $args );
											foreach( $myposts as $post ) :  setup_postdata($post);
										?>
										<div class="col-sm-4 col-md-3 col-lg-3">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>');">
												<em><?php the_field('the_figure'); ?></em>
												<?php the_field('performance_metric'); ?> <span><?php the_field('time_frame'); ?></span>
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
											$args = array( 'posts_per_page' => 4, 'category_name' => 'slider', 'order' => 'DESC', 'orderby' => 'date', 'offset' => '4' );
											$myposts = get_posts( $args );
											foreach( $myposts as $post ) :  setup_postdata($post);
										?>
										<div class="col-sm-4 col-md-3 col-lg-3">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>');">
												<em><?php the_field('the_figure'); ?></em>
												<?php the_field('performance_metric'); ?> <span><?php the_field('time_frame'); ?></span>
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
											$args = array( 'posts_per_page' => 4, 'category_name' => 'results', 'order' => 'DESC', 'orderby' => 'date', 'offset' => '8' );
											$myposts = get_posts( $args );
											foreach( $myposts as $post ) :  setup_postdata($post);
										?>
										<div class="col-sm-4 col-md-3 col-lg-3">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>');">
												<em><?php the_field('the_figure'); ?></em>
												<?php the_field('performance_metric'); ?> <span><?php the_field('time_frame'); ?></span>
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
											$args = array( 'posts_per_page' => 4, 'category_name' => 'results', 'order' => 'DESC', 'orderby' => 'date', 'offset' => '12' );
											$myposts = get_posts( $args );
											foreach( $myposts as $post ) :  setup_postdata($post);
										?>
										<div class="col-sm-4 col-md-3 col-lg-3">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>');">
												<em><?php the_field('the_figure'); ?></em>
												<?php the_field('performance_metric'); ?> <span><?php the_field('time_frame'); ?></span>
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
											$args = array( 'posts_per_page' => 4, 'category_name' => 'results', 'order' => 'DESC', 'orderby' => 'date', 'offset' => '16' );
											$myposts = get_posts( $args );
											foreach( $myposts as $post ) :  setup_postdata($post);
										?>
										<div class="col-sm-4 col-md-3 col-lg-3">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>');">
												<em><?php the_field('the_figure'); ?></em>
												<?php the_field('performance_metric'); ?> <span><?php the_field('time_frame'); ?></span>
												<!--<p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>-->
											</article> <!-- end article -->
										</div>
										<!-- Close the loop -->
										<?php endforeach; ?>
										<?php wp_reset_postdata(); ?>
									</div>
								</div>
							</div>
							<ol class="carousel-indicators hidden-xs">
								<li data-target="#carousel" data-slide-to="0" class="active"></li>
								<li data-target="#carousel" data-slide-to="1" class=""></li>
								<li data-target="#carousel" data-slide-to="2" class=""></li>
								<li data-target="#carousel" data-slide-to="3" class=""></li>
								<li data-target="#carousel" data-slide-to="4" class=""></li>
							</ol>
							<a class="left carousel-control" href="#carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
							<a class="right carousel-control" href="#carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center"><a href="#contact" class="btn btn-lg btn-primary" data-toggle="modal">Jumpstart Your Growth <i class="glyphicon glyphicon-chevron-right"></i></a></div>
					</div>
					<div class="modal fade" id="contact">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Modal title</h4>
								</div>
								<div class="modal-body">
									<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 8, 'title' => false, 'description' => false ) ); ?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<script>
					jQuery(document).ready(function($){
						$('.carousel').carousel({
							interval: false
							//interval: 8000
						});

					});
					</script>
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
			<div class="col-lg-10 col-lg-offset-1">
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
<section class="how blue">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Our Services</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-4 bucket">
						<i class="icon ppc"></i>
						<h2>Paid Advertising</h2>
						<ul>
							<li><a href="#">PPC / SEM</a></li>
							<li><a href="#">Display Advertising</a></li>
							<li><a href="#">Facebook Advertising</a></li>
							<li><a href="#">Mobile Advertising</a></li>
						</ul>
					</div>
					<div class="col-sm-4 bucket">
						<i class="icon seo"></i>
						<h2>Search Engine Optimization</h2>
						<ul>
							<li><a href="#">SEO Audits</a></li>
							<li><a href="#">SEO Strategy &amp; Coaching</a></li>
							<li><a href="#">Content Marketing Strategy</a></li>
							<li><a href="#">Page Speed Optimization</a></li>
						</ul>
					</div>
					<div class="col-sm-4 bucket">
						<i class="icon cro"></i>
						<h2>Conversion Rate Optimization</h2>
						<ul>
							<li><a href="#">CRO Strategy</a></li>
							<li><a href="#">User Testing</a></li>
							<li><a href="#">Funnel Analysis</a></li>
							<li><a href="#">A/B Testing</a></li>
						</ul>
					</div>
				</div>
				<br class="hidden-xs"/><br class="hidden-xs"/>
				<div class="row">
					<div class="col-sm-4 col-lg-4 col-sm-offset-2 bucket">
						<i class="icon analytics"></i>
						<h2>Analytics</h2>
						<ul>
							<li><a href="#">Analytics Audits</a></li>
							<li><a href="#">Analytics Instrumentation</a></li>
							<li><a href="#">Tool Assessment</a></li>
							<li><a href="#">Multi-channel Attribution</a></li>
						</ul>
					</div>
					<div class="col-sm-4 bucket last">
						<i class="icon rwd"></i>
						<h2>Design</h2>
						<ul>
							<li><a href="#">Responsive Web Design</a></li>
							<li><a href="#">Landing Page Design</a></li>
							<li><a href="#">Usability Audits</a></li>
							<li><a href="#">Lead Generation UI</a></li>
						</ul>
					</div>
				</div>
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
					<div class="col-sm-4"><a href="<?php bloginfo('url'); ?>/contact" class="btn btn-lg btn-primary">Get Started <i class="glyphicon glyphicon-chevron-right"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="faq grey">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1>Frequently Asked Questions</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
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
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.inview.min.js"></script>
<script>
	jQuery(document).ready(function($){

		// Fade in hero
		$('.results').addClass('active');

		setTimeout(function(){
			$('.results .text').addClass('active');
		}, 600);

		setTimeout(function(){
			$('.results .carousel').addClass('active');
		}, 900);

		setTimeout(function(){
			$('.results .btn-primary').addClass('in');
		}, 1100);

		// Accordion
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

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
