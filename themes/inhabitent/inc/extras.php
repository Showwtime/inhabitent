<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//  ===================== Hooks added in class May 18/2018 ====================

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


function inhabitent_dynamic_css() {

	//MAKE SURE ITS THE ABOUT PAGE THAT LOADED
	if( ! is_page_template('page-templates/about.php') ){
		return; // <-----if not in about page, get out
	}

	$image = CFS()->get('hero_image');
	// IF WE DONT HAVE AN IMAGE IN THE FIELD, GET OUTTA THERE!
if( ! $image ){ // <-----if no image, get out
	return;
}



	//ADD OUT CUSTOM CSS
$hero_css = "
	.entry-header{
		background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
		url({$image}) no-repeat center bottom;
		background-size: cover, cover;
		height: 100vh;
	}
";

wp_add_inline_style('red-starter-style', $hero_css);
}

add_action('wp_enqueue_scripts', 'inhabitent_dynamic_css');