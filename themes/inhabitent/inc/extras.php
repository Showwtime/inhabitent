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


/**
 * login_head ( action )
 * login_headerurl ( filter )
 * login_headertitle ( filter )
 */

 add_action('login_head', 'inhabitent_login_logo');
	function inhabitent_login_logo(){
	 echo '<style>
	 	#login h1 a {
			 background: url(' . get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-text-dark.svg) no-repeat !important;
			 background-size: 300px 53px !important;
			 width: 300px !important;
			 height: 53px !important;
		 }
	 #login .button.button-primary {
		 background: #248a83;
	 }
	 </style>
	 ';
 }

 add_filter('login_headerurl', 'inhabitent_login_logo_url');
 	function inhabitent_login_logo_url($url){
		return home_url();
	 }


 add_filter('login_headertitle', 'inhabitent_login_title');
	 function inhabitent_login_title(){
		 return 'inhabitent';
	 }

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

/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */
function inhabitent_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;

    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');

        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );

        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );

        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );

        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );

        // create a custom "more" link
        $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more black-btn">Read more &rarr;</a></p>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );

        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );

        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'inhabitent_wp_trim_excerpt' ); 