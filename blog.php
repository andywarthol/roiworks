<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<section class="blog grey">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row hide">
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
				<div class="row">
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
						$url = $thumb['0'];
					?>
					<div class="col-sm-12">
						<article <?php post_class( 'card clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<div class="featured-image" style="background-image: url(<?=$url?>)">
							</div>
							<div class="card-content">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="byline vcard"><?php
										printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', ') );
									?></div>
								<?php the_content(); ?>
							</div>
						</article> <!-- end article -->
					</div>
				</div>
				<?php endforeach; ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-sm-12 col-md-4 sidebar">
				<div class="">
					<?php get_sidebar(); ?>
				</div>
				
			</div>			
		</div>
	</div>
</section>

<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.inview.min.js"></script>
<script>
	jQuery(document).ready(function($){

		// Affix functionality
		$('.navbar').bind('inview', function (event, visible) {
      if (visible == true) {
        // element is now visible in the viewport
       $('.sidebar > div').removeClass('affix');
          
      } else {
      	// element is no longer visible in the viewport
        $('.sidebar > div').addClass('affix');
        $('.affix').width($('.sidebar').width());
      }
    });

    // Value replace
    $('#email').focus(function() {
			if (!$(this).data("Enter your email here")) $(this).data("Enter your email here", $(this).val());
			if ($(this).val() != "" && $(this).val() == $(this).data("Enter your email here")) $(this).val("");
		}).blur(function(){
		    if ($(this).val() == "") $(this).val($(this).data("Enter your email here"));
		});

	});
</script>
<?php get_footer(); ?>
