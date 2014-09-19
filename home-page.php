<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<section class="hero">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1>Generate More Revenue.</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<h2>Lorem ipsum dolor sit amet adipisicing:</h2>
						<ul>
							<li>Eveniet, quae harum illo officiis est veniam eaque quia ullam vitae.</li>
							<li>Aliquid porro fuga, rerum dolore vitae.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
						<p class="flat text-center"><a href="#" class="btn btn-lg btn-default">View case studies &raquo;</a></p>
					</div>
					<div class="col-sm-6">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/workspace.jpg" alt="" class="img-responsive">
					</div>
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
<section class="hero lightBlue-gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Generate more revenue.</h1>
				<p></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<button class="btn btn-bordered btn-lg">Get a quote</button>
			</div>
		</div>
	</div>
</section>
<section class="benefits purple-gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-lg-2 col-lg-offset-1 bucket">
						<i class="icon seo"></i>
						<h2>SEO</h2>
					</div>
					<div class="col-lg-2 bucket">
						<i class="icon rwd"></i>
						<h2>Responsive Design</h2>
					</div>
					<div class="col-lg-2 bucket">
						<i class="icon ppc"></i>
						<h2>Pay Per Click</h2>
					</div>
					<div class="col-lg-2 bucket">
						<i class="icon conversion"></i>
						<h2>Conversion <br class="visible-lg">Optimization</h2>
					</div>
					<div class="col-lg-2 bucket">
						<i class="icon ux"></i>
						<h2>UX</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		$('.icon').addClass('shown');

		// Accordion
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');
	});
</script>

<?php get_footer(); ?>
