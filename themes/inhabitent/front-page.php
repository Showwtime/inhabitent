<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<body class="home">
    <header>
		<div class="navbar">
			<ul>
				<li class="menu-item"><a href="#">home</a></li>
				<li class="menu-item"><a href="#">shop</a></li>
				<li class="menu-item"><a href="#">journal</a></li>
				<li class="menu-item"><a href="#">about</a></li>
				<li class="menu-item"><a href="#">find us</a></li>
			</ul>
		</div>
		<div class="header-search">
			<li class="menu-item"><a href="#">search</a></li>
		</div>
	</header>



<div class="site-content">
	<div class="content-area">
		<main class="main-content">

			<section class="banner">
				<img class="logo" src="./assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo">
			</section>


			<section class="product-info container">
				<h2>Shop Stuff</h2>
				<div class="product-type">
					<div class="product-type-wrapper">
						<img src="./assets/images/product-type-icons/do.svg" alt="Do">
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors. </p>
						<p><a href="#" class="button">Do Stuff</a></p>
					</div>

					<div class="product-type-wrapper">
						<img src="./assets/images/product-type-icons/eat.svg" alt="Eat">
						<p>Nothing beats food cooked over a fire. We have all you need for good campoing eats.</p>
						<p><a href="#" class="button">Eat Stuff</a></p>
					</div>

					<div class="product-type-wrapper">
						<img src="./assets/images/product-type-icons/sleep.svg" alt="Sleep">
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<p><a href="#" class="button">Sleep Stuff</a></p>
					</div>

					<div class="product-type-wrapper">
						<img src="./assets/images/product-type-icons/wear.svg" alt="Wear">
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<p><a href="#" class="button">Wear Stuff</a></p>
					</div>

				</div>
			</section>



			<section class="inhabitent-journal">
				<div class="container">
					<h2>Inhabitent Journal</h2>
					<ul>
						<li>
							<div class="thumbnail">
								<img src="./assets/images/blog-photos/van-camper.jpg">
							</div>
							<div class="post-info-wrapper">
								<h3>
									<a href="#">Van Camping Photo Contest</a>
								</h3>
							</div>
							<a href="#" class="blk-button">Read Entry</a>
						</li>
						<li>
							<div class="thumbnail">
								<img src="./assets/images/blog-photos/warm-cocktail.jpg">
							</div>
							<div class="post-info-wrapper">
								<h3>
									<a href="#">Fireside Libations: 3 Warm Cocktail Recipes</a>
								</h3>
							</div>
							<a class="blk-button" href="#">Read Entry</a>
						</li>
						<li>
							<div class="thumbnail">
								<img src="./assets/images/blog-photos/healthy-camp-food.jpg">
							</div>
							<div class="post-info-wrapper">
								<h3>
									<a href="#">How to: Eating Healthy Meals In The Wile</a>
								</h3>
							</div>
							<a class="blk-button" href="#">Read Entry</a>
						</li>
					</ul>
				</div>
			</section>



			<section class="latest-adventures container">
				<h2>Latest Adventures</h2>
				<ul>
					<li>
						<div class="grid-wrapper">
							<!-- <img src="./assets/images/adventure-photos/canoe-girl.jpg"> -->
							<div class="grid-block">
								<h3 class="grid-info"><a href="#">Getting Back to Nature in a Canoe</a></h3>
								<a href="#" class="wht-button">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="grid-wrapper">
							<!-- <img src="./assets/images/adventure-photos/beach-bonfire.jpg"> -->
							<div class="grid-block">
								<h3 class="grid-info"><a href="#">A Night with Friends at the Beach</a></h3>
								<a href="#" class="wht-button">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="grid-wrapper">
							<!-- <img src="./assets/images/adventure-photos/mountain-hikers.jpg"> -->
							<div class="grid-block">
								<h3 class="grid-info"><a href="#">Taking in the View at Big Mountain</a></h3>
								<a href="#" class="wht-button">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="grid-wrapper">
							<!-- <img src="./assets/images/adventure-photos/night-sky.jpg"> -->
							<div class="grid-block">
								<h3 class="grid-info"><a href="#">Star-Gazing at the Night Sky</a></h3>
								<a href="#" class="wht-button">Read More</a>
							</div>
							
						</div>
					</li>
				</ul>
				<p class="more">
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
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>