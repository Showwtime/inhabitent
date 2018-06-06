<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="container flex-content journal">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-journal-info">
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
			</div>
			
			<div class="single-journal-comments">
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>
			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		
	<?php get_sidebar(); ?>
</div><!-- #container flex-content -->
<?php get_footer(); ?>
