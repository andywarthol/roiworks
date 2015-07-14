<?php get_header(); ?>

<section class="blog blog-single grey">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<div class="byline vcard"><?php
										printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', ') );
									?></div>
								<div class="social-share">
									<!-- <span class="text">Share this:</span> -->
									<a class="share-icon facebook" title="Recommend on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="blank" rel="nofollow"><span>Facebook <?php $URL = get_permalink();function get_shares($URL) { $json_string = file_get_contents('http://graph.facebook.com/?ids=' . $URL); $json = json_decode($json_string, true); return intval( $json[$URL]['shares'] );} ?><?php echo get_shares($URL); ?></span></a>
									<a class="share-icon twitter" title="Recommend on Twitter" href="https://twitter.com/intent/tweet?source=webclient&amp;amp;text=<?php echo rawurlencode(strip_tags(get_the_title())) ?> <?php echo urlencode(get_permalink($post->ID)); ?>" target="_blank" rel="nofollow"><span>Twitter</span></a>
									<a class="share-icon google" title="Recommend on Google+" href="https://plusone.google.com/_/+1/confirm?hl=de&amp;amp;url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;amp;title=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="blank" rel="nofollow"><span>Google+ <?php $URL = get_permalink();function get_plusone($url) { $curl = curl_init(); curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc"); curl_setopt($curl, CURLOPT_POST, 1); curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]'); curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json')); $curl_results = curl_exec ($curl); curl_close ($curl); $json = json_decode($curl_results, true); return intval( $json[0]['result']['metadata']['globalCounts']['count'] );} ?><?php echo get_plusone($URL); ?></span></a>
								</div>

								<!-- Begin article content -->
								<div class="article-content">
									<?php the_content(); ?>
								</div><!-- end of article content -->
								
								<!--<div class="social-share">
									<span class="text">Share this article:</span>
									<a class="share-icon facebook" title="Recommend on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="blank" rel="nofollow"></a>
									<a class="share-icon twitter" title="Recommend on Twitter" href="https://twitter.com/intent/tweet?source=webclient&amp;amp;text=<?php echo rawurlencode(strip_tags(get_the_title())) ?> <?php echo urlencode(get_permalink($post->ID)); ?>" target="_blank" rel="nofollow"></a>
									<a class="share-icon google" title="Recommend on Google+" href="https://plusone.google.com/_/+1/confirm?hl=de&amp;amp;url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;amp;title=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="blank" rel="nofollow"></a>
								</div>-->
							</div><!-- end of card content -->
							<div class="author-box">
								<div class="row">
									<div class="col-sm-3 text-center">
										<?php userphoto_the_author_photo(); ?>
									</div>
									<div class="col-sm-9">
										<h3>About <?php the_author(); ?></h3>
										<?php the_author_meta( 'description' ); ?>
										<div class="social">
											<a class="icon twitter" href="<?php the_author_meta('twitter'); ?>" title="<?php the_author(); ?> on Twitter" target="_blank">&nbsp;</a>
										</div>
									</div>
								</div>
							</div><!-- end of author box -->
							<div class="card-content">
								<?php comments_template(); ?>
							</div>
						</article> <!-- end article -->
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-sm-4 sidebar">
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

	});
</script>
<?php get_footer(); ?>
