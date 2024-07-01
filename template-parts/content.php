<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Minimalist_blog_template
 */

?>

<div class="wrapper">
	<section class="front" itemprop="blogPosts" itemscope="" itemtype="http://schema.org/BlogPosting">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title"><span itemprop="name headline mainEntityOfPage">', '</span></h1>' );
				else :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><span itemprop="name headline mainEntityOfPage">', '</span></a></h1>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<ul class="subline">
							<li>
									<time itemprop="datePublished dateModified" datetime="2024-06-23T00:00:00+00:00">
										<?php 
											//minimalist_blog_template_posted_on()
											the_time('F jS, Y')
										?>
									</time>
							</li>
							<li itemprop="wordCount"><?= word_count_text(get_the_ID())?></li>
							<li><?= do_shortcode('[rt_reading_time label="" postfix="minutes to read" postfix_singular="minute to read"]')?></li>
					</ul><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php minimalist_blog_template_post_thumbnail(); ?>

			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading...<span class="screen-reader-text"> "%s"</span>', 'minimalist-blog-template' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'minimalist-blog-template' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php minimalist_blog_template_entry_footer(); ?>
			</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
	</section>
</div>
