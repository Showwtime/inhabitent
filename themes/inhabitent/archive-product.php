<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container shop-page">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

           <div class="product-type-category">
               <?php
                       $terms = get_terms( array( 'taxonomy' => 'product_type', 'hide_empty' => 0 ) );
                       
                if ( ! empty ( $terms ) && ! is_wp_error( $terms ) ) : ?>                    
                   	<?php foreach ( $terms as $term ) :  ?>                
                   		<p>
                        	<a href="<?php echo get_term_link( $term ); ?>" class="stuff-category-button">
                        	<?php echo $term->name; ?></a>
                   		</p>
                   	<?php endforeach; ?>
                <?php endif; ?>
           </div>

           <?php /* Start the Loop */ ?>
           <div class="products-grid">

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

						<p class="entry-title"><?php the_title(); ?></p>
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

