<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<body class="home">
    <!-- <header>

	</header> -->



<div class="site-content">
	<div class="content-area">
		<main class="main-content"> 

			<section class="banner">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo">
			</section>


			<section class="product-info container">
				<h2>Shop Stuff</h2>

			<?php
				$terms = get_terms( array(
					'taxonomy' => 'product_type',
					'hide_empty' => 0,
				));

				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>


				<div class="product-type">

				<?php foreach ( $terms as $term ) : ?>

					
					<div class="product-type-wrapper">

					<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' . $term->slug;?>.svg"
					alt="<?php echo $term->name; ?>"/>

					<p><?php echo $term->description; ?></p>

					<p>
						<a href="<?php echo get_term_link( $term ); ?>" class="button">
						<?php echo $term->name; ?> Stuff</a>
					</p>
					</div>

					<?php endforeach;  ?>
					</div>
					<?php endif; ?>
			</section>



			<section class="inhabitent-journal-wrapper">
				<div class="container">
					<h2>Inhabitent Journal</h2>
					<?php
						$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page'=> '3' );
						$product_posts = get_posts( $args ); // returns an array of posts
					?>
					<div class="inhabitent-journal">
						<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
					<div class="post-info-wrapper">
						<div class="thumbnail">
							<?php the_post_thumbnail(' medium ');?>
						</div>
						<div class="journal-comment-wrapper">
							<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
							<h3><?php the_title();?></h3>
						</div>
							<a class="blk-button" href="<?php echo the_permalink(); ?>">Read Entry</a>
					</div><!-- .entry-meta -->

					<?php endforeach; wp_reset_postdata(); ?>
						
				
			</section>



			<section class="latest-adventures container">
				<h2>Latest Adventures</h2>
				<ul>
					<li>
						<div class="grid-wrapper">
							<img class="linear" src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/canoe-girl.jpg">
							<div class="grid-block">
								<h3 class="grid-info"><a href="#">Getting Back to Nature in a Canoe</a></h3>
								<a href="#" class="wht-button">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="grid-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/beach-bonfire.jpg">
							<div class="grid-block">
								<h3 class="grid-info"><a href="#">A Night with Friends at the Beach</a></h3>
								<a href="#" class="wht-button">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="grid-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/mountain-hikers.jpg">
							<div class="grid-block">
								<h3 class="grid-info"><a href="#">Taking in the View at Big Mountain</a></h3>
								<a href="#" class="wht-button">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="grid-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/adventure-photos/night-sky.jpg">
							<div class="grid-block">
								<h3 class="grid-info"><a href="#">Star-Gazing at the Night Sky</a></h3>
								<a href="#" class="wht-button">Read More</a>
							</div>
							
						</div>
					</li>
				</ul>
				<p class="more-button">
					<a class="button" href="http://tent.academy.red/adventures/">More Adventures</a>
				</p>
			</section>

		</main>
	</div>
</div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>