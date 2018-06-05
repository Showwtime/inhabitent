<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="single-product-content-area-wrapper container">

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="product-flex">

					<header class="single-product-entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full' ); ?>
						<?php endif; ?>
					</header><!-- .entry-header -->
					<div class="single-product-info">
						<div class="single-product-title">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</div>

						<div class="entry-content-single">
							<p class="price"><?php echo CFS()->get( 'price' ); ?>
							<?php the_content(); ?>
						</div><!-- .entry-content-single -->
					</div>
				</div>
				
				<footer class="entry-footer">
					<?php red_starter_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			
			</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>