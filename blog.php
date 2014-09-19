<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="row">
					<div class="col-sm-3 ">
						<div class="well">
							<h3>About</h3>
							<ul class="">
								<?php wp_list_pages('title_li=&child_of=12&link_before=<i class="glyphicon glyphicon-chevron-right"></i>'); ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-9 main">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-sm-12">
								<header>
									<h1 class="page-title"><?php the_title(); ?></h1>
								</header>
							</div>
						</div>
						<?php
							global $post;
							$args = array( 'posts_per_page' => 3, 'category_name' => 'blog', 'order' => 'ASC', 'orderby' => 'title' );
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);
						?>
						<div class="row post-excerpt">
							<?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
								$url = $thumb['0'];
							?>
							<div class="card" style="background: #fff url(<?=$url?>) center center no-repeat; background-size: 225px 225px; background-position: 0 0">
								<div class="col-sm-4" >
									&nbsp;
								</div>
								<div class="col-sm-8">
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
										<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
										<div class="byline vcard"><?php
										printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', ') );
									?></div>
										<?php the_excerpt(); ?>
									</article> <!-- end article -->
								</div>
							</div>
						</div>
						<?php endforeach; ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>

<?php get_footer(); ?>
