<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
		<div class="taxonomy-product-type-wrapper">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->
				<div class="product-images">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="product-item">

					<div class="thumbnail-wrapper">

					<?php if ( has_post_thumbnail() ) : ?>
					<a href=<?php echo get_post_permalink() ?>><?php the_post_thumbnail( 'large' ); ?></a>
					<?php endif; ?>

					</div>

					<div class="item-info">

					<?php the_title('<h2 class="entry-title"></h2>' ); ?>
					<p class="price dots">...................</p>
					<p class="price"><?php echo CFS()->get( 'price' ); ?></p>

				</div>
		</div>
			<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>